<?php
	include('include/connection.php');
	$result = mysqli_query($conn,"SELECT MAX(p_id) FROM `tm_property`");
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$id = $row[0];
			
			if($_POST['submit'])
			{
				$filename = $_FILES["profileImage"]["name"];
				$tempname = $_FILES["profileImage"]["tmp_name"];
				$filename1 = $_FILES["profileImage1"]["name"];
				$tempname1 = $_FILES["profileImage1"]["tmp_name"];
				$filename2 = $_FILES["profileImage2"]["name"];
				$tempname2 = $_FILES["profileImage2"]["tmp_name"];
				$folder = "p_imges/".$filename;
				move_uploaded_file($tempname,$folder);
				$folder1 = "p_imges/".$filename1;
				move_uploaded_file($tempname1,$folder1);
				$folder2 = "p_imges/".$filename2;
				move_uploaded_file($tempname2,$folder2);

				//SELECT max(p_id) FROM `tm_property`
				
				$query1 = "INSERT INTO TM_IMAGE VALUES ('','$id','$folder','$folder1','$folder2')";
				$data1 = mysqli_query($conn, $query1);
				
				if($data1)
				{
					echo "record Inserted";
					header("location:admin_profile.php");
				}
				else
				{
					echo "Record not insert";
				}
			}
		}
	}
else{
	die("error in records");
}
	?>