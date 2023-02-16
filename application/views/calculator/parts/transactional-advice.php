<div id="b2_tab" class="tab-pane form-horizontal">
  <div class="panel" ng-if="currentTab == 'b2_tab'">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <h3>Your Transactional Advice process</h3>
          <h5 class="text-justify">Now consider a client that is coming to you for advice on one or two simple areas. Your aim in this process is to solve their problem as efficiently as possible.</h5>
        </div>
      </div>
      <div class="row top">
        <div class="col-md-12">
          <div class="table-responsive" style="overflow-x:auto;max-width:100%">
            <table id="b1_table" class="table table-striped table-hover table-condensed table-bordered">
              <thead>
                <tr>
                  <th style="width:35%"><label>&nbsp;</label></th>
                  <th style="width:11%"><label>Advice Providers time (mins)</label></th>
                  <th style="width:11%"><label>Advice Producers</label></th>
                  <th style="width:11%"><label>Admin</label></th>
                  <th style="width:11%"><label>Other costs</label></th>
                  <th style="width:11%"><label></label></th>
                  <th style="width:10%"><label>Notes</label></th>
                  <th style="width:3%"></th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="advice in transactional_advice">
                  <td ng-if="advice.editable_label == 0">
                    {{ advice.label }}
                  </td>
                  <td ng-if="advice.editable_label == 1">
                    <input ng-model="advice.label" class="text-left input_cell btn-block" type="text" />
                  </td>
                  <td>
                    <input ng-model="advice.time" class="text-right input_cell btn-block" data-format="0,0[.]" type="text" only-digits />
                  </td>
                  <td>
                    <input ng-model="advice.producers" class="text-right input_cell btn-block" data-format="0,0[.]" type="text" only-digits />
                  </td>
                  <td>
                    <input ng-model="advice.admin" class="text-right input_cell btn-block" data-format="0,0[.]" type="text" only-digits />
                  </td>
                  <td>
                    <input ng-model="advice.other_cost" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text" only-digits />
                  </td>
                  <td></td>
                  <td>
                    <span ng-if="advice.notes" class="view-note" ng-click="showNote(advice)">View Note</span>
                    <span ng-if="!advice.notes" class="add-note" ng-click="showNote(advice)">Add Note</span>
                  </td>
                  <td ng-if="advice.editable_label == 1" class="text-center">
                    <button ng-click="deleteData('transactional_advice', $index)" type="button" class="btn btn-danger btn-xs delete_b1 text-center">
                      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <label for="">TOTAL mins</label>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalMinutes('transactional_advice', 'time') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalMinutes('transactional_advice', 'producers') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalMinutes('transactional_advice', 'admin') }}</span>
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getAllServiceTotalMinutes('transactional_advice') }}</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="">TOTAL hours</label>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalHours('transactional_advice', 'time') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalHours('transactional_advice', 'producers') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalHours('transactional_advice', 'admin') }}</span>
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getAllServiceTotalHours('transactional_advice') }}</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="">TOTAL cost</label>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalCosts('transactional_advice', 'time') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalCosts('transactional_advice', 'producers') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalCosts('transactional_advice', 'admin') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getServiceTotalOtherCosts('transactional_advice') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ totalNotIncludeGST('transactional_advice') }}</span>
                  </td>
                  <td colspan="2" class="text-center">Not including GST</td>
                </tr>
                <tr>
                  <td colspan="8">
                    <button ng-click="addData('transactional_advice')" type="button" class="btn btn-success btn-sm add_b1 text-center">
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