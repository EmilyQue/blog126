<?php 
session_start();
require_once 'menu.php';
require_once 'connector_blog.php';
?>
<title>Search Blog</title>
 <div class="search">
<style>
h2{
    font-family: 'Paprika', serif;
}
p{
    font-family: 'Paprika', serif;
}
form{
    font-family: 'Paprika', serif;
}
.search{
	background-image: linear-gradient(rgba(20,20,20,0.3),rgba(20,20,20,0.3)), url(IMG_1197.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
}
</style>
<h2>Search for a post</h2>
<p>Fill out any of these fields and search</p>
<form action="searchPost.php">
Blog title:<input type="text" name="blogName"></input><br>
Blog post:<input type="text" name="blogComment"></input><br>
<button type="submit">Search</button>
</form>
</div>