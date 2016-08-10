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
* Philipp Kordowich
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

// Functions available
// Usage: $mtnc[] = array(internal Name, Name of Function, Description of Function, Warning Message (leave empty to avoid), Number of Check function (Integer))
// Use $mtnc[] = array('--', '', '', '', 0) for a space row (you can us a different check function)
$mtnc[] = array('statistic',
	'Statistiques',
	'Affiche des informations sur le forum et la base de donn&eacute;es.',
	'',
	0);
$mtnc[] = array('config',
	'Configuration',
	'Permet de configurer la maintenance.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'V&eacute;rifier les tables des groupes et des utilisateurs',
	'Cette op&eacute;ration permet de v&eacute;rifier les tables des utilisateurs et des groupes, r&eacute;parant les groupes personnels.',
	'Tous les groupes sans membre seront supprim&eacute;s. Continuer ?',
	0);
$mtnc[] = array('check_post',
	'V&eacute;rifier les tables des sujets et messages.',
	'Cette op&eacute;ration permet de v&eacute;rifier les tables des sujets et des messages.',
	'Tous les messages sans texte seront supprim&eacute;s. Continuer ?',
	0);
$mtnc[] = array('check_vote',
	'V&eacute;rifier les tables de vote.',
	'Cette op&eacute;ration permet de v&eacute;rifier la table des votes.',
	'Vous allez perdre toute information sur les votes appartenant &agrave; des sujets disparus. Continuer ?',
	0);
$mtnc[] = array('check_pm',
  'V&eacute;rifier les tables de message priv&eacute;.',
	'Cette op&eacute;ration permet de v&eacute;rifier la table des messages priv&eacute;s.',
	'Les messages non-lus dont l\'&eacute;crivain / le destinataire n\'existent plus seront supprim&eacute;s. Continuer ?',
	0);
$mtnc[] = array('check_config',
	'V&eacute;rifier la table de configuration',
	'Cette op&eacute;ration permet de v&eacute;rifier qu\'aucun clef ne manque dans la table de configuration.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'V&eacute;rifier la table de recherche par mot.',
	'Cette op&eacute;ration permet de v&eacute;rifier la table de recherche par mot. Cette table est utilis&eacute;e pour la recherche.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'V&eacute;rifier la table de listing des mots.',
	'Cette op&eacute;ration supprime tous les mots de la table de listing qui ne sont plus utiles.',
	'Cette op&eacute;ration peut prendre un certain temps &agrave; s\'ex&eacute;cuter. Elle n\'est pas obligatoire, mais permet de r&eacute;duire la taille de la base de donn&eacute;ees. Continuer ?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'Synchroniser les forums et les sujets.',
	'Cette op&eacute;ration synchronise les compteurs de sujets / messages dans les forums, ainsi que les premiers / derniers messages.',
	'Cette op&eacute;ration peut prendre du temps pour terminer. Si votre serveur n\'autorise pas la fonction set_time_limit(), l\'op&eacute;ration pourrait s\'interrompre abruptement. Il n\'y a pas de risque de perte de donn&eacute;es, mais certaines valeurs ne seront pas mises &agrave; jour. Continuer ?',
	0);
$mtnc[] = array('synchronize_user',
	'Synchroniser les compteurs de messages des utilisateurs.',
	'Cette op&eacute;ration permet de synchroniser les compteurs de messages pour chaque utilisateur.',
	'<b>Attention :</b> Les messages d&eacute;l&eacute;st&eacute;s ne sont habituellement pas d&eacute;compt&eacute;s des compteurs de messages. Si vous ex&eacute;cutez cette op&eacute;ration, les messages seront d&eacute;compt&eacute;s. Cette action ne peut &ecirc;tre d&eacute;faite. Continuer ?',
	6);
$mtnc[] = array('synchronize_mod_state',
  'Synchroniser le status de mod&eacute;rateur',
	'Cette op&eacute;ration permet de resynchroniser le status "mod&eacute;rateur" pour les utilisateurs.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'Corriger la date du dernier message.',
	'Cette op&eacute;ration permet de corriger la date du dernier message si elle est dans le futur. Cette op&eacute;ration permet de r&eacute;gler une erreur que les utilisateurs pourraient rencontrer, qui leur dit qu\'ils ne peuvent pas poster de nouveau message si rapidement apr&egrave;s le dernier.',
	'Tous les messages dans le futur seront ajust&eacute;s &agrave; la date actuelle. Continuer ?',
	0);
$mtnc[] = array('reset_sessions',
	'Remettre &agrave; z&eacute;ro toutes les sessions.',
  'Cette op&eacute;ration remet &agrave; z&eacute;ro la table de sessions.',
	'Tous les utilisateurs actuellement connect&eacute;s vont &ecirc;tre d&eacute;connect&eacute;s et perdre les r&eacute;sultats de leur derni&egrave;re recherche. Continuer ?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('sync_topics_subjects',
	'Syncrhoniser le titre des sujets.',
	'Cette op&eacute;ration synchronise le titre des sujets avec le premier message. Vous ne devriez pas avoir &agrave; utiliser cette fonction.',
	'Lors de la synchronisation, le site ne sera plus accessible. Continuer ?',
	0);
$mtnc[] = array('synchronize_notify_forum_id',
	'Synchroniser les IDs de forum des notifications de sujet.',
	'Cette op&eacute;ration va mettre &agrave; jour le num&eacute;ro des forums contenants des sujets avec des notifications. Vous ne devrier pas avoir &agrave; utilise rcette fonction.',
	'',
	0);
$mtnc[] = array('rebuild_search_index',
	'Reconstruire l\'index de la recherche',
	'Cette op&eacute;ration va reconstruire l\'index utilis&eacute; pour faire des recherches. Vous ne devriez pas avoir &agrave; utiliser cette fonction.',
	'Cette op&eacute;ration va compl&egrave;tement reconstruire l\'index de recherche, de z&eacute;ro. Sur des gros forums, cela peut prendre plusieurs heures. Le site sera inaccessible durant cette p&eacute;riode. Continuer ?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'Recommencer la reconstruction de l\'index',
	'Cette op&eacute;ration n\'est &agrave; utiliser que si la reconstruction de l\'index de la recherche a &eacute;t&eacute; interrompue.',
	'',
	4);
$mtnc[] = array('--', '', '', '', 1);
$mtnc[] = array('check_db',
	'V&eacute;rifier la base de donn&eacute;es.',
	'Cherche des erreurs dans la base de donn&eacute;es.',
	'',
	1);
$mtnc[] = array('optimize_db',
	'Optimiser la base de donn&eacute;es.',
  'Optimise les tables. Cette op&eacute;ration se charge de supprimer les anciens enregistrements qui ne sont plus utiles au fonctionnement du forum.',
	'',
	1);
$mtnc[] = array('repair_db',
	'R&eacute;parer la base de donn&eacute;es',
	'R&eacute;pare la base de donn&eacute;es si une erreur a &eacute;t&eacute; trouv&eacute;e.',
	'Vous ne devriez utiliser cette action que si "V&eacute;rifier la base de donn&eacute;es" a d&eacute;tect&eacute; un probl&egrave;me.',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'Remettre &agrave; z&eacute;ro les colonnes en auto-incr&eacute;mentation.',
	'Cette op&eacute;ration remet &agrave; z&eacute;ro les valeurs auto-incr&eacute;ment&eacute;es. Vous ne devriez pas avoir &agrave; lancer cette fonction.',
	'Avez-vous vraiment besoin de remettre &agrave; z&eacute;ro ces valeurs ? Vous ne perdrez pas de donn&eacute;es, mais cela pourrait prendre un peu de temps.',
	0);
$mtnc[] = array('heap_convert',
	'Convertir la table des sessions.',
	'Cette fonction permet de convertir la table des sessions au format HEAP. Cela est fait automatiquement &agrave; l\'installation d\'IcyPhoenix',
	'&Ecirc;tes-vous s&ucirc;r de vouloir convertir la table ?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'D&eacute;verouiller la base de donn&eacute;es.',
	'Utilisez cette fonction si une op&eacute;ration de maintenance ne s\'est pas termin&eacute;e correctement, et que la base de donn&eacute;es du forum est rest&eacute;e verrouill&eacute;e.',
	'',
	3);

$lang = array_merge($lang, array(
	'DB_Maintenance' => 'Outils de la base de donn&eacute;es',
	'DB_Maintenance_Description' => 'V&eacute;rifie les erreurs et incoh&eacute;rences dans la base de donn&eacute;es.<br /><b>Attention :</b> Certaines op&eacute;rations peuvent prendre un certain temps pour terminer. Le site sera <b>verrouill&eacute;</b> durant la maintenance.<br /><br /><b>Il est toujours recommand&eacute; de faire un backup avant d\'utiliser une des fonctions !</b>',
	'Function' => 'Fonction',
	'Function_Description' => 'Description',

	'Incomplete_configuration' => 'La valeur de configuration pour <b>%s</b> est introuvable. DB Maintenance ne peut fonctionner sans cette option de configuration.<br />Peut-&ecirc;tre avez-vous oubli&eacute; de lancer certaines requ&ecirc;tes SQL &agrave; l\'installation..',
	'dbtype_not_supported' => 'D&eacute;sol&eacute;, cette fonction n\'est pas disponible sur votre base de donn&eacute;es',
	'no_function_specified' => 'Pas de fonction s&eacute;lectionn&eacute;e',
	'function_unknown' => 'La fonction sp&eacute;cifi&eacute;e est introuvable.',
	'Old_MySQL_Version' => 'D&eacute;sol&eacute;, votre version de MySQL ne supporte pas cette op&eacute;ration. Veuillez utiliser MySQL 3.23.17 ou plus.',

	'Back_to_DB_Maintenance' => 'Revenir &agrave; la maintenance de la base de donn&eacute;es.',
	'Processing_time' => 'La maintenance a prise %f secondes.',

	'Lock_db' => 'Verrouillage du forum.',
	'Unlock_db' => 'Activation du forum.',
	'Already_locked' => 'Le site &eacute;tait d&eacute;j&agrave; verrouill&eacute;.',
	'Ignore_unlock_command' => 'Le site &eacute;tait verrouill&eacute; lors de l\'ex&eacute;cution de cette commande. La base ne sera pas d&eacute;verouill&eacute;e.',
	'Delay_info' => 'Attente d\'un d&eacute;lai de 3 secondes pour permettre aux op&eacute;rations en cours de terminer ...',

	'Affected_row' => 'Un jeu de donn&eacute;es affect&eacute;',
	'Affected_rows' => '%d jeux de donn&eacute;es affect&eacute;s',
	'Done' => 'Termin&eacute;',
// The following variable is used when nothing had to be fixed in the database. It needs the complete paragraph-tag.
// If you do not want a message to be displayed in these cases, just leave the variable empty.
	'Nothing_to_do' => '<p class="gen"><i>Aucun action &agrave; effectuer :-)</i></p><br />' . "\n",

// Names for new records in several tables
	'New_cat_name' => 'Forums restor&eacute;s',
	'New_forum_name' => 'Sujets restor&eacute;s',
	'New_topic_name' => 'Messages restor&eacute;s',
	'Restored_topic_name' => 'Sujet restor&eacute;',
	'New_poster_name' => 'Message restor&eacute;', // Name for Poster of a restored post

// Function specific vars
// statistic
	'Statistic_title' => 'Statistiques sur le site et la base de donn&eacute;es',
	'Database_table_info' => 'Les statistiques de la base de donn&eacute;es sont d&eacute;coup&eacute;es en trois parties : celle pour toutes les tables de la base de donn&eacute;es, celle pour les tables d\'IcyPhoenix, et celle avec les tables avanc&eacute;es, partageant le pr&eacute;fix du forum (usuellement ip_).',
	'Board_statistic' => 'Statistiques du site',
	'Database_statistic' => 'Statistiques de la base de donn&eacute;es',
	'Version_info' => 'Information sur la version',
	'Thereof_deactivated_users' => 'ici d&eacute;sactiv&eacute;s',
	'Thereof_Moderators' => 'ici mod&eacute;rateurs',
	'Thereof_Administrators' => 'ici administateurs',
	'Users_with_Admin_Privileges' => 'utilisateurs avec les droits d\'administrateurs',
	'Number_tables' => 'Nombre de tables',
	'Number_records' => 'Nombre de d\'enregistrements',
	'DB_size' => 'Taille de la base de donn&eacute;es',
	'Thereof_phpbb_core' => 'ici les tables d\'Icy Phoenix',
	'Thereof_phpbb_advanced' => 'ici les tables avanc&eacute;es',
	'Version_of_board' => 'Version d\'IcyPhoenix',
	'Version_of_mod' => 'Version de DB Maintenance',
	'Version_of_PHP' => 'Version de PHP',
	'Version_of_MySQL' => 'Version de MySQL',
// config
	'Config_title' => 'DB Maintenance : configuration',
	'Config_info' => 'Ces options permettent de configurer DB Maintenance. Veuillez noter qu\'une mauvaise configuration peut entrainer des effets ind&eacute;sirables.',
	'General_Config' => 'Configuration g&eacute;n&eacute;rale',
	'Rebuild_Config' => 'Configuration de la reconstruction de l\'index de recherche',
	'Current_Rebuild_Config' => 'Configuration de la reconstruction actuelle',
	'Rebuild_Settings_Explain' => 'Ces options affectent le comportement de DB Maintenance lors de la reconstruction de l\'index de la recherche',
	'Current_Rebuild_Settings_Explain' => 'Ces options permettent &agrave; DB Maintenance de stocker la place de l\'it&eacute;ration actuelle. Vous ne devriez pas avoir besoin d\'y toucher',
	'Disallow_postcounter' => 'Interdire la synchronisation des compteurs de messages des utilisateurs',
	'Disallow_postcounter_Explain' => 'Cette option interdit la synchronisation des compteurs de messages des utilisateurs. Vous pouvez d&eacute;sactiver cette op&eacute;ration pour &ecirc;tre s&ucirc;r que les messages d&eacute;lest&eacute;s ne sont pas soustraits des compteurs de messages.',
	'Disallow_rebuild' => 'Interdire la reconstruction de l\'index des recherches.',
	'Disallow_rebuild_Explain' => 'Cette option interdit la reconstruction de l\'index des recherches. Une reconstruction interrompue peut toutefois &ecirc;tre continu&eacute;e.',
	'Rebuildcfg_Timelimit' => 'Temps maximum d\'&eacute;xecution pour la reconstruction (en secondes)',
	'Rebuildcfg_Timelimit_Explain' => 'Temps maximum pour une &eacute;tape de reconstruction (par d&eacute;faut : 240). Cette option limite le temps d\'&eacute;xecution.',
  'Rebuildcfg_Timeoverwrite' => 'Temps fixe disponible pour une reconstruction (en secondes)',
	'Rebuildcfg_Timeoverwrite_Explain' => 'Estimation fixe de temps disponible pour l\'&eacute;xecution (par d&eacute;faut : 0). Avec 0, le temps du calcul est utilis&eacute; pour limiter le temps de l\'&eacute;xecution. N\'importe quelle autre valeur outrepasse le temps calcul&eacute;.',
	'Rebuildcfg_Maxmemory' => 'Taille maximum &agrave; reconstruire (en kilobytes)',
	'Rebuildcfg_Maxmemory_Explain' => 'Taille maximum des messages &agrave; reconstruire en une &eacute;tape (par d&eacute;faut : 500). Quand la somme de taille des messages d&eacute;passe ce montant, l\'indexation s\'arr&ecirc;te l&agrave; pour cette &eacute;tape.',
	'Rebuildcfg_Minposts' => 'Nombre minimum de messages &agrave; indexer par &eacute;tape.',
	'Rebuildcfg_Minposts_Explain' => 'Nombre minimum de messages &agrave; indexer par &eacute;tape (par d&eacute;faut : 3).',
	'Rebuildcfg_PHP3Only' => 'Activation de la compatibilit&eacute; PHP 3 (non support&eacute;)',
	'Rebuildcfg_PHP3Only_Explain' => '(utilisation &agrave; vos risques et p&eacute;rils)',
	'Rebuildcfg_PHP4PPS' => 'Messages index&eacute;s par seconde',
	'Rebuildcfg_PHP4PPS_Explain' => 'Estimation du nombre de messages qui peuvent &ecirc;tre index&eacute;s par seconde (par d&eacute;faut : 8).',
	'Rebuildcfg_PHP3PPS' => 'Compatibilit&eacute; PHP 3 : Nombre de messages &agrave; indexer par seconde',
	'Rebuildcfg_PHP3PPS_Explain' => '',
	'Rebuild_Pos' => 'Dernier message index&eacute;',
	'Rebuild_Pos_Explain' => 'ID du dernier message index&eacute;. Passe &agrave; -1 quand la reconstruction est termin&eacute;e.',
	'Rebuild_End' => 'Dernier message &agrave; indexer',
	'Rebuild_End_Explain' => 'ID du dernier message &agrave; indexer. Passe &agrave; 0 quand la reconstruction est termin&eacute;e',
	'Dbmtnc_config_updated' => 'Configuration mise &agrave; jour avec succ&egrave;s',
	'Click_return_dbmtnc_config' => 'Cliquez %sIci%s pour revenir &agrave; la configuration',
// check_user
	'Checking_user_tables' => 'V&eacute;rification des utilisateurs et des groupes',
	'Checking_missing_anonymous' => 'V&eacute;rifie la pr&eacute;sence du compte anonyme',
	'Anonymous_recreated' => 'Compte anonyme recr&eacute;e',
	'Checking_incorrect_pending_information' => 'V&eacute;rification des informations en attente des utilisateurs',
	'Updating_invalid_pendig_user' => 'Informations en attente mises &agrave; jour pour un utilisateur',
	'Updating_invalid_pendig_users' => 'Informations en attente mises &agrave; jour pour %d utilisateurs',
	'Updating_pending_information' => 'V&eacute;rification des informations en attente des groupes personnels pour utilisateurs',
	'Checking_missing_user_groups' => 'V&eacute;rification des utilisateurs n\'ayant pas ou plusieurs groupes personnels',
	'Found_multiple_SUG' => 'Des erreurs ont &eacute;t&eacute; trouv&eacute;es',
	'Resolving_user_id' => 'R&eacute;solution des erreurs',
	'Removing_groups' => 'Suppression des groupes',
	'Removing_user_groups' => 'Retirer la connexion groupe - utilisateur',
	'Recreating_SUG' => 'Recr&eacute;ation du groupe personnel de l\'utilisateur',
	'Checking_for_invalid_moderators' => 'V&eacute;rification des groupes avec mod&eacute;rateurs incorrects',
	'Updating_Moderator' => 'Mettre l\'utilisateur actuel comme mod&eacute;rateur de ces groupes',
	'Checking_moderator_membership' => 'V&eacute;rification de la pr&eacute;sence dans le groupe des mod&eacute;rateurs',
	'Updating_mod_membership' => 'Ajout au groupe des mod&eacute;rateurs',
	'Moderator_added' => 'Mod&eacute;rateur ajout&eacute; au groupe',
	'Moderator_changed_pending' => '&Eacute;tat du mod&eacute;rateur mis &agrave; jour',
  'Remove_invalid_user_data' => 'Suppression de donn&eacute;es utilisateurs invalides dans les groupes personnels',
	'Remove_empty_groups' => 'Suppression des groupes vides',
	'Remove_invalid_group_data' => 'Suppression de donn&eacute;es groupes invalides dans les groupes personnels',
	'Checking_ranks' => 'V&eacute;rification des rangs invalides',
	'Invalid_ranks_found' => 'Utilisateurs avec des rangs invalides trouv&eacute;s',
	'Removing_invalid_ranks' => 'Suppression des rangs invalides',
	'Checking_themes' => 'V&eacute;rification des options de th&eacute;me incorrectes',
	'Updating_users_without_style' => 'Mise &agrave; jour des utilisateurs sans th&egrave;me',
	'Default_theme_invalid' => '<b>Attention :</b> le th&egrave;me par d&eacute;faut est invalide. Veuillez v&eacute;rifier votre configuration',
	'Updating_themes' => 'Mise &agrave; jour des donn&eacute;es invalides pour le th&eacute;me %d',
	'Checking_theme_names' => 'V&eacute;rification des noms de th&egrave;mes',
	'Removing_invalid_theme_names' => 'Suppression des noms de th&egrave;mes invalides',
	'Checking_languages' => 'V&eacute;rification des options de langue',
	'Invalid_languages_found' => 'Utilisateurs avec configuration de langue invalide trouv&eacute;es',
	'Default_language_invalid' => '<b>Attention :</b> La langue par d&eacute;faut est invalide. Veuillez v&eacute;rifier votre configuration.',
	'English_language_invalid' => '<b>Attention :</b> La langue par d&eacute;faut est invalide et les fichiers de langue anglaise n\'existent pas. Vous devez restorer le dossier <b>lang_english</b>.',
	'Changing_language' => 'Changement de langue de &#39;%s&#39; vers &#39;%s&#39;',
	'Remove_invalid_ban_data' => 'Suppression des donn&eacute;es de bannissement invalides',
	'Remove_invalid_session_keys' => 'Suppression des clefs de sessions invalides',
// check_post
	'Checking_post_tables' => 'V&eacute;rification des sujets et messages',
	'Checking_invalid_forums' => 'V&eacute;rification des cat&eacute;gories des forums',
	'Invalid_forums_found' => 'Forums avec cat&eacute;gorie invalide trouv&eacute;s',
	'Setting_category' => 'D&eacute;placement des forums dans la cat&eacute;gorie &#39;%s&#39;',
	'Checking_posts_wo_text' => 'V&eacute;rification des messages sans texte',
	'Posts_wo_text_found' => 'Messages sans texte trouv&eacute;s',
	'Deleting_post_wo_text' => '%d (Sujet : %s (%d) ; Utilisateur : %s (%d))',
	'Deleting_Posts' => 'Suppression des donn&eacute;es des messages',
	'Checking_topics_wo_post' => 'V&eacute;rification de la pr&eacute;sence de messages dans les sujets',
	'Topics_wo_post_found' => 'Sujets sans messages trouv&eacute;es',
	'Deleting_topics' => 'Suppression des sujets',
	'Checking_invalid_topics' => 'V&eacute;rification de la validit&eacute; du forum des sujets',
	'Invalid_topics_found' => 'Sujets avec forum invalide trouv&eacute;s',
	'Setting_forum' => 'D&eacute;placement des sujets vers le forum &#39;%s&#39;',
	'Checking_invalid_posts' => 'V&eacute;rification de la validiti&eacute; du sujet des messages',
	'Invalid_posts_found' => 'Messages avec sujet invalide trouv&eacute;s',
	'Setting_topic' => 'D&eacute;placement des messages %s vers le sujet &#39;%s&#39; (%d) dans le forum &#39;%s&#39;',
	'Checking_invalid_forums_posts' => 'V&eacute;rification de la validit&eacute; du forum des messages',
	'Invalid_forum_posts_found' => 'Messages avec forum invalide trouv&eacute;s',
	'Setting_post_forum' => '%d : D&eacute;placement du forum &#39;%s&#39; (%d) vers &#39;%s&#39; (%d)',
	'Checking_texts_wo_post' => 'V&eacute;rification des textes de message n\'appartenant pas aux messages',
	'Invalid_texts_found' => 'Textes de messages sans message trouv&eacute;s',
	'Recreating_post' => 'Recr&eacute;ation du message %d et d&eacute;placement dans le sujet &#39;%s&#39; du forum &#39;%s&#39;<br />Extrait : %s',
	'Checking_invalid_topic_posters' => 'V&eacute;rification de la validit&eacute; des auteurs de sujets',
	'Invalid_topic_poster_found' => 'Sujets avec auteur invalide trouv&eacute;s',
	'Updating_topic' => 'Mise &agrave; jour du sujet %d (Auteur : %d -&gt; %d)',
	'Checking_invalid_posters' => 'V&eacute;rification de la validit&eacute; des auteurs de messages',
	'Invalid_poster_found' => 'Messages avec auteur invalide trouv&eacute;s',
	'Updating_posts' => 'Mise &agrave; jour des messages',
	'Checking_moved_topics' => 'V&eacute;rification des sujets d&eacute;plac&eacute;s',

	'Deleting_invalid_moved_topics' => 'Suppression des donn&eacute;es de sujets d&eacute;plac&eacute;s invalides',
	'Updating_invalid_moved_topic' => 'Mise &agrave; jour des donn&eacute;es pour un sujet incorrectement d&eacute;plac&eacute;',
	'Updating_invalid_moved_topics' => 'Mise &agrave; jour des donn&eacute;es pour %d sujets incorrectement d&eacute;plac&eacute;',
	'Checking_prune_settings' => 'V&eacute;rification des donn&eacute;es de d&eacute;lestage',
	'Removing_invalid_prune_settings' => 'Suppression de la configuration de d&eacute;lestage invalide',
	'Updating_invalid_prune_setting' => 'Mise &agrave; jour de la configuration du d&eacute;lestage d\'un forum',
	'Updating_invalid_prune_settings' => 'Mise &agrave; jour de la configuration du d&eacute;lestage de %d forums',
	'Checking_topic_watch_data' => 'V&eacute;rification des donn&eacute;es des sujets surveill&eacute;s',
	'Checking_auth_access_data' => 'V&eacute;rification des donn&eacute;es d\'autorisations des groupes',
	'Must_synchronize' => 'Vous devez synchroniser les messages avant de pouvoir continuer. Cliquez ici',
// rebuild last poster details
	'Rebuild_Last_Poster_Details' => 'Reconstruction du dernier auteur',
// check_vote
	'Checking_vote_tables' => 'V&eacute;rification des tables de vote',
	'Checking_votes_wo_topic' => 'V&eacute;rification des sujets dans lesquels les gens ont vot&eacute;s',
	'Votes_wo_topic_found' => 'Votes sans sujet trouv&eacute;s',
	'Invalid_vote' => '%s (%d) - Date de d&eacute;but : %s - Date de fin : %s',
	'Deleting_votes' => 'Suppression des votes',
	'Checking_votes_wo_result' => 'V&eacute;rification des r&eacute;sultats des votes',
	'Votes_wo_result_found' => 'Votes sans r&eacute;sultats trouv&eacute;s',
	'Checking_topics_vote_data' => 'V&eacute;rification des donn&eacute;es de vote dans la table des sujets',
	'Updating_topics_wo_vote' => 'Mise &agrave; jour des sujets marqu&eacute;s incorrectement comme votes',
	'Updating_topics_w_vote' => 'Mise &agrave; jour des sujets marqu&eacute;s incorrectement comme non-votes',
	'Checking_results_wo_vote' => 'V&eacute;rification des r&eacute;sultats sans votes correspondants',
	'Results_wo_vote_found' => 'R&eacute;sultats sans votes correspondants trouv&eacute;s',
	'Invalid_result' => 'Suppression de : %s (votes : %d)',
	'Checking_voters_data' => 'V&eacute;rification de la validit&eacute; des donn&eacute;es de vote',
// check_pm
	'Checking_pm_tables' => 'V&eacute;rification des messages priv&eacute;s',
	'Checking_pms_wo_text' => 'V&eacute;rification de la pr&eacute;sence de texte dans les messages priv&eacute;s',
	'Pms_wo_text_found' => 'Messages priv&eacute;s sans texte trouv&eacute;s',
	'Deleting_pn_wo_text' => '%d (Sujet : %s; Envoyeur : %s (%d); Destinataire : %s (%d))',
	'Deleting_Pms' => 'Suppression des donn&eacute;es',
	'Checking_texts_wo_pm' => 'V&eacute;rification de la pr&eacute;sence d\'un message priv&eacute; attach&eacute; aux textes',
	'Deleting_pm_texts' => 'Suppression des textes de messages priv&eacute;s invalides',
	'Checking_invalid_pm_senders' => 'V&eacute;rification des messages priv&eacute;s avec envoyeur invalide',
	'Invalid_pm_senders_found' => 'Messages priv&eacute;s avec envoyeur invalide trouv&eacute;s',
	'Updating_pms' => 'Mise &agrave; jour des messages priv&eacute;s',
	'Checking_invalid_pm_recipients' => 'V&eacute;rification des messages priv&eacute;s avec destinataire invalide',
	'Invalid_pm_recipients_found' => 'Messages priv&eacute;s avec destinataire invalide trouv&eacute;s',
	'Checking_pm_deleted_users' => 'V&eacute;rification de l\'existence des envoyeurs / destinataires',
	'Invalid_pm_users_found' => 'Messages priv&eacute;s avec envoyeur / destinataire supprim&eacute; trouv&eacute;s',
	'Deleting_pms' => 'Suppression des messages priv&eacute;s',
	'Synchronize_new_pm_data' => 'Synchronisation du compteur de messages priv&eacute;s',
	'Synchronizing_users' => 'Mise &agrave; jour des utilisateurs',
	'Synchronizing_user' => 'Mise &agrave; jour de l\'utilisateur %s (%d)',
	'Synchronize_unread_pm_data' => 'Syncrhonisation du compteur de messages priv&eacute;s non-lus',
// check_config
	'Checking_config_table' => 'V&eacute;rification de la table de configuration',
	'Checking_config_entries' => 'V&eacute;rification des entr&eacute;es de la table de configuration',
	'Restoring_config' => 'Restoration des entr&eacute;es',
// check_search_wordmatch
	'Checking_search_wordmatch_tables' => 'V&eacute;rification de la table de recherche par mot',
	'Checking_search_data' => 'V&eacute;rification de la validit&eacute; des donn&eacute;es de la table de recherche par mot',
// check_search_wordlist
	'Checking_search_wordlist_tables' => 'V&eacute;rification de la table de listing des mots',
	'Checking_search_words' => 'V&eacute;rification de la pertinance des mots dans le listing',
	'Removing_part_invalid_words' => 'Retirer une partie des mots invalides',
	'Removing_invalid_words' => 'Retirer les mots invalides',
// synchronize topics subjects
	'Sync_topics_subjects' => 'Synchroniser les titres de sujets',
	'Sync_topics_subjects_progress' => 'Synchronisation en cours',
// rebuild_search_index
	'Rebuilding_search_index' => 'Reconstruction de l\'index de recherche',
	'Deleting_search_tables' => 'Vidage de la table de recherche',
	'Reset_search_autoincrement' => 'Remise &agrave; z&eacute;ro du compteur de la table de recherches',
	'Preparing_config_data' => 'Mise &agrave; jour des donn&eacute;es de configuration',
	'Can_start_rebuilding' => 'Vous pouvez maintenant reconstruire l\'index',
	'Click_once_warning' => '<b>Ne cliquez le lien qu\'une seule fois !</b> - vous allez peut-&ecirc;tre devoir attendre plusieurs minutes avant qu\'une page s\'affiche.',
// proceed_rebuilding
	'Preparing_to_proceed' => 'Pr&eacute;paration des tables',
	'Preparing_search_tables' => 'Pr&eacute;paration des tables de recherche',
// perform_rebuild
	'Click_or_wait_to_proceed' => 'Cliquez ici pour continuer, ou attendez quelques secondes',
	'Indexing_progress' => '%d sur %d messages (%01.1f%%) ont &eacute;t&eacute; index&eacute;s. Dernier message index&eacute; : %d',
	'Indexing_finished' => 'La reconstruction a &eacute;t&eacute; termin&eacute;e avec succ&egrave;s',
// synchronize_notify_forum_id
	'Synchronizing_notify_forum_ids' => 'Synchronisation des IDs de forum des notifications de sujet',
// synchronize_post
	'Synchronize_posts' => 'Synchronisation des messages',
	'Synchronize_topic_data' => 'Synchronisation des sujets',
	'Synchronizing_topics' => 'Mise &agrave; jour des sujets',
	'Synchronizing_topic' => 'Mise &agrave; jour du sujet %d (%s)',
	'Synchronize_moved_topic_data' => 'Synchronisation des sujets d&eacute;plac&eacute;s',
	'Inconsistencies_found' => 'Incoh&eacute;rences trouv&eacute;es dans votre base de donn&eacute;es. Veuillez %sV&eacute;rifier les tables des messages et des sujets%s',
	'Synchronizing_moved_topics' => 'Mise &agrave; jour des sujets d&eacute;plac&eacute;s',
  'Synchronizing_moved_topic' => 'Mise &agrave; jour du sujet d&eacute;plac&eacute; %d -&gt; %d (%s)',
	'Synchronize_forum_topic_data' => 'Synchronisation des donn&eacute;es des sujets dans les forums',
	'Synchronizing_forums' => 'Mise &agrave; jour des forums',
	'Synchronizing_forum' => 'Mise &agrave; jour du forum %d (%s)',
	'Synchronize_forum_data_wo_topic' => 'Synchronisation des forums sans sujets',
	'Synchronize_forum_post_data' => 'Synchronisation des messages dans les forums',
	'Synchronize_forum_data_wo_post' => 'Synchronisation des forums sans messages',
// synchronize_user
	'Synchronize_post_counters' => 'Synchronisation des compteurs de messages',
	'Synchronize_user_post_counter' => 'Synchronisation des compteurs de messages des utilisateurs',
	'Synchronizing_user_counter' => 'Mise &agrave; jour de l\'utilisateur %s (%d): %d -&gt; %d',
// synchronize_mod_state
	'Synchronize_moderators' => 'Synchronisation du status de mod&eacute;rateur',
	'Getting_moderators' => 'R&eacute;cup&eacute;ration des mod&eacute;rateurs',
	'Checking_non_moderators' => 'V&eacute;rification des utilisateurs ayant le status de mod&eacute;rateur mais qui ne mod&egrave;rent aucun forum',
	'Updating_mod_state' => 'Mise &agrave; jour du status de mod&eacute;rateur',
	'Changing_moderator_status' => 'Mise &agrave; jour du status de mod&eacute;rateur de l\'utilisateur %s (%d)',
	'Checking_moderators' => 'V&eacute;rification des utilisateurs n\'ayant pas le status de mod&eacute;rateur mais qui mod&egrave;rent un ou des forums',
// reset_date
	'Resetting_future_post_dates' => 'Remise &agrave; z&eacute;ro des dates de messages dans le futur',
	'Checking_post_dates' => 'V&eacute;rification des dates de messages',
	'Checking_pm_dates' => 'V&eacute;rification des dates de messages priv&eacute;s',
	'Checking_email_dates' => 'V&eacute;rification des dates des derniers e-mails',
// reset_sessions
	'Resetting_sessions' => 'Remise &agrave; z&eacute;ro des sessions',
	'Deleting_session_tables' => 'Vidage de la table des sessions et des r&eacute;sultats de recherches',
	'Restoring_session' => 'Restoration des sessions des utilisateurs actifs',
// check_db
	'Checking_db' => 'V&eacute;rification de la base de donn&eacute;es',
	'Checking_tables' => 'V&eacute;rification des tables',
	'Table_OK' => 'OK',
	'Table_HEAP_info' => 'Commande non disponibles pour les tables au format HEAP',
// repair_db
	'Repairing_db' => 'R&eacute;paration de la base de donn&eacute;es',
	'Repairing_tables' => 'R&eacute;paration des tables',
// optimize_db
  'Optimizing_db' => 'Optimisation de la base de donn&eacute;es',
	'Optimizing_tables' => 'Optimisation des tables',
	'Optimization_statistic' => 'L\'optimisation a r&eacute;duit la taille des tables de %s &agrave; %s. C\'est une r&eacute;duction de %s ou %01.2f%%.',
// reset_auto_increment
	'Reset_ai' => 'Remise &agrave; z&eacute;ro des colonnes auto-incr&eacute;ment&eacute;es',
	'Ai_message_update_table' => 'table mise &agrave; jour',
	'Ai_message_no_update' => 'mise &agrave; jour inutile',
	'Ai_message_update_table_old_mysql' => 'table mise &agrave; jour', // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
	'Converting_heap' => 'Conversion des tables de session au format HEAP',
// unlock_db
	'Unlocking_db' => 'D&eacute;verouillage de la base de donn&eacute;es',

// Emergency Recovery Console
	'Forum_Home' => 'Index du forum',
	'ERC' => 'Console d\'urgence',
	'Submit_text' => 'Envoyer',
	'Select_Language' => 'S&eacute;lection du language',
	'No_selectable_language' => 'Pas de language s&eacute;lectionnable',
	'Select_Option' => 'S&eacute;lectionnez une option',
	'Option_Help' => 'Aide',
	'Authenticate_methods' => 'Il y a deux fa&ccedil;ons de se connecter.',
	'Authenticate_methods_help_text' => 'Vous devez vous connecter pour pouvoir utiliser la console d\'urgence. Vous pouvez vous connecter en utilisant votre compte sur le forum (recommand&eacute;), ou vous pouvez vous connecter en renseignant le nom d\'utilisateur / mot de passe que le forum utilise pour se connecter &agrave; la base de donn&eacute;es.',
	'Authenticate_user_only' => 'Vous devez vous connecter avec un compte administrateur',
	'Authenticate_user_only_help_text' => 'Vous devez vous connecter avant de pouvoir effectuer une action.',
	'Admin_Account' => 'Compte administrateur',
	'Database_Login' => 'Utilisateur de la base de donn&eacute;es',
	'Username' => 'Nom d\'utilisateur',
	'Password' => 'Mot de passe',
	'Auth_failed' => '&Eacute;chec de la connexion',
	'Return_ERC' => 'Revenir &agrave; la console d\'urgence',
	'cur_setting' => 'Configuration actuelle',
	'rec_setting' => 'Configuration recommand&eacute;e',
	'secure' => 'S&eacute;curis&eacute;',
	'secure_yes' => 'oui (https)',
	'secure_no' => 'non (http)',
	'domain' => 'Nom de domaine',
	'port' => 'Port',
	'path' => 'Chemin',
	'Cookie_domain' => 'Nom de domaine des cookies',
	'Cookie_name' => 'Nom du cookie',
	'Cookie_path' => 'Chemin du cookie',
	'select_language' => 'S&eacute;lection de la nouvelle langue',
	'select_theme' => 'S&eacute;lection du nouveau th&egrave;me',
	'reset_thmeme' => 'Recr&eacute;er le th&egrave;me par d&eacute;faut',
	'new_admin_user' => 'Utilisateur qui recevra les droits d\'administrateurs',
	'dbms' => 'Type de base de donn&eacute;es',
	'DB_Host' => 'Hote de la base de donn&eacute;es',
	'DB_Name' => 'Nom de la base de donn&eacute;es',
	'DB_Username' => 'Nom d\'utilisateur pour la base de donn&eacute;es',
	'DB_Password' => 'Nom de passe pour la base de donn&eacute;es',
	'Table_Prefix' => 'Pr&eacute;fixe des tables',
	'New_config_php' => 'Voici votre nouveau config.' . PHP_EXT,
// Options
	'cls' => 'Vider les sessions',
	'ecf' => 'Vider le cache',
	'rdb' => 'R&eacute;parer les tables',
	'cct' => 'V&eacute;rifier la configuration',
	'rpd' => 'Remettre &agrave; z&eacute;ro le chemin',
	'rcd' => 'Remettre &agrave; z&eacute;ro la configuration des cookies',
	'rld' => 'Remettre &agrave; z&eacute;ro la configuration de la langue',
	'rtd' => 'Remettre &agrave; z&eacute;ro la configuration du th&egrave;me',
	'dgc' => 'D&eacute;sactiver la compression GZip',
	'cbl' => 'Vider la liste de bannissements',
	'raa' => 'Retirer tous les administrateurs',
	'mua' => 'Donner le status d\'administrateur &agrave; un utilisateur',
	'rcp' => 'Recr&eacute;er config.' . PHP_EXT,
// Info for options
	'cls_info' => 'Si vous continuez, toutes les sessions seront supprim&eacute;es.',
	'ecf_info' => 'Si vous continuez, le cache sera vid&eacute;',
	'rdb_info' => 'Si vous continuez, la base de donn&eacute;es sera r&eacute;par&eacute;e',
	'cct_info' => 'Si vous continuez, la configuration sera v&eacute;rifi&eacute;e et les entr&eacute;es manquantes restor&eacute;es.',
	'rpd_info' => 'Si vous continuez, la configuration sera mise &agrave; jour avec les options s&eacute;lectionn&eacute;es.',
	'rcd_info' => 'Si vous continuez, les options des cookies seront mises &agrave; jour.',
	'rld_info' => 'Si vous continuez, la langue sera remise &agrave; z&eacute;ro pour le forum et l\'utilisateur courant.',
	'rtd_info' => 'Si vous continuez, soit le th&egrave;me s&eacute;lectionn&eacute;e sera utilis&eacute; pour le forum et l\'utilisateur courant, soit le th&eacute;me par d&eacute;faut (IcyPhoenix).',
	'rtd_info_no_theme' => 'Si vous continuez, le th&egrave;me par d&eacute;faut (IcyPhoenix) sera recr&eacute;e et utilis&eacute; pour le forum et l\'utilisateur courant',
	'dgc_info' => 'Si vous continuez, la compression GZip sera d&eacute;sactiv&eacute;e.',
	'cbl_info' => 'Si vous continuez, les listes de bannissements seront vid&eacute;es.',
	'raa_info' => 'Si vous continuez, tous les administrateurs redeviendront de simples utilisateurs. Note : si vous vous connectez avec un compte administrateur &agrave; la console, il gardera son rang.',
	'mua_info' => 'Si vous continuez, l\'utilisateur s&eacute;lectionn&eacute; sera activ&eacute; et &eacute;lev&eacute; au niveau d\'administrateur',
	'rcp_info' => 'Si vous continuez, un nouveau config.php sera g&eacute;ner&eacute; avec les donn&eacute;es entr&eacute;es.',
// Success messages for options
	'cls_success' => 'Sessions vid&eacute;es avec succ&egrave;s',
	'ecf_success' => 'Cache vid&eacute; avec succ&egrave;s',
	'rdb_success' => 'Tables r&eacute;par&eacute;es',
	'rpd_success' => 'Configuration mise &agrave; jour.',
	'cct_success' => 'Configuration r&eacute;par&eacute;e.',
	'rcd_success' => 'Configuration des cookies mise &agrave; jour',
	'rld_success' => 'Langue mise &agrave; jour.',
	'rld_failed' => 'Les fichiers de langue n&eacute;cessaires (lang_main.' . PHP_EXT . ' et lang_admin.' . PHP_EXT . ') n\'existent pas.',
	'rtd_restore_success' => 'Le th&egrave;me par d&eacute;faut a &eacute;t&eacute; restor&eacute;',
	'rtd_success' => 'La configuration des th&egrave;mes a &eacute;t&eacute; mise &agrave; jour',
	'dgc_success' => 'La compression GZip a &eacute;t&eacute; d&eacute;sactiv&eacute;e',
	'cbl_success' => 'Les listes de bannissements ont &eacute;t&eacute; vid&eacute;es',
	'cbl_success_anonymous' => 'Les listes de bannissements ont &eacute;t&eacute; vid&eacute;es. Le compte anonyme a &eacute;t&eacute; recr&eacute;e. Pensez &agrave; v&eacute;rifier les donn&eacute;es des groupes personnels.',

	'raa_success' => 'Tous les administrateurs ont &eacute;t&eacute; d&eacute;mis avec succ&egrave;s.',
	'mua_success' => 'L\'utilisateur s&eacute;lectionn&eacute; a obtenu les droits d\'administrateur.',
	'mua_failed' => '<b>Erreur :</b> L\'utilisateur s&eacute;lectionn&eacute; n\'existe pas ou est d&eacute;j&agrave; administrateur.',
  'rcp_success' => "Copiez le contenu dans un fichier appel&eacute; <b>config.php</b> (pour forcer l\'extension sous windows, utilisez des guillemets), et envoyez le &agrave; la racine de votre forum. Faites attention &agrave; ne pas garder de caract&egrave;re (ni espace ni saut de ligne) avant le <b>&lt;?php</b> ou apr&egrave;s le <b>?&gt;</b>.<br />Vous pouvez aussi %sT&eacute;l&eacute;charger%s le fichier.",
// Text for success messages
	'Removing_admins' => 'Retrait des administrateurs',
// Help Text
  'Option_Help_Text' => '
  <p>Si une personne rencontre une erreur &agrave; la cr&eacute;ation (ou autre) de session, vous pouvez vider la table des sessions. Si vous rencontrez des probl&egrave;mes lors de l\'acc&egrave;s aux tables dans votre base de donn&eacute;es, vous pouvez les r&eacute;parer. Si des options de configuration sont manquantes, vous pouvez les restaurer. Si vous ne restez pas connect&eacute; le temps d\'une page, ou que vous n\'arrivez pas &agrave; acc&eacute;der au panel administrateur, vous pouvez tenter de changer le chemin de votre forum / des cookies ... Consultez le texte de chacune des options pour plus d\'informations.',

	'dbmntc_Invalid_Option' => 'Option invalide',
	)
);
?>
