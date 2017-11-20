<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduction.css">
</head>
<body class="introduction">
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
                            <a href="/introduction/introduce.php">
                                <p class="visible-xs s-title">소개</p>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        ABOUT
                                    </p>
                                    <small class="visible-lg">01</small>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="/introduction/group.php">
                                <span class="visible-xs s-title">조직도</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        ORGANIZATION
                                    </p>
                                    <small class="visible-lg">02</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/introduction/brand.php">
                                <span class="visible-xs s-title">브랜드</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        BRAND
                                    </p>
                                    <small class="visible-lg">03</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/introduction/location.php">
                                <span class="visible-xs s-title">오시는 길</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        LOCATION
                                    </p>
                                    <small class="visible-lg">04</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <!-- Section -->
        <section class="group">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">화이트타이거즈 조직도</h3>
                </div>
                <div class="section-content">
                    <figure>
                        <img src="/assets/images/introduction/img_xs_group.png" class="img-responsive visible-xs" alt="조직도">
                        <img src="/assets/images/introduction/img_lg_group.png" class="img-responsive hidden-xs" alt="조직도">
                        <figcaption class="sr-only">
                            <ol>
                                <li>
                                    <h1>단장(정찬우)</h1>
                                </li>
                                <li>
                                    <h2>부단장</h2>
                                    <ul>
                                        <li>
                                            <h3>연예인 팀장</h3>
                                            <ul>
                                                <li>연예인</li>
                                                <li>슈퍼모델</li>
                                                <li>아나운서</li>
                                                <li>스타운동선수</li>
                                            </ul>
                                        </li>
                                        <li>지원팀</li>
                                        <li>
                                            <h3>일반인 팀장</h3>
                                            <ul>
                                                <li>대학 응원단</li>
                                                <li>일반인.학생</li>
                                                <li>치어리딩</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>        
        
    </main>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>