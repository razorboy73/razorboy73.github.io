<?php
  $name = $_REQUEST['name'];
  $company = $_REQUEST['company'];
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'];

  $emess = "Name: ".$name."\n";
  $emess.= "Company: ".$company."\n";
  $emess.= "Email : ".$email."\n";
  $emess.= "Phone number: ".$phone."\n";


  mail( "dave@rallyyourgoals.com", "Succession Planning Case Study for Insurance Companies - What Skills Are Walking Out the Door
",
    $emess, "From: $email" );
  header( "Location: /casestudyrequestthankyou.html" );
?>