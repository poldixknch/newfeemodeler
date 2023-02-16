<div id="b3_tab" class="tab-pane form-horizontal">
  <div class="panel" ng-if="currentTab == 'b3_tab'">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <h3>Strategy Variations</h3>
          <h5>Now we've considered your core processes, we now need to think about variations. Not all clients will have the same issues, so it's important we consider those differences</h5>
        </div>
      </div>
      <div class="row top">
        <div class="col-md-12">
          <div class="table-responsive" style="overflow-x:auto;max-width:100%">
            <table class="table table-striped table-hover table-condensed table-bordered">
              <thead>
                  <tr>
                    <th style="width:7%"><label>Is this an area you look at?</label></th>
                    <th style="width:30%"><label>Strategic Elements</label></th>
                    <th style="width:10%"><label>Advice Providers time (mins)</label></th>
                    <th style="width:10%"><label>Advice Producers</label></th>
                    <th style="width:10%"><label>Admin</label></th>
                    <th style="width:10%"><label>Other costs</label></th>
                    <th style="width:10%"><label>Additional fees (Not incl. GST)</label></th>
                    <th style="width:10%"><label>Notes</label></th>
                    <th style="width:3%"></th>
                  </tr>
              </thead>
              <tbody>
                <tr ng-repeat="strategy in strategy_variation" class="b3_row">
                  <td class="text-center">
                    <input ng-model="strategy.area_look_at" ng-true-value="'1'" ng-false-value="'0'" class="checkbox_b3 text-center input_cell" type="checkbox" />
                  </td>
                  <td>
                    <input ng-model="strategy.label" class="text-left btn-block" type="text" />
                  </td>
                  <td>
                    <input ng-model="strategy.time" class="text-right input_cell btn-block" data-format="0,0[.]" type="text" only-digits />
                  </td>
                  <td>
                    <input ng-model="strategy.producers" class="text-right input_cell btn-block" data-format="0,0[.]" type="text" only-digits />
                  </td>
                  <td>
                    <input ng-model="strategy.admin" class="text-right input_cell btn-block" data-format="0,0[.]" type="text" only-digits />
                  </td>
                  <td>
                    <input ng-model="strategy.other_cost" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text" only-digits />
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getAddFeeNoGST(strategy) }}</span>
                  </td>
                  <td>
                    <span ng-if="strategy.notes" class="view-note" ng-click="showNote(strategy)">View Note</span>
                    <span ng-if="!strategy.notes" class="add-note" ng-click="showNote(strategy)">Add Note</span>
                  </td>
                  <td class="text-center">
                    <button ng-click="deleteData('strategy_variation', $index)" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="5">
                      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="8">
                    <button ng-click="addData('strategy_variation')" type="button" class="btn btn-success btn-sm add_b3 text-center">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row
                    </button>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>