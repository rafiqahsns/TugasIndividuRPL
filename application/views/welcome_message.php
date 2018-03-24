<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Book Reviews</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }
	
	body {
		background-image: url("assets/img/bg.jpg");
    background-repeat: repeat;
		margin: 40px;
		font: 13px/20px JosefinSans, sans-serif;
		color: #4F5155;
	}

	 @font-face {
        font-family: "Yesevaone";
        src: url("assets/fonts/Yesevaone.ttf");
    }
		@font-face {
        font-family: "JosefinSans";
        src: url("assets/fonts/JosefinSans.ttf");
    }

/* Style the header with a grey background and some padding */
.header {
width: 100%;
top: 0;
left: 0;
  overflow: hidden;
  background-color: #5D576B;
  padding: 20px 0px;
  position: fixed;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 0 px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
	font-family: Yesevaone;
  font-size: 25px;
  font-weight: bold;
  color: white;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: pink;
  color: Black;
}

/* Float the link section to the right */
.header-right {
	float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */ 
@media screen and (max-width: 400px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
	.footer {
    	position: fixed;
    	left: 0;
    	bottom: 0;
    	width: 100%;
    	background-color: #5D576B;
    	color: white;
    	text-align: center;
	}
	.button {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
	text-align: center;
	}

	.button:hover {background-color: #e7e7e7;}
	a {
		background-color: transparent;
		font-weight: normal;
		text-decoration:none;
		padding: 3px 3px 3px 3px;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	#booktable {
    	
    	border-collapse: collapse;
    	width: 100%;
	}

	#booktable td {
    	border: 1px solid #ddd;
    	padding: 8px;
	}
	#booktable #hehe {
    	background-color: #5D576B;
		color: white;
	}
	#booktable tr:nth-child(even){background-color: #f2f2f2;}
	.button {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
	text-align: center;
	}

	.button:hover {background-color: #e7e7e7;}
	</style>
</head>

<div class="header">
<img style="vertical-align:middle" src="assets/img/logo2.png"> 
<a href="<?php echo site_url('welcome/') ?>" class="logo">Book Reviews</a>
  <div class="header-right">
    <a class="active" href="<?php echo site_url('welcome/') ?>">Home</a>
    <a href="<?php echo site_url('welcome/form_input') ?>">Add your favorite book</a>

  </div>
</div>

<br><br>
<body>
	<br>
<div id="container">
	<h1>Reviews</h1>

	<div id="body">
	<table border="1" id="booktable">
		<tr id="hehe">
			<td>ISBN No.</td>
			<td>Book Title</td>
			<td>Author(s)</td>
			<td>Year Published</td>
			<td>Rating</td>
			<td>Review</td>
			<td>Action</td>
		</tr>
		<?php foreach($hasil as $r){ ?>
		<tr>
			<td width="80px"><?php echo $r['isbn'] ?></td>
			<td><?php echo $r['booktitle'] ?></td>
			<td><?php echo $r['author'] ?></td>
			<td width="40px"><?php echo $r['yearpublished'] ?></td>
			<td><?php echo $r['rating'] ?></td>
			<td><?php echo $r['review'] ?></td>
			<td width="80px">
				<a href="<?php echo site_url('welcome/form_edit/'.$r['isbn']) ?>" class="button"> Edit </a>   
				<a href="<?php echo site_url('welcome/delete/'.$r['isbn']) ?>" class="button" onclick="return confirm('Are you sure?')"> Delete </a>
			
			</td>
		</tr>
		<?php } ?>
		
	</table><br><br>
		</div>

	
</div>

<div class="footer">
  <marquee><p>Copyright © 2018 Rafiqah H.S</p>
</div>

</body>
</html>