<!-- With Ajax -->
<div id="foods">
<?php
$i=1;  
    foreach($foods as $food)
    {        
?>        
        <div class="notes"> 
            <a href="/foods/delete/<?=$food['id']?>" class="delete">x</a>
            <h1><?=$i?></h1>
            <form action="/foods/update/<?=$food['id']?>" method="POST">
                <p>
                    <input type="text" name="foods" value="<?= $food['foods'] ?>" class="list">
                </p>
            </form>
        </div>
<?php 
        $i++;
    }  
?>
</div>