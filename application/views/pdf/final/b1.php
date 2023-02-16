<?php
$standard_advice = isset($standard_advice) ? $standard_advice : array();
?>
<table style="width:100%;">
  <tr>
    <td class="grid bold left top" colspan="12"><h3 class="none">New Client Engagement process (Complex advice / 3 meetings)</h3>
      <p>Approach this by thinking of the most straightforward, “base” client going through this process as efficiently as is reasonable. Do not factor in time for any elements that may be captured within the Strategic Variations components 2.3). Add notes to outline specifics where possible. Examples of stages are provided, but feel free to overwrite and add your own.</p>
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
  <?php foreach($standard_advice as $advice):?>
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