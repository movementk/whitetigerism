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
                        <li>
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
                        <li class="active">
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
        
        <section class="press-view">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">화이트타이거즈 보도자료</h3>
                </div>
                <div class="section-content">
                    <article class="board-view">
                        <div class="article-header">
                            <h3 class="title">게시판 제목부분 입니다.</h3>
                            <ul class="writer-info">
                                <li>
                                    <dl>
                                        <dt>작성자</dt>
                                        <dd>히딩크</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>작성일</dt>
                                        <dd>2018.01.012</dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <div class="view-content">
                                <figure>
                                    <img src="/assets/images/sub/img_view_content.jpg" class="img-responsive" alt="">
                                </figure>
                            </div>
                            <div class="attach-area">
                                <dl>
                                    <dt>첨부파일</dt>
                                    <dd>
                                        <a href="#">첨부된 파일명.jpg</a>
                                        <a href="#">첨부된 파일명.jpg</a>
                                        <a href="#">첨부된 파일명.jpg</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="prev-next-link">
                            <ul>
                                <li>
                                    <dl>
                                        <dt>이전글</dt>
                                        <dd>
                                            <a href="#">게시판 제목</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>다음글</dt>
                                        <dd>
                                            <a href="#">게시판 제목 게시판 제목 게시판 제목 게시판 제목 게시판 제목 게시판 제목 게시판 제목 게시판 제목 게시판 제목 게시판 제목 게시판 제목</a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-gray" role="button">수정</a>
                                <a href="#" class="btn btn-sm btn-gray" role="button">삭제</a>
                                <a href="#" class="btn btn-sm btn-black" role="button">목록</a>
                            </p>
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