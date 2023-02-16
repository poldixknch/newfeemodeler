<?php
$strategy_variation = isset($strategy_variation) ? $strategy_variation : array();
$strategy_management = isset($strategy_management) ? $strategy_management : array();
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
<div class="page">
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
                <td class="grid bold center" colspan="12">
                    <p style="text-align: left; float:left">                
                        <img class="img" src='<?php echo base_url(); ?>asset/css/images/logo.png' style="height:50px" alt="">
                    </p>
                </td>
            </tr>
            <tr>
                <td class="grid bold center" colspan="12"><h1 class="none">Your Fee Schedule</h1></td>
            </tr>
            <tr>
                <td class="grid center" colspan="12"><h5 class="none">Created on <?php echo $date ?></h5></td>
            </tr>
            <tr>
                <td class="grid top" colspan="12">
                    <label for="" class="top">This is not a client-facing tool. We strongly suggest you engage the services of a marketing specialist to create a client-facing tool to discuss your fees and service offerings. All numbers are inclusive of GST.</label>
                </td>
            </tr>
            <tr>
                <td class="grid" colspan="6">
                    <h3 class="none">Your Engagement Fee Schedule</h3>
                    <label for="" class="bold">Your minimum fees for engaging new clients is:</label>
                </td>
                <td class="grid" colspan="6">
                    <h3 class="none">Your Ongoing Fee Schedule</h3>
                    <label for="" class="bold">Your minimum fees for each service package are:</label>
                </td>
            </tr>
            <tr>
                <td class="grid" colspan="3">For holistic advice (inclusive of GST)</td>
                <td class="grid" colspan="2"><?php echo $holistic_advice; ?></td>
                <td class="grid" colspan="1">&nbsp;</td>
                <td class="grid" colspan="3"><?php echo $service[0]["name"]; ?></td>
                <td class="grid" colspan="3"><?php echo $service[0]["value"]; ?></td>
            </tr>
            <tr>
                <td class="grid" colspan="3">For transactional advice (inclusive of GST)</td>
                <td class="grid" colspan="2"><?php echo $transactional_advice; ?></td>
                <td class="grid" colspan="1">&nbsp;</td>
                <td class="grid" colspan="3"><?php echo $service[1]["name"]; ?></td>
                <td class="grid" colspan="3"><?php echo $service[1]["value"]; ?></td>
            </tr>
            <?php for($i = 2; $i < count($service); $i++): ?>
            <tr>
                <td class="grid" colspan="6">&nbsp;</td>
                <td class="grid" colspan="3"><?php echo $service[$i]["name"]; ?></td>
                <td class="grid" colspan="3"><?php echo $service[$i]["value"] ?></td>
            </tr>
            <?php endfor; ?>
            <tr>
                <td class="grid" colspan="6"><label for="">Strategic advice (to be added to the minimums above, inclusive of GST)</label></td>
                <td class="grid" colspan="6"><label for="">Ongoing strategy management (added to the minimums above)</label></td>
            </tr>
            
            <tr>
                <td class="grid top" colspan="3">
                    <?php
                    for($i = 0; $i < count($strategy_variation); $i++):
                    echo $strategy_variation[$i]["name"] . "<br />";
                    endfor;
                    ?>
                </td>
                <td class="grid" colspan="2">
                    <?php
                    for($i = 0; $i < count($strategy_variation); $i++):
                    echo $strategy_variation[$i]["value"] . "<br />";
                    endfor;
                    ?>
                </td>
                <td class="grid top" colspan="1">&nbsp;</td>
                <td class="grid top" colspan="3">
                <?php
                    for($i = 0; $i < count($strategy_management); $i++):
                    echo $strategy_management[$i]["name"] . "<br />";
                    endfor;
                    ?>
                </td>
                <td class="grid top" colspan="3">
                    <?php
                    for($i = 0; $i < count($strategy_management); $i++):
                    echo $strategy_management[$i]["value"] . "<br />";
                    endfor;
                    ?>
                </td>
            </tr>
            
        </table>
</div>
    

</body>
</html>