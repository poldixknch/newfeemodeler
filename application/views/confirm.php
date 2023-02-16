<form action="<?= current_url().'/confirmed' ?>" class="form-horizontal" method="post" role="form" id="loginform" style="min-height: 205px">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group top text-center">
                        <H1>ARE YOU SURE ?</H1>
                        <button type="submit" class="btn btn-lg btn-primary">Yes</button>
                        <a class="btn btn-lg btn-primary" href="javascript:window.history.back()">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>