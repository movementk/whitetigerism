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
                        <li>
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
                        <li class="active">
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
        <section class="location">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">화이트타이거즈 오시는길</h3>
                </div>
                <div class="section-content">
                    <div class="maps">
                        <img src="/assets/images/introduction/img_map.jpg" class="img-responsive" alt="오시는길">
                    </div>
                    <div class="table-wrap">
                        <table class="table location">
                            <tbody>
                                <tr>
                                    <th>주소</th>
                                    <td>
                                        서울특별시 강남구 선릉로138길 34A동 103호(청담동,아드리안 빌라)
                                    </td>
                                </tr>
                                <tr>
                                    <th>전화번호</th>
                                    <td>
                                        <i class="icon-phone"></i>000-000-0000
                                    </td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td>
                                        <i class="icon-fax"></i>000-000-0000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>        
        
    </main>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>