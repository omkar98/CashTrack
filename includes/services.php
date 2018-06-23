    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Welcome to CashTrack</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
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
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class='service-heading'><?php echo $count ?></h4>
            <p class="text-muted">startups</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">$<?php echo $raised ?> mil</h4>
            <p class="text-muted">Raised</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">5</h4>
            <p class="text-muted">M&amp;A</p>
          </div>
        </div>
        
        
      </div>
    </section>
 