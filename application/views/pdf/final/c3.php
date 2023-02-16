<?php
$strategy_management = isset($strategy_management) ? $strategy_management : array();
?>
<table style="width:100%;">
  <tr>
    <td class="grid left top" colspan="12"><h3 class="none bold ">Strategy Management</h3>
      <p>Just as with engaging new clients, differences in strategies will impact the way your service clients. So, it's time to have a think about how much additional time during the year would be taken up in looking after a client with each of the following strategies.</p>
    </td>
  </tr>
  <tr class="blue top">
    <td class="grid center" colspan="4"><label for="" class="bold white"></label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Advice Providers time (mins)</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Advice Producers</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Admin</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Other costs</label></td>
    <td class="grid center" colspan="1"><label for="" class="bold white">Additional fees (Not incl. GST)</label></td>
    <td class="grid center" colspan="3"><label for="" class="bold white">Notes</label></td>
  </tr>
  <?php foreach($strategy_management as $strategy):?>
  <tr class="border-line">
    <td class="grid" colspan="4"><?php echo $strategy["label"]; ?></td>
    <td class="grid " colspan="1"><?php echo $strategy["time"]; ?></td>
    <td class="grid " colspan="1"><?php echo $strategy["producers"]; ?></td>
    <td class="grid " colspan="1"><?php echo $strategy["admin"]; ?></td>
    <td class="grid " colspan="1"><?php echo $strategy["other_cost"]; ?></td>
    <td class="grid " colspan="1"><?php echo $strategy["service_fee"]; ?></td>
    <td class="grid " colspan="3"><?php echo $strategy["notes"]; ?></td>
  </tr>
  <?php endforeach; ?>
</table>