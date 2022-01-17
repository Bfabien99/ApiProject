<?php require 'header.php' ?>
<div class="box">
    <div class="group">
        <h4>Nom proprio: <?= $callModel['owner'] ?></h4>
    </div>
    <div class="group">
        <h4>Tel: <?= $callModel['tel'] ?></h4>
    </div>
    <div class="group">
        <h4>Localisation: <?= $callModel['location'] ?></h4>
    </div>
    <div class="group">
        <h4>Prix: <?= $callModel['price'] ?> Fcfa</h4>
    </div>
    <div class="group">
        <h4>Area: <?= $callModel['area'] ?> m²</h4>
    </div>
    <div class="group">
        <h4>Details: <?= $callModel['details'] ?> m²</h4>
    </div>
</div>
<?php require 'footer.php' ?>

