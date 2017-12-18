<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- content Start -->
    <main id="content">
        <div class="login">
            <div class="container">
                <form action="#">
                    <article class="general-login">
                        <div class="article-header">
                            <h2>로그인</h2>
                        </div>
                        <div class="article-content">
                            <div class="form-group">
                                <label for="u-id" class="sr-only">아이디 입력</label>
                                <input type="text" id="u-id" class="form-control" placeholder="아이디">
                            </div>
                            <div class="form-group">
                                <label for="u-pw" class="sr-only">비밀번호 입력</label>
                                <input type="password" id="u-pw" class="form-control" placeholder="비밀번호">
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-gray">로그인</button>
                                </p>
                            </div>
                        </div>
                        <div class="confirm">
                            <ul>
                                <li><a href="/member/agreement.php">회원가입</a></li>
                                <li><a href="#"  data-toggle="modal" data-target="#id-pw-confirm">아이디/비밀번호 찾기</a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="simple-login">
                        <div class="article-header">
                            <h2>간편 로그인</h2>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-link">
                                    <span class="facebook"><img src="/assets/images/member/icon_facebook.gif" alt="페이스북"></span>
                                    페이스북으로 로그인
                                </a>
                                <a href="#" class="btn btn-link">
                                    <span class="naver"><img src="/assets/images/member/icon_naver.gif" alt="네이버"></span>
                                    네이버로 로그인
                                </a>
                                <a href="#" class="btn btn-link">
                                    <span class="google"><img src="/assets/images/member/icon_google.gif" alt="구글"></span>
                                    구글로 로그인
                                </a>
                            </p>
                        </div>
                    </article>
                </form>
            </div>
        </div>
    </main>
    
    <!-- 아이디 및 비번 찾기 Modal Popup -->
    <div class="confirm-modal modal fade" id="id-pw-confirm" tabindex="-1" role="dialog" aria-labelledby="id-pw-confirm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">회원정보 찾기</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="email" id="e-mail" class="form-control" placeholder="E-mail 주소">
                        <label for="e-mail" class="sr-only">이메일 주소</label>
                        <p class="summary">
                            회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br class="hidden-xs">
                            해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
                        </p>
                    </div>
                    <div class="capcha">
                        <div class="capcha-box">
                            <input type="text" id="capcha" class="form-control">
                            <label for="capcha" class="sr-only">자동등록방지</label>
                            <p class="capcha-num">686109</p>
                        </div>
                        <p class="summary">
                            자동등록방지 숫자를 순서대로 입력하세요.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">창닫기</button>
                    <button type="submit" class="btn btn-primary">확인</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>