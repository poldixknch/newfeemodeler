<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Fee Model Calculator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js') ?>"></script>
        <![endif]-->
        <link href="<?= base_url('asset/css/styles.css') ?>" rel="stylesheet">
    </head>
    <body>
        
        <?php include $menu;  ?>
        
        <div id="masthead">  
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Fee Model Calculator
                            <p class="lead"></p>
                        </h1>
                    </div>
                    <div class="col-md-4">
                        <div class="well"> 
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <a href="//www.audere.com.au">
                                        <img src="<?= base_url('asset/css/images/logo.png') ?>" style="height:100px" alt="">
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div><!-- /cont -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include APPPATH.'views/part/top-spacer.php'; ?>
                    </div>
                </div> 
            </div><!-- /cont -->

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include APPPATH.'views/'.$page.'.php'; ?>
                </div><!--/col-12-->
            </div>
        </div>


        <hr>
        <hr>

        <hr>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-inline">
                            <li><i class="icon-facebook icon-2x"></i></li>
                            <li><i class="icon-twitter icon-2x"></i></li>
                            <li><i class="icon-google-plus icon-2x"></i></li>
                            <li><i class="icon-pinterest icon-2x"></i></li>
                        </ul>

                    </div>
                    <div class="col-sm-6">
                        <p class="pull-right">Built with <i class="icon-heart-empty"></i> at <a href="https://www.audere.com.au">audere</a></p>      
                    </div>
                </div>
            </div>
        </footer>
        <!-- script references -->
          <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js ?>"></script>-->
        <script type="text/javascript">var site_url = '<?= site_url() ?>/';</script>
        <script src="<?= base_url('asset/js/angular.1.8.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/jquery-1.11.1.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('asset/js/moment.min.js') ?>"></script>
        <script src="<?= base_url('asset/js/jstat.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/numeral.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/jquery-calx-2.0.0.js') ?>"></script>
        <script src="<?= base_url('asset/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/jquery.ui.touch-punch.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/stewart.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/audere-cloud.js') ?>" type="text/javascript"></script>
    </body>
</html>