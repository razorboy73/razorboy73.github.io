<?php
  $name = $_REQUEST['name'];
  $company = $_REQUEST['company'];
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'];

  $emess = "Name: ".$name."\n";
  $emess.= "Company: ".$company."\n";
  $emess.= "Email : ".$email."\n";
  $emess.= "Phone number: ".$phone."\n";


  mail( "josh@rallyyourgoals.com", "Human Capital Search Case Study for Large Enterprises - Real Estate Case Study",
    $emess, "From: $email" );
  header( "Location: /casestudy-download-search.html" );
?>