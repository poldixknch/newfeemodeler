<?php
$strategy_variation = isset($strategy_variation) ? $strategy_variation : array();
$strategy_management = isset($strategy_management) ? $strategy_management : array();
?>
<html><head>
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
      .page {height:28cm !important;}
      .page-old{
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
      .top-page{
        padding-top:50px!important;
      }
      .border-line td{
        border: 1px solid #ddd;
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
      .blue {
          background:#000044
     }
     .white {
         color:#fff;
     }

  </style>
</head><body>
<div class="page">
        <div class="pdf-banner"><img style="width:100%" src="https://staging.feemodeler.com.au/asset/css/images/banner.png"/></div>
          <table style="width:100%;">

            <tr>
                <td class="grid bold center" colspan="12">
                    <p style="text-align: right; float:right">
                        <img class="img" src='<?php echo base_url()?>/asset/css/images/logo.png' style="height:50px" alt="">
                    </p>
                </td>
            </tr>
            <tr>
                <td class="grid bold left" colspan="12"><h1 class="none">Your Fee Schedule</h1></td>
            </tr>
            <tr>
                <td class="grid left" colspan="12"><h5 class="none">Created on <?php echo $date ?></h5></td>
            </tr>

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
<div class="page a2-a3-wrapper">

          <table style="width:100%;">

            <tr>
                <td class="grid" colspan="6">
                    <h3 class="none"> Financial Targets</h3>
                    <p for="" class="">These inputs formed the basis for the top-down pricing model, using expenses and
defined profit margin to define revenue target upon which cost recovery is based.</p>
                </td>
                <td class="grid" colspan="6">
                    <h3 class="none">Final Hourly Rates</h3>
                    <p for="" class="">What you need to charge on average per hour of client-related work to hit
profit targets</p>
                </td>
            </tr>
            <tr>
                <td class="grid" colspan="3">Total expenses from last year</td>
                <td class="grid" colspan="2">test</td>
                <td class="grid" colspan="1">&nbsp;</td>
                <td class="grid" colspan="3">test</td>
                <td class="grid" colspan="3">test</td>
            </tr>
            <tr>
                <td class="grid" colspan="3">For transactional advice (inclusive of GST)</td>
                <td class="grid" colspan="2">test</td>
                <td class="grid" colspan="1">&nbsp;</td>
                <td class="grid" colspan="3">test</td>
                <td class="grid" colspan="3">test</td>
            </tr>

            <tr>
                <td class="grid" colspan="6">&nbsp;</td>
                <td class="grid" colspan="3">test</td>
                <td class="grid" colspan="3">test</td>
            </tr>


                </table>
</div>


<div class="page top-page b1-wrapper">
            <table style="width:100%; top-page">

            <tr>
                <td class="grid bold left top" colspan="12"><h3 class="none">New Client Engagement process (Complex advice / 3 meetings)</h3>
                <p>Approach this by thinking of the most straightforward, “base” client going through this process as efficiently as is reasonable. Do not factor in time for any elements
that may be captured within the Strategic Variations components 2.3). Add notes to outline specifics where possible. Examples of stages are provided, but feel free to
overwrite and add your own.</p>
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
            <tr class="border-line">
               <td class="grid" colspan="4">Pre-meeting engagement</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="4">Notes</td>
               </tr>
           <tr class="border-line">
               <td class="grid" colspan="4">Meeting prepw</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="4">Notes</td>
           </tr>
           <tr class="border-line">
               <td class="grid" colspan="4"> Initial meeting</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="4">Notes</td>
           </tr>
           <tr class="border-line">
               <td class="grid" colspan="4">Initial meeting debrief</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="4">Notes</td>
           </tr>
           </table>
    </div> <!-- end of B1 section -->
    <div class="page top-page b2-wrapper">
            <table style="width:100%; top-page">

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
            <tr class="border-line">
               <td class="grid" colspan="4">Pre-meeting engagement</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="4">Notes</td>
               </tr>
           <tr class="border-line">
               <td class="grid" colspan="4">Meeting prepw</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="4">Notes</td>
           </tr>
           <tr class="border-line">
               <td class="grid" colspan="4"> Initial meeting</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="4">Notes</td>
           </tr>
           <tr class="border-line">
               <td class="grid" colspan="4">Initial meeting debrief</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="4">Notes</td>
           </tr>
           </table>
    </div> <!-- end of B2 section -->
          <div class="page top-page">
            <table style="width:100%; top-page">
            <tr class=" top-page">
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
                <td class="grid left top" colspan="12"><h3 class="none bold">Ongoing Service Analysis - 1:1 Services</h3>
                <label for="" >We started building your ongoing model by analysing the amount of time required to deliver each of your 1:1 services on a per event basis.</label>
                </td>
            </tr>
            <tr class="blue top">
                <td class="grid center" colspan="4"><label for="" class="bold white">1-to 1 Service offerings</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Advice Providers time (mins)</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Advice Producers</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Admin</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Other costs</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Service fee (not incl. GST)</label></td>
                <td class="grid center" colspan="3"><label for="" class="bold white">Notes</label></td>
            </tr>
            <tr class="border-line">
               <td class="grid" colspan="4">Complete Strategy Review</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="1">Service fee</td>
               <td class="grid " colspan="3">Notes</td>
               </tr>
           <tr class="border-line">
               <td class="grid" colspan="4">Simple performance review</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="1">Service fee</td>
               <td class="grid " colspan="3">Notes</td>
           </tr>
           <tr class="border-line">
               <td class="grid" colspan="4"> Insurance review</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="1">Service fee</td>
               <td class="grid " colspan="3">Notes</td>
           </tr>
           <tr class="border-line">
               <td class="grid" colspan="4">  Touch-base phone call</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="1">Service fee</td>
               <td class="grid " colspan="3">Notes</td>
           </tr>
           </table>
                </div>
           <div class="page top-page">
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
                <td class="grid bold left" colspan="12"><h3 class="none">Ongoing Service Analysis - 1:many Services</h3>
                </td>
            </tr>
            <tr class="blue top">
                <td class="grid center" colspan="4"><label for="" class="bold white">1-to-many Service offerings</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Advice Providers time (mins)</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Advice Producers</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Admin</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Other costs</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">People</label></td>
                <td class="grid center" colspan="1"><label for="" class="bold white">Cost per person (not incl GST)</label></td>
                <td class="grid center" colspan="2"><label for="" class="bold white">Notes</label></td>
            </tr>
            <tr class="border-line">
               <td class="grid" colspan="4">Complete Strategy Review</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="1">People</td>
               <td class="grid " colspan="1">Service fee</td>
               <td class="grid " colspan="2">Notes</td>
               </tr>
           <tr class="border-line">
               <td class="grid" colspan="4">Simple performance review</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="1">People</td>
               <td class="grid " colspan="1">Service fee</td>
               <td class="grid " colspan="2">Notes</td>
           </tr>
           <tr class="border-line">
               <td class="grid" colspan="4"> Insurance review</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="1">People</td>
               <td class="grid " colspan="1">Service fee</td>
               <td class="grid " colspan="2">Notes</td>
           </tr>
           <tr class="border-line">
               <td class="grid" colspan="4">  Touch-base phone call</td>
               <td class="grid " colspan="1">time (mins)</td>
               <td class="grid " colspan="1">Advice Value</td>
               <td class="grid " colspan="1">Admin Value</td>
               <td class="grid " colspan="1">Other costs</td>
               <td class="grid " colspan="1">People</td>
               <td class="grid " colspan="1">Service fee</td>
               <td class="grid " colspan="2">Notes</td>
           </tr>


        </table>
</div>
</body></html>
