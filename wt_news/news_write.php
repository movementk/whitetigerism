<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/news.css">
</head>
<body class="wt-news">
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
                        <li class="active">
                            <a href="/wt_news/news_list.php">
                                <p class="visible-xs s-title">뉴스</p>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        NEWS
                                    </p>
                                    <small class="visible-lg">01</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/wt_news/press_list.php">
                                <span class="visible-xs s-title">자료</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        MEDIA
                                    </p>
                                    <small class="visible-lg">02</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <section class="news-write board-write">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">화이트타이거즈 뉴스</h3>
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