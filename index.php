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
<table>
	<thead>
		<th>#</th>
		<th>Title</th>
		<th>Description</th>
		<th>Author</th>
		<th>Publish Date</th>
		<th>Action</th>
		<tbody>
			
	

	<?php
		 $content = new CMSController();
		 $rows = $content->index();

		 foreach ($rows as $row)
		{ 

		  // var_export($rows); 
			?>
		 	<tr>
			 	<td><?php echo $row['id'];?></td>
			 	<td><?php echo $row['title'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo $row['author'];?></td>
				<td><?php echo $row['publish_date'];?></td>
				<td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
				<td><a href="#">Delete</a></td>

		 	</tr>
		 
<?php
		 }

	?>
		</tbody>
	</thead>
</table>
</body>
</html>