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


    <row>


        <div class="col-md-9 pad-top">

            <form action="#" method="post" role="form">
                <input class="form-control" placeholder="Title" name="comment_content">

                <div class="form-group pad-top">
                    
                    <textarea placeholder="Description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>

                <div class="pad-top">
                    <button type="submit" name="add_comment" class="pull-right btn btn-effect-ripple btn-sm btn-primary">

                        Publish</button>
                </div>
            </form>
        </div>

        <div class="col-md-3 pad-top ">
            <li class="list-group-item list-group-item-secondary">Lectures list: </li>
            <a href="#" class="list-group-item ">
                <i class="fa fa-play-circle" aria-hidden="true"></i> Cras justo odio
            </a>
            <a href="#" class="list-group-item"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item active "> <i>+</i> New Lecture</a>
        </div>

    </row>


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
