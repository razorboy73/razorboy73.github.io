<?php
  $name = $_REQUEST['name'];
  $company = $_REQUEST['company'];
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'];
  $job = $_REQUEST['job'];
  $demo_wanted = $_REQUEST['demo_wanted'];

  $emess = "Name: ".$name."\n";
  $emess.= "Company: ".$company."\n";
  $emess.= "Email : ".$email."\n";
  $emess.= "Phone number: ".$phone."\n";
  $emess.= "job: ".$job."\n";
  $emess.= "demo wanted: ".$demo_wanted."\n";


  mail( "dave@rallyyourgoals.com", "Demo request",
    $emess, "From: $email" );
  header( "Location: /landingpages/demo-download-explorer.html" );
?>