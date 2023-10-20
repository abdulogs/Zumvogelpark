<?php
  require_once "../../classes/messages.php";
  require_once "../../classes/email.php";

  if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){

    $fname = htmlentities(htmlspecialchars(strip_tags($_POST['fname'])));
    $email = htmlentities(htmlspecialchars(strip_tags($_POST['email'])));
    $phone = htmlentities(htmlspecialchars(strip_tags($_POST['phone'])));
    $message = htmlentities(htmlspecialchars(strip_tags($_POST['message'])));

    $email = mailer::template("contact");
    $email = mailer::website_url("zum/");
    $email = mailer::file("../../templates/contact");
    $email = mailer::fullname($fname);
    $email = mailer::sender($email);
    $email = mailer::reciever("restaurant.vogelpark@gmail.com");
    $email = mailer::subject("zumvogelpark customer message");
    $email = mailer::web("zumvogelpark customer message");
    $email = mailer::logo("zum/assets/images/logo-dark.png");
    $email = mailer::title("Customer message");
    $email = mailer::description($message);
    $email = mailer::send(false);

    if ($email == true || $email == false) {
      message::success("Email sent successfully");
    }


  }

?>
