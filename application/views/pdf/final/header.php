<?php
$strategy_variation = isset($strategy_variation) ? $strategy_variation : array();
$strategy_management = isset($strategy_management) ? $strategy_management : array();
?>
<div class="pdf-banner">
  <img style="width:100%" src="https://feemodeler.com.au/asset/css/images/pdf-banner-a.png"/></div>
  <table style="width:100%;">
    <tr>
      <td class="grid bold center" colspan="12">
        <p style="text-align: right; float:right">
          <img class="img" src='<?php echo base_url()?>/asset/css/images/logo2.png' style="height:100px" alt="">
        </p>
      </td>
    </tr>
    <tr>
      <td class="grid bold left" colspan="12"><h1 class="none">Your Fee Schedule</h1></td>
    </tr>
    <tr>
      <td class="grid left" colspan="12"><h5 class="none">Created on <?php echo $date ?></h5></td>
    </tr>
    <tr>
      <td class="grid left" colspan="12"><h5 class="none"><?php echo $file_name; ?></h5></td>
    </tr>
    <tr class="top-page height-50">
        <td class="grid zero none top-page">&nbsp;</td>
    </tr>
    <tr>
     <td class="grid zero none">&nbsp;</td>
        <td class="grid zero none">&nbsp;</td>
        <td class="grid zero none">&nbsp;</td>
        <td class="grid zero none">&nbsp;</td>
        <td class="grid zero none">&nbsp;</td>
        <td class="grid zero none">&nbsp;</td>
        <td class="grid zero none">&nbsp;</td>
        
    </tr>
    <tr class="top-page">
      <td class="grid bold left top-page" colspan="12"><h1 class="none top-page">Your Final Model on a Page</h1></td>
    </tr>
    <tr>
        <td class="grid top" colspan="12">
            <label for="" class="top">This is not a client-facing tool. We strongly suggest you engage the services of a marketing specialist to create a client-facing tool to discuss your fees and service offerings. All numbers are inclusive of GST.</label>
        </td>
    </tr>
    <tr>
        <td class="grid" colspan="6">
            <h3 class="none">Your Engagement Fee Schedule</h3>
            <label for="" class="bold">Your minimum fees for engaging new clients is:</label>
        </td>
        <td class="grid" colspan="6">
            <h3 class="none">Your Ongoing Fee Schedule</h3>
            <label for="" class="bold">Your minimum fees for each service package are:</label>
        </td>
    </tr>
    <tr>
        <td class="grid" colspan="3">For holistic advice (inclusive of GST)</td>
        <td class="grid" colspan="2"><?php echo $holistic_advice; ?></td>
        <td class="grid" colspan="1">&nbsp;</td>
        <td class="grid" colspan="3"><?php echo $service[0]["name"]; ?></td>
        <td class="grid" colspan="3"><?php echo $service[0]["value"]; ?></td>
    </tr>
    <tr>
        <td class="grid" colspan="3">For transactional advice (inclusive of GST)</td>
        <td class="grid" colspan="2"><?php echo $total_transactional_advice; ?></td>
        <td class="grid" colspan="1">&nbsp;</td>
        <td class="grid" colspan="3"><?php echo $service[1]["name"]; ?></td>
        <td class="grid" colspan="3"><?php echo $service[1]["value"]; ?></td>
    </tr>
    <?php for($i = 2; $i < count($service); $i++): ?>
    <tr>
        <td class="grid" colspan="6">&nbsp;</td>
        <td class="grid" colspan="3"><?php echo $service[$i]["name"]; ?></td>
        <td class="grid" colspan="3"><?php echo $service[$i]["value"] ?></td>
    </tr>
    <?php endfor; ?>
    <tr>
        <td class="grid" colspan="6"><label for="">Strategic advice (to be added to the minimums above, inclusive of GST)</label></td>
        <td class="grid" colspan="6"><label for="">Ongoing strategy management (added to the minimums above)</label></td>
    </tr>

    <tr>
        <td class="grid top" colspan="3">
            <?php
            for($i = 0; $i < count($strategy_variation); $i++):
            echo $strategy_variation[$i]["label"] . "<br />";
            endfor;
            ?>
        </td>
        <td class="grid" colspan="2">
            <?php
            for($i = 0; $i < count($strategy_variation); $i++):
            echo $strategy_variation[$i]["service_fee"] . "<br />";
            endfor;
            ?>
        </td>
        <td class="grid top" colspan="1">&nbsp;</td>
        <td class="grid top" colspan="3">
        <?php
            for($i = 0; $i < count($strategy_management); $i++):
            echo $strategy_management[$i]["label"] . "<br />";
            endfor;
            ?>
        </td>
        <td class="grid top" colspan="3">
            <?php
            for($i = 0; $i < count($strategy_management); $i++):
            echo $strategy_management[$i]["service_fee"] . "<br />";
            endfor;
            ?>
        </td>
    </tr>
        </table>