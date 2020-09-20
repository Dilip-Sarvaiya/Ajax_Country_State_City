<?php
	include("db/connection.php");
	$sql = "";
	if(isset($_GET['country'])){
		$sql = "select * from states where countryID='".$_GET['country']."'";
	}else{
		$sql = "select * from states";
	}
	$result = $db->query($sql);
	
	if($result->num_rows){
		while($row = $result->fetch_assoc()){
			?>
			<option value="<?php echo $row['stateID'];?>"><?php echo $row['stateName']; ?></option>
			<?php
		}
	}
	?>
	