<?php

/* la meth get permet de vehiculer des info dans l url pr ls recup sur u autre ficheir ou a un endroit pr un affichage special

expl 
1) je recup ls info sur la mm pge (comme un one page)
2)en recup ls info sur une autre pg
3)dans l'attribut href d abord j indique le nm du fich ou je veu recup pui j ecris ? pr send ls info cqe info etant separ de la precedente par "&"
target blank permet d open la new pge ds un otr ongl
*/

if(!$_GET){
    echo"<button>
    <a href='get_arriver.php?produit=gtx&gout=choco&prix=1'target='_blank'>tester</a>
    </button>";
}