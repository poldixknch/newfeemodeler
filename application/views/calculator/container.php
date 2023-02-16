<?php
$parts_path = APPPATH.'views/calculator/parts/';
$tab_contents = [
    "team", "financial-target", "hourly-rates", "standard-advice", "transactional-advice", "strategy-variation",
    "one-one-service", "one-many-service", "strategy-management", "service-offering", "final-fee"
];
?>
<script type="text/javascript">
    window.data = {
        data_id: "<?= isset($data_id) ? $data_id : ''?>",
        action: "<?= isset($action) ? 'create' : $action?>",
        current_tab: "<?php echo !in_array($this->session->userdata('role'), ['admin', 'principal']) ? 'a3_tab' : 'a1_tab'; ?>"
    };
</script>
<div class="container" ng-app="app" ng-controller="CalculatorController" ng-cloak> 
    <?php include APPPATH.'views/calculator/parts/top-spacer.php'; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="tab-content">
                <?php
                foreach($tab_contents as $tab):
                $show_team = $tab == 'team' && in_array($this->session->userdata('role'), ['principal', 'admin']);
                $show_tab = !in_array($tab, ['team']);
                if($show_team || $show_tab) {
                    include $parts_path . $tab . ".php";
                }
                endforeach;
                ?>
            </div>
        </div><!--/col-12-->
    </div>
    <?php include APPPATH.'views/calculator/parts/note-modal.php'; ?>
</div>