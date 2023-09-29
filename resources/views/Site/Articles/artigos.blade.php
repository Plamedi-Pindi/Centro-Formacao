@extends('layouts.merges.site')
@section('title', 'SGPA | Artigos')

@section('content')

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(Site/images/background/bg1.webp);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Artigos</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li>Artigos</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="content-block">
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <!-- left part start -->
                    <div class="col-lg-8 col-xl-8 col-md-7">
                        <!-- blog grid -->
                        <div id="masonry" class="ttr-blog-grid-3 row">
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic1.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>Jan 02 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By William</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">This Story Behind Education Will Haunt You Forever.</a></h5>
                                        <p>Knowing that, you’ve optimised your pages countless amount of times, written tons.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic2.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>Feb 05 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By John</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">What Will Education Be Like In The Next 50 Years?</a></h5>
                                        <p>As desperate as you are right now, you have done everything you can on your.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic3.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>April 14 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By George</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">Master The Skills Of Education And Be.</a></h5>
                                        <p>You will see in the guide all my years of valuable experience together with.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>23 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic3.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>March 21 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By Thomas</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">Eliminate Your Fears And Doubts About Education.</a></h5>
                                        <p>When I needed to start from scratch and figure out how things work. Getting people.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>28 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic1.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>May 08 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By James</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">Seven Reasons You Should Fall In Love With Education.</a></h5>
                                        <p>Honestly, I made ZERO money in the first year and I definitely do not want you to go.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>26 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic2.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>June 19 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By Arthur</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>
                                        <p>You may have seen our tool that's been featured by many world-class SEO marketers.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>15 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic1.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>Jan 02 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By William</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">This Story Behind Education Will Haunt You Forever.</a></h5>
                                        <p>Knowing that, you’ve optimised your pages countless amount of times, written tons.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic2.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>Feb 05 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By John</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">What Will Education Be Like In The Next 50 Years?</a></h5>
                                        <p>As desperate as you are right now, you have done everything you can on your.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic3.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>April 14 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By George</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">Master The Skills Of Education And Be.</a></h5>
                                        <p>You will see in the guide all my years of valuable experience together with.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>23 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic3.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>March 21 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By Thomas</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">Eliminate Your Fears And Doubts About Education.</a></h5>
                                        <p>When I needed to start from scratch and figure out how things work. Getting people.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>28 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic1.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>May 08 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By James</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">Seven Reasons You Should Fall In Love With Education.</a></h5>
                                        <p>Honestly, I made ZERO money in the first year and I definitely do not want you to go.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>26 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="Site/images/blog/latest-blog/pic2.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>June 19 2019</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By Arthur</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>
                                        <p>You may have seen our tool that's been featured by many world-class SEO marketers.</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>15 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog grid END -->
                        <!-- Pagination -->
                        <div class="pagination-bx rounded-sm gray clearfix">
                            <ul class="pagination">
                                <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- left part END -->
                    <!-- Side bar start -->
                    <div class="col-lg-4 col-xl-4 col-md-5 sticky-top">
                        <aside class="side-bar sticky-top">
                            <div class="widget">
                                <h6 class="widget-title">Pesquisar</h6>
                                <div class="search-bx style-1">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" class="form-control" placeholder="A palavra chave..." type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="fa fa-search text-primary"></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget recent-posts-entry">
                                <h6 class="widget-title">Artigos Recomendados</h6>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="ttr-post-media"> <img src="Site/images/blog/recent-blog/pic1.jpg" width="200" height="143" alt=""> </div>
                                        <div class="ttr-post-info">
                                            <div class="ttr-post-header">
                                                <h6 class="post-title"><a href="blog-details.html">This Story Behind Education Will Haunt You Forever.</a></h6>
                                            </div>
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>Oct 23 2019</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i>15 Comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="ttr-post-media"> <img src="Site/images/blog/recent-blog/pic2.jpg" width="200" height="160" alt=""> </div>
                                        <div class="ttr-post-info">
                                            <div class="ttr-post-header">
                                                <h6 class="post-title"><a href="blog-details.html">What Will Education Be Like In The Next 50 Years?</a></h6>
                                            </div>
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>May 14 2019</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i>23 Comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="ttr-post-media"> <img src="Site/images/blog/recent-blog/pic3.jpg" width="200" height="160" alt=""> </div>
                                        <div class="ttr-post-info">
                                            <div class="ttr-post-header">
                                                <h6 class="post-title"><a href="blog-details.html">Eliminate Your Fears And Doubts About Education.</a></h6>
                                            </div>
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>June 12 2019</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i>27 Comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Left & right section END -->
<!-- Content END-->

@endsection
