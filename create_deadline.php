<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>


<?php 
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

 if(isset($_POST['add_deadline'])) {
     extract($_POST);
     //edit this latter
     $ded_courses_id="1";
     
     
     $query = "INSERT INTO deadlines (ded_submit, ded_title, ded_description, ded_courses_id, ded_time, ded_category)";
    

    $query .= "VALUES ('{$ded_submit}','{$ded_title}', '{$ded_description}','{$ded_courses_id}', '{$ded_time}','{$ded_category}')";
 
    $create_comment_query = mysqli_query($connection, $query);

    if (!$create_comment_query) {
        die('QUERY FAILED To Submit the stock request' . mysqli_error($connection));


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
<div class="container ">

    <a href="view_deadlines.php"> <i class="fa fa-calendar"></i> View Deadlines</a>
    <h1 class="">
        Create Deadline
    </h1>
    <form action="#" method="post" role="form">
        <!--Create a form-->
        <div class="form-group pad-top">
            <input class="form-control" placeholder="Title" name="ded_title">
        </div>


        <div class="form-group ">
            <textarea name="ded_description" placeholder="Description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>

        <div class="form-group">
            <div class="ui toggle checkbox">
                <input value="YES" type="checkbox" name="ded_submit">
                <label>Allow student to upload a file.</label>
            </div>
        </div>

        <h5>For when?</h5>
        <div class="form-group">
            <div>
                <input type="text" id="example-datepicker" name="ded_time" class="form-control input-datepicker" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
            </div>
        </div>

        <h5>What is this?</h5>
        <div class="form-group">

            <select id="example-chosen-multiple" name="ded_category" class="select-chosen" data-placeholder="Choose a type" style="width: 250px;" multiple>
                <option value="Homework">Homework</option>
                <option value="Paper">Paper</option>
                <option value="Test">Test</option>
                <option value="Quiz">Quiz</option>
                <option value="Others">Others</option>

            </select>
        </div>

        <!--        For now everything going to be 1 course 1 xd-->

        <h5>For which courses?</h5>
        <div class="form-group">

            <select id="example-chosen-multiple" name="ded_courses_id" class="select-chosen" data-placeholder="Choose applicable courses" style="width: 250px;" multiple>
                <option value="1">Class 001</option>
                <option value="2">Class 002</option>
                <option value="3">Class 003</option>
                <option value="4">Class 002</option>

            </select>
        </div>


        <div class="pad-top">
            <button type="submit" name="add_deadline" class="centered btn btn-effect-ripple btn-block btn-large ui primary button">

                Create Deadline</button>
        </div>
    </form>




</div> <!-- /.container -->

<h1></h1>

<script>
    $(function() {
        FormsComponents.init();
    });

</script>
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

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
