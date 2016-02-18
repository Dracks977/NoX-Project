<?php
echo "\033c";
echo "\n    

███╗   ██╗ ██████╗      ██╗  ██╗    ██████╗ ██████╗  ██████╗      ██╗███████╗ ██████╗████████╗
████╗  ██║██╔═══██╗     ╚██╗██╔╝    ██╔══██╗██╔══██╗██╔═══██╗     ██║██╔════╝██╔════╝╚══██╔══╝
██╔██╗ ██║██║   ██║█████╗╚███╔╝     ██████╔╝██████╔╝██║   ██║     ██║█████╗  ██║        ██║   
██║╚██╗██║██║   ██║╚════╝██╔██╗     ██╔═══╝ ██╔══██╗██║   ██║██   ██║██╔══╝  ██║        ██║   
██║ ╚████║╚██████╔╝     ██╔╝ ██╗    ██║     ██║  ██║╚██████╔╝╚█████╔╝███████╗╚██████╗   ██║   
╚═╝  ╚═══╝ ╚═════╝      ╚═╝  ╚═╝    ╚═╝     ╚═╝  ╚═╝ ╚═════╝  ╚════╝ ╚══════╝ ╚═════╝   ╚═╝   
                                                                                              
 \n\n";
 function help(){
echo "

NAME
   No-x Project, compare deux fichiers et liste les occurrences.
SYNOPSIS
   php nox.php [fichier contenant le messsage] [fichier contenant le dictionaire].
DESCRIPTION
Compare les mots du message par rapport au dictionnaire en gardant leurs ordres d'apparition dans le message.
Initialement créé pour l'agent N°X, le programme a été optimisé pour permettre une exécution ultra-rapide.
Le programme espion est tombé dans le domaine public 5 ans après sa création suite à un vol de données effectué par le KGB (Komitet gossoudarstvennoï bezopasnosti).
EXAMPLES
   php nox.php msg.txt dico.txt
   php nox.php msg.txt dico.txt >> result.txt
SEE ALSO
   cat, echo, ls.
BUGS
   Quelques ralentissement peuvent se faire sentir sur des ordinateurs peut récents.
AUTHOR
  ** Unclassified ** NOFORN **
COPYRIGHT
  ** Unclassified ** NOFORN **

\n";
 }
 ?>