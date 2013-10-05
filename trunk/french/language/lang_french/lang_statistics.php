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

// Original Statistics Mod (c) 2002 Nivisec - http://nivisec.com/mods

$lang = array_merge($lang, array(
// If you want to credit the Author on the Statistics Page, uncomment the second line.
// 'Version_info' => '<br />Statistics Mod Version %s', //%s = number
	'Version_info' => '<br />Statistiques recodées par <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> basée sur le MOD Statistics Version %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => 'Rang',
	'Percent' => 'Pourcentage',
	'Graph' => 'Graph',
	'Uses' => 'Utilisations',
	'How_many' => 'Nombre',

// Main Language

// Page Header/Footer
	'Install_info' => 'Installé le %s', //%s = date
	'Viewed_info' => 'Page de statistiques chargées %d fois', //%d = number
	'Statistics_title' => 'Statistiques du forum',

// Admin Language
	'Statistics_management' => 'Modules',
	'Statistics_config' => 'Configuration',

// Statistics Config
	'Statistics_config_title' => 'Configuration',

	'Return_limit' => 'Nombre d\'entrées',
	'Return_limit_desc' => '<b>Nombre d\'entrées à montrer dans chaque module.',
	'Clear_cache' => 'Vider le cache',
	'Clear_cache_desc' => 'Cochez la case pour vider les données en cache de tous les modules.',
	'Modules_directory' => 'Dossier des modules',
	'Modules_directory_desc' => 'Dossier qui contient les modules de stats. Relatif à votre installation IcyPhoenix.<br/><b>Note :</b> Vous ne devez pas ajouter de <i>/</i> ou de <i>/</i> à la fin !',

// Status Messages
	'Messages' => 'Messages admin',
	'Updated' => 'Mis à jour',
	'Active' => 'Actif',
	'Activate' => 'Activer',
	'Activated' => 'Activé',
	'Not_active' => 'Inactif',
	'Deactivate' => 'Désactiver',
	'Deactivated' => 'Désactivé',
	'Install' => 'Installer',
	'Installed' => 'Installé',
	'Uninstall' => 'Désinstaller',
	'Uninstalled' => 'Désinstallé',
	'Update_time' => 'Délai de<br/>rafraîchissement',
	'Auth_settings_updated' => 'Authorization Settings - [These are always updated]',

// Modules Management
	'Back_to_management' => 'Back to the Modules Management Screen',
	'Statistics_modules_title' => 'Statistics Module Management',

	'Module_name' => 'Nom',
	'Module_file_name' => 'Nom du module',
	'Modules_order_update' => 'Modules mis à jour',
	'Directory_name' => 'Nom du dossier',
	'Status' => 'Statut',
	'Update_time_minutes' => 'Délai de rafraîchissement (en minutes)',
	'Update_time_desc' => 'Délai entre chaque invalidation du cache du module.',
	'AUTO_SET_UPDATE_TIME' => '<b>Déterminer et utiliser le délai recommandé pour chaque module installé et actif.</b><br /><b>Attention : cela peut prendre du temps.</b>',
	'STAT_BLOCKS_SORT' => '<i>Astuce : Vous pouvez utiliser le glisser-déposer pour changer l\'ordre des modules.</i>',
	'Uninstall_module' => 'Désinstaller les modules',
	'Uninstall_module_desc' => 'Marque le module "non installé", pour que vous puissiez le ré-installer. Ne supprime pas les fichiers du disque.',
	'Active_desc' => 'Option for if the Module is Active, so it is displayed depending on the set Permissions.',
	'Go' => 'Le faire',
	'Update_Modules' => 'Mettre à jour les modules',

	'Not_allowed_to_install' => 'Vous ne pouvez installer ce module, probablement parce que vous n\'avez pas installé le mod nécessaire à ce module. Veuillez contacter l\'auteur du module si vous avez des questions et si vous ne comprenez pas les Informations Additionnelles.',
	'Wrong_stats_mod_version' => 'Vous ne pouvez pas installer ce module car votre version du MOD Statistiques n\'est pas compatible. Pour utiliser ce module, vous devez avoir la version %s du MOD Statistiques.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Une erreur est survenue en installant ce module. Il est possible qu\'une requête SQL ait échoué, vérifiez le message d\'erreur ci-dessus.',

	'Preview_debug_info' => 'Ce module a été géneré en %f secondes: %d requêtes ont été éxecutées', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'Le MOD statistiques recommande un délai de rafraîchissement de <b>%d</b> minutes.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Aperçu des statistiques',

	'module_name_admin_statistics' => 'Statistiques administratives',
	'Statistic' => 'Statistique',
	'Value' => 'Valeur',
	'Number_posts' => 'Nobmre de messages',
	'Posts_per_day' => 'Messages par jour',
	'Number_topics' => 'Nombre de sujets',
	'Topics_per_day' => 'Sujets par jour',
	'Number_users' => 'Nombre d\'utilisateurs',
	'Users_per_day' => 'Utilisateurs par jour',
	'Board_started' => 'Date de création du forum',
	'Avatar_dir_size' => 'Taille du dossier des avatars',
	'Database_size' => 'Taille de la BDD',
	'Gzip_compression' => 'Compression Gzip',
	'Not_available' => 'Indisponible',
	'Board_Up_Days' => 'Nombre de jours où le forum a été actif',
	'Latest_Reg_User' => 'Dernier inscrit',
	'Latest_Reg_User_Date' => 'Date de la dernière inscription',
	'Most_Ever_Online' => 'Record d\'utilisateurs en ligne',
	'Most_Ever_Online_Date' => 'Date du Record d\'utilisateurs en ligne',
	'Disk_usage' => 'Utilisation du disque',
	'Title' => 'Moyenne de messages par utilisateur',
	'Average_Posts' => 'Moyenne de messages par utilisateur :',

	'module_name_average_posts_per_user' => 'Nombre moyen de messages par utilisateur',

	'module_name_age_clusters' => 'Fourchettes d\'âges',
	'AGE' => 'Age',
	'LESS_THAN' => 'Moins que',
	'MORE_THAN' => 'Plus que',

	'module_name_fastest_users' => 'Utilisateurs les plus réguliers', // "fastest"? wtf
	'time_on_forum' => 'Jours passés sur le forum',
	'posts_day' => 'Messages par jour',
	'Statistics' => 'Statistiques',

	'module_name_interesting_topics' => 'Sujets les plus intéressants',
	'Rate' => 'Note (vues/messages)',
	'Topic' => 'Sujet',

	'module_name_latest_topics' => 'Derniers sujets',
	'Rank' => 'Rang',
	'Latest_Topics' => 'Derniers sujets',
	'Post_time' => 'Posté le',

	'module_name_month_stat' => 'Statistiques mensuelles',
	'New_users' => 'Inscriptions',
	'New_replies' => 'Nouvelles réponses',
	'New_topics' => 'Nouveaux sujets',
	'Avg_Table' => 'Somme',
	'Sum_Table' => 'Moyenne',

	'module_name_most_active_topics' => 'Sujets les plus actifs',

	'module_name_most_active_topicstarter' => 'Créateurs de sujets les plus actifs',

	'module_name_most_logged_on_users' => 'Utilisateurs les plus connectés',
	'Time2' => 'Dernière connexion', // "logged on time"?

	'module_name_most_used_languages' => 'Langues',
	'Language' => 'Langue',

	'module_name_most_used_styles' => 'Thèmes',
	'Style' => 'Thèmes',

	'module_name_most_viewed_topics' => 'Sujets les plus vus',
	'Month_jan' => 'Janv',
	'Month_feb' => 'Fev',
	'Month_mar' => 'Mars',
	'Month_apr' => 'Avril',
	'Month_may' => 'Mai',
	'Month_jun' => 'Juin',
	'Month_jul' => 'Jul',
	'Month_aug' => 'Aout',
	'Month_sep' => 'Sep',
	'Month_oct' => 'Oct',
	'Month_nov' => 'Nov',
	'Month_dec' => 'Déc',
	'Year' => 'Année',
	'Month' => 'Mois',
	'Number' => 'Nombre',

	'module_name_new_posts_by_month' => 'Nouveaux messages par mois',
	'Posts_month' => 'Nombre de nouveaux messages par mois',

	'module_name_new_topics_by_month' => 'Nouveaux sujets par mois',
	'Topics_month' => 'Nombre de nouveaux sujets par mois',

	'module_name_new_users_by_month' => 'Nouveaux utilisateurs par mois',
	'Signup_month' => 'Nombre de nouveaux utilisateurs par mois',

	'module_name_posting_by_day_of_week' => 'Traffic par jour de la semaine : Messages',
	'Traffic_posts' => 'Traffic par jour de la semaine : Messages',
	'Dow' => 'Day',

	'module_name_registrations_by_day_of_week' => 'Traffic par jour de la semaine : Inscriptions',
	'Traffic_reg' => 'Traffic par jour de la semaine : Inscriptions',
	'New_users' => 'Nouveaux utilisateurs',

	'module_name_site_hist_daily_stats_current_week' => 'Statistiques de cette semaine',

	'module_name_site_hist_hours_stats_current_day' => 'Statistiques d\'aujourd\'hui',

	'module_name_site_hist_month_top_posters' => 'Top posteurs ce mois-ci',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month

	'module_name_site_hist_monthly_stats_current_year' => 'Données par mois sur l\'année courante',

	'module_name_site_hist_week_top_posters' => 'Top posteurs de cette semaine',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week

	'module_name_top_attachments' => 'Top téléchargements',
	'File_name' => 'Nom du fichier',
	'File_comment' => 'Commenaire',

	'module_name_top_posters' => 'Top posteurs',

	'module_name_top_smilies' => 'Smileys les plus utilisés',
	'smiley_url' => 'Image',
	'smiley_code' => 'Code',

	'module_name_top_words' => 'Mots les plus utilisés',
	'Word' => 'Mot',
	'Uses2' => 'Utilisations',

	'module_name_topics_by_day_of_week' => 'Traffic par jour: sujets',
	'Traffic_topics' => 'Traffic par jour: sujets',
	'Dow' => 'Jour',

	'module_name_users_from_where' => 'Localisation',
	'From_where_title' => 'D\'où viennent nos utilisateurs',
	'From_where' => 'De',

	'module_name_users_gender' => 'Sexe',
	'Users' => 'Utilisateurs',

	//V: encore un truc plus utilisé
	'module_name_users_ranks' => 'Rangs',
	'Rank_image' => 'Image du rang',
	'Rank_range' => 'Messages nécessaires',
	'Rank_special' => 'Rang spécial',
	)
);

?>