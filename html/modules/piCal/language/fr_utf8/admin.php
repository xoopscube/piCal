<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_AM_LOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2007-02-04 05:11:48
define('_AM_PICAL_DBUPDATED','Database Updated Successfully!');
define('_AM_PICAL_PERMADDNG','Could not add %s permission to %s for group %s');
define('_AM_PICAL_PERMADDOK','Added %s permission to %s for group %s');
define('_AM_PICAL_PERMRESETNG','Could not reset group permission for module %s');
define('_AM_PICAL_PERMADDNGP','All parent items must be selected.');

define( 'PICAL_AM_LOADED' , 1 ) ;

// titles
define("_AM_ADMISSION","Evènements approuvés");
define("_AM_MENU_EVENTS","Gestionnaire d'évènements");
define("_AM_MENU_CATEGORIES","Gestionnaire de catégories");
define("_AM_MENU_CAT2GROUP","Permissions des catégories");
define("_AM_ICALENDAR_IMPORT","Imports iCalendar");
define("_AM_GROUPPERM","Permissions Globlales");
define("_AM_TABLEMAINTAIN","Maintenance des tables (Mise à jour)");
define("_AM_MYBLOCKSADMIN","Admin des blocs et groupes de piCal");

// forms
define("_AM_BUTTON_EXTRACT","Extraire");
define("_AM_BUTTON_ADMIT","Accepter");
define("_AM_BUTTON_MOVE","Déplacer");
define("_AM_BUTTON_COPY","Copier");
define("_AM_CONFIRM_DELETE","Supprimer le(s) évènement(s) OK?");
define("_AM_CONFIRM_MOVE","Retirer le lien de l'ancienne catégorie et ajouter un lien dans la catégorie spécifiée OK?");
define("_AM_CONFIRM_COPY","Ajouter un lien dans la catégorie spécifiée OK?");
define('_AM_OPT_PAST','Passés');
define('_AM_OPT_FUTURE','Futurs');
define('_AM_OPT_PASTANDFUTURE','Passés&Futurs');

// format
define("_AM_DTFMT_LIST_ALLDAY",'y-m-d');
define("_AM_DTFMT_LIST_NORMAL",'y-m-d<\b\r />H:i');

// timezones
define('_AM_TZOPT_SERVER','A l\'heure du fuseau horaire du serveur');
define('_AM_TZOPT_GMT','A l\'heure GMT');
define('_AM_TZOPT_USER','A l\'heure du fuseau horaire de l\'utilisateur');

define("_AM_FMT_SERVER_TZ_ALL","Les Fuseau Horaire du Serveur (heure d'hiver) est: %+2.1f<br />Le Fuseau Horaire du Serveur (heure d'été) est : %+2.1f<br />Le Nom de la zone du serveur est: %s<br />La valeur issue de la configuration de XOOPS est: %+2.1f<br />La valeur que Pical utilise est: %+2.1f<br />");


// admission
define("_AM_LABEL_ADMIT","Les évènements vérifiés sont au statut : à approuver ");
define("_AM_MES_ADMITTED","Evènement(s) a(ont) été approuvé(s)");
define("_AM_ADMIT_TH0","Utilisateur");
define("_AM_ADMIT_TH1","Heure de début");
define("_AM_ADMIT_TH2","Heure de fin");
define("_AM_ADMIT_TH3","Titre");
define("_AM_ADMIT_TH4","Périodicité");

// events manager & importing iCalendar

define("_AM_LABEL_IMPORTFROMWEB","Importer les données d'iCalendar à partir du web (Rentrer l'URL en commen�ant par 'http://' ou 'webcal://')");
define("_AM_LABEL_UPLOADFROMFILE","Télécharger les données d'iCalendar (Sélectionner un fichier en local sur votre machine)");
define("_AM_LABEL_IO_CHECKEDITEMS","Les évènements vérifiés sont : ");
define("_AM_LABEL_IO_OUTPUT"," à exporter dans iCalendar");
define("_AM_LABEL_IO_DELETE"," à supprimer ");
define("_AM_MES_EVENTLINKTOCAT","évènement(s) ont été lié(s) à cette catégorie");
define("_AM_MES_EVENTUNLINKED","évènement(s) ont eu leur(s) lien(s) supprimé de l'ancienne catégorie");
define("_AM_FMT_IMPORTED","évènement(s) ont été importé(s) depuis '%s'");
define("_AM_MES_DELETED","évènement(s) ont été supprimé(s)");
define("_AM_IO_TH0","Utilisateur");
define("_AM_IO_TH1","Date et heure de début");
define("_AM_IO_TH2","Date et heure de fin");
define("_AM_IO_TH3","Titre");
define("_AM_IO_TH4","Règles");
define("_AM_IO_TH5","Admission");

// Group's Permissions
define( '_AM_GPERM_G_INSERTABLE' , "peut ajouter" ) ;
define( '_AM_GPERM_G_SUPERINSERT' , "super ajout" ) ;
define( '_AM_GPERM_G_EDITABLE' , "peut éditer" ) ;
define( '_AM_GPERM_G_SUPEREDIT' , "super édition" ) ;
define( '_AM_GPERM_G_DELETABLE' , "peut supprimer" ) ;
define( '_AM_GPERM_G_SUPERDELETE' , "super suppression" ) ;
define( '_AM_GPERM_G_TOUCHOTHERS' , "peut modifier les autres" ) ;
define( '_AM_CAT2GROUPDESC' , "Cochez les catégories auxquelles vous pouvez accéder" ) ;
define( '_AM_GROUPPERMDESC' , "Sélectionner les actions que tous les groupes sont autorisés à faire<br/>Si vous avez besoin de ce dispositif, définissez d'abord les 'Droits Utilisateurs' à Spécifier dans les permissions des groupes.<br />Les réglages des groupes administrateurs et invités seront ignorés." ) ;

// Table Maintenance
define( '_AM_MB_SUCCESSUPDATETABLE' , "La mise à jour de la(des) table(s) a été effectuée avec succès" ) ;
define( '_AM_MB_FAILUPDATETABLE' , "La mise à jour de la(des) table(s) a échoué" ) ;
define( '_AM_NOTICE_NOERRORS' , "Aucune erreur détectée dans les tables et les enregistrements." ) ;
define( '_AM_ALRT_CATTABLENOTEXIST' , "La table catégories n'existe pas.<br />\nVoulez-vous créer cette table ?" ) ;
define( '_AM_ALRT_OLDTABLE' , "La structure de la table èvenements est ancienne.<br />\nVoulez-vous mettre à jour la table ?" ) ;
define( '_AM_ALRT_TOOOLDTABLE' , "La table retourne une erreur.<br />\nPeut-&ecirc;tre utilisiez vous piCal 0.3x ou précédent.<br />\nPremièrement, Mettez à jour vers 0.4x or 0.5x." ) ;
define( '_AM_FMT_WRONGSTZ' , "Il y a %s évènement(s) qui sont enregistré(s) avec un mauvais fuseau horaire.<br />Voulez-vous les réparer ?" ) ;
define('_AM_TH_SERVER_TZ_COUNT','Evènements');
define('_AM_TH_SERVER_TZ_VALUE','Fuseau Horaire');
define('_AM_TH_SERVER_TZ_VALUE_TO','Modifications (-14.0�+14.0)');
define('_AM_JSALRT_SERVER_TZ','N\'oubliez pas de sauvegarder la table des évènements avant de réaliser cette opération');
define('_AM_NOTICE_SERVER_TZ','Si votre serveur définit les fuseaux horaires  avec l\'heure d\'été (= sauvegarde à l\'heure solaire) et que quelques évènements étaient enregistrés sous piCal 0.6x ou 0.7x, n\'appuyer pas sur ce bouton.<br />eg) Il est naturel d\'afficher les deux -5.0 et -4.0 en EDT (Eastern Daylight Time)');
define('_AM_MB_SUCCESSTZUPDATE','Les évènements ont été modifiés avec leur(s fuseau(x) horaires(s).');

// Categories
define( '_AM_CAT_TH_TITLE' , 'Titre' ) ;
define( '_AM_CAT_TH_DESC' , 'Description' ) ;
define( '_AM_CAT_TH_PARENT' , 'Catégorie parente' ) ;
define( '_AM_CAT_TH_OPTIONS' , 'Options' ) ;
define( '_AM_CAT_TH_LASTMODIFY' , 'Dernière modification' ) ;
define( '_AM_CAT_TH_OPERATION' , 'Operation' ) ;
define( '_AM_CAT_TH_ENABLED' , 'permettre' ) ;
define( '_AM_CAT_TH_WEIGHT' , 'Poids' ) ;
define( '_AM_CAT_TH_SUBMENU' , 'Enregistrer dans un sous-menu' ) ;
define( '_AM_BTN_UPDATE' , 'Mise à jour' ) ;
define( '_AM_MENU_CAT_EDIT' , 'Editer une Catégorie' ) ;
define( '_AM_MENU_CAT_NEW' , 'Créer une nouvelle Categorie' ) ;
define( '_AM_MB_MAKESUBCAT' , 'Sous-catégorie' ) ;
define( '_AM_MB_MAKETOPCAT' , 'Créer une catégorie dans un niveau supérieur' ) ;
define( '_AM_MB_CAT_INSERTED' , 'Nouvelle catégorie créée' ) ;
define( '_AM_MB_CAT_UPDATED' , 'Catégorie mise à jour' ) ;
define( '_AM_FMT_CAT_DELETED' , '%s Catégories supprimés' ) ;
define( '_AM_FMT_CAT_BATCHUPDATED' , '%s Catégories mises à jour' ) ;
define( '_AM_FMT_CATDELCONFIRM' , 'Voulez-vous suprimer ces catégories ?' ) ;


// Plugins
define('_AM_PI_UPDATED','Les Plugins sont à jour');
define('_AM_PI_TH_TYPE','Type');
define( '_AM_PI_TH_OPTIONS' , 'Options (Habituellement à blanc)' ) ;
define('_AM_PI_TH_TITLE','Titre');
define('_AM_PI_TH_DIRNAME','Répertoire du Module');
define('_AM_PI_TH_FILE','Fichier du Plugin');
define('_AM_PI_TH_DOTGIF','Dot GIF');
define('_AM_PI_TH_OPERATION','Opération');
define('_AM_PI_ENABLED','Activé');
define('_AM_PI_DELETE','Supprimer');
define('_AM_PI_NEW','Nouveau');
define('_AM_PI_VIEWYEARLY','Vue Année');
define('_AM_PI_VIEWMONTHLY','Vue Mois');
define('_AM_PI_VIEWWEEKLY','Vue Semaine');
define('_AM_PI_VIEWDAILY','Vue Jour');

}

?>