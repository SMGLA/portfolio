<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="5; url='https://smgla.github.io/portfolio/'" />
  <link rel="stylesheet" href="https://smgla.github.io/portfolio/styles.css">
  <style>
    body {
      background-color: #F0EFEB;
      color: var(--color-mid-grey);
      font-size: 1.4rem;
    }
    .wrapper {
      width: 50%;
      margin: 50px auto;
      text-align: center;
    }

    .wrapper h2 {
      text-align: center;
    }

    .wrapper .message {
      background: whitesmoke;
      width: 100%;
      border-radius: 10px;
      padding: 16px;
      margin-bottom: 16px;
    }

  </style>

  <title>Thank you</title>
</head>

<?php
  $to = "shugmkpt@gmail.com";
  $subject = "[CONTACT FORM]";
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = "\r\n" . "Name: {$name}" . "\r\n" . "Email: " . "{$email}" . "\r\n\r\n" . "Message" . "\r\n" . "{$_POST["message"]}";
  $headers = "From: {$email}";
?>

<body>
  <div class="wrapper">
    <h2>Thank you!</h2>  
    <div class="message">
    <?php
      if(mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent.😌";
      } else {
        echo "Something went wrong😔 Please try again.";
      }
    ?>
    </div>
  </div>
</body>
