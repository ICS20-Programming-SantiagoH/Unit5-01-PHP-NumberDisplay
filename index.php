<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="The numbers in between">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon code -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
    <link rel="manifest" href="./fav/site.webmanifest" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>The numbers in between</title>
  </head>
  <body>
    <center>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>The Numbers in Between</h1>";
?>
<!-- Number image -->
      <main class="mdl-layout__content">
        <table>
          <tr>
            <th>
              <img src="./images/numbers.jpg" alt="Numbers" width="75%" height="auto"/>
      </main>
<?php
echo "<h3>Enter a minimum and maximum number</h3>";
?>

              <!-- Numeric Textfield maximum -->
              <form action="./results.php" method="post" target="results">
                <label for="max">Entre a maximum number:</label>
                <input type="number" name="max" id="max" placeholder="ex.9" step="1"><br><br>
                
                
                <!-- form to min from user -->
                <label for="min">Entre a minimum number:</label>
                <input type="number" name="min" id="min" placeholder="ex.6" step="1"><br><br>
                <input type="submit" name="submit numbers" value="Submit numbers">

              </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      results
    </iframe>
          </center>
  </body>
</html>