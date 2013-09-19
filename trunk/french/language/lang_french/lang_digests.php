<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_digests.php 22 2009-02-22 08:44:48Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Mark D. Hamill (mhamill@computer.org)
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
// This block goes as default text in the emailed digest (mail_digests.php)
	'digest_introduction' => 'Comme vous l\'avez demandé, voici les dernières informations des messages sur ' . $config['sitename'] . '. Venez voir les discussions !', 
	'digest_from_text_name' => 'Robot à e-mail - ' . $config['sitename'], 
	'digest_from_email_address' => $config['board_email'], 
	'digest_subject_line' => $config['sitename'] . ' Lettre d\'informations', 
	'digest_disclaimer_html' => "\n" . 'Cette lettre d\'information est envoyés aux membres de <a href="' . DIGEST_SITE_URL . '">' . $config['sitename'] . '</a> car vous l\'avez explicitement demandé. ' . $config['sitename'] . ' n\'est pas un site commercial. Votre adresse e-mail ne sera jamais partagée à un tier. Voyez notre <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> pour connaître notre politique sur votre vie privée. Vous pouvez changer d\'intervalle ou arrêter de recevoir les e-mails d\'informations de ' . $config['sitename'] . ' from the <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">page des nouvelles</a>. (Vous devez être connecté pour y accéder). Pour plus d\'informations, <a href="mailto:' . $config['board_email'] . '">contactez l\'administrateur de ' . $config['sitename'] . '</a>.', 
	'digest_disclaimer_text' => "\n" . 'Cette lettre d\'information est envoyés aux membres de ' . $config['sitename'] . ' car vous l\'avez explicitement demandé. ' . $config['sitename'] . ' n\'est pas un site commercial. Votre adresse e-mail ne sera jamais partagée à un tier. Voyez notre FAQ pour connaître notre politique sur votre vie privée. Vous pouvez changer d\'intervalle ou arrêter de recevoir les e-mails d\'informations de ' . $config['sitename'] . ' depuis la page des nouvelles. (Vous devez être connecté pour y accéder). Pour plus d\'informations, contactez les administrateurs de ' . $config['board_email'] . '.', 
	'digest_forum' => 'Forum: ',
	'digest_topic' => 'Sujet: ',
	'digest_link' => 'Lien',
	'digest_post_time' => 'Heure',
	'digest_author' => 'Heure',
	'digest_message_excerpt' => 'Aperçu',
	'digest_posted_by' => 'Posté par ',
	'digest_posted_at' => ' à ',
	'digest_forums_message_digest' => 'Lettre d\'information', // used in <head> tag
	'digest_salutation' => 'Cher ',
	'digest_your_digest_options' => 'Vos options :',
	'digest_format' => 'Format :',
	'digest_show_message_text' => 'Montrer le texte du message :',
	'digest_show_my_messages' => 'Montrer mes messages :',
	'digest_frequency' => 'Fréquence :',
	'digest_show_only_new_messages' => 'Montrer seulement les nouveaux messages depuis ma dernière connexion :',
	'digest_send_if_no_new_messages' => 'Envoyer un e-mail même s\'il n\'y a pas eu de nouveau message :',
	'digest_period_24_hrs' => '24 heures',
	'digest_period_1_week' => '1 semaine',
	'digest_no_new_messages' => 'Il n\'y a pas de nouveau message dans les forums que vous avez sélectionné.',
	'digest_message_size' => 'Taille des aperçu des messages :',
	'digest_summary' => 'Résumé',
	'digest_a_total_of' => 'Un total de',
	'digest_were_emailed' => 'lettres d\'informations ont été envoyées.',
	'digest_server_date' => 'Date serveur :',
	'digest_server_hour' => 'Heure serveur :',
	'digest_server_time_zone' => 'Fuseau horaire :',
	'digest_or' => 'ou',
	'digest_a_digest_containing' => 'Une lettre d\'information contenant',
	'digest_posts_was_sent_to' => 'messages a été envoyée à',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'Lettres d\'information',
	'digest_explanation' => 'Les lettres d\'information sont des e-mails résumant l\'activité des messages du forum, envoyés régulièrement. Vous pouvez les recevoir une fois par jour ou une fois par semaine, à l\'heure et le jour que vous le désirez. Vous pouvez aussi sélectionner les forums dont vous voulez avoir des nouvelles, ou vous pouvez choisir de recevoir des informations sur tous les forums auxquels vous êtes autorisé à accéder.<br/><br/>Nos lettres d\'information ne contiennent pas de spam, et votre adresse e-mail n\'est pas vendue. Vous pouvez, bien évidemment, vous désinscrire et arrêter de recevoir des e-mails d\'information à tout moment, simplement en revenant sur cette page.',
	'digest_wanted' => '<b>Fréquence :</b><br />(si vous choisissez hebdomadaire, vous recevrez l\'e-mail le samedi)',
	'digest_none' => 'aucun (désinscription)',
	'digest_daily' => 'quotidien',
	'digest_weekly' => 'hebdomadaire',
	'digest_format_short' => 'Format de la lettre d\'information :',
	'digest_format' => '<b>Format :</b><br />(le HTML est hautement recommandé, sauf si votre client mail ne le supporte pas)',
	'digest_html' => 'HTML',
	'digest_text' => 'Texte',
	'digest_excerpt' => '<b>Afficher un aperçu du message :</b>',
	'digest_yes' => 'Oui',
	'digest_no' => 'Non',
	'digest_l_show_my_messages' => '<b>Montrer mes messages aussi :</b>',
	'digest_l_show_new_only' => '<b>Montrer les nouveaux messages uniquement :</b><br />(This will filter out any messages posted prior to the date and time you last visited that would otherwise be included in the digest.)',
	'digest_send_if_no_msgs' => '<b>Envoyer un courrier même si aucun message n\'a été posté :</b>',
	'digest_hour_to_send' => '<b>Heure à laquelle vous voulez recevoir l\'e-mail :</b><br />(basé sur votre fuseau horaire. Si vous changez de fuseau horaire, pensez à changer ce réglage-ci pour recevoir vos e-mails à la même heure)',
	'digest_hour_to_send_short' => 'Time digest sent (based on time zone in your profile):',
	'digest_midnight' => 'Minuit',
	'digest_1am' => '1h', // V: todo: remettre AM/PM ?
	'digest_2am' => '2h',
	'digest_3am' => '3h',
	'digest_4am' => '4h',
	'digest_5am' => '5h',
	'digest_6am' => '6h',
	'digest_7am' => '7h',
	'digest_8am' => '8h',
	'digest_9am' => '9h',
	'digest_10am' => '10h',
	'digest_11am' => '11h',
	'digest_12pm' => '12h',
	'digest_1pm' => '13h',
	'digest_2pm' => '14h',
	'digest_3pm' => '15h',
	'digest_4pm' => '16h',
	'digest_5pm' => '17h',
	'digest_6pm' => '18h',
	'digest_7pm' => '19h',
	'digest_8pm' => '20h',
	'digest_9pm' => '21h',
	'digest_10pm' => '22h',
	'digest_11pm' => '23h',
	'digest_click_return' => 'Cliquez %sici%s pour retourner aux réglages', // %s's here are for uris, do not remove!
	'digest_select_forums' => '<b>Recevoir des informations sur ces forums :</b>',
	'digest_create' => 'Vos paramètres ont été correctement créés.',
	'digest_modify' => 'Vos paramètres ont été correctement mis à jour.',
	'digest_unsubscribe' => 'Vous avez été désinscrit et ne recevrez plus de lettre d\'information',
	'digest_no_forums_selected' => 'Vous n\'avez pas sélectionné de forum, vous serez donc désinscrit',
	'digest_all_forums' => 'Tous',
	'digest_submit_text' => 'Valider les changements',
	'digest_reset_text' => 'Annuler les changements',
	'digest_size' => '<b>Taille des aperçus de message :</b><br />(Attention : plus ce réglage est haut, plus votre lettre d\'information sera grande. Pour chaque message, vous avez en dessous de son aperçu un lien pour le lire en entier)',
	'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => 'Maximum (32000)',
	'digest_version_text' => 'Version',
	)
);

?>