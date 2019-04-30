<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 4/29/2019
 * Time: 8:54 PM
 */?>
<!DOCTYPE html>
<html>
<head>
    <title>BHT | Documents</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

        .navbar-icon-top .navbar-nav .nav-link > .fa {
            position: relative;
            width: 36px;
            font-size: 24px;
        }

        .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
            font-size: 0.75rem;
            position: absolute;
            right: 0;
            font-family: sans-serif;
        }

        .navbar-icon-top .navbar-nav .nav-link > .fa {
            top: 3px;
            line-height: 12px;
        }

        .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
            top: -10px;
        }

        @media (min-width: 576px) {
            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
                top: -7px;
            }
        }

        @media (min-width: 768px) {
            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
                top: -7px;
            }
        }

        @media (min-width: 992px) {
            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
                top: -7px;
            }
        }

        @media (min-width: 1200px) {
            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
                top: -7px;
            }
        }

    </style>
</head>

<body >
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BHT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <i class="fa fa-home"></i>
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-danger">11</span>
                        </i>
                        Posts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-warning">11</span>
                        </i>
                        Question
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-primary">11</span>
                        </i>
                        Catalogs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bell">
                            <span class="badge badge-info">11</span>
                        </i>
                        Notify
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-globe">
                            <span class="badge badge-success">11</span>
                        </i>
                        Your Profile
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br><br>

    <div class="container">
        <div class="row" >
            @foreach($documents as $doc)
                <div class="card" style="width: 18rem; margin: 1em">
                    <img src="{{$doc->DOCLINK}}" class="card-img-top" alt="can't load background">
                    <div class="card-body">
                        <a href="details/{{$doc->DOCID}}" class="card-text">{{$doc->DOCNAME}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
