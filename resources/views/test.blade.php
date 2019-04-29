<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 3/31/2019
 * Time: 9:07 AM
 */
?>
<html>
<head>
    <title>API </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>All API</b></h4>
            <table id="datatable-responsive"
                   class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                   width="70%">
                <thead>
                <tr>
                    <th width="30px">STT</th>
                    <th width="50px">Method</th>
                    <th width="300px">api</th>
                    <th>des</th>

                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td ><button type="button" class="btn btn-primary">GET</button></td>
                        <td >/login</td>
                        <td >Get view login page</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td ><button type="button" class="btn btn-secondary">POST</button></td>
                        <td >/login</td>
                        <td >Req login</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td ><button type="button" class="btn btn-primary">GET</button></td>
                        <td >/register</td>
                        <td >Get view register page</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td ><button type="button" class="btn btn-secondary">POST</button></td>
                        <td >/register</td>
                        <td >Req register</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td ><button type="button" class="btn btn-primary">GET</button></td>
                        <td >/users/{idUser}</td>
                        <td >Get view profile page of user have id idUser</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td ><button type="button" class="btn btn-secondary">POST</button></td>
                        <td >/logout</td>
                        <td >Logout</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td ><button type="button" class="btn btn-primary">GET</button></td>
                        <td >/documents</td>
                        <td >Get all catalof of document</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td ><button type="button" class="btn btn-primary">GET</button></td>
                        <td >/documents/upload</td>
                        <td >Get view upload document</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td ><button type="button" class="btn btn-primary">GET</button></td>
                        <td >/documents/{idCatalog}</td>
                        <td >Get documents in catalog id</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td ><button type="button" class="btn btn-primary">GET</button></td>
                        <td >/documents/details/{idDocument}</td>
                        <td >Get view details of document</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
