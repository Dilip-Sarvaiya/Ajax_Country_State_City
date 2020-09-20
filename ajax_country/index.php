<!DOCTYPE html>
<html>
	<script src="js/jquery.js"></script>
	<script>
		$("document").ready(function(){
		$("#loadcountry").click(function()
		{
			$.ajax(
			{
				url:"countries.php",
				method:"GET",
				success:function(res)
				{
					$("#country").html(res);
				}
			});
		});
			$("#loadstate").click(function(){
				var country = $('#country').val();
				$.ajax({
					url:"states.php?country="+country,
					method:"GET",
					success:function(res){
						$("#state").html(res);
					}
				});
			});
			$("#loadcity").click(function(){
				var state = $('#state').val();
				$.ajax({
					url:"cities.php?state="+state,
					method:"GET",
					success:function(res){
						$("#city").html(res);
					}
				});
			});
		});
	</script>
	<body>
		<input type="text" /></br></br></br>
		<div>
			<button id="loadcountry">Load Countries</button>
			<h3>Country</h3>
			<select id="country">
				<option value="">Select Country</option>
			</select>
		</div>
		</br></br>
		<div>
			<button id="loadstate">Load States</button>
			<h3>State</h3>
			<select id="state">
				<option>Select State</option>
			</select>
		</div>
		</br></br>
		<div>
			<button id="loadcity">Load Cities</button>
			<h3>City</h3>
			<select id="city">
				<option>Select City</option>
			</select>
		</div>
	</body>
</html>