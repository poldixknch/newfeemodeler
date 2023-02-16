<?php
$strategy_variation = isset($strategy_variation) ? $strategy_variation : array();
?>
<table style="width:100%;">
  <tr>
    <td class="grid left top" colspan="12"><h3 class="none bold ">Strategy Variations</h3>
      <p>Considering the process(es) you've outlined above, we're now seeking to identify where things may require additional commitment of time across the team due to specific advice given to individual clients. For example; if providing advice on SMSF might require an additional 60 minutes of SOA production time, this is the kind of data we're looking to capture.</p>
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
  <?php foreach($strategy_variation as $strategy):?>
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
