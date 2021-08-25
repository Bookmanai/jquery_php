<?php
	require_once 'db.php';
	$countries=getAllCountries();
?>
<?php include('header.php'); ?>
	<div class="content">
		<div class="container">
			<div class="row mt-3">
				<div class="col-md-12">
					<div class="col-md-12 mb-5 text-center">
						<h5>About club(jQuery)</h5>
						
					</div>
					<div class="col-md-6 mb-5">
						<div class="alert alert-success" role="alert" id = "message_alert" style="display: none;"></div>	
						<form>
						<div class="form-group">
							<label for="">Name:</label>
							<input type="text" class="form-control" id="name">
						</div>
						<div class="form-group">
							<label for="">Country:</label>
							<select class="form-control" id="country"></select>
						</div>
						<div class="form-group">
							<label for="">City:</label>
							<select class="form-control" id="city">
								<option value = '0'>Select City</option>
							</select>
						</div>
						<br>
						<button type="button" id="addClubButton" class="btn btn-primary">ADD CLUB</button>
					</form>
					</div>
					<div class="col-md-12">
						
						<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Name</th>
						      <th scope="col">Country</th>
						      <th scope="col">City</th>
						      <th scope="col">Delete</th>
						    </tr>
						  </thead>
						  <tbody id = "result"></tbody>
						</table>		
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>