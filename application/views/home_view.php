<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to My First CodeIgniter Application</title>
</head>
<body>

<div id="container">
    <h1>Welcome to My First CodeIgniter Application!</h1>
    <div id="body">
        <div class="gallery">
		    <ul>
		    <?php foreach($images as $img): ?>
		        <li><img src="uploads/<?php echo $img['name']; ?>" /></li>
		    <?php endforeach; ?>
		    </ul>
		</div>
    </div>
</div>
<style type="text/css" media="screen">
	.gallery li img{float: left; width: 500px;}
</style>
</body>
</html>