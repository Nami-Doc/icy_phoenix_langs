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
* Nivisec.com (support@nivisec.com)
* Lopalong
*** French Translation Vendethiel and Yros ***
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
	'Already_Rated' => 'Votre note: <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => 'Valider',
	'Choose_Rating' => 'Notez',
	'Topic_Rated' => 'Le sujet a été noté.',
	'Anon_Rate_Disabled' => 'Les visiteurs ne sont pas autorisés à noter',
	'Not_Authorized_To_Rate' => 'Vous n\'êtes pas autorisé à noter ce sujet',
	'Change_Rating' => 'Changer votre note',
	'View_Details' => '<a href="%s" title="Détails">Voir les informations détaillées</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="Détails">Voir les informations détaillées</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> a noté ce sujet <b>%d</b>/<b>%d</b> le %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Détails sur la note',
	'Details_For_Topic' => 'Détails sur les notes de &nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(ip enregistrée)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => 'Désactiver l\'évaluation pour ce sujet',
	'Summary' => 'Résumé des notes',
	'Topic_Rating_Details' => 'Détails des notes du sujet',

	'Anonymous' => 'Anonyme',
	'All_Forums' => 'dans tous les forums',//V: why is that prefixed w/ "topic" ? T_t

	'Max_Rate' => 'Note maximale',
	'User_Rate' => 'Note donnée',
	'Rate_Date' => 'Date',
	'Rate_Time' => 'Heure',
	'Rate_Order' => 'Note',

	'No_Topics_Rated' => 'Aucun sujet n\'a été notée',
	'Top_Topics' => 'Top %d des sujets notés', //%d = number of topics
	'Top_Topics_For_Forum' => 'Top %d des sujets notés dans %s', //%d = number of topics, %s is forum name
	'For_Forum' => 'de %s seulement', //%s = forum name
	'Last_Rated' => 'Dernier noté',
	'Number_of_Rates' => '# de notes',
	'Rating' => 'Note',
	'Min' => 'Min',
	'Max' => 'Max',
	'Min_Rating' => 'Note min',
	'By_Forum' => 'Liste par forum',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => 'Statut',
	'Auth_Description' => 'Descriptions',
	'NONE' => 'Notation totalement désactivée : la barre de notation n\'apparaîtra pas',
	'ALL' => 'Tous les utilisateurs peuvent voir les notes et noter, ce qui inclut les visiteurs et les membres',
	'REG' => 'Tout le monde peut voir les notes mais seuls les utilisateurs (et plus) peuvent voter.',
	'PRIVATE' => 'Seuls les utilisateurs (et plus) peuvent voir les notes et voter.',
	'MOD' => 'Seuls les modérateurs peuvent (et plus) noter mais tout le monde peut voir les notes',
	'ADMIN' => 'Seul les administrateurs peuvent noter mais tout le monde peut voir les notes',
	'Allow_Poster_To_Disable_Rating' => 'Autorise le créateur du sujet à désactiver la notation',
	'Allow_Detailed_Ratings_Page' => 'Autoriser les utilisateurs à voir le détails des notes',
	'Max_Rating' => 'Note MAX (1 à MAX)',
	'Allow_Users_To_ReRate' => 'Autoriser les utilisateurs à changer leur note',
	'Check_Anon_IP' => 'Vérifier les IP des visiteurs pour s\'assurer qu\'ils n\'ont pas déjà voté',
	'Anon_Rate_ID' => 'Adresse IP du prochain visiteur qui donnera une note.<br /><b>ATTENTION :</b> ne changez pas ce réglage sauf si vous savez <b>vraiment</b> ce que vous faites.<br />Changer cette valeur est souvent une mauvaise idée.', // V: inutilisé T_T
	'Big_Page_Number' => 'Nombre de sujets à afficher sur la page de notation séparée (si vous décidez de l\'utiliser)',
	'Main_Page_Number' => 'Nombre de sujets à afficher sur la page de notation principale (si vous décidez de l\'utiliser)',
	'Header_Page_Number' => 'Nombre de sujets à afficher dans l\'en-tête (si vous décidez de l\'utiliser)',
	'Mass_Update' => 'Mise à jour de masse',
	'Purge_Old_Ratings' => 'Supprimer les anciennes notes',
	'Min_Rates' => 'Nombre minimum de notes qu\'un sujet doit avoir avant d\'apparaître dans le Top des sujets les plus notés',
	'Purge' => 'Purger',
	'Purged' => 'Purgés',
	'Purge_Desc' => 'Supprime les notes des sujets supprimés qui auraient pu ne pas être supprimées avec le sujet.',
	'Clear' => 'Vider',
	'Clear_Desc' => 'Supprime <b>TOUTES</b> les notes. Ne faites ça que si vous avez des problèmes unusuels ou si vous voulez remettre à zéro vos notes. Cochez la case et entrez "YES" dans le champ à côté.',
	'Complete' => 'Terminé',
	'Authorization' => 'Autorisation',
	'rate_average' => 'Note moyenne',
	'rate_minimum' => 'Note minimum',
	'rate_maximum' => 'Note maximum',
	'Number_of_Rates' => 'Nombre de notes',
	'Rank2' => '#',
	'Rating' => 'Note',

//Error Messages
	'Database_Error' => 'Erreur dans la base de données',
	'Error_Dbase_Config' => 'Erreur en récupérant la configuration',
	'Error_Dbase_Ratings' => 'Erreur en récupérant ou en modifiant la configuration.',
	'Error_Dbase_Auth' => 'Erreur en récupérant ou en modifiant les autorisations.',
	'No_Topic_ID' => 'Vous devez spécifier un sujet.',
	)
);

?>