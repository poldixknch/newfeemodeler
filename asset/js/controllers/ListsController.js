app.controller('ListsController', function($scope, $timeout) {
  var siteUrl = angular.copy(window.config.siteUrl);

  $scope.lists = [];
  $scope.requesting = false;
  $scope.file_name = '';

  $scope.init = function() {
    getModelLists();
  }

  $scope.filterLists = function() {
    getModelLists();
  }

  $scope.resetFilter = function() {
    $scope.file_name = '';
    getModelLists();
  }

  $scope.loadList = function(list) {
    window.location.href = siteUrl + 'main/show/' + list.md_id;
  }

  $scope.deleteList = function(list) {
    window.location.href = siteUrl + 'main/delete/' + list.md_id;
  }

  $scope.copyModel = function(list, e) {
    if (list.copy_name) {
      $.get(siteUrl + 'main/getDatas/' + list.md_id, { no_md: true }, null, 'json')
        .done(function(response) {
          if(response.success) {
            var copyData = {};
            var data = angular.copy(response.data);
            copyData.file_name = list.copy_name;
            // team datas
            copyData.team = angular.copy(default_team);
            Object.keys(data.td).forEach(function(key) {
              copyData.team[key].datas = angular.copy(data.td[key]);
            });
    
            // financial target datas
            copyData.financial_target = angular.copy(data.ft);
    
            // standard advice datas
            
              copyData.standard_advice = angular.copy(data.sad);
          
    
            // transactional advice datas
          
              copyData.transactional_advice = angular.copy(data.tad);
          
    
            // strategy variation datas
          
              copyData.strategy_variation = angular.copy(data.svd);
           
    
            // one to one service datas
           
              copyData.one_to_one_service = angular.copy(data.oos);
           
    
            // one to many service datas
         
              copyData.one_to_many_service = angular.copy(data.oms);
           
    
            // strategy management datas
          
              copyData.strategy_management = angular.copy(data.smd);
            
    
            // service name datas
         
              copyData.service_names = [
                { value: 'Platinum' },
                { value: 'Gold' },
                { value: 'Enter Name' },
                { value: 'Enter Name' },
                { value: 'Enter Name' },
                { value: 'Enter Name' },
                { value: 'Enter Name' }
              ];
              copyData.service_names = copyData.service_names.map(function(e, idx) {
                if(data.sn[idx]) {
                  e.value = angular.copy(data.sn[idx]);
                }
                return e;
              });
            
    
            //other datas
            copyData.other_datas = angular.copy(data.od);

            copyModelData(copyData);
          } else {
            alert("An error occur while loading data. Please reload the page or ask support.");
          }
        })
        .fail(function() {
          alert("An error occur while loading data. Please reload the page or ask support.");
        });
    } else {
      $(e.target).parent().parent().children("input").focus();
    }
  }

  function copyModelData(data) {
    var service_names = data.service_names.map(function(e) {
      return e.value;
    });
    var postData = {
      file_name: data.file_name,
      team: data.team,
      other: data.other_datas,
      financial_target: data.financial_target,
      standard_advice: data.standard_advice.map(function(e) {
        var advice = angular.copy(e);
        delete advice["$$hashKey"];
        return advice;
      }),
      transactional_advice: data.transactional_advice.map(function(e) {
        var advice = angular.copy(e);
        delete advice["$$hashKey"];
        return advice;
      }),
      strategy_variation: data.strategy_variation.map(function(e) {
        var strategy = angular.copy(e);
        delete strategy["$$hashKey"];
        return strategy;
      }),
      one_to_one_service: data.one_to_one_service.map(function(e) {
        var service = angular.copy(e);
        delete service["$$hashKey"];
        return service;
      }),
      one_to_many_service: data.one_to_many_service.map(function(e) {
        var service = angular.copy(e);
        delete service["$$hashKey"];
        return service;
      }),
      strategy_management: data.strategy_management.map(function(e) {
        var strategy = angular.copy(e);
        delete strategy["$$hashKey"];
        return strategy;
      }),
      service_names: service_names
    };
    var saving = $.post(siteUrl + 'main/saveData', postData, null, 'json');

    saving.done(function(response) {
       window.location.href = siteUrl + 'main/show/' + response.md_id;
    });

    saving.fail(function() {
      alert("An error occur while copying data. Please reload the page or ask support.");
    });
  }

  function getModelLists() {
    $scope.requesting = true;
    var params = { file_name: angular.copy($scope.file_name) };
    var request = $.get(siteUrl + 'main/getLists', params, null, 'json');
    request.done(function(response) {
      $scope.requesting = false;
      $scope.lists = angular.copy(response.datas);
      $scope.$digest();
    });

    request.fail(function() {
      $scope.requesting = false;
      alert("An error occur while loading data. Please reload the page or ask support.");
    });
  }
  
  $scope.init();
});