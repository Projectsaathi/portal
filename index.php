<?php
	function __autoload($controller)
	{
		require_once "Controller/$controller.php";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>News Portal </title>
</head>
<body>
	<?php
		 $content = new CMSController();
		 $rows = $content->index();

		 foreach ($rows as $row)
		{ 

		  // var_export($rows); 
			?>
		 	
		 	<h2><?php echo $row['title'];?></h2>
			<p><?php echo $row['description'];?></p>
			<label><?php $row['author']; ?></label>
			<label><?php $row['publish_date']; ?></label>
<?php
		 }

	?>
	 
</body>
</html>