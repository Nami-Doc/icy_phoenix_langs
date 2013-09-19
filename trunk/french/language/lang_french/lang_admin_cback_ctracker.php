<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_cback_ctracker.php 31 2009-04-27 16:37:18Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Christian Knerr (cback) - (www.cback.de)
* Lopalong
**** French Translation Vendethiel and Yros **
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
/*
* Language Strings used for the ACP Menu points
*/
	'ctracker_module_category' => 'CrackerTracker',
	'ctracker_module_1' => 'Scan des Modifications de Fichiers',
	'ctracker_module_2' => 'Crédits',
	'ctracker_module_3' => 'Scan des Fichiers',
	'ctracker_module_4' => 'Message global',
	'ctracker_module_5' => 'Bloqueur d\'IP &amp; d\'agent',
	'ctracker_module_6' => 'Journalisation',
	'ctracker_module_7' => 'Maintenance &amp; Tests',
	'ctracker_module_8' => 'Utilisateurs misérables',
	'ctracker_module_9' => 'Réglages',
	'ctracker_module_10' => 'Sauvegarde',
	'ctracker_module_11' => 'Bas de Page',


/*
* Language Strings used in ACP Modules itself
*/
	'ctracker_wrong_module' => 'Module inconnu',
	'ctracker_img_descriptions' => 'Image',
	'ctracker_set_catname1' => 'Bloquer d\'IP, Proxy &amp; Agent',
	'ctracker_set_catname2' => 'Protection de la recherche',
	'ctracker_set_catname3' => 'Protection de la connexion',
	'ctracker_set_catname4' => 'Détection automatique du spam',
	'ctracker_set_catname5' => 'Protection des inscriptions',
	'ctracker_set_catname6' => 'Vérification sur les mots de passe',
	'ctracker_set_catname7' => 'Sécurité générale',
	'ctracker_set_catname8' => 'Autres options',
	'ctracker_settings_head' => 'Options CrackerTracker',
	'ctracker_settings_expl' => '<b>Modifiez les options du système de sécurité CrackerTracker.</b>',
	'ctracker_button_submit' => 'Sauvegarder les options',
	'ctracker_button_reset' => 'Restorer',

	'ctracker_settings_m1' => 'Activer le bloqueur d\'IP',
	'ctracker_settings_e1' => 'Active le bloqueur d\'IP, Proxy et d\'Agents.',
	'ctracker_settings_m2' => 'Taille du journal du bloqueur d\'ip',
	'ctracker_settings_e2' => 'Change le nombre d\'entrées à garder dans le bloqueur. Si le nombre d\'entrées dépasse la limite, le journal sera automatiquement supprimé pour gagner de l\'espace.',
	'ctracker_settings_m3' => 'Activer la protection de la recherche',
	'ctracker_settings_e3' => 'Activer ou désactiver la protection de la recherchée.',
	'ctracker_settings_m4' => 'Délai pour les membres',
	'ctracker_settings_e4' => 'Si la protection est activée : choisissez le délai avant que les utilisateurs enregistrés puissent refaire une recherche.',
	'ctracker_settings_m5' => 'Nombre de recherches pour les membres',
	'ctracker_settings_e5' => 'Choisissez le nombre de recherches que les membres peuvent faire dans l\'intervalle indiqué ci-dessus. Si excédé, les recherches supplémentaires seront bloquées pour le temps restant afin de réduire la charge serveur.',
	'ctracker_settings_m6' => 'Délai pour les invités',
	'ctracker_settings_e6' => 'Choisissez le délai avant que les invités puissent refaire une recherche.',
	'ctracker_settings_m7' => 'Nombre de recherches pour les invités',
	'ctracker_settings_e7' => 'Choisissez combien de recherche les invités peuvent faire dans l\'intervalle indiqué ci-dessus. Si excédé, les recherches supplémentaires seront bloquées pour le temps restant afin de réduire la charge serveur.',
	'ctracker_settings_m8' => 'Activer la protection de la connexion',
	'ctracker_settings_e8' => 'Activer ou désactiver le système de protection de la connexion.',
	'ctracker_settings_m9' => 'Taille du journal pour les connexions refusées',
	'ctracker_settings_e9' => 'Choisissez combien d\'entrées de connexion refusées doivent être gardées avant d\'être automatiquement purgées pour sauvegarder de l\'espace.',
	'ctracker_settings_m10' => 'Nombre de connexions avant d\'afficher la confirmation visuelle',
	'ctracker_settings_e10' => 'Choisissez combien de fois un utilisateur à le droit de se tromper à la connexion avant que la protection anti-bruteforce s\'active et que la confirmation visuelle s\'affiche.',
	'ctracker_settings_m11' => 'Historique des connexions',
	'ctracker_settings_e11' => 'Activer ou désactiver l\'historique des connexions.',
	'ctracker_settings_m12' => 'Entrées dans le journal par utilisateur',
	'ctracker_settings_e12' => 'Choisissez combien de connexions (correctes) doivent être gardées par utilisateur doivent être gardées dans l\'historique. Les utilisateurs peuvent voir la date & heure ainsi que l\'adresse IP pour chaque connexion sur son compte.',
	'ctracker_settings_m13' => 'Vérification de l\'adresse IP',
	'ctracker_settings_e13' => '<b>Activer ou désactiver la vérification de l\'adresse IP:</b> le vérificateur d\'adresse IP vérifie les changements dans votre adresse IP lorsque vous vous connecter. Chaque utilisateur peut activer ou désactiver cette fonctionnalité. L\'utilisateur sera notifié si sa plage d\'adresse IP a changé depuis sa dernière connexion, et/ou si quelqu\'un s\'est connecté depuis un autre endroit.',
	'ctracker_settings_m14' => 'Détection du Spam',
	'ctracker_settings_e14' => 'Choisissez le mode de protection contre le spam ou si vous voulez la désactiver.',
	'ctracker_settings_m15' => 'Intervalle de temps',
	'ctracker_settings_e15' => 'Choisissez l\'intervalle de temps (en secondes) avant que l\'utilisateur ne soit considéré comme un spammeur.',
	'ctracker_settings_m16' => 'Nombre de messages',
	'ctracker_settings_e16' => 'Choisissez le nombre de messages qu\'un utilisateur peut poster dans l\'intervalle indiqué ci-dessus. Une fois excédé, l\'utilisateur sera considéré comme un spammeur.',
	'ctracker_settings_m17' => 'Taille du journal',
	'ctracker_settings_e17' => 'Choisissez la taille du journal (Kb) où les utilisateurs marqués comme spammeurs seront enregistrés.',
	'ctracker_settings_m18' => 'Protection des inscriptions',
	'ctracker_settings_e18' => 'Activer ou désactiver la protection des inscriptions.',
	'ctracker_settings_m19' => 'Délail entre chaque inscription',
	'ctracker_settings_e19' => 'Choisissez le temps (en secondes) entre deux inscriptions.',

	'ctracker_settings_m21' => 'Surveiller les adresses IP',
	'ctracker_settings_e21' => 'En activant cette fonctionnalité, un utilisateur ne pourra se re-créer un compte qu\'après qu\'un utilisateur avec une autre adresse IP se soit inscrit.',
	'ctracker_settings_m22' => 'Validité des mots de passe',
	'ctracker_settings_e22' => 'Activer ou désactiver la vérification de validité des mots de passe des utilisateurs.',
	'ctracker_settings_m23' => 'Validité d\'un mot de passe (en jours)',
	'ctracker_settings_e23' => 'Choisissez combien de temps (en jours) les mots de passe des utilisateurs sera valide avant que l\'utilisateur ne soit rappelé qu\'il doit le changer.',
	'ctracker_settings_m24' => 'Vérification de la complexité des mots de passe',
	'ctracker_settings_e24' => 'Enable this feature to check the complexity of the User&#39;s passwords.',
	'ctracker_settings_m25' => 'Caractères requis',
	'ctracker_settings_e25' => 'Choisissez les caractères qui doivent être dans un mot de passe.',
	'ctracker_settings_m26' => 'Taille minimum',
	'ctracker_settings_e26' => 'Choisissez le nombre de lettres minimum pour un mot de pase.',
	'ctracker_settings_m27' => 'Protection de la réinitialisation du mot de passe',
	'ctracker_settings_e27' => 'Cette protection permet d\'empêcher les utilisateurs de réinitialiser leur mot de passe plus d\'une fois toutes les X minutes (délai défini ci-dessous).',
	'ctracker_settings_m28' => 'Délai entre chaque réinitialisation',
	'ctracker_settings_e28' => 'Délai (en minutes) avant qu\'un utilisateur ne puisse à nouveau réinitialiser son mot de passe.',
	'ctracker_settings_m29' => 'Surveillance des e-mails',
	'ctracker_settings_e29' => 'Activer cette protection permet d\'empêcher aux utilisateurs d\'abuser de la fonctionnalité d\'envoi d\'e-mail afin d\'éviter le spam.',
	'ctracker_settings_m30' => 'Délai entre chaque envoi d\'e-mail',
	'ctracker_settings_e30' => 'Délai (en minutes) entre deux e-mails qu\'un utilisateur peut envoyer via le forum.',
	'ctracker_settings_m31' => 'Sauvegarde automatique',
	'ctracker_settings_e31' => 'Activer cette sauvegarde permet que les options du forum soient sauvegardées automatiquement. Si cela ne marche pas, utilisez la dernière configuration fonctionnelle.',
	'ctracker_settings_m32' => 'Confirmation visuelle pour les invités',
	'ctracker_settings_e32' => 'Activer cette protection permet de forcer aux invités d\'entrer un code de confirmation visuelle avant d\'être autoriser à poster un message. Cette mesure est une protection contre le spam.',
	'ctracker_settings_m33' => 'Protection anti e-mails jetables',
	'ctracker_settings_e33' => 'cTracker possède une liste interne de services d\'adresses e-mails jetables (e-mails valides durant un court laps de temps). Activer cette fonctionnalité permet d\'empêcher les utilisateurs de s\'inscrire avec de telles adresses e-mails.',
	'ctracker_settings_m34' => 'Vérification de la validité de la configuration',
	'ctracker_settings_e34' => 'Activer cette fonctionnalité permet à CrackerTracker de vérifier que les réglages d\'IcyPhoenix sont valides, afin que vous ne puissiez endommager gravement votre site avec une mauvaise configuration',
	'ctracker_settings_m35' => 'Détection des spammeurs avancée',
	'ctracker_settings_e35' => 'En activant cette fonctionnalité, cTracker recherche les spammeurs et les messages spam. La plupart d\'entre eux seront bloqués.',
	'ctracker_settings_m36' => 'Vérification des mots-clefs',
	'ctracker_settings_e36' => 'En activant la détection des spammeurs avancée, les mots-clefs dans les profils et/ou les messages seront scannés pour identifier les spammeurs.<br/><b>Note :</b> il est possible que certains utilisateurs soient accusés à tort. Pensez à vérifier le journal.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Crédits',
	'ctracker_credits_subhead' => 'Crédits de CBACK CrackerTracker - page de remerciement.',
	'ctracker_credits_donate' => 'Faire un don',
	'ctracker_credits_donate_expl' => 'Appréciez-vous <b>CBACK CrackerTracker Professional</b> ? Si oui, pensez à faire un don au projet CBACK en utilisant le bouton Paypal, pour aider à payer les coûts serveurs, afin que nous puissions continuer à travailler sur tous nos projets libres et gratuits !<br /><br />Merci de votre support.',
	'ctracker_credits_credits' => 'Crédits',
	'ctracker_credits_credits_1' => 'Idées &amp; Implémentations',
	'ctracker_credits_credits_2' => 'Auteur et Support',
	'ctracker_credits_credits_3' => 'Icônes',
	'ctracker_credits_credits_4' => 'Site de téléchargement officiel',
	'ctracker_credits_moddownload' => 'Téléchargement du MOD CrackerTracker',
	'ctracker_credits_thanks' => 'Merci à ...',
	'ctracker_credits_thanks_text' => 'J\'aimerais remercier toutes ces personnes :',
	'ctracker_credits_thanks_to' => '<b>Idées, tests de sécurité et relecture</b><br />Tekin Birdüzen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Idées:</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Bêta-testeurs</b><br />Merci à tous les participants qui ont aidé à tester,<br />aux utilisateurs Premium<br />et à nos collègues moddeurs qui ont aidé à tester et à corriger, bien sûr.</i>',
	'ctracker_credits_info' => 'Plus de sécurité ?',
	'ctracker_credits_info_text' => 'N\'oubliez pas d\'activer le CATPCHA sur votre forum pour empêcher les robots de s\'inscrire !',
	// V: not used anymore /o/
	//L\'outil parfait pour IcyPhoenix et CrackerTracker : pour encore plus de sécurité, nous vous recommandons d\'installer le mod <b>Advanced Visual Confirmation</b> (Confirmation visuelle avancée) par Amiga
	//The perfect add-on for IcyPhoenix and CrackerTracker: For optimal safety we recommend the Mod <b>Advanced Visual Confirmation</b> by AmigaLink. This MOD expands the CAPTCHA feature of phpBB and CrackerTracker Professional with a more complex system which cannot be read by Bots. This MOD you can download from <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a>.<br /><br /><br /><br />We suggest that you also integrate this MOD into your Board for additional security.',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'CrackerTracker Checksum Scanner',
	'ctracker_fchk_subhead' => '<b>Create a checksum of each PHP file on your Board.</b><br /> Click on "Create or upgrade Checksums". Afterwards, you have the possibility with &#39;Verify File changes&#39; to determine whether or not the files have changed since last producing checksums. If files have changed without your prior knowledge it could be a sign that someone had gained access to your forum site. Pay attention to the last time that you checked to see if an unauthorized person activated the checksum scanner!<br /><br /><b>Please Note:</b> Not all servers support this feature. Occasionally it can come to Script Timeout if the server takes too long to produce the Icy Phoenix file list. Other servers stop the procedure since it is quite performance intensive.<br /><br />&raquo; The last actualization of the file check totals took place <b>%s</b>.',
	'ctracker_fchk_funcheader' => 'Features',
	'ctracker_fchk_tableheader' => 'System Output',
	'ctracker_fchk_option1' => 'Create or upgrade Checksums',
	'ctracker_fchk_option2' => 'Verify File changes',
	'ctracker_fchk_select_action' => 'Please choose an action!',
	'ctracker_fchk_update_action' => 'Checksums were updated!',
	'ctracker_fchk_tablehead1' => 'File path',
	'ctracker_fchk_tablehead2' => 'State',
	'ctracker_file_unchanged' => 'UNMODIFIED',
	'ctracker_file_changed' => 'MODIFIED',
	'ctracker_file_deleted' => 'DELETED',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'The File scan was executed successfully. Please click on "Show Results" to see the results. You can correct the files.<br /><br /><br /><u>Please Note:</u><br /><br />Occasionally it can happen that CrackerTracker detects a file as insecure. This can happen as PHP files can be very different, and sometimes a developer wants the code to be writable from outside. In this case - and ONLY if are absolutely sure you can tell CrackerTracker that this file is secure. To do this add to the file at the very beginning "AFTER" ?php - the following code: <br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br />If you are unsure on what to do, you can also visit the <a href="http://www.community.cback.de" target="_blank">CBACK Community</a> for more detailed instructions.',
	'ctracker_fscan_unchecked' => 'NOT CHECKED',
	'ctracker_fscan_ok' => 'SAFE',
	'ctracker_fscan_prob_1' => 'extension.inc not / or included too late',
	'ctracker_fscan_prob_2' => 'IP_ROOT_PATH may not be initialised correctly',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php may have not be included or included too late.',
	'ctracker_fscan_prob_4' => 'Code in the file is possibly executable from beyond Icy Phoenix',
	'ctracker_fscan_prob_5' => 'extension.inc is missing and / or IP_ROOT_PATH and / or constant not found',
	'ctracker_fscan_prob_def' => 'An undefined case occurred during scanning',
	'ctracker_fscan_important' => 'Please Read This!',
	'ctracker_fscan_sel_action' => 'To start the check of all files please click on "Start Filecheck". When this is completed click on "Show Results" to show the results of the check. This list can be retrieved any time using the ACP until a new check is started.<br /><br />For technical reasons it is not possible to give <u>unambiguous</u> and <u>unfailing</u> information about the security of a PHP Script. So don&#39;t be too certain. It can happen, that the scanner classifies a secure file as insecure, and vice versa. PHP code is complex - so there can&#39;t be a hundred percent guarantee that there won&#39;t be insecure scripts anymore. ;-)<br /><br />This scanner is specialised to detect security holes in included files. With this scanner you can easily find these risks and correct them.<br /><br />For more detailed instructions please visit CBACK Community!<br /><br />',
	'ctracker_fscan_head' => 'CBACK CrackerTracker Security Scanner',
	'ctracker_fscan_subhead' => 'The Security scanner checks all PHP files of your Forum to try to detect security holes which could be exploited by Worms. These holes can be accessed from outside Icy Phoenix by not having the protection of the board security, or the CrackerTracker System. This scan presents the opportunity to correct those files.<br /><br /><b>Please note:</b> The algorithm of this Scanner is on one&#39;s best optimised and not all servers support this feature! With very large Boards it can occur that this performance-intensive Scan-system oversteps the PHP Execution Time and fails.<br /><br /><b><em>Please consider this if it fails.</em></b><br /><br />&raquo; The last check took place at <b>%s</b>.',
	'ctracker_fscan_option1' => 'Start Filecheck',
	'ctracker_fscan_option2' => 'Show Results',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Global Message',
	'ctracker_glob_msg_subhead' => '<b>Leave a global message to all users.</b><br /> This message will be seen by the user on their next Login. You have the option to either refer to a thread or to write your own text.<br /><b>Note:</b> There is an imposed text limit of (255 characters).',
	'ctracker_glob_msg_entry' => 'Set global message ',
	'ctracker_glob_msg_submit' => 'Insert',
	'ctracker_glob_msg_reset' => 'Cancel Message',
	'ctracker_glob_msg_type' => 'Type of global message',
	'ctracker_glob_type_1' => 'Text',
	'ctracker_glob_type_2' => 'Link',
	'ctracker_glob_msg_txt' => 'Text of global message',
	'ctracker_glob_msg_link' => 'Link Destination in the message',
	'ctracker_glob_msg_reset' => 'Cancel current message',
	'ctracker_glob_res_txt' => 'When you click on "Cancel current message" any current message will be cancelled.',
	'ctracker_glob_msg_saved' => 'The global message was successfully saved.<br /><br />Click <a href="%s">HERE</a> to go back to CrackerTracker Management.',
	'ctracker_glob_msg_reset_ok' => 'The global message was deleted from the user table. The entered message will not be shown any more.<br /><br />Click <a href="%s">HERE</a> to go back to CrackerTracker Management.',

/*
* IP&Agent Blocker
*/
	'ctracker_ipb_delete' => 'Delete Entry',
	'ctracker_ipb_blocklist' => 'Block list entries',
	'ctracker_ipb_head' => 'Proxy, IP &amp; UserAgent Blocker',
	'ctracker_ipb_description' => '<b>Manage the Blocklist for the cTracker Proxy, IP and UserAgent Blocker.</b><br /> You can delete existing entries and / or add new ones. With a new entry you have the option to use (*) to enter any combination out of the filter in the list. For example: lwp* locks lwp-1 as well as lwp-simple etc. or 100.*.*.* locks all IP-Addresses beginning with 100. .<br /><br /><b>CAUTION</b> Be careful that you don&#39;t lock your own UserAgent or IP-Address. Otherwise you are out of your Forum!',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'Logfile Manager',
	'ctracker_log_manager_subtitle' => 'Show or delete all Logfiles from CrackerTracker.',
	'ctracker_log_manager_overview' => 'Log Manager Overview',
	'ctracker_log_manager_blocked' => 'CrackerTracker has blocked <b>%s</b> attacks so far.',
	'ctracker_log_manager_overview' => 'Logfile Overview',
	'ctracker_log_manager_head1' => 'Logname',
	'ctracker_log_manager_head2' => 'Number of entries',
	'ctracker_log_manager_head3' => 'Features',
	'ctracker_log_manager_name2' => 'Worm &amp; Exploit Protection',
	'ctracker_log_manager_name3' => 'IP, Proxy &amp; UserAgent Blocker',
	'ctracker_log_manager_name4' => 'Incorrect Logins',
	'ctracker_log_manager_name5' => 'Blocked Spammers',
	'ctracker_log_manager_name6' => 'Debug Entries',
	'ctracker_log_manager_view' => 'VIEW',
	'ctracker_log_manager_delete' => 'DELETE',
	'ctracker_log_manager_delete_all' => 'Delete All Logfiles',
	'ctracker_log_manager_deleted' => 'The log file has been deleted successfully!',
	'ctracker_log_manager_all_deleted' => 'All log files have been deleted successfully!',
	'ctracker_log_manager_showheader1' => 'There is <b>one</b> entry in this log file. Click <b><a href="%s">HERE</a></b> to go back to Logfile overview.',
	'ctracker_log_manager_showheader' => 'There are <b>%s</b> entries in this log file.<br />Click <b><a href="%s">HERE</a></b> to go back to Logfile overview.',
	'ctracker_log_manager_showlog' => 'View Logfile',
	'ctracker_log_manager_cell_1' => 'Date / Time',
	'ctracker_log_manager_cell_2a' => 'Appeal',
	'ctracker_log_manager_cell_2b' => 'Username',
	'ctracker_log_manager_cell_3' => 'Referrer',
	'ctracker_log_manager_cell_4' => 'UserAgent',
	'ctracker_log_manager_cell_5' => 'IP Address',
	'ctracker_log_manager_cell_6' => 'Remote Host',
	'ctracker_log_manager_sysmsg' => 'Last clearing of the Logfile was <b>%s</b>.',

/*
* Footer configuration
*/
	'ctracker_footer_head' => 'Footer Management',
	'ctracker_footer_subhead' => 'Choose which footer CrackerTracker should show in your Forum. Please do not change the footer and the link to www.cback.de!',
	'ctracker_select_footer' => 'Choose Footer',
	'ctracker_footer_saveit' => 'Accept Footer Layout',
	'ctracker_footer_done' => 'Changes to Footer were saved successfully!',

/*
* Maintenance Module in ACP
*/
	'ctracker_ma_unknown' => '<span class="text_orange">UNKNOWN</span>',
	'ctracker_ma_secure' => '<span class="text_green">SAFE</span>',
	'ctracker_ma_warning' => '<span class="text_red">CAUTION</span>',
	'ctracker_ma_active' => '<span class="text_green">ACTIVE</span>',
	'ctracker_ma_inactive' => '<span class="text_red">INACTIVE</span>',
	'ctracker_ma_ca' => '<span class="text_green">OK</span>',
	'ctracker_ma_ci' => '<span class="text_red">NOT SET</span>',
	'ctracker_ma_head' => 'Maintenance and System check',
	'ctracker_ma_subhead' => 'This system check automatically examines the cTracker safety modules for features, and shows tips on how to optimize your system.',
	'ctracker_ma_systest' => 'Automatic System Test',
	'ctracker_ma_sectest' => 'Security Test',
	'ctracker_ma_maint' => 'Service Function',
	'ctracker_ma_name_1' => 'Worm &amp; Exploit protection System',
	'ctracker_ma_name_2' => 'Variable Control Unit',
	'ctracker_ma_name_3' => 'IP, Proxy &amp; UserAgent Protection Unit',
	'ctracker_ma_name_4' => 'Worm Heuristics Definitions Batch - Number of Definitions: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'Security Module',
	'ctracker_ma_syshead_2' => 'Status',
	'ctracker_ma_seccheck_1' => 'Checkpoint',
	'ctracker_ma_seccheck_2' => 'Version / Status',
	'ctracker_ma_seccheck_3' => 'Reference',
	'ctracker_ma_seccheck_4' => 'Status',
	'ctracker_ma_scheck_1' => 'PHP Version (<a href="http://www.php.net" target="_blank">Visit Website</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP SAFE MODE',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALS',
	'ctracker_ma_scheck_4' => 'Icy Phoenix Version (<a href="http://www.icyphoenix.com" target="_blank">Visit Website</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; Visual Confirmation',
	'ctracker_ma_scheck_4b' => '&raquo; Account Activation',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Visit Website</a>)',
	'ctracker_ma_chmod' => '<b>CHMOD777 Status:</b> ',
	'ctracker_ma_desc_link' => 'EXECUTE NOW',
	'ctracker_ma_desc1' => '<b>Clear IP, Proxy &amp; UserAgent Table</b><br />Delete <u>all</u> entries from IP, Proxy &amp; UserAgent Table.',
	'ctracker_ma_desc2' => '<b>Factory setting: IP, Proxy &amp; UserAgent Blocker</b><br />Restore the default status of the IP, Proxy &amp; user agent database tables. Your filters are lost, however!',
	'ctracker_ma_desc3' => '<b>Delete Login History</b><br />Delete all entries from Login History, regardless of the user or the adjusted number of saves per user.',
	'ctracker_ma_desc4' => '<b>Clear File-Hash checktable</b><br />Delete all saved entries from the File-Hashcheck table.',
	'ctracker_ma_desc5' => '<b>Clear Security scanner Table</b><br />Delete all results that were stored during the file security examination of the data base.',
	'ctracker_ma_succ_main' => 'Process executed successfully!',
	'ctracker_ma_err_main' => 'Process executed unsuccessfully!',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'A user tagged as "Miserable user" will only have their posts visible to themselves and to the Admin&#39;s of the board. This assumes that they will soon get tired of getting no responses to their threads or posts and leave the board.<br /><br /><b>Note:</b> This function only makes the posts disappear from a thread. Using "Quote" or "Search" will reveal those hidden posts"!',

	'ctracker_mu_select' => 'Mark user as Miserable User',
	'ctracker_mu_find' => 'Look for Usernames',
	'ctracker_mu_send' => 'Enter Usernames',
	'ctracker_mu_entr' => 'Marked Usernames',
	'ctracker_mu_uname' => 'Entered Username',
	'ctracker_mu_remove' => 'Delete Entries',
	'ctracker_mu_no_defined' => 'There are no users marked as "Miserable User" up to now.',


/*
* Recovery feature in ACP
*/
	'ctracker_rec_head' => 'System Recovery',
	'ctracker_rec_subhead' => 'Back up the Configuration Table from your Forum or you can go to the last running configuration. If you have activated this feature in the general settings of CrackerTracker, then it will be backed up every time you change the General Settings. (CAUTION! It is <b>NOT</b> a Backup of the complete database!)<br /><br />When you are not in the ACP after you have changed settings, then you can reactivate the last running configuration using the Emergency Console of CrackerTracker, also. Please read the file comment in <i>ctracker/emergency.php</i> for more instructions of Forum configurations in an emergency. Please note, that this file has to be enabled before using.<br /><br /><b>CAUTION!</b> This feature should be only used when there is a serious problem!',
	'ctracker_rec_last_saved' => 'Last Backup of the Configuration Table: <b>%s</b>',
	'ctracker_rec_never_saved' => 'The Configuration Table has not been backed up so far!',
	'ctracker_rec_backup' => '<span class="gen">Backup the Configuration Table</span>',
	'ctracker_rec_restore' => '<span class="gen">Recover the last running Configuration Table</span>',
	'ctracker_rec_succ' => '<span class="gen">The database process has been executed successfully.</span>',
	'ctracker_rec_pab' => '<span class="gen">Recovery is not available before you have made a successful Backup!</span>',
	)
);
?>