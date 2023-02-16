<div id="c1_tab" class="tab-pane form-horizontal">
    <div class="panel" ng-if="currentTab == 'c1_tab'">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <h3>1-to-1 Services</h3>
              <h5>Let's start with the components of an ongoing service offer that relate to your 1-to-1 engagement of your clients. Consider the amount of time taken over the course of the</h5>
            </div>
          </div>
          <div class="row top">
            <div class="col-md-12">
              <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                <table class="table table-striped table-hover table-condensed table-bordered">
                  <thead>
                      <tr>
                        <th style="width:7%"><label>Is this something you'd like to consider for your own offer?</label></th>
                        <th style="width:30%"><label>1-to 1 Service offerings</label></th>
                        <th style="width:10%"><label>Advice Providers time (mins)</label></th>
                        <th style="width:10%"><label>Advice Producers</label></th>
                        <th style="width:10%"><label>Admin</label></th>
                        <th style="width:10%"><label>Other costs</label></th>
                        <th style="width:10%"><label>Service fee (not incl. GST)</label></th>
                        <th style="width:10%"><label>Notes</label></th>
                        <th style="width:3%"></th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="service in one_to_one_service" class="b3_row">
                      <td class="text-center">
                        <input ng-model="service.consider_offer" ng-true-value="'1'" ng-false-value="'0'" class="checkbox_b3 text-center input_cell" type="checkbox" />
                      </td>
                      <td>
                        <input ng-model="service.label" class="text-left btn-block" type="text" />
                      </td>
                      <td>
                        <input ng-model="service.time" class="text-right input_cell btn-block" data-format="0,0[.]" type="text" only-digits />
                      </td>
                      <td>
                        <input ng-model="service.producers" class="text-right input_cell btn-block" data-format="0,0[.]" type="text" only-digits />
                      </td>
                      <td>
                        <input ng-model="service.admin" class="text-right input_cell btn-block" data-format="0,0[.]" type="text" only-digits />
                      </td>
                      <td>
                        <input ng-model="service.other_cost" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text" only-digits />
                      </td>
                      <td>
                        <span class="text-right formula_cell btn-block">{{ getServiceFeeNoGST(service) }}</span>
                      </td>
                      <td>
                        <span ng-if="service.notes" class="view-note" ng-click="showNote(service)">View Note</span>
                        <span ng-if="!service.notes" class="add-note" ng-click="showNote(service)">Add Note</span>
                      </td>
                      <td class="text-center">
                        <button ng-click="deleteData('one_to_one_service', $index)" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="5">
                          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="8">
                        <button ng-click="addData('one_to_one_service')" type="button" class="btn btn-success btn-sm add_b3 text-center">
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