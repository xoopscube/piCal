<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_BL_LOADED' ) ) {

define( 'PICAL_BL_LOADED' , 1 ) ;

// for monthly calendar block
define('_MB_PICAL_PREV_MONTH','Préc');
define('_MB_PICAL_NEXT_MONTH','Suiv');
define('_MB_PICAL_YEAR','');
define('_MB_PICAL_MONTH','');
define('_MB_PICAL_JUMP','Saut');

// for after the day's events block
// %s means the indicated day
define('_MB_PICAL_EVENTS_AFTER','Evènements après la date du %s');

// for the day's events block
// %s means the indicated day
define('_MB_PICAL_EVENTS_THEDAY','Evènements en date du %s');


define('_MB_PICAL_MAXITEMS','Affichage');
define('_MB_PICAL_CATSEL','Catégorie');
define('_MB_PICAL_CATSELSUB','Afficher également les sous-catégories');
define('_MB_PICAL_UNTILDAYS',"Jusqu'à %s jours (0 correspond à sans limite)");

define('_MB_PICAL_MAXGIFSADAY',"Maximum d'images dotgifs par jour");
define('_MB_PICAL_JUSTONCEADAYAPLUGIN','Afficher seulement une image par jour et par plugin');

}
