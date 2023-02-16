app.controller('CalculatorController', function($scope, $timeout) {
  var siteUrl = angular.copy(window.config.siteUrl)+'/';
  $scope.data_id = angular.copy(window.data.data_id);

  $scope.file_name = "";
  
  $scope.team = angular.copy(default_team);
  $scope.financial_target = angular.copy(default_financial_target);
  $scope.standard_advice = angular.copy(default_standard_advice);
  $scope.transactional_advice= angular.copy(default_transactional_advice);
  $scope.strategy_variation = angular.copy(default_strategy_variation);
  $scope.one_to_one_service = angular.copy(default_one_to_one_service);
  $scope.one_to_many_service = angular.copy(default_one_to_many_service);
  $scope.strategy_management = angular.copy(default_strategy_management);
  $scope.other_datas = angular.copy(default_other_data);

  $scope.service_names = [
    { value: 'Platinum' },
    { value: 'Gold' },
    { value: 'Enter Name' },
    { value: 'Enter Name' },
    { value: 'Enter Name' },
    { value: 'Enter Name' },
    { value: 'Enter Name' }
  ];

  $scope.currentTab = "a1_tab";

  $(document).on("click", ".tab_id", function(e) {
    var tab = $(this).attr("href").replace("#", "");
    $scope.currentTab = tab;
    $scope.$digest();
    $(".input_cell").trigger("blur");
  });


  $scope.init = function () {
    if ($scope.data_id) {
      getModelData();
      return;
    }
    initializeForm();
  }

  $scope.addTeam = function(key) {
    var data = angular.copy(default_team_data);
    data.percent_related_work = angular.copy($scope.team[key].defaultPercentage);
    $scope.team[key].datas.push(angular.copy(data));
  }

  $scope.deleteTeam = function(key, idx) {
    $scope.team[key].datas.splice(idx, 1);
  }

  $scope.getClientChargeable = function(teamData, numeric) {
    if(!teamData.base_salary || !teamData.name) {
      if(numeric) {
        return 0;
      }
      return "";
    }
    var client_chargeable = (((48 - (onlyNumeric(teamData.annual_leave) || 0)) * onlyNumeric(teamData.hours_work_per_week)) *   toPercentage(teamData.percent_related_work));
    if(numeric) {
      return client_chargeable;
    }
    return numeral(client_chargeable).format("0,0[.]00");
  }

  $scope.totalTeamCost = function(teamKey, numeric) {
    if($scope.other_datas.hasOwnProperty('bonus_paid_adviser')) {
      var totalSalary = $scope.team[teamKey].datas.reduce(function(total, team) {
        var baseSalary = onlyNumeric(team.base_salary || '0');
          total += baseSalary;
        return total;
      }, 0);
      var totalBonus = onlyNumeric($scope.other_datas["bonus_paid_" + teamKey] || '0');
      var otherCosts = onlyNumeric($scope.other_datas["other_cost_" + teamKey] || '0');
      var totalCost = ((totalSalary + totalBonus) * 1.1) + otherCosts;
      if(numeric) {
        return totalCost;
      }
      return numeral(totalCost).format("$ 0,0");
    }
    if(numeric) {
      return 0;
    }
    return "";
  }

  $scope.totalTeamCalcs = function(teamKey) {
    var teamDatas = angular.copy($scope.team[teamKey].datas);
    var total = teamDatas.reduce(function(calcTotal, curData) {
      if(curData.hours_work_per_week && curData.annual_leave) {
        var hoursPerWeek = onlyNumeric(curData.hours_work_per_week);
        var annualLeave = onlyNumeric(curData.annual_leave);
        var calc = hoursPerWeek * (48 - annualLeave);
        calcTotal += calc;
      }
      return calcTotal;
    }, 0);
    return total;
  }

  $scope.totalTeamChargeable = function(teamKey) {
    var teamDatas = angular.copy($scope.team[teamKey].datas);
    var total = teamDatas.reduce(function(chargeTotal, curData) {
      var subTotal = $scope.getClientChargeable(curData, true);
      chargeTotal += subTotal;
      return chargeTotal;
    }, 0);
    return total;
  }

  $scope.totalTeamPercentage = function(teamKey) {
    var teamChargeable = $scope.totalTeamChargeable(teamKey);
    var teamCalcs = $scope.totalTeamCalcs(teamKey);
    return teamChargeable / teamCalcs;
  }

  $scope.getProjectedExpenses = function(numeric) {
    var projectedExpenses = 0;
    if($scope.financial_target.expenses_last_year) {
      projectedExpenses = angular.copy(onlyNumeric($scope.financial_target.expenses_last_year));
      if($scope.financial_target.foresee_next_year == 'Yes') {
        projectedExpenses = (projectedExpenses * (1 + toPercentage($scope.financial_target.percent_expenses_grow))).toFixed(2);
      }
    }
    if(numeric) {
      return projectedExpenses;
    }
    return numeral(projectedExpenses).format("$ 0,0[.]00");
  }

  $scope.getTotalEmploymentCosts = function(numeric) {
    var teams = ['adviser', 'paraplanner', 'administration_staff'];
    var totalEmploymentCosts = teams.reduce(function(total, team) {
      total += $scope.totalTeamCost(team, true);
      return total;
    }, 0);
    if($scope.financial_target.foresee_next_year == 'Yes') {

      totalEmploymentCosts = totalEmploymentCosts * (1 + toPercentage($scope.financial_target.percent_expenses_grow));
    }
    if(numeric) {
      return totalEmploymentCosts;
    }
    return numeral(totalEmploymentCosts).format("$ 0,0[.]00");
  }

  $scope.getTotalNonEmploymentCosts = function(numeric) {
    var getTotalNonEmploymentCosts = parseFloat($scope.getProjectedExpenses(true) - $scope.getTotalEmploymentCosts(true));
    if(numeric) {
      return getTotalNonEmploymentCosts;
    }
    return numeral(getTotalNonEmploymentCosts).format("$ 0,0[.]00");
  }

  $scope.getTargetRevenue = function() {
    var targetRevenue = parseFloat($scope.getProjectedExpenses(true)) / (1 - toPercentage($scope.financial_target.profit_margin_coming_year));
    return numeral(targetRevenue).format("$ 0,0");
  }

  $scope.getBusinessCost = function(teamKey, numeric) {
    var businessCost = 0;
    var totalCost = $scope.totalTeamCost(teamKey, true);
    var totalTeamCalcs = $scope.totalTeamCalcs(teamKey);
    businessCost = (totalCost / totalTeamCalcs);
    if($scope.financial_target.foresee_next_year == 'Yes') {
      businessCost = businessCost * (1 + toPercentage($scope.financial_target.percent_expenses_grow));
    }
    if(numeric) {
      return businessCost;
    }
    return numeral(businessCost).format("$0,0");
  }

  $scope.getEmployeeCharge = function(teamKey, numeric) {
    var businessCost = $scope.getBusinessCost(teamKey, true);
    var teamPercentage = $scope.totalTeamPercentage(teamKey);
    var employeeCharge = businessCost / teamPercentage;
    if(numeric) {
      return employeeCharge;
    }
    return numeral(employeeCharge).format("$0,0");
  }

  $scope.getOverheads = function(numeric) {
    var nonEmployementCosts = $scope.getTotalNonEmploymentCosts(true);
    var totalChargeableHours = Object.keys($scope.team).reduce(function(total, key) {
      var dataInfo = angular.copy($scope.team[key]);
      var teamKeyTotal = $scope.totalTeamChargeable(key);
      total += teamKeyTotal;
      return total;
    }, 0);
    var overHeads = nonEmployementCosts / totalChargeableHours;
    if(numeric) {
      return overHeads;
    }
    return numeral(overHeads).format("$0,0");
  }

  $scope.getChargeOutRate = function(teamKey, numeric) {
    var employeeCharge = $scope.getEmployeeCharge(teamKey, true);
    var overHeads = $scope.getOverheads(true);
    var chargeOut = (employeeCharge + overHeads) / (1 - toPercentage($scope.financial_target.profit_margin_coming_year));
    if(numeric) {
      return chargeOut;
    }
    return numeral(chargeOut).format("$0,0");
  }

  $scope.getServiceTotalMinutes = function(serviceKey, key, numeric) {
    var minutes = $scope[serviceKey].reduce(function(totalMins, curData) {
      totalMins += onlyNumeric(curData[key]);
      return totalMins;
    }, 0);
    if(numeric) {
      return minutes;
    }
    return numeral(minutes).format("0,0");
  }

  $scope.getAllServiceTotalMinutes = function(serviceKey, numeric) {
    var keys = ['time', 'producers', 'admin'];
    var serviceTotalMinutes = keys.reduce(function(subTotal, key) {
      var totalMinutes = $scope.getServiceTotalMinutes(serviceKey, key, true);
      subTotal += totalMinutes;
      return subTotal;
    }, 0);
    if(numeric) {
      return serviceTotalMinutes;
    }
    return numeral(serviceTotalMinutes).format("0,0");
  }

  $scope.getServiceTotalHours = function(serviceKey, key, numeric) {
    var totalMins = $scope.getServiceTotalMinutes(serviceKey, key, true);
    var hours = totalMins / 60;
    if(numeric) {
      return hours;
    }
    return numeral(hours).format("0,0.0");
  }

  $scope.getAllServiceTotalHours = function(serviceKey, numeric) {
    var keys = ['time', 'producers', 'admin'];
    var serviceTotalHours = keys.reduce(function(subTotal, key) {
      var totalHours = $scope.getServiceTotalHours(serviceKey, key, true);
      subTotal += totalHours;
      return subTotal;
    }, 0);
    if(numeric) {
      return serviceTotalHours;
    }
    return numeral(serviceTotalHours).format("0,0.0");
  }

  $scope.getServiceTotalCosts = function(serviceKey, key, numeric) {
    var totalHours = $scope.getServiceTotalHours(serviceKey, key, true);
    var hourlyRates = 0;
    if(key == "time") {
      hourlyRates = $scope.getChargeOutRate('adviser', true);
    } else if(key == "producers") {
      hourlyRates = $scope.getChargeOutRate('paraplanner', true);
    } else if(key == "admin") {
      hourlyRates = $scope.getChargeOutRate('administration_staff', true);
    }
    var totalCosts = totalHours * hourlyRates;
    if(numeric) {
      return totalCosts;
    }
    return numeral(totalCosts).format("$0,0");
  }

  $scope.getServiceTotalOtherCosts = function(serviceKey, numeric) {
    var costs = $scope[serviceKey].reduce(function(otherCosts, curData) {
      otherCosts += onlyNumeric(curData.other_cost);
      return otherCosts;
    }, 0);
    var totalCosts = costs / (1 - toPercentage($scope.financial_target.profit_margin_coming_year));
    if(numeric) {
      return totalCosts;
    }
    return numeral(totalCosts).format("$0,0");
  }

  $scope.totalNotIncludeGST = function(serviceKey, numeric) {
    var keys = ['time', 'producers', 'admin'];
    var totalServiceCosts = keys.reduce(function(subTotal, key) {
      var serviceCost = $scope.getServiceTotalCosts(serviceKey, key, true);
      subTotal += serviceCost;
      return subTotal;
    }, 0);
    var otherCost = $scope.getServiceTotalOtherCosts(serviceKey, true);
    var totalCost = totalServiceCosts +  otherCost;
    if(numeric) {
      return totalCost;
    }
    return numeral(totalCost).format("$0,0");
  }

  $scope.getAddFeeNoGST = function(variation, numeric) {
    var addFee = 0;
    if(variation.area_look_at == "1") {
      var adviserFee = onlyNumeric(variation.time) * ( $scope.getChargeOutRate('adviser', true) / 60);
      var paraplannerFee = onlyNumeric(variation.producers) * ($scope.getChargeOutRate('paraplanner', true) / 60);
      var adminFee = onlyNumeric(variation.admin) * ($scope.getChargeOutRate('administration_staff', true)/ 60);
      var otherFee = onlyNumeric(variation.other_cost) / (1 - toPercentage($scope.financial_target.profit_margin_coming_year));
      addFee = adviserFee + paraplannerFee + adminFee + otherFee;
    }
    if(numeric) {
      return addFee;
    }
    return numeral(addFee).format("$0,0");
  }

  $scope.getServiceFeeNoGST = function(service, numeric) {
    var serviceFee = 0;
    if(service.consider_offer == "1") {
      var adviserFee = onlyNumeric(service.time) * ( $scope.getChargeOutRate('adviser', true) / 60);
      var paraplannerFee = onlyNumeric(service.producers) * ($scope.getChargeOutRate('paraplanner', true) / 60);
      var adminFee = onlyNumeric(service.admin) * ($scope.getChargeOutRate('administration_staff', true)/ 60);
      var otherFee = onlyNumeric(service.other_cost) / (1 - toPercentage($scope.financial_target.profit_margin_coming_year));
      var numPeople = service.people || 1;
      serviceFee = (adviserFee + paraplannerFee + adminFee + otherFee) / numPeople;
    }
    if(numeric) {
      return serviceFee;
    }
    return numeral(serviceFee).format("$0,0[.]00");
  }

  $scope.calculateServiceOffering = function(serviceKey, service, numeric) {
    var serviceVal = onlyNumeric(service.service_offering[serviceKey]);
    var serviceFeeNoGST = $scope.getServiceFeeNoGST(service, true);
    var serviceOffering = serviceVal * serviceFeeNoGST;
    if(numeric) {
      return serviceOffering;
    }
    return numeral(serviceOffering).format("$0,0");
  }

  $scope.getTotalServiceOffering = function(serviceKey, numeric) {
    var one_one_serviceOffering = $scope.one_to_one_service.reduce(function(total, service) {
      var subTotal = $scope.calculateServiceOffering(serviceKey, service, true);
      total += subTotal;
      return total;
    }, 0);
    var one_many_serviceOffering = $scope.one_to_many_service.reduce(function(total, service) {
      var subTotal = $scope.calculateServiceOffering(serviceKey, service, true);
      total += subTotal;
      return total;
    }, 0);
    var totalServiceOffering = one_one_serviceOffering + one_many_serviceOffering;
    if(numeric) {
      return totalServiceOffering;
    }
    return numeral(totalServiceOffering).format("$0,0");
  }

  $scope.addData = function(key) {
    var add = angular.copy(add_advice);
    if(key == "strategy_variation") {
      add = angular.copy(add_strategy_variation);
    }
    if(key == "one_to_one_service") {
      add = angular.copy(Object.assign({}, add_one_to_one_service, { service_offering: {
        service_1: '',
        service_2: '',
        service_3: '',
        service_4: '',
        service_5: '',
        service_6: '',
        service_7: ''
      } }));
    }
    if(key == "one_to_many_service") {
      add = angular.copy(Object.assign({}, add_one_to_many_service, { service_offering: {
        service_1: '',
        service_2: '',
        service_3: '',
        service_4: '',
        service_5: '',
        service_6: '',
        service_7: ''
      } }));
    }
    if(key == "strategy_management") {
      add = angular.copy(add_strategy_management);
    }
    $scope[key].push(add);
  }

  $scope.deleteData = function(key, idx) {
    $scope[key].splice(idx, 1);
  }

  $scope.saveData = function() {
    var postData = {
      file_name: $scope.file_name,
      team: $scope.team,
      other: $scope.other_datas,
      financial_target: $scope.financial_target,
      standard_advice: $scope.standard_advice.map(function(e) {
        var advice = angular.copy(e);
        delete advice["$$hashKey"];
        return advice;
      }),
      transactional_advice: $scope.transactional_advice.map(function(e) {
        var advice = angular.copy(e);
        delete advice["$$hashKey"];
        return advice;
      }),
      strategy_variation: $scope.strategy_variation.map(function(e) {
        var strategy = angular.copy(e);
        delete strategy["$$hashKey"];
        return strategy;
      }),
      one_to_one_service: $scope.one_to_one_service.map(function(e) {
        var service = angular.copy(e);
        delete service["$$hashKey"];
        return service;
      }),
      one_to_many_service: $scope.one_to_many_service.map(function(e) {
        var service = angular.copy(e);
        delete service["$$hashKey"];
        return service;
      }),
      strategy_management: $scope.strategy_management.map(function(e) {
        var strategy = angular.copy(e);
        delete strategy["$$hashKey"];
        return strategy;
      })
    };
    var saving = $.post(siteUrl + '/main/insertData', postData, null, 'json');

    saving.done(function(response) {
      console.log("response", response);
    });

    saving.fail(function() {
      alert("An error occur while loading data. Please reload the page or ask support.");
    });
  }

  function getModelData() {
    $.get(siteUrl + 'main/getDatas/' + $scope.data_id, null, null, 'json').done(function(response) {
      if(response.success) {
        var data = angular.copy(response.data);
        $scope.file_name = data.file_name;
        // team datas
        Object.keys(data.td).forEach(function(key) {
          $scope.team[key].datas = angular.copy(data.td[key]);
        });

        // financial target datas
        $scope.financial_target = angular.copy(data.ft);

        // standard advice datas
        if(data.sad.length > 0) {
          $scope.standard_advice = angular.copy(data.sad);
        }

        // transactional advice datas
        if(data.tad.length > 0) {
          $scope.transactional_advice = angular.copy(data.tad);
        }

        // strategy variation datas
        if(data.svd.length > 0) {
          $scope.strategy_variation = angular.copy(data.svd);
        }

        // one to one service datas
        if(data.oos.length > 0) {
          $scope.one_to_one_service = angular.copy(data.oos);
        }

        // one to many service datas
        if(data.oms.length > 0) {
          $scope.one_to_many_service = angular.copy(data.oms);
        }

        // strategy management datas
        if(data.smd.length > 0) {
          $scope.strategy_management = angular.copy(data.smd);
        }

        //other datas
        $scope.other_datas = angular.copy(data.od);
        initializeForm();
        $timeout(function() {
          $(".input_cell").trigger("blur");
        });
      } else {
        alert("An error occur while loading data. Please reload the page or ask support.");
      }
      $scope.$digest();
    }).fail(function() {
      alert("An error occur while loading data. Please reload the page or ask support.");
    });
  }

  function initializeForm() {
    initYourTeam();
  }

  function initYourTeam() {
    $scope.team = Object.entries($scope.team).reduce(function(retData, [key, value]) {
      if(value.datas.length < 3) {
        var datas = angular.copy(value.datas);
        for(var i = datas.length; i < 3; i++) {
          var data = angular.copy(default_team_data);
          data.percent_related_work = angular.copy(value.defaultPercentage);
          datas.push(data);
        }
        value.datas = angular.copy(datas);
      }
      retData[key] = angular.copy(value);
      return retData;
    }, {});
  }

  function initData(key, default_data) {
    if($scope[key].length == 0) {
      $scope[key] = angular.copy(default_data);
    }
  }

  function toPercentage(val) {
    return (0.01 * onlyNumeric(val || '0'));
  } 

  function onlyNumeric(text) {
    return parseFloat((text || '0').replace(/[^\d.-]/g, ''));
  }

  $scope.init();
});