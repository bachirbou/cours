<!--
    un formulaire en css html ne sert a rien, il faut mettre du php pour recup les info rensegnr dedans et les utiliser + tard. c php qui va rendre le rendre dinamique, sans ca c est que un affcihage 
    pour que le formulaire soit connecter a la methode POST il ft absolument ecricre ds une balise "form methode=POST"
-->

<form method="POST" action="">
    <!-- dasn ls attrib du chp prenom, seul name=prenom est import, obligatoir en php, pour que ls info puissent etre recup et envoye en bdd=basededonne. for 'ds le label et id ds input n'ont aucune importance pr php et l'envoie en bdd ils snt cntr utile en affch pr l UX ameliore l xp utilisateur
    
    l'attribut namr est indispensablepr que les done puiss etre envoye en bdd  -->

    <label for="prenom">prenom</label>
    <input type="text" name="prenom" id="prenom" placeholder="votre prenom">
    <br><br>
    <label for="description">description</label>
    <textarea name="description" id="description" cols="15" rows="3"
    placeholder="Votre description"></textarea>
    <br><br>
    <label for="annee">Année de naissance</label>
    <select name="annee" id="annee">
        <?php
            for($y=date('Y'); $y >= date('Y')-100; $y--){
                echo"<option> $y </option>";
            }
        ?>
    </select>
    <br><br>
    <input type="submit" value="Soumettre">
</form>

<!-- si je n ecrit ps cte condtion if($_POST) j aurais droi au wrng .... c est normal au 1er chang de la pge le form est vide aucune info n a encor transite

en dessous la syntax contracter pr un cndt if elle permet de generer + rapid du code html que si on etait ds un grd passege php -->
<?php if($_POST):?>
<!-- i need $_post pour recup ls info qui on transiter ds le form
je crochetet"[]" les chose qui m'intersset ex: ($_POST['prenom'])-->
<ul>
    <li>Prénom:<?= $_POST['prenom'] ?></li>
    <li>Déscritpion:<?= $_POST['description'] ?></li>
    <li>Année de naissance:<?= $_POST['annee'] ?></li>
</ul>
<!-- la syntax contracter if() necessite pour fermer endif sinon erreur php -->
<?php endif; ?>
