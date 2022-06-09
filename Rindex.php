<?php 

include __DIR__ . '/db.php';
//Controllo per corretto funzionamento dell'include.
// echo'<pre>';
// var_dump($db);
// echo'</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

  <link rel="stylesheet" href="css/style-php.css">
  <title>Document</title>
</head>
<body>
  <h1>Stampare tramite in PHP</h1>
  <!-- cards -->
  <div class="ir-card my-5" >
    <?php foreach($db as $card => $value):?>
      <div class="cardimg">
        <img src="<?php echo $value['poster']?>" alt="<?php echo $value['author']?>">
      </div>
      <h5 class="testo">
        <?php echo $value['title']?>
      </h5>
      <p>
        <?php echo $value['author']?>
      </p>
      <p>
      <?php echo $value['year']?>
      </p>
    <?php endforeach; ?>
    
  </div>
  <!-- /card -->
  <script src="./script.js"></script>
</body>
</html>