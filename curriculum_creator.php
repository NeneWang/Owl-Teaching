<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>


<?php 

 if(isset($_POST['add_lecture'])) {
     extract($_POST);
     //edit this latter
     $course_id=1;
     $video_dir="NO";//Change rapidly in other case
     
     $query = "INSERT INTO lectures (course_id, title, video_dir, description)";

    $query .= "VALUES ({$course_id}, '{$title}','{$video_dir}', '{$description}')";

    $create_comment_query = mysqli_query($connection, $query);

    if (!$create_comment_query) {
        die('QUERY FAILED To Submit the stock request' . mysqli_error($connection));


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


//Grabing all lectures

//$stmt1 = mysqli_prepare($connection, "SELECT * WHERE commentvideoid = 1");
 $query = "SELECT * FROM lectures WHERE course_id = 1";
  $select_all_posts_query = mysqli_query($connection,$query);


//If 
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
        <script src="js/jquery.js"></script>

<!--
        <script>
            //hide element test
            $(document).ready(function() {
                $('#foo').hide();
            });

        </script>
-->

<style>
    .to-right{
        padding-right: 24%;
        text-align: center;
    } 
        </style>

<!--Title-->
<h1 class="to-right" >New Lecture</h1>
       
       
       
        <div class="col-md-9 pad-top">

           
           
            <form action="#" method="post" role="form">



                <input class="form-control" placeholder="Title" name="title">

                <div id="foo" class="personalized-form-container">
                    <h4 class="description pad-top">Do you have a video for this lesson?</h4>

                    <div class="form-group">
                        <input type="file" class="dropzone" name="video_dir" value="" multiple="">

                    </div>
                </div>
                <div class="form-group pad-top">

<!--
                    <div class="col-xs-12">
                        <textarea id="textarea-ckeditor" placeholder="Description"  name="description" class="ckeditor"></textarea>
                    </div>
                    
                    
-->
               
               
                
                    <textarea name="description" placeholder="Description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>

                <div class="pad-top">
                    <button type="submit" name="add_lecture" class="pull-right btn btn-effect-ripple btn-sm btn-primary">

                        Create lecture</button>
                </div>
            </form>
        </div>

        <div class="col-md-3 pad-top ">
         
           
            <li class="list-group-item list-group-item-secondary">Lectures list: </li>
            
              <?php
                        while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                             extract($row);
                             //If the thing video says no then    
                             
                            $icon = "fa fa-play-circle";
                            if($video_dir=="NO"){
                                $icon = "fa fa-file-text-o";
                            }
                            
                            
                            ?>
                            <a href="#" class="list-group-item">
                            
                              <i class="<?php echo $icon ?>" aria-hidden="true"></i>
                              
                                <?php echo $title ?></a>
                            <?php
                            
                            }
            
            ?>
            
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
