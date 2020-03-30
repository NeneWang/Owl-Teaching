<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>


<?php 

if(isset($_GET["ded_id"])){
    extract($_GET);
    $query = "SELECT * FROM deadlines WHERE ded_id = {$ded_id}";
    $select_all_posts_query = mysqli_query($connection,$query);
    
    while($row = mysqli_fetch_assoc($select_all_posts_query)) {
        extract($row);
    
}
}

$is_elegible=false;
    if(isset($_POST['check_default'])) {
//        echo "You are elegible!ß";
        
        if($is_elegible){
?>
<div class="personalized-form-container">

    <div class="alert alert-success text-center" role="alert">
        The submitted user is elegible for a better credit!!
    </div>
</div>

<?php

    }else{
           ?>
<div class="alert alert-danger text-center" role="alert">
    It seemms that the submitted user are not elegible for a better credit..
</div>
<?php 
            
        }


}
?>

<!-- Navigation -->

<?php  include "includes/navigation.php"; ?>



<!-- Stylesheets -->
<!-- Bootstrap is included in its original form, unaltered -->
<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->

<!-- Related styles of various icon packs and plugins -->
<link rel="stylesheet" href="css/plugins.css">

<link rel="stylesheet" href="css/themes.css">

<!-- Modernizr (browser feature detection library) -->
<script src="js/vendor/modernizr-3.3.1.min.js"></script>
<!-- END Stylesheets -->

<!-- Modernizr (browser feature detection library) -->

<!-- Page Content -->




<div class="container">
 <a href="view_deadlines.php">Go Back</a>
<a href=""></a>
<h1><?php echo $ded_title ?></h1>
<i>In: <?php echo $ded_time ?></i><br>
<i>Category: <?php echo $ded_category ?></i>

<p class="pad-top" ><?php echo $ded_description ?></p>

<?php if($ded_submit=="YES"){
    
    ?>
    <div id="foo" class="personalized-form-container">
                    <h4 class="description pad-top">Drop your Homework here!</h4>

                    <div class="form-group">
                        <input type="file" class="dropzone" name="video_dir" value="" multiple="">

                    </div>
                </div>
    
    <?php
    
} ?>




</div> <!-- /.container -->


<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

<script src="js/plugins/ckeditor/ckeditor.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsComponents.js"></script>
<script>
    $(function() {
        FormsComponents.init();
    });

</script>
<?php include "includes/footer.php";?>
