<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- content Start -->
    <main id="content">
        <section class="success">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">회원가입</h3>
                </div>
                <div class="section-content">
                    <nav class="step-list">
                        <ul>
                            <li>
                                <p>Step01<br class="visible-xs"> 약관동의</p>
                            </li>
                            <li>
                                <p>Step02<br class="visible-xs"> 회원정보등록</p>
                            </li>
                            <li class="active">
                                <p>Step03<br class="visible-xs"> 가입완료</p>
                            </li>
                        </ul>
                    </nav>
                    <article>
                        <figure>
                            <img src="/assets/images/member/img_logo.gif" class="img-responsive" alt="logo">
                        </figure>
                        <div class="summary">
                            <small>회원가입이 완료 되었습니다.</small>
                            <strong>화이트타이거즈 회원이<br class="visible-xs"> 되신걸 <i>환영합니다.</i></strong>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>