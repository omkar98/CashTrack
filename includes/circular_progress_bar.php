 <div class="container">
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
        <div class="col-md-3 col-sm-6">
           
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">$292.5 M</div>
            </div>
            <h4 style="text-align: center;">
<?php
$query = "SELECT * FROM investments WHERE category = '$selected_category'";
$all_data = mysqli_query($connection, $query);
if(!$all_data)
{
die('Query Failed'.mysqli_error($connection));
}

$row_invest = mysqli_fetch_assoc($all_data);
$count = 0;
if($row_invest)
{
    while($row_invest)
    {
        $row_invest = mysqli_fetch_assoc($all_data);
        $count++;
    }
}
    echo $count." ";
?>
<?php 
echo $selected_category;
?>
            </h4>
        </div> 
        <?php 
            $row_cat = mysqli_fetch_assoc($all_categories);
        }
        ?> 
    </div>
</div>
 
