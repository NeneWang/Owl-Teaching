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

<?php 
//If session teacher then do this
if(($_SESSION['user_role'])=="subscriber" or 
        ($_SESSION['user_role'])=="student"){
    
    header("Location: deadlines_student.php");
    
}



$ded_courses_id = 1;

    $toenconde=[];
             $query = "SELECT * FROM deadlines WHERE ded_courses_id = {$ded_courses_id}";
            $select_all_posts_query = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                            array_push($toenconde,$row);
    
}

?>

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
<div class=" wrapper-big">
<div class="">
    <a class="" href="create_deadline.php">
    <i class="fa fa-plus-circle" ></i>
    Create Deadline</a>
    <h1>Deadlines:</h1>
    <!-- FullCalendar (initialized in js/pages/compCalendar.js), for more info and examples you can check out http://arshaw.com/fullcalendar/ -->
    <div class=" pad-top text-center">
       <div class="row ">
       <div class="col-md-6">
            <div class="pad-top" id="calendar"></div>

       </div>
   </div>
   </div>
</div>


</div> <!-- /.container -->


<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


<script>
    /*
     *  Document   : compCalendar.js
     *  Author     : pixelcave
     *  Description: Custom javascript code used in Calendar page
     */

    var CompCalendar = function() {
        var calendarEvents = $('.calendar-events');

        /* Function for initializing drag and drop event functionality */
        var initEvents = function() {
            calendarEvents.find('li').each(function() {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                var eventObject = {
                    title: $.trim($(this).text()),
                    color: $(this).css('background-color')
                };

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 999,
                    revert: true,
                    revertDuration: 0
                });
            });
        };

        return {
            init: function() {
                /* Initialize drag and drop event functionality */
                initEvents();

                /* Add new event in the events list */
                var eventInput = $('#add-event');
                var eventInputVal = '';

                // When the add button is clicked
                $('#add-event-btn').on('click', function() {
                    // Get input value
                    eventInputVal = eventInput.prop('value');

                    // Check if the user entered something
                    if (eventInputVal) {
                        // Add it to the events list
                        calendarEvents.prepend('<li class="animation-fadeInQuick2Inv"><i class="fa fa-calendar"></i> ' + $('<div />').text(eventInputVal).html() + '</li>');

                        // Clear input field
                        eventInput.prop('value', '');

                        // Init Events
                        initEvents();

                        // Focus the input at the end
                        eventInput.focus();
                    }

                    // Don't let the form submit
                    return false;
                });

                /* Initialize FullCalendar */
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                <?php 
            

            
            $age = $row;?>
                var deadlines = <?php echo str_replace('"', "'", json_encode($toenconde)); ?>;
                console.log(deadlines[0]);
                
                var createEvents = [];
                var deadline;
                for (deadline in deadlines){
                    console.log((deadlines[deadline]["ded_time"]));
                     var ded_id = deadlines[deadline]["ded_id"];
                    
                    var singleEvent = {
                        
                        //Remember to add 1 to day and month 1 becomes zero, .
                        title: (deadlines[deadline]["ded_title"]),
                        start: new Date((deadlines[deadline]["ded_time"])),
                        allDay: true,
                        color: '#de815c',
                        url: 'deadline_info.php?ded_id='.concat(ded_id)
                    }

                    createEvents.push(singleEvent);
                }

                $('#calendar').fullCalendar({
                    header: {
                        left: 'title',
                        center: '',
                        right: 'today month,agendaWeek,agendaDay prev,next'
                    },
                    firstDay: 1,
                    editable: true,
                    droppable: true,
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // remove the element from the "Draggable Events" list
                        $(this).remove();
                    },
                    events: [
                        ...createEvents,
                        
                    ]
                });
            }
        };
    }();

</script>

<script>
    $(function() {
        CompCalendar.init();
    });

</script>

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
