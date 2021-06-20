@extends('frontsite.layout.master')
@section('content')
    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                <!-- Hot Aimated News Tittle-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="{{asset('post_images/'.$post->image)}}" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3>{{$post->title}}</h3>
                            </div>
                            <div class="about-prea">

                                <p class="about-pera1 mb-25">
                                    {{$post->description}}
                                </p>
                            </div>

                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>
                                    <ul>
                                        <li><a href="#"><img src="{{asset('assets/img/news/icon-ins.png')}}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/news/icon-fb.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/news/icon-tw.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/news/icon-yo.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- From -->
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="comments-area">
                                    @if(($post->comments)->count()>0)
                                   @foreach($post->comments as $comment)
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="{{asset('assets/img/comment/user_default.png')}}" alt="">
                                                </div>
                                                <div class="desc">
                                                    <p class="comment">
                                                        {{$comment->body}}
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <h5>
                                                                <a href="#">{{$comment->username}}</a>
                                                            </h5>
                                                            <p class="date">{{$comment->created_at}} </p>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <a href="#" class="btn-reply text-uppercase">reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <h4>0 Comments</h4>
                                    @endif
                                </div>
                                <div class="comment-form">
                                    <h4>Leave a Reply</h4>
                                    <form class="form-contact comment_form"
                                          action="/posts/{{$post->id}}/store" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Write Comment"></textarea>

                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control valid" name="name" id="name" type="text"
                                                           onfocus="this.placeholder = ''"
                                                           onblur="this.placeholder = 'Enter your name'"
                                                           placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control valid" name="email" id="email"
                                                           type="email" onfocus="this.placeholder = ''"
                                                           onblur="this.placeholder = 'Enter email address'"
                                                           placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit"
                                                    class="button button-contactForm btn_1 boxed-btn">Send Comment
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{asset('assets/img/news/icon-fb.png')}}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{asset('assets/img/news/icon-tw.png')}}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{asset('assets/img/news/icon-ins.png')}}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{asset('assets/img/news/icon-yo.png')}}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="{{asset('assets/img/news/news_card.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

@endsection

@section('title')
    Single Page
@endsection
