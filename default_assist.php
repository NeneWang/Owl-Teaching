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


    <div class="block-title">
        <h2>Default Assistant</h2>
        <p class="description">Check how creditable is someone here</p>
        <div class="change-url text-secondary">
            <a href="default_stats.php" class="change-url" ><p>Some interesting stats here</p></a>
        </div>

    </div>

    <hr>

    <style>
        .change-url {
        padding-top: 3%;
        color: grey;
        text-align: right;
    }
        
        .description {
            padding-left: 2%;
        }

        .marriage {
            padding-top: 2%;
        }

        .personalized-form-container {
            /*            background-color: red;*/
            margin: 2%;

        }

    </style>

    <!--<link rel="stylesheet" href="css/main.css">-->


    <h4 class="description">Drop your .xls here!</h4>
    <p class="description">Please use the following <a href="">guidelines</a>.</p>

    <form action="#" method="post" role="form">
        <div class="personalized-form-container">


            <div class="form-group">
                <input type="file" class="dropzone" name="event-logo" value="" multiple="">

            </div>
        </div>
        <div class=" description form-group mx-sm-3 mb-2">
            <button type="submit" name="check_default" class="btn btn-medium btn-primary mb-2">Submit</button>
        </div>


    </form>
    <!--
    
    <form class="form-inline" action="#" method="post" role="form">

            <div class="form-group mx-sm-3 mb-2">
                <input class="form-control" type="text" name="w_stock_name" placeholder="e.g: FB">
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <button type="submit" name="add_stock" class="btn btn-medium btn-primary mb-2">Add Stock</button>
            </div>


        </form>
-->


    <hr>

    <h3 class="text-center">OR</h3>
    <hr>
    <h4 class="description">Default Form</h4>
    <p class="description">Please complete the following form to know how possible are you from getting a good credit.</p>

    <div class="personalized-form-container">


<form action="#" method="post" role="form">
    

        <div class="form-group">

            <label class="control-label" for="example-text-input">Amount of given credit in dollars: </label>
            <div class="">
                <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="E.g: 2000">
            </div>

        </div>

        <div class="form-group">
            <label class="control-label" for="example-select">Sex</label>
            <div class="">
                <select id="example-select" name="example-select" class="form-control" size="1">
                    <option value="1">Please select</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class=" control-label" for="example-select">Education</label>
            <div class="">
                <select id="example-select" name="example-select" class="form-control" size="1">
                    <option value="5">Please select</option>
                    <option value="1">Graduate School</option>
                    <option value="2">University</option>
                    <option value="3">High School</option>
                    <option value="4">Others</option>
                    <option value="5">Unknown</option>
                </select>
            </div>

            <div class="form-group marriage">
                <label class=" control-label" for="example-select">Marriage</label>
                <div class="">
                    <select id="example-select" name="example-select" class="form-control" size="1">
                        <option value="3">Others</option>
                        <option value="1">Married</option>
                        <option value="2">Single</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class=" control-label" for="example-text-input">Age</label>
                <div class="">
                    <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="E.g: 25">
                </div>

            </div>

            <div class="form-group">
                <label class=" control-label" for="example-select">Repayment Status in last September </label>
                <div class="">
                    <select id="example-select" name="example-select" class="form-control" size="1">
                        <option value="-2">No Consumption</option>
                        <option value="-1">Pay Duly</option>
                        <option value="0">The Use of Resolving Credit</option>
                        <option value="1">Payment delay for one month</option>
                        <option value="2">Payment Delay for two months</option>
                        <option value="3">Payment Delay for three months</option>
                        <option value="4">Payment Delay for four months</option>
                        <option value="5">Payment Delay for five months</option>
                        <option value="6">Payment Delay for six months</option>
                        <option value="7">Payment Delay for seven months</option>
                        <option value="8">Payment Delay for eight months</option>
                        <option value="9">Payment Delay for nine months and above</option>
                    </select>
                </div>

            </div>
            <div class="form-group">
                <label class=" control-label" for="example-select">Repayment Status in last August </label>
                <div class="">
                    <select id="example-select" name="example-select" class="form-control" size="1">
                        <option value="-2">No Consumption</option>
                        <option value="-1">Pay Duly</option>
                        <option value="0">The Use of Resolving Credit</option>
                        <option value="1">Payment delay for one month</option>
                        <option value="2">Payment Delay for two months</option>
                        <option value="3">Payment Delay for three months</option>
                        <option value="4">Payment Delay for four months</option>
                        <option value="5">Payment Delay for five months</option>
                        <option value="6">Payment Delay for six months</option>
                        <option value="7">Payment Delay for seven months</option>
                        <option value="8">Payment Delay for eight months</option>
                        <option value="9">Payment Delay for nine months and above</option>
                    </select>
                </div>

            </div>
            <div class="form-group">
                <label class=" control-label" for="example-select">Repayment Status in last July </label>
                <div class="">
                    <select id="example-select" name="example-select" class="form-control" size="1">
                        <option value="-2">No Consumption</option>
                        <option value="-1">Pay Duly</option>
                        <option value="0">The Use of Resolving Credit</option>
                        <option value="1">Payment delay for one month</option>
                        <option value="2">Payment Delay for two months</option>
                        <option value="3">Payment Delay for three months</option>
                        <option value="4">Payment Delay for four months</option>
                        <option value="5">Payment Delay for five months</option>
                        <option value="6">Payment Delay for six months</option>
                        <option value="7">Payment Delay for seven months</option>
                        <option value="8">Payment Delay for eight months</option>
                        <option value="9">Payment Delay for nine months and above</option>
                    </select>
                </div>

            </div>
            <div class="form-group">
                <label class=" control-label" for="example-select">Repayment Status in last June </label>
                <div class="">
                    <select id="example-select" name="example-select" class="form-control" size="1">
                        <option value="-2">No Consumption</option>
                        <option value="-1">Pay Duly</option>
                        <option value="0">The Use of Resolving Credit</option>
                        <option value="1">Payment delay for one month</option>
                        <option value="2">Payment Delay for two months</option>
                        <option value="3">Payment Delay for three months</option>
                        <option value="4">Payment Delay for four months</option>
                        <option value="5">Payment Delay for five months</option>
                        <option value="6">Payment Delay for six months</option>
                        <option value="7">Payment Delay for seven months</option>
                        <option value="8">Payment Delay for eight months</option>
                        <option value="9">Payment Delay for nine months and above</option>
                    </select>
                </div>

            </div>
            <div class="form-group">
                <label class=" control-label" for="example-select">Repayment Status in last May </label>
                <div class="">
                    <select id="example-select" name="example-select" class="form-control" size="1">
                        <option value="-2">No Consumption</option>
                        <option value="-1">Pay Duly</option>
                        <option value="0">The Use of Resolving Credit</option>
                        <option value="1">Payment delay for one month</option>
                        <option value="2">Payment Delay for two months</option>
                        <option value="3">Payment Delay for three months</option>
                        <option value="4">Payment Delay for four months</option>
                        <option value="5">Payment Delay for five months</option>
                        <option value="6">Payment Delay for six months</option>
                        <option value="7">Payment Delay for seven months</option>
                        <option value="8">Payment Delay for eight months</option>
                        <option value="9">Payment Delay for nine months and above</option>
                    </select>
                </div>

            </div>
            <div class="form-group">
                <label class=" control-label" for="example-select">Repayment Status in last April </label>
                <div class="">
                    <select id="example-select" name="example-select" class="form-control" size="1">
                        <option value="-2">No Consumption</option>
                        <option value="-1">Pay Duly</option>
                        <option value="0">The Use of Resolving Credit</option>
                        <option value="1">Payment delay for one month</option>
                        <option value="2">Payment Delay for two months</option>
                        <option value="3">Payment Delay for three months</option>
                        <option value="4">Payment Delay for four months</option>
                        <option value="5">Payment Delay for five months</option>
                        <option value="6">Payment Delay for six months</option>
                        <option value="7">Payment Delay for seven months</option>
                        <option value="8">Payment Delay for eight months</option>
                        <option value="9">Payment Delay for nine months and above</option>
                    </select>
                </div>


            </div>

            <div class="form-group">

                <label class="control-label" for="example-text-input">Amount of bill statement in last September</label>
                <div class="">
                    <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="E.g: 1000">
                </div>

            </div>

            <div class="form-group">

                <label class="control-label" for="example-text-input">Amount of bill statement in last August</label>
                <div class="">
                    <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="E.g: 1000">
                </div>

            </div>

            <div class="form-group">

                <label class="control-label" for="example-text-input">Amount of bill statement in last July</label>
                <div class="">
                    <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="E.g: 1000">
                </div>

            </div>

            <div class="form-group">

                <label class="control-label" for="example-text-input">Amount of bill statement in last June</label>
                <div class="">
                    <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="E.g: 1000">
                </div>

            </div>

            <div class="form-group">

                <label class="control-label" for="example-text-input">Amount of bill statement in last May</label>
                <div class="">
                    <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="E.g: 1000">
                </div>

            </div>

            <div class="  form-group mx-sm-3 mb-2">
                <button type="submit" name="check_default" class="btn btn-medium btn-primary mb-2">Submit</button>
            </div>
</form>

        </div>
    </div>


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
