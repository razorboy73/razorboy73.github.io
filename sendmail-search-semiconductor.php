<?php
  $name = $_REQUEST['name'];
  $company = $_REQUEST['company'];
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'];

  $emess = "Name: ".$name."\n";
  $emess.= "Company: ".$company."\n";
  $emess.= "Email : ".$email."\n";
  $emess.= "Phone number: ".$phone."\n";


  mail( "dave@rallyyourgoals.com", "Human Capital Search Case Study - Semiconductor",
    $emess, "From: $email" );
  header( "Location: /casestudy-download-search-semiconductor.html" );
?>