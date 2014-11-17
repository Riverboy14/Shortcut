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
// Required for MODULES page - Vaaditaan MODUULIT sivulla
//----------------------------------------

"shortcut_module_name" =>
"Shortcut",

"shortcut_module_description" =>
"Lyhentää linkit käyttäen sivustosi osoitetta",

"shortcut_module_version" =>
"Shortcut",

"modules" =>
"Moduulit",

//----------------------------------------
//  Update - Päivitys
//----------------------------------------

'update' =>
"Päivitä",

'update_shortcut' =>
"Päivitä moduuli",

'update_shortcut_module' =>
"Päivitä Moduuli",

'update_failure' =>
"Päivitys ei onnistunut.",

'update_successful' =>
"Paivitys onnistui!",

'shortcut_update_message' =>
"Näyttää siltä, että olet ladannut uuden version tästä moduulista. Ole hyvä ja suorita päivitys klikkaamalla 'Päivitä' alapuolelta.",

//----------------------------------------
//  Preferences - Asetukset
//----------------------------------------

'preferences'	=>
'Asetukset',

'shortcut_preferences_exp'	=>
'Hallitse ja muokkaa alla näkyviä asetuksia.',

'shortcut_prefix'	=>
'Shortcut Prefix',

'shortcut_prefix_exp'	=>
'Tätä käytetään prefixin lisäämiseen, ja on vaadittu osa jotta Shortcut tunnistaa lyhennetyt verkko-osoitteet.',

'prefix_required'	=>
'prefix on pakollinen. Ilman sitä jokainen sivuhaku joudutaan ensin ajamaan moduulin kautta. Se vaikuttaisi negatiivisesti sivustosi nopeuteen ja käyttäjäkokemukseen.',

'shortcut_ambiguous_chars' =>
'Vältä monimutkaisia ja hankalia kirjainyhdistelmiä linkinlyhennyksen luomisessa?',

'shortcut_ambiguous_chars_exp' =>
'Valitse tämä jos et halua käyttää erikoisia, monimutkaisia lyhentämistapoja verkko-osoitteissa (1, i, l, 0, o).',

'save_preferences' =>
'Tallenna asetukset',

//----------------------------------------
//  Shortcuts - linkin lyhennykset
//----------------------------------------

'full_url' =>
'Täydellinen URL',

'shortcut'	=>
'Shortcut',

'shortcuts'	=>
'Shortcuts',

'next_shortcut' =>
'Seuraava Shortcut',

'url'	=>
'URL',

'shortcut_url' =>
'Shortcut URL',

'custom_shortcut'	=>
'Lisää oma Shortcut',

'actions'	=>
'Tapahtumat',

'shortcuts_exp'	=>
'Luo Shortcut linkit täältä.',

'shortcut_base'	=>
'Shortcut oletus URL',

'shortcut_base_exp'	=>
'Ellet halua käyttää oletuksena sivuston tavallista verkko-osoitetta, voit määritellä haluamasi vaihtoehtoisen osoitteen tästä.',

'shortcut_exists'	=>
'Kyseinen shortcut on jo olemassa, kokeile jotain muuta.',

'shortcut_invalid'	=>
'Väärä tai viallinen shortcut. Ole hyvä ja kokeile uudelleen.',

'shortcut_missing_prefix'	=>
'Jokainen shortcut tulee sisältää prefixin, eli tunnisteen. Tunniste auttaa sivuston käyttömukavuudessa eli nopeuden hallinnassa. Käyttämäsi tunniste on: %prefix%',

'url_invalid'	=>
'Verkko-osoite (URL) jonka annoit, on virheellinen. Ole hyvä ja yritä uudelleen.',

'url_invalid_short'	=>
'Viallinen URL',

'shortcut_saved'	=>
'%shortcut% on tallennettu.',

'confirm_delete'	=>
'Haluatko varmasti poistaa tämän linkin lyhennyksen: ',

'shortcut_deleted'	=>
'Poistettu onnistuneesti.',

'is'	=>
'on',

'hits'	=>
'Klikkaukset',

'enter_url'	=>
'Lisää verkko-osoite (URL) tähän',

'shortened_url_for'	=>
'Lyhennetty verkko-osoite(URL) linkille',

'edit_this'	=>
'Muokkaa tätä lyhennettä, %shortcut_msg%, käyttämällä alla näkyviä lomakekenttiä.',

//----------------------------------------
//  Main Menu - Päävalikko
//----------------------------------------

'homepage' =>
"Kotisivu",

'online_documentation' =>
"Käyttöohjeet verkossa",

//----------------------------------------
//  Buttons - Nappulat, painikkeet
//----------------------------------------

'save' =>
"Tallenna",

//----------------------------------------
//  Errors - Virheet
//----------------------------------------

'invalid_request' =>
"Viallinen Pyyntö",

'shortcut_module_disabled' =>
"Shortcut Moduuli ei ole tällä hetkellä käytössä.  Varmista että se on asennettu ja että sen versio on uusin saatavilla oleva menemällä ylläpidon hallintapaneelin kautta moduulien hallintasivulle.",

'incorrect_shortcut_prefix' =>
"Sopimaton shortcut prefix eli tunniste",

//	----------------------------------------
//	 Accessory - Lisäosa
//	----------------------------------------

'create_new_shortcut' =>
'Luo uusi lyhennetty URL',

'edit_shortcut' =>
'Muokkaa',

'paste_any_url' =>
'Lisää alkuperäinen URL',

'custom_shortcut_optional' =>
'Omavalintainen Shortcut (Ei pakollinen)',

'get_shortcut' =>
'Luo lyhennetty URL',

'create_shortcut' =>
'Luo lyhennetty URL',

'update_shortcut' =>
'Päivitä lyhennetty URL',

'get_shortcut_loading' =>
'Luodaan linkkiä...',

'your_shortcut_url' =>
'Lyhennetty URL: ',

'recent_shortcuts' =>
'Viimeisimmät lyhennökset',

'no_shortcuts' =>
'Ei vielä lyhennettyjä linkkejä. Luo sellainen nyt!',

'copy_shortcut_url' =>
'Kopioi leikepöydälle',

'copied' =>
'Copied!',

'error_accessory_enter_url' =>
'Sinun tulee antaa verkko-osoite ennen kuin voit luoda lyhennetyn linkin siitä.',

//	----------------------------------------
//	Fieldtype - lomakekentän tyyppi
//	----------------------------------------

'shortcut_full_url' =>
'Verkko-osoitteen oletus (täydellinen) URL',

'shortcut_full_url_desc' =>
'Tätä osoitetta käytetään oletuksena. Voit käyttää {site_url}, {entry_id}, ja {url_title} tageja luodaksesi kohdelinkin dynaamisesti (esim: http://mysite.com/blogi/artikkeli/{url_title} tai {site_url}blogi/artikkeli/{url_title})',

/* END */
''=>''
);
?>