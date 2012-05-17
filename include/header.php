<!-- Why hello there -->
<?php require_once('include/functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <?php if( extension_loaded('newrelic') ) { echo newrelic_get_browser_timing_header(); } ?>
  <meta charset="utf-8" />
  <title>John Deerhake | web developer</title>
  <link rel="stylesheet" href="stylesheets/main.css" type="text/css" />
</head>

<body>
  <div id="page-wrap">
    <header>
      <nav>
        <ul id="top-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="http://jdeerhake.tumblr.com">Blog</a></li>
          <li><a href="code.php">Code</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <h1>John Deerhake</h1>
      <h3>web developer</h3>
    </header>
    <hr>
    <div id="left-col">

