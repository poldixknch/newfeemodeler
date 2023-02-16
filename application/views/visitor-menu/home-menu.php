<header class="navbar navbar-bright navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" style="background-color: #A2A200 !important" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= base_url() ?>" class="navbar-brand active" >Home</a>
        </div>
        <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav nav-tabs" id="visitor_menu">
                <li>
                    <a href="<?= site_url('main/free') ?>" >FREE VERSION</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>" data-placement="top">LOGIN</a>
                </li>
            </ul>
        </nav>
    </div>
</header>