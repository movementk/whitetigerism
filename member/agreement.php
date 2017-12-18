<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- content Start -->
    <main id="content">
        <section class="agreement">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">회원가입</h3>
                </div>
                <div class="section-content">
                    <nav class="step-list">
                        <ul>
                            <li class="active">
                                <p>Step01<br class="visible-xs"> 약관동의</p>
                            </li>
                            <li>
                                <p>Step02<br class="visible-xs"> 회원정보등록</p>
                            </li>
                            <li>
                                <p>Step03<br class="visible-xs"> 가입완료</p>
                            </li>
                        </ul>
                    </nav>
                    <form action="#">
                        <article class="terms">
                            <h4 class="article-title">이용약관</h4>
                            <div class="article-content">
                                이용약관 내용
                            </div>
                            <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                        </article>
                        <article class="privacy">
                            <h4 class="article-title">개인정보처리방침</h4>
                            <div class="article-content">
                                개인정보처리 방침 내용
                            </div>
                            <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                        </article>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <article class="join-box general-join">
                                    <figure>
                                        <img src="/assets/images/member/img_general_join.gif" alt="">
                                        <figcaption>
                                            <strong>일반 회원가입하기</strong>
                                            <p>화이트타이거즈 일반회원<br> 전용 서비스를 이용하실수 있습니다</p>
                                        </figcaption>
                                    </figure>
                                    <div class="btn-area">
                                        <p>
                                            <button type="submit" class="btn btn-sms btn-gray">가입하기</button>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <article class="join-box simple-join">
                                    <figure>
                                        <img src="/assets/images/member/img_simple_join.gif" alt="">
                                        <figcaption>
                                            <strong>간편 회원가입하기</strong>
                                            <p>기존에 사용하시는 계정으로<br> 간단하게 회원가입 하세요</p>
                                        </figcaption>
                                    </figure>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-link" role="button">
                                                <span class="facebook">
                                                    <img src="/assets/images/member/icon_facebook.gif" alt="페이스북">
                                                </span>
                                                페이스북으로 가입
                                            </a>
                                            <a href="#" class="btn btn-link" role="button">
                                                <span class="naver">
                                                    <img src="/assets/images/member/icon_naver.gif" alt="네이버">
                                                </span>
                                                네이버로 가입
                                            </a>
                                            <a href="#" class="btn btn-link" role="button">
                                                <span class="google">
                                                    <img src="/assets/images/member/icon_google.gif" alt="구글">
                                                </span>
                                                구글로 가입
                                            </a>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>