<header class="header style2 navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?= base_url('') ?>">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo" style="width: 130px;">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item"><a <?php if ($this->uri->segment(1) == "home") {
                                                            echo 'class="active"';
                                                        } ?> href="<?= base_url('home') ?>"><?php echo HOME; ?></a>
                                </li>
                                <li class="nav-item"><a <?php if ($this->uri->segment(1) == "portfolio") {
                                                            echo 'class="active"';
                                                        } ?> href="<?php echo base_url(); ?>portfolio">Event</a></li>
                                <li class="nav-item"><a <?php if ($this->uri->segment(2) == "page") {
                                                            echo 'class="active"';
                                                        } ?> href="<?php echo base_url(); ?>news/page"><?php echo NEWS; ?></a></li>
                                <li class="nav-item"><a <?php if ($this->uri->segment(1) == "download") {
                                                            echo 'class="active"';
                                                        } ?> href="<?php echo base_url(); ?>download">Download</a></li>
                                <li class="nav-item"><a <?php if ($this->uri->segment(1) == "contact") {
                                                            echo 'class="active"';
                                                        } ?> href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
                            </ul>
                            <div class="sl-nav" style="margin-left: 40px;">
                                <ul>
                                    <li>English <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        <div class="triangle"></div>
                                        <ul>
                                            <li><i class="sl-flag flag-idn">
                                                    <div id="germany"></div>
                                                </i> <span class="active">English</span></li>
                                            <li><i class="sl-flag flag-usa">
                                                    <div id="germany"></div>
                                                </i> <span>Indonesia</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>