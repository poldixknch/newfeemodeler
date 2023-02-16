<?php
$one_to_one_service = isset($one_to_one_service) ? $one_to_one_service : array();
?>
<table style="width:100%;">
  <tr class="top-page">
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
    <td class="grid zero none">&nbsp;</td>
  </tr>
  <tr>
    <td class="grid left top" colspan="12"><h3 class="none bold">Ongoing Service Analysis - 1:1 Services</h3>
      <label for="" >We started building your ongoing model by analysing the amount of time required to deliver each of your 1:1 services on a per event basis.</label>
    </td>
  </tr>
  <tr class="blue top">
    <td class="grid center" colspan="4"><label for="" class="bold white">1-to 1 Service offerings</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Advice Providers time (mins)</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Advice Producers</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Admin</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Other costs</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Service fee (not incl. GST)</label></td>
    <td class="grid center" colspan="3"><label for="" class="bold white">Notes</label></td>
  </tr>
  <?php foreach($one_to_one_service as $service):?>
  <tr class="border-line">
    <td class="grid" colspan="4"><?php echo $service["label"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["time"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["producers"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["admin"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["other_cost"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["service_fee"]; ?></td>
    <td class="grid " colspan="3"><?php echo $service["notes"]; ?></td>
  </tr>
  <?php endforeach; ?>
</table>