$(document).ready(function(){

/*
*   Customized Buyer Costs & Selling Costs;
*/
    $('#Z2').hide('slow');
    
    $('#Z1').change(function(){
        $checked = this.checked ? 1 : 0;
        if($checked == 1){
            $('#Z2').show('slow');
        }else{
            $('#Z2').hide('slow');
        }
    });

    $('#Z4').hide('slow');
    
    $('#Z3').change(function(){
        $checked = this.checked ? 1 : 0;
        if($checked == 1){
            $('#Z4').show('slow');
        }else{
            $('#Z4').hide('slow');
        }
    });
    
    
                    
    dollarSign = function(val, axis){
                            val = val.toString().replace(/\$|\,/g, '');
                            if (isNaN(val))
                                val = '0';
                            sign = (val == (val = Math.abs(val)));
                            val = Math.floor(val * 100 + 0.50000000001);
                            cents = val % 100;
                            val = Math.floor(val / 100).toString();
                            if (cents < 10)
                                cents = '0' + cents;
                            for (i = 0; i < Math.floor((val.length - (1 + i)) / 3); i++){
                                val = val.substring(0, val.length - (4 * i + 3)) + ',' + val.substring(val.length - (4 * i + 3));
                            }
                            return (((sign) ? '' : '-') + '$' + val);
                        }
    
    var $calc = $('#roger').calx({
        autoCalculate : false ,
        onAfterCalculate:function(data){

            var R = [],
                H = [],
                S = [],
                U = [],
                AB = [],
                BC = [];

            var $period = this.getCellValue('D20');
            var $i;

            for ($i =1; $i <= $period; $i++) {

                var $p = $i + 6;
                var $x = Math.ceil($i/12);
                var $dataR = this.getCellValue('R'+$p);
                var $dataH = this.getCellValue('H'+$p);
                var $dataS = this.getCellValue('S'+$p);
                var $dataU = this.getCellValue('U'+$p);
                var $dataAB = this.getCellValue('AB'+$p);
                var $dataBC = this.getCellValue('BC'+$p);

                R.push([$x,$dataR]);
                S.push([$x,$dataS]);
                U.push([$x,$dataU]);
                AB.push([$x,$dataAB]);
                BC.push([$x,$dataBC]);
                H.push([$x,$dataH]);
            }

    /*
    *   graph1 show principal vs wasted money
    */
            var data1= [
                { data: AB, label:""},
                { data: BC, label:""}
            ];
            var options1= 
            {
                series: {

                    lines: {
                        show: true,
                        align: 'left',
                        fill: 0.5
                    },
                    points: {
                        show: true
                    }
                    
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
                yaxis: {
                    tickLength: 0,
                    tickFormatter: dollarSign,
                    font:{
                        size:14,
                        weight:"bold",
                        color:"#000",
                        align : "center"
                    },
                },
                xaxis:{
                    tickLength: 0,
                    font:{
                        size:14,
                        weight:"bold",
                        color:"#000",
                        align : "center"
                    },
                }
            };

            var graph1 = $.plot("#graph1",  data1 , options1 );

            $("<div id='tooltip'></div>").css({
                position: "absolute",
                display: "none",
                border: "1px solid #fdd",
                padding: "2px",
                "background-color": "#fee",
                opacity: 0.80
            }).appendTo("body");

            $("#graph1").bind("plothover", function (event, pos, item) {

            if ($("#enablePosition:checked").length > 0) {
                var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";
                $("#hoverdata").text(str);
            }

            if ($("#enableTooltip:checked").length > 0) {
                if (item) {
                    var x = item.datapoint[0].toFixed(),
                        y = item.datapoint[1].toFixed();

                    $("#tooltip").html(item.series.label + " of " + x + " = " + y)
                        .css({top: item.pageY+5, left: item.pageX+5})
                        .fadeIn(200);
                } else {
                    $("#tooltip").hide();
                }
            }


        });

        $("#graph1").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text(" - click point " + item.dataIndex + " in " + item.series.label);
                plot.highlight(item.series, item.datapoint);
            }
        });

        

    /*
    *   graph2 show increase in rent
    */
            
            var plot = $.plot("#graph2", [
                { data: R},
                { data: U}
            ], {
                series: {
                    lines: {
                        show: true,
                        align:'left',
                        fill: 0.5
                    },
                    points: {
                        show: true
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
                yaxis: {
                    tickLength: 0,
                    min: 0,
                    tickFormatter: dollarSign,
                    font:{
                        size:14,
                        weight:"bold",
                        color:"#000",
                        align : "left"
                    },
                },
                xaxis:{
                    tickLength: 0,
                    font:{
                        size:14,
                        weight:"bold",
                        color:"#000",
                        align : "center"
                    },
                }
            });

            $("<div id='tooltip2'></div>").css({
                position: "absolute",
                display: "none",
                border: "1px solid #fdd",
                padding: "2px",
                "background-color": "#fee",
                opacity: 0.80
            }).appendTo("body");

            $("#graph2").bind("plothover", function (event, pos, item) {

            if ($("#enablePosition2:checked").length > 0) {
                var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";
                $("#hoverdata2").text(str);
            }

            if ($("#enableTooltip2:checked").length > 0) {
                if (item) {
                    var x = item.datapoint[0].toFixed(),
                        y = item.datapoint[1].toFixed();

                    $("#tooltip2").html(item.series.label + " of " + x + " = " + y)
                        .css({top: item.pageY+5, left: item.pageX+5})
                        .fadeIn(200);
                } else {
                    $("#tooltip2").hide();
                }
            }

            
        });

        $("#graph2").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata2").text(" - click point " + item.dataIndex + " in " + item.series.label);
                plot.highlight(item.series, item.datapoint);
            }
        });


    /*
    *   graph3 show rent vs wasted money
    */
            
            var plot = $.plot("#graph3", [
                { data: S},
                { data: U}
            ], {
                series: {
                    lines: {
                        show: true,
                        align:'left',
                        fill: 0.5
                    },
                    points: {
                        show: true
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
                yaxis: {
                    tickLength: 0,
                    min: 0,
                    tickFormatter: dollarSign,
                    font:{
                        size:14,
                        weight:"bold",
                        color:"#000",
                        align : "left"
                    },
                    position:'left',
                },
                xaxis:{
                    tickLength: 0,
                    
                    font:{
                        size:14,
                        weight:"bold",
                        color:"#000",
                        align : "center"
                    },
                }
            });

            $("<div id='tooltip3'></div>").css({
                position: "absolute",
                display: "none",
                border: "1px solid #fdd",
                padding: "2px",
                "background-color": "#fee",
                opacity: 0.80
            }).appendTo("body");

            $("#graph3").bind("plothover", function (event, pos, item) {

            if ($("#enablePosition3:checked").length > 0) {
                var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";
                $("#hoverdata3").text(str);
            }

            if ($("#enableTooltip3:checked").length > 0) {
                if (item) {
                    var x = item.datapoint[0].toFixed(),
                        y = item.datapoint[1].toFixed();

                    $("#tooltip3").html(item.series.label + " of " + x + " = " + y)
                        .css({top: item.pageY+5, left: item.pageX+5})
                        .fadeIn(200);
                } else {
                    $("#tooltip3").hide();
                }
            }

            
        });

        $("#graph3").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata3").text(" - click point " + item.dataIndex + " in " + item.series.label);
                plot.highlight(item.series, item.datapoint);
            }
        });

        }
    });


    /*
            var $grab =$('#E37').val();
            var $cell =parseInt($grab) + 6;

            $('#D37').attr('data-formula', '$I'+$cell);
            $('#D17').trigger('change').trigger('blur');
            $('#I'+$cell).trigger('change').trigger('blur');
    */
    

/** initial date-picker */
/*
    $('.datepicker').datepicker({
        'dateFormat' : 'mm-dd-yy'
    });
*/
/*
     $( "#AC28" ).datepicker({
        showOn: "button",
        buttonImage: "asset/img/calendar.gif",
        buttonImageOnly: true,
        buttonText: "Select date"
    });
*/

/** find next input when enter  */
    var $input = $('.input_cell');
    $input.on('keypress', function(e) {
        if (e.which === 13) {
            var ind = $input.index(this);
            $input.eq(ind + 1).focus();
            e.preventDefault();
        }
    });

/*
    $('a[href="http://www.elliman.com/reports-and-guides/guides/new-york-city/closing-costs"]').click(function(){
      $('#BE39').removeClass('hidden');
    }); 
*/


    $periode = $('#D19');
    $periode.blur(function(){
        var $period = $('#D20').val();
        var $t = parseInt($period) + 1;
        var $i;
        for($i = 7; $i <= $t; $i++)
        for ($i = $t; $i <= 360 ; $i++){
            $('#row'+$i).addClass('hidden');
        };

    });

    $('#calculate, #calculate1').click(function(){
        $('#loading').modal('show');
        setTimeout(function(){
            $('#roger').calx('calculate');
        }, 300);
        $('#loading').modal('hide');
    });

    $('a[href="#graphic"]').click(function(){
        //alert('click');
        $('#loading').modal('show');
        setTimeout(function(){
            $('#roger').calx('calculate');
        }, 300);
        $('#loading').modal('hide');
    }); 






 /* 
    $('#calculate').click(function(){
        if($('td').length) {
        
        
        $('#E14').trigger('change').trigger('blur');

        $('#D8,#G6,#H6,#D17,#D18,#E12,#E13,#D30,#D24').trigger('change').trigger('blur');
        /*
        var $look = $('#E37').val();
        var $looked = parseInt($look) + 6;
        var up = 'I'+$looked;
        var diff = 'SUM(V7:V'+$looked+')';
        var mortgage = $('#roger').calx('getCell', 'D37').setFormula(up);
        var mortgage = $('#roger').calx('getCell', 'D36').setFormula(diff);
        $('#E37').trigger('change').trigger('blur');
        


        //$('#'+up).trigger('blur').trigger('change');
        }else{
            alert('Please Input / Retype Term(Years)');
        }

    })


    $periode = $('#D19');
    $periode.blur(function(){
        //$('#E14').trigger('change').trigger('blur');

        //$('#D8,#G6,#H6,#D17,#D18,#E12,#E13,#D30,#D24').trigger('change').trigger('blur');

       

            var $period = $('#D20').val();
            var $t = parseInt($period) + 6;
        
            var $i;
            var $table = $('#break');
            var $formg;
            var $formh;
            var $formi;
            var $formj;
            var $formk;
            var $forml;
            var $formm;
            var $formn;
            var $formo;
            var $formp;
            var $formq;
            var $formr;
            var $forms;
            var $formu;
            var $formv;
            var $formw;


            $table.html('');

            
                var $tr = '';

                    for($i = 7; $i <= $t; $i++){
                        if($i==7){
                            $formg = '$G6';
                            //$formh = '$H6';
                            $formi = '$D17';
                            $formk = '$J7-$L7';
                            $forml = '$I7*$D18/12';
                            $formm = '$D12';
                            $formn = '$D13';
                            $formo = '$D14';
                            $formp = '$K7+$L7+$M7+$N7+$O7';
                            $formq = '($L7+$N7)*$D30';
                            $formr = '$P7-$Q7';
                            
                            $formw = 'SUM($L7,$N7)';
                            $forms = '$W7-$Q7';
                            $formu = '$D24';
                            $formv = '$R7-$U7';

                          
                        }else{
                            $formg = '$G'+($i-1)+'+1';
                            //$formh = "dateformat(EDATE(H"+($i-1)+",1), 'M/D/YYYY')";
                            $formi = '$I'+($i-1)+'-$K'+($i-1);
                            $formk = '$J'+$i+'-$L'+$i;
                            $forml = '$I'+$i+'*$D18/12';
                            $formm = '$M'+($i-1)+'*(1+$D27)';
                            $formn = '$N'+($i-1)+'*(1+$D27)';
                            $formo = '$O'+($i-1);
                            $formp = '$K'+$i+'+$L'+$i+'+$M'+$i+'+$N'+$i+'+$O'+$i;
                            $formq = '($L'+$i+'+$N'+$i+')*$D30';
                            $formr = '$P'+$i+'-$Q'+$i+'';
                            $formw = 'SUM($L'+$i+',$N'+$i+')';
                            $forms = '$L'+$i+'-$Q'+$i;
                            $formu = '$U'+($i-1)+'*(1+$D27)';
                            $formv = '$R'+$i+'-$U'+$i+'';

                        }
                    $tr +=
                        '<tr class="break_detail">'+
                            '<td><input type="text" class="text-center bold input-sm med" id="G'+$i+'" data-formula="'+$formg+'"/></td>'+
                            //'<td><input type="text" class="text-right input-sm large formula_cell" id="H'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formh+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="I'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formi+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="J'+$i+'" data-format="$ 0,0[.]" data-formula="$D21"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="K'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formk+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="L'+$i+'" data-format="$ 0,0[.]" data-formula="'+$forml+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="M'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formm+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="N'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formn+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="O'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formo+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="P'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formp+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="Q'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formq+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="R'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formr+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="W'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formw+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="S'+$i+'" data-format="$ 0,0[.]" data-formula="'+$forms+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="U'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formu+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="V'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formv+'"/></td>'+

                        '</tr>';
                    }
        
            $table.append($tr);
            $('#roger').calx('refresh');
       

        
    });


    /*      
    $periode = $('#D19');
    $('#calc1').click(function(event){
        event.preventDefault();
        $('#loading').modal('show');
           
        $('#loading').on('shown.bs.modal', function() {
            
        
            var $period = $('#D20').val();
            var $t = parseInt($period) + 6;
        
            var $i;
            var $table = $('#break');
            var $formg;

            $table.html('');

            
                var $tr = '';

                    for($i = 7; $i <= $t; $i++){
                        if($i==7){
                            $formg = '$G6';
                    
                        }else{
                            $formg = '$G'+($i-1)+'+1';
                   
                        }
                    $tr +=
                        '<tr class="break_detail">'+
                            '<td><input type="text" class="text-center bold input-sm med" id="G'+$i+'" data-formula="'+$formg+'"/></td>'+
                            //'<td><input type="text" class="text-right input-sm large formula_cell" id="H'+$i+'" data-format="$ 0,0[.]" data-formula="'+$formh+'"/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="I'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="J'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="K'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="L'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="M'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="N'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="O'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="P'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="Q'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="R'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            //'<td><input type="text" class="text-right input-sm large formula_cell" id="W'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="S'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="U'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+
                            '<td><input type="text" class="text-right input-sm large formula_cell" id="V'+$i+'" data-format="$ 0,0[.]" data-formula=""/></td>'+

                        '</tr>';
                    }
        
            $table.append($tr);
            
            for($i = 7; $i <= $t; $i++){
                        if($i==7){
                            $formg = '$G6';
                            //$formh = '$H6';
                            $formi = '$D17';
                            $formk = '$J7-$L7';
                            $forml = '$I7*$D18/12';
                            
                          
                        }else{
                            $formg = '$G'+($i-1)+'+1';
                            //$formh = "dateformat(EDATE(H"+($i-1)+",1), 'M/D/YYYY')";
                            $formi = '$I'+($i-1)+'-$K'+($i-1);
                            $formk = '$J'+$i+'-$L'+$i;
                            $forml = '$I'+$i+'*$D18/12';
                            
                            
                            
                        }

                        $('#G'+$i).attr('data-formula',$formg);
                        $('#I'+$i).attr('data-formula',$formi);
                        $('#J'+$i).attr('data-formula',"$D21");
                        $('#K'+$i).attr('data-formula',$formk);
                        $('#L'+$i).attr('data-formula',$forml);
                        
                        
                    }
                    
                    $calc.calx('refresh');
                    $('#loading').modal('hide');
            })
               
        });
           
        
  
    $('#calc2').click(function(event){
        event.preventDefault();
        $('#loading').modal('show');
           
        $('#loading').on('shown.bs.modal', function() {

            var $period = $('#D20').val();
            var $t = parseInt($period) + 6;
        
            var $i;
            for($i = 7; $i <= $t; $i++){
                        if($i==7){
                            
                            $formm = '$D12';
                            $formn = '$D13';
                            $formo = '$D14';

                          
                        }else{
                            
                            $formm = '$M'+($i-1)+'*(1+$D27)';
                            $formn = '$N'+($i-1)+'*(1+$D27)';
                            $formo = '$O'+($i-1);

                        }
                        $('#M'+$i).attr('data-formula',$formm);
                        $('#N'+$i).attr('data-formula',$formn);
                        $('#O'+$i).attr('data-formula',$formo);
                        
                    }
                    $calc.calx('refresh');
                    $('#loading').modal('hide');
            }) 
        });
    
    $('#calc3').click(function(event){
        event.preventDefault();
        $('#loading').modal('show');
           
        $('#loading').on('shown.bs.modal', function() {

            var $period = $('#D20').val();
            var $t = parseInt($period) + 6;
        
            var $i;
            for($i = 7; $i <= $t; $i++){
                        if($i==7){
                            
                            $formp = '$K7+$L7+$M7+$N7+$O7';
                            $formq = '($L7+$N7)*$D30';
                            $formr = '$P7-$Q7';

                          
                        }else{
                            
                            $formp = '$K'+$i+'+$L'+$i+'+$M'+$i+'+$N'+$i+'+$O'+$i;
                            $formq = '($L'+$i+'+$N'+$i+')*$D30';
                            $formr = '$P'+$i+'-$Q'+$i+'';

                        }
                        $('#P'+$i).attr('data-formula',$formp);
                        $('#Q'+$i).attr('data-formula',$formq);
                        $('#R'+$i).attr('data-formula',$formr);
                        
                    }
                    $calc.calx('refresh'); 
                    $('#loading').modal('hide');
            })
        }); 

    $('#calc4').click(function(event){
        event.preventDefault();
        $('#loading').modal('show');
           
        $('#loading').on('show.bs.modal', function() {

            var $period = $('#D20').val();
            var $t = parseInt($period) + 6;
        
            var $i;
            for($i = 7; $i <= $t; $i++){
                        if($i==7){
                            
                            $forms = 'SUM($L7,$N7)-$Q7';
                            $formu = '$D24';
                            $formv = '$R7-$U7';
                          
                        }else{
                            
                            $forms = 'SUM($L'+$i+',$N'+$i+')-$Q'+$i;
                            $formu = '$U'+($i-1)+'*(1+$D27)';
                            $formv = '$R'+$i+'-$U'+$i+'';

                        }
                        $('#S'+$i).attr('data-formula',$forms);
                        $('#U'+$i).attr('data-formula',$formu);
                        $('#V'+$i).attr('data-formula',$formv);
                    }
                    $calc.calx('refresh'); 
                    $('#loading').modal('hide');
            }) 
        });
/*
    $('#calc5').click(function(){
        var $period = $('#D20').val();
            var $t = parseInt($period) + 6;
        
            var $i;
        for($i = 7; $i <= $t; $i++){
                        if($i==7){
                            
                            $formu = '$D24';
                          
                        }else{

                            $formu = '$U'+($i-1)+'*(1+$D27)';
                        }
                        $('#U'+$i).attr('data-formula',$formu);
                        
                    }
                    $calc.calx('refresh'); 
    });
    $('#calc6').click(function(){
        var $period = $('#D20').val();
            var $t = parseInt($period) + 6;
        
            var $i;
        for($i = 7; $i <= $t; $i++){
                        if($i==7){
                            
                            $formv = '$R7-$U7';
                          
                        }else{

                            $formv = '$R'+$i+'-$U'+$i+'';

                        }
                        $('#V'+$i).attr('data-formula',$formv);
                        
                    }
                    $calc.calx('refresh'); 
    });
    */        
    
        
});