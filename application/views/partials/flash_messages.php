<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Error</title>
    <link rel="stylesheet" href="<?=base_url('assets/stylesheets/style1.css')?>" type="text/css">
</head>
<body>
<div id='errors'>
<?php 
  if($this->session->flashdata('errors'))
  {
    foreach($this->session->flashdata('errors') as $value)
    {
?>    
      <div class="fail">
           <p ><?= $value ?></p>
      </div>
     
<?php   }
    }
?> 
</div>
<div id='success'>
<?php 
  if($this->session->flashdata('success'))
  {
   foreach($this->session->flashdata('success') as $value)
    { ?>
    <div class="success">
      <p><?= $value ?></p>
    </div>
<?php
    }
  } ?>
</div>
</body>
</html>