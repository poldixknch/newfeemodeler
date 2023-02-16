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
        <!--<link href="<?= base_url('asset/css/styles.css') ?>" rel="stylesheet">-->
        <style type="text/css">
			* { margin: 0; padding: 0; }
			html { 
				background: url(<?= base_url('landing_page_img/landing-page-bg-img.png') ?>) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			body{
				background-color:transparent !important;
			}
			#main{
				padding:10% 0;
				width:100%;
			}
			.login-box{
				margin-top:10%;
				background-color:black;
				opacity:0.7;
				color:white;
				border-radius:10px;
				padding-top:15px;
				padding-bottom:15px;
			}
			.btn.btn-lg.btn-primary{
				font-size:15px !important;
			}
			ul li{
				margin-left:20px;
			}
        </style>
    </head>
    <body>
    	<div class="row" id="main">
    			<div class="col-xs-11 col-sm-4 col-xs-offset-1 col-sm-offset-2">
    					<h1>
    						Design your advise fee<br/>
    						model in just 30 mins...
    					</h1>
    					<h3>
    						<ul>
    							Have greater confidence across :
    							<li>Your engagement fee</li>
    							<li>Ongoing service packages</li>
    							<li>How to charge different strategies</li>
    						</ul>
    					</h3>
    					<br />
    					<a href="<?= site_url('main/free') ?>" class="btn btn-lg btn-primary">Click Here to Access Free Calculator</a>
    					<br />
    					<br />
    					<h5>
    						Or inquire about our Free Access calculator, including
    						Save/Load function by emailing info@audere.com.au
    					</h5>
	    		</div>
	    		<div class="col-xs-11 col-sm-2 col-xs-offset-1 col-sm-offset-2 login-box">
	    			<form action="<?= site_url('auth/login') ?>" method="post" role="form" id="loginform">
	                    <div class="form-group">
	                        <label class="control-label">Email</label>
	                        <input name="email" class="form-control input-md" type="text">
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label">Password</label>
	                        <input name="password" class="form-control input-md" type="password">
	                    </div>
	                    <div class="form-group top text-center">
	                        <button type="submit" class="btn form-control input-md btn-primary">Full Access user Login</button>
	                    </div>
	                    <!-- <div class="form-group top text-center">
	                        <button type="submit" class="btn btn-lg btn-primary" onclick="$('#loginform').attr('action','<?= site_url('auth/login/register') ?>').submit()">Sign Up</button>
	                    </div> -->
	                    <div class="form-group top text-center">
	                        <button type="submit" class="btn form-control input-md btn-primary" onclick="$('#loginform').attr('action','<?= site_url('auth/login/forgot') ?>').submit()">Forgot Password</button>
	                    </div>
	                </form>
	                <?php if(isset($message)) echo $message; ?>

	    		</div>
    	</div>
        <!-- script references -->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js ?>"></script>-->
        <script type="text/javascript">var site_url = '<?= site_url() ?>/';</script>
        <script src="<?= base_url('asset/js/jquery-1.11.1.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('asset/js/stewart.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/audere-cloud.js') ?>" type="text/javascript"></script>
    </body>
</html>