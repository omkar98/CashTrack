<br><br>
 	   <section id = "series" style = "padding:35px 0px 35px 0px;background-color:whitesmoke;text-align:center;">
  	   <div class="container">
   	   <h2 class = "text-center">INVESTMENTS: <span style = "color:dodgerblue;">  SERIES-WISE</span></h2>
   	   
   	   <hr>
   	   <br><br>

    <div class="row">
       <?php 
            $query_series = "SELECT * FROM series";
            $result1 = mysqli_query($connection, $query_series);
            if(!$result1)
            {
                die('Query Failed'.mysqli_error($connection));
            }
            $row1 = mysqli_fetch_assoc($result1);
            while($row1)
            {              
                $current_series = $row1['series_type']
        ?>
          <div class="col-md-3 col-sm-6">
           <h3>
          <?php
            $query_invest = "SELECT * FROM investments WHERE round = '$current_series'";
            $result2 = mysqli_query($connection, $query_invest);
            if(!$result2)
            {
                die('Query Failed'.mysqli_error($connection));
            }
            $row2 = mysqli_fetch_assoc($result2);
                $count = 0;
                $sum = 0;
            while($row2)
            {
                $sum = $sum + $row2['raised'];
                $row2 = mysqli_fetch_assoc($result2);
                $count++;
            }
                echo "$" . " " . "$sum" . " ". "M"; 
          ?>
           </h3>
           <hr>
           <h5>   
              <?php echo $current_series;?>
           </h5>
        </div>
        <?php 
               $row1 = mysqli_fetch_assoc($result1); 
            }
        ?>
     </div>
</div>
</section>