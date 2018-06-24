 
  <br><br><br>
  <section id="charts">
  
   <div class="container">
	   <h2 class = "text-center">INVESTMENTS: <span style = "color:dodgerblue;">  CATEGORY-WISE</span></h2>
	   <hr>
    <div class="row">
        <?php
        $query_cat = "SELECT * FROM categories";
        $all_categories = mysqli_query($connection, $query_cat);
        if(!$all_categories)
        {
            die('Query Failed'.mysqli_error($connection));
        }
        $row_cat = mysqli_fetch_assoc($all_categories);
        while($row_cat)
        {
            $selected_category = $row_cat['cat_title'];
        ?>
        
        <div class="col-md-3 col-sm-6 text-center"> 
          <div class = "progress-box">
           <?php
                $query = "SELECT * FROM investments WHERE category = '$selected_category'";
                $all_data = mysqli_query($connection, $query);
                if(!$all_data)
                {
                die('Query Failed'.mysqli_error($connection));
                }

                $row_invest = mysqli_fetch_assoc($all_data);
                $count = 0;
                $sum = 0;
                if($row_invest)
                {
                    while($row_invest)
                    {
                        $sum = $sum + $row_invest['raised'];
                        $row_invest = mysqli_fetch_assoc($all_data);
                        $count++;
                    }
                }
                $per = (($sum/$raised) * 100);
            if($per>50)
            {
                $class = "over50";
            }
            else
            {
                $class = " ";
            }
            ?>
            <div class="progress-circle p<?php echo intval($per) . " " . $class?>">
                <span>
                
                <?php echo "$" . " ". $sum . " " . "M"; ?>
                </span>
                <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                </div>
            </div>
            <br>
            <h6 style="text-align: center;"><?php echo $count." " . $selected_category; ?></h6>
        </div> 
		</div>
        <?php 
            $row_cat = mysqli_fetch_assoc($all_categories);
        }
        ?> 
    </div>
</div>
</section>

 
