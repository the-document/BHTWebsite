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
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/trumbowyg/dist/ui/trumbowyg.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/trumbowyg/dist/plugins/highlight/ui/trumbowyg.highlight.min.css') }}">
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

        <div class="col-12">
            <form id="post-form" method="post" action="http://website-bht.herokuapp.com/posts/CreateNewPost">
                <label for="title">Title:</label>
                <input id="post-title" class="post-input" type="text" name="title" placeholder="please input title here"/>
                <input id="author" type="hidden" name="creator" value="thinhnnd">
                <input id="censor" type="hidden" name="censor" value="yes">
                <input id="category" type="hidden" name="category" value="tips/trick">
                <input id="heart" type="hidden" name="heart" value="100">
                <input id="broken_heart" type="hidden" name="broken_heart" value="0">
                <label for="title">Mô tả:</label>
                <input id="description" class="post-input" type="text" name="description" placeholder="Điền một đoạn mô tả ngắn nhé" >
                <input id="views" type="hidden" name="views" value="120">

                <!-- <div ">

                </div> -->
                <textarea id="post-editor" name="content" class="texteditor"></textarea>
                <input id="send-post" type="submit" placeholder="Gửi">
            </form>

        </div>

    </div>
</main>
{{--<script type="text/javascript" src="{{ assets('/assets/prism/prism.js') }}"></script>--}}
<script src="{{ asset('/assets/prism/prism.js') }}"></script>
<script src="{{ asset('/bower_components/trumbowyg/dist/trumbowyg.js') }}"></script>
<script src="{{ asset('bower_components/trumbowyg/dist/plugins/highlight/trumbowyg.highlight.min.js')}}"></script>
<script src="{{ asset('/assets/javascripts/post-editor.js') }}"></script>

</body>

</html>
