<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    }

    .wrapper h2 {
      text-align: center;
    }

    .wrapper table {
      background: whitesmoke;
      width: 100%;
      border-radius: 10px;
      padding: 16px;
      margin-bottom: 16px;
    }

    .wrapper table th {
      vertical-align: top;
      color: #474FFF;
    }

    .wrapper table tr, th, td {
      vertical-align: top;
      padding: 16px;
    }

    #submit {
      background-color: var(--color-blue);
      color: var(--color-white);
      margin: 8px 0 0 auto;
      border: 2px solid var(--color-blue);
      border-radius: 10px;
      width: 30%;
      font-family: var(--font-jaldi);
      font-size: 1.2rem;
      font-weight: 700;
      cursor: pointer;
      float: right;
    }

  </style>

  <title>Confirmation</title>
</head>

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
?>

<body>
  <div class="wrapper">

  <h2>Confirmation</h2>    
  <form action="https://www.yougendo.com/portfolio/php/mail.php" method="POST" class="contact">
    <?php echo "<input type=\"hidden\" name=\"name\" value=\"{$name}\" />"; ?>
    <?php echo "<input type=\"hidden\" name=\"email\" value=\"{$email}\" />"; ?>
    <?php echo "<input type=\"hidden\" name=\"message\" value=\"{$message}\" />"; ?>
    <table>
    <tr>
    <th>Name:</td>
    <td><?php echo $name; ?></td>
    </tr>
    <tr>
    <th>Email:</td>
    <td><?php echo $email; ?></td>
    </tr>
    <tr>
    <th>Message:</td>
    <td><?php echo $message; ?></td>
    </tr>
    </table>
    <input type="submit" value="Send"  id="submit"/>
  </form>
  </div>

</body>  
</html>
