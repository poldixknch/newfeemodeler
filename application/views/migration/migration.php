<div class="container" ng-app="app" ng-controller="MigrationController" ng-cloak>
    <div class="row">
        <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <button ng-click="onStartMigration()" ng-if="!startMigration">Start Migration</button>
                        <span ng-if="requestRemainingMigration">initializing migration...</span>
                        <div ng-if="!requestRemainingMigration && startMigration">
                            <span ng-if="!migrationDone">migrated {{ migrated }} of {{ remainingMigration }} total migration</span>
                            <span ng-if="migrationDone">data migrated</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>