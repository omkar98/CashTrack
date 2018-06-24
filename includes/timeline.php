 <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Investments - Timeline</h2>
            <h3 class="section-subheading text-muted">Week, June-18</h3>
          </div>
        </div>
        <?php
          
        $query = "SELECT * FROM investments ORDER by date";
        $all_data = mysqli_query($connection, $query);
        if(!$all_data)
        {
            die('Query Failed'.mysqli_error($connection));
        }
          $row_invest = mysqli_fetch_assoc($all_data);
          $count = 1; 
          while($row_invest)
          {
              $date = $row_invest['date'];
              $category= $row_invest['category'];
              $sub_category= $row_invest['sub_category'];
              $name= $row_invest['name'];
              $funds= $row_invest['raised'];
              $area= $row_invest['area'];
              $series= $row_invest['round'];
              $investors= $row_invest['investors'];
              $link= $row_invest['link'];
                  
              $side = $count%2;
              if($side==1)
              {
                  
    ?>        
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/timeline.png" alt="" style="background-color: snow;">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                   <?php echo "<h4>$date</h4>"; ?>
                    <h4 class="subheading" style="color: #FF8562;"><?php echo $name; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted" style="font-family: Roboto; font-weight: 600"><?php echo $category; ?></p>
                    <p style="font-family: Roboto; font-weight: 300"><?php echo $series . " " . "$" . $funds . "M" . " ". $investors . " "; ?></p>
                    <p style="font-family: Roboto; font-weight: 300; font-size: 18px;">One platform for backup, files, objects, test/dev, and analytics </p> 
                  </div>
                </div>
              </li>
              
            <?php
              }
            else if($side%2==0)
             {
            ?> 
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/timeline.png" alt="" style="background-color: snow;">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <?php echo "<h4>$date</h4>"; ?>
                    <h4 class="subheading" style="color: #FF8562;"><?php echo $name; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted" style="font-family: Roboto; font-weight: 600"><?php echo $category; ?></p>
                    <p style="font-family: Roboto; font-weight: 300"><?php echo $series . " " . "$" . $funds . "M" . " ". $investors . " "; ?></p>
                    <p style="font-family: Roboto; font-weight: 300; font-size: 18px;">One platform for backup, files, objects, test/dev, and analytics </p> 
                  </div>
                </div>
              </li>
              
        <?php
            }
                $row_invest = mysqli_fetch_assoc($all_data);
                $count++;
          }
    ?>
              
              
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
