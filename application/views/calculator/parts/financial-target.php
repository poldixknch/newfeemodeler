<div id="a2_tab" class="tab-pane form-horizontal">
  <div class="panel" ng-if="currentTab == 'a2_tab'">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <h3>Now let's talk about your financial targets </h3>
          <h5>This will form the basis on which we create your pricing model. So, it's best not to underestimate here.</h5>
        </div>
      </div>
      <div class="box top">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label class="col-sm-6">Total expenses from last year</label>
              <div class="col-sm-3 col-sm-offset-3">
                <input ng-model="financial_target.expenses_last_year" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text" only-numeric />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-6">Do you foresee these changing greatly next year?</label>
              <div class="col-sm-3 col-sm-offset-3">
                <select ng-model="financial_target.foresee_next_year" dir="rtl" class="text-right input_cell btn-block text-right">
                  <option value="No">No</option>
                  <option value="Yes">Yes</option>
                </select>
              </div>
            </div>
            <div ng-if="financial_target.foresee_next_year == 'Yes'" class="form-group percent-wrap">
              <label class="col-sm-6">By what % do you expect your expenses to grow or fall next year</label>
              <div class="col-sm-3 col-sm-offset-3">
                <input ng-model="financial_target.percent_expenses_grow" class="text-right input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-6">Total Employment costs</label>
              <div class="col-sm-3 col-sm-offset-3">
                <span class="text-right formula_cell btn-block">{{ getTotalEmploymentCosts() }}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-6">Total non-employment costs</label>
              <div class="col-sm-3 col-sm-offset-3">
                <span class="text-right formula_cell btn-block">{{ getTotalNonEmploymentCosts() }}</span>
              </div>
            </div>
            <div class="form-group  percent-wrap">
              <label class="col-sm-6">Target profit margin for the coming year?</label>
              <div class="col-sm-3 col-sm-offset-3">
                <input ng-model="financial_target.profit_margin_coming_year" class="text-right input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
              </div>
            </div>
            <div class="form-group">&nbsp;</div>
            <div class="form-group top space">
              <label class="col-sm-6">TARGET REVENUE FOR THE COMING YEAR</label>
              <div class="col-sm-3 col-sm-offset-3">
                <span class="text-right formula_cell btn-block">{{ getTargetRevenue() }}</span>
              </div>
            </div>
            <h5>Don't worry if this isn't your actual number, though it's what we'll use to work out the pricing model</h5>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>