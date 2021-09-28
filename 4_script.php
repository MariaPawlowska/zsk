<?php
echo "<pre>";
  print_r ($_POST);
echo "</pre>";

if (!empty($_POST['name']) && !empty($_POST['rectangleFigure'])){
  switch ($_POST['rectangleFigure']) {
    case 'kwadrat':
      header('location: ./square.php');
      break;
    case 'prostokat':
      echo 'prostokat';
  }
}else {
 ?>
  <script>
    history.back();
  </script>
 <?php
}
 ?>
