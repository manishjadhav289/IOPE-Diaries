<?php 

    # database connection file
	include 'db.conn.php';

	# fetching images
	$sql  = "SELECT img_name FROM
	         images ORDER BY id DESC";

	$stmt = $conn->prepare($sql);
	$stmt->execute();

	$images = $stmt->fetchAll();

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Images</title>
    <style>
		body {
			display: flex;
			align-items: center;
			flex-direction: column;
			font-family: 'Roboto',sans-serif;
		}
		.error {
			color: #a00;
		}
		.gallery img{
            width: 127px;
		}
	</style>
</head>
<body>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="images[]" multiple>
        <button type="submit" name="Upload">Upload</button>
    </form>
</body>
</html>