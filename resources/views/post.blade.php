<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 3/24/2019
 * Time: 12:01 PM
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/prism/prism.css') }}" />

    <!-- <link ref="stylesheet" href="../bower_components/tinymce/"> -->
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/bootstrap-grid.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/styles.css') }}">
    <script type="text/javascript" src="{{ asset('/assets/javascripts/get-post.js') }}"></script>
    <title>Ban học tập công nghệ phần mềm</title>
</head>

<body>
<header>
    <nav class="nav-top">
        <div class="wraper">
            <ul class="nav-full">
                <li class="nav-branch ">
                    <a class="logo" href="#">
                        <img src="../img/bht-logo.png">
                    </a>
                    Sharing is Learning
                </li>
                <li class="search-area">
                    <form type="submit">
                        <input id="search-bar" name="search-bar" type="text" placeholder="Nhập nội dung cần tìm">
                    </form>
                    <i id="search-icon" class="fas fa-search"></i>
                </li>

                <li class="menu-items">
                    <a class="first-item" href="#">Trang chủ</a>
                    <a href="#">Tài liệu</a>
                    <a href="#">Bài viết</a>
                    <a href="#">Hỏi đáp</a>
                    <a href="#">BXH</a>
                </li>
                <li class="account">
                    <a href="#">Đăng nhập</a> <span>/</span>
                    <a href="#">Đăng ký</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- <nav class="nav-bot">
        <ul class="tag-list">
            <li class="tag"><a href="#">OOP</a></li>
            <li class="tag"><a href="#">Cơ sở dữ liệu</a></li>
            <li class="tag"><a href="#">Mạng máy tính</a></li>
            <li class="tag"><a href="#">Nhập môn lập trình</a></li>
            <li class="tag"><a href="#">Kiến trúc máy tính</a></li>
        </ul>
    </nav> -->
</header>
<main class="post-page wraper">
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-7">
            @foreach($po as $i => $detail)
            {{ logger('Test') }}
            <div class="nb-card">
                <div class="nb-card-head">
                    <div class="post-user-info">
                        <div class="avatar">
                            <img src="{{url('/img/avt-user-01.jpg')}}" />
                        </div>
                        <div class="user-name">bởi <a href="#">{{ $detail->creator }}</a></div>
                        <div class="date"> từ 2 tiếng trước</div>
                        <div class="more"><i class="fas fa-chevron-circle-down"></i></div>
                    </div>
                    <h3 id="post-title" class="post-title">{{$detail->title}}</h3>
                </div>
                <div id="post-content" class="nb-card-body ">
                   {!! $detail->content !!}
                </div>
                <div class="nb-card-foot border-top">
                    <div class="author-name"></div>
                    <div>
                        <ul class="post-tag">
                            <li class="tag tag-dark">Frontends</li>
                            <li class="tag tag-dark">Web Dev</li>
                        </ul>
                    </div>
                    <div class="interaction">
                        <div class="rates">
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-heart-broken"></i>
                        </div>
                        <div class="share">
                            <i class="fab fa-facebook-square fb-icon"></i>
                            <i class="fab fa-twitter tw-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nb-card">
                <div>
                    <p>Discussion</p>
                </div>
                <div class="nb-card">
                    <div class="nb-card-body comment">
                        <form method="post">
                            <textarea id="mytextarea">Hello, World!</textarea>
                            <input class="btn btn-rep" type="submit" placeholder="Gửi">
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="col-lg-3">

        </div>
    </div>
</main>
{{--<script type="text/javascript" src="{{ assets('/assets/prism/prism.js') }}"></script>--}}

</body>

</html>
