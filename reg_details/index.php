<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="regestration.css">
</head>
<body>
        <div class="header">
               <h2>Home page</h2>
        </div>
        <div class="content">
               <?php if (isset($_SESSION['success'])); ?>
               <div class="error_success">
                      echo "success"
              
               </div>
        </div>
</body>
</html>