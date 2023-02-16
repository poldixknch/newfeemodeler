<?php 
foreach ($_POST as $key => $value) {
    $$key = $value;
}
?>
 
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="4121" />
    <title>Your Fee Schedule</title>
    <style>
        body{
            padding:0;
            margin:0;
            color:#000;
            font-family: DejaVu Sans, sans-serif;
        }
        @media print{
            a[href]:after {content: none;}
            .visible-print{
                display: inherit !important;
            }
            .hidden-print{
                display: none !important; 
            }
        }
        @page{
            margin-top:0;
            margin-left: 0.5cm;
            margin-bottom:0;
            margin-right:0.5cm;
        }
        .page{
            height:17cm !important;
            width:25cm;
            margin:0 auto;
            page-break-after:auto;
            overflow:auto;
            font-size:100%;
            background:white;
            padding:10px;
        }
        .pagebreak{
            page-break-after:always;
            
        }
        .center{
            text-align:center;
        }
        .bold{
            font-weight: bold;
        }
        .italic{
            font-style: italic;
        }
        
        p{
            text-align:justify;
            margin:2px 0;
        }
        .title{
            font-weight:bold;
            font-size:14px;
        }
        
        table{
            border-collapse:collapse;
        }
        .box{
            border:solid 1px #dedede;
        }
        td.grid{
            width: <?php echo 100/12 ?>%;
            padding: 2px;
        }
        td.grid-small{
            width: <?php echo 100/12 ?>%;
        }
        td,p,body,li{
            font-size:10px;
        }
        label{
            font-size: 12px;
        }
        .line{
            text-decoration:underline;
        }
        .linespace{
            line-height: 20px;
            text-align:justify;
        }
        td.underline{
            border-bottom: solid .5px black;
            text-decoration:none;
        }
        td.dotted{
           border-bottom: dotted .5px black;
            text-decoration:none;
        }
        .top{
            margin-top: 10px;
        }
        .right{
            text-align:right;
            padding-right:3px;
        }
        .bottom{
            margin-bottom: 10px;
        }
        .grey{
            background: grey;
        }
        .grey2{
            background:#efefef;
        }
        .grey1{
            background: #dedede;
        }
        .justify{
            text-align: justify;
        }
        .border{
            border: solid 1px grey;
        }
        .zero{
            height: 0px;
        }
        .none{
            margin:0px !important;
            padding: 0px !important;
        }
        .lesstop{
            border-right: solid 1px #000;
            border-bottom: solid 1px #000;
            border-left: solid 1px #000;
        }
        .lessbottom{
            border-right: solid 1px #000;
            border-top: solid 1px #000;
            border-left: solid 1px #000;
        }

    </style>
</head>
<body onload="window.print()">
<body>
<div class="page">
        <table style="width:100%;">
            <tr style="zero">
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
                <td class="grid bold center" colspan="12">
                    <p style="text-align: left; float:left">                
                        <img class="img" src='asset/css/images/logo.png' style="height:50px" alt="">
                    </p>
                </td>
            </tr>
            <tr>
                <td class="grid bold center" colspan="12"><h1 class="none">Your Fee Schedule</h1></td>
            </tr>
            <tr>
                <td class="grid center" colspan="12"><h5 class="none">Created on<?php echo $date_d1 ?></h5></td>
            </tr>
            <tr class="box">
                <td class="grid bold box top" colspan="5"><label for="">Give each service a name</label></td>
                <td class="grid center bold box top" colspan="1"><label for=""><?php echo $serviceA3 ?></label></td>
                <td class="grid center bold box top" colspan="1"><label for=""><?php echo $serviceB3 ?></label></td>
                <td class="grid center bold box top" colspan="1"><label for=""><?php echo $serviceC3 ?></label></td>
                <td class="grid center bold box top" colspan="1"><label for=""><?php echo $serviceD3 ?></label></td>
                <td class="grid center bold box top" colspan="1"><label for=""><?php echo $serviceE3 ?></label></td>
                <td class="grid center bold box top" colspan="1"><label for=""><?php echo $serviceF3 ?></label></td>
                <td class="grid center bold box top" colspan="1"><label for=""><?php echo $serviceG3 ?></label></td>
            </tr>
            <tr class="box">
                <td class="grid bold box " colspan="5"><label for="">Running total</label></td>
                <td class="grid center bold box " colspan="1"><label for=""><?php echo $serviceB4 ?></label></td>
                <td class="grid center bold box " colspan="1"><label for=""><?php echo $serviceD4 ?></label></td>
                <td class="grid center bold box " colspan="1"><label for=""><?php echo $serviceF4 ?></label></td>
                <td class="grid center bold box " colspan="1"><label for=""><?php echo $serviceH4 ?></label></td>
                <td class="grid center bold box " colspan="1"><label for=""><?php echo $serviceJ4 ?></label></td>
                <td class="grid center bold box " colspan="1"><label for=""><?php echo $serviceL4 ?></label></td>
                <td class="grid center bold box " colspan="1"><label for=""><?php echo $serviceN4 ?></label></td>
            </tr>
            <?php for($i=5; $i<=$count_d1; $i++): 

             $sera = "serviceA$i";
             $serb = "serviceB$i";
             $serz = "serviceZ$i";
             $serd = "serviceD$i";
             $serf = "serviceF$i";
             $serh = "serviceH$i";
             $serj = "serviceJ$i";
             $serl = "serviceL$i";
             $sern = "serviceN$i";
             if ($$serz==1) {
                echo '<tr>
                        <td class="grid box" colspan="5">'.$$sera.'</td>
                        <td class="grid center box" colspan="1">'.$$serb.'</td>
                        <td class="grid center box" colspan="1">'.$$serd.'</td>
                        <td class="grid center box" colspan="1">'.$$serf.'</td>
                        <td class="grid center box" colspan="1">'.$$serh.'</td>
                        <td class="grid center box" colspan="1">'.$$serj.'</td>
                        <td class="grid center box" colspan="1">'.$$serl.'</td>
                        <td class="grid center box" colspan="1">'.$$sern.'</td>
                    </tr>';
            }else{
                echo '';
            }
            endfor; ?>

            <tr>
                <td class="grid box" colspan="8">&nbsp;</td>
            </tr>

            <?php for($i=5; $i<=9; $i++): 

             $sera2 = "serviceA10$i";
             $serb2 = "serviceB10$i";
             $serz2 = "serviceZ10$i";
             $serd2 = "serviceD10$i";
             $serf2 = "serviceF10$i";
             $serh2 = "serviceH10$i";
             $serj2 = "serviceJ10$i";
             $serl2 = "serviceL10$i";
             $sern2 = "serviceN10$i";
             if ($$serz2==1) {
                echo '<tr>
                        <td class="grid box " colspan="5">'.$$sera2.'</td>
                        <td class="grid box center" colspan="1">'.$$serb2.'</td>
                        <td class="grid box center" colspan="1">'.$$serd2.'</td>
                        <td class="grid box center" colspan="1">'.$$serf2.'</td>
                        <td class="grid box center" colspan="1">'.$$serh2.'</td>
                        <td class="grid box center" colspan="1">'.$$serj2.'</td>
                        <td class="grid box center" colspan="1">'.$$serl2.'</td>
                        <td class="grid box center" colspan="1">'.$$sern2.'</td>
                    </tr>';
            }else{
                echo '';
            }
            endfor; ?>

            <?php for($i=10; $i<=$count_d2; $i++): 

             $sera3 = "serviceA1$i";
             $serb3 = "serviceB1$i";
             $serz3 = "serviceZ1$i";
             $serd3 = "serviceD1$i";
             $serf3 = "serviceF1$i";
             $serh3 = "serviceH1$i";
             $serj3 = "serviceJ1$i";
             $serl3 = "serviceL1$i";
             $sern3 = "serviceN1$i";
             if ($$serz3==1) {
                echo '<tr>
                        <td class="grid box " colspan="5">'.$$sera3.'</td>
                        <td class="grid box center" colspan="1">'.$$serb3.'</td>
                        <td class="grid box center" colspan="1">'.$$serd3.'</td>
                        <td class="grid box center" colspan="1">'.$$serf3.'</td>
                        <td class="grid box center" colspan="1">'.$$serh3.'</td>
                        <td class="grid box center" colspan="1">'.$$serj3.'</td>
                        <td class="grid box center" colspan="1">'.$$serl3.'</td>
                        <td class="grid box center" colspan="1">'.$$sern3.'</td>
                    </tr>';
            }else{
                echo '';
            }
            endfor; ?>

        </table>
</div>


</body>
</html>