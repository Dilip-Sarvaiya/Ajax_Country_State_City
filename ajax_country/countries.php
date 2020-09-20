<?php
	include("db/connection.php");
	$sql = "select * from countries";
	$result = $db->query($sql);
	
	if($result->num_rows){
		while($row = $result->fetch_assoc()){
			?>
			<option value="<?php echo $row['countryID']; ?>"><?php echo $row['countryName']; ?></option>
			<?php
		}
	}
	?>
	