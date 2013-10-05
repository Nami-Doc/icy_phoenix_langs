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
* Christian Knerr (cback) - (www.cback.de)
* Lopalong
*** French Translation http://icyphoenix.fr **
*/

/**
* English Language File for the CBACK Cracker Tracker
*
* @author Christian Knerr (cback)
* @translator Marc Renninger (mc-dragon)
* @package ctracker
* @version 5.0.0
* @since 21.07.2006 - 17:26:28
* @copyright (c) 2006 www.cback.de
*
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
	'ctracker_settings_on' => 'Activé',
	'ctracker_settings_off' => 'Désactivé',
	'ctracker_ma_on' => 'ON',
	'ctracker_ma_off' => 'OFF',
	'ctracker_blockmode_0' => 'Off',
	'ctracker_blockmode_1' => 'Bannir l\'utilisateur',
	'ctracker_blockmode_2' => 'Verrouiller l\'utilisateur',
	'ctracker_complex_1' => '[0-9]',
	'ctracker_complex_2' => '[a-z]',
	'ctracker_complex_3' => '[A-Z]',
	'ctracker_complex_4' => '[0-9][a-z]',
	'ctracker_complex_5' => '[0-9][A-Z]',
	'ctracker_complex_6' => '[0-9][a-z][A-Z]',
	'ctracker_complex_7' => '[0-9][*]',
	'ctracker_complex_8' => '[0-9][a-z][*]',
	'ctracker_complex_9' => '[0-9][a-z][A-Z][*]',
	'ctracker_ipb_new_entry' => 'Nouvelle entrée',
	'ctracker_ipb_added' => 'Entrée ajoutée avec succès !',
	'ctracker_ipb_deleted' => 'Entrée supprimée avec succès !',
	'ctracker_ipb_add_now' => 'Ajouter une entrée',
	'ctracker_mu_success' => 'L\'utilisateur a été marqué comme "Utilisateur Misérable".',
	'ctracker_mu_success_bbc' => '[cell class="text_orange"]L\'utilisateur a été marqué comme "Utilisateur Misérable".[/cell]',
	'ctracker_mu_success_html' => '<span class="text_orange">The user has been marked as a "Utilisateur Misérable".</span>',
	'ctracker_mu_error_admin' => 'Les administrateurs et les modérateurs ne peuvent être marqués comme "Utilisateur Misérables" !',
	'ctracker_mu_deleted' => 'Les utilisateurs sélectionnés ne sont maintenant plus des "Utilisateurs Misérables".',
	'ctracker_mu_head' => 'Utilisateur Misérable',
	'ctracker_error_updating_userdata' => 'CrackerTracker n\'a pas réussi à modifier la table des utilisateurs.',
	'ctracker_error_database_op' => 'CrackerTracker n\'a pas pu effectuer l\'action sur la base de données.',
	'ctracker_message_dialog_title' => 'CBACK CrackerTracker Professional',


/*
* Language Strings used for the footer itself
*/
	'ctracker_fdisplay_imgdesc' => 'Sécurité du forum',
	'ctracker_fdisplay_n' => '<a href="http://www.cback.de" target="_blank">Securité</a> avec <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.',
	'ctracker_fdisplay_c' => 'Protégé <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> attaques bloquées.',
	'ctracker_fdisplay_g' => '<b>%s</b> Attaques bloquées',


/*
* Language Strings for the class_ct_database.php
*/
	'ctracker_error_loading_config' => 'La configuration de CrackerTracker n\'a pas pu être chargée depuis la base donnée. Êtes-vous sûr que votre base de données et votre fichier "includes/constants" ne sont pas corrompus ?',
	'ctracker_error_updating_config' => 'La configuration de CrackerTracker n\'a pas pu être mise à jour. Êtes-vous sûr que votre base de données et votre fichier "includes/constants" ne sont pas corrompus ?',
	'ctracker_error_loading_blocklist' => 'La liste noire de CrackerTracker n\'a pu être chargée de la base de données. Êtes-vous sûr que votre base de données et votre fichier "includes/constants" ne sont pas corrompus ?',
	'ctracker_error_insert_blocklist' => 'Les données n\'ont pas pu être ajoutées à la liste noire de CrackerTracker. Êtes-vous sûr que votre base de données et votre fichier "includes/constants" ne sont pas corrompus ?',
	'ctracker_error_delete_blocklist' => 'Les données n\'ont pas pu être supprimées de la liste noire de CrackerTracker. Êtes-vous sûr que votre base de données et votre fichier "includes/constants" ne sont pas corrompus ?',
	'ctracker_error_login_history' => 'Il y a eu une erreur dans la base de données avec l\'historique des connexions. Êtes-vous sûr que votre base de données et votre fichier "includes/constants" ne sont pas corrompus ?',
	'ctracker_error_del_login_history' => 'Impossible de vider l\'historique des connexions.',


/*
* Language Strings used in class_ct_userfunctions.php
*/
	'ctracker_info_search_time' => "Pour des raisons de sécurité, il n'est pas possible de faire plus de %s recherches toutes les %s secondaires. Si vous avez dépassé cette limite, vous devez maintenant attendre <span id=\"waittime\">%s</span> secondes avant de pouvoir faire une autre recherche. <script type=\"text/javascript\">var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } }</script>",
	'ctracker_info_regist_time' => "Pour des raisons de sécurité, vous ne pouvez vous inscrire qu'une fois toutes les %s secondes. Si vous avez dépassé cette limite, vous devez maintenant attendre <span id=\"waittime\">%s</span> secondes avant de pouvoir vous inscrire à nouveau. <script type=\"text/javascript\">var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } }</script>",
	'ctracker_info_regip_double' => 'Un compte avec cette adresse IP existe déjà. Pour des raisons de sécurité, une seule inscription est permise par adresse IP.',
	'ctracker_info_profile_spammer' => 'Cette inscription a été identifiée comme spam. Si vous pensez que c\'est une erreur, veuillez contacter un administrateur du forum.',
	'ctracker_info_password_minlng' => 'L\'administrateur exige que le mot de passe contienne au minimum <b>%s</b> caractères. Votre mot de passe ne fait que <b>%s</b> caractères. Veuillez revenir en ailleurs et changer votre mot de passe.',
	'ctracker_info_password_cmplx' => 'L\'administrateur exige que le mot de passe contienne <b>au minimum</b> les choses suivantes :%s',
	'ctracker_info_password_cmplx_1' => 'Sigles',
	'ctracker_info_password_cmplx_2' => 'Minuscules',
	'ctracker_info_password_cmplx_3' => 'Majuscules',
	'ctracker_info_password_cmplx_4' => 'Caractères spéciaux',
	'ctracker_info_pw_expired' => 'L\'administrateur a décidé qu\'un mot de passe ne reste valide que pour <b>%s jours</b>. Nous recommandons pour votre sécurité que vous changiez votre mot de passe maintenant. (<a href="' . CMS_PROFILE_MG . '?mode=editprofile&amp;' . POST_USERS_URL . '=%d">Profil</a>)',

/*
* Language Strings used in ct_visual_confirm.php
*/
	'ctracker_login_wrong' => 'Le code de confirmation visuelle entré est incorrect !',
	'ctracker_code_dbconn' => 'Impossible de charger un code de confirmation visuelle depuis la base de données.',
	'ctracker_login_success' => 'Votre compte a été réactivé.<br /><br />Cliquez <a href="%s">ici</a> pour revenir à la connexion.',
	'ctracker_code_count' => 'Le nombre de tentative pour le code de confirmation visuelle a dépassé la limite autorisée pour cette session.',

/*
* Language Strings used in ctracker_login.php
*/
	'ctracker_login_title' => 'Activation de Compte',
	'ctracker_login_logged' => 'Les utilisateurs connectés ne peuvent accéder au site.',
	'ctracker_login_confim' => 'Votre nombre de tentatives de connexions à été atteint. Votre compte a été verrouillé et vous devrez le réactiver en utilisant la confirmation visuelle.<br /><br />Veuillez rentrer le code suivant et cliquez sur "déverouiller" pour débloquer votre compte. Une fois que ça sera fait, vous pourrez de nouveau vous reconnecter.',
	'ctracker_login_button' => 'Activer',

/*
* Language Strings for IP Warning Engine
*/
	'ctracker_ipwarn_info' => 'Scan de la Plage d\'IP pour votre compte : <b>%s</b>',
	'ctracker_ipwarn_prof' => 'Scan de place d\'IP',
	'ctracker_ipwarn_pdes' => 'Le scanneur de plages d\'IP vérifie les changements dans votre plage d\'adresses IP. Si quelqu\'un s\'est connecté à votre compte depuis un autre endroit, vous verrez une notification. (ou si vous, vous-même, vous êtes connecté précédemment depuis un autre endroit)<br />Surveillez le bas de page pour confirmer que cette fonctionnalitée est encore active, un attaquant pourrait avoir désactivé cette fonctionnalitée. Votre connexion reste active, vous pourrez donc encore faire des changements après avoir vu ce message.',
	'ctracker_ipwarn_chng' => '<b>&raquo; ATTENTION &laquo;</b><br />La plage IP de votre compte a changé. Cette connexion a pris lieu depuis <b>%s</b>, la précédente depuis <b>%s</b>. Si vous ne vous êtes pas connecté depuis ce lieu, un attaquant a sûrement accédé à votre compte sans votre autorisation !',
	'ctracker_ipwarn_welc' => '<b>&raquo; ATTENTION &laquo;</b><br />Le scan de plage IP pour votre compte n\'a pas encore été activé. Cela arrive après deux connexions. Si vous voulez activer le scanneur maintenant, veuillez vous déconnecter puis vous reconnecter deux fois.',
	'ctracker_ipwarn_send' => 'Sauvegarder les options',

/*
* Language Strings for Login History
*/
	'ctracker_lhistory_h' => 'Historique des connexions',
	'ctracker_lhistory_i' => 'Historique des connexions et des adresses IP utilisées pour les <b>%s</b> dernières connexions afin de vérifier si votre compte a été utilisé par une personne malveillante. Si vous voyez des adresses IP inconnues ou des dates incorrectes, il est possible que quelqu\'un connaisse votre mot de passe. Dans ce cas, vous devriez changer de mot de passe et vérifier votre adresse e-mail configurée.',
	'ctracker_lhistory_h1' => 'Date et heure',
	'ctracker_lhistory_h2' => 'Adresse IP',
	'ctracker_lhistory_nav' => 'Historique des connexions',
	'ctracker_lhistory_err' => 'Vous devez être connecté pour utiliser cette fonctionnalitée de CrackerTracker.',
	'ctracker_lhistory_off' => 'L\'historique des connexions a été désactivé par un administrateur.',

/*
* Other Language Strings used in the Board itself
*/
	'ctracker_gmb_link' => 'L\'administrateur a écrit une note importante pour tous les utilisateurs. Vous pouvez la voir ici : <br /><br /><a href="%s">%s</a><br />',
	'ctracker_gmb_mark' => 'Marquer le message "lu"',
	'ctracker_gmb_markip' => 'Cacher',
	'ctracker_gmb_loginlink' => 'Connexion - Sécurité',
	'ctracker_gmb_1stadmin' => 'La configuration ou les options de l\'administrateur principal ne peuvent être changées.',
	'ctracker_gmb_pu_1' => '<b>CrackerTracker - Mauvaise configuration</b><br /><br />Le port 21 est utilisé pour le FTP. Si votre forum est configuré pour utiliser ce forum, vous ne pourrez plus accéder au forum.',
	'ctracker_gmb_pu_2' => '<b>CrackerTracker - Mauvaise configuration</b><br /><br />La taille de la session est trop basse, et vous serez toujours déconnecté du forum avant de pouvoir corriger l\'option.',
	'ctracker_gmb_pu_3' => '<b>CrackerTracker - Mauvaise configuration</b><br /><br />Le chemin commence et/ou fini soit sans slash (/www/) ou ne contient pas que le slash (/)!',
	'ctracker_gmb_pu_4' => '<b>CrackerTracker - Mauvaise configuration</b><br /><br />Le nom de serveur ne doit pas finir avec un slash (/) !',
	'ctracker_binf_spammer' => 'La sécurité anti-spam a detécté que vous avez atteint votre maximum de messages en %s secondaires. Si vous essayez d\'écrire encore un autre message avant <b>%s</b> secondes, votre compte sera <b>bloqué !</b><br /><br />Veuillez patienter - cette mesure est nécessaire pour bloquer les spammeurs.',
	'ctracker_binf_sban' => 'La sécurité anti-spam a banni votre compte car vous avez été identifié comme spammeur.',
	'ctracker_sendmail_info' => 'Pour des raisons de sécurité, vous ne pouvez envoyer qu\'un e-mail toutes les %s minutes.',
	'ctracker_pwreset_info' => 'Pour des raisons de sécurité, vous ne pouvez demander un nouveau mot de passe qu\'une fois toutes les %s minutes. Veuillez contacter l\'administrateur si vous avez des difficultés de connexions !',
	'ctracker_vc_guest_post' => 'Confirmation visuelle pour les invités',
	'ctracker_vc_guest_expl' => 'Sécurité anti-spam : veuillez entrer le code qui suit avant de soumettre votre message.',
	'ctracker_dbg_mode' => '<b>CrackerTracker est en MODE DEBUG. Vous ne <b>devez pas</b> garder ce mode activé.<br/>Veuillez revenir en mode normal dès que possible.<br/><br/><u>Ce message ne peut être caché !</u></b>',
	)
);

?>