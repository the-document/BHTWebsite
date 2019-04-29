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
    <title>BHT |Catalog Documents</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">
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
</body>
</html>
