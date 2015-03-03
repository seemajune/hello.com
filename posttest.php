<html>
<body>
<h1>This is my page</h1>
<p>
  <?php
    if($_POST['name']){
      echo "Hello, " . $_POST['name'];
    }
  ?>
</p>
<form action="" method="post">
  <input type="text" name="name" /> <input type="submit" />
</form>
</html>