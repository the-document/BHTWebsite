<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 4/29/2019
 * Time: 8:37 PM
 */?>
        <!DOCTYPE html>
<html>
<head>
    <title>BHT |Catalog Documents</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">


        <div class="row">
            @foreach($catalogs as $cata)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$cata->CATALOGSNAME}}</h5>
                        <p class="card-text">{{$cata->CATALOGSDES}}.</p>
                        <a href="documents/{{$cata->CATALOGSID}}" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


</body>
</html>
