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
        <script type="text/javascript">
            window.config = {
                siteUrl: "<?php echo site_url(); ?>"
            }
        </script>
        <script src="<?= base_url('asset/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('asset/js/moment.min.js') ?>"></script>
        <script src="<?= base_url('asset/js/numeral.min.js') ?>"></script>
        <script src="<?= base_url('asset/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/jquery.ui.touch-punch.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/app.js'); ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/directives/common.js'); ?>" type="text/javascript"></script>
        <?php
        if(isset($custom_js)) {
            foreach($custom_js as $js) {
                $src = base_url('asset/js/' . $js . '.js');
                echo "<script src='$src' type='text/javascript'></script>" . PHP_EOL;
            }
        }
        ?>
    </body>
</html>