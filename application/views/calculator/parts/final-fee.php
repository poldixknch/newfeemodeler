<div id="final_tab" class="tab-pane">
  <div class="panel" ng-if="currentTab == 'final_tab'">
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-offset-8 col-sm-4 text-right">
          <label for="" class="col-sm-8"><h3 style="margin:0px">Get Your Result :</h3></label>
          <div class="col-sm-4">
        <button ng-click="getResult('pdf-form')" id="pdf-final" type="button" class="btn btn-pdf" style="background:transparent;padding:2px;" data-toggle="tooltip" data-placement="left" title="Download PDF">
              <img src="<?= base_url('asset/css/images/pdf.ico') ?>" style="width:30px;">
            </button> 
            <button ng-click="getResult('print-form')" id="print-final" type="button" class="btn btn-print" style="background:transparent;padding:2px;" data-toggle="tooltip" data-placement="left" title="Print as HTML Page">
              <img src="<?= base_url('asset/css/images/printer.ico') ?>" style="width:30px;">
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h3>Fee Schedule</h3>
          <h5>Now you've been through the process and defined your minimum fees for both your initial engagement and ongoing fees. It works like this:</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <label style="vertical-align:middle;">For Engagement fees</label>
        </div>
        <div class="col-sm-8">
          <p class="text-justify bold">Then add to this base fee any adjustments that may need to be made based on the strategy requirements of the client</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <label style="vertical-align:middle;">For Ongoing Fees</label>
        </div>
        <div class="col-sm-8">
          <p class="text-justify bold">start by identifying the service package most appropriate to the client. Then add to this base fee any adjustments that may need to be made based on the strategic areas you're managing on behalf of the client during the yeer</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <p class="text-justify bold">Finally, remember these are just your minumums. You will need to make a decision of the value of the advice you're providing when setting a fee. However, these do give you the guidance of knowing the dollar point at which you're pricing model is adhering to profit targets, regardless of the fee mechanism (e.g. asset based, fee for service, performance fee) you're employing.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="box space">
            <?php include 'final-fee/engagement-fee-schedule.php'; ?>
            <?php include 'final-fee/strategy-advice.php'; ?>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="box space">
            <?php include 'final-fee/ongoing-fee-schedule.php'; ?>
            <?php include 'final-fee/strategy-management.php'; ?>
          </div>
        </div>
      </div>
    </div>
    <form style="display:none;" id="print-form" action="<?php echo site_url('/main/print_final'); ?>" target="_blank" method="post" role="form"></form>
    <form style="display:none;" id="pdf-form" action="<?php echo site_url('/main/pdf_final'); ?>" target="_blank" method="post" role="form"></form>
  </div>
</div>