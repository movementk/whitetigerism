<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css"><!-- 폴더별 CSS sub.css 밑 링크 추가 -->
</head>
<body class="introduce"><!-- 폳더별 body 에 Class 추가 -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- content Start -->
    <main id="content" class="sub"> <!-- 페이지 명 클래스 추가 -->
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
                            <a href="#">
                                <p class="visible-xs s-title">소개</p>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        ABOUT
                                    </p>
                                    <small class="visible-lg">01</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="visible-xs s-title">조직도</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        ORGANIZATION
                                    </p>
                                    <small class="visible-lg">02</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="visible-xs s-title">브랜드</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        BRAND
                                    </p>
                                    <small class="visible-lg">03</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="visible-xs s-title">오시는 길</span>
                                <div class="hidden-xs">
                                    <span class="stick"></span>
                                    <p>
                                        WHITETIGERS<br>
                                        LOCATION
                                    </p>
                                    <small class="visible-lg">04</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <!-- Container 디자인 여백업이 이미지나 효과가 100% 일때 사용 안함 -->
        <div class="container"> 
            
        </div>
        
        <!-- Section -->
        <section class="">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">화이트타이거즈 소개</h3>
                </div>
                <div class="section-content">
                  
                    <p class="guide-title">검색폼</p>
                    <!-- Search -->
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
                   
                    <p class="guide-title">테이블</p>
                    <!-- 테이븝 -->
                    <div class="table-wrap">
                        <!-- 오시는길 테이블 -->
                        <table class="table location">
                            <tbody>
                                <tr>
                                    <th>주소</th>
                                    <td>
                                        서울특별시 강남구 선릉로138길 34A동 103호(청담동,아드리안 빌라)
                                    </td>
                                </tr>
                                <tr>
                                    <th>전화번호</th>
                                    <td>
                                        000-000-0000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        
                        <p class="guide-title">게시판 리스트</p>
                        <!-- 게시판 리스트 -->
                        <table class="table list">
                            <tbody>
                                <tr>
                                    <td class="count">123</td>
                                    <td class="subject">
                                        <a href="#">공지사항 내용입니다공지사항 내용입니다공지사항 내용입니다공지사항 내용입니다공지사항 내용입니다공지사항 내용입니다공지사항 내용입니다공지사항 내용입니다공지사항 내용입니다공지사항 내용입니다</a>
                                    </td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <tr>
                                    <td class="count">123</td>
                                    <td class="subject">
                                        <a href="#">공지사항 내용입니다</a>
                                    </td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <tr>
                                    <td class="count">123</td>
                                    <td class="subject">
                                        <a href="#">공지사항 내용입니다</a>
                                    </td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <tr>
                                    <td class="count">123</td>
                                    <td class="subject">
                                        <a href="#">공지사항 내용입니다</a>
                                    </td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        
                        <p class="guide-title">게시판 쓰기</p>
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
                        </form>
                        
                        
                    </div>
                    
                    
                    <p class="guide-title">게시판 뷰</p>
                    <!-- 게시판 뷰 -->
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
                    </article>
                    
                    
                    <p class="guide-title">버튼 리스트</p>
                    <!-- 버튼 리스트 -->
                    <div class="btn-area">
                        <!-- 가장 작은 -->
                        <p>
                            <a href="#" class="btn btn-sm btn-gray" role="button">수정</a>
                            <a href="#" class="btn btn-sm btn-gray" role="button">삭제</a>
                            <a href="#" class="btn btn-sm btn-black" role="button">수정</a>
                        </p>
                        <!-- 중간 -->
                        <p>
                            <a href="#" class="btn btn-md btn-gray" role="button">삭제</a>
                            <a href="#" class="btn btn-md btn-black" role="button">목록</a>
                        </p>
                        <!-- 가장 큰 -->
                        <p>
                            <a href="#" class="btn btn-lg btn-gray" role="button">삭제</a>
                        </p>
                        <p>
                            <a href="#" class="btn btn-lg btn-black" role="button">목록</a>
                        </p>
                    </div>
                    
                    <p class="guide-title">페이징</p>
                    <!-- Pagination -->
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
                    
                    <p class="guide-title">연예인 응원</p>
                    <article class="celebrity-cheer">
                        <ul class="row">
                            <li class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/cheer_img.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            화이트타이거즈 공식
                                            <small>2 months ago</small>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/cheer_img.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            화이트타이거즈 공식
                                            <small>2 months ago</small>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/cheer_img.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            화이트타이거즈 공식
                                            <small>2 months ago</small>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/cheer_img.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            화이트타이거즈 공식
                                            <small>2 months ago</small>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </article>
                    
                    <p class="guide-title">보도자료</p>
                    <article>
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
                        </ul>
                    </article>
                    
                    <p class="guide-title">팀 화이트타이거즈</p>
                    <article class="team-list">
                        <ul class="row">
                            <li class="col-xs-12 col-sm-6 col-md-4">
                                <a href="#">
                                    <p class="item">
                                        <img src="/assets/images/sub/img_team_list.jpg" class="img-responsive" alt="">
                                    </p>
                                    <div class="details">
                                        <p>
                                            연예인 응원팀 내용 들어갑니다 연예인 응원팀 내용 들어갑니다
                                        </p>
                                        <hr>
                                        <small class="date">2017.11.19</small>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-md-4">
                                <a href="#">
                                    <p class="item">
                                        <img src="/assets/images/sub/img_team_list.jpg" class="img-responsive" alt="">
                                    </p>
                                    <div class="details">
                                        <p>
                                            연예인 응원팀 내용 들어갑니다 연예인 응원팀 내용 들어갑니다
                                        </p>
                                        <hr>
                                        <small class="date">2017.11.19</small>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-md-4">
                                <a href="#">
                                    <p class="item">
                                        <img src="/assets/images/sub/img_team_list.jpg" class="img-responsive" alt="">
                                    </p>
                                    <div class="details">
                                        <p>
                                            연예인 응원팀 내용 들어갑니다 연예인 응원팀 내용 들어갑니다
                                        </p>
                                        <hr>
                                        <small class="date">2017.11.19</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </article>
                    
                    <p class="guide-title"></p>
                    
                </div>
            </div>
        </section>        
        
    </main>
    <!-- //content End -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>