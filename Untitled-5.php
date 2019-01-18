
<?php
session_start();


	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'password');
	define('DB_DATABASE', 'download');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


$s="select * from gravator ";
$result=mysqli_query($db,$s);
		$row=mysqli_fetch_array($result);
		
		?>	
		
<tr><td height="100" width="150"align="center"><img src="uploads/<?php echo $row[1];?>" height="60" width="100px" /></td>
<a href="uploads/bsc.pdf">New</a>

<a href="uploads/<?php echo $row['1'];?>">Newwwwww</a>
  <a href"uploads/<?php echo $row['1'];?>" download>hai</a><?php
  echo  $row[0];
	
	

?>