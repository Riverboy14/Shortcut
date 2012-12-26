<?php

 /**
 * Solspace - Shortcut
 *
 * @package		Solspace:Shortcut
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2010-2012, Solspace, Inc.
 * @link		http://www.solspace.com/docs/addon/c/Shortcut/
 * @version		2.0.0
 * @filesource 	./system/expressionengine/third_party/shortcut/language/english/
 * @translation	French translation by @putitinred
 */

$L = $lang = array(

//----------------------------------------
// Required for MODULES page
//----------------------------------------

"shortcut_module_name" =>
"Shortcut / Raccourci",

"shortcut_module_description" =>
"Crée de courts alias d'URL afin d'accéder à vos URLs",

"shortcut_module_version" =>
"Shortcut / Raccourci",

"modules" =>
"Modules",

//----------------------------------------
//  Update
//----------------------------------------

'update' =>
"Mettre à Jour",

'update_shortcut' =>
"Mettre à jour Shortcut",

'update_shortcut_module' =>
"Mettre à jour le module Shortcut",

'update_failure' =>
"La MAJ a échoué.",

'update_successful' =>
"La MAJ a réussi.",

'shortcut_update_message' =>
"Il semble que vous ayez téléchargé une nouvelle version de Shortcut. Merci d'exécuter le script de MAJ en cliquant sur 'Mettre à Jour' ci-dessous.",

//----------------------------------------
//  Preferences
//----------------------------------------

'preferences'	=>
'Préférences',

'shortcut_preferences_exp'	=>
'Gérer vos préférences pour Shortcut ci-dessous.',

'shortcut_prefix'	=>
'Préfixe Shortcut',

'shortcut_prefix_exp'	=>
'Ceci sert à ajouter un préfixe à vos URL raccourcies : c\'est obligatoire pour que Shortcut reconnaisse ces URL.',

'prefix_required'	=>
'Un préfixe est requis. Ce préfixe permet à Shortcut de reconnaître les URL raccourcies. Sans le préfixe, TOUTES les requêtes de page web devraient d\'abord passer dans le module Shortcut. Cela générerait de très mauvaises performances d\'accès à votre site web !',

'shortcut_ambiguous_chars' =>
'Eviter d\'utiliser des caractères ambigus dans Shortcut ?',

'shortcut_ambiguous_chars_exp' =>
'Cochez cette case si vous ne souhaitez pas que Shortcut utilise de caractères ambigus pour les URL générées automatiquement (1, i, l, 0, o).',

'save_preferences' =>
'Enregistrer les préférences',

//----------------------------------------
//  Shortcuts
//----------------------------------------

'full_url' =>
'URL complète',

'shortcut'	=>
'Raccourci',

'shortcuts'	=>
'Raccourcis',

'next_shortcut' =>
'Raccourci suivant',

'url'	=>
'URL',

'shortcut_url' =>
'URL raccourcie',

'custom_shortcut'	=>
'Raccourci personnalisé',

'actions'	=>
'Actions',

'shortcuts_exp'	=>
'Créer des URL Shortcut ici.',

'shortcut_base'	=>
'URL de base de Shortcut',

'shortcut_base_exp'	=>
'Plutôt que d\'utiliser l\'URL par défaut du site, ici vous pouvez en indiquer une qui soit personnalisée.',

'shortcut_exists'	=>
'Ce raccourci existe déjà. Merci d\'en essayer un autre.',

'shortcut_invalid'	=>
'Le raccourci communiqué est invalide. Merci de réessayer.',

'shortcut_missing_prefix'	=>
'Tous les raccourcis DOIVENT posséder le préfixe que vous avez prévu. Le préfixe permet d\'éviter les mauvaises performances lors du chargement des pages web. Votre préfixe est : %prefix%',

'url_invalid'	=>
'L\'URL soumise est invalide. Merci de réessayer.',

'url_invalid_short'	=>
'URL invalide',

'shortcut_saved'	=>
'%shortcut% a été sauvegardé pour être votre raccourci.',

'confirm_delete'	=>
'Êtes-vous sûr de vouloir supprimer le raccourci : ',

'shortcut_deleted'	=>
'Votre raccourci a été supprimé.',

'is'	=>
'est',

'hits'	=>
'Hits',

'enter_url'	=>
'Entrez l\'URL',

'shortened_url_for'	=>
'URL raccourcie pour',

'edit_this'	=>
'Éditer le raccourci, %shortcut_msg%, en utilisant les champs ci-dessous.',

//----------------------------------------
//  Main Menu
//----------------------------------------

'homepage' =>
"Page d\'accueil",

'online_documentation' =>
"Documentation en ligne",

//----------------------------------------
//  Buttons
//----------------------------------------

'save' =>
"Enregistrer",

//----------------------------------------
//  Errors
//----------------------------------------

'invalid_request' =>
"Requête invalide",

'shortcut_module_disabled' =>
"Le module Shortcut est actuellement désactivé. Merci de vous assurer qu\'il est installé et à jour en vous rendant sur le panneau de contrôle du module dans le Tableau de Bord ExpressionEngine.",

'incorrect_shortcut_prefix' =>
"Préfixe de raccourci Shortcut incorrect",

//	----------------------------------------
//	 Accessory
//	----------------------------------------

'create_new_shortcut' =>
'Créer une URL Shortcut',

'edit_shortcut' =>
'Éditer une URL Shortcut',

'paste_any_url' =>
'Entrer l\'URL originale',

'custom_shortcut_optional' =>
'Raccourci personnalisé (optionnel)',

'get_shortcut' =>
'Récupérer une URL Shortcut',

'create_shortcut' =>
'Créer une URL Shortcut',

'update_shortcut' =>
'Mettre à Jour l\'URL Shortcut',

'get_shortcut_loading' =>
'Création du raccourci Shortcut&hellip;',

'your_shortcut_url' =>
'Votre URL Shortcut : ',

'recent_shortcuts' =>
'Raccourcis récents',

'no_shortcuts' =>
'Aucun raccourci trouvé. Créez-en maintenant !',

'copy_shortcut_url' =>
'Copier vers le presse-papier',

'copied' =>
'Copié !',

'error_accessory_enter_url' =>
'Vous devez D\'ABORD saisir une URL dans le champ URL avant de pouvoir créer un raccourci !',

//	----------------------------------------
//	Fieldtype
//	----------------------------------------

'shortcut_full_url' =>
'URL complète par défaut',

'shortcut_full_url_desc' =>
'L\'URL complète par défaut dans le type de champ Shortcut, utilisée pour créer l\'URL raccourcie. Vous pouvez utiliser {site_url}, {entry_id}, et {url_title} pour les alimenter de manière dynamique dans l\'URL complète (ex. : http://monsite.com/blog/article/{url_title} ou {site_url}blog/article/{url_title})',

/* END */
''=>''
);
?>