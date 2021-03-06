<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/standard.css" />
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta name="Description" content="Darwin Art Company">
    <title><?php echo $title ?></title>
  </head>
  <body>

    <?php
      require PARTIALS."/header.html.php";
    ?>

    
    <div class="bodycontent">
      <div id='content'>
        <?php
          if(!empty($flash)){
            echo "<p class='flash'>{$flash}</p>";
          }
          if(!empty($note)){
            echo "<p class='note'>{$note}</p>";
          }
          if(!empty($error)){
            echo "<p class='flash'>{$error}</p>";	
          }
          require $content;
        ?>
      </div> <!-- end content -->
    </div> <!-- end main -->
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "70%";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "rgb(18,18,18)";
      }
    </script>
  </body>
</html>