<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inscription</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">  
</head>

<body>

  <?php include("includes/nav.php") ?>

  <?php include("includes/préinscription.php") ?>
  
  <?php include("includes/footer.phpfooter.php") ?>
<script>
  $(document).ready( function() {
                $('.navbar2').hide();
                $('.barres').click( function() {
                $('.navbar2').slideToggle(500)

                }
                )
            }
            ); 
            </script>
</body>   