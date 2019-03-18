<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 3/17/2019
 * Time: 10:36 AM
 */
?>

        <!DOCTYPE html>
<html>
<head>
    <title>BHT | Posts</title>
</head>

<body>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <a href="#">
                <button class="ladda-button btn btn-default waves-effect waves-light" data-style="expand-right">
                    <span class="btn-label"><i class="fa fa-plus"></i></span>Create new post
                </button>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>All post</b></h4>
            <table id="datatable-responsive"
                   class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Title</th>
                    <th>Creator</th>
                    <th>Description</th>
                    <th>censor</th>
                    <th>Content</th>
                    <th>Category</th>
                </tr>
                </thead>

                <tbody>
                @foreach($p as $i => $detail)
                    <tr>
                        <td>{{$i + 1}}</td>
                        <td title="{{$detail->title}}">{{$detail->title}}</td>
                        <td title="{{$detail->creator }}">{{$detail->creator }}</td>
                        <td title="{{$detail->description  }} VND">{{$detail->description }} VND </td>
                        <td title="{{$detail->censor }}">{{$detail->censor }}</td>
                        <td title="{{$detail->content }}">{{$detail->content }}</td>
                        <td title="{{$detail->category }}">{{$detail->category }} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>