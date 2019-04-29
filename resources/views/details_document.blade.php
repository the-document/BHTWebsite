<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 4/29/2019
 * Time: 4:09 PM
 */?>
        <!DOCTYPE html>
<html lang="en" xmlns:z-index="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BHT - Tài liệu | {{$documents[0]->DOCCATALOG}}</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    {{--<link href="css/coming-soon.min.css" rel="stylesheet">--}}
    <style>
        /*!
 * Start Bootstrap - Coming Soon v5.0.4 (https://startbootstrap.com/template-overviews/coming-soon)
 * Copyright 2013-2019 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-coming-soon/blob/master/LICENSE)
 */
        html{height:100%}
        body{height:100%;
            min-height:35rem;
            position:relative;
            font-family:'Source Sans Pro';
            font-weight:300}
        h1,h2,h3,h4,h5,h6{font-family:Merriweather;font-weight:700}
        video{
            position:fixed;
            top:50%;
            left:50%;
            min-width:100%;
            min-height:100%;
            width:auto;
            height:auto;
            -webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);
            z-index:0}

        .masthead{position:relative;
            overflow:hidden;
            padding-bottom:3rem;
            z-index:2;}
        .masthead .masthead-bg{
            z-index: -1;
            position:absolute;top:0;
            bottom:0;right:0;left:0;
            width:100%;min-height:35rem;
            height:100%;background-color:rgba(0,46,102,.8);
            -webkit-transform:skewY(4deg);
            transform:skewY(4deg);
            -webkit-transform-origin:bottom right;
            transform-origin:bottom right}
        .masthead .masthead-content h1{font-size:2.5rem}
        .masthead .masthead-content p{font-size:1.2rem}
        .masthead .masthead-content p strong{font-weight:700}
        .masthead .masthead-content .input-group-newsletter input{height:auto;font-size:1rem;padding:1rem}
        .masthead .masthead-content .input-group-newsletter button{font-size:.8rem;font-weight:700;
            text-transform:uppercase;letter-spacing:1px;padding:1rem}
        @media (min-width:768px){.masthead{height:100%;min-height:0;
            width:40.5rem;padding-bottom:0}
            .masthead .masthead-bg{min-height:0;
                                                                                -webkit-transform:skewX(-8deg);transform:skewX(-8deg);-webkit-transform-origin:top right;transform-origin:top right}.masthead .masthead-content{padding-left:3rem;padding-right:10rem}.masthead .masthead-content h1{font-size:3.5rem}.masthead .masthead-content p{font-size:1.3rem}}.social-icons{position:absolute;margin-bottom:2rem;width:100%;z-index:2}.social-icons ul{margin-top:2rem;width:100%;text-align:center}.social-icons ul>li{margin-left:1rem;margin-right:1rem;display:inline-block}.social-icons ul>li>a{display:block;color:#fff;background-color:rgba(0,46,102,.8);border-radius:100%;font-size:2rem;line-height:4rem;height:4rem;width:4rem}@media (min-width:768px){.social-icons{margin:0;position:absolute;right:2.5rem;bottom:2rem;width:auto}.social-icons ul{margin-top:0;width:auto}.social-icons ul>li{display:block;margin-left:0;margin-right:0;margin-bottom:2rem}.social-icons ul>li:last-child{margin-bottom:0}.social-icons ul>li>a{-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out;font-size:2rem;line-height:4rem;height:4rem;width:4rem}.social-icons ul>li>a:hover{background-color:#002e66}}.btn-secondary{background-color:#cd9557;border-color:#cd9557}.btn-secondary:active,.btn-secondary:focus,.btn-secondary:hover{background-color:#ba7c37!important;border-color:#ba7c37!important}.input{font-weight:300!important}

    </style>
</head>

<body>
<div class="overlay"></div>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{$documents[0]->DOCLINK}}" type="video/mp4">
</video>

<div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="masthead-content text-white py-5 py-md-0">
                    <h1 class="mb-3" style ="color:#F0F0F0">{{$documents[0]->DOCNAME}}</h1>
                    <p class="mb-3"style ="color:#F0F0F0"> Contributed by {{$documents[0]->name}} <span style="font-size: smaller ;color:#6610f2">on {{$documents[0]->DOCTIMECREATE}}</span></p>
                    <p class="mb-3"style ="color:#F0F0F0">Catalog: {{$documents[0]->DOCCATALOG}}</p>
                    <p class="mb-3"style ="color:#F0F0F0"> Views {{$documents[0]->DOCVIEWS}}</p>
                    <button type="button" class="btn btn-primary" ><a style ="color:#F0F0F0" href="{{$documents[0]->DOCLINK}}">Download</a>  </button>

                </div>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/coming-soon.min.js"></script>

</body>

</html>
