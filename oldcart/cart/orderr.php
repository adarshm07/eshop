

<?php

include ("db.php");	

	$msg = "";
if(isset($_POST['order']))
{

			$query = mysqli_query($db, "INSERT INTO orders values('null','".$_POST['amount']."','".$_POST['cno']."','".$_POST['emm']."','".$_POST['eyy']."')");
			if($query)
			{
				echo "Thank You! you are now ordered";
				
			}
			else
			{
				echo "error";
			}
		}
	

?><a href="../mainhome.php">Back HOME</a>
				</form>
			</div>
		</div>
	</div>
	
	
