<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/cheer.css">
</head>
<body class="cheer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- content Start -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="sub-visual">
                <h2 class="page-title">YOU GO<br class="visible-xs"> WE GO!</h2>
            </div>
            <!-- lnb 메뉴 -->
            <nav class="lnb-nav">
                <div class="container">
                    <ul>
                        <li>
                            <a href="/cheer/team.php">
                                <p class="visible-xs s-title">팀</p>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        TEAM
                                    </p>
                                    <small class="visible-lg">01</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/cheer/entertainer_cheer.php">
                                <span class="visible-xs s-title">응원</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        CELEBRITY
                                    </p>
                                    <small class="visible-lg">02</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/cheer/wd_list.php">
                                <span class="visible-xs s-title">하얀악마</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        PUBLIC
                                    </p>
                                    <small class="visible-lg">03</small>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="/cheer/sponsor_list.php">
                                <span class="visible-xs s-title">후원회</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        SUPPORT
                                    </p>
                                    <small class="visible-lg">04</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <section class="sponsor-list">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">후원회/협력도시</h3>
                </div>
                <div class="section-content">
                    <ul class="row">
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <div class="sponsor-info">
                                <div class="company-logo">
                                    <img src="/assets/images/cheer/logo_sponsor01.gif" class="img-responsive" alt="후원사">
                                </div>
                                <p class="details">Samsung Electric</p>
                            </div>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <div class="sponsor-info">
                                <div class="company-logo">
                                    <img src="/assets/images/cheer/logo_sponsor02.gif" class="img-responsive" alt="후원사">
                                </div>
                                <p class="details">Samsung Techwin</p>
                            </div>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <div class="sponsor-info">
                                <div class="company-logo">
                                    <img src="/assets/images/cheer/logo_sponsor03.gif" class="img-responsive" alt="후원사">
                                </div>
                                <p class="details">Rockwell Automation</p>
                            </div>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <div class="sponsor-info">
                                <div class="company-logo">
                                    <img src="/assets/images/cheer/logo_sponsor04.gif" class="img-responsive" alt="후원사">
                                </div>
                                <p class="details">YASKAWA Electric</p>
                            </div>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <div class="sponsor-info">
                                <div class="company-logo">
                                    <img src="/assets/images/cheer/logo_sponsor05.gif" class="img-responsive" alt="후원사">
                                </div>
                                <p class="details">Semikron</p>
                            </div>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <div class="sponsor-info">
                                <div class="company-logo">
                                    <img src="/assets/images/cheer/logo_sponsor06.gif" class="img-responsive" alt="후원사">
                                </div>
                                <p class="details">Hyundai Heavy Industry</p>
                            </div>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <div class="sponsor-info">
                                <div class="company-logo">
                                    <img src="/assets/images/cheer/logo_sponsor07.gif" class="img-responsive" alt="후원사">
                                </div>
                                <p class="details">Larsen &amp; Toubro</p>
                            </div>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <div class="sponsor-info">
                                <div class="company-logo">
                                    <img src="/assets/images/cheer/logo_sponsor08.gif" class="img-responsive" alt="후원사">
                                </div>
                                <p class="details">Fujielectrics</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
    </main>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>