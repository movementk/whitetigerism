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
        
        <section class="press-list board-list">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">화이트타이거즈 보도자료</h3>
                </div>
                <div class="section-content">
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>제목</option>
                                    <option>제목</option>
                                </select>
                                <input type="text" id="search" class="form-control">
                                <label for="search" class="sr-only">검색</label>
                            </div>
                            <button type="submit" class="btn btn-search">
                                <i class="icon-search">
                                    <span class="sr-only">검색하기</span>
                                </i>
                            </button>
                        </form>
                    </div>
                    <ul class="data-list">
                        <li>
                            <a href="#">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-lg-3">
                                        <p class="item">
                                            <img src="/assets/images/sub/img_datalist_img.jpg" class="img-responsive" alt="보도자료">
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-lg-9">
                                        <div class="details">
                                            <small class="date">2018.01.08</small>
                                            <h3 class="title">방학 중 끼니 굶지 마세요. 화이트 타이거즈 '희망키움!' 지원금 전달</h3>
                                            <p class="summary">
                                                보도자료 내용 보도자료 내용 보도자료 내용 보도자료 내용 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-lg-3">
                                        <p class="item">
                                            <img src="/assets/images/sub/img_datalist_img.jpg" class="img-responsive" alt="img_datalist_img.jpg">
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-lg-9">
                                        <div class="details">
                                            <small class="date">2018.01.08</small>
                                            <h3 class="title">방학 중 끼니 굶지 마세요. 화이트 타이거즈 '희망키움!' 지원금 전달</h3>
                                            <p class="summary">
                                                보도자료 내용 보도자료 내용 보도자료 내용 보도자료 내용 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-lg-3">
                                        <p class="item">
                                            <img src="/assets/images/sub/img_datalist_img.jpg" class="img-responsive" alt="보도자료">
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-lg-9">
                                        <div class="details">
                                            <small class="date">2018.01.08</small>
                                            <h3 class="title">방학 중 끼니 굶지 마세요. 화이트 타이거즈 '희망키움!' 지원금 전달</h3>
                                            <p class="summary">
                                                보도자료 내용 보도자료 내용 보도자료 내용 보도자료 내용 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-lg-3">
                                        <p class="item">
                                            <img src="/assets/images/sub/img_datalist_img.jpg" class="img-responsive" alt="img_datalist_img.jpg">
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-lg-9">
                                        <div class="details">
                                            <small class="date">2018.01.08</small>
                                            <h3 class="title">방학 중 끼니 굶지 마세요. 화이트 타이거즈 '희망키움!' 지원금 전달</h3>
                                            <p class="summary">
                                                보도자료 내용 보도자료 내용 보도자료 내용 보도자료 내용 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left">
                                        <span class="sr-only">처음으로</span>
                                    </i>
                                </a>
                            </li>
                            <li class="prev">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left">
                                        <span class="sr-only">이전</span>
                                    </i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="hidden-xs"><a href="#">6</a></li>
                            <li class="hidden-xs"><a href="#">7</a></li>
                            <li class="hidden-xs"><a href="#">8</a></li>
                            <li class="hidden-xs"><a href="#">9</a></li>
                            <li class="hidden-xs"><a href="#">10</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right">
                                        <span class="sr-only">다음</span>
                                    </i>
                                </a>
                            </li>
                            <li class="last">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right">
                                        <span class="sr-only">끝으로</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>  
        
    </main>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>