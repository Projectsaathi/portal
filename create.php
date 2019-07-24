<?php
	function __autoload($controller)
	{
		require_once "Controller/$controller.php";
	}

	if(isset($_POST['submit']))
	{

		$title = $_POST['title'];
		$description = $_POST['description'];
		$image = $_POST['image'];
		$author = $_POST['author'];
		$publish_date = $_POST['publish_date'];

		$fields = [
			'title'=>$title,
			'description'=>$description,
			'image'=>$image,
			'author'=>$author,
			'publish_date'=>$publish_date
		];

		$obj = new CMSController();
		$data = $obj->create($fields);
		var_dump($data);
	}
	
	
?>




	

<div class="col-md-12">
	<form action="" method="POST">
		<div class="form-group">
			<input type="text" name="title" placeholder="News Title" class="form-control">
		</div>
		<div class="form-group">
			<input type="text" name="description" placeholder="Description" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="author" placeholder="author" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="publish_date" placeholder="Date" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="image" placeholder="Image link" class="form-control">
		</div>
		
    	<div class="form-group">
    		<input type="submit" name="submit" value="Submit">
    	</div>
    	
  
	</form>
</div>
