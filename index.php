<?php 
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page']: '';
?>
<html> 
    <head>
      <title> Asetre API </title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
	    
	    
      <div class="navbar">
        <center><a href="index.php?page=product">Products</a>
        <a href="index.php?page=categories">Category</a>
        <a href="index.php?page=create">Create</a>
      </div>

    <div id="content">         
      <?php 
        switch($page){
          case 'product':
            require_once 'product.php';
            break;
          case 'categories':
            require_once 'categories.php';
            break;
          case 'create':
            require_once 'form_create.php';
            break;
          case 'details':
            require_once 'product-details.php';
            break;
		  case 'update':
            require_once 'form_update.php';
            break;
        }
   ?>
      </div>
<br><br><br><br><br><br><br><br><br><br>
      <div class="footer">
      </div>
    </body>
</html>
