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
    window.location.href = siteUrl + '/main/show/' + list.md_id;
  }

  $scope.deleteList = function(list) {
    window.location.href = siteUrl + '/main/delete/' + list.md_id;
  }

  function getModelLists() {
    $scope.requesting = true;
    var params = { file_name: angular.copy($scope.file_name) };
    var request = $.get(siteUrl + '/main/getLists', params, null, 'json');
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