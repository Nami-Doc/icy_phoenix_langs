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
* Adam Alkins (phpbb at rasadam dot com)
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
	'Search_invalid_username' => 'Pseudo invalide',
	'Search_invalid_email' => 'Adresse e-mail invalide',
	'Search_invalid_ip' => 'Adresse IP invalide',
	'Search_invalid_group' => 'Groupe invalide',
	'Search_invalid_date' => 'Date invalide',
	'Search_invalid_postcount' => 'Compteur invalide',
	'Search_invalid_userfield' => 'Donnée personnelle invalide',
	'Search_invalid_lastvisited' => 'Date invalide pour le champ "dernière visite"',
	'Search_invalid_language' => 'Langue invalide',
	'Search_invalid_style' => 'Thème invalide',
	'Search_invalid_timezone' => 'Fuseau horaire invalide',
	'Search_invalid_moderators' => 'Forum invalide',
	'Search_invalid' => 'Recherche invalide',
	'Search_invalid_day' => 'Jour invalide',
	'Search_invalid_month' => 'Mois invalide',
	'Search_invalid_year' => 'Année invalide',
	'Search_no_regexp' => 'Votre base de données ne supporte pas les expressions régulières.',
	'Search_for_username' => 'Trouver les pseudos correspondant à %s',
	'Search_for_email' => 'Trouver les adresses e-mail correspondant à %s',
	'Search_for_ip' => 'Trouver les adresses IPs correspondant à %s',
	'Search_for_date' => 'Trouver les utilisateurs inscrits le %s %d/%d/%d',
	'Search_for_group' => 'Recherche dans le groupe %s',
	'Search_for_banned' => 'Recherche dans les bannis',
	'Search_for_admins' => 'Recherche dans les Administrateurs',
	'Search_for_mods' => 'Recherche dans les modérateurs',
	'Search_for_disabled' => 'Recherche dans les utilisateurs inactifs',
	'Search_for_disabled_pms' => 'Recherche dans les utilisateurs avec les messages privés désactivés',
	'Search_for_postcount_greater' => 'Recherche dans les utilisateurs avec plus de %d messages',
	'Search_for_postcount_lesser' => 'Recherche dans les utilisateurs avec moins de %d messages',
	'Search_for_postcount_range' => 'Recherche dans les utilisateurs ayant entre %d et %d messages',
	'Search_for_postcount_equals' => 'Recherche dans les utilisateurs ayant exactement %d messages',
	'Search_for_userfield_icq' => 'Recherche d\'une adresse ICQ correspondant à %s',
	'Search_for_userfield_yahoo' => 'Recherche d\'une adresse Yahoo correspondant à %s',
	'Search_for_userfield_aim' => 'Recherche d\'une adresse AIM correspondant à %s',
	'Search_for_userfield_msn' => 'Recherche d\'une adresse MSN correspondant à %s',
	'Search_for_userfield_website' => 'Recherche dans les utilisateurs ayant un site correspondant à %s',
	'Search_for_userfield_location' => 'Recherche dans les utilisateurs ayant une localisation correspondant à %s',
	'Search_for_userfield_interests' => 'Recherche dans les utilisateurs ayant un Intérêt correspondant à %s',
	'Search_for_userfield_occupation' => 'Recherche dans les utilisateurs ayant une Occupation correspondante à %s',
	'Search_for_lastvisited_inthelast' => 'Recherche dans les utilisateurs ayant visités ces dernières %s %s',
	'Search_for_lastvisited_afterthelast' => 'Recherche dans les utilisateurs étant venus après ces dernières %s %s',
	'Search_for_language' => 'Recherche dans les utilisateurs ayant %s comme langue',
	'Search_for_timezone' => 'Recherche dans les utilisateurs ayant %s comme fuseau horaire',
	'Search_for_style' => 'Recherche dans les utilisateurs ayant %s comme thème',
	'Search_for_moderators' => 'Recherche dans les modérateurs du forum %s',
	'Search_users_advanced' => 'Recherche étendue d\'utilisateurs',
	'Search_users_explain' => 'Ce module vous permet de chercher des utilisateurs selon nombre de critères. Veuillez lire la description en dessous de chaque champ pour comprendre à quoi ils correspondent et comment les utiliser.',
	'Search_username_explain' => 'Fait une recherche par nom d\'utilisateur sans respecter la casse. Vous pouvez utiliser * (un astérisk) comme joker. Vous pouvez aussi cocher la case "expression régulière" pour faire rechercher un motif. <b>Note :</b> les expression régulières ne marchent qu\'avec MySQL, PostgreSQL et Oracle 10g+.',
	'Search_email_explain' => 'Les règles sont les mêmes que pour les noms d\'utilisateur.',
	'Search_ip_explain' => 'Chercher les utilisateurs qui ont posté avec une adresse IP spécifique (xx.xx.xx.xx), par joker (xx.*.xx.xx) ou par plage (xx.xx.xx.xx-yy.yy.yy.yy). Note : Si vous entrez .255 pour le dernier bloc, ce sera comme utiliser un joker (par exemple, 10.0.0.255 effectue la même recherche que 10.0.0.*). La raison pour cela est qu\'aucune IP ne se termine par 255, cela est réservé. Vous pouvez trouver ça dans des plages, par exemple, 10.0.0.5-10.0.0.255 est comme 10.0.0.*, vous devriez entrer 10.0.0.5-10.0.0.254.',
	'Search_users_joined' => 'Utilisateurs s\'étant inscrits',
	'Search_users_lastvisited' => 'Utilisateurs ayant visités',
	'in_the_last' => 'Dans les derniers',
	'after_the_last' => 'Après les derniers',
	'Before' => 'Avant',
	'After' => 'Après',
	'Search_users_joined_explain' => 'Rechercher les utilisateurs qui se sont inscrits avant ou après une date spécifique (ou le jour même). Le format est YYYY/MM/DD.',
	'Search_users_groups_explain' => 'Voir tous les membres du groupe sélectionné',
	'Administrators' => 'Administrateurs', // Sert ET de label de recherche ET de 1ère option -_-"
	'Banned_users' => 'Utilisateurs bannis',
	'Disabled_users' => 'Utilisateurs inactifs',
	'Users_disabled_pms' => 'Utilisateurs avec les MP désactivés',
	'Search_users_misc_explain' => 'Administrateurs - Tous les utilisateurs ayant le statut d\'administateur.<br/>
	Modérateurs - Tous les modérateurs du forum.<br/>
	Utilisateurs bannis - Tous les comptes bannis.<br/>
	Utilisateurs inactifs - Tous les utilisateurs ayant un compte inactif (soit manuellement désactivés, soit n\'ayant jamais validé l\'e-mail d\'inscription).<br/>
	Utilisateurs avec les MP désactivés - Utilisateurs a qui ont a retiré la possibilité d\'envoyer des messages privés (via l\'onglet "Gérer" dans l\'onglet "Utilisateurs")',
	'Postcount' => 'Compteur de messages',
	'Equals' => '&Eacute;gal',
	'Greater_than' => 'Plus grand que',
	'Less_than' => 'Plus petit que',
	'Search_users_postcount_explain' => 'Note : vous pouvez aussi cherche une plage, utilisez l\'option "&Eacute;gal" et séparer vos deux bornes par un tiret, exemple : 10-25.',
	'Userfield' => 'Champ du profil',
	'Search_users_userfield_explain' => 'Cherche les utilisateurs basé sur un champ du profil. Comme pour les noms d\'utilisateurs, vous pouvez utiliser des jokers ou une expression régulière (en cochant la case du même nom).',
	'Search_users_lastvisited_explain' => 'Chercher des utilisateurs selon leur dernière visite.',
	'Search_users_language_explain' => 'Cherche les utilisateurs ayant sélectionné une langue spécifique dans leur profil',
	'Search_users_timezone_explain' => 'Cherche les utilisateurs ayant sélectionné un fuseau horaire spécifique dans leur profil',
	'Search_users_style_explain' => 'Cherche les utilisateurs ayant sélectionné un thème spécifique dans leur profil.',
	'Moderators_of' => 'Modérateurs de',
	'Search_users_moderators_explain' => 'Cherche les utilisateurs étant modérateurs du forum sélectionné (note : les permissions sont reconnues normalement, via les permissions de l\'utilisateur lui-même ou via les permissions du groupe).',
	'Regular_expression' => 'Expression régulière ?',

	'Manage' => 'Gérer',
	'Search_users_new' => '%s a donné %d résultat(s). Faire <a href="%s">une autre recherche</a>.',
	'Banned' => 'Bannis',
	'Not_banned' => 'Non bannis',
	'Search_no_results' => 'Aucun utilisateur n\'a été trouvé. Veuillez essayer avec d\'autres critères.<br/><b>Note :</b> si vous cherchez par nom d\'utilisateur ou adresse e-mail, vous devez utiliser le joker (*) pour faire une recherche partielle.',
	'Account_status' => 'Options du compte',
	'Sort_options' => 'Trier par :',
	'Last_visit' => 'Dernière visite',
	'Day' => 'Jour',
	)
);

?>