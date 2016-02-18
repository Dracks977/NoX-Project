#!/usr/bin/php
<?php

#                                                    __          __  __    ___           _           _                                         
#                                                 /\ \ \___      \ \/ /   / _ \_ __ ___ (_) ___  ___| |_                                       
#                                                /  \/ / _ \ _____\  /   / /_)| '__/ _ \| |/ _ \/ __| __|                                      
#                                               / /\  | (_) |_____/  \  / ___/| | | (_) | |  __| (__| |_                                       
#                                               \_\ \/ \___/     /_/\_\ \/    |_|  \____/ |\___|\___|\__|                                      
#                                                                                     |__/                                                     
#                                                                                                                                              
#                                                                                                                                              
#                                                                                                                                              
#                                                                                                                                              
#                                                                                                                                              
#                                                                                                                                              
#   _                              _                                       _             _          __ _ _                                     
#  | |__  _   _  /\   /\__ _ _ __ | |__   ___ _ __ ___      _ __          /_\  _ __   __| |        /__| | |__   __ _ _ __  _ __      _ __ ___  
#  | '_ \| | | | \ \ / / _` | '_ \| '_ \ / _ | '_ ` _ \    | '_ \        //_\\| '_ \ / _` |       /_\ | | '_ \ / _` | '_ \| '_ \    | '_ ` _ \ 
#  | |_) | |_| |  \ V | (_| | | | | | | |  __| | | | | |   | | | |      /  _  | | | | (_| |      //__ | | |_) | (_| | | | | | | |   | | | | | |
#  |_.__/ \__, |   \_/ \__,_|_| |_|_| |_|\___|_| |_| |_____|_| |_|      \_/ \_|_| |_|\__,_|      \__/ |_|_.__/ \__,_|_| |_|_| |_____|_| |_| |_|
#         |___/                                       |_____|                                                                  |_____|         


$time_start = microtime(true);
require('prepare.php');
#gestion erreur
$prep = array();
$i = 0;
$y = 0;
$count = 0;
$e = 0;

if (isset($argv[1]) AND $argv[1] == "?" OR $argv[1] == "man" OR $argv[1] == "help"){
help();
$e = 1;
}
else {
if (isset($argv[2]) AND is_dir($argv[2])){
    echo "No-x Project - erreur: " . $argv[2] . " => " .  "est un dossier\n\n";
    $e = 1;
}
  else if (isset($argv[2]) AND !file_exists($argv[2])){
    echo "No-x Project - erreur: " . $argv[2] . " => " .  "fichier ou dossier introuvable\n\n";
     $e = 1;
}
  else if (isset($argv[2]) AND !is_readable($argv[2])){
    echo "No-x Project - erreur: " . $argv[2] . " => " .  "permission refusée\n\n";
     $e = 1;
}
else if (!isset($argv[2])){
 	echo "No-x Project - erreur: il manque un argument (php nox.php [fichier contenant le messsage] [fichier contenant le dictionaire])\n\n";
 	$e = 1;
}

if (isset($argv[1]) AND is_dir($argv[1])){
    echo "No-x Project - erreur: " . $argv[1] . " => " .  "est un dossier\n\n";
    $e = 1;
}
  else if (isset($argv[1]) AND !file_exists($argv[1])){
    echo "No-x Project - erreur: " . $argv[1] . " => " .  "fichier ou dossier introuvable\n\n";
     $e = 1;
}
  else if (isset($argv[1]) AND !is_readable($argv[1])){
    echo "No-x Project - erreur: " . $argv[1] . " => " .  "permission refusée\n\n";
     $e = 1;
}
else if (!isset($argv[1])){
 	echo "No-x Project - erreur: il manque un argument (php nox.php [fichier contenant le messsage] [fichier contenant le dictionaire])\n\n";
 	$e = 1;
}
}
if ($e == 0){
$time_start = microtime(true);
$msg = fopen($argv[1], r);
$msg_c = fread($msg, filesize($argv[1]));
fclose($msg);
$dico = fopen($argv[2], r);
$dico_c = fread($dico, filesize($argv[2]));
fclose($dico);
preg_match_all('/\S+[^\. ,!?\n]/', $msg_c, $msg_t);
preg_match_all('/\S+[^\. ,!?\n]/', $dico_c, $dico_t);
while (isset($dico_t[0][$i])){
	$prep[$dico_t[0][$i]] = "1";
	$i++;
}
while(isset($msg_t[0][$y])){
	if(isset($prep[$msg_t[0][$y]])){
		echo $msg_t[0][$y] . "\n";
		$count++;
	}

	$y++;
}
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "\nrecherche effectue en : \033[31m". $time . "\033[0m secondes, \033[31m" . $count . "\033[0m occurences trouvé sur : \033[31m" . $y . "\033[0m mots dans le message et \033[31m" . $i . "\033[0m mots dans le dico\n\n";
}