$(document).ready(function () {

    /*
     *	init calx
     */
    var $calc = $('#a1, #a2, #a3, #b1, #b2, #b3, #c1, #c2, #c3,#d1, #final').calx();


    /*
     * on a2 tab if B5 Yes, show B6
     */
    $('#2B5').change(function () {
        if ($(this).val() == '1') {
            $('#2A6').removeClass('hidden');
        } else {
            $('#2A6').addClass('hidden');
        }
    });



    /** find next input when enter  */
    var $input = $('.input_cell');
    $input.on('keypress', function (e) {
        if (e.which === 13) {
            var ind = $input.index(this);
            $input.eq(ind + 1).focus();
            e.preventDefault();
        }
    });

    /*
     *   add row for adviser tab
     */
    //var $B_adv = [];
    //var $C_adv = [];
    //var $D_adv = [];
    //var $E_adv = [];
    //var $F_adv = [];
    $('#add_adviser').click(function (e) {
        e.preventDefault();
        var $adviser = $('#adviser_list');
        var $row_adviser = $('#adviser_list tr').length > 0 ? parseInt($('#adviser_list tr').last().attr('id').replace('adviser_row',''))+1 : 5;
        //var $row_adviser = parseInt($('#adviser_list tr').last().attr('id').replace('adviser_row',''))+1;
        $adviser.append(
                '<tr id="adviser_row' + $row_adviser + '" class="adviser_row addt" data-adviser="' + $row_adviser + '">' +
                '<td><input type="text" id="A' + $row_adviser + '" name="A' + $row_adviser + '" data-cell="A' + $row_adviser + '" class="input_cell btn-block" placeholder="name"/></td>' +
                '<td><input type="text" id="B' + $row_adviser + '" name="B' + $row_adviser + '" data-cell="B' + $row_adviser + '" class="text-right input_cell btn-block" data-format="$ 0,0[.]00"/></td>' +
                '<td><input type="text" id="C' + $row_adviser + '" name="C' + $row_adviser + '" data-cell="C' + $row_adviser + '" class="text-right input_cell btn-block" value="37.50" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="D' + $row_adviser + '" name="D' + $row_adviser + '" data-cell="D' + $row_adviser + '" class="text-right input_cell btn-block" value="60 %" data-format="0[.]00 %"/></td>' +
                '<td><input type="text" id="E' + $row_adviser + '" name="E' + $row_adviser + '" data-cell="E' + $row_adviser + '" class="text-right input_cell btn-block" value="4"/></td>' +
                '<td><input type="text" id="F' + $row_adviser + '" name="F' + $row_adviser + '" data-cell="F' + $row_adviser + '" class="text-right formula_cell btn-block" disabled data-format="0,0[.]00" data-formula="IF(OR(A' + $row_adviser + '=0,B' + $row_adviser + '=0),0,((48-E' + $row_adviser + ')*C' + $row_adviser + ')*D' + $row_adviser + ')"/></td>' +
                '<td class="text-center"><button id="del_adviser' + $row_adviser + '" type="button" class="btn btn-danger btn-xs delete_adviser text-center" data-id="' + $row_adviser + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>' +
                '</tr>'
                );
/*
        $B_adv.push('B'+$row_adviser);
        var $formulaB = $B_adv.join('+');
        $('#B107').attr('data-formula',$formulaB);

        $C_adv.push('C'+$row_adviser);
        var $formulaC = $C_adv.join('+');
        $('#C107').attr('data-formula',$formulaC);

        $D_adv.push('D'+$row_adviser);
        var $formulaD = $D_adv.join('+');
        $('#D107').attr('data-formula',$formulaD);

        $E_adv.push('E'+$row_adviser);
        var $formulaE = $E_adv.join('+');
        $('#E107').attr('data-formula',$formulaE);

        $F_adv.push('F'+$row_adviser);
        var $formulaF = $F_adv.join('+');
        $('#F107').attr('data-formula',$formulaF);
*/
        //$('#a1').calx('getCell', 'C107').setFormula('SUM(C5:C' + $row_adviser + ')');
        //$('#a1').calx('getCell', 'D107').setFormula('SUM(D5:D' + $row_adviser + ')');
        //$('#a1').calx('getCell', 'E107').setFormula('SUM(E5:E' + $row_adviser + ')');
        //$('#a1').calx('getCell', 'F107').setFormula('SUM(F5:F' + $row_adviser + ')');
        //$('#a1').calx('getSheet').calculate();
        $('#a1').calx('update').calx('calculate');

        var $input = $('.input_cell');
        $input.on('keypress', function (e) {
            if (e.which === 13) {
                var ind = $input.index(this);
                $input.eq(ind + 1).focus();
                e.preventDefault();
            }
        });

    });


    $('body').on('click', '.delete_adviser', function (e) {
        e.preventDefault();

        var $row_id = $(this).attr('data-id');
        $('[data-adviser=' + $row_id + ']').remove();
        $('#a1').calx('update').calx('calculate');
    });


    /*
     *   add row for paraplaner a1_tab
     */
     //var $I_plan = [];
     //var $J_plan = [];
     //var $K_plan = [];
     //var $L_plan = [];
     //var $M_plan = [];
    $('#add_plan').click(function (e) {
        e.preventDefault();
        var $plan = $('#plan_list');
        var $row_plan = $('#plan_list tr').length > 0 ? parseInt($('#plan_list tr').last().attr('id').replace('plan_row',''))+1 : 5;
        $plan.append(
                '<tr id="plan_row' + $row_plan + '" class="plan_row addt" data-plan="' + $row_plan + '">' +
                '<td><input type="text" id="H' + $row_plan + '" name="H' + $row_plan + '" data-cell="H' + $row_plan + '" class="input_cell btn-block" placeholder="name"/></td>' +
                '<td><input type="text" id="I' + $row_plan + '" name="I' + $row_plan + '" data-cell="I' + $row_plan + '" class="text-right input_cell btn-block" data-format="$ 0,0[.]00"/></td>' +
                '<td><input type="text" id="J' + $row_plan + '" name="J' + $row_plan + '" data-cell="J' + $row_plan + '" class="text-right input_cell btn-block" value="37.50" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="K' + $row_plan + '" name="K' + $row_plan + '" data-cell="K' + $row_plan + '" class="text-right input_cell btn-block" value="90 %" data-format="0[.]00 %"/></td>' +
                '<td><input type="text" id="L' + $row_plan + '" name="L' + $row_plan + '" data-cell="L' + $row_plan + '" class="text-right input_cell btn-block" value="4"/></td>' +
                '<td><input type="text" id="M' + $row_plan + '" name="M' + $row_plan + '" data-cell="M' + $row_plan + '" class="text-right formula_cell btn-block" disabled data-format="0,0[.]00" data-formula="IF(OR(H' + $row_plan + '=0,I' + $row_plan + '=0),0,((48-L' + $row_plan + ')*J' + $row_plan + ')*K' + $row_plan + ')"/></td>' +
                '<td class="text-center"><button id="del_plan' + $row_plan + '" type="button" class="btn btn-danger btn-xs delete_plan text-center" data-id="' + $row_plan + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>' +
                '</tr>'
                );
/*
        $I_plan.push('I'+$row_plan);
        var $formulaI = $I_plan.join('+');
        $('#I107').attr('data-formula',$formulaI);

        $J_plan.push('J'+$row_plan);
        var $formulaJ = $J_plan.join('+');
        $('#J107').attr('data-formula',$formulaJ);

        $K_plan.push('K'+$row_plan);
        var $formulaK = $K_plan.join('+');
        $('#K107').attr('data-formula',$formulaK);

        $L_plan.push('L'+$row_plan);
        var $formulaL = $L_plan.join('+');
        $('#L107').attr('data-formula',$formulaL);
        
        $M_plan.push('M'+$row_plan);
        var $formulaM = $M_plan.join('+');
        $('#M107').attr('data-formula',$formulaM);
*/

        //$('#a1').calx('getCell', 'I108').setFormula('SUM(I5:I' + $row_plan + ')');
        //$('#a1').calx('getCell', 'J108').setFormula('SUM(J5:J' + $row_plan + ')');
        //$('#a1').calx('getCell', 'K108').setFormula('SUM(K5:K' + $row_plan + ')');
        //$('#a1').calx('getCell', 'L108').setFormula('SUM(L5:L' + $row_plan + ')');
        //$('#a1').calx('getCell', 'M108').setFormula('SUM(M5:M' + $row_plan + ')');
        $('#a1').calx('update').calx('calculate');

        var $input = $('.input_cell');
        $input.on('keypress', function (e) {
            if (e.which === 13) {
                var ind = $input.index(this);
                $input.eq(ind + 1).focus();
                e.preventDefault();
            }
        });

    });


    $('body').on('click', '.delete_plan', function (e) {
        e.preventDefault();

        var $row_id = $(this).attr('data-id');
        $('[data-plan=' + $row_id + ']').remove();
        $('#a1').calx('update').calx('calculate');
    });

    /*
     *   add row for admin a1_tab
     */
     //var $P_adm = [];
     //var $Q_adm = [];
     //var $R_adm = [];
     //var $S_adm = [];
     //var $T_adm = [];
    $('#add_admin').click(function (e) {
        e.preventDefault();
        var $admin = $('#admin_list');
        var $row_admin = $('#admin_list tr').length > 0 ? parseInt($('#admin_list tr').last().attr('id').replace('admin_row',''))+1 : 5;
        $admin.append(
                '<tr id="admin_row' + $row_admin + '" class="admin_row addt" data-admin="' + $row_admin + '">' +
                '<td><input type="text" id="O' + $row_admin + '" name="O' + $row_admin + '" data-cell="O' + $row_admin + '" class="input_cell btn-block" placeholder="name"/></td>' +
                '<td><input type="text" id="P' + $row_admin + '" name="P' + $row_admin + '" data-cell="P' + $row_admin + '" class="text-right input_cell btn-block" data-format="$ 0,0[.]00"/></td>' +
                '<td><input type="text" id="Q' + $row_admin + '" name="Q' + $row_admin + '" data-cell="Q' + $row_admin + '" class="text-right input_cell btn-block" value="37.50" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="R' + $row_admin + '" name="R' + $row_admin + '" data-cell="R' + $row_admin + '" class="text-right input_cell btn-block" value="90 %" data-format="0[.]00 %"/></td>' +
                '<td><input type="text" id="S' + $row_admin + '" name="S' + $row_admin + '" data-cell="S' + $row_admin + '" class="text-right input_cell btn-block" value="4"/></td>' +
                '<td><input type="text" id="T' + $row_admin + '" name="T' + $row_admin + '" data-cell="T' + $row_admin + '" class="text-right formula_cell btn-block" disabled data-format="0,0[.]00" data-formula="IF(OR(O' + $row_admin + '=0,P' + $row_admin + '=0),0,((48-S' + $row_admin + ')*Q' + $row_admin + ')*R' + $row_admin + ')"/></td>' +
                '<td class="text-center"><button id="del_admin' + $row_admin + '" type="button" class="btn btn-danger btn-xs delete_admin text-center" data-id="' + $row_admin + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>' +
                '</tr>'
                );
/*
        $P_adm.push('P'+$row_admin);
        var $formulaP = $P_adm.join('+');
        $('#P107').attr('data-formula',$formulaP);

        $Q_adm.push('Q'+$row_admin);
        var $formulaQ = $Q_adm.join('+');
        $('#Q107').attr('data-formula',$formulaQ);

        $R_adm.push('R'+$row_admin);
        var $formulaR = $R_adm.join('+');
        $('#R107').attr('data-formula',$formulaR);

        $S_adm.push('S'+$row_admin);
        var $formulaS = $S_adm.join('+');
        $('#S107').attr('data-formula',$formulaS);
        
        $T_adm.push('T'+$row_admin);
        var $formulaT = $T_adm.join('+');
        $('#T107').attr('data-formula',$formulaT);
*/

        //$('#a1').calx('getCell', 'P108').setFormula('SUM(P5:P' + $row_admin + ')');
        //$('#a1').calx('getCell', 'Q108').setFormula('SUM(Q5:Q' + $row_admin + ')');
        //$('#a1').calx('getCell', 'R108').setFormula('SUM(R5:R' + $row_admin + ')');
        //$('#a1').calx('getCell', 'S108').setFormula('SUM(S5:S' + $row_admin + ')');
        //$('#a1').calx('getCell', 'T108').setFormula('SUM(T5:T' + $row_admin + ')');
        $('#a1').calx('update').calx('calculate');

        var $input = $('.input_cell');
        $input.on('keypress', function (e) {
            if (e.which === 13) {
                var ind = $input.index(this);
                $input.eq(ind + 1).focus();
                e.preventDefault();
            }
        });

    });


    $('body').on('click', '.delete_admin', function (e) {
        e.preventDefault();

        var $row_id = $(this).attr('data-id');
        $('[data-admin=' + $row_id + ']').remove();
        $('#a1').calx('update').calx('calculate');
    });

    /*
     *   add row for b1 tab
     */
    $('#add_b1').click(function (e) {
        e.preventDefault();
        var $row_b1 = parseInt($('#b1_list tr').last().attr('id').replace('b1_row',''))+1;
        var $b1 = $('#b1_list');
        $b1.append(
                '<tr  id="b1_row' + $row_b1 + '" class="b1_row addt" data-b1="' + $row_b1 + '">' +
                '<td><input type="text" id="4A' + $row_b1 + '" name="4A' + $row_b1 + '" data-cell="A' + $row_b1 + '" class="text-left input_cell btn-block" /></td>' +
                '<td><input type="text" id="4B' + $row_b1 + '" name="4B' + $row_b1 + '" data-cell="B' + $row_b1 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="4C' + $row_b1 + '" name="4C' + $row_b1 + '" data-cell="C' + $row_b1 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="4D' + $row_b1 + '" name="4D' + $row_b1 + '" data-cell="D' + $row_b1 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="4E' + $row_b1 + '" name="4E' + $row_b1 + '" data-cell="E' + $row_b1 + '" class="text-right input_cell btn-block" data-format="$ 0,0[.]"/></td>' +
                '<td></td>' +
                '<td><input type="text" id="4G' + $row_b1 + '" name="4G' + $row_b1 + '" data-cell="G' + $row_b1 + '" class="text-left input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td class="text-center"><button id="del_b1' + $row_b1 + '" type="button" class="btn btn-danger btn-xs delete_b1 text-center" data-id="' + $row_b1 + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>' +
                '</tr>'
                );

        //$('#b1').calx('getCell', 'B120').setFormula('(SUM(B5:B' + $row_b1 + '))+(SUM(B107:B119))');
        //$('#b1').calx('getCell', 'C120').setFormula('(SUM(C5:C' + $row_b1 + '))+(SUM(C107:C119))');
        //$('#b1').calx('getCell', 'D120').setFormula('(SUM(D5:D' + $row_b1 + '))+(SUM(D107:D119))');
        //$('#b1').calx('getCell', 'E122').setFormula('(E120+(SUM(E5:E' + $row_b1 + ')))/(100%-#a2!B12)');

        $('#b1').calx('update').calx('calculate');

        var $input = $('.input_cell');
        $input.on('keypress', function (e) {
            if (e.which === 13) {
                var ind = $input.index(this);
                $input.eq(ind + 1).focus();
                e.preventDefault();
            }
        });

    });

    $('body').on('click', '.delete_b1', function (e) {
        e.preventDefault();

        var $row_id = $(this).attr('data-id');
        $('[data-b1=' + $row_id + ']').remove();
        $('#b1').calx('update').calx('calculate');
    });

    /*
     *   add row for b2 tab
     */
    $('#add_b2').click(function (e) {
        e.preventDefault();
        var $row_b2 = $('#b2_list tr[id^=b2_row]').length > 0 ? parseInt($('#b2_list tr').last().attr('id').replace('b2_row',''))+1 : 5;
        var $b2 = $('#b2_list');
        $b2.append(
                '<tr  id="b2_row' + $row_b2 + '" class="b2_row addt" data-b2="' + $row_b2 + '">' +
                '<td><input type="text" id="5A' + $row_b2 + '" name="5A' + $row_b2 + '" data-cell="A' + $row_b2 + '" class="text-left input_cell btn-block" /></td>' +
                '<td><input type="text" id="5B' + $row_b2 + '" name="5B' + $row_b2 + '" data-cell="B' + $row_b2 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="5C' + $row_b2 + '" name="5C' + $row_b2 + '" data-cell="C' + $row_b2 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="5D' + $row_b2 + '" name="5D' + $row_b2 + '" data-cell="D' + $row_b2 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="5E' + $row_b2 + '" name="5E' + $row_b2 + '" data-cell="E' + $row_b2 + '" class="text-right input_cell btn-block" data-format="$ 0,0[.]"/></td>' +
                '<td></td>' +
                '<td><input type="text" id="5G' + $row_b2 + '" name="5G' + $row_b2 + '" data-cell="G' + $row_b2 + '" class="text-left input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td class="text-center"><button id="del_b2' + $row_b2 + '" type="button" class="btn btn-danger btn-xs delete_b2 text-center" data-id="' + $row_b2 + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>' +
                '</tr>'
                );

        //$('#b2').calx('getCell', 'B120').setFormula('(SUM(B5:B' + $row_b2 + '))+(SUM(B107:B119))');
        //$('#b2').calx('getCell', 'C120').setFormula('(SUM(C5:C' + $row_b2 + '))+(SUM(C107:C119))');
        //$('#b2').calx('getCell', 'D120').setFormula('(SUM(D5:D' + $row_b2 + '))+(SUM(D107:D119))');
        //$('#b2').calx('getCell', 'E122').setFormula('(E120+(SUM(E5:E' + $row_b2 + ')))/(100%-#a2!B12)');

        $('#b2').calx('update').calx('calculate');

        var $input = $('.input_cell');
        $input.on('keypress', function (e) {
            if (e.which === 13) {
                var ind = $input.index(this);
                $input.eq(ind + 1).focus();
                e.preventDefault();
            }
        });

    });

    $('body').on('click', '.delete_b2', function (e) {
        e.preventDefault();

        var $row_id = $(this).attr('data-id');
        $('[data-b2=' + $row_id + ']').remove();
        $('#b2').calx('update').calx('calculate');
    });

    /*
     *   add row for b3 tab
     */
    var $k = 0;
    $('#add_b3').click(function (e) {
        e.preventDefault();
        $row_b3 = $('#b3_list tr').length > 0 ? parseInt($('#b3_list tr').last().attr('id').replace('b3_row',''))+1 : 5 ;
        $row_formb3 = parseInt($('#final_list1 > div > div > input').last().attr('id').replace('finalC',''))+1;
        //$row_formb3 = $row_formb3 === 21 ? 29 : $row_formb3;
        $k++;
        var $b3 = $('#b3_list');
        var $final_b3 = $('#final_list1');
        $b3.append(
                '<tr  id="b3_row' + $row_b3 + '" class="b3_row addt" data-b3="' + $row_b3 + '">' +
                '<td class="text-center"><input type="checkbox" id="6A' + $row_b3 + '" name="6A' + $row_b3 + '" data-cell="A' + $row_b3 + '" value="1" data-cek3="' + $row_b3 + '" class="checkbox_b3 text-center input_cell" /></td>' +
                '<td><input type="text" id="6B' + $row_b3 + '" name="6B' + $row_b3 + '" data-cell="B' + $row_b3 + '" class="text-left btn-block"/></td>' +
                '<td><input type="text" id="6C' + $row_b3 + '" name="6C' + $row_b3 + '" data-cell="C' + $row_b3 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="6D' + $row_b3 + '" name="6D' + $row_b3 + '" data-cell="D' + $row_b3 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="6E' + $row_b3 + '" name="6E' + $row_b3 + '" data-cell="E' + $row_b3 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="6F' + $row_b3 + '" name="6F' + $row_b3 + '" data-cell="F' + $row_b3 + '" class="text-right input_cell btn-block" data-format="$ 0,0[.]00"/></td>' +
                '<td><input type="text" id="6G' + $row_b3 + '" name="6G' + $row_b3 + '" data-cell="G' + $row_b3 + '" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C' + $row_b3 + '*(#a3!D5/60))+((D' + $row_b3 + '*(#a3!D6/60)))+((E' + $row_b3 + '*(#a3!D7/60)))+(F' + $row_b3 + '/(1-#a2!B12)))"/></td>' +
                '<td class="text-center"><button id="del_b3' + $row_b3 + '" type="button" class="btn btn-danger btn-xs delete_b3 text-center" data-id="' + $row_b3 + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>' +
                '</tr>'
                );

        $final_b3.append(
                '<div id="finalb' + $row_b3 + '" class="b3_final form-group addt" data-f1="' + $row_formb3 + '">' +
                '<div class="col-sm-8">' +
                '<input type="text" id="finalA' + $row_formb3 + '" name="finalA' + $row_formb3 + '" data-cell="A' + $row_formb3 + '" class="formula_cell btn-block" data-formula="#b3!B' + $row_b3 + '"/>' +
                '</div>' +
                '<div class="col-sm-4">' +
                '<input type="text" id="finalB' + $row_formb3 + '" name="finalB' + $row_formb3 + '" data-cell="B' + $row_formb3 + '" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#b3!G' + $row_b3 + '*1.1"/>' +
                '<input type="hidden" id="finalC' + $row_formb3 + '" name="finalC' + $row_formb3 + '" data-cell="C' + $row_formb3 + '" class="formula_cell btn-block" data-formula="#b3!A' + $row_b3 + '"/>' +
                '</div>' +
                '</div>'
                );

        $('#b3').calx('getCell', 'B1').setFormula(' '+$row_formb3);
        $('#b3').calx('update').calx('calculate');
        $('#final').calx('update').calx('calculate');

        var $input = $('.input_cell');
        $input.on('keypress', function (e) {
            if (e.which === 13) {
                var ind = $input.index(this);
                $input.eq(ind + 1).focus();
                e.preventDefault();
            }
        });

        $('.b3_final').hide('slow');
        $('.checkbox_b3').change(function () {
            var $row_id = $(this).attr('data-cek3');
            $checked = this.checked ? 1 : 0;
            if ($checked == 1) {
                $('#finalb' + $row_id).show('slow');
            } else {
                $('#finalb' + $row_id).hide('slow');
            }
        });
        $('.checkbox_b3').trigger('change');

    });

    $('body').on('click', '.delete_b3', function (e) {
        e.preventDefault();

        var $row_id = $(this).attr('data-id');
        var $row_f1 = parseInt($row_id) + 8
        $('[data-b3=' + $row_id + ']').remove();
        $('[data-f1=' + $row_f1 + ']').remove();
        $('#b3').calx('update').calx('calculate');
        $count_b3 =parseInt($('#b3_list tr').last().attr('data-b3')) + 8;
        $('#b3').calx('getCell', 'B1').setFormula( ' '+$count_b3);
        $('#b3').calx('update').calx('calculate');
        $('#final').calx('update').calx('calculate');
    });

    $('.b3_final').hide('slow');
    $('.checkbox_b3').change(function () {
        var $row_id = $(this).attr('data-cek3');
        $checked = this.checked ? 1 : 0;
        if ($checked == 1) {
            $('#finalb' + $row_id).show('slow');
        } else {
            $('#finalb' + $row_id).hide('slow');
        }
    });
    $('.checkbox_b3').trigger('change');

    /*
     *   add row for c1 tab
     */
    var $row_c1 = 17;
    var $i = 0;
    $('#add_c1').click(function (e) {
        e.preventDefault();
        $row_c1 = $('#c1_list tr').length > 0 ? parseInt($('#c1_list tr').last().attr('id').replace('c1_row',''))+1 : 5;
        $i++;
        var $c1 = $('#c1_list');
        var $d1 = $('#d1_list');
        $c1.append(
                '<tr  id="c1_row' + $row_c1 + '" class="c1_row addt" data-c1="' + $row_c1 + '">' +
                '<td class="text-center"><input type="checkbox" id="7A' + $row_c1 + '" name="7A' + $row_c1 + '" data-cell="A' + $row_c1 + '" value="1" data-cek1="' + $row_c1 + '" class="checkbox_c1 text-center input_cell" /></td>' +
                '<td><input type="text" id="7B' + $row_c1 + '" name="7B' + $row_c1 + '" data-cell="B' + $row_c1 + '" class="text-left btn-block"/></td>' +
                '<td><input type="text" id="7C' + $row_c1 + '" name="7C' + $row_c1 + '" data-cell="C' + $row_c1 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="7D' + $row_c1 + '" name="7D' + $row_c1 + '" data-cell="D' + $row_c1 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="7E' + $row_c1 + '" name="7E' + $row_c1 + '" data-cell="E' + $row_c1 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="7F' + $row_c1 + '" name="7F' + $row_c1 + '" data-cell="F' + $row_c1 + '" class="text-right input_cell btn-block" data-format="$ 0,0[.]00"/></td>' +
                '<td><input type="text" id="7G' + $row_c1 + '" name="7G' + $row_c1 + '" data-cell="G' + $row_c1 + '" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C' + $row_c1 + '*(#a3!D5/60))+((D' + $row_c1 + '*(#a3!D6/60)))+((E' + $row_c1 + '*(#a3!D7/60)))+(F' + $row_c1 + '/(1-#a2!B12)))"/></td>' +
                '<td class="text-center"><button id="del_c1' + $row_c1 + '" type="button" class="btn btn-danger btn-xs delete_c1 text-center" data-id="' + $row_c1 + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>' +
                '</tr>'
                );

        $d1.append(
                '<tr  id="d1_row' + $row_c1 + '" class="d1_row addt" data-d1="' + $row_c1 + '">' +
                '<td><input type="text" id="serviceA' + $row_c1 + '" name="serviceA' + $row_c1 + '" data-cell="AA' + $row_c1 + '" class="text-left btn-block" data-formula="#c1!B' + $row_c1 + '"/></td>' +
                '<td><input type="text" id="serviceB' + $row_c1 + '" name="serviceB' + $row_c1 + '" data-cell="AB' + $row_c1 + '" class="input_cell text-center btn-block" data-format="0,0[.]00"/></td>' +
                '<td class="hidden"><input type="text" id="serviceC' + $row_c1 + '" name="serviceC' + $row_c1 + '" data-cell="AC' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB' + $row_c1 + '*#c1!G' + $row_c1 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceE' + $row_c1 + '" name="serviceE' + $row_c1 + '" data-cell="AE' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD' + $row_c1 + '*#c1!G' + $row_c1 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceG' + $row_c1 + '" name="serviceG' + $row_c1 + '" data-cell="AG' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF' + $row_c1 + '*#c1!G' + $row_c1 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceI' + $row_c1 + '" name="serviceI' + $row_c1 + '" data-cell="AI' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH' + $row_c1 + '*#c1!G' + $row_c1 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceK' + $row_c1 + '" name="serviceK' + $row_c1 + '" data-cell="AK' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ' + $row_c1 + '*#c1!G' + $row_c1 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceM' + $row_c1 + '" name="serviceM' + $row_c1 + '" data-cell="AM' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AL' + $row_c1 + '*#c1!G' + $row_c1 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceO' + $row_c1 + '" name="serviceO' + $row_c1 + '" data-cell="AO' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AN' + $row_c1 + '*#c1!G' + $row_c1 + '"/></td>' +
                '<td><input type="text" id="serviceD' + $row_c1 + '" name="serviceD' + $row_c1 + '" data-cell="AD' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceF' + $row_c1 + '" name="serviceF' + $row_c1 + '" data-cell="AF' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceH' + $row_c1 + '" name="serviceH' + $row_c1 + '" data-cell="AH' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceJ' + $row_c1 + '" name="serviceJ' + $row_c1 + '" data-cell="AJ' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceL' + $row_c1 + '" name="serviceL' + $row_c1 + '" data-cell="AL' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceN' + $row_c1 + '" name="serviceN' + $row_c1 + '" data-cell="AN' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td class="hidden"><input type="hidden" id="serviceZ' + $row_c1 + '" name="serviceZ' + $row_c1 + '" data-cell="AZ' + $row_c1 + '" class="text-center input_cell btn-block" data-format="0,0[.]00" data-formula="#c1!A' + $row_c1 + '"/></td>' +
                '</tr>'
                );

        $('#c1').calx('getCell', 'B1').setFormula( ' '+$row_c1);
        $('#c1').calx('update').calx('calculate');
        //$('#d1').calx('getCell', 'AB4').setFormula('SUM(AC5:AC' + $row_c1 + ')+SUM(AC105:AC1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AD4').setFormula('SUM(AE5:AE' + $row_c1 + ')+SUM(AE105:AE1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AF4').setFormula('SUM(AG5:AG' + $row_c1 + ')+SUM(AG105:AG1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AH4').setFormula('SUM(AI5:AI' + $row_c1 + ')+SUM(AI105:AI1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AJ4').setFormula('SUM(AK5:AK' + $row_c1 + ')+SUM(AK105:AK1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AL4').setFormula('SUM(AM5:AM' + $row_c1 + ')+SUM(AM105:AM1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AN4').setFormula('SUM(AO5:AO' + $row_c1 + ')+SUM(AO105:AO1' + $row_c2 + ')');
        $('#d1').calx('update').calx('calculate');



        var $input = $('.input_cell');
        $input.on('keypress', function (e) {
            if (e.which === 13) {
                var ind = $input.index(this);
                $input.eq(ind + 1).focus();
                e.preventDefault();
            }
        });

        $('.d1_row').hide('slow');
        $('.checkbox_c1').change(function () {
            var $row_id = $(this).attr('data-cek1');
            $checked = this.checked ? 1 : 0;
            if ($checked == 1) {
                $('#d1_row' + $row_id).show('slow');
            } else {
                $('#d1_row' + $row_id).hide('slow');
            }
        });
        $('.checkbox_c1').trigger('change');

        //var countc1 = $('[name="count_c1"]');
        //countc1.val(parseInt(count.val())+1);

    });

    $('body').on('click', '.delete_c1', function (e) {
        e.preventDefault();

        var $row_id = $(this).attr('data-id');
        $('[data-c1=' + $row_id + ']').remove();
        $('[data-d1=' + $row_id + ']').remove();
        $('#c1').calx('update').calx('calculate');
        $count_c1 = parseInt($('#c1_list tr').last().attr('data-c1'));
        $('#c1').calx('getCell', 'B1').setFormula( ' '+$count_c1);
        $('#c1').calx('update').calx('calculate');
        $('#d1').calx('update').calx('calculate');
    });

    $('.d1_row').hide('slow');
    $('.checkbox_c1').change(function () {
        var $row_id = $(this).attr('data-cek1');
        $checked = this.checked ? 1 : 0;
        if ($checked == 1) {
            $('#d1_row' + $row_id).show('slow');
        } else {
            $('#d1_row' + $row_id).hide('slow');
        }
    });
    $('.checkbox_c1').trigger('change');

    /*
     *   add row for c2 tab
     */
    var $row_c2 = 12;
    var $j = 0;
    $('#add_c2').click(function (e) {
        e.preventDefault();
        $row_c2 = $('#c2_list tr').length > 0 ? parseInt($('#c2_list tr').last().attr('id').replace('c2_row',''))+1 : 5;
        $j++;
        var $c2 = $('#c2_list');
        var $d2 = $('#d1_list2');
        $c2.append(
                '<tr  id="c2_row' + $row_c2 + '" class="c2_row addt" data-c2="' + $row_c2 + '">' +
                '<td class="text-center"><input type="checkbox" id="8A' + $row_c2 + '" name="8A' + $row_c2 + '" data-cell="A' + $row_c2 + '" value="1" data-cek2="'+$row_c2+'" class="checkbox_c2 text-center input_cell" /></td>' +
                '<td><input type="text" id="8B' + $row_c2 + '" name="8B' + $row_c2 + '" data-cell="B' + $row_c2 + '" class="text-left btn-block" /></td>' +
                '<td><input type="text" id="8C' + $row_c2 + '" name="8C' + $row_c2 + '" data-cell="C' + $row_c2 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="8D' + $row_c2 + '" name="8D' + $row_c2 + '" data-cell="D' + $row_c2 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="8E' + $row_c2 + '" name="8E' + $row_c2 + '" data-cell="E' + $row_c2 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="8F' + $row_c2 + '" name="8F' + $row_c2 + '" data-cell="F' + $row_c2 + '" class="text-right input_cell btn-block" data-format="$ 0,0[.]00"/></td>' +
                '<td><input type="text" id="8G' + $row_c2 + '" name="8G' + $row_c2 + '" data-cell="G' + $row_c2 + '" class="text-right input_cell btn-block" data-format=" 0,0[.]00"/></td>' +
                '<td><input type="text" id="8H' + $row_c2 + '" name="8H' + $row_c2 + '" data-cell="H' + $row_c2 + '" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="(((C' + $row_c2 + '*(#a3!D5/60))+((D' + $row_c2 + '*(#a3!D6/60)))+((E' + $row_c2 + '*(#a3!D7/60)))+(F' + $row_c2 + '/(1-#a2!B12))))/G' + $row_c2 +'"/></td>' +
                '<td class="text-center"><button id="del_c2' + $row_c2 + '" type="button" class="btn btn-danger btn-xs delete_c2 text-center" data-id="' + $row_c2 + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>' +
                '</tr>'
                );

        $d2.append(
                '<tr  id="d2_row' + $row_c2 + '" class="d2_row addt" data-d2="' + $row_c2 + '">' +
                '<td><input type="text" id="serviceA1' + $row_c2 + '" name="serviceA1' + $row_c2 + '" data-cell="AA1' + $row_c2 + '" class="text-left btn-block" data-formula="#c2!B' + $row_c2 + '"/></td>' +
                '<td><input type="text" id="serviceB1' + $row_c2 + '" name="serviceB1' + $row_c2 + '" data-cell="AB1' + $row_c2 + '" class="input_cell text-center btn-block" data-format="0,0[.]00"/></td>' +
                '<td class="hidden"><input type="text" id="serviceC1' + $row_c2 + '" name="serviceC1' + $row_c2 + '" data-cell="AC1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AB1' + $row_c2 + '*#c2!H' + $row_c2 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceE1' + $row_c2 + '" name="serviceE1' + $row_c2 + '" data-cell="AE1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AD1' + $row_c2 + '*#c2!H' + $row_c2 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceG1' + $row_c2 + '" name="serviceG1' + $row_c2 + '" data-cell="AG1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AF1' + $row_c2 + '*#c2!H' + $row_c2 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceI1' + $row_c2 + '" name="serviceI1' + $row_c2 + '" data-cell="AI1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AH1' + $row_c2 + '*#c2!H' + $row_c2 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceK1' + $row_c2 + '" name="serviceK1' + $row_c2 + '" data-cell="AK1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AJ1' + $row_c2 + '*#c2!H' + $row_c2 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceM1' + $row_c2 + '" name="serviceM1' + $row_c2 + '" data-cell="AM1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AL1' + $row_c2 + '*#c2!H' + $row_c2 + '"/></td>' +
                '<td class="hidden"><input type="text" id="serviceO1' + $row_c2 + '" name="serviceO1' + $row_c2 + '" data-cell="AO1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]0000" data-formula="AN1' + $row_c2 + '*#c2!H' + $row_c2 + '"/></td>' +
                '<td><input type="text" id="serviceD1' + $row_c2 + '" name="serviceD1' + $row_c2 + '" data-cell="AD1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceF1' + $row_c2 + '" name="serviceF1' + $row_c2 + '" data-cell="AF1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceH1' + $row_c2 + '" name="serviceH1' + $row_c2 + '" data-cell="AH1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceJ1' + $row_c2 + '" name="serviceJ1' + $row_c2 + '" data-cell="AJ1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceL1' + $row_c2 + '" name="serviceL1' + $row_c2 + '" data-cell="AL1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td><input type="text" id="serviceN1' + $row_c2 + '" name="serviceN1' + $row_c2 + '" data-cell="AN1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/></td>' +
                '<td class="hidden"><input type="hidden" id="serviceZ1' + $row_c2 + '" name="serviceZ1' + $row_c2 + '" data-cell="AZ1' + $row_c2 + '" class="text-center input_cell btn-block" data-format="0,0[.]00"/ data-formula="#c2!A' + $row_c2 + '"></td>' +
                '</tr>'
                );
                

        $('#c2').calx('getCell', 'B1').setFormula(' '+$row_c2);
        $('#c2').calx('update').calx('calculate');
        //$('#d1').calx('getCell', 'AB4').setFormula('SUM(AC5:AC' + $row_c1 + ')+SUM(AC105:AC1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AD4').setFormula('SUM(AE5:AE' + $row_c1 + ')+SUM(AE105:AE1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AF4').setFormula('SUM(AG5:AG' + $row_c1 + ')+SUM(AG105:AG1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AH4').setFormula('SUM(AI5:AI' + $row_c1 + ')+SUM(AI105:AI1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AJ4').setFormula('SUM(AK5:AK' + $row_c1 + ')+SUM(AK105:AK1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AL4').setFormula('SUM(AM5:AM' + $row_c1 + ')+SUM(AM105:AM1' + $row_c2 + ')');
        //$('#d1').calx('getCell', 'AN4').setFormula('SUM(AO5:AO' + $row_c1 + ')+SUM(AO105:AO1' + $row_c2 + ')');
        $('#d1').calx('update').calx('calculate');


        var $input = $('.input_cell');
        $input.on('keypress', function (e) {
            if (e.which === 13) {
                var ind = $input.index(this);
                $input.eq(ind + 1).focus();
                e.preventDefault();
            }
        });

        $('.d2_row').hide('slow');
        $('.checkbox_c2').change(function () {
            var $row_id = $(this).attr('data-cek2');
            $checked = this.checked ? 1 : 0;
            if ($checked == 1) {
                $('#d2_row' + $row_id).show('slow');
            } else {
                $('#d2_row' + $row_id).hide('slow');
            }
        });
        $('.checkbox_c2').trigger('change');

    });
    

    $('body').on('click', '.delete_c2', function (e) {
        e.preventDefault();

        var $row_id = $(this).attr('data-id');
        $('[data-d2=' + $row_id + ']').remove();
        $('[data-c2=' + $row_id + ']').remove();
        $('#c2').calx('update').calx('calculate');
        $count_c2 = parseInt($('#c2_list tr').last().attr('data-c2'));
        $('#c2').calx('getCell', 'B1').setFormula( ' '+$count_c2);
        $('#c2').calx('update').calx('calculate');
        $('#d1').calx('update').calx('calculate');
    });

    $('.d2_row').hide('slow');
    $('.checkbox_c2').change(function () {
        var $row_id = $(this).attr('data-cek2');
        $checked = this.checked ? 1 : 0;
        if ($checked == 1) {
            $('#d2_row' + $row_id).show('slow');
        } else {
            $('#d2_row' + $row_id).hide('slow');
        }
    });
    $('.checkbox_c2').trigger('change');

    //var count = $('[name="count_c2"]');
    //count.val(parseInt(count.val())+1);

    /*
     *   add row for c3 tab
     */
    var $k = 0;
    $('#add_c3').click(function (e) {
        e.preventDefault();
        $row_c3 = $('#c3_list tr').length > 0 ? parseInt($('#c3_list tr').last().attr('id').replace('c3_row',''))+1 : 5;
        $row_formc3 = parseInt($('#final_list2 > div > div > input').last().attr('id').replace('finalT',''))+1;
        //$row_formc3 = $row_formc3 === 21 ? 29 : $row_formc3;
        $k++;
        var $c3 = $('#c3_list');
        var $final_c3 = $('#final_list2');
        $c3.append(
                '<tr  id="c3_row' + $row_c3 + '" class="c3_row addt" data-c3="' + $row_c3 + '">' +
                '<td class="text-center"><input type="checkbox" id="9A' + $row_c3 + '" name="9A' + $row_c3 + '" data-cell="A' + $row_c3 + '" value="1" data-cek4="' + $row_c3 + '" class="checkbox_c3 text-center input_cell" /></td>' +
                '<td><input type="text" id="9B' + $row_c3 + '" name="9B' + $row_c3 + '" data-cell="B' + $row_c3 + '" class="text-left btn-block" /></td>' +
                '<td><input type="text" id="9C' + $row_c3 + '" name="9C' + $row_c3 + '" data-cell="C' + $row_c3 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="9D' + $row_c3 + '" name="9D' + $row_c3 + '" data-cell="D' + $row_c3 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="9E' + $row_c3 + '" name="9E' + $row_c3 + '" data-cell="E' + $row_c3 + '" class="text-right input_cell btn-block" data-format="0,0[.]"/></td>' +
                '<td><input type="text" id="9F' + $row_c3 + '" name="9F' + $row_c3 + '" data-cell="F' + $row_c3 + '" class="text-right input_cell btn-block" data-format="$ 0,0[.]00"/></td>' +
                '<td><input type="text" id="9G' + $row_c3 + '" name="9G' + $row_c3 + '" data-cell="G' + $row_c3 + '" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="((C' + $row_c3 + '*(#a3!D5/60))+((D' + $row_c3 + '*(#a3!D6/60)))+((E' + $row_c3 + '*(#a3!D7/60)))+(F' + $row_c3 + '/(1-#a2!B12)))"/></td>' +
                '<td class="text-center"><button id="del_c3' + $row_c3 + '" type="button" class="btn btn-danger btn-xs delete_c3 text-center" data-id="' + $row_c3 + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>' +
                '</tr>'
                );

        $final_c3.append(
                '<div id="finalc' + $row_c3 + '" class="c3_final form-group addt" data-f2="' + $row_formc3 + '">' +
                '<div class="col-sm-8">' +
                '<input type="text" id="finalE' + $row_formc3 + '" name="finalE' + $row_formc3 + '" data-cell="E' + $row_formc3 + '" class="formula_cell btn-block" data-formula="#c3!B' + $row_c3 + '"/>' +
                '</div>' +
                '<div class="col-sm-4">' +
                '<input type="text" id="finalG' + $row_formc3 + '" name="finalG' + $row_formc3 + '" data-cell="G' + $row_formc3 + '" class="text-right formula_cell btn-block" data-format="$ 0,0[.]00" data-formula="#c3!G' + $row_c3 + '*1.1"/>' +
                '<input type="hidden" id="finalT' + $row_formc3 + '" name="finalT' + $row_formc3 + '" data-cell="T' + $row_formc3 + '" class="formula_cell btn-block" data-formula="#c3!A' + $row_c3 + '"/>' +
                '</div>' +
                '</div>'
                );

        $('#c3').calx('getCell', 'B1').setFormula(' '+$row_formc3);
        $('#c3').calx('update').calx('calculate');
        //$('#c3').calx('getSheet').calculate();
        $('#final').calx('update').calx('calculate');

        var $input = $('.input_cell');
        $input.on('keypress', function (e) {
            if (e.which === 13) {
                var ind = $input.index(this);
                $input.eq(ind + 1).focus();
                e.preventDefault();
            }
        });

        $('.c3_final').hide('slow');
        $('.checkbox_c3').change(function () {
            var $row_id = $(this).attr('data-cek4');
            $checked = this.checked ? 1 : 0;
            if ($checked == 1) {
                $('#finalc' + $row_id).show('slow');
            } else {
                $('#finalc' + $row_id).hide('slow');
            }
        });
        $('.checkbox_c3').trigger('change');

    });

    $('body').on('click', '.delete_c3', function (e) {
        e.preventDefault();

        var $row_id = $(this).attr('data-id');
        var $row_f2 = parseInt($row_id) + 8
        $('[data-c3=' + $row_id + ']').remove();
        $('[data-f2=' + $row_f2 + ']').remove();
        $('#c3').calx('update').calx('calculate');
        $count_c3 = parseInt($('#c3_list tr').last().attr('data-c3')) + 8;
        $('#c3').calx('getCell', 'B1').setFormula( ' '+$count_c3);
        $('#c3').calx('update').calx('calculate');
        $('#final').calx('update').calx('calculate');
    });

    $('.c3_final').hide('slow');
    $('.checkbox_c3').change(function () {
        var $row_id = $(this).attr('data-cek4');
        $checked = this.checked ? 1 : 0;
        if ($checked == 1) {
            $('#finalc' + $row_id).show('slow');
        } else {
            $('#finalc' + $row_id).hide('slow');
        }
    });
    $('.checkbox_c3').trigger('change');

    $('#pdf-d1').click(function () {
        $('#d1').attr('action', site_url+'main/pdf_d1').submit();
    });
    $('#print-d1').click(function () {
        $('#d1').attr('action', site_url+'main/print_d1').submit();
    });

    $('#pdf-final').click(function () {
        $('#final').attr('action', site_url+'main/pdf_final').submit();
    });
    $('#print-final').click(function () {
        $('#final').attr('action', site_url+'main/print_final').submit();
    });
});