<?php
session_start();
$filename = pathinfo($_SERVER['PHP_SELF']);
$filename = $filename['filename'];
?>
<!DOCTYPE html>
<html lang="zh-TW" style="position: fixed; width: 100%; overflow: hidden; ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網路上正反意向健康保健資訊之推薦</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/countup.js@2.0.7/dist/countUp.umd.js" integrity="sha256-F7V+qCKQyJkKlAzZnRVzlWyTjS7o7NQE345fQpqEawI=" crossorigin="anonymous"></script>


</head>

<body style="position: relative; margin-top: 48px; height: calc(100% - 49px); overflow-y: overlay; ">

    <div id="app">
        <?php
        include_once($_SERVER["DOCUMENT_ROOT"] . "/navbar.php");
        ?>
        <div style="margin-top: 28px; ">
            <div class="ui main container">