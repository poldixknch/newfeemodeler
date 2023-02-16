<form action="" class="form-horizontal" method="post" role="form" id="loginform" style="min-height: 205px">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="" class="control-label pull-left col-sm-4">Email :</label>
                        <div class="col-sm-4">
                            <input value="" name="email" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label pull-left col-sm-4">Password :</label>
                        <div class="col-sm-4">
                            <input name="password" class="form-control input-md" type="password">
                        </div>
                    </div>
                    <div class="form-group top text-center">
                        <button type="submit" class="btn btn-lg btn-primary" >ADD USER</button>
                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign In</button>
                        <button type="submit" class="btn btn-lg btn-primary" onclick="$('#loginform').attr('action','<?= site_url('auth/login/forgot') ?>').submit()">Forgot Password</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>