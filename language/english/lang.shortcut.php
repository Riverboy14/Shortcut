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
 */

$L = $lang = array(

//----------------------------------------
// Required for MODULES page
//----------------------------------------

"shortcut_module_name" =>
"Shortcut",

"shortcut_module_description" =>
"Creates short URL aliases to access your URL\'s",

"shortcut_module_version" =>
"Shortcut",

"modules" =>
"Modules",

//----------------------------------------
//  Update
//----------------------------------------

'update' =>
"Update",

'update_shortcut' =>
"Update the Shortcut Module",

'update_shortcut_module' =>
"Update the Shortcut Module",

'update_failure' =>
"The update was not successful.",

'update_successful' =>
"The update was successful",

'shortcut_update_message' =>
"It looks like you have uploaded a new version of Shortcut. Please run the upgrade script by clicking 'Update' below.",

//----------------------------------------
//  Preferences
//----------------------------------------

'preferences'	=>
'Preferences',

'shortcut_preferences_exp'	=>
'Control your Shortcut preferences below.',

'shortcut_prefix'	=>
'Shortcut Prefix',

'shortcut_prefix_exp'	=>
'This is used to add a prefix to your shortcut URL\'s, and is required for Shortcut to recognize shortened URL\'s.',

'prefix_required'	=>
'A prefix is required. Using a prefix allows the Shortcut module to recognize shortcut urls. Without the prefix, every single page request would have to first go through the Shortcut module. This would result in poor performance for your website.',

'shortcut_ambiguous_chars' =>
'Avoid using Ambiguous Characters in Shortcut?',

'shortcut_ambiguous_chars_exp' =>
'Check off this box if you do not want Shortcut to use ambiguous characters in automatically generated URL\'s (1, i, l, 0, o).',

'save_preferences' =>
'Save Preferences',

//----------------------------------------
//  Shortcuts
//----------------------------------------

'full_url' =>
'Full URL',

'shortcut'	=>
'Shortcut',

'shortcuts'	=>
'Shortcuts',

'next_shortcut' =>
'Next Shortcut',

'url'	=>
'URL',

'shortcut_url' =>
'Shortcut URL',

'custom_shortcut'	=>
'Custom Shortcut',

'actions'	=>
'Actions',

'shortcuts_exp'	=>
'Create Shortcut URL\'s here.',

'shortcut_base'	=>
'Shortcut Base URL',

'shortcut_base_exp'	=>
'Instead of using the default site URL, you can specify a custom one here.',

'shortcut_exists'	=>
'That shortcut already exists. Please try another.',

'shortcut_invalid'	=>
'That shortcut you provided is invalid. Please try again.',

'shortcut_missing_prefix'	=>
'Every shortcut must have your designated prefix. The prefix helps prevent poor page load performance. Your prefix is: %prefix%',

'url_invalid'	=>
'The URL you provided is invalid. Please try again.',

'url_invalid_short'	=>
'Invalid URL',

'shortcut_saved'	=>
'%shortcut% has been saved as your shortcut.',

'confirm_delete'	=>
'Are you sure you want to delete the shortcut: ',

'shortcut_deleted'	=>
'Your shortcut as been deleted.',

'is'	=>
'is',

'hits'	=>
'Hits',

'enter_url'	=>
'Enter URL',

'shortened_url_for'	=>
'Shortened URL for',

'edit_this'	=>
'Edit the shortcut, %shortcut_msg%, using the fields below.',

//----------------------------------------
//  Main Menu
//----------------------------------------

'homepage' =>
"Homepage",

'online_documentation' =>
"Online Documentation",

//----------------------------------------
//  Buttons
//----------------------------------------

'save' =>
"Save",

//----------------------------------------
//  Errors
//----------------------------------------

'invalid_request' =>
"Invalid Request",

'shortcut_module_disabled' =>
"The Shortcut module is currently disabled.  Please insure it is installed and up to date by going 
to the module's control panel in the ExpressionEngine Control Panel",

'incorrect_shortcut_prefix' =>
"Incorrect shortcut prefix",

//	----------------------------------------
//	 Accessory
//	----------------------------------------

'create_new_shortcut' =>
'Create a Shortcut URL',

'edit_shortcut' =>
'Edit a Shortcut URL',

'paste_any_url' =>
'Enter Original URL',

'custom_shortcut_optional' =>
'Custom Shortcut (optional)',

'get_shortcut' =>
'Get Shortcut URL',

'create_shortcut' =>
'Create Shortcut URL',

'update_shortcut' =>
'Update Shortcut URL',

'get_shortcut_loading' =>
'Creating Shortcut...',

'your_shortcut_url' =>
'Your Shortcut URL: ',

'recent_shortcuts' =>
'Recent Shortcuts',

'no_shortcuts' =>
'No shortcuts found. Make some now!',

'copy_shortcut_url' =>
'Copy to Clipboard',

'copied' =>
'Copied!',

'error_accessory_enter_url' =>
'You must first provide a URL in the URL field before creating a shortcut.',

//	----------------------------------------
//	Fieldtype
//	----------------------------------------

'shortcut_full_url' =>
'Default Full URL',

'shortcut_full_url_desc' =>
'The default full URL in the Shortcut fieldtype, used to create the shortcut URL. You may use {site_url}, {entry_id}, and {url_title} to populate them dynamically in the full URL (ex: http://mysite.com/blog/article/{url_title} or {site_url}blog/article/{url_title})',

/* END */
''=>''
);
?>