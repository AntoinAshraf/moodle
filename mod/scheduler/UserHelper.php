<?php
	require_once(dirname(__FILE__) . '/../../config.php');

	echo $OUTPUT->header();
    
    echo "<h1>User Helper for Scheduler Plugin</h1>";
    echo "<h3>How To Create A New Scheduler</h3>";
    echo "NOTE 'You Must Log in As a teacher to add schedule'";
    echo "<p>1) Click On Login</p>";
    echo "<p>2) Enter your user name and password and then click 'Log In'</p>";
    echo "<p>3) Click On 'Site home'</p>";
    echo "<p>4) Click On the Course name you want to add schedule on it</p>";
    echo "<p>5) Open The Settings and click on 'turn editing on'</p>";
    echo "<p>6) Choose the topic you want to add the schedule to it and click 'add activity or Resourse'</p>";
    echo "<p>7) Choose schedule then click 'Add'</p>";
    echo "<p>8) Enter The schedule name and the other fields as you want</p>";
    echo "<p>9) Click On 'Save'</p>";

    echo "</br>";

    echo "<h3>How To Add A New stol to schedule</h3>";
    echo "NOTE 'You Must Log in As a teacher to add Slots'";
    echo "<p>1) Click on 'Site Home'</p>";
    echo "<p>2) Click on the course name that have a cheduler</p>";
    echo "<p>3) Click on the Name of the scheduler you created</p>";
    echo "<p>4) Click on 'Add Slot' then 'Add single Slot'<p>";
    echo "<p>5) Enter the slot Information and then click 'Save'<p>";

    echo "</br>";

    echo "<h3>How To Add A New user to a course</h3>";
    echo "NOTE 'You Must Log in As a teacher to add Slots'";
    echo "<p>1) Click on 'Site Home'</p>";
    echo "<p>2) Click on the course to add the student on</p>";
    echo "<p>3) click on setting and then Choose 'More'</p>";
    echo "<p>4) Choose user and choose 'enroll users' </p>";
    echo "<p>5) Click on 'enroll users'</p>";
    echo "<p>6) Enter the students' info</p>";
    echo "<p>7) Click 'enroll'</p>";

      echo "</br>";

    echo "<h3>How can the student select a slot ?</h3>";
    echo "NOTE 'You Must Log in As a Student to select Slots'";

    echo "<p>1) Enter 'username' and 'Password' then click 'Login'</p>";
    echo "<p>2) Choose the course you want</p>";
    echo "<p>3) Choose the Schedule name</p>";
    echo "<p>4) Click on 'Book slot' for the slot you want</p>";



    echo $OUTPUT->footer($course);
?>