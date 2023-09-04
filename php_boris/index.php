<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
    <h2>Premier cours</h2>

    <style>
        h1{color:red;}
        
        .s{
                width: 50px;
                height: 50px;
            }

    </style>

    <?php
    
             // Introduction Variable
             
        $p="bachir";
        echo $p;

       
        $a=12; //int
        $v=TRUE; //booleen
        $float=19.99; //float (nbr decimal)


           // Condition

        if( $a >= 18 ){
            echo "<br>l'utilisateur est majeur";
        } else {
            echo"<br>l'utilisateur est mineur";
        }

        echo "<hr>";

            // Boucles et tableau

        for($i=1; $i < 2; $i++){
            echo "<br> 
            <div>produit numéro ".$i."</div>";
        }

        echo "<hr>";


        $c=array("red","black","pink","magenta","orange",);
        print_r($c);
        echo "<br>";
        var_dump($c);

        echo "<hr>";


        foreach($c as $m){
            echo "<br>".$m;
        }

        for ($pp=0;$pp<3;$pp++){
            echo "<br>".$c[$pp];
        }

        for ($s=0;$s<count($c);$s++){
            echo "<br>".$c[$s];
        }

        echo "<hr>";


    
        $nbr=4;

        // créer 4($nbrDiv) bloc html : 50px largeur,50px longueur
        // avec comme background-color: les valeurs
        // du tableau Color.

        for($nb=0; $nb <= $nbr; $nb++ ){
            echo "<br>".
                 "<div class ='s' style='background:".$c[$nb]."'>"
                 .$nb."</div>";
        }

        echo "<hr>";

        // Fonction

        function va($y){
            if($y>=18){
                echo "ok";
            }else{
                echo "non";
            }
        }

        va(12);
        echo "<br>";
        va(78);


        echo "<hr>";
        // Créer une fonction "initiales" qui prend 
        // en paramêtre votre Nom & prénom
        // et qui renvoie la première lêttre de chaque chaîne.

        // exemple

        function nameInit($prenom, $nom){
            echo "<br>";
            echo $a=substr($prenom,0,1);
            echo $n=substr($nom,0,1);
            echo "<br>";
            echo $prenom[0];
            echo $nom[0];

        }

        nameInit("Bachir","Bogoss");

        
        echo "<hr>";

        function dice(){
           $re = random_int(0, 20);
           if ($re ==20){
            echo "<br>approve";
           }elseif($re ==0){
            echo "<br>denied";
           }else{
            echo "<br>".$re;
           }
        }

        dice();
        echo "<hr>";

// Créer une fonction qui prend en parametre "Couleur"
        // qui aura pour but de créer un bloc html (div) avec 
        // les dimensions précédement données via les parametres
        // Largeur devra être aléatoire entre 10px et 140px
        // Longueur devra être aléatoire entre 10px et 140px
        // Couleur devra être défini par vos soins

        function cd($color){
            $lm=random_int(10,140);
            echo "<div 
                style='width:".$lm."px; height:".$lm."px; background:".$color."'>
            </div>";
        }

        cd("black");

        echo "<hr>";

        function clc($nb1, $nb2, $op){
          echo  $nb1.$op.$nb2." = ";
          if($op==="+"){
              echo   $nb1 + $nb2;
                 
          }elseif($op==="/"){
                echo $nb1 / $nb2;
          }elseif($op==="-"){
            echo $nb1 - $nb2;
          }elseif($op==="*"){
            echo $nb1 * $nb2;
          }else{
            echo "error";
          }
            
        }

        clc(1,1,"+");
         echo "<br>";
        clc(1,2,"*");
         echo "<br>";
        clc(1,2,"/");
         echo "<br>";
        clc(1,2,"-");

        echo "<hr>";

    ?>
    <!-- <div style="width: 20px; height:20px; background:black;"></div> -->
      <!--  <div class=""></div>
     <div style ='background:red';></div>
     <div>produit numéro 1</div> 

         <div class=sty>
        <style>
            .s{
                width: 50px;
                height: 50px;
            }
        </style>
    </div>";
    -->
</body>
</html>