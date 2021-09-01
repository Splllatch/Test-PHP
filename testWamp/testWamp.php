<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" type="text/css" href="styleWamp.css">
    


</head>
<body>


    <?php 
    function testFonction($Pays) {
        echo  '<p>Nous avons visité :' . ' ' . '<div class="Ville">' . $Pays   . '</div>' . '</p>'  ;
    } 
        
    testFonction('Argentine');
    testFonction('France');


    $testTableau = array(10,50,100);
    $testTableauLib = array('nom' => 'Gastellier', 'prenom' => 'Maxime', 'age' => 27);


    
    ?>


<div class="testTableauCSS" >

        <div class="abc"> 
               <?php foreach ($testTableau as $afficheTab) { echo '<p>' . $afficheTab . '</p>'; } ?>
        </div>

        <div class="abc">
            <?php foreach ($testTableauLib as $afficheTabLib) { echo '<p>' . $afficheTabLib . '</p>'; } ?>
        </div>

        <div class="abc"> 
               <?php foreach ($testTableauLib as $Label => $afficheTabLib) { echo '<p>' . $Label . ' = ' . $afficheTabLib . '</p>'; }?>
        </div>

</div>

<div class="test">
        wesh wesh
       <div class="PHP"> <?php testFonction('Bresil'); ?> </div>

       <div> valeur =  <?php echo  $testTableau[0] + $testTableau[2]  ?></div>
       <div> Nom =  <?php echo  $testTableauLib['nom']  ?></div>
       <div> Prenom =  <?php echo  $testTableauLib['prenom']  ?></div>
       <div> Age =  <?php echo  $testTableauLib['age']  ?></div>

</div>

<div class="formulaire">
    <form action="formulaireGET.php" method="get">

    <input type="text" name="nom" />
    <input type="text" name="prenom" />
    <input type="submit" name="valider" />

</div>

<?php $bdd = new PDO('mysql:host=localhost;dbname=test','root', ''); 

    $reponse = $bdd->query('SELECT * FROM testtable');
    while ($donnees = $reponse->fetch())
    {
        echo '<p>' . $donnees['ville']. ' - ' . $donnees['duree'] . ' - ' . $donnees['coutJour'] . ' cout total = ' . $donnees['duree'] * $donnees['coutJour'] . '</p>' ;

    }



?>


</body>
</html>

