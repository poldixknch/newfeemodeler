<?php
$transactional_advice = isset($transactional_advice) ? $transactional_advice : array();
?>
<table style="width:100%;">
  <tr>
    <td class="grid left top" colspan="12"><h3 class="none bold ">New Client Engagement process (Less Complex / 2 meetings)</h3>
      <p>The easiest way to approach this is to use the previous process as a reference, but seek to identify where things may take less time due to reduced complexity</p>
    </td>
  </tr>
  <tr class="blue top">
    <td class="grid center" colspan="4"><label for="" class="bold white"></label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Advice Providers time (mins)</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Advice Producers</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Admin</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Other costs</label></td>
    <td class="grid center" colspan="4"><label for="" class="bold white">Notes</label></td>
  </tr>
  <?php foreach($transactional_advice as $advice):?>
  <tr class="border-line">
    <td class="grid" colspan="4"><?php echo $advice["label"]; ?></td>
    <td class="grid " colspan="1"><?php echo $advice["time"]; ?></td>
    <td class="grid " colspan="1"><?php echo $advice["producers"]; ?></td>
    <td class="grid " colspan="1"><?php echo $advice["admin"]; ?></td>
    <td class="grid " colspan="1"><?php echo $advice["other_cost"]; ?></td>
    <td class="grid " colspan="4"><?php echo $advice["notes"]; ?></td>
  </tr>
  <?php endforeach; ?>
</table>