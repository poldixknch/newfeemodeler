<div class="row top">
  <div class="col-md-12">
    <div class="table-responsive" style="overflow-x:auto;max-width:100%">
      <table id="advisers" class="table table-striped table-hover table-condensed table-bordered">
        <thead>
          <tr>
            <th><label>Advisers</label></th>
            <th colspan="6"><label>This covers anyone who is involved in providing advice to clients.</label></th>
          </tr>
          <tr>
            <th style="width:37%"><label>&nbsp;</label></th>
            <th style="width:12%"><label>Base salary</label></th>
            <th style="width:12%"><label>How many hours does this person work per week?</label></th>
            <th style="width:12%"><label>What % of that time is spend doing specific client-related work?</label></th>
            <th style="width:12%"><label>How many weeks does this person take as annual leave per year?</label></th>
            <th style="width:12%"><label>Total client-chargeable hours per year</label></th>
            <th style="width:3%"><label></label></th>
          </tr>
        </thead>
        <tbody id="adviser_list">
          <tr ng-repeat="data in team.adviser.datas track by $index" class="adviser_row">
            <td>
              <input ng-model="data.name" class="input_cell btn-block" placeholder="name" type="text" />
            </td>
            <td>
              <input ng-model="data.base_salary" data-format="$ 0,0[.]00" class="text-right input_cell btn-block" type="text" only-numeric />
            </td>
            <td>
              <input ng-model="data.hours_work_per_week" data-format="0,0[.]00" class="text-right input_cell btn-block" type="text" only-numeric />
            </td>
            <td>
              <input ng-model="data.percent_related_work" data-format="0[.]00" class="text-right input_cell btn-block" type="text" only-numeric />
            </td>
            <td>
              <input ng-model="data.annual_leave" data-format="0,0" class="text-right input_cell btn-block" type="text" only-digits />
            </td>
            <td>
              <span class="text-right formula_cell btn-block">{{ getClientChargeable(data) }}</span>
            </td>
            <td class="text-center">
              <button ng-click="deleteTeam('adviser', $index)" type="button" class="btn btn-danger btn-xs delete_adviser text-center">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </button>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td>Total bonuses paid to Advisory staff</td>
            <td><input ng-model="other_datas.bonus_paid_adviser" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text" only-numeric /></td>
          </tr>
          <tr>
            <td>Other costs associated with the employment of advisers</td>
            <td><input ng-model="other_datas.other_cost_adviser" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text" only-numeric /></td>
          </tr>
          <tr>
            <td><label>TOTAL ADVISER COSTS</label></td>
            <td><span class="text-right formula_cell btn-block">{{ totalTeamCost('adviser') }}</span></td>
           <!-- <td colspan="5">(includes 10% superannuation)</td> -->
          </tr>
          <tr>
            <td colspan="7">
              <button ng-click="addTeam('adviser')" type="button" class="btn btn-success btn-sm text-center">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row
              </button>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>