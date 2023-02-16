app.directive('onlyDigits', function () {
  return {
    require: 'ngModel',
    restrict: 'A',
    link: function (scope, element, attr, ctrl) {
      $(element).keypress(function(e) {
        if(isNaN(String.fromCharCode(e.keyCode))){
          e.preventDefault();
        }
      });
      $(element).focus(function(e) {
        if(ctrl.$modelValue) {
          var digits = ctrl.$modelValue.replace(/[^0-9.-]/g, '');
          ctrl.$setViewValue(digits);
          ctrl.$render();
        }
      });
      $(element).blur(function(e) {
        if(ctrl.$modelValue) {
          var digits = ctrl.$modelValue.replace(/[^0-9.-]/g, '');
          if(digits && digits != 0) {
            if(attr["format"]) {
              ctrl.$setViewValue(numeral(digits).format(attr["format"]));
            } else {
              ctrl.$setViewValue(parseInt(digits, 10));
            }
          } else {
            ctrl.$setViewValue('');
          }
          ctrl.$render();
        }
      });
    }
  };
})
.directive('onlyNumeric', function () {
  return {
    require: 'ngModel',
    restrict: 'A',
    link: function (scope, element, attr, ctrl) {
      $(element).keypress(function (e) {
        var character = String.fromCharCode(e.keyCode);
        var newValue = ctrl.$modelValue + character;
        if (isNaN(newValue)) {
            e.preventDefault();
            return false;
        }
      });
      $(element).focus(function(e) {
        if(ctrl.$modelValue) {
          var digits = ctrl.$modelValue.replace(/[^\d.-]/g, '');
          ctrl.$setViewValue(digits);
          ctrl.$render();
        }
      });
      $(element).blur(function(e) {
        if(ctrl.$modelValue) {
          var digits = ctrl.$modelValue.replace(/[^\d.-]/g, '');
          if(digits && digits != 0) {
            if(attr["format"]) {
              ctrl.$setViewValue(numeral(digits).format(attr["format"]));
            } else {
              ctrl.$setViewValue(parseFloat(digits));
            }
            ctrl.$render();
          } else {
            ctrl.$setViewValue('');
          }
        }
      });
    }
  };
});