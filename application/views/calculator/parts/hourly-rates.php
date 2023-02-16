<div id="a3_tab" class="tab-pane form-horizontal<?php echo !in_array($this->session->userdata('role'), ['admin', 'principal']) ? ' active' : ''?>">
  <div class="panel" ng-if="currentTab == 'a3_tab'">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <h3>Your Hourly Rates</h3>
          <h5>This is what you need to charge on average per hour of client-related work to hit profit targets</h5>
        </div>
      </div>
      <div class="row top">
        <div class="col-md-12">
          <div class="table-responsive" style="overflow-x:auto;max-width:100%">
            <table id="a3_table" class="table table-striped table-hover table-condensed table-bordered">
              <thead>
                <tr>
                  <th style="width:40%"><label>&nbsp;</label></th>
                  <th style="width:20%"><label>Employee charge</label></th>
                  <th style="width:20%"><label>Overheads</label></th>
                  <th style="width:20%"><label>CHARGE OUT RATE (including profit, not including GST)</label></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                </tr>
                <tr>
                  <td>Advisers</td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getEmployeeCharge('adviser') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getOverheads() }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getChargeOutRate('adviser') }}</span>
                  </td>
                </tr>
                <tr>
                  <td>Paraplanners</td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getEmployeeCharge('paraplanner') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getOverheads() }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getChargeOutRate('paraplanner') }}</span>
                  </td>
                </tr>
                <tr>
                  <td>Client Service Offers</td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getEmployeeCharge('administration_staff') }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getOverheads() }}</span>
                  </td>
                  <td>
                    <span class="text-right formula_cell btn-block">{{ getChargeOutRate('administration_staff') }}</span>
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