<?php
$one_to_many_service = isset($one_to_many_service) ? $one_to_many_service : array();
?>
<table style="width:100%;">
  <tr>
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
    <td class="grid bold left" colspan="12">
      <h3 class="none">Ongoing Service Analysis - 1:many Services</h3>
    </td>
  </tr>
  <tr class="blue top">
    <td class="grid center" colspan="4"><label for="" class="bold white">1-to-many Service offerings</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Advice Providers time (mins)</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Advice Producers</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Admin</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Other costs</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">People</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Cost per person (not incl GST)</label></td>
    <td class="grid center" colspan="2"><label for="" class="bold white">Notes</label></td>
  </tr>
  <?php foreach($one_to_many_service as $service):?>
  <tr class="border-line">
    <td class="grid" colspan="4"><?php echo $service["label"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["time"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["producers"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["admin"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["other_cost"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["people"]; ?></td>
    <td class="grid " colspan="1"><?php echo $service["service_fee"]; ?></td>
    <td class="grid " colspan="2"><?php echo $service["notes"]; ?></td>
  </tr>
  <?php endforeach; ?>
</table>