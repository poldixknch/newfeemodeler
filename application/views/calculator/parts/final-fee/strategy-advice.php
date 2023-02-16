<div class="row top">
  <div class="col-sm-12">
    <label>Strategic advice (to be added to the minimums above, inclusive of GST)</label>
    <div ng-repeat="strategy in strategy_variation" ng-if="strategy.area_look_at == '1'" class="form-group">
        <div class="col-sm-8">
          <span style="margin-bottom:5px;" class="text-left formula_cell btn-block">{{ strategy.label }}</span>
        </div>
        <div class="col-sm-4">
          <span class="text-right formula_cell btn-block">{{ getAddFeeNoGST(strategy) }}</span>
        </div>
    </div>
  </div>
</div>