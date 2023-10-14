<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rose Pharmacy Bongabon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Notfy -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

    <?php if(isset($_SESSION['userid'])): ?>
    <link rel="stylesheet" type="text/css" href="../../dist/css/adminx.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../dist/css/custom.css" media="screen" />
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="dist/css/adminx.css" media="screen" />
    <?php endif; ?>
  </head>
  <body>
  <div class="adminx-container">