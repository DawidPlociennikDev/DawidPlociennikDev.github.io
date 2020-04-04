<?php if(isset($_SESSION['global_alert_success'])): ?>
    <div class="alert alert-success alert-dismissible global_alert" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
        </button> 
        <?php echo $_SESSION['global_alert_success']; ?>
    </div>
<?php endif; ?> 
<?php if(isset($_SESSION['global_alert_error'])): ?>
    <div class="alert alert-danger alert-dismissible global_alert" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
        </button> 
        <?php echo $_SESSION['global_alert_error']; ?>
    </div>
<?php endif; ?> 
    <div class="header-top-area">
        <div class="container">
            <div class="row menu">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="<?= base_url(''); ?>" class="logo_url">
                            <img src="<?= assetsUrl(); ?>img/logo/logoPWSZ.png" alt="" />
                            <span class="ml-2">PWSZ Legnica</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="<?= base_url('synchronize'); ?>" class="nav-link dropdown-toggle" title="Synchronizuj bazę danych">
                                    <span><i class="fas fa-sync-alt"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" href="<?= base_url(); ?>">Home</a></li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="google-map.html">Google Map</a></li>
                                        <li><a href="data-map.html">Data Maps</a></li>
                                        <li><a href="code-editor.html">Code Editor</a></li>
                                        <li><a href="image-cropper.html">Images Cropper</a></li>
                                        <li><a href="wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="bar-charts.html">Bar Charts</a></li>
                                        <li><a href="line-charts.html">Line Charts</a></li>
                                        <li><a href="area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Normal Table</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="form-components.html">Form Components</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="notification.html">Notifications</a>
                                        </li>
                                        <li><a href="alert.html">Alerts</a>
                                        </li>
                                        <li><a href="modals.html">Modals</a>
                                        </li>
                                        <li><a href="buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="accordion.html">Accordion</a>
                                        </li>
                                        <li><a href="dialog.html">Dialogs</a>
                                        </li>
                                        <li><a href="popovers.html">Popovers</a>
                                        </li>
                                        <li><a href="tooltips.html">Tooltips</a>
                                        </li>
                                        <li><a href="dropdown.html">Dropdowns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Contact</a>
                                        </li>
                                        <li><a href="invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="typography.html">Typography</a>
                                        </li>
                                        <li><a href="color.html">Color</a>
                                        </li>
                                        <li><a href="login-register.html">Login Register</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li <?php if($this->uri->segment(1) == 'admin'){echo 'class="active"';} ?>><a href="<?= base_url('admin'); ?>"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li <?php if($this->uri->segment(1) == 'parametrs'){echo 'class="active"';} ?>><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-app"></i> Parametry</a>
                        </li>
                        <li <?php if($this->uri->segment(1) == 'articles'){echo 'class="active"';} ?>><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Wpisy</a>
                        </li>
                        <li <?php if($this->uri->segment(1) == 'statistics'){echo 'class="active"';} ?>><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Statystyki</a>
                        </li>
                        <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Ustawienia</a>
                        </li>
                        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-support"></i> Konto</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($this->uri->segment(1) == 'parametrs'){echo 'active';} ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?= base_url('parametrs'); ?>" 
                                        <?php if($this->uri->segment(1) == 'parametrs' && $this->uri->segment(3) == ''){echo 'class="active_color"';} ?>>
                                        <strong>Zobacz wszystkie</strong>
                                    </a>
                                </li>
                                <?php foreach ($parametrs as $v): ?>
                                <li>
                                    <a href="<?= base_url('parametrs/form/update/'.$v->id); ?>" 
                                        <?php if($this->uri->segment(4) == $v->id && $this->uri->segment(1) == 'parametrs'){echo 'class="active_color"';} ?>>
                                        <?= $v->title; ?>
                                    </a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($this->uri->segment(1) == 'articles'){echo 'active';} ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?= base_url('articles'); ?>" 
                                        <?php if($this->uri->segment(1) == 'articles' && $this->uri->segment(3) == ''){echo 'class="active_color"';} ?>>
                                        <strong>Zobacz wszystkie</strong>
                                    </a>
                                </li>
                                <?php foreach ($articles as $v): ?>
                                <li>
                                    <a href="<?= base_url('articles/form/update/'.$v->id); ?>" 
                                        <?php if($this->uri->segment(4) == $v->id && $this->uri->segment(1) == 'articles'){echo 'class="active_color"';} ?>>
                                        <?= $v->title; ?>
                                    </a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($this->uri->segment(1) == 'statistics'){echo 'active';} ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('statistics'); ?>"
                                    <?php if($this->uri->segment(1) == 'statistics' && $this->uri->segment(2) == ''){echo 'class="active_color"';} ?>>
                                    <strong>Zobacz aktualne</strong>
                                </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('statistics/yesterday'); ?>" <?php if($this->uri->segment(2) == 'yesterday' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                        Z wczoraj
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('statistics/lastweek'); ?>" <?php if($this->uri->segment(2) == 'lastweek' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                        Z poprzedniego tygodnia
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('statistics/lastmonth'); ?>" <?php if($this->uri->segment(2) == 'lastmonth' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                        Z poprzedniego miesiąca
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('statistics/owntime'); ?>" <?php if($this->uri->segment(2) == 'owntime' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                        Z własnego przedziału czasowego
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="normal-table.html">Strona</a>
                                </li>
                                <li><a href="data-table.html">SEO</a>
                                </li>
                                <li><a href="data-table.html">Polityka prywatności</a>
                                </li>
                                <li><a href="data-table.html">Informacja cookies</a>
                                </li>
                                <li><a href="data-table.html">Kody autoryzujące google</a>
                                </li>
                                <li><a href="data-table.html">Kody w sekcji HEAD</a>
                                </li>
                                <li><a href="data-table.html">Kody w sekcji FOOTER</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Ustawienia konta</a>
                                </li>
                                <li><a href="form-components.html">Dodaj nowe</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->