<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- content Start -->
    <main id="content">
        <div class="container">
            <section class="member-leave">
                <div class="section-header">
                    <h3 class="section-title">회원탈퇴</h3>
                </div>
                <div class="section-content">
                    <article>
                        <div class="article-header">
                            <h4>회원탈퇴 안내</h4>
                        </div>
                        <div class="article-content">
                            <p>
                                고객님께서 회원 탈퇴를 원하신다니 저희 서비스가 많이 부족하고 미흡했나 봅니다.<br>
                                불편하셨던 점이나 불만사항을 알려주시면 적극 반영해서 고객님의 불편함을 해결해 드리도록 노력하겠습니다.<br>
                                아울러 회원 탈퇴시의 아래 사항을 숙지하시기 바랍니다.
                            </p>
                            <p>
                                1. 회원 탈퇴 시 고객님의 정보는 개인정보 보호에 관한 법률에 의거한 고객정보 보호 정책에 따라 관리 됩니다.
                            </p>
                            <p class="attention">
                                ※ 간혹 비밀번호가 맞지 않는다고 나오시는 고객님께서는 1:1 문의에 남겨주시면 고객센터에서 신속히 처리하여 드리겠습니다.
                            </p>
                        </div>
                    </article>
                    <form action="#">
                        <div class="table-wrap">
                            <h4>회원 탈퇴하기</h4>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>회원 아이디</th>
                                        <td>movementk</td>
                                    </tr>
                                    <tr>
                                        <th class="v-align"><label for="cause">탈퇴 사유</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="cause" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-sm btn-blue">회원탈퇴</button>
                                <a href="#" class="btn btn-sn btn-gray" role="button">취소</a>
                            </p>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>