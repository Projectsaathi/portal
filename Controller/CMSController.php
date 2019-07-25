<?php
require_once "DatabaseController.php";
	class CMSController extends DatabaseController
	{
		
// display all records
		function index()
		{
			$sql = "SELECT * FROM news";

			$result = $this->connect()->query($sql);

			if($result->rowCount() > 0)
			{
				while($row = $result->fetch())
				{
					$data[] = $row;
				}

				return $data;
			}
		}

// insert function
		public function create($fields)
		{
			$implodeColumns = implode(', ',array_keys($fields));

			$implodePlaceholder = implode(", :",array_keys($fields));

			// $sql = "INSERT INTO news (title, description, image, author, publish_date) VALUES (:title,:description,:image, :author,:publish_date)";

			$sql = "INSERT INTO news ($implodeColumns) VALUES(:".$implodePlaceholder.")";

			$stmt = $this->connect()->prepare($sql);

			foreach ($fields as $key => $value) {
				
				$stmt->bindValue(':'.$key,$value);
			}

			$stmtExec = $stmt->execute();

			if($stmtExec)
			{
				header('Location: index.php');
			}

		}



		public function read($id)
		{
			$sql = "SELECT * FROM news WHERE id = :id";
			$stmt = $this->connect()->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->execute();
			$result =  $stmt->fetch(PDO::FETCH_ASSOC);
			return $result;
		}

		function delete()
		{
			echo "this function is used to delete";
		}

		function update()
		{
			echo "this is update function";
		}
	}
	// $obj = new CMSController();
	// $obj->connect();
?>