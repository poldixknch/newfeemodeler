<div class="row">
  <div class="col-sm-12">
    <h3 class="top">Ongoing fee schedule</h3>
    <label>Your minimum fees for each service package (incl of GST) are as follows</label>
    <div ng-repeat="service_name in service_names" class="form-group">
      <div class="col-sm-8">
        <span style="margin-bottom:5px;" class="text-left formula_cell btn-block">{{ service_name.value }}</span>
      </div>
      <div class="col-sm-4">
        <span class="text-right formula_cell btn-block">{{ getTotalServiceOffering('service_' + ($index + 1)) }}</span>
      </div>
    </div>
  </div>
</div>