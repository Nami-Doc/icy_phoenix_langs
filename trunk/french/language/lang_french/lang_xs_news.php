<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* UseLess
* Lopalong
*** French Translation http://icyphoenix.fr ***
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'n_title' => 'Articles du lecteur de nouvelles',

	'n_main_title' => 'Articles',
	'n_main_title_explain' => 'Gérez les articles.<br/><br/>Si vous voulez changer l\'état de n\'importe quel article (affiché/caché), vous devez l\'éditer.',

// Config
	'n_config_title' => 'Configuration',
	'n_config_title_explain' => '',
	'n_config_updated' => 'Les réglages ont été modifiés.',

// Add menu item
	'n_add_page_title' => 'Ajouter un article',
	'n_add_page_title_explain' => 'Ajouter un article au lecteur de nouvelles',
	'n_add_header' => 'Ajouter un nouvel article',
	'n_news_item_added' => 'Article ajouté.',

// edit menu item
	'n_edit_page_title' => '&Eacute;diter un article',
	'n_edit_page_title_explain' => '',
	'n_edit_header' => '&Eacute;dition d\'un article déjà existant',

// Delete
	'n_news_delete' => 'Supprimer un article.',
	'n_news_delete_explain' => '',
	'n_confirm_delete_news' => 'Êtes-vous sûr de vouloir supprimer ce lecteur ?',

// General Settings used by Add/Edit Menu item
	'n_news_item' => 'Contenu',
	'n_news_item_display' => 'Montrer ce lecteur ?',

	'n_news_date' => 'Date',

	'n_create_item' => 'Ajouter un article',
	'n_create_item_null' => 'Vous ne pouvez pas créer d\'article sans contenu.',

	'n_news_smilies' => 'Activer les smileys ?',
	'n_smilies_button' => 'Smileys',

	'xs_no_news' => 'Il n\'y a aucun article.',
	'xs_news_invalid_date' => 'Vous avez entré une date invalide, le format est : dd/mm/yyyy',
	'n_news_updated' => 'L\'article a été mis à jour',
	'n_click_return_newslist' => 'Cliquez %sici%s pour retourner à la liste des articles',

// News XML Settings
	'n_xml_title' => 'Configuration des lecteurs',
	'n_xml_title_explain' => 'Configuration des lecteurs',
	'n_xml_title_explain_0' => 'Si l\'interrupteur global "Afficher le défileur de Nouvelles ?" est sur "Off", alors changer l\'état affiché/caché d\'un lecteur ne servira à rien car l\'interrupteur global l\'emporte sur la configuration individuelle d\'un lecteur.<br/><br/>Au contraire, si l\'interrupteur global est sur "On", vous devez changer l\'affichage de chaque lecteur individuellement en l\'éditant.',
	'n_xml_sub_title' => 'Lecteurs de nouvelles.',
	'n_xml_master_switch' => 'L\'interrupteur global pour les lecteurs est : <b>%s</b> ce qui signifie que les lecteurs <b>%s</b> affichés.',
	'n_xml_ms_will' => 'seront',
	'n_xml_ms_not' => 'ne seront pas',

	'xs_news_ticker_settings' => 'Settings for this News Ticker', //V: pas utilisé
	'xs_news_ticker_title' => 'Titre du lecteur :',
	'xs_news_ticker_title_explain' => 'Utilisé dans la liste des lecteurs de flux XML pour identifier chaque lecteur.',

	'xs_news_ticker_show' => 'Afficher le lecteur ?',
	'xs_news_ticker_feed' => 'Flux XML',
	'xs_news_ticker_feed_explain' => 'L\'URL où le lecteur doit récupérer ses articles à faire défiler, ou le texte que vous voulez faire défiler.',
	'xs_news_ticker_is_feed' => 'Flux XML ?',
	'xs_news_ticker_is_feed_explain' => 'Choisissez "Oui" si vous avez entré une adresse de flux XML au champ ci-dessus, si vous choisissez "Non", le texte entré ci-dessus défilera tel quel.',
	'xs_news_ticker_wh' => 'Largeur x Hauteur',
	'xs_news_ticker_wh_explain' => 'Vous pouvez choisir la largeur x la hauteur du lecteur (par défaut 98% x 20), la largeur doit être un pourcentage du cadre des lecteurs, la hauteur doit être en pixels.',
	'xs_news_ticker_fontsize' => 'Taille de la police',
	'xs_news_ticker_fontsize_explain' => 'Vous pouvez changer la taille de la police, ou rentrez 0 (Zéro) pour utiliser celle définie dans la feuille de style.',
	'xs_news_ticker_ss' => 'Vitesse de défilement',
	'xs_news_ticker_ss_explain' => 'Plus la valeur est haute, plus le texte défilera vite',
	'xs_news_ticker_sd' => 'Direction',
	'xs_news_left' => 'Gauche',
	'xs_news_right' => 'Droite',

// Add menu item
	'n_xml_add_page_title' => 'Ajouter un lecteur XML',
	'n_xml_add_page_title_explain' => '',
	'n_xml_add_header' => 'Ajout d\'un lecteur de flux XML',
	'n_xml_news_item_added' => 'Lecteur ajouté.',

// edit menu item
	'n_xml_edit_page_title' => '&Eacute;diter un lecteur XML',
	'n_xml_edit_page_title_explain' => '',
	'n_xml_edit_header' => '&Eacute;dition d\'un lecteur de flux XML',

// Delete
	'n_xml_news_delete' => 'Supprimer un lecteur XML.',
	'n_xml_news_delete_explain' => '',
	'n_xml_confirm_delete_news' => 'Êtes-vous sûr de vouloir supprimer ce lecteur ?',

// General Settings used by Add/Edit Menu item
	//V: inutilisé
	'n_xml_news_item' => 'News Item',
	'n_xml_news_item_display' => 'Display This Item?',

	'n_xml_create_item' => 'Ajouter un lecteur',
	'n_xml_create_item_null' => 'Vous ne pouvez pas ajouter un lecteur sans adresse ou texte.',

	'n_xml_no_feeds' => 'Il n\'y a pas de lecteur.',
	'n_xml_news_updated' => 'Le lecteur a été mis à jour',
	'n_xml_click_return_newslist' => 'Cliquez %sici%s pour retourner à la liste des lecteurs',

	'n_xml_show' => 'Montrer',
	'n_xml_title' => 'Titre du lecteur',
	)
);

?>