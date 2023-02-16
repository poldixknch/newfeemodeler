<div id="a1_tab" class="tab-pane form-horizontal active">
  <div class="panel" ng-if="currentTab == 'a1_tab'" >
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <h3>Let's start with your team....</h3>
          <h5>Start by analysing the make-up of your team, including the number of chargeable hours your business has available</h5>
        </div>
      </div>
        <?php include 'team/adviser.php'; ?>
        <?php include 'team/paraplanner.php'; ?>
        <?php include 'team/administration-staff.php'; ?>
      </div>
  </div>
</div>