<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MyChopBook</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
	height:100%;}
html { height: 100%; }

h2{
	font-size:20px;}


td {
	border-radius: 4px  ;
	 background-color: #FFDD96;
padding:5px;
margin-right:5px;
  }
.text{
	 float:left;
	 padding:5px;}
.user{
		 float:left;
		 padding:5px;
	 }
table {
border-spacing: 10px;
border-collapse: separate;
}
img{
	max-width:100%;}
</style>
</head>

<body>
<?php
include('header.php');
?>

<div class="container">
<h2> Feeds </h2>
<hr>

<table col-lg-12  col-xs-12 col-sm-12 col-md-12>
<tr>
<td>
<img src="feed/1.jpeg"><br />
<span class="user"><img src="food/user.png" ></span>
<span class="text"> <b>Mark Smith</b><br/><b>Cooking Level:</b> Expert <br /><b>Posted </b> on May 4th</span></td>
<td>
<img src="feed/2.jpg"><br />
<span class="user"><img src="food/user.png" ></span>
<span class="text"> <b>Mark Smith</b><br/><b>Cooking Level:</b> Expert <br /><b>Posted </b> on May 4th</span></td>
<td>
<img src="feed/3.jpeg"><br />
<span class="user"><img src="food/user.png" ></span>
<span class="text"> <b>Mark Smith</b><br/><b>Cooking Level:</b> Expert <br /><b>Posted </b> on May 4th</span></td>
<td>
<img src="feed/4.jpeg"><br />
<span class="user"><img src="food/user.png" ></span>
<span class="text"> <b>Mark Smith</b><br/><b>Cooking Level:</b> Expert <br /><b>Posted </b> on May 4th</span></td>
</tr>
<tr>
<td>
<img src="feed/5.jpeg"><br />
<span class="user"><img src="food/user.png" ></span>
<span class="text"> <b>Mark Smith</b><br/><b>Cooking Level:</b> Expert <br /><b>Posted </b> on May 4th</span></td>
<td>
<img src="feed/6.jpeg"><br />
<span class="user"><img src="food/user.png" ></span>
<span class="text"> <b>Mark Smith</b><br/><b>Cooking Level:</b> Expert <br /><b>Posted </b> on May 4th</span></td>
<td>
<img src="feed/7.jpeg"><br />
<span class="user"><img src="food/user.png" ></span>
<span class="text"> <b>Mark Smith</b><br/><b>Cooking Level:</b> Expert <br /><b>Posted </b> on May 4th</span></td>
<td>
<img src="feed/8.jpeg"><br />
<span class="user"><img src="food/user.png" ></span>
<span class="text"> <b>Mark Smith</b><br/><b>Cooking Level:</b> Expert <br /><b>Posted </b> on May 4th</span></td>
</tr>
</table>


</div>

<?php
include('footer.php');
?>
</body>
</html>
