<div class="tab-content">
    <!--<div id="home_tab" class="tab-pane">
        <form action="send.php" class="form-horizontal" method="post" role="form" id="home">

            <div class="panel">
                <div class="panel-body">
                    <div class="row"
                        <div class="col-sm-12">
                            <h3 class="text-center">Knowing your numbers = greater confidence talking fees with clients</h3>
                            <h1 class="text-center">Welcome to the Audere Fee Modeler for advice businesses.</h1>
                        </div>
                    </div>
                    <div class="row space">
                        <div class="col-sm-12">
                            <p class="text-justify">Our fee modeler is the fastest and simplest way for your advice business to work out the fees you need to charge to be profitable.</p>
                            <p class="justify">Step-by-step you'll explore your business's financials drivers, upfront costs and model your ongoing offers. The end result is your own, totally customised &amp; downloadable service offer and fee schedule, ready to use or convert across to whatever fee mechanism you prefer (e.g. flat fee, asset based, hybrid etc.). </p>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-12">
                            <h3 class="">The best bit? For a limited time, this calculator is completely FREE. This won't last forever.</h3>
                            <p class="justify">If you'd like to <strong>retain free lifetime access,</strong> simply enter your name and email address in the box below. This means that even after we end the free offer, you will continue to get access forever to the basic calculator for as long as you want.</p>
                            <p class="justfiy">The video below will walk you through exactly how to use it just a few short minutes. </p>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-12 text-center">
                            
                        </div>
                    </div>

                    <div class="row space">
                        <div class="col-sm-12">
                            <p class="justify">If you have feedback for us on functionality you'd like to see, feel free to do so below or drop us a line at info@audere.com.au. We'd love to share your views on the good, the bad and the missing.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="" class="control-label pull-left col-sm-4">Name :</label>
                                <div class="col-sm-4">
                                    <input value="<?= isset($stored['name']) ? $stored['name'] : '' ?>" id="name" name="name" class="form-control input-md" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label pull-left col-sm-4">Email :</label>
                                <div class="col-sm-4">
                                    <input value="<?= isset($stored['email']) ? $stored['email'] : '' ?>" id="email" name="email" class="form-control input-md" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label pull-left col-sm-4">Comments :</label>
                                <div class="col-sm-4">
                                    <textarea name="comments" id="comments" cols="40" rows="3"><?= isset($stored['comments']) ? $stored['comments'] : '' ?></textarea>
                                </div>
                            </div>
                            <div class="form-group text-center top space">
                                <label for="">Would you like free lifetime access to our fee modeler?  </label>
                                <label for="" class="radion-inline text-center">
                                    YES &nbsp;<input class="" id="access_yes" name="access" value="1" style="vertical-align:bottom" type="radio"
                                                     <?= isset($stored['access']) && $stored['access'] == '1' ? 'selected="selected"' : '' ?>>
                                </label>
                                <label for="" class="radion-inline text-center">
                                    NO &nbsp;<input class="" id="access_no" name="access" value="0" style="vertical-align:bottom" type="radio"
                                                    <?= isset($stored['access']) && $stored['access'] == '0' ? 'selected="selected"' : '' ?>>
                                </label>

                            </div>
                            <div class="form-group top text-center">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </form>
    </div>-->
    <?php $allowed_role = array('admin','principal'); if(in_array($this->session->userdata('role'), $allowed_role)) { ?>
        <div id="a1_tab" class="tab-pane active">
        <form data-calx-identifier="CALX1420024221030" class="form-horizontal" action="" method="post" role="form" id="a1">
            <input type="hidden" id="test_count1" name="test_count1" data-cell="ZZ1">
            <input type="hidden" id="test_count2" name="test_count2" data-cell="ZZ2">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Let's start with your team....</h3>
                            <h5>Start by analysing the make-up of your team, including the number of chargeable hours your business has available</h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="advisers" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th><label for="">Advice Providers</label></th>
                                            <th colspan="6"><label for="">This covers anyone who is involved in providing advice to clients.</label></th>
                                        </tr>
                                        <tr>
                                            <th style="width:37%"><label for="">&nbsp;</label></th>
                                            <th style="width:12%"><label for="">Base salary</label></th>
                                            <th style="width:12%"><label for="">How many hours does this person work per week?</label></th>
                                            <th style="width:12%"><label for="">What % of that time is spend doing specific client-related work?</label></th>
                                            <th style="width:12%"><label for="">How many weeks does this person take as annual leave per year?</label></th>
                                            <th style="width:12%"><label for="">Total client-chargeable hours per year</label></th>
                                            <th style="width:3%"><label for=""></label></th>
                                        </tr>
                                    </thead>
                                    <tbody id="adviser_list">
                                        <tr id="adviser_row5" class="adviser_row" data-adviser="5">
                                            <td><input value="<?= isset($stored['A5']) ? $stored['A5'] : '' ?>" id="A5" name="A5" data-cell="A5" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B5']) ? $stored['B5'] : '' ?>" id="B5" name="B5" data-cell="B5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="C5" name="C5" data-cell="C5" class="text-right input_cell btn-block" value="<?= isset($stored['C5']) ? $stored['C5'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="D5" name="D5" data-cell="D5" class="text-right input_cell btn-block" value="<?= isset($stored['D5']) ? $stored['D5'] : '60 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="E5" name="E5" data-cell="E5" class="text-right input_cell btn-block" value="<?= isset($stored['E5']) ? $stored['E5'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['F5']) ? $stored['F5'] : '' ?>" id="F5" name="F5" data-cell="F5" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(A5='',B5=''),'',((48-E5)*C5)*D5)" type="text"></td>
                                            <td class="text-center"><button id="del_adviser5" type="button" class="btn btn-danger btn-xs delete_adviser text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="adviser_row6" class="adviser_row" data-adviser="6">
                                            <td><input value="<?= isset($stored['A6']) ? $stored['A6'] : '' ?>" id="A6" name="A6" data-cell="A6" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B6']) ? $stored['B6'] : '' ?>" id="B6" name="B6" data-cell="B6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="C6" name="C6" data-cell="C6" class="text-right input_cell btn-block" value="<?= isset($stored['C6']) ? $stored['C6'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="D6" name="D6" data-cell="D6" class="text-right input_cell btn-block" value="<?= isset($stored['D6']) ? $stored['D6'] : '60 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="E6" name="E6" data-cell="E6" class="text-right input_cell btn-block" value="<?= isset($stored['E6']) ? $stored['E6'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['F6']) ? $stored['F6'] : '' ?>" id="F6" name="F6" data-cell="F6" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(A6='',B6=''),'',((48-E6)*C6)*D6)" type="text"></td>
                                            <td class="text-center"><button id="del_adviser6" type="button" class="btn btn-danger btn-xs delete_adviser text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="adviser_row7" class="adviser_row" data-adviser="7">
                                            <td><input value="<?= isset($stored['A7']) ? $stored['A7'] : '' ?>" id="A7" name="A7" data-cell="A7" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B7']) ? $stored['B7'] : '' ?>" id="B7" name="B7" data-cell="B7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="C7" name="C7" data-cell="C7" class="text-right input_cell btn-block" value="<?= isset($stored['C7']) ? $stored['C7'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="D7" name="D7" data-cell="D7" class="text-right input_cell btn-block" value="<?= isset($stored['D7']) ? $stored['D7'] : '60 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="E7" name="E7" data-cell="E7" class="text-right input_cell btn-block" value="<?= isset($stored['E7']) ? $stored['E7'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['F7']) ? $stored['F7'] : '' ?>" id="F7" name="F7" data-cell="F7" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(A7='',B7=''),'',((48-E7)*C7)*D7)" type="text"></td>
                                            <td class="text-center"><button id="del_adviser7" type="button" class="btn btn-danger btn-xs delete_adviser text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>

                                        <?php if (isset($stored["addt_adviser_list"])): foreach ($stored["addt_adviser_list"] as $row): ?>
                                                <tr id="adviser_row<?= $row ?>" class="adviser_row addt" data-adviser="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["A$row"]) ? $stored["A$row"] : "" ?>" id="A<?= $row ?>" name="A<?= $row ?>" data-cell="A<?= $row ?>" class="input_cell btn-block" placeholder="name" type="text"></td>
                                                    <td><input value="<?= isset($stored["B$row"]) ? $stored["B$row"] : "" ?>" id="B<?= $row ?>" name="B<?= $row ?>" data-cell="B<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input id="C<?= $row ?>" name="C<?= $row ?>" data-cell="C<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["C$row"]) ? $stored["C$row"] : "37.50" ?>" data-format="0,0[.]00" type="text"></td>
                                                    <td><input id="D<?= $row ?>" name="D<?= $row ?>" data-cell="D<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["D$row"]) ? $stored["D$row"] : "60 %" ?>" data-format="0[.]00 %" type="text"></td>
                                                    <td><input id="E<?= $row ?>" name="E<?= $row ?>" data-cell="E<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["E$row"]) ? $stored["E$row"] : "4" ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["F$row"]) ? $stored["F$row"] : "" ?>" id="F<?= $row ?>" name="F<?= $row ?>" data-cell="F<?= $row ?>" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(A<?= $row ?>='',B<?= $row ?>=''),'',((48-E<?= $row ?>)*C<?= $row ?>)*D<?= $row ?>)" type="text"></td>
                                                    <td class="text-center"><button id="del_adviser<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_adviser text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
                                            <?php endforeach;
                                        endif;
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['A107']) ? $stored['A107'] : '' ?>" id="A107" name="A107" data-cell="A107" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B107']) ? $stored['B107'] : '' ?>" id="B107" name="B107" data-cell="B107" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['C107']) ? $stored['C107'] : '' ?>" id="C107" name="C107" data-cell="C107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['D107']) ? $stored['D107'] : '' ?>" id="D107" name="D107" data-cell="D107" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['E107']) ? $stored['E107'] : '' ?>" id="E107" name="E107" data-cell="E107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['F107']) ? $stored['F107'] : '' ?>" id="F107" name="F107" data-cell="F107" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="" type="text"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['A108']) ? $stored['A108'] : '' ?>" id="A108" name="A108" data-cell="A108" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B108']) ? $stored['B108'] : '' ?>" id="B108" name="B108" data-cell="B108" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="SUM(B5:B50)" type="text"></td>
                                            <td><input value="<?= isset($stored['C108']) ? $stored['C108'] : '' ?>" id="C108" name="C108" data-cell="C108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(C5:C50)" type="text"></td>
                                            <td><input value="<?= isset($stored['D108']) ? $stored['D108'] : '' ?>" id="D108" name="D108" data-cell="D108" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="SUM(D5:D50)" type="text"></td>
                                            <td><input value="<?= isset($stored['E108']) ? $stored['E108'] : '' ?>" id="E108" name="E108" data-cell="E108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(E5:E50)" type="text"></td>
                                            <td><input value="<?= isset($stored['F108']) ? $stored['F108'] : '' ?>" id="F108" name="F108" data-cell="F108" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="SUM(F5:F50)" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Total bonuses paid to Advisory staff</td>
                                            <td><input value="<?= isset($stored['B109']) ? $stored['B109'] : '' ?>" id="B109" name="B109" data-cell="B109" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other costs associated with the employment of advisers</td>
                                            <td><input value="<?= isset($stored['B110']) ? $stored['B110'] : '' ?>" id="B110" name="B110" data-cell="B110" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL ADVISER COSTS</label></td>
                                            <td><input value="<?= isset($stored['B111']) ? $stored['B111'] : '' ?>" id="B111" name="B111" data-cell="B111" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="((B109+B108)*109.5%)+B110" type="text"></td>
                                            <td colspan="5">(includes 10% superannuation)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7"><button id="add_adviser" type="button" class="btn btn-success btn-sm add_adviser text-center" data-id="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="paraplanners" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th><label for="">Advice Producers</label></th>
                                            <th colspan="6"><label for="">This covers anyone who is involved in the production of advice strategy and documentation.</label></th>
                                        </tr>
                                        <tr>
                                            <th style="width:37%"><label for="">&nbsp;</label></th>
                                            <th style="width:12%"><label for="">Base salary</label></th>
                                            <th style="width:12%"><label for="">How many hours does this person work per week?</label></th>
                                            <th style="width:12%"><label for="">What % of that time is spend doing specific client-related work?</label></th>
                                            <th style="width:12%"><label for="">How many weeks does this person take as annual leave per year?</label></th>
                                            <th style="width:12%"><label for="">Total client-chargeable hours per year</label></th>
                                            <th style="width:3%"><label for=""></label></th>
                                        </tr>
                                    </thead>
                                    <tbody id="plan_list">
                                        <tr id="plan_row5" class="plan_row" data-plan="5">
                                            <td><input value="<?= isset($stored['H5']) ? $stored['H5'] : '' ?>" id="H5" name="H5" data-cell="H5" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I5']) ? $stored['I5'] : '' ?>" id="I5" name="I5" data-cell="I5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="J5" name="J5" data-cell="J5" class="text-right input_cell btn-block" value="<?= isset($stored['J5']) ? $stored['J5'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="K5" name="K5" data-cell="K5" class="text-right input_cell btn-block" value="<?= isset($stored['K5']) ? $stored['K5'] : '90 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="L5" name="L5" data-cell="L5" class="text-right input_cell btn-block" value="<?= isset($stored['L5']) ? $stored['L5'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['M5']) ? $stored['M5'] : '' ?>" id="M5" name="M5" data-cell="M5" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(H5='',I5=''),'',((48-L5)*J5)*K5)" type="text"></td>
                                            <td class="text-center"><button id="del_plan5" type="button" class="btn btn-danger btn-xs delete_plan text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="plan_row6" class="plan_row" data-plan="6">
                                            <td><input value="<?= isset($stored['H6']) ? $stored['H6'] : '' ?>" id="H6" name="H6" data-cell="H6" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I6']) ? $stored['I6'] : '' ?>" id="I6" name="I6" data-cell="I6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="J6" name="J6" data-cell="J6" class="text-right input_cell btn-block" value="<?= isset($stored['J6']) ? $stored['J6'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="K6" name="K6" data-cell="K6" class="text-right input_cell btn-block" value="<?= isset($stored['K6']) ? $stored['K6'] : '90 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="L6" name="L6" data-cell="L6" class="text-right input_cell btn-block" value="<?= isset($stored['L6']) ? $stored['L6'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['M6']) ? $stored['M6'] : '' ?>" id="M6" name="M6" data-cell="M6" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(H6='',I6=''),'',((48-L6)*J6)*K6)" type="text"></td>
                                            <td class="text-center"><button id="del_plan6" type="button" class="btn btn-danger btn-xs delete_plan text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="plan_row7" class="plan_row" data-plan="7">
                                            <td><input value="<?= isset($stored['H7']) ? $stored['H7'] : '' ?>" id="H7" name="H7" data-cell="H7" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I7']) ? $stored['I7'] : '' ?>" id="I7" name="I7" data-cell="I7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="J7" name="J7" data-cell="J7" class="text-right input_cell btn-block" value="<?= isset($stored['J7']) ? $stored['J7'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="K7" name="K7" data-cell="K7" class="text-right input_cell btn-block" value="<?= isset($stored['K7']) ? $stored['K7'] : '90 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="L7" name="L7" data-cell="L7" class="text-right input_cell btn-block" value="<?= isset($stored['L7']) ? $stored['L7'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['M7']) ? $stored['M7'] : '' ?>" id="M7" name="M7" data-cell="M7" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(H7='',I7=''),'',((48-L7)*J7)*K7)" type="text"></td>
                                            <td class="text-center"><button id="del_plan7" type="button" class="btn btn-danger btn-xs delete_plan text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>

                                        <?php if (isset($stored["addt_plan_list"])): foreach ($stored["addt_plan_list"] as $row): ?>
                                                <tr id="plan_row<?= $row ?>" class="plan_row addt" data-plan="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["H$row"]) ? $stored["H$row"] : '' ?>" id="H<?= $row ?>" name="H<?= $row ?>" data-cell="H<?= $row ?>" class="input_cell btn-block" placeholder="name" type="text"></td>
                                                    <td><input value="<?= isset($stored["I$row"]) ? $stored["I$row"] : '' ?>" id="I<?= $row ?>" name="I<?= $row ?>" data-cell="I<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input id="J<?= $row ?>" name="J<?= $row ?>" data-cell="J<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["J$row"]) ? $stored["J$row"] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                                    <td><input id="K<?= $row ?>" name="K<?= $row ?>" data-cell="K<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["K$row"]) ? $stored["K$row"] : '90 %' ?>" data-format="0[.]00 %" type="text"></td>
                                                    <td><input id="L<?= $row ?>" name="L<?= $row ?>" data-cell="L<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["L$row"]) ? $stored["L$row"] : '4' ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["M$row"]) ? $stored["M$row"] : '' ?>" id="M<?= $row ?>" name="M<?= $row ?>" data-cell="M<?= $row ?>" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(H<?= $row ?>='',I<?= $row ?>=''),'',((48-L<?= $row ?>)*J<?= $row ?>)*K<?= $row ?>)" type="text"></td>
                                                    <td class="text-center"><button id="del_plan<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_plan text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
                                            <?php endforeach;
                                        endif;
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['H107']) ? $stored['H107'] : '' ?>" id="H107" name="H107" data-cell="H107" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I107']) ? $stored['I107'] : '' ?>" id="I107" name="I107" data-cell="I107" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['J107']) ? $stored['J107'] : '' ?>" id="J107" name="J107" data-cell="J107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['K107']) ? $stored['K107'] : '' ?>" id="K107" name="K107" data-cell="K107" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['L107']) ? $stored['L107'] : '' ?>" id="L107" name="L107" data-cell="L107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['M107']) ? $stored['M107'] : '' ?>" id="M107" name="M107" data-cell="M107" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="" type="text"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['H108']) ? $stored['H108'] : '' ?>" id="H108" name="H108" data-cell="H108" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I108']) ? $stored['I108'] : '' ?>" id="I108" name="I108" data-cell="I108" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="SUM(I5:I50)" type="text"></td>
                                            <td><input value="<?= isset($stored['J108']) ? $stored['J108'] : '' ?>" id="J108" name="J108" data-cell="J108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(J5:J50)" type="text"></td>
                                            <td><input value="<?= isset($stored['K108']) ? $stored['K108'] : '' ?>" id="K108" name="K108" data-cell="K108" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="SUM(K5:K50)" type="text"></td>
                                            <td><input value="<?= isset($stored['L108']) ? $stored['L108'] : '' ?>" id="L108" name="L108" data-cell="L108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(L5:L50)" type="text"></td>
                                            <td><input value="<?= isset($stored['M108']) ? $stored['M108'] : '' ?>" id="M108" name="M108" data-cell="M108" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="SUM(M5:M50)" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Total bonuses paid to Paraplanners</td>
                                            <td><input value="<?= isset($stored['I109']) ? $stored['I109'] : '' ?>" id="I109" name="I109" data-cell="I109" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other costs associated with the employment of paraplanners</td>
                                            <td><input value="<?= isset($stored['I110']) ? $stored['I110'] : '' ?>" id="I110" name="I110" data-cell="I110" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL PARAPLANNER COSTS</label></td>
                                            <td><input value="<?= isset($stored['I111']) ? $stored['I111'] : '' ?>" id="I111" name="I111" data-cell="I111" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="((I109+I108)*109.5%)+I110" type="text"></td>
                                            <td colspan="5">(includes 10% superannuation)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7"><button id="add_plan" type="button" class="btn btn-success btn-sm add_plan text-center" data-id="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="admin" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th><label for="">Admininstrative support</label></th>
                                            <th colspan="6"><label for="">This covers anyone who is provides adminstrative support directly related to providing advice to clients.</label></th>
                                        </tr>
                                        <tr>
                                            <th style="width:37%"><label for="">&nbsp;</label></th>
                                            <th style="width:12%"><label for="">Base salary</label></th>
                                            <th style="width:12%"><label for="">How many hours does this person work per week?</label></th>
                                            <th style="width:12%"><label for="">What % of that time is spend doing specific client-related work?</label></th>
                                            <th style="width:12%"><label for="">How many weeks does this person take as annual leave per year?</label></th>
                                            <th style="width:12%"><label for="">Total client-chargeable hours per year</label></th>
                                            <th style="width:3%"><label for=""></label></th>
                                        </tr>
                                    </thead>
                                    <tbody id="admin_list">
                                        <tr id="admin_row5" class="admin_row" data-admin="5">
                                            <td><input value="<?= isset($stored['O5']) ? $stored['O5'] : '' ?>" id="O5" name="O5" data-cell="O5" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P5']) ? $stored['P5'] : '' ?>" id="P5" name="P5" data-cell="P5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="Q5" name="Q5" data-cell="Q5" class="text-right input_cell btn-block" value="<?= isset($stored['Q5']) ? $stored['Q5'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="R5" name="R5" data-cell="R5" class="text-right input_cell btn-block" value="<?= isset($stored['R5']) ? $stored['R5'] : '80 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="S5" name="S5" data-cell="S5" class="text-right input_cell btn-block" value="<?= isset($stored['S5']) ? $stored['S5'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['T5']) ? $stored['T5'] : '' ?>" id="T5" name="T5" data-cell="T5" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(O5='',P5=''),'',((48-S5)*Q5)*R5)" type="text"></td>
                                            <td class="text-center"><button id="del_admin5" type="button" class="btn btn-danger btn-xs delete_admin text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="admin_row6" class="admin_row" data-admin="6">
                                            <td><input value="<?= isset($stored['O6']) ? $stored['O6'] : '' ?>" id="O6" name="O6" data-cell="O6" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P6']) ? $stored['P6'] : '' ?>" id="P6" name="P6" data-cell="P6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="Q6" name="Q6" data-cell="Q6" class="text-right input_cell btn-block" value="<?= isset($stored['Q6']) ? $stored['Q6'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="R6" name="R6" data-cell="R6" class="text-right input_cell btn-block" value="<?= isset($stored['R6']) ? $stored['R6'] : '80 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="S6" name="S6" data-cell="S6" class="text-right input_cell btn-block" value="<?= isset($stored['S6']) ? $stored['S6'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['T6']) ? $stored['T6'] : '' ?>" id="T6" name="T6" data-cell="T6" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(O6='',P6=''),'',((48-S6)*Q6)*R6)" type="text"></td>
                                            <td class="text-center"><button id="del_admin6" type="button" class="btn btn-danger btn-xs delete_admin text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="admin_row7" class="admin_row" data-admin="7">
                                            <td><input value="<?= isset($stored['O7']) ? $stored['O7'] : '' ?>" id="O7" name="O7" data-cell="O7" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P7']) ? $stored['P7'] : '' ?>" id="P7" name="P7" data-cell="P7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="Q7" name="Q7" data-cell="Q7" class="text-right input_cell btn-block" value="<?= isset($stored['Q7']) ? $stored['Q7'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="R7" name="R7" data-cell="R7" class="text-right input_cell btn-block" value="<?= isset($stored['R7']) ? $stored['R7'] : '80 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="S7" name="S7" data-cell="S7" class="text-right input_cell btn-block" value="<?= isset($stored['S7']) ? $stored['S7'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['T7']) ? $stored['T7'] : '' ?>" id="T7" name="T7" data-cell="T7" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(O7='',P7=''),'',((48-S7)*Q7)*R7)" type="text"></td>
                                            <td class="text-center"><button id="del_admin7" type="button" class="btn btn-danger btn-xs delete_admin text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>

                                        <?php if (isset($stored["addt_admin_list"])): foreach ($stored["addt_admin_list"] as $row): ?>
                                                <tr id="admin_row<?= $row ?>" class="admin_row addt" data-admin="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["O$row"]) ? $stored["O$row"] : '' ?>" id="O<?= $row ?>" name="O<?= $row ?>" data-cell="O<?= $row ?>" class="input_cell btn-block" placeholder="name" type="text"></td>
                                                    <td><input value="<?= isset($stored["P$row"]) ? $stored["P$row"] : '' ?>" id="P<?= $row ?>" name="P<?= $row ?>" data-cell="P<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input id="Q<?= $row ?>" name="Q<?= $row ?>" data-cell="Q<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["Q$row"]) ? $stored["Q$row"] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                                    <td><input id="R<?= $row ?>" name="R<?= $row ?>" data-cell="R<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["R$row"]) ? $stored["R$row"] : '80 %' ?>" data-format="0[.]00 %" type="text"></td>
                                                    <td><input id="S<?= $row ?>" name="S<?= $row ?>" data-cell="S<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["S$row"]) ? $stored["S$row"] : '4' ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["T$row"]) ? $stored["T$row"] : '' ?>" id="T<?= $row ?>" name="T<?= $row ?>" data-cell="T<?= $row ?>" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(O<?= $row ?>='',P<?= $row ?>=''),'',((48-S<?= $row ?>)*Q<?= $row ?>)*R<?= $row ?>)" type="text"></td>
                                                    <td class="text-center"><button id="del_admin<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_admin text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
                                        <?php endforeach;
                                                endif;
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['O107']) ? $stored['O107'] : '' ?>" id="O107" name="O107" data-cell="O107" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P107']) ? $stored['P107'] : '' ?>" id="P107" name="P107" data-cell="P107" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['Q107']) ? $stored['Q107'] : '' ?>" id="Q107" name="Q107" data-cell="Q107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['R107']) ? $stored['R107'] : '' ?>" id="R107" name="R107" data-cell="R107" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['S107']) ? $stored['S107'] : '' ?>" id="S107" name="S107" data-cell="S107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['T107']) ? $stored['T107'] : '' ?>" id="T107" name="T107" data-cell="T107" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="" type="text"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['O108']) ? $stored['O108'] : '' ?>" id="O108" name="O108" data-cell="O108" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P108']) ? $stored['P108'] : '' ?>" id="P108" name="P108" data-cell="P108" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="SUM(P5:P50)" type="text"></td>
                                            <td><input value="<?= isset($stored['Q108']) ? $stored['Q108'] : '' ?>" id="Q108" name="Q108" data-cell="Q108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(Q5:Q50)" type="text"></td>
                                            <td><input value="<?= isset($stored['R108']) ? $stored['R108'] : '' ?>" id="R108" name="R108" data-cell="R108" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="SUM(R5:R50)" type="text"></td>
                                            <td><input value="<?= isset($stored['S108']) ? $stored['S108'] : '' ?>" id="S108" name="S108" data-cell="S108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(S5:S50)" type="text"></td>
                                            <td><input value="<?= isset($stored['T108']) ? $stored['T108'] : '' ?>" id="T108" name="T108" data-cell="T108" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="SUM(T5:T50)" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Total bonuses paid to Admin staff</td>
                                            <td><input value="<?= isset($stored['P109']) ? $stored['P109'] : '' ?>" id="P109" name="P109" data-cell="P109" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other costs associated with the employment of Admin staff</td>
                                            <td><input value="<?= isset($stored['P110']) ? $stored['P110'] : '' ?>" id="P110" name="P110" data-cell="P110" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL ADMINSTRATION STAFF COSTS</label></td>
                                            <td><input value="<?= isset($stored['P111']) ? $stored['P111'] : '' ?>" id="P111" name="P111" data-cell="P111" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="((P109+P108)*109.5%)+P110" type="text"></td>
                                            <td colspan="5">(includes 10% superannuation)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7"><button id="add_admin" type="button" class="btn btn-success btn-sm add_plan text-center" data-id="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <?php } else { ?>
        <div id="a1_tab" class="tab-pane" style="display: none">
        <form data-calx-identifier="CALX1420024221030" class="form-horizontal" action="" method="post" role="form" id="a1">
            <input type="hidden" id="test_count1" name="test_count1" data-cell="ZZ1">
            <input type="hidden" id="test_count2" name="test_count2" data-cell="ZZ2">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Let's start with your team....</h3>
                            <h5>Start by analysing the make-up of your team, including the number of chargeable hours your business has available</h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="advisers" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th><label for="">Advice Providers</label></th>
                                            <th colspan="6"><label for="">This covers anyone who is involved in providing advice to clients.</label></th>
                                        </tr>
                                        <tr>
                                            <th style="width:37%"><label for="">&nbsp;</label></th>
                                            <th style="width:12%"><label for="">Base salary</label></th>
                                            <th style="width:12%"><label for="">How many hours does this person work per week?</label></th>
                                            <th style="width:12%"><label for="">What % of that time is spend doing specific client-related work?</label></th>
                                            <th style="width:12%"><label for="">How many weeks does this person take as annual leave per year?</label></th>
                                            <th style="width:12%"><label for="">Total client-chargeable hours per year</label></th>
                                            <th style="width:3%"><label for=""></label></th>
                                        </tr>
                                    </thead>
                                    <tbody id="adviser_list">
                                        <tr id="adviser_row5" class="adviser_row" data-adviser="5">
                                            <td><input value="<?= isset($stored['A5']) ? $stored['A5'] : '' ?>" id="A5" name="A5" data-cell="A5" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B5']) ? $stored['B5'] : '' ?>" id="B5" name="B5" data-cell="B5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="C5" name="C5" data-cell="C5" class="text-right input_cell btn-block" value="<?= isset($stored['C5']) ? $stored['C5'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="D5" name="D5" data-cell="D5" class="text-right input_cell btn-block" value="<?= isset($stored['D5']) ? $stored['D5'] : '60 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="E5" name="E5" data-cell="E5" class="text-right input_cell btn-block" value="<?= isset($stored['E5']) ? $stored['E5'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['F5']) ? $stored['F5'] : '' ?>" id="F5" name="F5" data-cell="F5" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(A5='',B5=''),'',((48-E5)*C5)*D5)" type="text"></td>
                                            <td class="text-center"><button id="del_adviser5" type="button" class="btn btn-danger btn-xs delete_adviser text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="adviser_row6" class="adviser_row" data-adviser="6">
                                            <td><input value="<?= isset($stored['A6']) ? $stored['A6'] : '' ?>" id="A6" name="A6" data-cell="A6" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B6']) ? $stored['B6'] : '' ?>" id="B6" name="B6" data-cell="B6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="C6" name="C6" data-cell="C6" class="text-right input_cell btn-block" value="<?= isset($stored['C6']) ? $stored['C6'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="D6" name="D6" data-cell="D6" class="text-right input_cell btn-block" value="<?= isset($stored['D6']) ? $stored['D6'] : '60 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="E6" name="E6" data-cell="E6" class="text-right input_cell btn-block" value="<?= isset($stored['E6']) ? $stored['E6'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['F6']) ? $stored['F6'] : '' ?>" id="F6" name="F6" data-cell="F6" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(A6='',B6=''),'',((48-E6)*C6)*D6)" type="text"></td>
                                            <td class="text-center"><button id="del_adviser6" type="button" class="btn btn-danger btn-xs delete_adviser text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="adviser_row7" class="adviser_row" data-adviser="7">
                                            <td><input value="<?= isset($stored['A7']) ? $stored['A7'] : '' ?>" id="A7" name="A7" data-cell="A7" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B7']) ? $stored['B7'] : '' ?>" id="B7" name="B7" data-cell="B7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="C7" name="C7" data-cell="C7" class="text-right input_cell btn-block" value="<?= isset($stored['C7']) ? $stored['C7'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="D7" name="D7" data-cell="D7" class="text-right input_cell btn-block" value="<?= isset($stored['D7']) ? $stored['D7'] : '60 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="E7" name="E7" data-cell="E7" class="text-right input_cell btn-block" value="<?= isset($stored['E7']) ? $stored['E7'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['F7']) ? $stored['F7'] : '' ?>" id="F7" name="F7" data-cell="F7" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(A7='',B7=''),'',((48-E7)*C7)*D7)" type="text"></td>
                                            <td class="text-center"><button id="del_adviser7" type="button" class="btn btn-danger btn-xs delete_adviser text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>

                                        <?php if (isset($stored["addt_adviser_list"])): foreach ($stored["addt_adviser_list"] as $row): ?>
                                                <tr id="adviser_row<?= $row ?>" class="adviser_row addt" data-adviser="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["A$row"]) ? $stored["A$row"] : "" ?>" id="A<?= $row ?>" name="A<?= $row ?>" data-cell="A<?= $row ?>" class="input_cell btn-block" placeholder="name" type="text"></td>
                                                    <td><input value="<?= isset($stored["B$row"]) ? $stored["B$row"] : "" ?>" id="B<?= $row ?>" name="B<?= $row ?>" data-cell="B<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input id="C<?= $row ?>" name="C<?= $row ?>" data-cell="C<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["C$row"]) ? $stored["C$row"] : "37.50" ?>" data-format="0,0[.]00" type="text"></td>
                                                    <td><input id="D<?= $row ?>" name="D<?= $row ?>" data-cell="D<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["D$row"]) ? $stored["D$row"] : "60 %" ?>" data-format="0[.]00 %" type="text"></td>
                                                    <td><input id="E<?= $row ?>" name="E<?= $row ?>" data-cell="E<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["E$row"]) ? $stored["E$row"] : "4" ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["F$row"]) ? $stored["F$row"] : "" ?>" id="F<?= $row ?>" name="F<?= $row ?>" data-cell="F<?= $row ?>" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(A<?= $row ?>='',B<?= $row ?>=''),'',((48-E<?= $row ?>)*C<?= $row ?>)*D<?= $row ?>)" type="text"></td>
                                                    <td class="text-center"><button id="del_adviser<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_adviser text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
                                            <?php endforeach;
                                        endif;
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['A107']) ? $stored['A107'] : '' ?>" id="A107" name="A107" data-cell="A107" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B107']) ? $stored['B107'] : '' ?>" id="B107" name="B107" data-cell="B107" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['C107']) ? $stored['C107'] : '' ?>" id="C107" name="C107" data-cell="C107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['D107']) ? $stored['D107'] : '' ?>" id="D107" name="D107" data-cell="D107" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['E107']) ? $stored['E107'] : '' ?>" id="E107" name="E107" data-cell="E107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['F107']) ? $stored['F107'] : '' ?>" id="F107" name="F107" data-cell="F107" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="" type="text"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['A108']) ? $stored['A108'] : '' ?>" id="A108" name="A108" data-cell="A108" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['B108']) ? $stored['B108'] : '' ?>" id="B108" name="B108" data-cell="B108" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="SUM(B5:B50)" type="text"></td>
                                            <td><input value="<?= isset($stored['C108']) ? $stored['C108'] : '' ?>" id="C108" name="C108" data-cell="C108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(C5:C50)" type="text"></td>
                                            <td><input value="<?= isset($stored['D108']) ? $stored['D108'] : '' ?>" id="D108" name="D108" data-cell="D108" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="SUM(D5:D50)" type="text"></td>
                                            <td><input value="<?= isset($stored['E108']) ? $stored['E108'] : '' ?>" id="E108" name="E108" data-cell="E108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(E5:E50)" type="text"></td>
                                            <td><input value="<?= isset($stored['F108']) ? $stored['F108'] : '' ?>" id="F108" name="F108" data-cell="F108" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="SUM(F5:F50)" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Total bonuses paid to Advisory staff</td>
                                            <td><input value="<?= isset($stored['B109']) ? $stored['B109'] : '' ?>" id="B109" name="B109" data-cell="B109" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other costs associated with the employment of advisers</td>
                                            <td><input value="<?= isset($stored['B110']) ? $stored['B110'] : '' ?>" id="B110" name="B110" data-cell="B110" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL ADVISER COSTS</label></td>
                                            <td><input value="<?= isset($stored['B111']) ? $stored['B111'] : '' ?>" id="B111" name="B111" data-cell="B111" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="((B109+B108)*109.5%)+B110" type="text"></td>
                                            <td colspan="5">(includes 10% superannuation)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7"><button id="add_adviser" type="button" class="btn btn-success btn-sm add_adviser text-center" data-id="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="paraplanners" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th><label for="">Advice Producers</label></th>
                                            <th colspan="6"><label for="">This covers anyone who is involved in the production of advice strategy and documentation.</label></th>
                                        </tr>
                                        <tr>
                                            <th style="width:37%"><label for="">&nbsp;</label></th>
                                            <th style="width:12%"><label for="">Base salary</label></th>
                                            <th style="width:12%"><label for="">How many hours does this person work per week?</label></th>
                                            <th style="width:12%"><label for="">What % of that time is spend doing specific client-related work?</label></th>
                                            <th style="width:12%"><label for="">How many weeks does this person take as annual leave per year?</label></th>
                                            <th style="width:12%"><label for="">Total client-chargeable hours per year</label></th>
                                            <th style="width:3%"><label for=""></label></th>
                                        </tr>
                                    </thead>
                                    <tbody id="plan_list">
                                        <tr id="plan_row5" class="plan_row" data-plan="5">
                                            <td><input value="<?= isset($stored['H5']) ? $stored['H5'] : '' ?>" id="H5" name="H5" data-cell="H5" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I5']) ? $stored['I5'] : '' ?>" id="I5" name="I5" data-cell="I5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="J5" name="J5" data-cell="J5" class="text-right input_cell btn-block" value="<?= isset($stored['J5']) ? $stored['J5'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="K5" name="K5" data-cell="K5" class="text-right input_cell btn-block" value="<?= isset($stored['K5']) ? $stored['K5'] : '90 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="L5" name="L5" data-cell="L5" class="text-right input_cell btn-block" value="<?= isset($stored['L5']) ? $stored['L5'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['M5']) ? $stored['M5'] : '' ?>" id="M5" name="M5" data-cell="M5" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(H5='',I5=''),'',((48-L5)*J5)*K5)" type="text"></td>
                                            <td class="text-center"><button id="del_plan5" type="button" class="btn btn-danger btn-xs delete_plan text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="plan_row6" class="plan_row" data-plan="6">
                                            <td><input value="<?= isset($stored['H6']) ? $stored['H6'] : '' ?>" id="H6" name="H6" data-cell="H6" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I6']) ? $stored['I6'] : '' ?>" id="I6" name="I6" data-cell="I6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="J6" name="J6" data-cell="J6" class="text-right input_cell btn-block" value="<?= isset($stored['J6']) ? $stored['J6'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="K6" name="K6" data-cell="K6" class="text-right input_cell btn-block" value="<?= isset($stored['K6']) ? $stored['K6'] : '90 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="L6" name="L6" data-cell="L6" class="text-right input_cell btn-block" value="<?= isset($stored['L6']) ? $stored['L6'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['M6']) ? $stored['M6'] : '' ?>" id="M6" name="M6" data-cell="M6" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(H6='',I6=''),'',((48-L6)*J6)*K6)" type="text"></td>
                                            <td class="text-center"><button id="del_plan6" type="button" class="btn btn-danger btn-xs delete_plan text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="plan_row7" class="plan_row" data-plan="7">
                                            <td><input value="<?= isset($stored['H7']) ? $stored['H7'] : '' ?>" id="H7" name="H7" data-cell="H7" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I7']) ? $stored['I7'] : '' ?>" id="I7" name="I7" data-cell="I7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="J7" name="J7" data-cell="J7" class="text-right input_cell btn-block" value="<?= isset($stored['J7']) ? $stored['J7'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="K7" name="K7" data-cell="K7" class="text-right input_cell btn-block" value="<?= isset($stored['K7']) ? $stored['K7'] : '90 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="L7" name="L7" data-cell="L7" class="text-right input_cell btn-block" value="<?= isset($stored['L7']) ? $stored['L7'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['M7']) ? $stored['M7'] : '' ?>" id="M7" name="M7" data-cell="M7" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(H7='',I7=''),'',((48-L7)*J7)*K7)" type="text"></td>
                                            <td class="text-center"><button id="del_plan7" type="button" class="btn btn-danger btn-xs delete_plan text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>

                                        <?php if (isset($stored["addt_plan_list"])): foreach ($stored["addt_plan_list"] as $row): ?>
                                                <tr id="plan_row<?= $row ?>" class="plan_row addt" data-plan="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["H$row"]) ? $stored["H$row"] : '' ?>" id="H<?= $row ?>" name="H<?= $row ?>" data-cell="H<?= $row ?>" class="input_cell btn-block" placeholder="name" type="text"></td>
                                                    <td><input value="<?= isset($stored["I$row"]) ? $stored["I$row"] : '' ?>" id="I<?= $row ?>" name="I<?= $row ?>" data-cell="I<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input id="J<?= $row ?>" name="J<?= $row ?>" data-cell="J<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["J$row"]) ? $stored["J$row"] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                                    <td><input id="K<?= $row ?>" name="K<?= $row ?>" data-cell="K<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["K$row"]) ? $stored["K$row"] : '90 %' ?>" data-format="0[.]00 %" type="text"></td>
                                                    <td><input id="L<?= $row ?>" name="L<?= $row ?>" data-cell="L<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["L$row"]) ? $stored["L$row"] : '4' ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["M$row"]) ? $stored["M$row"] : '' ?>" id="M<?= $row ?>" name="M<?= $row ?>" data-cell="M<?= $row ?>" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(H<?= $row ?>='',I<?= $row ?>=''),'',((48-L<?= $row ?>)*J<?= $row ?>)*K<?= $row ?>)" type="text"></td>
                                                    <td class="text-center"><button id="del_plan<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_plan text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
                                            <?php endforeach;
                                        endif;
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['H107']) ? $stored['H107'] : '' ?>" id="H107" name="H107" data-cell="H107" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I107']) ? $stored['I107'] : '' ?>" id="I107" name="I107" data-cell="I107" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['J107']) ? $stored['J107'] : '' ?>" id="J107" name="J107" data-cell="J107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['K107']) ? $stored['K107'] : '' ?>" id="K107" name="K107" data-cell="K107" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['L107']) ? $stored['L107'] : '' ?>" id="L107" name="L107" data-cell="L107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['M107']) ? $stored['M107'] : '' ?>" id="M107" name="M107" data-cell="M107" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="" type="text"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['H108']) ? $stored['H108'] : '' ?>" id="H108" name="H108" data-cell="H108" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['I108']) ? $stored['I108'] : '' ?>" id="I108" name="I108" data-cell="I108" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="SUM(I5:I50)" type="text"></td>
                                            <td><input value="<?= isset($stored['J108']) ? $stored['J108'] : '' ?>" id="J108" name="J108" data-cell="J108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(J5:J50)" type="text"></td>
                                            <td><input value="<?= isset($stored['K108']) ? $stored['K108'] : '' ?>" id="K108" name="K108" data-cell="K108" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="SUM(K5:K50)" type="text"></td>
                                            <td><input value="<?= isset($stored['L108']) ? $stored['L108'] : '' ?>" id="L108" name="L108" data-cell="L108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(L5:L50)" type="text"></td>
                                            <td><input value="<?= isset($stored['M108']) ? $stored['M108'] : '' ?>" id="M108" name="M108" data-cell="M108" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="SUM(M5:M50)" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Total bonuses paid to Paraplanners</td>
                                            <td><input value="<?= isset($stored['I109']) ? $stored['I109'] : '' ?>" id="I109" name="I109" data-cell="I109" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other costs associated with the employment of paraplanners</td>
                                            <td><input value="<?= isset($stored['I110']) ? $stored['I110'] : '' ?>" id="I110" name="I110" data-cell="I110" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL PARAPLANNER COSTS</label></td>
                                            <td><input value="<?= isset($stored['I111']) ? $stored['I111'] : '' ?>" id="I111" name="I111" data-cell="I111" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="((I109+I108)*109.5%)+I110" type="text"></td>
                                            <td colspan="5">(includes 10% superannuation)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7"><button id="add_plan" type="button" class="btn btn-success btn-sm add_plan text-center" data-id="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="admin" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th><label for="">Admininstrative support</label></th>
                                            <th colspan="6"><label for="">This covers anyone who is provides adminstrative support directly related to providing advice to clients.</label></th>
                                        </tr>
                                        <tr>
                                            <th style="width:37%"><label for="">&nbsp;</label></th>
                                            <th style="width:12%"><label for="">Base salary</label></th>
                                            <th style="width:12%"><label for="">How many hours does this person work per week?</label></th>
                                            <th style="width:12%"><label for="">What % of that time is spend doing specific client-related work?</label></th>
                                            <th style="width:12%"><label for="">How many weeks does this person take as annual leave per year?</label></th>
                                            <th style="width:12%"><label for="">Total client-chargeable hours per year</label></th>
                                            <th style="width:3%"><label for=""></label></th>
                                        </tr>
                                    </thead>
                                    <tbody id="admin_list">
                                        <tr id="admin_row5" class="admin_row" data-admin="5">
                                            <td><input value="<?= isset($stored['O5']) ? $stored['O5'] : '' ?>" id="O5" name="O5" data-cell="O5" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P5']) ? $stored['P5'] : '' ?>" id="P5" name="P5" data-cell="P5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="Q5" name="Q5" data-cell="Q5" class="text-right input_cell btn-block" value="<?= isset($stored['Q5']) ? $stored['Q5'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="R5" name="R5" data-cell="R5" class="text-right input_cell btn-block" value="<?= isset($stored['R5']) ? $stored['R5'] : '80 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="S5" name="S5" data-cell="S5" class="text-right input_cell btn-block" value="<?= isset($stored['S5']) ? $stored['S5'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['T5']) ? $stored['T5'] : '' ?>" id="T5" name="T5" data-cell="T5" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(O5='',P5=''),'',((48-S5)*Q5)*R5)" type="text"></td>
                                            <td class="text-center"><button id="del_admin5" type="button" class="btn btn-danger btn-xs delete_admin text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="admin_row6" class="admin_row" data-admin="6">
                                            <td><input value="<?= isset($stored['O6']) ? $stored['O6'] : '' ?>" id="O6" name="O6" data-cell="O6" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P6']) ? $stored['P6'] : '' ?>" id="P6" name="P6" data-cell="P6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="Q6" name="Q6" data-cell="Q6" class="text-right input_cell btn-block" value="<?= isset($stored['Q6']) ? $stored['Q6'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="R6" name="R6" data-cell="R6" class="text-right input_cell btn-block" value="<?= isset($stored['R6']) ? $stored['R6'] : '80 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="S6" name="S6" data-cell="S6" class="text-right input_cell btn-block" value="<?= isset($stored['S6']) ? $stored['S6'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['T6']) ? $stored['T6'] : '' ?>" id="T6" name="T6" data-cell="T6" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(O6='',P6=''),'',((48-S6)*Q6)*R6)" type="text"></td>
                                            <td class="text-center"><button id="del_admin6" type="button" class="btn btn-danger btn-xs delete_admin text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="admin_row7" class="admin_row" data-admin="7">
                                            <td><input value="<?= isset($stored['O7']) ? $stored['O7'] : '' ?>" id="O7" name="O7" data-cell="O7" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P7']) ? $stored['P7'] : '' ?>" id="P7" name="P7" data-cell="P7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input id="Q7" name="Q7" data-cell="Q7" class="text-right input_cell btn-block" value="<?= isset($stored['Q7']) ? $stored['Q7'] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                            <td><input id="R7" name="R7" data-cell="R7" class="text-right input_cell btn-block" value="<?= isset($stored['R7']) ? $stored['R7'] : '80 %' ?>" data-format="0[.]00 %" type="text"></td>
                                            <td><input id="S7" name="S7" data-cell="S7" class="text-right input_cell btn-block" value="<?= isset($stored['S7']) ? $stored['S7'] : '4' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['T7']) ? $stored['T7'] : '' ?>" id="T7" name="T7" data-cell="T7" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(O7='',P7=''),'',((48-S7)*Q7)*R7)" type="text"></td>
                                            <td class="text-center"><button id="del_admin7" type="button" class="btn btn-danger btn-xs delete_admin text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>

                                        <?php if (isset($stored["addt_admin_list"])): foreach ($stored["addt_admin_list"] as $row): ?>
                                                <tr id="admin_row<?= $row ?>" class="admin_row addt" data-admin="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["O$row"]) ? $stored["O$row"] : '' ?>" id="O<?= $row ?>" name="O<?= $row ?>" data-cell="O<?= $row ?>" class="input_cell btn-block" placeholder="name" type="text"></td>
                                                    <td><input value="<?= isset($stored["P$row"]) ? $stored["P$row"] : '' ?>" id="P<?= $row ?>" name="P<?= $row ?>" data-cell="P<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input id="Q<?= $row ?>" name="Q<?= $row ?>" data-cell="Q<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["Q$row"]) ? $stored["Q$row"] : '37.50' ?>" data-format="0,0[.]00" type="text"></td>
                                                    <td><input id="R<?= $row ?>" name="R<?= $row ?>" data-cell="R<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["R$row"]) ? $stored["R$row"] : '80 %' ?>" data-format="0[.]00 %" type="text"></td>
                                                    <td><input id="S<?= $row ?>" name="S<?= $row ?>" data-cell="S<?= $row ?>" class="text-right input_cell btn-block" value="<?= isset($stored["S$row"]) ? $stored["S$row"] : '4' ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["T$row"]) ? $stored["T$row"] : '' ?>" id="T<?= $row ?>" name="T<?= $row ?>" data-cell="T<?= $row ?>" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="IF(OR(O<?= $row ?>='',P<?= $row ?>=''),'',((48-S<?= $row ?>)*Q<?= $row ?>)*R<?= $row ?>)" type="text"></td>
                                                    <td class="text-center"><button id="del_admin<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_admin text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
                                        <?php endforeach;
                                                endif;
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['O107']) ? $stored['O107'] : '' ?>" id="O107" name="O107" data-cell="O107" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P107']) ? $stored['P107'] : '' ?>" id="P107" name="P107" data-cell="P107" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['Q107']) ? $stored['Q107'] : '' ?>" id="Q107" name="Q107" data-cell="Q107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['R107']) ? $stored['R107'] : '' ?>" id="R107" name="R107" data-cell="R107" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['S107']) ? $stored['S107'] : '' ?>" id="S107" name="S107" data-cell="S107" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['T107']) ? $stored['T107'] : '' ?>" id="T107" name="T107" data-cell="T107" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="" type="text"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td><input value="<?= isset($stored['O108']) ? $stored['O108'] : '' ?>" id="O108" name="O108" data-cell="O108" class="input_cell btn-block" placeholder="name" type="text"></td>
                                            <td><input value="<?= isset($stored['P108']) ? $stored['P108'] : '' ?>" id="P108" name="P108" data-cell="P108" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" data-formula="SUM(P5:P50)" type="text"></td>
                                            <td><input value="<?= isset($stored['Q108']) ? $stored['Q108'] : '' ?>" id="Q108" name="Q108" data-cell="Q108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(Q5:Q50)" type="text"></td>
                                            <td><input value="<?= isset($stored['R108']) ? $stored['R108'] : '' ?>" id="R108" name="R108" data-cell="R108" class="text-right input_cell btn-block" data-format="0[.]00 %" data-formula="SUM(R5:R50)" type="text"></td>
                                            <td><input value="<?= isset($stored['S108']) ? $stored['S108'] : '' ?>" id="S108" name="S108" data-cell="S108" class="text-right input_cell btn-block" data-format="0,0[.]00" data-formula="SUM(S5:S50)" type="text"></td>
                                            <td><input value="<?= isset($stored['T108']) ? $stored['T108'] : '' ?>" id="T108" name="T108" data-cell="T108" class="text-right formula_cell btn-block" disabled="" data-format="0,0[.]00" data-formula="SUM(T5:T50)" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Total bonuses paid to Admin staff</td>
                                            <td><input value="<?= isset($stored['P109']) ? $stored['P109'] : '' ?>" id="P109" name="P109" data-cell="P109" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other costs associated with the employment of Admin staff</td>
                                            <td><input value="<?= isset($stored['P110']) ? $stored['P110'] : '' ?>" id="P110" name="P110" data-cell="P110" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL ADMINSTRATION STAFF COSTS</label></td>
                                            <td><input value="<?= isset($stored['P111']) ? $stored['P111'] : '' ?>" id="P111" name="P111" data-cell="P111" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="((P109+P108)*109.5%)+P110" type="text"></td>
                                            <td colspan="5">(includes 10% superannuation)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7"><button id="add_admin" type="button" class="btn btn-success btn-sm add_plan text-center" data-id="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <?php } ?>
    
    <div id="a2_tab" class="tab-pane ">
        <form data-calx-identifier="CALX1420024221056" class="form-horizontal" action="" method="post" role="form" id="a2">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Now let's talk about your financial targets </h3>
                            <h5>This will form the basis on which we create your pricing model. So, it's best not to underestimate here.</h5>
                        </div>
                    </div>

                    <div class="box top">

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label for="" class="col-sm-6">Total expenses from last year</label>
                                    <div class="col-sm-3 col-sm-offset-3">
                                        <input value="<?= isset($stored['2B4']) ? $stored['2B4'] : '' ?>" id="2B4" name="2B4" data-cell="B4" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-6">Do you foresee these changing greatly next year?</label>
                                    <div class="col-sm-3 col-sm-offset-3">
                                        <select dir="rtl" id="2B5" name="2B5" data-cell="B5" class="text-right input_cell btn-block text-right">
                                            <option value="0" style="text-align:right" <?= isset($stored['2B5']) && $stored['2B5'] == '0' ? 'selected="selected"' : '' ?> >NO</option>
                                            <option value="1" style="text-align:right" <?= isset($stored['2B5']) && $stored['2B5'] == '1' ? 'selected="selected"' : '' ?> >YES</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="2A6" class="form-group hidden">
                                    <label for="" class="col-sm-6">By what % do you expect your expenses to grow or fall next year</label>
                                    <div class="col-sm-3 col-sm-offset-3">
                                        <input value="<?= isset($stored['2B6']) ? $stored['2B6'] : '' ?>" id="2B6" name="2B6" data-cell="B6" class="text-right input_cell btn-block" data-format="0[.]00 %" type="text">
                                    </div>
                                </div>
                                <div class="form-group hidden">
                                    <label for="" class="col-sm-6">Projected expenses</label>
                                    <div class="col-sm-3 col-sm-offset-3">
                                        <input value="<?= isset($stored['2B7']) ? $stored['2B7'] : '' ?>" id="2B7" name="2B7" data-cell="B7" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="IF(B5=0,B4,B4*(1+B6))" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-6">Total Employment costs</label>
                                    <div class="col-sm-3 col-sm-offset-3">
                                        <input value="<?= isset($stored['2B9']) ? $stored['2B9'] : '' ?>" id="2B9" name="2B9" data-cell="B9" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="IF(B5=0,(#a1!B111+#a1!I111+#a1!P111),(#a1!B111+#a1!I111+#a1!P111)*(1+B6))" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-6">Total non-employment costs</label>
                                    <div class="col-sm-3 col-sm-offset-3">
                                        <input value="<?= isset($stored['2B10']) ? $stored['2B10'] : '' ?>" id="2B10" name="2B10" data-cell="B10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="B7-B9" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-6">Target profit margin for the coming year?</label>
                                    <div class="col-sm-3 col-sm-offset-3">
                                        <input value="<?= isset($stored['2B12']) ? $stored['2B12'] : '' ?>" id="2B12" name="2B12" data-cell="B12" class="text-right input_cell btn-block" data-format=" 0[.]00 %" type="text">
                                    </div>
                                </div>
                                <div class="form-group">&nbsp;</div>
                                <div class="form-group top space">
                                    <label for="" class="col-sm-6">TARGET REVENUE FOR THE COMING YEAR</label>
                                    <div class="col-sm-3 col-sm-offset-3">
                                        <input value="<?= isset($stored['2B14']) ? $stored['2B14'] : '' ?>" id="2B14" name="2B14" data-cell="B14" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="IF(B12<100%, B7/(100%-B12),B7*(100%+B12))" type="text">
                                    </div>
                                </div>
                                <h5>Don't worry if this isn't your actual number, though it's what we'll use to work out the pricing model</h5>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>

    <?php $allowed_role = array('admin','principal'); if(in_array($this->session->userdata('role'), $allowed_role)) { ?>
    <div id="a3_tab" class="tab-pane">
    <?php } else { ?>
    <div id="a3_tab" class="tab-pane active">
    <?php } ?>
        <form data-calx-identifier="CALX1420024221060" class="form-horizontal" action="" method="post" role="form" id="a3">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Your Hourly Rates</h3>
                            <h5>This is what you need to charge on average per hour of client-related work to hit profit targets</h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="a3_table" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:40%"><label for="">&nbsp;</label></th>
                                            <th style="width:20%"><label for="">Employee charge</label></th>
                                            <th style="width:20%"><label for="">Overheads</label></th>
                                            <th style="width:20%"><label for="">CHARGE OUT RATE (not including GST)</label></th>
                                        </tr>
                                    </thead>
                                    <tbody id="">
                                        <tr>
                                            <td>Advice Providers</td>
                                            <td><input value="<?= isset($stored['3B5']) ? $stored['3B5'] : '' ?>" id="3B5" name="3B5" data-cell="B5" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="(#a1!B111/(#a1!F108))/(1-#a2!B12)" type="text"></td>
                                            <td><input value="<?= isset($stored['3C5']) ? $stored['3C5'] : '' ?>" id="3C5" name="3C5" data-cell="C5" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="(#a2!B10/(#a1!F108+#a1!M108+#a1!T108))/(1-#a2!B12)" type="text"></td>
                                            <td><input value="<?= isset($stored['3D5']) ? $stored['3D5'] : '' ?>" id="3D5" name="3D5" data-cell="D5" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="(B5+C5)" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Advice Producers</td>
                                            <td><input value="<?= isset($stored['3B6']) ? $stored['3B6'] : '' ?>" id="3B6" name="3B6" data-cell="B6" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="(#a1!I111/(#a1!M108))/(1-#a2!B12)" type="text"></td>
                                            <td><input value="<?= isset($stored['3C6']) ? $stored['3C6'] : '' ?>" id="3C6" name="3C6" data-cell="C6" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="C5" type="text"></td>
                                            <td><input value="<?= isset($stored['3D6']) ? $stored['3D6'] : '' ?>" id="3D6" name="3D6" data-cell="D6" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="(B6+C6)" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Admin</td>
                                            <td><input value="<?= isset($stored['3B7']) ? $stored['3B7'] : '' ?>" id="3B7" name="3B7" data-cell="B7" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="(#a1!P111/(#a1!T108))/(1-#a2!B12)" type="text"></td>
                                            <td><input value="<?= isset($stored['3C7']) ? $stored['3C7'] : '' ?>" id="3C7" name="3C7" data-cell="C7" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="C6" type="text"></td>
                                            <td><input value="<?= isset($stored['3D7']) ? $stored['3D7'] : '' ?>" id="3D7" name="3D7" data-cell="D7" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="(B7+C7)" type="text"></td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div id="b1_tab" class="tab-pane">
        <form data-calx-identifier="CALX1420024221063" class="form-horizontal" action="" method="post" role="form" id="b1">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Your Standard Advice process</h3>
                            <h5 class="text-justify">Imagine the process you'd take a fairly standard holistic client through. Don't worry too much about variations in strategy at this stage. We'll cover that later. Instead, consider </h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="b1_table" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:30%"><label for="">&nbsp;</label></th>
                                            <th style="width:10%"><label for="">Advice Providers time (mins)</label></th>
                                            <th style="width:10%"><label for="">Advice Producers</label></th>
                                            <th style="width:10%"><label for="">Admin</label></th>
                                            <th style="width:10%"><label for="">Other costs</label></th>
                                            <th style="width:10%"><label for=""></label></th>
                                            <th style="width:20%"><label for="">Notes</label></th>
                                            <th style="width:3%"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="b1_list">
                                        <tr>
                                            <td>Pre-meeting engagement</td>
                                            <td><input value="<?= isset($stored['4B107']) ? $stored['4B107'] : '' ?>" id="4B107" name="4B107" data-cell="B107" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C107']) ? $stored['4C107'] : '' ?>" id="4C107" name="4C107" data-cell="C107" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D107']) ? $stored['4D107'] : '' ?>" id="4D107" name="4D107" data-cell="D107" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E107']) ? $stored['4E107'] : '' ?>" id="4E107" name="4E107" data-cell="E107" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G107']) ? $stored['4G107'] : '' ?>" id="4G107" name="4G107" data-cell="G107" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Meeting prep</td>
                                            <td><input value="<?= isset($stored['4B108']) ? $stored['4B108'] : '' ?>" id="4B108" name="4B108" data-cell="B108" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C108']) ? $stored['4C108'] : '' ?>" id="4C108" name="4C108" data-cell="C108" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D108']) ? $stored['4D108'] : '' ?>" id="4D108" name="4D108" data-cell="D108" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E108']) ? $stored['4E108'] : '' ?>" id="4E108" name="4E108" data-cell="E108" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G108']) ? $stored['4G108'] : '' ?>" id="4G108" name="4G108" data-cell="G108" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Initial meeting</td>
                                            <td><input value="<?= isset($stored['4B109']) ? $stored['4B109'] : '' ?>" id="4B109" name="4B109" data-cell="B109" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C109']) ? $stored['4C109'] : '' ?>" id="4C109" name="4C109" data-cell="C109" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D109']) ? $stored['4D109'] : '' ?>" id="4D109" name="4D109" data-cell="D109" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E109']) ? $stored['4E109'] : '' ?>" id="4E109" name="4E109" data-cell="E109" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G109']) ? $stored['4G109'] : '' ?>" id="4G109" name="4G109" data-cell="G109" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Initial meeting debrief</td>
                                            <td><input value="<?= isset($stored['4B110']) ? $stored['4B110'] : '' ?>" id="4B110" name="4B110" data-cell="B110" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C110']) ? $stored['4C110'] : '' ?>" id="4C110" name="4C110" data-cell="C110" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D110']) ? $stored['4D110'] : '' ?>" id="4D110" name="4D110" data-cell="D110" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E110']) ? $stored['4E110'] : '' ?>" id="4E110" name="4E110" data-cell="E110" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G110']) ? $stored['4G110'] : '' ?>" id="4G110" name="4G110" data-cell="G110" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Strategy planning</td>
                                            <td><input value="<?= isset($stored['4B111']) ? $stored['4B111'] : '' ?>" id="4B111" name="4B111" data-cell="B111" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C111']) ? $stored['4C111'] : '' ?>" id="4C111" name="4C111" data-cell="C111" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D111']) ? $stored['4D111'] : '' ?>" id="4D111" name="4D111" data-cell="D111" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E111']) ? $stored['4E111'] : '' ?>" id="4E111" name="4E111" data-cell="E111" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G111']) ? $stored['4G111'] : '' ?>" id="4G111" name="4G111" data-cell="G111" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Pre-meeting preparation</td>
                                            <td><input value="<?= isset($stored['4B112']) ? $stored['4B112'] : '' ?>" id="4B112" name="4B112" data-cell="B112" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C112']) ? $stored['4C112'] : '' ?>" id="4C112" name="4C112" data-cell="C112" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D112']) ? $stored['4D112'] : '' ?>" id="4D112" name="4D112" data-cell="D112" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E112']) ? $stored['4E112'] : '' ?>" id="4E112" name="4E112" data-cell="E112" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G112']) ? $stored['4G112'] : '' ?>" id="4G112" name="4G112" data-cell="G112" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Second meeting</td>
                                            <td><input value="<?= isset($stored['4B113']) ? $stored['4B113'] : '' ?>" id="4B113" name="4B113" data-cell="B113" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C113']) ? $stored['4C113'] : '' ?>" id="4C113" name="4C113" data-cell="C113" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D113']) ? $stored['4D113'] : '' ?>" id="4D113" name="4D113" data-cell="D113" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E113']) ? $stored['4E113'] : '' ?>" id="4E113" name="4E113" data-cell="E113" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G113']) ? $stored['4G113'] : '' ?>" id="4G113" name="4G113" data-cell="G113" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Finalise strategy</td>
                                            <td><input value="<?= isset($stored['4B114']) ? $stored['4B114'] : '' ?>" id="4B114" name="4B114" data-cell="B114" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C114']) ? $stored['4C114'] : '' ?>" id="4C114" name="4C114" data-cell="C114" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D114']) ? $stored['4D114'] : '' ?>" id="4D114" name="4D114" data-cell="D114" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E114']) ? $stored['4E114'] : '' ?>" id="4E114" name="4E114" data-cell="E114" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G114']) ? $stored['4G114'] : '' ?>" id="4G114" name="4G114" data-cell="G114" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Prepare SOA</td>
                                            <td><input value="<?= isset($stored['4B115']) ? $stored['4B115'] : '' ?>" id="4B115" name="4B115" data-cell="B115" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C115']) ? $stored['4C115'] : '' ?>" id="4C115" name="4C115" data-cell="C115" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D115']) ? $stored['4D115'] : '' ?>" id="4D115" name="4D115" data-cell="D115" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E115']) ? $stored['4E115'] : '' ?>" id="4E115" name="4E115" data-cell="E115" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G115']) ? $stored['4G115'] : '' ?>" id="4G115" name="4G115" data-cell="G115" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Third meeting</td>
                                            <td><input value="<?= isset($stored['4B116']) ? $stored['4B116'] : '' ?>" id="4B116" name="4B116" data-cell="B116" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C116']) ? $stored['4C116'] : '' ?>" id="4C116" name="4C116" data-cell="C116" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D116']) ? $stored['4D116'] : '' ?>" id="4D116" name="4D116" data-cell="D116" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E116']) ? $stored['4E116'] : '' ?>" id="4E116" name="4E116" data-cell="E116" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G116']) ? $stored['4G116'] : '' ?>" id="4G116" name="4G116" data-cell="G116" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Implementation</td>
                                            <td><input value="<?= isset($stored['4B117']) ? $stored['4B117'] : '' ?>" id="4B117" name="4B117" data-cell="B117" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C117']) ? $stored['4C117'] : '' ?>" id="4C117" name="4C117" data-cell="C117" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D117']) ? $stored['4D117'] : '' ?>" id="4D117" name="4D117" data-cell="D117" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E117']) ? $stored['4E117'] : '' ?>" id="4E117" name="4E117" data-cell="E117" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G117']) ? $stored['4G117'] : '' ?>" id="4G117" name="4G117" data-cell="G117" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Post implementation follow-up</td>
                                            <td><input value="<?= isset($stored['4B118']) ? $stored['4B118'] : '' ?>" id="4B118" name="4B118" data-cell="B118" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C118']) ? $stored['4C118'] : '' ?>" id="4C118" name="4C118" data-cell="C118" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D118']) ? $stored['4D118'] : '' ?>" id="4D118" name="4D118" data-cell="D118" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E118']) ? $stored['4E118'] : '' ?>" id="4E118" name="4E118" data-cell="E118" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G118']) ? $stored['4G118'] : '' ?>" id="4G118" name="4G118" data-cell="G118" class="text-left input_cell btn-block" type="text"></td>
                                        </tr>
                                        <tr id="b1_row5" class="b1_row" data-b1="5">
                                            <td><input value="<?= isset($stored['4A5']) ? $stored['4A5'] : '' ?>" id="4A5" name="4A5" data-cell="A5" class="text-left input_cell btn-block" type="text"></td>
                                            <td><input value="<?= isset($stored['4B5']) ? $stored['4B5'] : '' ?>" id="4B5" name="4B5" data-cell="B5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4C5']) ? $stored['4C5'] : '' ?>" id="4C5" name="4C5" data-cell="C5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4D5']) ? $stored['4D5'] : '' ?>" id="4D5" name="4D5" data-cell="D5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['4E5']) ? $stored['4E5'] : '' ?>" id="4E5" name="4E5" data-cell="E5" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G5']) ? $stored['4G5'] : '' ?>" id="4G5" name="4G5" data-cell="G5" class="text-left input_cell btn-block" type="text"></td>
                                            <td class="text-center"><button id="del_b15" type="button" class="btn btn-danger btn-xs delete_b1 text-center" data-id="4"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
<?php if (isset($stored['addt_b1_list'])): foreach ($stored['addt_b1_list'] as $row): ?>
                                                <tr id="b1_row<?= $row ?>" class="b1_row addt" data-b1="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["4A$row"]) ? $stored["4A$row"] : "" ?>" id="4A<?= $row ?>" name="4A<?= $row ?>" data-cell="A<?= $row ?>" class="text-right input_cell btn-block" type="text"></td>
                                                    <td><input value="<?= isset($stored["4B$row"]) ? $stored["4B$row"] : "" ?>" id="4B<?= $row ?>" name="4B<?= $row ?>" data-cell="B<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["4C$row"]) ? $stored["4C$row"] : "" ?>" id="4C<?= $row ?>" name="4C<?= $row ?>" data-cell="C<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["4D$row"]) ? $stored["4D$row"] : "" ?>" id="4D<?= $row ?>" name="4D<?= $row ?>" data-cell="D<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["4E$row"]) ? $stored["4E$row"] : "" ?>" id="4E<?= $row ?>" name="4E<?= $row ?>" data-cell="E<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                                    <td></td>
                                                    <td><input value="<?= isset($stored["4G$row"]) ? $stored["4G$row"] : "" ?>" id="4G<?= $row ?>" name="4G<?= $row ?>" data-cell="G<?= $row ?>" class="text-left input_cell btn-block" type="text"></td>
                                                    <td class="text-center"><button id="del_b1<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_b1 text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
    <?php endforeach;
endif;
?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL mins</label></td>
                                            <td><input value="<?= isset($stored['4B120']) ? $stored['4B120'] : '' ?>" id="4B120" name="4B120" data-cell="B120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="(SUM(B5:B50))+(SUM(B107:B119))" type="text"></td>
                                            <td><input value="<?= isset($stored['4C120']) ? $stored['4C120'] : '' ?>" id="4C120" name="4C120" data-cell="C120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="(SUM(C5:C50))+(SUM(C107:C119))" type="text"></td>
                                            <td><input value="<?= isset($stored['4D120']) ? $stored['4D120'] : '' ?>" id="4D120" name="4D120" data-cell="D120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="(SUM(D5:D50))+(SUM(D107:D119))" type="text"></td>
                                            <td><input value="<?= isset($stored['4E120']) ? $stored['4E120'] : '' ?>" id="4E120" name="4E120" data-cell="E120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="(SUM(E5:E50))+(SUM(E107:E119))" type="hidden"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['4G120']) ? $stored['4G120'] : '' ?>" id="4G120" name="4G120" data-cell="G120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL hours</label></td>
                                            <td><input value="<?= isset($stored['4B121']) ? $stored['4B121'] : '' ?>" id="4B121" name="4B121" data-cell="B121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="B120/60" type="text"></td>
                                            <td><input value="<?= isset($stored['4C121']) ? $stored['4C121'] : '' ?>" id="4C121" name="4C121" data-cell="C121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="C120/60" type="text"></td>
                                            <td><input value="<?= isset($stored['4D121']) ? $stored['4D121'] : '' ?>" id="4D121" name="4D121" data-cell="D121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="D120/60" type="text"></td>
                                            <td><input value="<?= isset($stored['4E121']) ? $stored['4E121'] : '' ?>" id="4E121" name="4E121" data-cell="E121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="" type="hidden"></td>
                                            <td><input value="<?= isset($stored['4F121']) ? $stored['4F121'] : '' ?>" id="4F121" name="4F121" data-cell="F121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="SUM(B121:D121)" type="text"></td>
                                            <td><input value="<?= isset($stored['4G121']) ? $stored['4G121'] : '' ?>" id="4G121" name="4G121" data-cell="G121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL cost</label></td>
                                            <td><input value="<?= isset($stored['4B122']) ? $stored['4B122'] : '' ?>" id="4B122" name="4B122" data-cell="B122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="B121*#a3!D5" type="text"></td>
                                            <td><input value="<?= isset($stored['4C122']) ? $stored['4C122'] : '' ?>" id="4C122" name="4C122" data-cell="C122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="C121*#a3!D6" type="text"></td>
                                            <td><input value="<?= isset($stored['4D122']) ? $stored['4D122'] : '' ?>" id="4D122" name="4D122" data-cell="D122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="D121*#a3!D7" type="text"></td>
                                            <td><input value="<?= isset($stored['4E122']) ? $stored['4E122'] : '' ?>" id="4E122" name="4E122" data-cell="E122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="E120/(100%-#a2!B12)" type="text"></td>
                                            <td><input value="<?= isset($stored['4F122']) ? $stored['4F122'] : '' ?>" id="4F122" name="4F122" data-cell="F122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="SUM(B122:E122)" type="text"></td>
                                            <td colspan="2" class="text-center">Not including GST</td>
                                        </tr>
                                        <tr>
                                            <td colspan="8"><button id="add_b1" type="button" class="btn btn-success btn-sm add_b1 text-center" data-id="6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div id="b2_tab" class="tab-pane">
        <form data-calx-identifier="CALX1420024221076" class="form-horizontal" action="" method="post" role="form" id="b2">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Your Transactional Advice process</h3>
                            <h5 class="text-justify">Now consider a client that is coming to you for advice on one or two simple areas. Your aim in this process is to solve their problem as efficiently as possible.</h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="b2_table" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:30%"><label for="">&nbsp;</label></th>
                                            <th style="width:10%"><label for="">Advice Providers time (mins)</label></th>
                                            <th style="width:10%"><label for="">Advice Producers</label></th>
                                            <th style="width:10%"><label for="">Admin</label></th>
                                            <th style="width:10%"><label for="">Other costs</label></th>
                                            <th style="width:10%"><label for=""></label></th>
                                            <th style="width:20%"><label for="">User Notes</label></th>
                                            <th style="width:3%"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="b2_list">
                                        <tr>
                                            <td>Pre-meeting engagement</td>
                                            <td><input value="<?= isset($stored['5B107']) ? $stored['5B107'] : '' ?>" id="5B107" name="5B107" data-cell="B107" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C107']) ? $stored['5C107'] : '' ?>" id="5C107" name="5C107" data-cell="C107" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D107']) ? $stored['5D107'] : '' ?>" id="5D107" name="5D107" data-cell="D107" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E107']) ? $stored['5E107'] : '' ?>" id="5E107" name="5E107" data-cell="E107" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G107']) ? $stored['5G107'] : '' ?>" id="5G107" name="5G107" data-cell="G107" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Meeting prep</td>
                                            <td><input value="<?= isset($stored['5B108']) ? $stored['5B108'] : '' ?>" id="5B108" name="5B108" data-cell="B108" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C108']) ? $stored['5C108'] : '' ?>" id="5C108" name="5C108" data-cell="C108" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D108']) ? $stored['5D108'] : '' ?>" id="5D108" name="5D108" data-cell="D108" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E108']) ? $stored['5E108'] : '' ?>" id="5E108" name="5E108" data-cell="E108" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G108']) ? $stored['5G108'] : '' ?>" id="5G108" name="5G108" data-cell="G108" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Initial meeting</td>
                                            <td><input value="<?= isset($stored['5B109']) ? $stored['5B109'] : '' ?>" id="5B109" name="5B109" data-cell="B109" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C109']) ? $stored['5C109'] : '' ?>" id="5C109" name="5C109" data-cell="C109" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D109']) ? $stored['5D109'] : '' ?>" id="5D109" name="5D109" data-cell="D109" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E109']) ? $stored['5E109'] : '' ?>" id="5E109" name="5E109" data-cell="E109" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G109']) ? $stored['5G109'] : '' ?>" id="5G109" name="5G109" data-cell="G109" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Initial meeting debrief</td>
                                            <td><input value="<?= isset($stored['5B110']) ? $stored['5B110'] : '' ?>" id="5B110" name="5B110" data-cell="B110" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C110']) ? $stored['5C110'] : '' ?>" id="5C110" name="5C110" data-cell="C110" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D110']) ? $stored['5D110'] : '' ?>" id="5D110" name="5D110" data-cell="D110" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E110']) ? $stored['5E110'] : '' ?>" id="5E110" name="5E110" data-cell="E110" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G110']) ? $stored['5G110'] : '' ?>" id="5G110" name="5G110" data-cell="G110" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Strategy planning</td>
                                            <td><input value="<?= isset($stored['5B111']) ? $stored['5B111'] : '' ?>" id="5B111" name="5B111" data-cell="B111" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C111']) ? $stored['5C111'] : '' ?>" id="5C111" name="5C111" data-cell="C111" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D111']) ? $stored['5D111'] : '' ?>" id="5D111" name="5D111" data-cell="D111" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E111']) ? $stored['5E111'] : '' ?>" id="5E111" name="5E111" data-cell="E111" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G111']) ? $stored['5G111'] : '' ?>" id="5G111" name="5G111" data-cell="G111" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td>Pre-meeting preparation</td>
                                            <td><input value="<?= isset($stored['5B112']) ? $stored['5B112'] : '' ?>" id="5B112" name="5B112" data-cell="B112" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C112']) ? $stored['5C112'] : '' ?>" id="5C112" name="5C112" data-cell="C112" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D112']) ? $stored['5D112'] : '' ?>" id="5D112" name="5D112" data-cell="D112" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E112']) ? $stored['5E112'] : '' ?>" id="5E112" name="5E112" data-cell="E112" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G112']) ? $stored['5G112'] : '' ?>" id="5G112" name="5G112" data-cell="G112" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td>Second meeting</td>
                                            <td><input value="<?= isset($stored['5B113']) ? $stored['5B113'] : '' ?>" id="5B113" name="5B113" data-cell="B113" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C113']) ? $stored['5C113'] : '' ?>" id="5C113" name="5C113" data-cell="C113" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D113']) ? $stored['5D113'] : '' ?>" id="5D113" name="5D113" data-cell="D113" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E113']) ? $stored['5E113'] : '' ?>" id="5E113" name="5E113" data-cell="E113" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G113']) ? $stored['5G113'] : '' ?>" id="5G113" name="5G113" data-cell="G113" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td>Finalise strategy</td>
                                            <td><input value="<?= isset($stored['5B114']) ? $stored['5B114'] : '' ?>" id="5B114" name="5B114" data-cell="B114" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C114']) ? $stored['5C114'] : '' ?>" id="5C114" name="5C114" data-cell="C114" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D114']) ? $stored['5D114'] : '' ?>" id="5D114" name="5D114" data-cell="D114" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E114']) ? $stored['5E114'] : '' ?>" id="5E114" name="5E114" data-cell="E114" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G114']) ? $stored['5G114'] : '' ?>" id="5G114" name="5G114" data-cell="G114" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Prepare SOA</td>
                                            <td><input value="<?= isset($stored['5B115']) ? $stored['5B115'] : '' ?>" id="5B115" name="5B115" data-cell="B115" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C115']) ? $stored['5C115'] : '' ?>" id="5C115" name="5C115" data-cell="C115" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D115']) ? $stored['5D115'] : '' ?>" id="5D115" name="5D115" data-cell="D115" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E115']) ? $stored['5E115'] : '' ?>" id="5E115" name="5E115" data-cell="E115" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G115']) ? $stored['5G115'] : '' ?>" id="5G115" name="5G115" data-cell="G115" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Plan presentation</td>
                                            <td><input value="<?= isset($stored['5B116']) ? $stored['5B116'] : '' ?>" id="5B116" name="5B116" data-cell="B116" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C116']) ? $stored['5C116'] : '' ?>" id="5C116" name="5C116" data-cell="C116" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D116']) ? $stored['5D116'] : '' ?>" id="5D116" name="5D116" data-cell="D116" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E116']) ? $stored['5E116'] : '' ?>" id="5E116" name="5E116" data-cell="E116" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G116']) ? $stored['5G116'] : '' ?>" id="5G116" name="5G116" data-cell="G116" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Implementation</td>
                                            <td><input value="<?= isset($stored['5B117']) ? $stored['5B117'] : '' ?>" id="5B117" name="5B117" data-cell="B117" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C117']) ? $stored['5C117'] : '' ?>" id="5C117" name="5C117" data-cell="C117" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D117']) ? $stored['5D117'] : '' ?>" id="5D117" name="5D117" data-cell="D117" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E117']) ? $stored['5E117'] : '' ?>" id="5E117" name="5E117" data-cell="E117" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G117']) ? $stored['5G117'] : '' ?>" id="5G117" name="5G117" data-cell="G117" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Post implementation follow-up</td>
                                            <td><input value="<?= isset($stored['5B118']) ? $stored['5B118'] : '' ?>" id="5B118" name="5B118" data-cell="B118" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C118']) ? $stored['5C118'] : '' ?>" id="5C118" name="5C118" data-cell="C118" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D118']) ? $stored['5D118'] : '' ?>" id="5D118" name="5D118" data-cell="D118" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E118']) ? $stored['5E118'] : '' ?>" id="5E118" name="5E118" data-cell="E118" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G118']) ? $stored['5G118'] : '' ?>" id="5G118" name="5G118" data-cell="G118" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                        </tr>
                                        <tr id="b2_row5" class="b2_row" data-b2="5">
                                            <td><input value="<?= isset($stored['5A5']) ? $stored['5A5'] : '' ?>" id="5A5" name="5A5" data-cell="A5" class="text-left input_cell btn-block" type="text"></td>
                                            <td><input value="<?= isset($stored['5B5']) ? $stored['5B5'] : '' ?>" id="5B5" name="5B5" data-cell="B5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5C5']) ? $stored['5C5'] : '' ?>" id="5C5" name="5C5" data-cell="C5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5D5']) ? $stored['5D5'] : '' ?>" id="5D5" name="5D5" data-cell="D5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['5E5']) ? $stored['5E5'] : '' ?>" id="5E5" name="5E5" data-cell="E5" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                            <td></td>
                                            <td><input value="<?= isset($stored['5G5']) ? $stored['5G5'] : '' ?>" id="5G5" name="5G5" data-cell="G5" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td class="text-center"><button id="del_b25" type="button" class="btn btn-danger btn-xs delete_b2 text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
<?php if (isset($stored["addt_b2_list"])): foreach ($stored["addt_b2_list"] as $row): ?>
                                                <tr id="b2_row<?= $row ?>" class="b2_row addt" data-b2="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["5A$row"]) ? $stored["5A$row"] : '' ?>" id="5A<?= $row ?>" name="5A<?= $row ?>" data-cell="A<?= $row ?>" class="text-right input_cell btn-block" type="text"></td>
                                                    <td><input value="<?= isset($stored["5B$row"]) ? $stored["5B$row"] : '' ?>" id="5B<?= $row ?>" name="5B<?= $row ?>" data-cell="B<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["5C$row"]) ? $stored["5C$row"] : '' ?>" id="5C<?= $row ?>" name="5C<?= $row ?>" data-cell="C<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["5D$row"]) ? $stored["5D$row"] : '' ?>" id="5D<?= $row ?>" name="5D<?= $row ?>" data-cell="D<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["5E$row"]) ? $stored["5E$row"] : '' ?>" id="5E<?= $row ?>" name="5E<?= $row ?>" data-cell="E<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]" type="text"></td>
                                                    <td></td>
                                                    <td><input value="<?= isset($stored["5G$row"]) ? $stored["5G$row"] : '' ?>" id="5G<?= $row ?>" name="5G<?= $row ?>" data-cell="G<?= $row ?>" class="text-left input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td class="text-center"><button id="del_b2<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_b2 text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
    <?php endforeach;
endif;
?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL mins</label></td>
                                            <td><input value="<?= isset($stored['5B120']) ? $stored['5B120'] : '' ?>" id="5B120" name="5B120" data-cell="B120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="(SUM(B5:B50))+(SUM(B107:B119))" type="text"></td>
                                            <td><input value="<?= isset($stored['5C120']) ? $stored['5C120'] : '' ?>" id="5C120" name="5C120" data-cell="C120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="(SUM(C5:C50))+(SUM(C107:C119))" type="text"></td>
                                            <td><input value="<?= isset($stored['5D120']) ? $stored['5D120'] : '' ?>" id="5D120" name="5D120" data-cell="D120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="(SUM(D5:D50))+(SUM(D107:D119))" type="text"></td>
                                            <td><input value="0" id="5E120" name="5E120" data-cell="E120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="(SUM(E5:D50))+(SUM(E107:E119))" type="hidden"></td>
                                            <td></td>
                                            <td><input id="5G120" name="5G120" data-cell="G120" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="" type="hidden"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL hours</label></td>
                                            <td><input value="<?= isset($stored['5B121']) ? $stored['5B121'] : '' ?>" id="5B121" name="5B121" data-cell="B121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="B120/60" type="text"></td>
                                            <td><input value="<?= isset($stored['5C121']) ? $stored['5C121'] : '' ?>" id="5C121" name="5C121" data-cell="C121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="C120/60" type="text"></td>
                                            <td><input value="<?= isset($stored['5D121']) ? $stored['5D121'] : '' ?>" id="5D121" name="5D121" data-cell="D121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="D120/60" type="text"></td>
                                            <td><input value="<?= isset($stored['5E121']) ? $stored['5E121'] : '' ?>" id="5E121" name="5E121" data-cell="E121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="" type="text"></td>
                                            <td><input value="<?= isset($stored['5F121']) ? $stored['5F121'] : '' ?>" id="5F121" name="5F121" data-cell="F121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="SUM(B121:D121)" type="text"></td>
                                            <td><input id="5G121" name="5G121" data-cell="G121" class="text-right formula_cell btn-block" data-format=" 0,0[.]" data-formula="" type="hidden"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL cost</label></td>
                                            <td><input value="<?= isset($stored['5B122']) ? $stored['5B122'] : '' ?>" id="5B122" name="5B122" data-cell="B122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="B121*#a3!D5" type="text"></td>
                                            <td><input value="<?= isset($stored['5C122']) ? $stored['5C122'] : '' ?>" id="5C122" name="5C122" data-cell="C122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="C121*#a3!D6" type="text"></td>
                                            <td><input value="<?= isset($stored['5D122']) ? $stored['5D122'] : '' ?>" id="5D122" name="5D122" data-cell="D122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="D121*#a3!D7" type="text"></td>
                                            <td><input value="<?= isset($stored['5E122']) ? $stored['5E122'] : '' ?>" id="5E122" name="5E122" data-cell="E122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="E120/(100%-#a2!B12)" type="text"></td>
                                            <td><input value="<?= isset($stored['5F122']) ? $stored['5F122'] : '' ?>" id="5F122" name="5F122" data-cell="F122" class="text-right formula_cell btn-block" data-format="$ 0,0[.]" data-formula="SUM(B122:E122)" type="text"></td>
                                            <td colspan="2" class="text-center">Not including GST</td>
                                        </tr>
                                        <tr>
                                            <td colspan="8"><button id="add_b2" type="button" class="btn btn-success btn-sm add_b2 text-center" data-id="6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div id="b3_tab" class="tab-pane">
        <form data-calx-identifier="CALX1420024221089" class="form-horizontal" action="" method="post" role="form" id="b3">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Strategy Variations</h3>
                            <h5 class="text-justify">Now we've considered your core processes, we now need to think about variations. Not all clients will have the same issues, so it's important we consider those differences </h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="b3_table" class="table table-striped table-hover table-condensed table-bordered">
                                    <input id="count_b3" name="count_b3" value="28" data-cell="A1" type="hidden">
                                    <input value="<?= isset($stored['count_b33']) ? $stored['count_b33'] : '' ?>" id="count_b33" name="count_b33" data-cell="B1" data-formula="" type="hidden">
                                    <thead>
                                        <tr>
                                            <th style="width:7%"><label for="">Is this an area you look at?</label></th>
                                            <th style="width:30%"><label for="">Strategic Elements</label></th>
                                            <th style="width:12%"><label for="">Advice Providers time (mins)</label></th>
                                            <th style="width:12%"><label for="">Advice Producers</label></th>
                                            <th style="width:12%"><label for="">Admin</label></th>
                                            <th style="width:12%"><label for="">Other costs</label></th>
                                            <th style="width:12%"><label for="">Additional fees (Not incl. GST)</label></th>
                                            <th style="width:3%"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="b3_list">
                                        <tr id="b3_row5" class="b3_row" data-b3="5">
                                            <td class="text-center"><input <?= isset($stored['6A5']) ? 'checked' : '' ?> id="6A5" name="6A5" data-cell="A5" value="1" data-cek3="5" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B5" name="6B5" data-cell="B5" class="text-left btn-block" value="<?= isset($stored['6B5']) ? $stored['6B5'] : 'Establish new SMSF' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C5']) ? $stored['6C5'] : '' ?>" id="6C5" name="6C5" data-cell="C5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D5']) ? $stored['6D5'] : '' ?>" id="6D5" name="6D5" data-cell="D5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E5']) ? $stored['6E5'] : '' ?>" id="6E5" name="6E5" data-cell="E5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F5']) ? $stored['6F5'] : '' ?>" id="6F5" name="6F5" data-cell="F5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G5']) ? $stored['6G5'] : '' ?>" id="6G5" name="6G5" data-cell="G5" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C5*(#a3!D5/60))+((D5*(#a3!D6/60)))+((E5*(#a3!D7/60)))+(F5/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b35" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row6" class="b3_row" data-b3="6">
                                            <td class="text-center"><input <?= isset($stored['6A6']) ? 'checked' : '' ?> id="6A6" name="6A6" data-cell="A6" value="1" data-cek3="6" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B6" name="6B6" data-cell="B6" class="text-left btn-block" value="<?= isset($stored['6B6']) ? $stored['6B6'] : 'Advise on existing SMSF' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C6']) ? $stored['6C6'] : '' ?>" id="6C6" name="6C6" data-cell="C6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D6']) ? $stored['6D6'] : '' ?>" id="6D6" name="6D6" data-cell="D6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E6']) ? $stored['6E6'] : '' ?>" id="6E6" name="6E6" data-cell="E6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F6']) ? $stored['6F6'] : '' ?>" id="6F6" name="6F6" data-cell="F6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G6']) ? $stored['6G6'] : '' ?>" id="6G6" name="6G6" data-cell="G6" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C6*(#a3!D5/60))+((D6*(#a3!D6/60)))+((E6*(#a3!D7/60)))+(F6/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b36" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row7" class="b3_row" data-b3="7">
                                            <td class="text-center"><input <?= isset($stored['6A7']) ? 'checked' : '' ?> id="6A7" name="6A7" data-cell="A7" value="1" data-cek3="7" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B7" name="6B7" data-cell="B7" class="text-left btn-block" value="<?= isset($stored['6B7']) ? $stored['6B7'] : 'Equity portfolio' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C7']) ? $stored['6C7'] : '' ?>" id="6C7" name="6C7" data-cell="C7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D7']) ? $stored['6D7'] : '' ?>" id="6D7" name="6D7" data-cell="D7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E7']) ? $stored['6E7'] : '' ?>" id="6E7" name="6E7" data-cell="E7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F7']) ? $stored['6F7'] : '' ?>" id="6F7" name="6F7" data-cell="F7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G7']) ? $stored['6G7'] : '' ?>" id="6G7" name="6G7" data-cell="G7" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C7*(#a3!D5/60))+((D7*(#a3!D6/60)))+((E7*(#a3!D7/60)))+(F7/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b37" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row8" class="b3_row" data-b3="8">
                                            <td class="text-center"><input <?= isset($stored['6A8']) ? 'checked' : '' ?> id="6A8" name="6A8" data-cell="A8" value="1" data-cek3="8" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B8" name="6B8" data-cell="B8" class="text-left btn-block" value="<?= isset($stored['6B8']) ? $stored['6B8'] : 'Personal protection' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C8']) ? $stored['6C8'] : '' ?>" id="6C8" name="6C8" data-cell="C8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D8']) ? $stored['6D8'] : '' ?>" id="6D8" name="6D8" data-cell="D8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E8']) ? $stored['6E8'] : '' ?>" id="6E8" name="6E8" data-cell="E8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F8']) ? $stored['6F8'] : '' ?>" id="6F8" name="6F8" data-cell="F8" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G8']) ? $stored['6G8'] : '' ?>" id="6G8" name="6G8" data-cell="G8" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C8*(#a3!D5/60))+((D8*(#a3!D6/60)))+((E8*(#a3!D7/60)))+(F8/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b38" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="8"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row9" class="b3_row" data-b3="9">
                                            <td class="text-center"><input <?= isset($stored['6A9']) ? 'checked' : '' ?> id="6A9" name="6A9" data-cell="A9" value="1" data-cek3="9" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B9" name="6B9" data-cell="B9" class="text-left btn-block" value="<?= isset($stored['6B9']) ? $stored['6B9'] : 'Aged Care' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C9']) ? $stored['6C9'] : '' ?>" id="6C9" name="6C9" data-cell="C9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D9']) ? $stored['6D9'] : '' ?>" id="6D9" name="6D9" data-cell="D9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E9']) ? $stored['6E9'] : '' ?>" id="6E9" name="6E9" data-cell="E9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F9']) ? $stored['6F9'] : '' ?>" id="6F9" name="6F9" data-cell="F9" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G9']) ? $stored['6G9'] : '' ?>" id="6G9" name="6G9" data-cell="G9" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C9*(#a3!D5/60))+((D9*(#a3!D6/60)))+((E9*(#a3!D7/60)))+(F9/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b39" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="9"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row10" class="b3_row" data-b3="10">
                                            <td class="text-center"><input <?= isset($stored['6A10']) ? 'checked' : '' ?> id="6A10" name="6A10" data-cell="A10" value="1" data-cek3="10" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B10" name="6B10" data-cell="B10" class="text-left btn-block" value="<?= isset($stored['6B10']) ? $stored['6B10'] : 'Business Insurance' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C10']) ? $stored['6C10'] : '' ?>" id="6C10" name="6C10" data-cell="C10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D10']) ? $stored['6D10'] : '' ?>" id="6D10" name="6D10" data-cell="D10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E10']) ? $stored['6E10'] : '' ?>" id="6E10" name="6E10" data-cell="E10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F10']) ? $stored['6F10'] : '' ?>" id="6F10" name="6F10" data-cell="F10" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G10']) ? $stored['6G10'] : '' ?>" id="6G10" name="6G10" data-cell="G10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C10*(#a3!D5/60))+((D10*(#a3!D6/60)))+((E10*(#a3!D7/60)))+(F10/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b310" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="10"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row11" class="b3_row" data-b3="11">
                                            <td class="text-center"><input <?= isset($stored['6A11']) ? 'checked' : '' ?> id="6A11" name="6A11" data-cell="A11" value="1" data-cek3="11" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B11" name="6B11" data-cell="B11" class="text-left btn-block" value="<?= isset($stored['6B11']) ? $stored['6B11'] : 'Estate Planning' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C11']) ? $stored['6C11'] : '' ?>" id="6C11" name="6C11" data-cell="C11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D11']) ? $stored['6D11'] : '' ?>" id="6D11" name="6D11" data-cell="D11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E11']) ? $stored['6E11'] : '' ?>" id="6E11" name="6E11" data-cell="E11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F11']) ? $stored['6F11'] : '' ?>" id="6F11" name="6F11" data-cell="F11" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G11']) ? $stored['6G11'] : '' ?>" id="6G11" name="6G11" data-cell="G11" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C11*(#a3!D5/60))+((D11*(#a3!D6/60)))+((E11*(#a3!D7/60)))+(F11/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b311" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="11"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row12" class="b3_row" data-b3="12">
                                            <td class="text-center"><input <?= isset($stored['6A12']) ? 'checked' : '' ?> id="6A12" name="6A12" data-cell="A12" value="1" data-cek3="12" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B12" name="6B12" data-cell="B12" class="text-left btn-block" value="<?= isset($stored['6B12']) ? $stored['6B12'] : 'Financing' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C12']) ? $stored['6C12'] : '' ?>" id="6C12" name="6C12" data-cell="C12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D12']) ? $stored['6D12'] : '' ?>" id="6D12" name="6D12" data-cell="D12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E12']) ? $stored['6E12'] : '' ?>" id="6E12" name="6E12" data-cell="E12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F12']) ? $stored['6F12'] : '' ?>" id="6F12" name="6F12" data-cell="F12" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G12']) ? $stored['6G12'] : '' ?>" id="6G12" name="6G12" data-cell="G12" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C12*(#a3!D5/60))+((D12*(#a3!D6/60)))+((E12*(#a3!D7/60)))+(F12/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b312" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="12"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row13" class="b3_row" data-b3="13">
                                            <td class="text-center"><input <?= isset($stored['6A13']) ? 'checked' : '' ?> id="6A13" name="6A13" data-cell="A13" value="1" data-cek3="13" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B13" name="6B13" data-cell="B13" class="text-left btn-block" value="<?= isset($stored['6B13']) ? $stored['6B13'] : 'Complex investment scenarios' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C13']) ? $stored['6C13'] : '' ?>" id="6C13" name="6C13" data-cell="C13" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D13']) ? $stored['6D13'] : '' ?>" id="6D13" name="6D13" data-cell="D13" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E13']) ? $stored['6E13'] : '' ?>" id="6E13" name="6E13" data-cell="E13" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F13']) ? $stored['6F13'] : '' ?>" id="6F13" name="6F13" data-cell="F13" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G13']) ? $stored['6G13'] : '' ?>" id="6G13" name="6G13" data-cell="G13" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C13*(#a3!D5/60))+((D13*(#a3!D6/60)))+((E13*(#a3!D7/60)))+(F13/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b313" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="13"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row14" class="b3_row" data-b3="14">
                                            <td class="text-center"><input <?= isset($stored['6A14']) ? 'checked' : '' ?> id="6A14" name="6A14" data-cell="A14" value="1" data-cek3="14" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B14" name="6B14" data-cell="B14" class="text-left btn-block" value="<?= isset($stored['6B14']) ? $stored['6B14'] : 'International affairs' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C14']) ? $stored['6C14'] : '' ?>" id="6C14" name="6C14" data-cell="C14" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D14']) ? $stored['6D14'] : '' ?>" id="6D14" name="6D14" data-cell="D14" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E14']) ? $stored['6E14'] : '' ?>" id="6E14" name="6E14" data-cell="E14" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F14']) ? $stored['6F14'] : '' ?>" id="6F14" name="6F14" data-cell="F14" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G14']) ? $stored['6G14'] : '' ?>" id="6G14" name="6G14" data-cell="G14" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C14*(#a3!D5/60))+((D14*(#a3!D6/60)))+((E14*(#a3!D7/60)))+(F14/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b314" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="14"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row15" class="b3_row" data-b3="15">
                                            <td class="text-center"><input <?= isset($stored['6A15']) ? 'checked' : '' ?> id="6A15" name="6A15" data-cell="A15" value="1" data-cek3="15" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B15" name="6B15" data-cell="B15" class="text-left btn-block" value="<?= isset($stored['6B15']) ? $stored['6B15'] : 'Mortgage lending' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C15']) ? $stored['6C15'] : '' ?>" id="6C15" name="6C15" data-cell="C15" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D15']) ? $stored['6D15'] : '' ?>" id="6D15" name="6D15" data-cell="D15" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E15']) ? $stored['6E15'] : '' ?>" id="6E15" name="6E15" data-cell="E15" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F15']) ? $stored['6F15'] : '' ?>" id="6F15" name="6F15" data-cell="F15" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G15']) ? $stored['6G15'] : '' ?>" id="6G15" name="6G15" data-cell="G15" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C15*(#a3!D5/60))+((D15*(#a3!D6/60)))+((E15*(#a3!D7/60)))+(F15/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b315" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="15"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row16" class="b3_row" data-b3="16">
                                            <td class="text-center"><input <?= isset($stored['6A16']) ? 'checked' : '' ?> id="6A16" name="6A16" data-cell="A16" value="1" data-cek3="16" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B16" name="6B16" data-cell="B16" class="text-left btn-block" value="<?= isset($stored['6B16']) ? $stored['6B16'] : 'Travel to client' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C16']) ? $stored['6C16'] : '' ?>" id="6C16" name="6C16" data-cell="C16" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D16']) ? $stored['6D16'] : '' ?>" id="6D16" name="6D16" data-cell="D16" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E16']) ? $stored['6E16'] : '' ?>" id="6E16" name="6E16" data-cell="E16" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F16']) ? $stored['6F16'] : '' ?>" id="6F16" name="6F16" data-cell="F16" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G16']) ? $stored['6G16'] : '' ?>" id="6G16" name="6G16" data-cell="G16" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C16*(#a3!D5/60))+((D16*(#a3!D6/60)))+((E16*(#a3!D7/60)))+(F16/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b316" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="16"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row17" class="b3_row" data-b3="17">
                                            <td class="text-center"><input <?= isset($stored['6A17']) ? 'checked' : '' ?> id="6A17" name="6A17" data-cell="A17" value="1" data-cek3="17" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B17" name="6B17" data-cell="B17" class="text-left btn-block" value="<?= isset($stored['6B17']) ? $stored['6B17'] : 'Finance' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C17']) ? $stored['6C17'] : '' ?>" id="6C17" name="6C17" data-cell="C17" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D17']) ? $stored['6D17'] : '' ?>" id="6D17" name="6D17" data-cell="D17" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E17']) ? $stored['6E17'] : '' ?>" id="6E17" name="6E17" data-cell="E17" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F17']) ? $stored['6F17'] : '' ?>" id="6F17" name="6F17" data-cell="F17" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G17']) ? $stored['6G17'] : '' ?>" id="6G17" name="6G17" data-cell="G17" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C17*(#a3!D5/60))+((D17*(#a3!D6/60)))+((E17*(#a3!D7/60)))+(F17/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b317" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="17"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row18" class="b3_row" data-b3="18">
                                            <td class="text-center"><input <?= isset($stored['6A18']) ? 'checked' : '' ?> id="6A18" name="6A18" data-cell="A18" value="1" data-cek3="18" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B18" name="6B18" data-cell="B18" class="text-left btn-block" value="<?= isset($stored['6B18']) ? $stored['6B18'] : 'Self-employed business client' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C18']) ? $stored['6C18'] : '' ?>" id="6C18" name="6C18" data-cell="C18" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D18']) ? $stored['6D18'] : '' ?>" id="6D18" name="6D18" data-cell="D18" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E18']) ? $stored['6E18'] : '' ?>" id="6E18" name="6E18" data-cell="E18" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F18']) ? $stored['6F18'] : '' ?>" id="6F18" name="6F18" data-cell="F18" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G18']) ? $stored['6G18'] : '' ?>" id="6G18" name="6G18" data-cell="G18" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C18*(#a3!D5/60))+((D18*(#a3!D6/60)))+((E18*(#a3!D7/60)))+(F18/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b318" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="18"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row19" class="b3_row" data-b3="19">
                                            <td class="text-center"><input <?= isset($stored['6A19']) ? 'checked' : '' ?> id="6A19" name="6A19" data-cell="A19" value="1" data-cek3="19" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B19" name="6B19" data-cell="B19" class="text-left btn-block" value="<?= isset($stored['6B19']) ? $stored['6B19'] : 'Redundancy package' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C19']) ? $stored['6C19'] : '' ?>" id="6C19" name="6C19" data-cell="C19" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D19']) ? $stored['6D19'] : '' ?>" id="6D19" name="6D19" data-cell="D19" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E19']) ? $stored['6E19'] : '' ?>" id="6E19" name="6E19" data-cell="E19" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F19']) ? $stored['6F19'] : '' ?>" id="6F19" name="6F19" data-cell="F19" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G19']) ? $stored['6G19'] : '' ?>" id="6G19" name="6G19" data-cell="G19" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C19*(#a3!D5/60))+((D19*(#a3!D6/60)))+((E19*(#a3!D7/60)))+(F19/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b319" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="19"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="b3_row20" class="b3_row" data-b3="20">
                                            <td class="text-center"><input <?= isset($stored['6A20']) ? 'checked' : '' ?> id="6A20" name="6A20" data-cell="A20" value="1" data-cek3="20" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="6B20" name="6B20" data-cell="B20" class="text-left btn-block" value="<?= isset($stored['6B20']) ? $stored['6B20'] : 'Aged Care' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['6C20']) ? $stored['6C20'] : '' ?>" id="6C20" name="6C20" data-cell="C20" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6D20']) ? $stored['6D20'] : '' ?>" id="6D20" name="6D20" data-cell="D20" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6E20']) ? $stored['6E20'] : '' ?>" id="6E20" name="6E20" data-cell="E20" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['6F20']) ? $stored['6F20'] : '' ?>" id="6F20" name="6F20" data-cell="F20" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['6G20']) ? $stored['6G20'] : '' ?>" id="6G20" name="6G20" data-cell="G20" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C20*(#a3!D5/60))+((D20*(#a3!D6/60)))+((E20*(#a3!D7/60)))+(F20/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_b320" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="20"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
<?php if (isset($stored["addt_b3_list"])): foreach ($stored["addt_b3_list"] as $row): ?>
                                                <tr id="b3_row<?= $row ?>" class="b3_row addt" data-b3="<?= $row ?>">
                                                    <td class="text-center"><input <?= isset($stored["6A$row"]) ? 'checked' : '' ?> id="6A<?= $row ?>" name="6A<?= $row ?>" data-cell="A<?= $row ?>" value="1" data-cek3="<?= $row ?>" class="checkbox_b3 text-center input_cell" type="checkbox"></td>
                                                    <td><input id="6B<?= $row ?>" name="6B<?= $row ?>" data-cell="B<?= $row ?>" class="text-left btn-block" value="<?= isset($stored["6B$row"]) ? $stored["6B$row"] : 'Additional research' ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["6C$row"]) ? $stored["6C$row"] : '' ?>" id="6C<?= $row ?>" name="6C<?= $row ?>" data-cell="C<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["6D$row"]) ? $stored["6D$row"] : '' ?>" id="6D<?= $row ?>" name="6D<?= $row ?>" data-cell="D<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["6E$row"]) ? $stored["6E$row"] : '' ?>" id="6E<?= $row ?>" name="6E<?= $row ?>" data-cell="E<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["6F$row"]) ? $stored["6F$row"] : '' ?>" id="6F<?= $row ?>" name="6F<?= $row ?>" data-cell="F<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["6G$row"]) ? $stored["6G$row"] : '' ?>" id="6G<?= $row ?>" name="6G<?= $row ?>" data-cell="G<?= $row ?>" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C<?= $row ?>*(#a3!D5/60))+((D<?= $row ?>*(#a3!D6/60)))+((E<?= $row ?>*(#a3!D7/60)))+(F<?= $row ?>/(1-#a2!B12)))" type="text"></td>
                                                    <td class="text-center"><button id="del_b3<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
    <?php endforeach;
endif;
?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="8"><button id="add_b3" type="button" class="btn btn-success btn-sm add_b3 text-center"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div id="c1_tab" class="tab-pane">
        <form data-calx-identifier="CALX1420024221108" class="form-horizontal" action="" method="post" role="form" id="c1">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>1-to-1 Services</h3>
                            <h5 class="text-justify">Let's start with the components of an ongoing service offer that relate to your 1-to-1 engagement of your clients. Consider the amount of time taken over the course of the </h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="c1_table" class="table table-striped table-hover table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:7%"><label for="">Is this something you'd like to consider for your own offer?</label></th>
                                            <th style="width:30%"><label for="">1-to 1 Service offerings</label></th>
                                            <th style="width:12%"><label for="">Advice Providers time (mins)</label></th>
                                            <th style="width:12%"><label for="">Advice Producers</label></th>
                                            <th style="width:12%"><label for="">Admin</label></th>
                                            <th style="width:12%"><label for="">Other costs</label></th>
                                            <th style="width:12%"><label for="">Service fee (not incl. GST)</label></th>
                                            <th style="width:3%"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="c1_list">
                                        <tr id="c1_row5" class="c1_row" data-c1="5">
                                            <td class="text-center">
                                                <input id="count_c1" name="count_c1" data-cell="A1" value="17" data-formula="" type="hidden">
                                                <input value="<?= isset($stored['count_c11']) ? $stored['count_c11'] : '' ?>" id="count_c11" name="count_c11" data-cell="B1" data-formula="" type="hidden">
                                                <input <?= isset($stored['7A5']) ? 'checked' : '' ?> id="7A5" name="7A5" data-cell="A5" value="1" data-cek1="5" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B5" name="7B5" data-cell="B5" class="text-left btn-block" value="<?= isset($stored['7B5']) ? $stored['7B5'] : 'Complete Strategy Review' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C5']) ? $stored['7C5'] : '' ?>" id="7C5" name="7C5" data-cell="C5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D5']) ? $stored['7D5'] : '' ?>" id="7D5" name="7D5" data-cell="D5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E5']) ? $stored['7E5'] : '' ?>" id="7E5" name="7E5" data-cell="E5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F5']) ? $stored['7F5'] : '' ?>" id="7F5" name="7F5" data-cell="F5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G5']) ? $stored['7G5'] : '' ?>" id="7G5" name="7G5" data-cell="G5" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C5*(#a3!D5/60))+((D5*(#a3!D6/60)))+((E5*(#a3!D7/60)))+(F5/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c15" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row6" class="c1_row" data-c1="6">
                                            <td class="text-center"><input <?= isset($stored['7A6']) ? 'checked' : '' ?> id="7A6" name="7A6" data-cell="A6" value="1" data-cek1="6" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B6" name="7B6" data-cell="B6" class="text-left btn-block" value="<?= isset($stored['7B6']) ? $stored['7B6'] : 'Simple performance review' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C6']) ? $stored['7C6'] : '' ?>" id="7C6" name="7C6" data-cell="C6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D6']) ? $stored['7D6'] : '' ?>" id="7D6" name="7D6" data-cell="D6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E6']) ? $stored['7E6'] : '' ?>" id="7E6" name="7E6" data-cell="E6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F6']) ? $stored['7F6'] : '' ?>" id="7F6" name="7F6" data-cell="F6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G6']) ? $stored['7G6'] : '' ?>" id="7G6" name="7G6" data-cell="G6" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C6*(#a3!D5/60))+((D6*(#a3!D6/60)))+((E6*(#a3!D7/60)))+(F6/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c16" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row7" class="c1_row" data-c1="7">
                                            <td class="text-center"><input <?= isset($stored['7A7']) ? 'checked' : '' ?> id="7A7" name="7A7" data-cell="A7" value="1" data-cek1="7" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B7" name="7B7" data-cell="B7" class="text-left btn-block" value="<?= isset($stored['7B7']) ? $stored['7B7'] : 'Insurance Review' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C7']) ? $stored['7C7'] : '' ?>" id="7C7" name="7C7" data-cell="C7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D7']) ? $stored['7D7'] : '' ?>" id="7D7" name="7D7" data-cell="D7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E7']) ? $stored['7E7'] : '' ?>" id="7E7" name="7E7" data-cell="E7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F7']) ? $stored['7F7'] : '' ?>" id="7F7" name="7F7" data-cell="F7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G7']) ? $stored['7G7'] : '' ?>" id="7G7" name="7G7" data-cell="G7" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C7*(#a3!D5/60))+((D7*(#a3!D6/60)))+((E7*(#a3!D7/60)))+(F7/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c17" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row8" class="c1_row" data-c1="8">
                                            <td class="text-center"><input <?= isset($stored['7A8']) ? 'checked' : '' ?> id="7A8" name="7A8" data-cell="A8" value="1" data-cek1="8" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B8" name="7B8" data-cell="B8" class="text-left btn-block" value="<?= isset($stored['7B8']) ? $stored['7B8'] : 'Touch-base phone call' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C8']) ? $stored['7C8'] : '' ?>" id="7C8" name="7C8" data-cell="C8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D8']) ? $stored['7D8'] : '' ?>" id="7D8" name="7D8" data-cell="D8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E8']) ? $stored['7E8'] : '' ?>" id="7E8" name="7E8" data-cell="E8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F8']) ? $stored['7F8'] : '' ?>" id="7F8" name="7F8" data-cell="F8" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G8']) ? $stored['7G8'] : '' ?>" id="7G8" name="7G8" data-cell="G8" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C8*(#a3!D5/60))+((D8*(#a3!D6/60)))+((E8*(#a3!D7/60)))+(F8/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c18" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="8"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row9" class="c1_row" data-c1="9">
                                            <td class="text-center"><input <?= isset($stored['7A9']) ? 'checked' : '' ?> id="7A9" name="7A9" data-cell="A9" value="1" data-cek1="9" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B9" name="7B9" data-cell="B9" class="text-left btn-block" value="<?= isset($stored['7B9']) ? $stored['7B9'] : 'Phone/ online meeting' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C9']) ? $stored['7C9'] : '' ?>" id="7C9" name="7C9" data-cell="C9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D9']) ? $stored['7D9'] : '' ?>" id="7D9" name="7D9" data-cell="D9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E9']) ? $stored['7E9'] : '' ?>" id="7E9" name="7E9" data-cell="E9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F9']) ? $stored['7F9'] : '' ?>" id="7F9" name="7F9" data-cell="F9" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G9']) ? $stored['7G9'] : '' ?>" id="7G9" name="7G9" data-cell="G9" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C9*(#a3!D5/60))+((D9*(#a3!D6/60)))+((E9*(#a3!D7/60)))+(F9/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c19" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="9"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row10" class="c1_row" data-c1="10">
                                            <td class="text-center"><input <?= isset($stored['7A10']) ? 'checked' : '' ?> id="7A10" name="7A10" data-cell="A10" value="1" data-cek1="10" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B10" name="7B10" data-cell="B10" class="text-left btn-block" value="<?= isset($stored['7B10']) ? $stored['7B10'] : 'Face-to-face meeting' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C10']) ? $stored['7C10'] : '' ?>" id="7C10" name="7C10" data-cell="C10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D10']) ? $stored['7D10'] : '' ?>" id="7D10" name="7D10" data-cell="D10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E10']) ? $stored['7E10'] : '' ?>" id="7E10" name="7E10" data-cell="E10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F10']) ? $stored['7F10'] : '' ?>" id="7F10" name="7F10" data-cell="F10" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G10']) ? $stored['7G10'] : '' ?>" id="7G10" name="7G10" data-cell="G10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C10*(#a3!D5/60))+((D10*(#a3!D6/60)))+((E10*(#a3!D7/60)))+(F10/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c110" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="10"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row11" class="c1_row" data-c1="11">
                                            <td class="text-center"><input <?= isset($stored['7A11']) ? 'checked' : '' ?> id="7A11" name="7A11" data-cell="A11" value="1" data-cek1="11" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B11" name="7B11" data-cell="B11" class="text-left btn-block" value="<?= isset($stored['7B11']) ? $stored['7B11'] : 'Meet with client\'s advisers' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C11']) ? $stored['7C11'] : '' ?>" id="7C11" name="7C11" data-cell="C11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D11']) ? $stored['7D11'] : '' ?>" id="7D11" name="7D11" data-cell="D11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E11']) ? $stored['7E11'] : '' ?>" id="7E11" name="7E11" data-cell="E11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F11']) ? $stored['7F11'] : '' ?>" id="7F11" name="7F11" data-cell="F11" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G11']) ? $stored['7G11'] : '' ?>" id="7G11" name="7G11" data-cell="G11" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C11*(#a3!D5/60))+((D11*(#a3!D6/60)))+((E11*(#a3!D7/60)))+(F11/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c111" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="11"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row12" class="c1_row" data-c1="12">
                                            <td class="text-center"><input <?= isset($stored['7A12']) ? 'checked' : '' ?> id="7A12" name="7A12" data-cell="A12" value="1" data-cek1="12" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B12" name="7B12" data-cell="B12" class="text-left btn-block" value="<?= isset($stored['7B12']) ? $stored['7B12'] : 'Send portfolio report' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C12']) ? $stored['7C12'] : '' ?>" id="7C12" name="7C12" data-cell="C12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D12']) ? $stored['7D12'] : '' ?>" id="7D12" name="7D12" data-cell="D12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E12']) ? $stored['7E12'] : '' ?>" id="7E12" name="7E12" data-cell="E12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F12']) ? $stored['7F12'] : '' ?>" id="7F12" name="7F12" data-cell="F12" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G12']) ? $stored['7G12'] : '' ?>" id="7G12" name="7G12" data-cell="G12" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C12*(#a3!D5/60))+((D12*(#a3!D6/60)))+((E12*(#a3!D7/60)))+(F12/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c112" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="12"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row13" class="c1_row" data-c1="13">
                                            <td class="text-center"><input <?= isset($stored['7A13']) ? 'checked' : '' ?> id="7A13" name="7A13" data-cell="A13" value="1" data-cek1="13" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B13" name="7B13" data-cell="B13" class="text-left btn-block" value="<?= isset($stored['7B13']) ? $stored['7B13'] : 'Changes to portfolio' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C13']) ? $stored['7C13'] : '' ?>" id="7C13" name="7C13" data-cell="C13" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D13']) ? $stored['7D13'] : '' ?>" id="7D13" name="7D13" data-cell="D13" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E13']) ? $stored['7E13'] : '' ?>" id="7E13" name="7E13" data-cell="E13" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F13']) ? $stored['7F13'] : '' ?>" id="7F13" name="7F13" data-cell="F13" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G13']) ? $stored['7G13'] : '' ?>" id="7G13" name="7G13" data-cell="G13" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C13*(#a3!D5/60))+((D13*(#a3!D6/60)))+((E13*(#a3!D7/60)))+(F13/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c113" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="13"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row14" class="c1_row" data-c1="14">
                                            <td class="text-center"><input <?= isset($stored['7A14']) ? 'checked' : '' ?> id="7A14" name="7A14" data-cell="A14" value="1" data-cek1="14" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B14" name="7B14" data-cell="B14" class="text-left btn-block" value="<?= isset($stored['7B14']) ? $stored['7B14'] : 'End of Year tax report' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C14']) ? $stored['7C14'] : '' ?>" id="7C14" name="7C14" data-cell="C14" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D14']) ? $stored['7D14'] : '' ?>" id="7D14" name="7D14" data-cell="D14" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E14']) ? $stored['7E14'] : '' ?>" id="7E14" name="7E14" data-cell="E14" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F14']) ? $stored['7F14'] : '' ?>" id="7F14" name="7F14" data-cell="F14" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G14']) ? $stored['7G14'] : '' ?>" id="7G14" name="7G14" data-cell="G14" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C14*(#a3!D5/60))+((D14*(#a3!D6/60)))+((E14*(#a3!D7/60)))+(F14/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c114" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="14"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row15" class="c1_row" data-c1="15">
                                            <td class="text-center"><input <?= isset($stored['7A15']) ? 'checked' : '' ?> id="7A15" name="7A15" data-cell="A15" value="1" data-cek1="15" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B15" name="7B15" data-cell="B15" class="text-left btn-block" value="<?= isset($stored['7B15']) ? $stored['7B15'] : 'Response to unique event' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C15']) ? $stored['7C15'] : '' ?>" id="7C15" name="7C15" data-cell="C15" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D15']) ? $stored['7D15'] : '' ?>" id="7D15" name="7D15" data-cell="D15" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E15']) ? $stored['7E15'] : '' ?>" id="7E15" name="7E15" data-cell="E15" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F15']) ? $stored['7F15'] : '' ?>" id="7F15" name="7F15" data-cell="F15" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G15']) ? $stored['7G15'] : '' ?>" id="7G15" name="7G15" data-cell="G15" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C15*(#a3!D5/60))+((D15*(#a3!D6/60)))+((E15*(#a3!D7/60)))+(F15/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c115" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="15"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row16" class="c1_row" data-c1="16">
                                            <td class="text-center"><input <?= isset($stored['7A16']) ? 'checked' : '' ?> id="7A16" name="7A16" data-cell="A16" value="1" data-cek1="16" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B16" name="7B16" data-cell="B16" class="text-left btn-block" value="<?= isset($stored['7B16']) ? $stored['7B16'] : 'Record of Advice' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C16']) ? $stored['7C16'] : '' ?>" id="7C16" name="7C16" data-cell="C16" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D16']) ? $stored['7D16'] : '' ?>" id="7D16" name="7D16" data-cell="D16" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E16']) ? $stored['7E16'] : '' ?>" id="7E16" name="7E16" data-cell="E16" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F16']) ? $stored['7F16'] : '' ?>" id="7F16" name="7F16" data-cell="F16" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G16']) ? $stored['7G16'] : '' ?>" id="7G16" name="7G16" data-cell="G16" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C16*(#a3!D5/60))+((D16*(#a3!D6/60)))+((E16*(#a3!D7/60)))+(F16/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c116" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="16"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c1_row17" class="c1_row" data-c1="17">
                                            <td class="text-center"><input <?= isset($stored['7A17']) ? 'checked' : '' ?> id="7A17" name="7A17" data-cell="A17" value="1" data-cek1="17" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                            <td><input id="7B17" name="7B17" data-cell="B17" class="text-left btn-block" value="<?= isset($stored['7B17']) ? $stored['7B17'] : 'Statement of Advice' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['7C17']) ? $stored['7C17'] : '' ?>" id="7C17" name="7C17" data-cell="C17" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7D17']) ? $stored['7D17'] : '' ?>" id="7D17" name="7D17" data-cell="D17" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7E17']) ? $stored['7E17'] : '' ?>" id="7E17" name="7E17" data-cell="E17" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['7F17']) ? $stored['7F17'] : '' ?>" id="7F17" name="7F17" data-cell="F17" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['7G17']) ? $stored['7G17'] : '' ?>" id="7G17" name="7G17" data-cell="G17" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C17*(#a3!D5/60))+((D17*(#a3!D6/60)))+((E17*(#a3!D7/60)))+(F17/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c117" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="17"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
<?php if (isset($stored["addt_c1_list"])): foreach ($stored["addt_c1_list"] as $row): ?>
                                                <tr id="c1_row<?= $row ?>" class="c1_row addt" data-c1="<?= $row ?>">
                                                    <td class="text-center"><input <?= isset($stored["7A$row"]) ? 'checked' : '' ?> id="7A<?= $row ?>" name="7A<?= $row ?>" data-cell="A<?= $row ?>" value="1" data-cek1="<?= $row ?>" class="checkbox_c1 text-center input_cell" type="checkbox"></td>
                                                    <td><input id="7B<?= $row ?>" name="7B<?= $row ?>" data-cell="B<?= $row ?>" class="text-left btn-block" value="<?= isset($stored["7B$row"]) ? $stored["7B$row"] : '' ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["7C$row"]) ? $stored["7C$row"] : '' ?>" id="7C<?= $row ?>" name="7C<?= $row ?>" data-cell="C<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["7D$row"]) ? $stored["7D$row"] : '' ?>" id="7D<?= $row ?>" name="7D<?= $row ?>" data-cell="D<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["7E$row"]) ? $stored["7E$row"] : '' ?>" id="7E<?= $row ?>" name="7E<?= $row ?>" data-cell="E<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["7F$row"]) ? $stored["7F$row"] : '' ?>" id="7F<?= $row ?>" name="7F<?= $row ?>" data-cell="F<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["7G$row"]) ? $stored["7G$row"] : '' ?>" id="7G<?= $row ?>" name="7G<?= $row ?>" data-cell="G<?= $row ?>" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C<?= $row ?>*(#a3!D5/60))+((D<?= $row ?>*(#a3!D6/60)))+((E<?= $row ?>*(#a3!D7/60)))+(F<?= $row ?>/(1-#a2!B12)))" type="text"></td>
                                                    <td class="text-center"><button id="del_c1<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
    <?php endforeach;
endif;
?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="8"><button id="add_c1" type="button" class="btn btn-success btn-sm add_c1 text-center" data-id="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div id="c2_tab" class="tab-pane">
        <form data-cell="C2" class="form-horizontal" action="" method="post" role="form" id="c2">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>1-to-Many Services</h3>
                            <h5 class="text-justify">Now let's factor in those elements of your service offer that you deliver to a number of clients at the same time.</h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <div class="">
                                    <input value="12" id="count_c2" name="count_c2"  data-cell="A1" data-formula="" type="hidden">
                                    <input value="<?= isset($stored['count_c22']) ? $stored['count_c22'] : '' ?>" id="count_c22" name="count_c22" data-cell="B1" data-formula="" type="hidden">
                                </div><table id="c2_table" class="table table-striped table-hover table-condensed table-bordered">

                                    <thead>
                                        <tr>
                                            <th style="width:7%"><label for="">Is this something you'd like to consider for your own offer?</label></th>
                                            <th style="width:30%"><label for="">1-to-many service offerings</label></th>
                                            <th style="width:10%"><label for="">Advice Providers time (mins)</label></th>
                                            <th style="width:10%"><label for="">Advice Producers</label></th>
                                            <th style="width:10%"><label for="">Admin</label></th>
                                            <th style="width:10%"><label for="">Other costs</label></th>
                                            <th style="width:10%"><label for="">People</label></th>
                                            <th style="width:10%"><label for="">Cost per person (not incl GST)</label></th>
                                            <th style="width:3%"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="c2_list">
                                        <tr id="c2_row5" class="c2_row" data-c2="5">
                                            <td class="text-center"><input <?= isset($stored['8A5']) ? 'checked' : '' ?> id="8A5" name="8A5" data-cell="A5" value="1" data-cek2="5" class="checkbox_c2 text-center input_cell" type="checkbox"></td>
                                            <td><input id="8B5" name="8B5" data-cell="B5" class="text-left btn-block" value="<?= isset($stored['8B5']) ? $stored['8B5'] : 'Newsletter' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['8C5']) ? $stored['8C5'] : '' ?>" id="8C5" name="8C5" data-cell="C5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8D5']) ? $stored['8D5'] : '' ?>" id="8D5" name="8D5" data-cell="D5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8E5']) ? $stored['8E5'] : '' ?>" id="8E5" name="8E5" data-cell="E5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8F5']) ? $stored['8F5'] : '' ?>" id="8F5" name="8F5" data-cell="F5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8G5']) ? $stored['8G5'] : '' ?>" id="8G5" name="8G5" data-cell="G5" class="text-right input_cell btn-block" data-format=" 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8H5']) ? $stored['8H5'] : '' ?>" id="8H5" name="8H5" data-cell="H5" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C5*(#a3!D5/60))+((D5*(#a3!D6/60)))+((E5*(#a3!D7/60)))+(F5/(1-#a2!B12))))/G5" type="text"></td>
                                            <td class="text-center"><button id="del_c25" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c2_row6" class="c2_row" data-c2="6">
                                            <td class="text-center"><input <?= isset($stored['8A6']) ? 'checked' : '' ?> id="8A6" name="8A6" data-cell="A6" value="1" data-cek2="6" class="checkbox_c2 text-center input_cell" type="checkbox"></td>
                                            <td><input id="8B6" name="8B6" data-cell="B6" class="text-left btn-block" value="<?= isset($stored['8B6']) ? $stored['8B6'] : 'Educational seminar' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['8C6']) ? $stored['8C6'] : '' ?>" id="8C6" name="8C6" data-cell="C6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8D6']) ? $stored['8D6'] : '' ?>" id="8D6" name="8D6" data-cell="D6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8E6']) ? $stored['8E6'] : '' ?>" id="8E6" name="8E6" data-cell="E6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8F6']) ? $stored['8F6'] : '' ?>" id="8F6" name="8F6" data-cell="F6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8G6']) ? $stored['8G6'] : '' ?>" id="8G6" name="8G6" data-cell="G6" class="text-right input_cell btn-block" data-format=" 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8H6']) ? $stored['8H6'] : '' ?>" id="8H6" name="8H6" data-cell="H6" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C6*(#a3!D5/60))+((D6*(#a3!D6/60)))+((E6*(#a3!D7/60)))+(F6/(1-#a2!B12))))/G6" type="text"></td>
                                            <td class="text-center"><button id="del_c26" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c2_row7" class="c2_row" data-c2="7">
                                            <td class="text-center"><input <?= isset($stored['8A7']) ? 'checked' : '' ?> id="8A7" name="8A7" data-cell="A7" value="1" data-cek2="7" class="checkbox_c2 text-center input_cell" type="checkbox"></td>
                                            <td><input id="8B7" name="8B7" data-cell="B7" class="text-left btn-block" value="<?= isset($stored['8B7']) ? $stored['8B7'] : 'Prestige event' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['8C7']) ? $stored['8C7'] : '' ?>" id="8C7" name="8C7" data-cell="C7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8D7']) ? $stored['8D7'] : '' ?>" id="8D7" name="8D7" data-cell="D7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8E7']) ? $stored['8E7'] : '' ?>" id="8E7" name="8E7" data-cell="E7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8F7']) ? $stored['8F7'] : '' ?>" id="8F7" name="8F7" data-cell="F7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8G7']) ? $stored['8G7'] : '' ?>" id="8G7" name="8G7" data-cell="G7" class="text-right input_cell btn-block" data-format=" 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8H7']) ? $stored['8H7'] : '' ?>" id="8H7" name="8H7" data-cell="H7" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C7*(#a3!D5/60))+((D7*(#a3!D6/60)))+((E7*(#a3!D7/60)))+(F7/(1-#a2!B12))))/G7" type="text"></td>
                                            <td class="text-center"><button id="del_c27" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c2_row8" class="c2_row" data-c2="8">
                                            <td class="text-center"><input <?= isset($stored['8A8']) ? 'checked' : '' ?> id="8A8" name="8A8" data-cell="A8" value="1" data-cek2="8" class="checkbox_c2 text-center input_cell" type="checkbox"></td>
                                            <td><input id="8B8" name="8B8" data-cell="B8" class="text-left btn-block" value="<?= isset($stored['8B8']) ? $stored['8B8'] : 'Offer of review' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['8C8']) ? $stored['8C8'] : '' ?>" id="8C8" name="8C8" data-cell="C8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8D8']) ? $stored['8D8'] : '' ?>" id="8D8" name="8D8" data-cell="D8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8E8']) ? $stored['8E8'] : '' ?>" id="8E8" name="8E8" data-cell="E8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8F8']) ? $stored['8F8'] : '' ?>" id="8F8" name="8F8" data-cell="F8" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8G8']) ? $stored['8G8'] : '' ?>" id="8G8" name="8G8" data-cell="G8" class="text-right input_cell btn-block" data-format=" 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8H8']) ? $stored['8H8'] : '' ?>" id="8H8" name="8H8" data-cell="H8" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C8*(#a3!D5/60))+((D8*(#a3!D6/60)))+((E8*(#a3!D7/60)))+(F8/(1-#a2!B12))))/G8" type="text"></td>
                                            <td class="text-center"><button id="del_c28" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="8"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c2_row9" class="c2_row" data-c2="9">
                                            <td class="text-center"><input <?= isset($stored['8A9']) ? 'checked' : '' ?> id="8A9" name="8A9" data-cell="A9" value="1" data-cek2="9" class="checkbox_c2 text-center input_cell" type="checkbox"></td>
                                            <td><input id="8B9" name="8B9" data-cell="B9" class="text-left btn-block" value="<?= isset($stored['8B9']) ? $stored['8B9'] : 'FDS statements' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['8C9']) ? $stored['8C9'] : '' ?>" id="8C9" name="8C9" data-cell="C9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8D9']) ? $stored['8D9'] : '' ?>" id="8D9" name="8D9" data-cell="D9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8E9']) ? $stored['8E9'] : '' ?>" id="8E9" name="8E9" data-cell="E9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8F9']) ? $stored['8F9'] : '' ?>" id="8F9" name="8F9" data-cell="F9" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8G9']) ? $stored['8G9'] : '' ?>" id="8G9" name="8G9" data-cell="G9" class="text-right input_cell btn-block" data-format=" 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8H9']) ? $stored['8H9'] : '' ?>" id="8H9" name="8H9" data-cell="H9" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C9*(#a3!D5/60))+((D9*(#a3!D6/60)))+((E9*(#a3!D7/60)))+(F9/(1-#a2!B12))))/G9" type="text"></td>
                                            <td class="text-center"><button id="del_c29" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="9"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c2_row10" class="c2_row" data-c2="10">
                                            <td class="text-center"><input <?= isset($stored['8A10']) ? 'checked' : '' ?> id="8A10" name="8A10" data-cell="A10" value="1" data-cek2="10" class="checkbox_c2 text-center input_cell" type="checkbox"></td>
                                            <td><input id="8B10" name="8B10" data-cell="B10" class="text-left btn-block" value="<?= isset($stored['8B10']) ? $stored['8B10'] : 'Webinar' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['8C10']) ? $stored['8C10'] : '' ?>" id="8C10" name="8C10" data-cell="C10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8D10']) ? $stored['8D10'] : '' ?>" id="8D10" name="8D10" data-cell="D10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8E10']) ? $stored['8E10'] : '' ?>" id="8E10" name="8E10" data-cell="E10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8F10']) ? $stored['8F10'] : '' ?>" id="8F10" name="8F10" data-cell="F10" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8G10']) ? $stored['8G10'] : '' ?>" id="8G10" name="8G10" data-cell="G10" class="text-right input_cell btn-block" data-format=" 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8H10']) ? $stored['8H10'] : '' ?>" id="8H10" name="8H10" data-cell="H10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C10*(#a3!D5/60))+((D10*(#a3!D6/60)))+((E10*(#a3!D7/60)))+(F10/(1-#a2!B12))))/G10" type="text"></td>
                                            <td class="text-center"><button id="del_c210" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="10"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c2_row11" class="c2_row" data-c2="11">
                                            <td class="text-center"><input <?= isset($stored['8A11']) ? 'checked' : '' ?> id="8A11" name="8A11" data-cell="A11" value="1" data-cek2="11" class="checkbox_c2 text-center input_cell" type="checkbox"></td>
                                            <td><input id="8B11" name="8B11" data-cell="B11" class="text-left btn-block" value="<?= isset($stored['8B11']) ? $stored['8B11'] : 'Online Knowledge Centre Area' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['8C11']) ? $stored['8C11'] : '' ?>" id="8C11" name="8C11" data-cell="C11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8D11']) ? $stored['8D11'] : '' ?>" id="8D11" name="8D11" data-cell="D11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8E11']) ? $stored['8E11'] : '' ?>" id="8E11" name="8E11" data-cell="E11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8F11']) ? $stored['8F11'] : '' ?>" id="8F11" name="8F11" data-cell="F11" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8G11']) ? $stored['8G11'] : '' ?>" id="8G11" name="8G11" data-cell="G11" class="text-right input_cell btn-block" data-format=" 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8H11']) ? $stored['8H11'] : '' ?>" id="8H11" name="8H11" data-cell="H11" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C11*(#a3!D5/60))+((D11*(#a3!D6/60)))+((E11*(#a3!D7/60)))+(F11/(1-#a2!B12))))/G11" type="text"></td>
                                            <td class="text-center"><button id="del_c211" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="11"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c2_row12" class="c2_row" data-c2="12">
                                            <td class="text-center"><input <?= isset($stored['8A12']) ? 'checked' : '' ?> id="8A12" name="8A12" data-cell="A12" value="1" data-cek2="12" class="checkbox_c2 text-center input_cell" type="checkbox"></td>
                                            <td><input id="8B12" name="8B12" data-cell="B12" class="text-left btn-block" value="<?= isset($stored['8B12']) ? $stored['8B12'] : 'Budget Update' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['8C12']) ? $stored['8C12'] : '' ?>" id="8C12" name="8C12" data-cell="C12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8D12']) ? $stored['8D12'] : '' ?>" id="8D12" name="8D12" data-cell="D12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8E12']) ? $stored['8E12'] : '' ?>" id="8E12" name="8E12" data-cell="E12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['8F12']) ? $stored['8F12'] : '' ?>" id="8F12" name="8F12" data-cell="F12" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8G12']) ? $stored['8G12'] : '' ?>" id="8G12" name="8G12" data-cell="G12" class="text-right input_cell btn-block" data-format=" 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['8H12']) ? $stored['8H12'] : '' ?>" id="8H12" name="8H12" data-cell="H12" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C12*(#a3!D5/60))+((D12*(#a3!D6/60)))+((E12*(#a3!D7/60)))+(F12/(1-#a2!B12))))/G12" type="text"></td>
                                            <td class="text-center"><button id="del_c212" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="12"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
<?php if (isset($stored["addt_c2_list"])): foreach ($stored["addt_c2_list"] as $row): ?>
                                                <tr id="c2_row<?= $row ?>" class="c2_row addt" data-c2="<?= $row ?>">
                                                    <td class="text-center"><input <?= isset($stored["8A$row"]) ? 'checked' : '' ?> id="8A<?= $row ?>" name="8A<?= $row ?>" data-cell="A<?= $row ?>" value="1" data-cek2="<?= $row ?>" class="checkbox_c2 text-center input_cell" type="checkbox"></td>
                                                    <td><input id="8B<?= $row ?>" name="8B<?= $row ?>" data-cell="B<?= $row ?>" class="text-left btn-block" value="<?= isset($stored["8B$row"]) ? $stored["8B$row"] : '' ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["8C$row"]) ? $stored["8C$row"] : '' ?>" id="8C<?= $row ?>" name="8C<?= $row ?>" data-cell="C<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["8D$row"]) ? $stored["8D$row"] : '' ?>" id="8D<?= $row ?>" name="8D<?= $row ?>" data-cell="D<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["8E$row"]) ? $stored["8E$row"] : '' ?>" id="8E<?= $row ?>" name="8E<?= $row ?>" data-cell="E<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["8F$row"]) ? $stored["8F$row"] : '' ?>" id="8F<?= $row ?>" name="8F<?= $row ?>" data-cell="F<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["8G$row"]) ? $stored["8G$row"] : '' ?>" id="8G<?= $row ?>" name="8G<?= $row ?>" data-cell="G<?= $row ?>" class="text-right input_cell btn-block" data-format=" 0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["8H$row"]) ? $stored["8H$row"] : '' ?>" id="8H<?= $row ?>" name="8H<?= $row ?>" data-cell="H<?= $row ?>" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C<?= $row ?>*(#a3!D5/60))+((D<?= $row ?>*(#a3!D6/60)))+((E<?= $row ?>*(#a3!D7/60)))+(F<?= $row ?>/(1-#a2!B12))))/G<?= $row ?>" type="text"></td>
                                                    <td class="text-center"><button id="del_c2<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
    <?php endforeach;
endif;
?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="8"><button id="add_c2" type="button" class="btn btn-success btn-sm add_c2 text-center" data-id="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div id="c3_tab" class="tab-pane">
        <form data-cell="c3" class="form-horizontal" action="" method="post" role="form" id="c3">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Strategy Management</h3>
                            <h5 class="text-justify">Just as with engaging new clients, differences in strategies will impact the way your service clients. So, it's time to have a think about how much additional time during the year would be taken up in looking after a client with each of the following strategies.</h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="c3_table" class="table table-striped table-hover table-condensed table-bordered">
                                    <input id="count_c3" name="count_c3" data-cell="A1" value="28" type="hidden">
                                    <input value="<?= isset($stored['count_c33']) ? $stored['count_c33'] : '' ?>" id="count_c33" name="count_c33" data-cell="B1" data-formula="" type="hidden">
                                    <thead>
                                        <tr>
                                            <th style="width:7%"><label for="">Is this an area you look at?</label></th>
                                            <th style="width:30%"><label for="">Strategic Elements</label></th>
                                            <th style="width:12%"><label for="">Advice Providers time (mins)</label></th>
                                            <th style="width:12%"><label for="">Advice Producers</label></th>
                                            <th style="width:12%"><label for="">Admin</label></th>
                                            <th style="width:12%"><label for="">Other costs</label></th>
                                            <th style="width:12%"><label for="">Additional fees (Not incl. GST)</label></th>
                                            <th style="width:3%"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="c3_list">
                                        <tr id="c3_row5" class="c3_row" data-c3="5">
                                            <td class="text-center"><input <?= isset($stored['9A5']) ? 'checked' : '' ?> id="9A5" name="9A5" data-cell="A5" value="1" data-cek4="5" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B5" name="9B5" data-cell="B5" class="text-left btn-block" value="<?= isset($stored['9B5']) ? $stored['9B5'] : 'High-touch client' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C5']) ? $stored['9C5'] : '' ?>" id="9C5" name="9C5" data-cell="C5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D5']) ? $stored['9D5'] : '' ?>" id="9D5" name="9D5" data-cell="D5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E5']) ? $stored['9E5'] : '' ?>" id="9E5" name="9E5" data-cell="E5" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F5']) ? $stored['9F5'] : '' ?>" id="9F5" name="9F5" data-cell="F5" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G5']) ? $stored['9G5'] : '' ?>" id="9G5" name="9G5" data-cell="G5" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C5*(#a3!D5/60))+((D5*(#a3!D6/60)))+((E5*(#a3!D7/60)))+(F5/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c35" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="5"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row6" class="c3_row" data-c3="6">
                                            <td class="text-center"><input <?= isset($stored['9A6']) ? 'checked' : '' ?> id="9A6" name="9A6" data-cell="A6" value="1" data-cek4="6" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B6" name="9B6" data-cell="B6" class="text-left btn-block" value="<?= isset($stored['9B6']) ? $stored['9B6'] : 'SMSF' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C6']) ? $stored['9C6'] : '' ?>" id="9C6" name="9C6" data-cell="C6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D6']) ? $stored['9D6'] : '' ?>" id="9D6" name="9D6" data-cell="D6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E6']) ? $stored['9E6'] : '' ?>" id="9E6" name="9E6" data-cell="E6" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F6']) ? $stored['9F6'] : '' ?>" id="9F6" name="9F6" data-cell="F6" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G6']) ? $stored['9G6'] : '' ?>" id="9G6" name="9G6" data-cell="G6" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C6*(#a3!D5/60))+((D6*(#a3!D6/60)))+((E6*(#a3!D7/60)))+(F6/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c36" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="6"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row7" class="c3_row" data-c3="7">
                                            <td class="text-center"><input <?= isset($stored['9A7']) ? 'checked' : '' ?> id="9A7" name="9A7" data-cell="A7" value="1" data-cek4="7" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B7" name="9B7" data-cell="B7" class="text-left btn-block" value="<?= isset($stored['9B7']) ? $stored['9B7'] : 'Equity portfolio' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C7']) ? $stored['9C7'] : '' ?>" id="9C7" name="9C7" data-cell="C7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D7']) ? $stored['9D7'] : '' ?>" id="9D7" name="9D7" data-cell="D7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E7']) ? $stored['9E7'] : '' ?>" id="9E7" name="9E7" data-cell="E7" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F7']) ? $stored['9F7'] : '' ?>" id="9F7" name="9F7" data-cell="F7" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G7']) ? $stored['9G7'] : '' ?>" id="9G7" name="9G7" data-cell="G7" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C7*(#a3!D5/60))+((D7*(#a3!D6/60)))+((E7*(#a3!D7/60)))+(F7/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c37" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="7"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row8" class="c3_row" data-c3="8">
                                            <td class="text-center"><input <?= isset($stored['9A8']) ? 'checked' : '' ?> id="9A8" name="9A8" data-cell="A8" value="1" data-cek4="8" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B8" name="9B8" data-cell="B8" class="text-left btn-block" value="<?= isset($stored['9B8']) ? $stored['9B8'] : 'Personal protection' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C8']) ? $stored['9C8'] : '' ?>" id="9C8" name="9C8" data-cell="C8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D8']) ? $stored['9D8'] : '' ?>" id="9D8" name="9D8" data-cell="D8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E8']) ? $stored['9E8'] : '' ?>" id="9E8" name="9E8" data-cell="E8" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F8']) ? $stored['9F8'] : '' ?>" id="9F8" name="9F8" data-cell="F8" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G8']) ? $stored['9G8'] : '' ?>" id="9G8" name="9G8" data-cell="G8" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C8*(#a3!D5/60))+((D8*(#a3!D6/60)))+((E8*(#a3!D7/60)))+(F8/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c38" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="8"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row9" class="c3_row" data-c3="9">
                                            <td class="text-center"><input <?= isset($stored['9A9']) ? 'checked' : '' ?> id="9A9" name="9A9" data-cell="A9" value="1" data-cek4="9" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B9" name="9B9" data-cell="B9" class="text-left btn-block" value="<?= isset($stored['9B9']) ? $stored['9B9'] : 'Additional research' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C9']) ? $stored['9C9'] : '' ?>" id="9C9" name="9C9" data-cell="C9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D9']) ? $stored['9D9'] : '' ?>" id="9D9" name="9D9" data-cell="D9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E9']) ? $stored['9E9'] : '' ?>" id="9E9" name="9E9" data-cell="E9" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F9']) ? $stored['9F9'] : '' ?>" id="9F9" name="9F9" data-cell="F9" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G9']) ? $stored['9G9'] : '' ?>" id="9G9" name="9G9" data-cell="G9" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C9*(#a3!D5/60))+((D9*(#a3!D6/60)))+((E9*(#a3!D7/60)))+(F9/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c39" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="9"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row10" class="c3_row" data-c3="10">
                                            <td class="text-center"><input <?= isset($stored['9A10']) ? 'checked' : '' ?> id="9A10" name="9A10" data-cell="A10" value="1" data-cek4="10" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B10" name="9B10" data-cell="B10" class="text-left btn-block" value="<?= isset($stored['9B10']) ? $stored['9B10'] : 'Business Insurance' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C10']) ? $stored['9C10'] : '' ?>" id="9C10" name="9C10" data-cell="C10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D10']) ? $stored['9D10'] : '' ?>" id="9D10" name="9D10" data-cell="D10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E10']) ? $stored['9E10'] : '' ?>" id="9E10" name="9E10" data-cell="E10" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F10']) ? $stored['9F10'] : '' ?>" id="9F10" name="9F10" data-cell="F10" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G10']) ? $stored['9G10'] : '' ?>" id="9G10" name="9G10" data-cell="G10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C10*(#a3!D5/60))+((D10*(#a3!D6/60)))+((E10*(#a3!D7/60)))+(F10/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c310" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="10"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row11" class="c3_row" data-c3="11">
                                            <td class="text-center"><input <?= isset($stored['9A11']) ? 'checked' : '' ?> id="9A11" name="9A11" data-cell="A11" value="1" data-cek4="11" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B11" name="9B11" data-cell="B11" class="text-left btn-block" value="<?= isset($stored['9B11']) ? $stored['9B11'] : 'Estate Planning' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C11']) ? $stored['9C11'] : '' ?>" id="9C11" name="9C11" data-cell="C11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D11']) ? $stored['9D11'] : '' ?>" id="9D11" name="9D11" data-cell="D11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E11']) ? $stored['9E11'] : '' ?>" id="9E11" name="9E11" data-cell="E11" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F11']) ? $stored['9F11'] : '' ?>" id="9F11" name="9F11" data-cell="F11" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G11']) ? $stored['9G11'] : '' ?>" id="9G11" name="9G11" data-cell="G11" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C11*(#a3!D5/60))+((D11*(#a3!D6/60)))+((E11*(#a3!D7/60)))+(F11/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c311" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="11"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row12" class="c3_row" data-c3="12">
                                            <td class="text-center"><input <?= isset($stored['9A12']) ? 'checked' : '' ?> id="9A12" name="9A12" data-cell="A12" value="1" data-cek4="12" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B12" name="9B12" data-cell="B12" class="text-left btn-block" value="<?= isset($stored['9B12']) ? $stored['9B12'] : 'Tax returns' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C12']) ? $stored['9C12'] : '' ?>" id="9C12" name="9C12" data-cell="C12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D12']) ? $stored['9D12'] : '' ?>" id="9D12" name="9D12" data-cell="D12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E12']) ? $stored['9E12'] : '' ?>" id="9E12" name="9E12" data-cell="E12" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F12']) ? $stored['9F12'] : '' ?>" id="9F12" name="9F12" data-cell="F12" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G12']) ? $stored['9G12'] : '' ?>" id="9G12" name="9G12" data-cell="G12" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C12*(#a3!D5/60))+((D12*(#a3!D6/60)))+((E12*(#a3!D7/60)))+(F12/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c312" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="12"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row13" class="c3_row" data-c3="13">
                                            <td class="text-center"><input <?= isset($stored['9A13']) ? 'checked' : '' ?> id="9A13" name="9A13" data-cell="A13" value="1" data-cek4="13" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B13" name="9B13" data-cell="B13" class="text-left btn-block" value="<?= isset($stored['9B13']) ? $stored['9B13'] : 'Complex investment scenarios' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C13']) ? $stored['9C13'] : '' ?>" id="9C13" name="9C13" data-cell="C13" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D13']) ? $stored['9D13'] : '' ?>" id="9D13" name="9D13" data-cell="D13" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E13']) ? $stored['9E13'] : '' ?>" id="9E13" name="9E13" data-cell="E13" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F13']) ? $stored['9F13'] : '' ?>" id="9F13" name="9F13" data-cell="F13" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G13']) ? $stored['9G13'] : '' ?>" id="9G13" name="9G13" data-cell="G13" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C13*(#a3!D5/60))+((D13*(#a3!D6/60)))+((E13*(#a3!D7/60)))+(F13/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c313" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="13"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row14" class="c3_row" data-c3="14">
                                            <td class="text-center"><input <?= isset($stored['9A14']) ? 'checked' : '' ?> id="9A14" name="9A14" data-cell="A14" value="1" data-cek4="14" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B14" name="9B14" data-cell="B14" class="text-left btn-block" value="<?= isset($stored['9B14']) ? $stored['9B14'] : 'International affairs' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C14']) ? $stored['9C14'] : '' ?>" id="9C14" name="9C14" data-cell="C14" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D14']) ? $stored['9D14'] : '' ?>" id="9D14" name="9D14" data-cell="D14" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E14']) ? $stored['9E14'] : '' ?>" id="9E14" name="9E14" data-cell="E14" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F14']) ? $stored['9F14'] : '' ?>" id="9F14" name="9F14" data-cell="F14" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G14']) ? $stored['9G14'] : '' ?>" id="9G14" name="9G14" data-cell="G14" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C14*(#a3!D5/60))+((D14*(#a3!D6/60)))+((E14*(#a3!D7/60)))+(F14/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c314" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="14"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row15" class="c3_row" data-c3="15">
                                            <td class="text-center"><input <?= isset($stored['9A15']) ? 'checked' : '' ?> id="9A15" name="9A15" data-cell="A15" value="1" data-cek4="15" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B15" name="9B15" data-cell="B15" class="text-left btn-block" value="<?= isset($stored['9B15']) ? $stored['9B15'] : 'Mortgage lending' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C15']) ? $stored['9C15'] : '' ?>" id="9C15" name="9C15" data-cell="C15" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D15']) ? $stored['9D15'] : '' ?>" id="9D15" name="9D15" data-cell="D15" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E15']) ? $stored['9E15'] : '' ?>" id="9E15" name="9E15" data-cell="E15" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F15']) ? $stored['9F15'] : '' ?>" id="9F15" name="9F15" data-cell="F15" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G15']) ? $stored['9G15'] : '' ?>" id="9G15" name="9G15" data-cell="G15" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C15*(#a3!D5/60))+((D15*(#a3!D6/60)))+((E15*(#a3!D7/60)))+(F15/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c315" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="15"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row16" class="c3_row" data-c3="16">
                                            <td class="text-center"><input <?= isset($stored['9A16']) ? 'checked' : '' ?> id="9A16" name="9A16" data-cell="A16" value="1" data-cek4="16" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B16" name="9B16" data-cell="B16" class="text-left btn-block" value="<?= isset($stored['9B16']) ? $stored['9B16'] : 'Travel to client' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C16']) ? $stored['9C16'] : '' ?>" id="9C16" name="9C16" data-cell="C16" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D16']) ? $stored['9D16'] : '' ?>" id="9D16" name="9D16" data-cell="D16" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E16']) ? $stored['9E16'] : '' ?>" id="9E16" name="9E16" data-cell="E16" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F16']) ? $stored['9F16'] : '' ?>" id="9F16" name="9F16" data-cell="F16" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G16']) ? $stored['9G16'] : '' ?>" id="9G16" name="9G16" data-cell="G16" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C16*(#a3!D5/60))+((D16*(#a3!D6/60)))+((E16*(#a3!D7/60)))+(F16/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c316" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="16"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row17" class="c3_row" data-c3="17">
                                            <td class="text-center"><input <?= isset($stored['9A17']) ? 'checked' : '' ?> id="9A17" name="9A17" data-cell="A17" value="1" data-cek4="17" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B17" name="9B17" data-cell="B17" class="text-left btn-block" value="<?= isset($stored['9B17']) ? $stored['9B17'] : 'Tax returns' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C17']) ? $stored['9C17'] : '' ?>" id="9C17" name="9C17" data-cell="C17" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D17']) ? $stored['9D17'] : '' ?>" id="9D17" name="9D17" data-cell="D17" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E17']) ? $stored['9E17'] : '' ?>" id="9E17" name="9E17" data-cell="E17" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F17']) ? $stored['9F17'] : '' ?>" id="9F17" name="9F17" data-cell="F17" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G17']) ? $stored['9G17'] : '' ?>" id="9G17" name="9G17" data-cell="G17" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C17*(#a3!D5/60))+((D17*(#a3!D6/60)))+((E17*(#a3!D7/60)))+(F17/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c317" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="17"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row18" class="c3_row" data-c3="18">
                                            <td class="text-center"><input <?= isset($stored['9A18']) ? 'checked' : '' ?> id="9A18" name="9A18" data-cell="A18" value="1" data-cek4="18" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B18" name="9B18" data-cell="B18" class="text-left btn-block" value="<?= isset($stored['9B18']) ? $stored['9B18'] : 'Self-employed business client' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C18']) ? $stored['9C18'] : '' ?>" id="9C18" name="9C18" data-cell="C18" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D18']) ? $stored['9D18'] : '' ?>" id="9D18" name="9D18" data-cell="D18" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E18']) ? $stored['9E18'] : '' ?>" id="9E18" name="9E18" data-cell="E18" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F18']) ? $stored['9F18'] : '' ?>" id="9F18" name="9F18" data-cell="F18" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G18']) ? $stored['9G18'] : '' ?>" id="9G18" name="9G18" data-cell="G18" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C18*(#a3!D5/60))+((D18*(#a3!D6/60)))+((E18*(#a3!D7/60)))+(F18/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c318" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="18"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row19" class="c3_row" data-c3="19">
                                            <td class="text-center"><input <?= isset($stored['9A19']) ? 'checked' : '' ?> id="9A19" name="9A19" data-cell="A19" value="1" data-cek4="19" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B19" name="9B19" data-cell="B19" class="text-left btn-block" value="<?= isset($stored['9B19']) ? $stored['9B19'] : 'Redundancy package' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C19']) ? $stored['9C19'] : '' ?>" id="9C19" name="9C19" data-cell="C19" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D19']) ? $stored['9D19'] : '' ?>" id="9D19" name="9D19" data-cell="D19" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E19']) ? $stored['9E19'] : '' ?>" id="9E19" name="9E19" data-cell="E19" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F19']) ? $stored['9F19'] : '' ?>" id="9F19" name="9F19" data-cell="F19" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G19']) ? $stored['9G19'] : '' ?>" id="9G19" name="9G19" data-cell="G19" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C19*(#a3!D5/60))+((D19*(#a3!D6/60)))+((E19*(#a3!D7/60)))+(F19/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c319" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="19"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <tr id="c3_row20" class="c3_row" data-c3="20">
                                            <td class="text-center"><input <?= isset($stored['9A20']) ? 'checked' : '' ?> id="9A20" name="9A20" data-cell="A20" value="1" data-cek4="20" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                            <td><input id="9B20" name="9B20" data-cell="B20" class="text-left btn-block" value="<?= isset($stored['9B20']) ? $stored['9B20'] : 'Additional research' ?>" type="text"></td>
                                            <td><input value="<?= isset($stored['9C20']) ? $stored['9C20'] : '' ?>" id="9C20" name="9C20" data-cell="C20" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9D20']) ? $stored['9D20'] : '' ?>" id="9D20" name="9D20" data-cell="D20" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9E20']) ? $stored['9E20'] : '' ?>" id="9E20" name="9E20" data-cell="E20" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                            <td><input value="<?= isset($stored['9F20']) ? $stored['9F20'] : '' ?>" id="9F20" name="9F20" data-cell="F20" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['9G20']) ? $stored['9G20'] : '' ?>" id="9G20" name="9G20" data-cell="G20" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C20*(#a3!D5/60))+((D20*(#a3!D6/60)))+((E20*(#a3!D7/60)))+(F20/(1-#a2!B12)))" type="text"></td>
                                            <td class="text-center"><button id="del_c320" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="20"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
<?php if (isset($stored["addt_c3_list"])): foreach ($stored["addt_c3_list"] as $row): ?>
                                                <tr id="c3_row<?= $row ?>" class="c3_row addt" data-c3="<?= $row ?>">
                                                    <td class="text-center"><input <?= isset($stored["9A$row"]) ? 'checked' : '' ?> id="9A<?= $row ?>" name="9A<?= $row ?>" data-cell="A<?= $row ?>" value="1" data-cek4="<?= $row ?>" class="checkbox_c3 text-center input_cell" type="checkbox"></td>
                                                    <td><input id="9B<?= $row ?>" name="9B<?= $row ?>" data-cell="B<?= $row ?>" class="text-left btn-block" value="<?= isset($stored["9B$row"]) ? $stored["9B$row"] : '' ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["9C$row"]) ? $stored["9C$row"] : '' ?>" id="9C<?= $row ?>" name="9C<?= $row ?>" data-cell="C<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["9D$row"]) ? $stored["9D$row"] : '' ?>" id="9D<?= $row ?>" name="9D<?= $row ?>" data-cell="D<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["9E$row"]) ? $stored["9E$row"] : '' ?>" id="9E<?= $row ?>" name="9E<?= $row ?>" data-cell="E<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]" type="text"></td>
                                                    <td><input value="<?= isset($stored["9F$row"]) ? $stored["9F$row"] : '' ?>" id="9F<?= $row ?>" name="9F<?= $row ?>" data-cell="F<?= $row ?>" class="text-right input_cell btn-block" data-format="$ 0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["9G$row"]) ? $stored["9G$row"] : '' ?>" id="9G<?= $row ?>" name="9G<?= $row ?>" data-cell="G<?= $row ?>" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C<?= $row ?>*(#a3!D5/60))+((D<?= $row ?>*(#a3!D6/60)))+((E<?= $row ?>*(#a3!D7/60)))+(F<?= $row ?>/(1-#a2!B12)))" type="text"></td>
                                                    <td class="text-center"><button id="del_c3<?= $row ?>" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="<?= $row ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                                </tr>
    <?php endforeach;
endif;
?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="8"><button id="add_c3" type="button" class="btn btn-success btn-sm add_c3 text-center" data-id="6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add row</button></td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>


    <div id="d1_tab" class="tab-pane">
        <form data-calx-identifier="CALX1420024221154" class="form-horizontal" action="result2.php" method="post" role="form" id="d1" target="_blank">

            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-offset-8 col-sm-4 text-right">
                            <label for="" class="col-sm-8"><h3 style="margin:0px">Get Your Result :</h3></label>
                            <div class="col-sm-4">
                                
                                <button id="pdf-d1" type="button" class="btn btn-pdf" style="background:transparent;padding:2px;" data-toggle="tooltip" data-placement="left" title="Download PDF">
                                    <img src="<?= base_url('asset/css/images/pdf.ico') ?>" style="width:30px;">
                                </button>
                                <button id="print-d1" type="button" class="btn btn-print" style="background:transparent;padding:2px;" data-toggle="tooltip" data-placement="left" title="Print as HTML Page">
                                    <img src="<?= base_url('asset/css/images/printer.ico') ?>" style="width:30px;">
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Defining your service offerings</h3>
                            <h5 class="text-justify">Now it's time to decide what you want to have in each of your service offerings. Go through the list and decide how many times per year you'd like to include in each offer. The numbers will update as you go, so you can consider the interplay between all of the offerings</h5>
                        </div>
                    </div>

                    <div class="row top">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                <table id="d1_table" class="table table-striped table-hover table-condensed table-bordered">
                                    <input id="count_d1" name="count_d1" data-cell="A1" data-formula="IF((#c1!B1=0),17,#c1!B1)" type="hidden">
                                    <input value="31/12/2014" id="date_d1" name="date_d1" data-cell="Z1" data-formula="DATEFORMAT(TODAY(), 'DD/MM/YYYY')" type="hidden">
                                    <thead>
                                        <tr>
                                            <th style="width:300px"><label for="">Give each service a name</label></th>
                                            <th style="width:120px"><input id="serviceA3" name="serviceA3" data-cell="AA3" style="width:100%" class="text-center" value="<?= isset($stored['serviceA3']) ? $stored['serviceA3'] : 'Platinum' ?>" type="text"></th>
                                            <th style="width:120px"><input id="serviceB3" name="serviceB3" data-cell="AB3" style="width:100%" class="text-center" value="<?= isset($stored['serviceB3']) ? $stored['serviceB3'] : 'Gold' ?>" type="text"></th>
                                            <th style="width:120px">
                                                <!--<div class="input-group">
                                                  <span class="input-group-addon">
                                                    <input type="checkbox" id="serviceC2" name="serviceC2" data-cell="AC2" value="1" class="">
                                                  </span>-->
                                                <input id="serviceC3" name="serviceC3" data-cell="AC3" style="width:100%" class="text-center" value="<?= isset($stored['serviceC3']) ? $stored['serviceC3'] : 'Enter name' ?>" type="text">
                                                <!--</div>-->
                                            </th>
                                            <th style="width:120px">
                                                <!--<div class="input-group">
                                                  <span class="input-group-addon">
                                                    <input type="checkbox" id="serviceD2" name="serviceD2" data-cell="AD2" value="1" class="">
                                                  </span>-->
                                                <input id="serviceD3" name="serviceD3" data-cell="AD3" style="width:100%" class="text-center" value="<?= isset($stored['serviceD3']) ? $stored['serviceD3'] : 'Enter name' ?>" type="text">
                                                <!--</div>-->
                                            </th>
                                            <th style="width:120px">
                                                <!--<div class="input-group">
                                                  <span class="input-group-addon">
                                                    <input type="checkbox" id="serviceE2" name="serviceE2" data-cell="AE2" value="1" class="">
                                                  </span>-->
                                                <input id="serviceE3" name="serviceE3" data-cell="AE3" style="width:100%" class="text-center" value="<?= isset($stored['serviceE3']) ? $stored['serviceE3'] : 'Enter name' ?>" type="text">
                                                <!--</div>-->
                                            </th>
                                            <th style="width:120px">
                                                <!--<div class="input-group">
                                                  <span class="input-group-addon">
                                                    <input type="checkbox" id="serviceF2" name="serviceF2" data-cell="AF2" value="1" class="">
                                                  </span>-->
                                                <input id="serviceF3" name="serviceF3" data-cell="AF3" style="width:100%" class="text-center" value="<?= isset($stored['serviceF3']) ? $stored['serviceF3'] : 'Enter name' ?>" type="text">
                                                <!--</div>-->
                                            </th>
                                            <th style="width:120px">
                                                <!--<div class="input-group">
                                                  <span class="input-group-addon">
                                                    <input type="checkbox" id="serviceG2" name="serviceG2" data-cell="AG2" value="1" class="">
                                                  </span>-->
                                                <input id="serviceG3" name="serviceG3" data-cell="AG3" style="width:100%" class="text-center" value="<?= isset($stored['serviceG3']) ? $stored['serviceG3'] : 'Enter name' ?>" type="text">
                                                <!--</div>-->
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody id="d1_list">
                                        <tr id="d1_row4" class="" data-d1="4">
                                            <td><label for="">Running total</label></td>
                                            <td><input value="<?= isset($stored['serviceB4']) ? $stored['serviceB4'] : '' ?>" id="serviceB4" name="serviceB4" data-cell="AB4" class="formula_cell text-center btn-block" data-format="$ 0,0[.]" data-formula="SUM(AC5:AC100)+SUM(AC105:AC200)" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD4']) ? $stored['serviceD4'] : '' ?>" id="serviceD4" name="serviceD4" data-cell="AD4" class="text-center formula_cell btn-block" data-format="$ 0,0[.]" data-formula="SUM(AE5:AE100)+SUM(AE105:AE200)" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF4']) ? $stored['serviceF4'] : '' ?>" id="serviceF4" name="serviceF4" data-cell="AF4" class="text-center formula_cell btn-block" data-format="$ 0,0[.]" data-formula="SUM(AG5:AG100)+SUM(AG105:AG200)" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH4']) ? $stored['serviceH4'] : '' ?>" id="serviceH4" name="serviceH4" data-cell="AH4" class="text-center formula_cell btn-block" data-format="$ 0,0[.]" data-formula="SUM(AI5:AI100)+SUM(AI105:AI200)" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ4']) ? $stored['serviceJ4'] : '' ?>" id="serviceJ4" name="serviceJ4" data-cell="AJ4" class="text-center formula_cell btn-block" data-format="$ 0,0[.]" data-formula="SUM(AK5:AK100)+SUM(AK105:AK200)" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL4']) ? $stored['serviceL4'] : '' ?>" id="serviceL4" name="serviceL4" data-cell="AL4" class="text-center formula_cell btn-block" data-format="$ 0,0[.]" data-formula="SUM(AM5:AM100)+SUM(AM105:AM200)" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN4']) ? $stored['serviceN4'] : '' ?>" id="serviceN4" name="serviceN4" data-cell="AN4" class="text-center formula_cell btn-block" data-format="$ 0,0[.]" data-formula="SUM(AO5:AO100)+SUM(AO105:AO200)" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row5" class="d1_row" data-d1="5">
                                            <td><input value="<?= isset($stored['serviceA5']) ? $stored['serviceA5'] : '' ?>" id="serviceA5" name="serviceA5" data-cell="AA5" class="text-left btn-block" data-formula="#c1!B5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC5']) ? $stored['serviceC5'] : '' ?>" id="serviceC5" name="serviceC5" data-cell="AC5" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AB5*#c1!G5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE5']) ? $stored['serviceE5'] : '' ?>" id="serviceE5" name="serviceE5" data-cell="AE5" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AD5*#c1!G5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG5']) ? $stored['serviceG5'] : '' ?>" id="serviceG5" name="serviceG5" data-cell="AG5" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AF5*#c1!G5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI5']) ? $stored['serviceI5'] : '' ?>" id="serviceI5" name="serviceI5" data-cell="AI5" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AH5*#c1!G5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK5']) ? $stored['serviceK5'] : '' ?>" id="serviceK5" name="serviceK5" data-cell="AK5" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ5*#c1!G5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM5']) ? $stored['serviceM5'] : '' ?>" id="serviceM5" name="serviceM5" data-cell="AM5" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL5*#c1!G5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO5']) ? $stored['serviceO5'] : '' ?>" id="serviceO5" name="serviceO5" data-cell="AO5" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN5*#c1!G5" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB5']) ? $stored['serviceB5'] : '' ?>" id="serviceB5" name="serviceB5" data-cell="AB5" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD5']) ? $stored['serviceD5'] : '' ?>" id="serviceD5" name="serviceD5" data-cell="AD5" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF5']) ? $stored['serviceF5'] : '' ?>" id="serviceF5" name="serviceF5" data-cell="AF5" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH5']) ? $stored['serviceH5'] : '' ?>" id="serviceH5" name="serviceH5" data-cell="AH5" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ5']) ? $stored['serviceJ5'] : '' ?>" id="serviceJ5" name="serviceJ5" data-cell="AJ5" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL5']) ? $stored['serviceL5'] : '' ?>" id="serviceL5" name="serviceL5" data-cell="AL5" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN5']) ? $stored['serviceN5'] : '' ?>" id="serviceN5" name="serviceN5" data-cell="AN5" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ5" name="serviceZ5" data-cell="AZ5" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A5" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row6" class="d1_row" data-d1="6">
                                            <td><input value="<?= isset($stored['serviceA6']) ? $stored['serviceA6'] : '' ?>" id="serviceA6" name="serviceA6" data-cell="AA6" class="text-left btn-block" data-formula="#c1!B6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC6']) ? $stored['serviceC6'] : '' ?>" id="serviceC6" name="serviceC6" data-cell="AC6" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB6*#c1!G6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE6']) ? $stored['serviceE6'] : '' ?>" id="serviceE6" name="serviceE6" data-cell="AE6" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD6*#c1!G6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG6']) ? $stored['serviceG6'] : '' ?>" id="serviceG6" name="serviceG6" data-cell="AG6" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF6*#c1!G6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI6']) ? $stored['serviceI6'] : '' ?>" id="serviceI6" name="serviceI6" data-cell="AI6" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH6*#c1!G6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK6']) ? $stored['serviceK6'] : '' ?>" id="serviceK6" name="serviceK6" data-cell="AK6" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ6*#c1!G6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM6']) ? $stored['serviceM6'] : '' ?>" id="serviceM6" name="serviceM6" data-cell="AM6" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL6*#c1!G6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO6']) ? $stored['serviceO6'] : '' ?>" id="serviceO6" name="serviceO6" data-cell="AO6" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN6*#c1!G6" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB6']) ? $stored['serviceB6'] : '' ?>" id="serviceB6" name="serviceB6" data-cell="AB6" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD6']) ? $stored['serviceD6'] : '' ?>" id="serviceD6" name="serviceD6" data-cell="AD6" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF6']) ? $stored['serviceF6'] : '' ?>" id="serviceF6" name="serviceF6" data-cell="AF6" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH6']) ? $stored['serviceH6'] : '' ?>" id="serviceH6" name="serviceH6" data-cell="AH6" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ6']) ? $stored['serviceJ6'] : '' ?>" id="serviceJ6" name="serviceJ6" data-cell="AJ6" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL6']) ? $stored['serviceL6'] : '' ?>" id="serviceL6" name="serviceL6" data-cell="AL6" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN6']) ? $stored['serviceN6'] : '' ?>" id="serviceN6" name="serviceN6" data-cell="AN6" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ6" name="serviceZ6" data-cell="AZ6" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A6" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row7" class="d1_row" data-d1="7">
                                            <td><input value="<?= isset($stored['serviceA7']) ? $stored['serviceA7'] : '' ?>" id="serviceA7" name="serviceA7" data-cell="AA7" class="text-left btn-block" data-formula="#c1!B7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC7']) ? $stored['serviceC7'] : '' ?>" id="serviceC7" name="serviceC7" data-cell="AC7" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB7*#c1!G7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE7']) ? $stored['serviceE7'] : '' ?>" id="serviceE7" name="serviceE7" data-cell="AE7" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD7*#c1!G7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG7']) ? $stored['serviceG7'] : '' ?>" id="serviceG7" name="serviceG7" data-cell="AG7" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF7*#c1!G7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI7']) ? $stored['serviceI7'] : '' ?>" id="serviceI7" name="serviceI7" data-cell="AI7" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH7*#c1!G7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK7']) ? $stored['serviceK7'] : '' ?>" id="serviceK7" name="serviceK7" data-cell="AK7" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ7*#c1!G7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM7']) ? $stored['serviceM7'] : '' ?>" id="serviceM7" name="serviceM7" data-cell="AM7" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL7*#c1!G7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO7']) ? $stored['serviceO7'] : '' ?>" id="serviceO7" name="serviceO7" data-cell="AO7" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN7*#c1!G7" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB7']) ? $stored['serviceB7'] : '' ?>" id="serviceB7" name="serviceB7" data-cell="AB7" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD7']) ? $stored['serviceD7'] : '' ?>" id="serviceD7" name="serviceD7" data-cell="AD7" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF7']) ? $stored['serviceF7'] : '' ?>" id="serviceF7" name="serviceF7" data-cell="AF7" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH7']) ? $stored['serviceH7'] : '' ?>" id="serviceH7" name="serviceH7" data-cell="AH7" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ7']) ? $stored['serviceJ7'] : '' ?>" id="serviceJ7" name="serviceJ7" data-cell="AJ7" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL7']) ? $stored['serviceL7'] : '' ?>" id="serviceL7" name="serviceL7" data-cell="AL7" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN7']) ? $stored['serviceN7'] : '' ?>" id="serviceN7" name="serviceN7" data-cell="AN7" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ7" name="serviceZ7" data-cell="AZ7" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A7" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row8" class="d1_row" data-d1="8">
                                            <td><input value="<?= isset($stored['serviceA8']) ? $stored['serviceA8'] : '' ?>" id="serviceA8" name="serviceA8" data-cell="AA8" class="text-left btn-block" data-formula="#c1!B8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC8']) ? $stored['serviceC8'] : '' ?>" id="serviceC8" name="serviceC8" data-cell="AC8" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB8*#c1!G8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE8']) ? $stored['serviceE8'] : '' ?>" id="serviceE8" name="serviceE8" data-cell="AE8" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD8*#c1!G8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG8']) ? $stored['serviceG8'] : '' ?>" id="serviceG8" name="serviceG8" data-cell="AG8" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF8*#c1!G8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI8']) ? $stored['serviceI8'] : '' ?>" id="serviceI8" name="serviceI8" data-cell="AI8" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH8*#c1!G8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK8']) ? $stored['serviceK8'] : '' ?>" id="serviceK8" name="serviceK8" data-cell="AK8" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ8*#c1!G8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM8']) ? $stored['serviceM8'] : '' ?>" id="serviceM8" name="serviceM8" data-cell="AM8" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL8*#c1!G8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO8']) ? $stored['serviceO8'] : '' ?>" id="serviceO8" name="serviceO8" data-cell="AO8" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN8*#c1!G8" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB8']) ? $stored['serviceB8'] : '' ?>" id="serviceB8" name="serviceB8" data-cell="AB8" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD8']) ? $stored['serviceD8'] : '' ?>" id="serviceD8" name="serviceD8" data-cell="AD8" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF8']) ? $stored['serviceF8'] : '' ?>" id="serviceF8" name="serviceF8" data-cell="AF8" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH8']) ? $stored['serviceH8'] : '' ?>" id="serviceH8" name="serviceH8" data-cell="AH8" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ8']) ? $stored['serviceJ8'] : '' ?>" id="serviceJ8" name="serviceJ8" data-cell="AJ8" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL8']) ? $stored['serviceL8'] : '' ?>" id="serviceL8" name="serviceL8" data-cell="AL8" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN8']) ? $stored['serviceN8'] : '' ?>" id="serviceN8" name="serviceN8" data-cell="AN8" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ8" name="serviceZ8" data-cell="AZ8" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A8" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row9" class="d1_row" data-d1="9">
                                            <td><input value="<?= isset($stored['serviceA9']) ? $stored['serviceA9'] : '' ?>" id="serviceA9" name="serviceA9" data-cell="AA9" class="text-left btn-block" data-formula="#c1!B9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC9']) ? $stored['serviceC9'] : '' ?>" id="serviceC9" name="serviceC9" data-cell="AC9" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB9*#c1!G9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE9']) ? $stored['serviceE9'] : '' ?>" id="serviceE9" name="serviceE9" data-cell="AE9" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD9*#c1!G9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG9']) ? $stored['serviceG9'] : '' ?>" id="serviceG9" name="serviceG9" data-cell="AG9" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF9*#c1!G9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI9']) ? $stored['serviceI9'] : '' ?>" id="serviceI9" name="serviceI9" data-cell="AI9" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH9*#c1!G9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK9']) ? $stored['serviceK9'] : '' ?>" id="serviceK9" name="serviceK9" data-cell="AK9" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ9*#c1!G9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM9']) ? $stored['serviceM9'] : '' ?>" id="serviceM9" name="serviceM9" data-cell="AM9" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL9*#c1!G9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO9']) ? $stored['serviceO9'] : '' ?>" id="serviceO9" name="serviceO9" data-cell="AO9" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN9*#c1!G9" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB9']) ? $stored['serviceB9'] : '' ?>" id="serviceB9" name="serviceB9" data-cell="AB9" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD9']) ? $stored['serviceD9'] : '' ?>" id="serviceD9" name="serviceD9" data-cell="AD9" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF9']) ? $stored['serviceF9'] : '' ?>" id="serviceF9" name="serviceF9" data-cell="AF9" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH9']) ? $stored['serviceH9'] : '' ?>" id="serviceH9" name="serviceH9" data-cell="AH9" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ9']) ? $stored['serviceJ9'] : '' ?>" id="serviceJ9" name="serviceJ9" data-cell="AJ9" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL9']) ? $stored['serviceL9'] : '' ?>" id="serviceL9" name="serviceL9" data-cell="AL9" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN9']) ? $stored['serviceN9'] : '' ?>" id="serviceN9" name="serviceN9" data-cell="AN9" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ9" name="serviceZ9" data-cell="AZ9" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A9" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row10" class="d1_row" data-d1="10">
                                            <td><input value="<?= isset($stored['serviceA10']) ? $stored['serviceA10'] : '' ?>" id="serviceA10" name="serviceA10" data-cell="AA10" class="text-left btn-block" data-formula="#c1!B10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC10']) ? $stored['serviceC10'] : '' ?>" id="serviceC10" name="serviceC10" data-cell="AC10" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB10*#c1!G10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE10']) ? $stored['serviceE10'] : '' ?>" id="serviceE10" name="serviceE10" data-cell="AE10" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD10*#c1!G10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG10']) ? $stored['serviceG10'] : '' ?>" id="serviceG10" name="serviceG10" data-cell="AG10" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF10*#c1!G10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI10']) ? $stored['serviceI10'] : '' ?>" id="serviceI10" name="serviceI10" data-cell="AI10" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH10*#c1!G10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK10']) ? $stored['serviceK10'] : '' ?>" id="serviceK10" name="serviceK10" data-cell="AK10" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ10*#c1!G10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM10']) ? $stored['serviceM10'] : '' ?>" id="serviceM10" name="serviceM10" data-cell="AM10" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL10*#c1!G10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO10']) ? $stored['serviceO10'] : '' ?>" id="serviceO10" name="serviceO10" data-cell="AO10" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN10*#c1!G10" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB10']) ? $stored['serviceB10'] : '' ?>" id="serviceB10" name="serviceB10" data-cell="AB10" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD10']) ? $stored['serviceD10'] : '' ?>" id="serviceD10" name="serviceD10" data-cell="AD10" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF10']) ? $stored['serviceF10'] : '' ?>" id="serviceF10" name="serviceF10" data-cell="AF10" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH10']) ? $stored['serviceH10'] : '' ?>" id="serviceH10" name="serviceH10" data-cell="AH10" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ10']) ? $stored['serviceJ10'] : '' ?>" id="serviceJ10" name="serviceJ10" data-cell="AJ10" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL10']) ? $stored['serviceL10'] : '' ?>" id="serviceL10" name="serviceL10" data-cell="AL10" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN10']) ? $stored['serviceN10'] : '' ?>" id="serviceN10" name="serviceN10" data-cell="AN10" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ10" name="serviceZ10" data-cell="AZ10" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A10" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row11" class="d1_row" data-d1="11">
                                            <td><input value="<?= isset($stored['serviceA11']) ? $stored['serviceA11'] : '' ?>" id="serviceA11" name="serviceA11" data-cell="AA11" class="text-left btn-block" data-formula="#c1!B11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC11']) ? $stored['serviceC11'] : '' ?>" id="serviceC11" name="serviceC11" data-cell="AC11" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB11*#c1!G11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE11']) ? $stored['serviceE11'] : '' ?>" id="serviceE11" name="serviceE11" data-cell="AE11" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD11*#c1!G11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG11']) ? $stored['serviceG11'] : '' ?>" id="serviceG11" name="serviceG11" data-cell="AG11" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF11*#c1!G11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI11']) ? $stored['serviceI11'] : '' ?>" id="serviceI11" name="serviceI11" data-cell="AI11" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH11*#c1!G11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK11']) ? $stored['serviceK11'] : '' ?>" id="serviceK11" name="serviceK11" data-cell="AK11" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ11*#c1!G11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM11']) ? $stored['serviceM11'] : '' ?>" id="serviceM11" name="serviceM11" data-cell="AM11" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL11*#c1!G11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO11']) ? $stored['serviceO11'] : '' ?>" id="serviceO11" name="serviceO11" data-cell="AO11" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN11*#c1!G11" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB11']) ? $stored['serviceB11'] : '' ?>" id="serviceB11" name="serviceB11" data-cell="AB11" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD11']) ? $stored['serviceD11'] : '' ?>" id="serviceD11" name="serviceD11" data-cell="AD11" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF11']) ? $stored['serviceF11'] : '' ?>" id="serviceF11" name="serviceF11" data-cell="AF11" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH11']) ? $stored['serviceH11'] : '' ?>" id="serviceH11" name="serviceH11" data-cell="AH11" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ11']) ? $stored['serviceJ11'] : '' ?>" id="serviceJ11" name="serviceJ11" data-cell="AJ11" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL11']) ? $stored['serviceL11'] : '' ?>" id="serviceL11" name="serviceL11" data-cell="AL11" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN11']) ? $stored['serviceN11'] : '' ?>" id="serviceN11" name="serviceN11" data-cell="AN11" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ11" name="serviceZ11" data-cell="AZ11" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A11" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row12" class="d1_row" data-d1="12">
                                            <td><input value="<?= isset($stored['serviceA12']) ? $stored['serviceA12'] : '' ?>" id="serviceA12" name="serviceA12" data-cell="AA12" class="text-left btn-block" data-formula="#c1!B12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC12']) ? $stored['serviceC12'] : '' ?>" id="serviceC12" name="serviceC12" data-cell="AC12" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB12*#c1!G12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE12']) ? $stored['serviceE12'] : '' ?>" id="serviceE12" name="serviceE12" data-cell="AE12" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD12*#c1!G12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG12']) ? $stored['serviceG12'] : '' ?>" id="serviceG12" name="serviceG12" data-cell="AG12" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF12*#c1!G12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI12']) ? $stored['serviceI12'] : '' ?>" id="serviceI12" name="serviceI12" data-cell="AI12" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH12*#c1!G12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK12']) ? $stored['serviceK12'] : '' ?>" id="serviceK12" name="serviceK12" data-cell="AK12" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ12*#c1!G12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM12']) ? $stored['serviceM12'] : '' ?>" id="serviceM12" name="serviceM12" data-cell="AM12" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL12*#c1!G12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO12']) ? $stored['serviceO12'] : '' ?>" id="serviceO12" name="serviceO12" data-cell="AO12" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN12*#c1!G12" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB12']) ? $stored['serviceB12'] : '' ?>" id="serviceB12" name="serviceB12" data-cell="AB12" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD12']) ? $stored['serviceD12'] : '' ?>" id="serviceD12" name="serviceD12" data-cell="AD12" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF12']) ? $stored['serviceF12'] : '' ?>" id="serviceF12" name="serviceF12" data-cell="AF12" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH12']) ? $stored['serviceH12'] : '' ?>" id="serviceH12" name="serviceH12" data-cell="AH12" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ12']) ? $stored['serviceJ12'] : '' ?>" id="serviceJ12" name="serviceJ12" data-cell="AJ12" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL12']) ? $stored['serviceL12'] : '' ?>" id="serviceL12" name="serviceL12" data-cell="AL12" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN12']) ? $stored['serviceN12'] : '' ?>" id="serviceN12" name="serviceN12" data-cell="AN12" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ12" name="serviceZ12" data-cell="AZ12" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A12" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row13" class="d1_row" data-d1="13">
                                            <td><input value="<?= isset($stored['serviceA13']) ? $stored['serviceA13'] : '' ?>" id="serviceA13" name="serviceA13" data-cell="AA13" class="text-left btn-block" data-formula="#c1!B13" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC13']) ? $stored['serviceC13'] : '' ?>" id="serviceC13" name="serviceC13" data-cell="AC13" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB13*#c1!G13" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE13']) ? $stored['serviceE13'] : '' ?>" id="serviceE13" name="serviceE13" data-cell="AE13" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD13*#c1!G13" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG13']) ? $stored['serviceG13'] : '' ?>" id="serviceG13" name="serviceG13" data-cell="AG13" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF13*#c1!G13" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI13']) ? $stored['serviceI13'] : '' ?>" id="serviceI13" name="serviceI13" data-cell="AI13" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH13*#c1!G13" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK13']) ? $stored['serviceK13'] : '' ?>" id="serviceK13" name="serviceK13" data-cell="AK13" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ13*#c1!G13" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM13']) ? $stored['serviceM13'] : '' ?>" id="serviceM13" name="serviceM13" data-cell="AM13" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL13*#c1!G13" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO13']) ? $stored['serviceO13'] : '' ?>" id="serviceO13" name="serviceO13" data-cell="AO13" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN13*#c1!G13" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB13']) ? $stored['serviceB13'] : '' ?>" id="serviceB13" name="serviceB13" data-cell="AB13" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD13']) ? $stored['serviceD13'] : '' ?>" id="serviceD13" name="serviceD13" data-cell="AD13" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF13']) ? $stored['serviceF13'] : '' ?>" id="serviceF13" name="serviceF13" data-cell="AF13" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH13']) ? $stored['serviceH13'] : '' ?>" id="serviceH13" name="serviceH13" data-cell="AH13" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ13']) ? $stored['serviceJ13'] : '' ?>" id="serviceJ13" name="serviceJ13" data-cell="AJ13" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL13']) ? $stored['serviceL13'] : '' ?>" id="serviceL13" name="serviceL13" data-cell="AL13" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN13']) ? $stored['serviceN13'] : '' ?>" id="serviceN13" name="serviceN13" data-cell="AN13" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ13" name="serviceZ13" data-cell="AZ13" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A13" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row14" class="d1_row" data-d1="14">
                                            <td><input value="<?= isset($stored['serviceA14']) ? $stored['serviceA14'] : '' ?>" id="serviceA14" name="serviceA14" data-cell="AA14" class="text-left btn-block" data-formula="#c1!B14" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC14']) ? $stored['serviceC14'] : '' ?>" id="serviceC14" name="serviceC14" data-cell="AC14" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB14*#c1!G14" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE14']) ? $stored['serviceE14'] : '' ?>" id="serviceE14" name="serviceE14" data-cell="AE14" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD14*#c1!G14" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG14']) ? $stored['serviceG14'] : '' ?>" id="serviceG14" name="serviceG14" data-cell="AG14" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF14*#c1!G14" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI14']) ? $stored['serviceI14'] : '' ?>" id="serviceI14" name="serviceI14" data-cell="AI14" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH14*#c1!G14" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK14']) ? $stored['serviceK14'] : '' ?>" id="serviceK14" name="serviceK14" data-cell="AK14" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ14*#c1!G14" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM14']) ? $stored['serviceM14'] : '' ?>" id="serviceM14" name="serviceM14" data-cell="AM14" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL14*#c1!G14" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO14']) ? $stored['serviceO14'] : '' ?>" id="serviceO14" name="serviceO14" data-cell="AO14" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN14*#c1!G14" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB14']) ? $stored['serviceB14'] : '' ?>" id="serviceB14" name="serviceB14" data-cell="AB14" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD14']) ? $stored['serviceD14'] : '' ?>" id="serviceD14" name="serviceD14" data-cell="AD14" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF14']) ? $stored['serviceF14'] : '' ?>" id="serviceF14" name="serviceF14" data-cell="AF14" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH14']) ? $stored['serviceH14'] : '' ?>" id="serviceH14" name="serviceH14" data-cell="AH14" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ14']) ? $stored['serviceJ14'] : '' ?>" id="serviceJ14" name="serviceJ14" data-cell="AJ14" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL14']) ? $stored['serviceL14'] : '' ?>" id="serviceL14" name="serviceL14" data-cell="AL14" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN14']) ? $stored['serviceN14'] : '' ?>" id="serviceN14" name="serviceN14" data-cell="AN14" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ14" name="serviceZ14" data-cell="AZ14" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A14" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row15" class="d1_row" data-d1="15">
                                            <td><input value="<?= isset($stored['serviceA15']) ? $stored['serviceA15'] : '' ?>" id="serviceA15" name="serviceA15" data-cell="AA15" class="text-left btn-block" data-formula="#c1!B15" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC15']) ? $stored['serviceC15'] : '' ?>" id="serviceC15" name="serviceC15" data-cell="AC15" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB15*#c1!G15" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE15']) ? $stored['serviceE15'] : '' ?>" id="serviceE15" name="serviceE15" data-cell="AE15" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD15*#c1!G15" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG15']) ? $stored['serviceG15'] : '' ?>" id="serviceG15" name="serviceG15" data-cell="AG15" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF15*#c1!G15" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI15']) ? $stored['serviceI15'] : '' ?>" id="serviceI15" name="serviceI15" data-cell="AI15" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH15*#c1!G15" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK15']) ? $stored['serviceK15'] : '' ?>" id="serviceK15" name="serviceK15" data-cell="AK15" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ15*#c1!G15" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM15']) ? $stored['serviceM15'] : '' ?>" id="serviceM15" name="serviceM15" data-cell="AM15" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL15*#c1!G15" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO15']) ? $stored['serviceO15'] : '' ?>" id="serviceO15" name="serviceO15" data-cell="AO15" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN15*#c1!G15" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB15']) ? $stored['serviceB15'] : '' ?>" id="serviceB15" name="serviceB15" data-cell="AB15" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD15']) ? $stored['serviceD15'] : '' ?>" id="serviceD15" name="serviceD15" data-cell="AD15" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF15']) ? $stored['serviceF15'] : '' ?>" id="serviceF15" name="serviceF15" data-cell="AF15" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH15']) ? $stored['serviceH15'] : '' ?>" id="serviceH15" name="serviceH15" data-cell="AH15" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ15']) ? $stored['serviceJ15'] : '' ?>" id="serviceJ15" name="serviceJ15" data-cell="AJ15" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL15']) ? $stored['serviceL15'] : '' ?>" id="serviceL15" name="serviceL15" data-cell="AL15" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN15']) ? $stored['serviceN15'] : '' ?>" id="serviceN15" name="serviceN15" data-cell="AN15" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ15" name="serviceZ15" data-cell="AZ15" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A15" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row16" class="d1_row" data-d1="16">
                                            <td><input value="<?= isset($stored['serviceA16']) ? $stored['serviceA16'] : '' ?>" id="serviceA16" name="serviceA16" data-cell="AA16" class="text-left btn-block" data-formula="#c1!B16" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC16']) ? $stored['serviceC16'] : '' ?>" id="serviceC16" name="serviceC16" data-cell="AC16" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB16*#c1!G16" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE16']) ? $stored['serviceE16'] : '' ?>" id="serviceE16" name="serviceE16" data-cell="AE16" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD16*#c1!G16" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG16']) ? $stored['serviceG16'] : '' ?>" id="serviceG16" name="serviceG16" data-cell="AG16" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF16*#c1!G16" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI16']) ? $stored['serviceI16'] : '' ?>" id="serviceI16" name="serviceI16" data-cell="AI16" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH16*#c1!G16" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK16']) ? $stored['serviceK16'] : '' ?>" id="serviceK16" name="serviceK16" data-cell="AK16" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ16*#c1!G16" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM16']) ? $stored['serviceM16'] : '' ?>" id="serviceM16" name="serviceM16" data-cell="AM16" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL16*#c1!G16" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO16']) ? $stored['serviceO16'] : '' ?>" id="serviceO16" name="serviceO16" data-cell="AO16" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN16*#c1!G16" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB16']) ? $stored['serviceB16'] : '' ?>" id="serviceB16" name="serviceB16" data-cell="AB16" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD16']) ? $stored['serviceD16'] : '' ?>" id="serviceD16" name="serviceD16" data-cell="AD16" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF16']) ? $stored['serviceF16'] : '' ?>" id="serviceF16" name="serviceF16" data-cell="AF16" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH16']) ? $stored['serviceH16'] : '' ?>" id="serviceH16" name="serviceH16" data-cell="AH16" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ16']) ? $stored['serviceJ16'] : '' ?>" id="serviceJ16" name="serviceJ16" data-cell="AJ16" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL16']) ? $stored['serviceL16'] : '' ?>" id="serviceL16" name="serviceL16" data-cell="AL16" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN16']) ? $stored['serviceN16'] : '' ?>" id="serviceN16" name="serviceN16" data-cell="AN16" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ16" name="serviceZ16" data-cell="AZ16" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A16" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d1_row17" class="d1_row" data-d1="17">
                                            <td><input value="<?= isset($stored['serviceA17']) ? $stored['serviceA17'] : '' ?>" id="serviceA17" name="serviceA17" data-cell="AA17" class="text-left btn-block" data-formula="#c1!B17" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC17']) ? $stored['serviceC17'] : '' ?>" id="serviceC17" name="serviceC17" data-cell="AC17" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB17*#c1!G17" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE17']) ? $stored['serviceE17'] : '' ?>" id="serviceE17" name="serviceE17" data-cell="AE17" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD17*#c1!G17" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG17']) ? $stored['serviceG17'] : '' ?>" id="serviceG17" name="serviceG17" data-cell="AG17" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF17*#c1!G17" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI17']) ? $stored['serviceI17'] : '' ?>" id="serviceI17" name="serviceI17" data-cell="AI17" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH17*#c1!G17" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK17']) ? $stored['serviceK17'] : '' ?>" id="serviceK17" name="serviceK17" data-cell="AK17" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ17*#c1!G17" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM17']) ? $stored['serviceM17'] : '' ?>" id="serviceM17" name="serviceM17" data-cell="AM17" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL17*#c1!G17" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO17']) ? $stored['serviceO17'] : '' ?>" id="serviceO17" name="serviceO17" data-cell="AO17" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN17*#c1!G17" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB17']) ? $stored['serviceB17'] : '' ?>" id="serviceB17" name="serviceB17" data-cell="AB17" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD17']) ? $stored['serviceD17'] : '' ?>" id="serviceD17" name="serviceD17" data-cell="AD17" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF17']) ? $stored['serviceF17'] : '' ?>" id="serviceF17" name="serviceF17" data-cell="AF17" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH17']) ? $stored['serviceH17'] : '' ?>" id="serviceH17" name="serviceH17" data-cell="AH17" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ17']) ? $stored['serviceJ17'] : '' ?>" id="serviceJ17" name="serviceJ17" data-cell="AJ17" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL17']) ? $stored['serviceL17'] : '' ?>" id="serviceL17" name="serviceL17" data-cell="AL17" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN17']) ? $stored['serviceN17'] : '' ?>" id="serviceN17" name="serviceN17" data-cell="AN17" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ17" name="serviceZ17" data-cell="AZ17" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A17" type="hidden"></td>
                                        </tr>
                                                <?php if (isset($stored["addt_d1_list"])): foreach ($stored["addt_d1_list"] as $row): ?>
                                                <tr style="display: none;" id="d1_row<?= $row ?>" class="d1_row addt" data-d1="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["serviceA$row"]) ? $stored["serviceA$row"] : '' ?>" id="serviceA<?= $row ?>" name="serviceA<?= $row ?>" data-cell="AA<?= $row ?>" class="text-left btn-block" data-formula="#c1!B<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceC$row"]) ? $stored["serviceC$row"] : '' ?>" id="serviceC<?= $row ?>" name="serviceC<?= $row ?>" data-cell="AC<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB<?= $row ?>*#c1!G<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceE$row"]) ? $stored["serviceE$row"] : '' ?>" id="serviceE<?= $row ?>" name="serviceE<?= $row ?>" data-cell="AE<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD<?= $row ?>*#c1!G<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceG$row"]) ? $stored["serviceG$row"] : '' ?>" id="serviceG<?= $row ?>" name="serviceG<?= $row ?>" data-cell="AG<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF<?= $row ?>*#c1!G<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceI$row"]) ? $stored["serviceI$row"] : '' ?>" id="serviceI<?= $row ?>" name="serviceI<?= $row ?>" data-cell="AI<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH<?= $row ?>*#c1!G<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceK$row"]) ? $stored["serviceK$row"] : '' ?>" id="serviceK<?= $row ?>" name="serviceK<?= $row ?>" data-cell="AK<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ<?= $row ?>*#c1!G<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceM$row"]) ? $stored["serviceM$row"] : '' ?>" id="serviceM<?= $row ?>" name="serviceM<?= $row ?>" data-cell="AM<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL<?= $row ?>*#c1!G<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceO$row"]) ? $stored["serviceO$row"] : '' ?>" id="serviceO<?= $row ?>" name="serviceO<?= $row ?>" data-cell="AO<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN<?= $row ?>*#c1!G<?= $row ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceB$row"]) ? $stored["serviceB$row"] : '' ?>" id="serviceB<?= $row ?>" name="serviceB<?= $row ?>" data-cell="AB<?= $row ?>" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceD$row"]) ? $stored["serviceD$row"] : '' ?>" id="serviceD<?= $row ?>" name="serviceD<?= $row ?>" data-cell="AD<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceF$row"]) ? $stored["serviceF$row"] : '' ?>" id="serviceF<?= $row ?>" name="serviceF<?= $row ?>" data-cell="AF<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceH$row"]) ? $stored["serviceH$row"] : '' ?>" id="serviceH<?= $row ?>" name="serviceH<?= $row ?>" data-cell="AH<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceJ$row"]) ? $stored["serviceJ$row"] : '' ?>" id="serviceJ<?= $row ?>" name="serviceJ<?= $row ?>" data-cell="AJ<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceL$row"]) ? $stored["serviceL$row"] : '' ?>" id="serviceL<?= $row ?>" name="serviceL<?= $row ?>" data-cell="AL<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceN$row"]) ? $stored["serviceN$row"] : '' ?>" id="serviceN<?= $row ?>" name="serviceN<?= $row ?>" data-cell="AN<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td class="hidden"><input value="" id="serviceZ<?= $row ?>" name="serviceZ<?= $row ?>" data-cell="AZ<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A<?= $row ?>" type="hidden"></td>
                                                </tr>
    <?php endforeach;
endif;
?>

                                    </tbody>


                                    <tfoot id="d1_list2">
                                        <tr>
                                            <td colspan="8">&nbsp;</td>
                                        </tr>
                                        <tr style="display: none;" id="d2_row5" class="d2_row" data-d2="5">
                                            <td>
                                                <input id="count_d2" name="count_d2" data-cell="B1" data-formula="IF((#c2!B1=0),12,#c2!B1)" type="hidden">
                                                <input value="<?= isset($stored['serviceA105']) ? $stored['serviceA105'] : '' ?>" id="serviceA105" name="serviceA105" data-cell="AA105" class="text-left btn-block" data-formula="#c2!B5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC105']) ? $stored['serviceC105'] : '' ?>" id="serviceC105" name="serviceC105" data-cell="AC105" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AB105*#c2!H5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE105']) ? $stored['serviceE105'] : '' ?>" id="serviceE105" name="serviceE105" data-cell="AE105" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AD105*#c2!H5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG105']) ? $stored['serviceG105'] : '' ?>" id="serviceG105" name="serviceG105" data-cell="AG105" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AF105*#c2!H5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI105']) ? $stored['serviceI105'] : '' ?>" id="serviceI105" name="serviceI105" data-cell="AI105" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AH105*#c2!H5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK105']) ? $stored['serviceK105'] : '' ?>" id="serviceK105" name="serviceK105" data-cell="AK105" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ105*#c2!H5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM105']) ? $stored['serviceM105'] : '' ?>" id="serviceM105" name="serviceM105" data-cell="AM105" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL105*#c2!H5" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO105']) ? $stored['serviceO105'] : '' ?>" id="serviceO105" name="serviceO105" data-cell="AO105" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN105*#c2!H5" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB105']) ? $stored['serviceB105'] : '' ?>" id="serviceB105" name="serviceB105" data-cell="AB105" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD105']) ? $stored['serviceD105'] : '' ?>" id="serviceD105" name="serviceD105" data-cell="AD105" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF105']) ? $stored['serviceF105'] : '' ?>" id="serviceF105" name="serviceF105" data-cell="AF105" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH105']) ? $stored['serviceH105'] : '' ?>" id="serviceH105" name="serviceH105" data-cell="AH105" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ105']) ? $stored['serviceJ105'] : '' ?>" id="serviceJ105" name="serviceJ105" data-cell="AJ105" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL105']) ? $stored['serviceL105'] : '' ?>" id="serviceL105" name="serviceL105" data-cell="AL105" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN105']) ? $stored['serviceN105'] : '' ?>" id="serviceN105" name="serviceN105" data-cell="AN105" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ105" name="serviceZ105" data-cell="AZ105" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c2!A5" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d2_row6" class="d2_row" data-d2="6">
                                            <td><input value="<?= isset($stored['serviceA106']) ? $stored['serviceA106'] : '' ?>" id="serviceA106" name="serviceA106" data-cell="AA106" class="text-left btn-block" data-formula="#c2!B6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC106']) ? $stored['serviceC106'] : '' ?>" id="serviceC106" name="serviceC106" data-cell="AC106" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB106*#c2!H6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE106']) ? $stored['serviceE106'] : '' ?>" id="serviceE106" name="serviceE106" data-cell="AE106" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD106*#c2!H6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG106']) ? $stored['serviceG106'] : '' ?>" id="serviceG106" name="serviceG106" data-cell="AG106" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF106*#c2!H6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI106']) ? $stored['serviceI106'] : '' ?>" id="serviceI106" name="serviceI106" data-cell="AI106" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH106*#c2!H6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK106']) ? $stored['serviceK106'] : '' ?>" id="serviceK106" name="serviceK106" data-cell="AK106" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ106*#c2!H6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM106']) ? $stored['serviceM106'] : '' ?>" id="serviceM106" name="serviceM106" data-cell="AM106" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL106*#c2!H6" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO106']) ? $stored['serviceO106'] : '' ?>" id="serviceO106" name="serviceO106" data-cell="AO106" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN106*#c2!H6" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB106']) ? $stored['serviceB106'] : '' ?>" id="serviceB106" name="serviceB106" data-cell="AB106" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD106']) ? $stored['serviceD106'] : '' ?>" id="serviceD106" name="serviceD106" data-cell="AD106" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF106']) ? $stored['serviceF106'] : '' ?>" id="serviceF106" name="serviceF106" data-cell="AF106" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH106']) ? $stored['serviceH106'] : '' ?>" id="serviceH106" name="serviceH106" data-cell="AH106" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ106']) ? $stored['serviceJ106'] : '' ?>" id="serviceJ106" name="serviceJ106" data-cell="AJ106" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL106']) ? $stored['serviceL106'] : '' ?>" id="serviceL106" name="serviceL106" data-cell="AL106" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN106']) ? $stored['serviceN106'] : '' ?>" id="serviceN106" name="serviceN106" data-cell="AN106" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ106" name="serviceZ106" data-cell="AZ106" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c2!A6" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d2_row7" class="d2_row" data-d2="7">
                                            <td><input value="<?= isset($stored['serviceA107']) ? $stored['serviceA107'] : '' ?>" id="serviceA107" name="serviceA107" data-cell="AA107" class="text-left btn-block" data-formula="#c2!B7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC107']) ? $stored['serviceC107'] : '' ?>" id="serviceC107" name="serviceC107" data-cell="AC107" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB107*#c2!H7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE107']) ? $stored['serviceE107'] : '' ?>" id="serviceE107" name="serviceE107" data-cell="AE107" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD107*#c2!H7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG107']) ? $stored['serviceG107'] : '' ?>" id="serviceG107" name="serviceG107" data-cell="AG107" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF107*#c2!H7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI107']) ? $stored['serviceI107'] : '' ?>" id="serviceI107" name="serviceI107" data-cell="AI107" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH107*#c2!H7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK107']) ? $stored['serviceK107'] : '' ?>" id="serviceK107" name="serviceK107" data-cell="AK107" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ107*#c2!H7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM107']) ? $stored['serviceM107'] : '' ?>" id="serviceM107" name="serviceM107" data-cell="AM107" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL107*#c2!H7" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO107']) ? $stored['serviceO107'] : '' ?>" id="serviceO107" name="serviceO107" data-cell="AO107" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN107*#c2!H7" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB107']) ? $stored['serviceB107'] : '' ?>" id="serviceB107" name="serviceB107" data-cell="AB107" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD107']) ? $stored['serviceD107'] : '' ?>" id="serviceD107" name="serviceD107" data-cell="AD107" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF107']) ? $stored['serviceF107'] : '' ?>" id="serviceF107" name="serviceF107" data-cell="AF107" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH107']) ? $stored['serviceH107'] : '' ?>" id="serviceH107" name="serviceH107" data-cell="AH107" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ107']) ? $stored['serviceJ107'] : '' ?>" id="serviceJ107" name="serviceJ107" data-cell="AJ107" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL107']) ? $stored['serviceL107'] : '' ?>" id="serviceL107" name="serviceL107" data-cell="AL107" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN107']) ? $stored['serviceN107'] : '' ?>" id="serviceN107" name="serviceN107" data-cell="AN107" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ107" name="serviceZ107" data-cell="AZ107" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c2!A7" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d2_row8" class="d2_row" data-d2="8">
                                            <td><input value="<?= isset($stored['serviceA108']) ? $stored['serviceA108'] : '' ?>" id="serviceA108" name="serviceA108" data-cell="AA108" class="text-left btn-block" data-formula="#c2!B8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC108']) ? $stored['serviceC108'] : '' ?>" id="serviceC108" name="serviceC108" data-cell="AC108" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB108*#c2!H8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE108']) ? $stored['serviceE108'] : '' ?>" id="serviceE108" name="serviceE108" data-cell="AE108" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD108*#c2!H8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG108']) ? $stored['serviceG108'] : '' ?>" id="serviceG108" name="serviceG108" data-cell="AG108" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF108*#c2!H8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI108']) ? $stored['serviceI108'] : '' ?>" id="serviceI108" name="serviceI108" data-cell="AI108" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH108*#c2!H8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK108']) ? $stored['serviceK108'] : '' ?>" id="serviceK108" name="serviceK108" data-cell="AK108" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ108*#c2!H8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM108']) ? $stored['serviceM108'] : '' ?>" id="serviceM108" name="serviceM108" data-cell="AM108" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL108*#c2!H8" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO108']) ? $stored['serviceO108'] : '' ?>" id="serviceO108" name="serviceO108" data-cell="AO108" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN108*#c2!H8" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB108']) ? $stored['serviceB108'] : '' ?>" id="serviceB108" name="serviceB108" data-cell="AB108" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD108']) ? $stored['serviceD108'] : '' ?>" id="serviceD108" name="serviceD108" data-cell="AD108" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF108']) ? $stored['serviceF108'] : '' ?>" id="serviceF108" name="serviceF108" data-cell="AF108" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH108']) ? $stored['serviceH108'] : '' ?>" id="serviceH108" name="serviceH108" data-cell="AH108" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ108']) ? $stored['serviceJ108'] : '' ?>" id="serviceJ108" name="serviceJ108" data-cell="AJ108" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL108']) ? $stored['serviceL108'] : '' ?>" id="serviceL108" name="serviceL108" data-cell="AL108" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN108']) ? $stored['serviceN108'] : '' ?>" id="serviceN108" name="serviceN108" data-cell="AN108" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ108" name="serviceZ108" data-cell="AZ108" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c2!A8" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d2_row9" class="d2_row" data-d2="9">
                                            <td><input value="<?= isset($stored['serviceA109']) ? $stored['serviceA109'] : '' ?>" id="serviceA109" name="serviceA109" data-cell="AA109" class="text-left btn-block" data-formula="#c2!B9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC109']) ? $stored['serviceC109'] : '' ?>" id="serviceC109" name="serviceC109" data-cell="AC109" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB109*#c2!H9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE109']) ? $stored['serviceE109'] : '' ?>" id="serviceE109" name="serviceE109" data-cell="AE109" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD109*#c2!H9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG109']) ? $stored['serviceG109'] : '' ?>" id="serviceG109" name="serviceG109" data-cell="AG109" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF109*#c2!H9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI109']) ? $stored['serviceI109'] : '' ?>" id="serviceI109" name="serviceI109" data-cell="AI109" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH109*#c2!H9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK109']) ? $stored['serviceK109'] : '' ?>" id="serviceK109" name="serviceK109" data-cell="AK109" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ109*#c2!H9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM109']) ? $stored['serviceM109'] : '' ?>" id="serviceM109" name="serviceM109" data-cell="AM109" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL109*#c2!H9" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO109']) ? $stored['serviceO109'] : '' ?>" id="serviceO109" name="serviceO109" data-cell="AO109" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN109*#c2!H9" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB109']) ? $stored['serviceB109'] : '' ?>" id="serviceB109" name="serviceB109" data-cell="AB109" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD109']) ? $stored['serviceD109'] : '' ?>" id="serviceD109" name="serviceD109" data-cell="AD109" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF109']) ? $stored['serviceF109'] : '' ?>" id="serviceF109" name="serviceF109" data-cell="AF109" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH109']) ? $stored['serviceH109'] : '' ?>" id="serviceH109" name="serviceH109" data-cell="AH109" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ109']) ? $stored['serviceJ109'] : '' ?>" id="serviceJ109" name="serviceJ109" data-cell="AJ109" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL109']) ? $stored['serviceL109'] : '' ?>" id="serviceL109" name="serviceL109" data-cell="AL109" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN109']) ? $stored['serviceN109'] : '' ?>" id="serviceN109" name="serviceN109" data-cell="AN109" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ109" name="serviceZ109" data-cell="AZ109" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c2!A9" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d2_row10" class="d2_row" data-d2="service">
                                            <td><input value="<?= isset($stored['serviceA110']) ? $stored['serviceA110'] : '' ?>" id="serviceA110" name="serviceA110" data-cell="AA110" class="text-left btn-block" data-formula="#c2!B10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC110']) ? $stored['serviceC110'] : '' ?>" id="serviceC110" name="serviceC110" data-cell="AC110" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB110*#c2!H10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE110']) ? $stored['serviceE110'] : '' ?>" id="serviceE110" name="serviceE110" data-cell="AE110" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD110*#c2!H10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG110']) ? $stored['serviceG110'] : '' ?>" id="serviceG110" name="serviceG110" data-cell="AG110" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF110*#c2!H10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI110']) ? $stored['serviceI110'] : '' ?>" id="serviceI110" name="serviceI110" data-cell="AI110" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH110*#c2!H10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK110']) ? $stored['serviceK110'] : '' ?>" id="serviceK110" name="serviceK110" data-cell="AK110" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ110*#c2!H10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM110']) ? $stored['serviceM110'] : '' ?>" id="serviceM110" name="serviceM110" data-cell="AM110" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL110*#c2!H10" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO110']) ? $stored['serviceO110'] : '' ?>" id="serviceO110" name="serviceO110" data-cell="AO110" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN110*#c2!H10" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB110']) ? $stored['serviceB110'] : '' ?>" id="serviceB110" name="serviceB110" data-cell="AB110" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD110']) ? $stored['serviceD110'] : '' ?>" id="serviceD110" name="serviceD110" data-cell="AD110" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF110']) ? $stored['serviceF110'] : '' ?>" id="serviceF110" name="serviceF110" data-cell="AF110" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH110']) ? $stored['serviceH110'] : '' ?>" id="serviceH110" name="serviceH110" data-cell="AH110" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ110']) ? $stored['serviceJ110'] : '' ?>" id="serviceJ110" name="serviceJ110" data-cell="AJ110" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL110']) ? $stored['serviceL110'] : '' ?>" id="serviceL110" name="serviceL110" data-cell="AL110" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN110']) ? $stored['serviceN110'] : '' ?>" id="serviceN110" name="serviceN110" data-cell="AN110" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ110" name="serviceZ110" data-cell="AZ110" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c2!A10" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d2_row11" class="d2_row" data-d2="11">
                                            <td><input value="<?= isset($stored['serviceA111']) ? $stored['serviceA111'] : '' ?>" id="serviceA111" name="serviceA111" data-cell="AA111" class="text-left btn-block" data-formula="#c2!B11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC111']) ? $stored['serviceC111'] : '' ?>" id="serviceC111" name="serviceC111" data-cell="AC111" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB111*#c2!H11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE111']) ? $stored['serviceE111'] : '' ?>" id="serviceE111" name="serviceE111" data-cell="AE111" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD111*#c2!H11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG111']) ? $stored['serviceG111'] : '' ?>" id="serviceG111" name="serviceG111" data-cell="AG111" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF111*#c2!H11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI111']) ? $stored['serviceI111'] : '' ?>" id="serviceI111" name="serviceI111" data-cell="AI111" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH111*#c2!H11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK111']) ? $stored['serviceK111'] : '' ?>" id="serviceK111" name="serviceK111" data-cell="AK111" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ111*#c2!H11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM111']) ? $stored['serviceM111'] : '' ?>" id="serviceM111" name="serviceM111" data-cell="AM111" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL111*#c2!H11" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO111']) ? $stored['serviceO111'] : '' ?>" id="serviceO111" name="serviceO111" data-cell="AO111" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN111*#c2!H11" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB111']) ? $stored['serviceB111'] : '' ?>" id="serviceB111" name="serviceB111" data-cell="AB111" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD111']) ? $stored['serviceD111'] : '' ?>" id="serviceD111" name="serviceD111" data-cell="AD111" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF111']) ? $stored['serviceF111'] : '' ?>" id="serviceF111" name="serviceF111" data-cell="AF111" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH111']) ? $stored['serviceH111'] : '' ?>" id="serviceH111" name="serviceH111" data-cell="AH111" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ111']) ? $stored['serviceJ111'] : '' ?>" id="serviceJ111" name="serviceJ111" data-cell="AJ111" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL111']) ? $stored['serviceL111'] : '' ?>" id="serviceL111" name="serviceL111" data-cell="AL111" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN111']) ? $stored['serviceN111'] : '' ?>" id="serviceN111" name="serviceN111" data-cell="AN111" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ111" name="serviceZ111" data-cell="AZ111" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c2!A11" type="hidden"></td>
                                        </tr>
                                        <tr style="display: none;" id="d2_row12" class="d2_row" data-d2="12">
                                            <td><input value="<?= isset($stored['serviceA112']) ? $stored['serviceA112'] : '' ?>" id="serviceA112" name="serviceA112" data-cell="AA112" class="text-left btn-block" data-formula="#c2!B12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceC112']) ? $stored['serviceC112'] : '' ?>" id="serviceC112" name="serviceC112" data-cell="AC112" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB112*#c2!H12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceE112']) ? $stored['serviceE112'] : '' ?>" id="serviceE112" name="serviceE112" data-cell="AE112" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD112*#c2!H12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceG112']) ? $stored['serviceG112'] : '' ?>" id="serviceG112" name="serviceG112" data-cell="AG112" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF112*#c2!H12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceI112']) ? $stored['serviceI112'] : '' ?>" id="serviceI112" name="serviceI112" data-cell="AI112" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH112*#c2!H12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceK112']) ? $stored['serviceK112'] : '' ?>" id="serviceK112" name="serviceK112" data-cell="AK112" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ112*#c2!H12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceM112']) ? $stored['serviceM112'] : '' ?>" id="serviceM112" name="serviceM112" data-cell="AM112" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL112*#c2!H12" type="text"></td>
                                            <td class="hidden"><input value="<?= isset($stored['serviceO112']) ? $stored['serviceO112'] : '' ?>" id="serviceO112" name="serviceO112" data-cell="AO112" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN112*#c2!H12" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceB112']) ? $stored['serviceB112'] : '' ?>" id="serviceB112" name="serviceB112" data-cell="AB112" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceD112']) ? $stored['serviceD112'] : '' ?>" id="serviceD112" name="serviceD112" data-cell="AD112" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceF112']) ? $stored['serviceF112'] : '' ?>" id="serviceF112" name="serviceF112" data-cell="AF112" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceH112']) ? $stored['serviceH112'] : '' ?>" id="serviceH112" name="serviceH112" data-cell="AH112" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceJ112']) ? $stored['serviceJ112'] : '' ?>" id="serviceJ112" name="serviceJ112" data-cell="AJ112" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceL112']) ? $stored['serviceL112'] : '' ?>" id="serviceL112" name="serviceL112" data-cell="AL112" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td><input value="<?= isset($stored['serviceN112']) ? $stored['serviceN112'] : '' ?>" id="serviceN112" name="serviceN112" data-cell="AN112" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                            <td class="hidden"><input value="" id="serviceZ112" name="serviceZ112" data-cell="AZ112" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c2!A12" type="hidden"></td>
                                        </tr>
<?php if (isset($stored["addt_d1_list2"])): foreach ($stored["addt_d1_list2"] as $row): ?><??>
                                                <tr style="display: none;" id="d2_row<?= $row ?>" class="d2_row addt" data-d2="<?= $row ?>">
                                                    <td><input value="<?= isset($stored["serviceA1$row"]) ? $stored["serviceA1$row"] : '' ?>" id="serviceA1<?= $row ?>" name="serviceA1<?= $row ?>" data-cell="AA1<?= $row ?>" class="text-left btn-block" data-formula="#c2!B<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceC1$row"]) ? $stored["serviceC1$row"] : '' ?>" id="serviceC1<?= $row ?>" name="serviceC1<?= $row ?>" data-cell="AC1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB1<?= $row ?>*#c2!H<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceE1$row"]) ? $stored["serviceE1$row"] : '' ?>" id="serviceE1<?= $row ?>" name="serviceE1<?= $row ?>" data-cell="AE1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD1<?= $row ?>*#c2!H<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceG1$row"]) ? $stored["serviceG1$row"] : '' ?>" id="serviceG1<?= $row ?>" name="serviceG1<?= $row ?>" data-cell="AG1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF1<?= $row ?>*#c2!H<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceI1$row"]) ? $stored["serviceI1$row"] : '' ?>" id="serviceI1<?= $row ?>" name="serviceI1<?= $row ?>" data-cell="AI1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH1<?= $row ?>*#c2!H<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceK1$row"]) ? $stored["serviceK1$row"] : '' ?>" id="serviceK1<?= $row ?>" name="serviceK1<?= $row ?>" data-cell="AK1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ1<?= $row ?>*#c2!H<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceM1$row"]) ? $stored["serviceM1$row"] : '' ?>" id="serviceM1<?= $row ?>" name="serviceM1<?= $row ?>" data-cell="AM1<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AL1<?= $row ?>*#c2!H<?= $row ?>" type="text"></td>
                                                    <td class="hidden"><input value="<?= isset($stored["serviceO1$row"]) ? $stored["serviceO1$row"] : '' ?>" id="serviceO1<?= $row ?>" name="serviceO1<?= $row ?>" data-cell="AO1<?= $row ?>" class="text-right input_cell btn-block" data-format="0,0[.]0000" data-formula="AN1<?= $row ?>*#c2!H<?= $row ?>" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceB1$row"]) ? $stored["serviceB1$row"] : '' ?>" id="serviceB1<?= $row ?>" name="serviceB1<?= $row ?>" data-cell="AB1<?= $row ?>" class="input_cell text-center btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceD1$row"]) ? $stored["serviceD1$row"] : '' ?>" id="serviceD1<?= $row ?>" name="serviceD1<?= $row ?>" data-cell="AD1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceF1$row"]) ? $stored["serviceF1$row"] : '' ?>" id="serviceF1<?= $row ?>" name="serviceF1<?= $row ?>" data-cell="AF1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceH1$row"]) ? $stored["serviceH1$row"] : '' ?>" id="serviceH1<?= $row ?>" name="serviceH1<?= $row ?>" data-cell="AH1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceJ1$row"]) ? $stored["serviceJ1$row"] : '' ?>" id="serviceJ1<?= $row ?>" name="serviceJ1<?= $row ?>" data-cell="AJ1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceL1$row"]) ? $stored["serviceL1$row"] : '' ?>" id="serviceL1<?= $row ?>" name="serviceL1<?= $row ?>" data-cell="AL1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td><input value="<?= isset($stored["serviceN1$row"]) ? $stored["serviceN1$row"] : '' ?>" id="serviceN1<?= $row ?>" name="serviceN1<?= $row ?>" data-cell="AN1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" type="text"></td>
                                                    <td class="hidden"><input value="" id="serviceZ1<?= $row ?>" name="serviceZ1<?= $row ?>" data-cell="AZ1<?= $row ?>" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c2!A<?= $row ?>" type="hidden"></td>
                                                </tr>
    <?php endforeach;
endif;
?>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>

    <div id="final_tab" class="tab-pane">
        <form data-calx-identifier="CALX1420024221215" class="form-horizontal" action="result.php" method="post" role="form" id="final" target="_blank">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-offset-8 col-sm-4 text-right">
                            <label for="" class="col-sm-8"><h3 style="margin:0px">Get Your Result :</h3></label>
                            <div class="col-sm-4">
                                
                             <!--   <button id="pdf-final" type="button" class="btn btn-pdf" style="background:transparent;padding:2px;" data-toggle="tooltip" data-placement="left" title="Download PDF">
                                    <img src="<?= base_url('asset/css/images/pdf.ico') ?>" style="width:30px;">
                                </button> -->
                                <button id="print-final" type="button" class="btn btn-print" style="background:transparent;padding:2px;" data-toggle="tooltip" data-placement="left" title="Print as HTML Page">
                                    <img src="<?= base_url('asset/css/images/printer.ico') ?>" style="width:30px;">
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Fee Schedule</h3>
                            <h5>Now you've been through the process and defined your minimum fees for both your initial engagement and ongoing fees. It works like this:</h5>
                            <input value="31/12/2014" id="date" name="date" data-cell="Z1" data-formula="DATEFORMAT(TODAY(), 'DD/MM/YYYY')" type="hidden">
                            <input id="count_final" name="count_final" data-cell="Z11" data-formula="IF((#b3!B1=0),28,#b3!B1)" type="hidden">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label style="vertical-align:middle;">For Engagement fees</label>
                        </div>
                        <div class="col-sm-8">
                            <p class="text-justify bold">Then add to this base fee any adjustments that may need to be made based on the strategy requirements of the client</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label style="vertical-align:middle;">For Ongoing Fees</label>
                        </div>
                        <div class="col-sm-8">
                            <p class="text-justify bold">start by identifying the service package most appropriate to the client. Then add to this base fee any adjustments that may need to be made based on the strategic areas you're managing on behalf of the client during the yeer</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-justify bold">Finally, remember these are just your minumums. You will need to make a decision of the value of the advice you're providing when setting a fee. However, these do give you the guidance of knowing the dollar point at which you're pricing model is adhering to profit targets, regardless of the fee mechanism (e.g. asset based, fee for service, performance fee) you're employing.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box space">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="top">Engagement fee schedule</h3>
                                        <label for="">Your minimum fees for engaging new clients is:</label>

                                        <div class="form-group">
                                            <label for="" class="col-sm-8">For holistic advice (inclusive of GST)</label>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB9']) ? $stored['finalB9'] : '' ?>" id="finalB9" name="finalB9" data-cell="B9" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b1!F122*1.1" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-8">For transactional advice (inclusive of GST)</label>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB10']) ? $stored['finalB10'] : '' ?>" id="finalB10" name="finalB10" data-cell="B10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b2!F122*1.1" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row top">
                                    <div id="final_list1" class="col-sm-12">
                                        <label for="">Strategic advice (to be added to the minimums above, inclusive of GST)</label>

                                        <div style="display: none;" id="finalb5" data-f1="13" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA13']) ? $stored['finalA13'] : '' ?>" id="finalA13" name="finalA13" data-cell="A13" class="formula_cell btn-block" data-formula="#b3!B5" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB13']) ? $stored['finalB13'] : '' ?>" id="finalB13" name="finalB13" data-cell="B13" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G5*1.1" type="text">
                                                <input value="" id="finalC13" name="finalC13" data-cell="C13" class="formula_cell btn-block" data-formula="#b3!A5" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb6" data-f1="14" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA14']) ? $stored['finalA14'] : '' ?>" id="finalA14" name="finalA14" data-cell="A14" class="formula_cell btn-block" data-formula="#b3!B6" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB14']) ? $stored['finalB14'] : '' ?>" id="finalB14" name="finalB14" data-cell="B14" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G6*1.1" type="text">
                                                <input value="" id="finalC14" name="finalC14" data-cell="C14" class="formula_cell btn-block" data-formula="#b3!A6" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb7" data-f1="15" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA15']) ? $stored['finalA15'] : '' ?>" id="finalA15" name="finalA15" data-cell="A15" class="formula_cell btn-block" data-formula="#b3!B7" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB15']) ? $stored['finalB15'] : '' ?>" id="finalB15" name="finalB15" data-cell="B15" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G7*1.1" type="text">
                                                <input value="" id="finalC15" name="finalC15" data-cell="C15" class="formula_cell btn-block" data-formula="#b3!A7" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb8" data-f1="16" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA16']) ? $stored['finalA16'] : '' ?>" id="finalA16" name="finalA16" data-cell="A16" class="formula_cell btn-block" data-formula="#b3!B8" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB16']) ? $stored['finalB16'] : '' ?>" id="finalB16" name="finalB16" data-cell="B16" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G8*1.1" type="text">
                                                <input value="" id="finalC16" name="finalC16" data-cell="C16" class="formula_cell btn-block" data-formula="#b3!A8" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb9" data-f1="17" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA17']) ? $stored['finalA17'] : '' ?>" id="finalA17" name="finalA17" data-cell="A17" class="formula_cell btn-block" data-formula="#b3!B9" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB17']) ? $stored['finalB17'] : '' ?>" id="finalB17" name="finalB17" data-cell="B17" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G9*1.1" type="text">
                                                <input value="" id="finalC17" name="finalC17" data-cell="C17" class="formula_cell btn-block" data-formula="#b3!A9" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb10" data-f1="18" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA18']) ? $stored['finalA18'] : '' ?>" id="finalA18" name="finalA18" data-cell="A18" class="formula_cell btn-block" data-formula="#b3!B10" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB18']) ? $stored['finalB18'] : '' ?>" id="finalB18" name="finalB18" data-cell="B18" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G10*1.1" type="text">
                                                <input value="" id="finalC18" name="finalC18" data-cell="C18" class="formula_cell btn-block" data-formula="#b3!A10" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb11" data-f1="19" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA19']) ? $stored['finalA19'] : '' ?>" id="finalA19" name="finalA19" data-cell="A19" class="formula_cell btn-block" data-formula="#b3!B11" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB19']) ? $stored['finalB19'] : '' ?>" id="finalB19" name="finalB19" data-cell="B19" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G11*1.1" type="text">
                                                <input value="" id="finalC19" name="finalC19" data-cell="C19" class="formula_cell btn-block" data-formula="#b3!A11" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb12" data-f1="20" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA20']) ? $stored['finalA20'] : '' ?>" id="finalA20" name="finalA20" data-cell="A20" class="formula_cell btn-block" data-formula="#b3!B12" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB20']) ? $stored['finalB20'] : '' ?>" id="finalB20" name="finalB20" data-cell="B20" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G12*1.1" type="text">
                                                <input value="" id="finalC20" name="finalC20" data-cell="C20" class="formula_cell btn-block" data-formula="#b3!A12" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb13" data-f1="21" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA21']) ? $stored['finalA21'] : '' ?>" id="finalA21" name="finalA21" data-cell="A21" class="formula_cell btn-block" data-formula="#b3!B13" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB21']) ? $stored['finalB21'] : '' ?>" id="finalB21" name="finalB21" data-cell="B21" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G13*1.1" type="text">
                                                <input value="" id="finalC21" name="finalC21" data-cell="C21" class="formula_cell btn-block" data-formula="#b3!A13" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb14" data-f1="22" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA22']) ? $stored['finalA22'] : '' ?>" id="finalA22" name="finalA22" data-cell="A22" class="formula_cell btn-block" data-formula="#b3!B14" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB22']) ? $stored['finalB22'] : '' ?>" id="finalB22" name="finalB22" data-cell="B22" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G14*1.1" type="text">
                                                <input value="" id="finalC22" name="finalC22" data-cell="C22" class="formula_cell btn-block" data-formula="#b3!A14" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb15" data-f1="23" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA23']) ? $stored['finalA23'] : '' ?>" id="finalA23" name="finalA23" data-cell="A23" class="formula_cell btn-block" data-formula="#b3!B15" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB23']) ? $stored['finalB23'] : '' ?>" id="finalB23" name="finalB23" data-cell="B23" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G15*1.1" type="text">
                                                <input value="" id="finalC23" name="finalC23" data-cell="C23" class="formula_cell btn-block" data-formula="#b3!A15" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb16" data-f1="24" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA24']) ? $stored['finalA24'] : '' ?>" id="finalA24" name="finalA24" data-cell="A24" class="formula_cell btn-block" data-formula="#b3!B16" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB24']) ? $stored['finalB24'] : '' ?>" id="finalB24" name="finalB24" data-cell="B24" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G16*1.1" type="text">
                                                <input value="" id="finalC24" name="finalC24" data-cell="C24" class="formula_cell btn-block" data-formula="#b3!A16" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb17" data-f1="25" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA25']) ? $stored['finalA25'] : '' ?>" id="finalA25" name="finalA25" data-cell="A25" class="formula_cell btn-block" data-formula="#b3!B17" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB25']) ? $stored['finalB25'] : '' ?>" id="finalB25" name="finalB25" data-cell="B25" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G17*1.1" type="text">
                                                <input value="" id="finalC25" name="finalC25" data-cell="C25" class="formula_cell btn-block" data-formula="#b3!A17" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb18" data-f1="26" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA26']) ? $stored['finalA26'] : '' ?>" id="finalA26" name="finalA26" data-cell="A26" class="formula_cell btn-block" data-formula="#b3!B18" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB26']) ? $stored['finalB26'] : '' ?>" id="finalB26" name="finalB26" data-cell="B26" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G18*1.1" type="text">
                                                <input value="" id="finalC26" name="finalC26" data-cell="C26" class="formula_cell btn-block" data-formula="#b3!A18" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb19" data-f1="27" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA27']) ? $stored['finalA27'] : '' ?>" id="finalA27" name="finalA27" data-cell="A27" class="formula_cell btn-block" data-formula="#b3!B19" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB27']) ? $stored['finalB27'] : '' ?>" id="finalB27" name="finalB27" data-cell="B27" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G19*1.1" type="text">
                                                <input value="" id="finalC27" name="finalC27" data-cell="C27" class="formula_cell btn-block" data-formula="#b3!A19" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalb20" data-f1="28" class="b3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalA28']) ? $stored['finalA28'] : '' ?>" id="finalA28" name="finalA28" data-cell="A28" class="formula_cell btn-block" data-formula="#b3!B20" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalB28']) ? $stored['finalB28'] : '' ?>" id="finalB28" name="finalB28" data-cell="B28" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G20*1.1" type="text">
                                                <input value="" id="finalC28" name="finalC28" data-cell="C28" class="formula_cell btn-block" data-formula="#b3!A20" type="hidden">
                                            </div>
                                        </div>

                                        <?php if (isset($stored["addt_final_list1"])): $b3_list_index = 0;
                                            foreach ($stored["addt_final_list1"] as $row):
                                                ?><??>
                                                <div id="finalb<?= $stored['addt_b3_list'][$b3_list_index] ?>" class="b3_final form-group addt" data-f1="<?= $row ?>"> 
                                                    <div class="col-sm-8"> 
                                                        <input type="text" id="finalA<?= $row ?>" name="finalA<?= $row ?>" data-cell="A<?= $row ?>" class="formula_cell btn-block" data-formula="#b3!B<?= $stored['addt_b3_list'][$b3_list_index] ?>"/> 
                                                    </div> 
                                                    <div class="col-sm-4"> 
                                                        <input type="text" id="finalB<?= $row ?>" name="finalB<?= $row ?>" data-cell="B<?= $row ?>" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G<?= $stored['addt_b3_list'][$b3_list_index] ?>*1.1"/> 
                                                        <input type="hidden" id="finalC<?= $row ?>" name="finalC<?= $row ?>" data-cell="C<?= $row ?>" class="formula_cell btn-block" data-formula="#b3!A<?= $stored['addt_b3_list'][$b3_list_index] ?>"/> 
                                                    </div> 
                                                </div>
                                        <?php $b3_list_index++; endforeach;
                                            endif;
                                        ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="box space">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="top">Ongoing fee schedule</h3>
                                        <label for="">Your minimum fees for each service package (incl of GST) are as follows</label>

                                        <div class="row">

                                            <div class="">
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalE9']) ? $stored['finalE9'] : '' ?>" id="finalE9" name="finalE9" data-cell="E9" class="formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AA3" type="text">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalE10']) ? $stored['finalE10'] : '' ?>" id="finalE10" name="finalE10" data-cell="E10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AB4*1.1" type="text">
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalF9']) ? $stored['finalF9'] : '' ?>" id="finalF9" name="finalF9" data-cell="F9" class="formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AB3" type="text">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalF10']) ? $stored['finalF10'] : '' ?>" id="finalF10" name="finalF10" data-cell="F10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AD4*1.1" type="text">
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalG9']) ? $stored['finalG9'] : '' ?>" id="finalG9" name="finalG9" data-cell="G9" class="formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AC3" type="text">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalG10']) ? $stored['finalG10'] : '' ?>" id="finalG10" name="finalG10" data-cell="G10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AF4*1.1" type="text">
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalH9']) ? $stored['finalH9'] : '' ?>" id="finalH9" name="finalH9" data-cell="H9" class="formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AD3" type="text">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalH10']) ? $stored['finalH10'] : '' ?>" id="finalH10" name="finalH10" data-cell="H10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AH4*1.1" type="text">
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalI9']) ? $stored['finalI9'] : '' ?>" id="finalI9" name="finalI9" data-cell="I9" class="formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AE3" type="text">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalI10']) ? $stored['finalI10'] : '' ?>" id="finalI10" name="finalI10" data-cell="I10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AJ4*1.1" type="text">
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalJ9']) ? $stored['finalJ9'] : '' ?>" id="finalJ9" name="finalJ9" data-cell="J9" class="formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AF3" type="text">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalJ10']) ? $stored['finalJ10'] : '' ?>" id="finalJ10" name="finalJ10" data-cell="J10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AL4*1.1" type="text">
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalK9']) ? $stored['finalK9'] : '' ?>" id="finalK9" name="finalK9" data-cell="K9" class="formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AG3" type="text">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input value="<?= isset($stored['finalK10']) ? $stored['finalK10'] : '' ?>" id="finalK10" name="finalK10" data-cell="K10" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#d1!AN4*1.1" type="text">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row top">
                                    <div id="final_list2" class="col-sm-12">
                                        <label for="">Strategic advice (to be added to the minimums above, inclusive of GST)</label>
                                        <input id="count_final2" name="count_final2" data-cell="Z12" data-formula="IF((#c3!B1=0),28,#c3!B1)" type="hidden">

                                        <div style="display: none;" id="finalc5" data-f2="13" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE13']) ? $stored['finalE13'] : '' ?>" id="finalE13" name="finalE13" data-cell="E13" class="formula_cell btn-block" data-formula="#c3!B5" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG13']) ? $stored['finalG13'] : '' ?>" id="finalG13" name="finalG13" data-cell="G13" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G5*1.1" type="text">
                                                <input value="" id="finalT13" name="finalT13" data-cell="T13" class="formula_cell btn-block" data-formula="#c3!A5" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc6" data-f2="14" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE14']) ? $stored['finalE14'] : '' ?>" id="finalE14" name="finalE14" data-cell="E14" class="formula_cell btn-block" data-formula="#c3!B6" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG14']) ? $stored['finalG14'] : '' ?>" id="finalG14" name="finalG14" data-cell="G14" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G6*1.1" type="text">
                                                <input value="" id="finalT14" name="finalT14" data-cell="T14" class="formula_cell btn-block" data-formula="#c3!A6" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc7" data-f2="15" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE15']) ? $stored['finalE15'] : '' ?>" id="finalE15" name="finalE15" data-cell="E15" class="formula_cell btn-block" data-formula="#c3!B7" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG15']) ? $stored['finalG15'] : '' ?>" id="finalG15" name="finalG15" data-cell="G15" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G7*1.1" type="text">
                                                <input value="" id="finalT15" name="finalT15" data-cell="T15" class="formula_cell btn-block" data-formula="#c3!A7" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc8" data-f2="16" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE16']) ? $stored['finalE16'] : '' ?>" id="finalE16" name="finalE16" data-cell="E16" class="formula_cell btn-block" data-formula="#c3!B8" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG16']) ? $stored['finalG16'] : '' ?>" id="finalG16" name="finalG16" data-cell="G16" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G8*1.1" type="text">
                                                <input value="" id="finalT16" name="finalT16" data-cell="T16" class="formula_cell btn-block" data-formula="#c3!A8" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc9" data-f2="17" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE17']) ? $stored['finalE17'] : '' ?>" id="finalE17" name="finalE17" data-cell="E17" class="formula_cell btn-block" data-formula="#c3!B9" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG17']) ? $stored['finalG17'] : '' ?>" id="finalG17" name="finalG17" data-cell="G17" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G9*1.1" type="text">
                                                <input value="" id="finalT17" name="finalT17" data-cell="T17" class="formula_cell btn-block" data-formula="#c3!A9" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc10" data-f2="18" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE18']) ? $stored['finalE18'] : '' ?>" id="finalE18" name="finalE18" data-cell="E18" class="formula_cell btn-block" data-formula="#c3!B10" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG18']) ? $stored['finalG18'] : '' ?>" id="finalG18" name="finalG18" data-cell="G18" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G10*1.1" type="text">
                                                <input value="" id="finalT18" name="finalT18" data-cell="T18" class="formula_cell btn-block" data-formula="#c3!A10" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc11" data-f2="19" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE19']) ? $stored['finalE19'] : '' ?>" id="finalE19" name="finalE19" data-cell="E19" class="formula_cell btn-block" data-formula="#c3!B11" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG19']) ? $stored['finalG19'] : '' ?>" id="finalG19" name="finalG19" data-cell="G19" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G11*1.1" type="text">
                                                <input value="" id="finalT19" name="finalT19" data-cell="T19" class="formula_cell btn-block" data-formula="#c3!A11" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc12" data-f2="20" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE20']) ? $stored['finalE20'] : '' ?>" id="finalE20" name="finalE20" data-cell="E20" class="formula_cell btn-block" data-formula="#c3!B12" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG20']) ? $stored['finalG20'] : '' ?>" id="finalG20" name="finalG20" data-cell="G20" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G12*1.1" type="text">
                                                <input value="" id="finalT20" name="finalT20" data-cell="T20" class="formula_cell btn-block" data-formula="#c3!A12" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc13" data-f2="21" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE21']) ? $stored['finalE21'] : '' ?>" id="finalE21" name="finalE21" data-cell="E21" class="formula_cell btn-block" data-formula="#c3!B13" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG21']) ? $stored['finalG21'] : '' ?>" id="finalG21" name="finalG21" data-cell="G21" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G13*1.1" type="text">
                                                <input value="" id="finalT21" name="finalT21" data-cell="T21" class="formula_cell btn-block" data-formula="#c3!A13" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc14" data-f2="22" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE22']) ? $stored['finalE22'] : '' ?>" id="finalE22" name="finalE22" data-cell="E22" class="formula_cell btn-block" data-formula="#c3!B14" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG22']) ? $stored['finalG22'] : '' ?>" id="finalG22" name="finalG22" data-cell="G22" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G14*1.1" type="text">
                                                <input value="" id="finalT22" name="finalT22" data-cell="T22" class="formula_cell btn-block" data-formula="#c3!A14" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc15" data-f2="23" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE23']) ? $stored['finalE23'] : '' ?>" id="finalE23" name="finalE23" data-cell="E23" class="formula_cell btn-block" data-formula="#c3!B15" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG23']) ? $stored['finalG23'] : '' ?>" id="finalG23" name="finalG23" data-cell="G23" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G15*1.1" type="text">
                                                <input value="" id="finalT23" name="finalT23" data-cell="T23" class="formula_cell btn-block" data-formula="#c3!A15" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc16" data-f2="24" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE24']) ? $stored['finalE24'] : '' ?>" id="finalE24" name="finalE24" data-cell="E24" class="formula_cell btn-block" data-formula="#c3!B16" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG24']) ? $stored['finalG24'] : '' ?>" id="finalG24" name="finalG24" data-cell="G24" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G16*1.1" type="text">
                                                <input value="" id="finalT24" name="finalT24" data-cell="T24" class="formula_cell btn-block" data-formula="#c3!A16" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc17" data-f2="25" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE25']) ? $stored['finalE25'] : '' ?>" id="finalE25" name="finalE25" data-cell="E25" class="formula_cell btn-block" data-formula="#c3!B17" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG25']) ? $stored['finalG25'] : '' ?>" id="finalG25" name="finalG25" data-cell="G25" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G17*1.1" type="text">
                                                <input value="" id="finalT25" name="finalT25" data-cell="T25" class="formula_cell btn-block" data-formula="#c3!A17" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc18" data-f2="26" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE26']) ? $stored['finalE26'] : '' ?>" id="finalE26" name="finalE26" data-cell="E26" class="formula_cell btn-block" data-formula="#c3!B18" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG26']) ? $stored['finalG26'] : '' ?>" id="finalG26" name="finalG26" data-cell="G26" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G18*1.1" type="text">
                                                <input value="" id="finalT26" name="finalT26" data-cell="T26" class="formula_cell btn-block" data-formula="#c3!A18" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc19" data-f2="27" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE27']) ? $stored['finalE27'] : '' ?>" id="finalE27" name="finalE27" data-cell="E27" class="formula_cell btn-block" data-formula="#c3!B19" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG27']) ? $stored['finalG27'] : '' ?>" id="finalG27" name="finalG27" data-cell="G27" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G19*1.1" type="text">
                                                <input value="" id="finalT27" name="finalT27" data-cell="T27" class="formula_cell btn-block" data-formula="#c3!A19" type="hidden">
                                            </div>
                                        </div>
                                        <div style="display: none;" id="finalc20" data-f2="28" class="c3_final form-group">
                                            <div class="col-sm-8">
                                                <input value="<?= isset($stored['finalE28']) ? $stored['finalE28'] : '' ?>" id="finalE28" name="finalE28" data-cell="E28" class="formula_cell btn-block" data-formula="#c3!B20" type="text">
                                            </div>
                                            <div class="col-sm-4">
                                                <input value="<?= isset($stored['finalG28']) ? $stored['finalG28'] : '' ?>" id="finalG28" name="finalG28" data-cell="G28" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G20*1.1" type="text">
                                                <input value="" id="finalT28" name="finalT28" data-cell="T28" class="formula_cell btn-block" data-formula="#c3!A20" type="hidden">
                                            </div>
                                        </div>

                                    
<?php if (isset($stored["addt_final_list2"])): $c3_list_index = 0;
    foreach ($stored["addt_final_list2"] as $row):
        ?>
                                            <div id="finalc<?= $stored['addt_c3_list'][$c3_list_index] ?>" data-f2="<?= $row ?>" class="c3_final form-group addt"> 
                                                <div class="col-sm-8"> 
                                                    <input type="text" id="finalE<?= $row ?>" name="finalE<?= $row ?>" data-cell="E<?= $row ?>" class="formula_cell btn-block" data-formula="#c3!B<?= $stored['addt_c3_list'][$c3_list_index] ?>"/> 
                                                </div> 
                                                <div class="col-sm-4"> 
                                                    <input type="text" id="finalG<?= $row ?>" name="finalG<?= $row ?>" data-cell="G<?= $row ?>" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G<?= $stored['addt_c3_list'][$c3_list_index] ?>*1.1"/> 
                                                    <input type="hidden" id="finalT<?= $row ?>" name="finalT<?= $row ?>" data-cell="T<?= $row ?>" class="formula_cell btn-block" data-formula="#c3!A<?= $stored['addt_c3_list'][$c3_list_index] ?>"/> 
                                                </div> 
                                            </div>
    <?php $c3_list_index++; endforeach;
endif;
?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>