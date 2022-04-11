<!-- Without Ajax -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Without Ajax</title>
    <link rel="stylesheet" href="<?=base_url('assets/stylesheets/style.css')?>">
</head>
<body>
  <div class="container">
    <header>
      <h1>Order Queue: </h1>
    </header>
    <main>
      <div id="foodlists">
<?php 
  $i=1;
  foreach($foodlists as $foodlist)
  {     
  ?>        
    <div class="notes">
        <h1><?=$i?></h1>
        <p><?= $foodlist['foods'] ?></p>
    </div>
<?php 
    $i++;
  }  
?>
      </div>
    </main>
    <footer>
      <form action="/foodlists/create" method="post">
        <p>
          <input type="text" name="foods">
        </p>
        <input type="submit" value="Button">
      </form>
    </footer>
  </div>
</body>
</html>