
<?php
	include("db/connection.php");
	$sql="";
	if(isset($_GET['state']))
	{
		$sql="select * from cities where stateID=".$_GET['state'];
	}
	else
	{
		$sql="select * from cities";
	}
	$result=$db->query($sql);
	if($result->num_rows)
	{
		while($row=$result->fetch_assoc())
		{
			?>
			<option value="<?php echo $row['cityID']; ?>"><?php echo $row['cityName']; ?></option>
			<?php
		}
	}
?>