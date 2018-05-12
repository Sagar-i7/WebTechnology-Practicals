<?php 
if(isset($_POST['num']))
	{
		$num = $_POST['num'];
		if ($num % 2 == 1) 
		{
			printf("Number %d is Odd...",$num);
		} else 
		{
			printf("Number %d is Even...",$num);
		}
	}
?>
	    
<form action="p62_2.php" method="POST">
<input type="text" name="num"  />
<input type="submit" value="Submit" />
</form>
