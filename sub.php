<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css"><!-- 폴더별 CSS sub.css 밑 링크 추가 -->
</head>
<body class="introduce"> <!-- 폳더별 body 에 Class 추가 -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- content Start --->
    <main id="content" class="sub"> <!-- 페이지 명 클래스 추가 -->
        <!-- page-header -->
        <div class="page-header">
            <div class="sub-visual">
                <h2 class="page-title">YOU GO<br class="visible-xs"> WE GO!</h2>
            </div>
            <!-- lnb 메뉴 -->
            <nav class="lnb-nav">
                <div class="container">
                    <ul>
                        <li class="active">
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
        
        <!-- Container 디자인 여백업이 이미지나 효과가 100% 일때 사용 안함 -->
        <div class="container"> 
            
        </div>
        
        <!-- Section -->
        <section class="">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">화이트타이거즈 소개</h3>
                </div>
                <div class="section-content">
                   
                    <div style="padding-top: 60px;"></div>
                    <!-- 테이븝 -->
                    <div class="table-wrap">
                        <table class="table">
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
                                        000-000-0000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>        
        
    </main>
    <!-- //content End --->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>