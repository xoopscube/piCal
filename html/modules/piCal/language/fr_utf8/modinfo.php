<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_MI_LOADED' ) ) {




// Appended by Xoops Language Checker -GIJOE- in 2014-02-28 22:13:12
define('_MI_WHATDAY_PLUGINS','whatday plugins');
define('_MI_DESCWHATDAY_PLUGINS','Enables whatday plugins separated by comma. (rokuyou,24sekki,kyureki)');
define('_MI_COM_DIRNAME','Comment integration directory');
define('_MI_COM_DIRNAMEDSC','When use D3-comment integration system. <br/>write your d3forum (html) directory <br/>If you do not use comments or use xoops comment system, leave this in empty.');
define('_MI_COM_FORUM_ID','d3forum_id');
define('_MI_COM_FORUM_IDDSC','When you set above integration diredtory, write forum_id');
define('_MI_COM_ORDER','Order of comment integration');
define('_MI_COM_ORDERDSC','When you set comment integration, select display order of comment posts');
define('_MI_COM_VIEW','View of comment-integration');
define('_MI_COM_VIEWDSC','select flat or thread');
define('_MI_COM_POSTSNUM','\'Max posts displayed in comment integration');

// Appended by Xoops Language Checker -GIJOE- in 2006-11-05 06:41:40
define('_MI_PROXYSETTINGS','Proxy settings (host:port:user:pass)');

// Appended by Xoops Language Checker -GIJOE- in 2006-02-15 05:31:20
define('_MI_PICAL_ADMENU_MYTPLSADMIN','Templates');

define( 'PICAL_MI_LOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_PICAL_NAME", "piCal");

// A brief description of this module
define("_MI_PICAL_DESC", "Module Gestion d'un Calendrier avec Evènemens Programmés");

// Appended by Xoops Language Checker -GIJOE- in 2005-01-08 04:36:49
define('_MI_PICAL_DEFAULTLOCALE','france');

// Names of blocks for this module (Not all module has blocks)
define("_MI_PICAL_BNAME_MINICAL", "Mini Calendrier");
define("_MI_PICAL_BNAME_MINICAL_DESC", "Affiche le bloc mini calendrier");
define('_MI_PICAL_BNAME_MINICALEX','MiniCalendarEx');
define('_MI_PICAL_BNAME_MINICALEX_DESC','Mini Calendrier Extensible à système de plugin');
define("_MI_PICAL_BNAME_MONTHCAL", "Calendrier Mensuel");
define("_MI_PICAL_BNAME_MONTHCAL_DESC", "Affichage complet du calendrier mensuel");
define("_MI_PICAL_BNAME_TODAYS", "Evènements aujourd'hui");
define("_MI_PICAL_BNAME_TODAYS_DESC", "Affiche les évènements du jour");
define("_MI_PICAL_BNAME_THEDAYS", "Evènements du %s");
define("_MI_PICAL_BNAME_THEDAYS_DESC", "Affiche les évènements du jour indiqué");
define("_MI_PICAL_BNAME_COMING", "Evènements à venir");
define("_MI_PICAL_BNAME_COMING_DESC", "Affiche les évènnements à venir");
define("_MI_PICAL_BNAME_AFTER", "Evènements après le %s");
define("_MI_PICAL_BNAME_AFTER_DESC", "Affiche les évènements après la date indiquée");
define("_MI_PICAL_BNAME_NEW", "Evènements nouvellement postés");
define("_MI_PICAL_BNAME_NEW_DESC", "Affiche les ���v���nements tri���s de fa���on, plus r���cent en premier");

// Names of submenu
define("_MI_PICAL_SM_SUBMIT","Soumettre");

//define("_MI_PICAL_ADMENU1","");


// Title of config items
define("_MI_USERS_AUTHORITY", "Droits Utilisateurs");
define("_MI_GUESTS_AUTHORITY", "Droits Invités");
define("_MI_DEFAULT_VIEW", "Vue par défaut au centre");
define("_MI_MINICAL_TARGET", "La page s'affiche au centre quand la date du mini calendrier est cliquée");
define("_MI_COMING_NUMROWS", "Le nombre d'événements dans le bloc des événements à venir");
define("_MI_SKINFOLDER", "Nom des chemins de skin");
define('_MI_PICAL_LOCALE','Localisation (regarder les fichiers dans locales/*.php)');
define("_MI_SUNDAYCOLOR", "Couleur du Dimanche");
define("_MI_WEEKDAYCOLOR", "Couleur des jours de la semaine");
define("_MI_SATURDAYCOLOR", "Couleur du Samedi");
define("_MI_HOLIDAYCOLOR", "Couleur des vacances");
define("_MI_TARGETDAYCOLOR", "Couleur du jour sélectionné");
define("_MI_SUNDAYBGCOLOR", "Couleur de fond du Dimanche");
define("_MI_WEEKDAYBGCOLOR", "Couleur de fond des jours de la semaine");
define("_MI_SATURDAYBGCOLOR", "Couleur de fond du Samedi");
define("_MI_HOLIDAYBGCOLOR", "Couleur de fond des vacances");
define("_MI_TARGETDAYBGCOLOR", "Couleur de fond du jour sélectionné");
define("_MI_CALHEADCOLOR", "Couleur de l'ent&ecirc;te du calendrier");
define("_MI_CALHEADBGCOLOR", "Couleur de fond de l'ent&ecirc;te du calendrier");
define("_MI_CALFRAMECSS", "Style du cadre du calendrier");
define("_MI_CANOUTPUTICS", "Permission d'extraire des fichiers ics");
define("_MI_MAXRRULEEXTRACT", "Limite supérieure d'extraction des évènements par périodicité.(compteur)");
define("_MI_WEEKSTARTFROM", "Jour de début de la semaine");
define("_MI_WEEKNUMBERING", "Nombre de règles pour les semaines");
define("_MI_DAYSTARTFROM", "Bordure pour séparer les jours");
define('_MI_TIMEZONE_USING','Fuseau Horaire Serveur');
define('_MI_USE24HOUR','Journée de 24heures (et non pas de 12 heures)');
define("_MI_NAMEORUNAME" , "Affichage du Nom de l'auteur de l'évènement" ) ;
define("_MI_DESCNAMEORUNAME" , "Sélectionner quel 'nom' sera affiché" ) ;

// Description of each config items
define("_MI_EDITBYGUESTDSC", "Autoriser les invités à ajouter des évènements");

// Options of each config items
define("_MI_OPT_AUTH_NONE", "ne peut pas ajouter");
define("_MI_OPT_AUTH_WAIT", "peut ajouter mais sera modéré");
define("_MI_OPT_AUTH_POST", "peut ajouter sans modération");
define("_MI_OPT_AUTH_BYGROUP", "spécifié dans les permissions de groupes");
define("_MI_OPT_MINI_PHPSELF", "page courante");
define("_MI_OPT_MINI_MONTHLY", "calendrier mensuel");
define("_MI_OPT_MINI_WEEKLY", "calendrier hebdomadaire");
define("_MI_OPT_MINI_DAILY", "calendrier journalier");
define("_MI_OPT_MINI_LIST", "Liste d'évènements");
define("_MI_OPT_CANOUTPUTICS", "peut extraire");
define("_MI_OPT_CANNOTOUTPUTICS", "ne peut pas extraire");
define("_MI_OPT_STARTFROMSUN", "Dimanche");
define("_MI_OPT_STARTFROMMON", "Lundi");
define("_MI_OPT_WEEKNOEACHMONTH", "Pour chaque mois");
define("_MI_OPT_WEEKNOWHOLEYEAR", "Par année entière");
define("_MI_OPT_USENAME" , "Nom réel" ) ;
define("_MI_OPT_USEUNAME" , "Nom de Login" ) ;
define('_MI_OPT_TZ_USEXOOPS','Valeur paramétrée dans la configuration XOOPS');
define('_MI_OPT_TZ_USEWINTER','Valeur donnée par le serveur = heure d\'hiver (recommandé)');
define('_MI_OPT_TZ_USESUMMER','Valeur donnée par le serveur = heure d\'été');

// Admin Menus
define("_MI_PICAL_ADMENU0", "Validation d'Evènements");
define("_MI_PICAL_ADMENU1", "Gestionnaire d'Evènements");
define("_MI_PICAL_ADMENU_CAT", "Gestionnaire de Catégories");
define("_MI_PICAL_ADMENU_CAT2GROUP", "Permissions des Catégories");
define("_MI_PICAL_ADMENU2", "Permissions Globales");
define("_MI_PICAL_ADMENU_TM", "Maintenance des Tables");
define("_MI_PICAL_ADMENU_ICAL", "Imports iCalendar");
define('_MI_PICAL_ADMENU_PLUGINS','Gestionnaire de Plugins');
define('_MI_PICAL_ADMENU_MYBLOCKSADMIN','Administration des Blocs&Groupes');

// Text for notifications
define('_MI_PICAL_GLOBAL_NOTIFY', 'Globale');
define('_MI_PICAL_GLOBAL_NOTIFYDSC', 'Options de notifications globales de piCal.');
define('_MI_PICAL_CATEGORY_NOTIFY', 'Catégorie');
define('_MI_PICAL_CATEGORY_NOTIFYDSC', 'Options de notifications s\'appliquant à cette categorie.');
define('_MI_PICAL_EVENT_NOTIFY', 'Evènement');
define('_MI_PICAL_EVENT_NOTIFYDSC', 'Options de notifications s\'appliquant à cet évènement.');

define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFY', 'Nouvel Evènement');
define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFYCAP', 'Notifiez-moi quand un nouvel évènement est créé.');
define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFYDSC', 'Recevoir une notification quand un nouvel évènement est créé.');
define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvel évènement');

define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFY', 'Nouvel évènement dans la catégorie');
define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFYCAP', 'Notifiez moi quand un nouvel évènement est créé dans la Catégorie.');
define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFYDSC', 'Recevoir une notification quand un nouvel évènement est créé dans la Catégorie.');
define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvel évènement dans {CATEGORY_TITLE}');

}
