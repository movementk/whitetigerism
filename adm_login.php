<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/adm.css">
</head>
<body class="adm"><!-- 폳더별 body 에 Class 추가 -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- content Start -->
    <main id="content" class="adm-login"> <!-- 페이지 명 클래스 추가 -->
        <article>
            <div class="container">
                <div class="article-header">
                    <h3>관리자 로그인</h3>
                </div>
                <div class="article-content">
                    <form action="#">
                        <div class="form-group">
                            <label for="u-id" class="sr-only">아이디</label>
                            <input type="text" id="u-id" class="form-control" placeholder="아이디">
                        </div>
                        <div class="form-group">
                            <label for="u-pw" class="sr-only">비밀번호</label>
                            <input type="password" id="u-pw" class="form-control" placeholder="비밀번호">
                        </div>
                        <p class="btn-login">
                            <button type="submit" class="btn btn-default btn-black">로그인</button>
                        </p>
                    </form>
                </div>
            </div>
        </article>        
    </main>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>