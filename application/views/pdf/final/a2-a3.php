<table style="width:100%;">
  <tr>
    <td class="grid" colspan="6">
     <h3 class="none"> Financial Targets</h3>
      <p>These inputs formed the basis for the top-down pricing model, using expenses and</p>
      <p> defined profit margin to define revenue target upon which cost recovery is based.</p>
       <table>
        <tr  class="border-line">
          <td class="grid" colspan="6">Total expenses from last year</td>
          <td class="grid" colspan="6"><?php echo $expense_last_year; ?></td>
        </tr>
        <tr  class="border-line">
          <td class="grid" colspan="6">Do you foresee these changing greatly next year?</td>
          <td class="grid" colspan="6"><?php echo $foresee_next_year; ?></td>
        </tr>
        <?php if($foresee_next_year == "Yes"): ?>
        <tr  class="border-line">
          <td class="grid" colspan="6">By what % do you expect your expenses to grow or fall next year</td>
          <td class="grid" colspan="6"><?php echo $percent_expenses_grow; ?>%</td>
        </tr>
        <?php endif; ?>
        <tr  class="border-line">
          <td class="grid" colspan="6">Total Employment costs</td>
          <td class="grid" colspan="6"><?php echo $employment_cost; ?></td>
        </tr>
        <tr  class="border-line">
          <td class="grid" colspan="6">Total non-employment costs</td>
          <td class="grid" colspan="6"><?php echo $non_employment_cost; ?></td>
        </tr>
        <tr  class="border-line">
          <td class="grid" colspan="6">Target profit margin for the coming year?</td>
          <td class="grid" colspan="6"><?php echo $profit_margin_coming_year; ?>%</td>
        </tr>
        <tr  class="border-line">
          <td class="grid" colspan="6">TARGET REVENUE FOR THE COMING YEAR</td>
          <td class="grid" colspan="6"><?php echo $target_revenue; ?></td>
        </tr>
      </table>
    </td>
    <td class="grid" colspan="6">
      <h3 class="none">Final Hourly Rates</h3>
      <p>What you need to charge on average per hour of client-related work to hit profit targets</p>
      <table>
        <tr  class="border-line">
          <td class="grid" colspan="6"></td>
          <td class="grid" colspan="3">Employee charge</td>
          <td class="grid" colspan="3">Overheads</td>
          <td class="grid" colspan="6">CHARGE OUT RATE</td>
        </tr>
        <tr  class="border-line">
          <td class="grid" colspan="6">Advisers</td>
          <td class="grid" colspan="3"><?php echo $advisers_charge; ?></td>
          <td class="grid" colspan="3"><?php echo $advisers_overheads; ?></td>
          <td class="grid" colspan="6"><?php echo $advisers_hourly; ?></td>
        </tr>
        <tr  class="border-line">
          <td class="grid" colspan="6">Paraplanners</td>
          <td class="grid" colspan="3"><?php echo $paraplanners_charge; ?></td>
          <td class="grid" colspan="3"><?php echo $paraplanners_overheads; ?></td>
          <td class="grid" colspan="6"><?php echo $paraplanners_hourly; ?></td>
        </tr  class="border-line">
        <tr>
          <td class="grid" colspan="6">Client Service Offers</td>
          <td class="grid" colspan="3"><?php echo $administration_staff_charge; ?></td>
          <td class="grid" colspan="3"><?php echo $administration_staff_overheads; ?></td>
          <td class="grid" colspan="6"><?php echo $administration_staff_hourly; ?></td>
        </tr>
      </table>
    </td>
  </tr>
</table>