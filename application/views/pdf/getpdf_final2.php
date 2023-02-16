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
        .height-50 {
            height:50px!important;
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
  </head>
  <body>
    <div class="page">
      <?php include "final/header.php"; ?>
    </div>
    <div class="page top-page a2-a3-wrapper">
      <?php include "final/a2-a3.php"; ?>
    </div>
    <div class="page top-page b1-wrapper">
      <?php include "final/b1.php"; ?>
    </div>
    <div class="page top-page b2-wrapper">
      <?php include "final/b2.php"; ?>
    </div>
    <div class="page top-page b3-wrapper">
      <?php include "final/b3.php"; ?>
    </div>
    <div class="page top-page c1-wrapper">
      <?php include "final/c1.php"; ?>
    </div>
    <div class="page top-page c2-wrapper">
      <?php include "final/c2.php"; ?>
    </div>
    <div class="page top-page c3-wrapper">
      <?php include "final/c3.php"; ?>
    </div>
  </body>
</html>
