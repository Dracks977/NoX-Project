NoX

Langage à utiliser : PHP

Agent N°X. Votre mission aujourd'hui sera d'étudier une population particulière. En effet, nos meilleurs interprètes ne maîtrisent actuellement pas le Wesh et nous avons besoin de savoir si cette forme de langage est utilisée pour faire passer des messages cryptés. J'espère que vous maîtrisez le Wesh, Agent N°X

L'Agent N°X est foutu ! Il ne sait pas reconnaître un mot en Wesh !
Vous allez donc implémenter un détecteur de mot Wesh. Il s'agira d'un programme écrit en PHP, qui prendra en paramètre un message "crypté" ainsi qu'un dictionnaire. Le dictionnaire contiendra une liste de mot Wesh. Le message sera aussi une liste de mots. Voici un exemple d'utilisation (avec le fichier "message" fourni et un fichier "dico" non fourni qui ne contient que des mots Wesh).
                $>./nox.php message dico
                wesh
                teuf
                oseille
                keusse

                Recherche terminee en 0,0003 sec.
                $>
            
Comprendre par là : "Salut, soirée ce soir ! Ramène l'argent qui est dans ton sac."

L'agent N°X n'aime pas attendre pour rien. Il faut donc que votre programme soit le plus optimisé possible et que vous affichiez le temps de recherche des termes Wesh.
Le choix des algos de recherche et de tri devront être le plus pertinent possible, même face à des messages complexes (imaginez 10000 mots dans "message" !). Vous devrez par ailleurs fournir des fichiers de tests (des fichiers contenant des dictionnaires et des messages) afin de montrer les performances de votre programme.
Vous n'avez pas à toucher au message (donc pas de tri là dessus !). Vous devez faire apparaître les termes Wesh dans l'ordre dans lequel ils apparaissent dans le fichier.
La dictionnaire devra être en mode "random". Il n'est pas forcément ordonné, et si vous souhaitez l'ordonner, il faut implémenter le tri dans le programme.


N'hésitez pas à proposer plus de fonctionnalités à l'Agent N°X. Il saura vous récompenser !

Wesh daron ! C'est trop zarbe ton taf !
Pour les fonctions interdites, à vous de voir si vous sauriez les recoder : inutile par exemple d'utiliser file_get_contents puisque vous connaissez la magie de fopen/fread/fclose !
Les fonctions explode, array_intersect, get-opt, error_reporting, ainsi que toutes les fonctions de tri sont interdites.
Break, die, exit, goto sont interdits.
Les '@' aussi.
