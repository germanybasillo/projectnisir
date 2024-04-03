@extends('auth.main')
@section('title','BLOG')
@section('content')

  
  <!--================ Start Banner Area =================-->
  <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Single-Blog Details</h2>
                    <div class="page_link">
                        <a href="home">Home</a>
                        <a href="blog">Single-Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    
    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area section_gap_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="webpage/img/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                {{-- <a href=""><h5>Social Life</h5></a> --}}
                                <p><h5>Social Life</h5></p>
                                <div class="border_line"></div>
                                <p>Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="webpage/img/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                {{-- <a href="single-blog.html"><h5>Politics</h5></a> --}}
                                  <p><h5>Politics</h5></p>
                                <div class="border_line"></div>
                                <p>Be a part of politics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="webpage/img/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                {{-- <a href="single-blog.html"><h5>Food</h5></a> --}}
                                <p><h5>Food</h5></p>
                                <div class="border_line"></div>
                                <p>Let the food be finished</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    @endsection