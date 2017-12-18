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
                            <a href="/cheer/entertainer_cheer.php">
                                <span class="visible-xs s-title">응원</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        CELEBRITY
                                    </p>
                                    <small class="visible-lg">01</small>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="/cheer/team.php">
                                <p class="visible-xs s-title">팀</p>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        TEAM
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
                        <li>
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
        
        <section class="gallery-write team-write">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">팀 화이트타이거즈</h3>
                </div>
                <div class="section-content">
                    <div class="table-wrap">
                        <form action="#">
                            <table class="table write">
                                <tbody>
                                    <tr>
                                        <th><label for="u-name">작성자</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-pw">비밀번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="u-pw" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-subject">제목</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="v-align"><label for="u-content">내용</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>첨부파일</th>
                                        <td class="attach">
                                            <div class="form-group">
                                                <input type="file" id="attach" class="form-control">
                                                <label for="attach">찾아보기</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-gray" role="button">취소</a>
                                    <button type="submit" class="btn btn-md btn-black">완료</button>
                                </p>
                            </div>
                        </form>
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