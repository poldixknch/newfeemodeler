app.controller('MigrationController', function($scope, $timeout) {
    var siteUrl = angular.copy(window.config.siteUrl);
    $scope.startMigration = false;
    $scope.migrated = 0;
    $scope.remainingMigration = 0;
    $scope.requestRemainingMigration = false;
    $scope.migrationDone = false;

    $scope.onStartMigration = function() {
        $scope.startMigration = true;
        getRemainingMigration();
    }

    function migrate() {
        var limit = getRandomInt(2, 5);
        var request = $.get(siteUrl + 'migration/start/' + limit, null, null, 'json');
        request.done(function(response) {
            $scope.migrated += angular.copy(parseInt(response.migrated, 10));
            if($scope.migrated < $scope.remainingMigration) {
                migrate();
            } else {
                $scope.migrationDone = true;
            }
            $scope.$digest();
        });

        request.fail(function() {
            alert("An error occur while loading data. Please reload the page.");
        });
    }

    function getRemainingMigration() {
        $scope.requestRemainingMigration = true;
        var request = $.get(siteUrl + 'migration/remaining', null, null, 'json')
        request.done(function(response) {
            $scope.requestRemainingMigration = false;
            $scope.migrated = 0;
            $scope.remainingMigration = angular.copy(response.remaining);
            $scope.$digest();
            migrate();
        });

        request.fail(function(response) {
            $scope.requestRemainingMigration = false;
            $scope.startMigration = false;
            alert("An error occur while loading data. Please reload the page or ask support.");
            $scope.$digest();
        });
    }

    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min) + min); //The maximum is exclusive and the minimum is inclusive
      }
});