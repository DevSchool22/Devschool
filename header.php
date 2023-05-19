<?php
    // Verifica se a variável $pageTitle está definida
    $pageTitle = isset($pageTitle) ? $pageTitle : "Título Padrão";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <title><?php echo $pageTitle; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  
    <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-storage.js"></script>


  
  <script src="js/firebaseconfig.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
