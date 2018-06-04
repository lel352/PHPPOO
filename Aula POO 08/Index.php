<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 08 - POO </title>
    </head>
    <body>
         <pre>
             <h1>Projeto UEC</h1>
         <?php
             require_once 'Lutador.php';
             require_once 'Luta.php';
             $lutadores = array();
             $lutadores[0] = new Lutador("Pretty Boy","França",31,1.75,68.9,11,3,1);
             $lutadores[1] = new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3);
             $lutadores[2] = new Lutador("SnapShadow","EUA",35,1.65,80.9,12,2,1);
             $lutadores[3] = new Lutador("Dead Code","Austrália",28,1.93,81.6,13,0,2);
             $lutadores[4] = new Lutador("UFOCobol","Brasil",37,1.70,119.3,5,4,3);
             $lutadores[5] = new Lutador("Nerdaart","EUA",30,1.81,105.7,12,2,4);
             
             $luta01 = new Luta(); 
             $luta01->marcarLuta($lutadores[0],$lutadores[1]);
             $luta01->lutar();
             $lutadores[0]->Status();
             $lutadores[1]->Status();
             
             $luta02 = new Luta(); 
             $luta02->marcarLuta($lutadores[4],$lutadores[5]);
             $luta02->lutar();

         ?>     
         </pre>
    </body>
</html>