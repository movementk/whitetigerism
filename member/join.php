<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- content Start -->
    <main id="content">
        <section class="join">
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
                            <li class="active">
                                <p>Step02<br class="visible-xs"> 회원정보등록</p>
                            </li>
                            <li>
                                <p>Step03<br class="visible-xs"> 가입완료</p>
                            </li>
                        </ul>
                    </nav>
                    <form action="#">
                        <div class="table-wrap">
                            <p class="required">표시는 필수입력사항입니다</p>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th class="required"><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="required"><label for="u-email">이메일</label></th>
                                        <td class="e-mail">
                                            <div class="form-group">
                                                <input type="text" id="u-email" class="form-control">
                                                @
                                                <input type="text" id="email-domain" class="form-control">
                                                <label for="email-domain" class="sr-only">도메인</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="required"><label for="u-id">아이디</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-id" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="required"><label for="u-pw">비밀번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="u-pw" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="required"><label for="confirm-pw">비밀번호 확인</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="confirm-pw" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="required"><label for="u-tel1">전화번호</label></th>
                                        <td class="phone">
                                            <div class="form-group">
                                                <input type="text" id="u-tel1" class="form-control">
                                                -
                                                <input type="text" id="u-tel2" class="form-control">
                                                <label for="u-tel2" class="sr-only">전화번호</label>
                                                -
                                                <input type="text" id="u-tel3" class="form-control">
                                                <label for="u-tel3" class="sr-only">전화번호</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="required"><label for="u-phone1">핸드폰번호</label></th>
                                        <td class="phone">
                                            <div class="form-group">
                                                <input type="text" id="u-phone1" class="form-control">
                                                -
                                                <input type="text" id="u-phone2" class="form-control">
                                                <label for="u-phone2" class="sr-only">핸드폰번호</label>
                                                -
                                                <input type="text" id="u-phone3" class="form-control">
                                                <label for="u-phone3" class="sr-only">핸드폰번호</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="required"><label for="u-addr">주소</label></th>
                                        <td class="addr">
                                            <div class="form-group">
                                                <input type="text" id="u-addr" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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