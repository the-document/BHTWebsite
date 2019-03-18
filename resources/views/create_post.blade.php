<!DOCTYPE html>
<html>
<head>
	<title>Create new post</title>
</head>
<body>
	<form method="post" action="http://website-bht.herokuapp.com/posts/CreateNewPost">
        {{ csrf_field() }}
		<input type="text" name="title" placeholder="title">
		<input type="text" name="creator" placeholder="creator">
		<input type="text" name="description" placeholder="description">
		<input type="text" name="censor" placeholder="censor">
		<input type="text" name="content" placeholder="content"> <br>
		<input type="text" name="category" placeholder="category">
		<!-- <input type="text" name="status" placeholder="status"> -->
		<input type="number" name="heart" placeholder="heart">
		<input type="number" name="broken_heart" placeholder="broken_heart">
		<input type="number" name="views" placeholder="views">
		<br>
		<input type="submit" value ="submit">
	</form>
		
		