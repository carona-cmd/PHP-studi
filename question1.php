<?php 
$matieres = ["js", "php", "css "];?>
<ul>
    <?php 
    // : remplace accolade , L7 = remplace echo 
    foreach ($matieres as $m) : ?>
    <li><?= $m ?></li>
    <?php endforeach ?>
</ul>
<?php
// foreach ($matieres as $m){
    //
//}

// quand on mixe html et php , utiliser doreach :
//foreach ($matieres as $m):
//endforeach;

?>
<ul>
    <?php foreach ($matieres as $m) {?>
    <?php  if($m == "php"){?>
    <li>je fais du php en live </li>
    <?php } else { ?>
    <li><?php echo $m ?> </li>
    <?php }?>

    <?php } ?>
</ul>

<?php 
// pour que ca soit mieux lisible
?>

<ul>
    <?php foreach ($matieres as $m) :?>
    <?php  if($m == "php"):?>
    <li>je fais du php en live </li>
    <?php  else : ?>
    <li><?php echo $m ?> </li>
    <?php endif?>

    <?php endforeach ?>
</ul>