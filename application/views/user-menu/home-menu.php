<header class="navbar navbar-bright navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" style="background-color: #A2A200 !important" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= base_url() ?>" class="navbar-brand active">Home</a>
        </div>
        <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav nav-tabs" id="visitor_menu">
                <li>
                    <a href="<?= site_url('main/create') ?>" >BUILD PRICING MODEL</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>" data-placement="top">FILE LIST</a>
                </li>
                <?php if($this->session->userdata('role')=='admin'): ?>
                <li>
                    <a href="<?= site_url('account') ?>" data-placement="top">USER LIST</a>
                </li>
                <li>
                    <a href="<?= site_url('account/add') ?>" data-placement="top">ADD USER</a>
                </li>
                <?php endif; ?>
                <li>
                    <a href="<?= site_url('account/change_password') ?>" data-placement="top">CHANGE PASSWORD</a>
                </li>
                <li>
                    <a href="<?= site_url('auth/login/logout') ?>" data-placement="top">LOGOUT</a>
                </li>
            </ul>
        </nav>
    </div>
</header>