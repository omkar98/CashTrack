<br><br><br><br>
<section id="front_view" >
	<div class = "overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<br><br>
					<h2 class="section-heading text-uppercase">Welcome to <b>CASHTRACK</b></span></h2>
				</div>
			</div>
			<?php
			$query = "SELECT * FROM investments";
			$all_data = mysqli_query($connection, $query);
			if(!$all_data)
			{
				die('Query Failed'.mysqli_error($connection));
			}

			$row_invest = mysqli_fetch_assoc($all_data);
			$count = 0;
			$raised = 0;
			while($row_invest)
			{
				$raised = $raised + $row_invest['raised'];
				$row_invest = mysqli_fetch_assoc($all_data);
				$count++;
			}
			?>
			<div class="row text-center">
				<div class="col-md-4">

					<h1 class='service-heading' style = "color:dodgerblue;"><b><?php echo $count ?></b></h1>
					<h4>Startups</h4>
				</div>
				<div class="col-md-4">

					<h1 class="service-heading" style = "color:dodgerblue;"><b>$<?php echo $raised ?> mil</b></h1>
					<h4>Raised</h4>				</div>
				<div class="col-md-4">

					<h1 class="service-heading" style = "color:dodgerblue;"><b>5</b></h1>
					<h4>M&amp;A</h4>
				</div>
			</div>
			<br><br><br>

		</div>
	</div>
</section>
