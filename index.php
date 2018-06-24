<?php 
include "includes/db.php";
include "includes/header.php";
?>
<br><br><br><br>
<section id="front_view" >
	<div class = "overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<br><br>
					<h2 class="section-heading text-uppercase">Welcome to <span style = "color:dodgerblue;"><b>CASHTRACK</b></span></h2>

					<?php 

					?>



					<?php
					include "csv.php";
					$csv = new csv();
					if(isset($_POST['submit']))
					{
						$csv->import($_FILES['file']['tmp_name']);
						header('location: home.php');

					}
					?>

					<div class = "row">
						<div class = "col-md-4"></div>
						<div class = "col-md-4">
							<div class = "overlay">
								<div class = "box" style = "padding:30px;">
									<h4>Import your CSV file</h4><br><br>

									<form method="post" action="" enctype="multipart/form-data">
										<center>
										<div>
										<input type="file" name="file" class = "export_file">
											</div>
										</center>
										
										<br><br>
										<input type="submit" name="submit" value="Import" class = "btn btn-primary btn-block">
									</form> 
								</div></div>

						</div>
					</div>           

					<h3 class="section-subheading text-muted">CashTrack is an automatic expense tracker for professionals. See expenditure across all your bank accounts.</h3>

				</div>
			</div>


		</div>
	</div>
</section>
<?php 
include "includes/footer.php";
?>
