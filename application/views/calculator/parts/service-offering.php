<div id="d1_tab" class="tab-pane form-horizontal">
  <div class="panel" ng-if="currentTab == 'd1_tab'">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <h3>Defining your service offerings</h3>
          <h5>Now it's time to decide what you want to have in each of your service offerings. Go through the list and decide how many times per year you'd like to include in each offer. The numbers will update as you go, so you can consider the interplay between all of the offerings</h5>
        </div>
      </div>
      <div class="row top">
        <div class="col-md-12">
          <div class="table-responsive" style="overflow-x:auto;max-width:100%">
            <table id="d1_table" class="table table-striped table-hover table-condensed table-bordered">
              <thead>
                <tr>
                  <th style="width:300px"><label>Give each service a name</label></th>
                  <th ng-repeat="service_name in service_names" style="width:120px">
                    <input ng-model="service_name.value" style="width:100%" class="text-center" type="text" />
                  </th>
                </tr>
              </thead>
              <tbody id="d1_list">
                <tr id="d1_row4">
                  <td><label>Running total</label></td>
                  <td ng-repeat="service in service_names">
                    <span class="text-right formula_cell btn-block">{{ getTotalServiceOffering('service_' + ($index + 1)) }}</span>
                  </td>
                </tr>
                <tr>
                  <td colspan="8">&nbsp;</td>
                </tr>
                <tr ng-repeat="service in one_to_one_service" ng-show="service.consider_offer == 1" class="d1_row">
                  <td>
                    <span>{{ service.label }}</span>
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_1" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_2" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_3" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_4" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_5" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_6" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_7" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                </tr>
                <tr>
                  <td colspan="8">&nbsp;</td>
                </tr><tr ng-repeat="service in one_to_many_service" ng-show="service.consider_offer == 1" class="d1_row">
                  <td>
                    <span>{{ service.label }}</span>
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_1" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_2" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_3" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_4" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_5" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_6" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                  <td>
                    <input ng-model="service.service_offering.service_7" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text" only-numeric />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>