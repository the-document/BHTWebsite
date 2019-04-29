<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 4/29/2019
 * Time: 11:13 AM
 */?>

 <!DOCTYPE html>
<html>
<head>
    <title>BHT | Upload Documents</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<form action="/action_page.php" class="container">
    <div class="form-group">
        <label for="email">Doc name:</label>
        <input type="text" class="form-control" id="docname">
    </div>
    <div class="form-group">
        <label for="pwd">Doc link:</label>
        <input type="text" class="form-control" id="doclink">
    </div>
    <div class="form-group">
        <label for="pwd">Doc Catalog:</label>
        <select  class="form-control" id="doccatalog">
            @foreach($docCatalogs as $i => $cata)
                {{--<option value="{{$cata->CATALOGSID}}">{{$cata->CATALOGSID}}</option>--}}
                <option value="{{$cata->CATALOGSNAME}}">{{$cata->CATALOGSNAME}}</option>
                @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
</form>

</body>
</html>
