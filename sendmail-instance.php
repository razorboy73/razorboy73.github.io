<?php

  $company = $_REQUEST['company'];
  $email = $_REQUEST['email'] ;


  $emess = "Company ".$company."\n";
  $emess.= "Email : ".$email."\n";


  mail( "dave@rallyyourgoals.com", "Bottom of page demo request",
    $emess, "From: $email" );
  header( "Location: /thanksforsigningup.html" );
?>