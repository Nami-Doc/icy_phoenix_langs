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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
* Lopalong
*** French Translation http://icyphoenix.fr ***
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

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="http://www.icyphoenix.com/images/logo_ip.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #dd2222;"><b>Mighty Gorgon</b></span>&nbsp;<i>(Luca Libralato)</i><br />
<b><i>Fondateur du projet</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>hpl</b></span><br />
<b><i>Développeur Junior</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>KasLimon</b></span><br />
<b><i>Développeur Junior</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>Vendethiel</b></span><br />
<b><i>Développeur Junior</i></b><br />
<br />
<br />
<b><i>Contributeurs Estimés</i></b><br />
<span style="color: #228822;"><b>Andrea75</b></span><br />
<span style="color: #dd2222;"><b>Artie</b></span><br />
<span style="color: #dd2222;"><b>Bicet</b></span>&nbsp;<i>(phpBB XS Developer)</i><br />
<span style="color: #0000bb;"><b>brandsrus</b></span><br />
<span style="color: #228822;"><b>buldo</b></span><br />
<span style="color: #228822;"><b>casimedicos</b></span><br />
<span style="color: #228822;"><b>Chaotic</b></span><br />
<span style="color: #dd2222;"><b>CyberAlien</b></span><br />
<span style="color: #228822;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #228822;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #228822;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #228822;"><b>moreteavicar</b></span><br />
<span style="color: #228822;"><b>novice programmer</b></span><br />
<span style="color: #228822;"><b>ThE KuKa</b></span><br />
<span style="color: #ff7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000bb;"><b>Tom</b></span><br />
<span style="color: #aaff00;"><b>TuningBEB2008</b></span><br />
<span style="color: #228822;"><b>z3d0</b></span><br />
<span style="color: #228822;"><b>Zuker</b></span><br />
<br />
<br />
<b><i>Traduction Fran&ccedil;aise</i></b><br />
<span style="color: #ff5500;"><b>Vendethiel</b></span><br />
<span style="color: #0000bb;"><b>Yros</b></span><br />
<br />
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

$lang = array_merge($lang, array(
	'Home' => 'Accueil',
	'Forum' => 'Forum',
	'Category' => 'Catégorie',
	'Topic' => 'Sujet',
	'Topics' => 'Sujets',
	'Replies' => 'Réponses',
	'Views' => 'Vues',
	'Post' => 'Message',
	'Posts' => 'Messages',
	'Posted' => 'Posté',
	'Username' => 'Nom d\'utilisateur',
	'Password' => 'Mot de passe',
	'Email' => 'E-mail',
	'Poster' => 'Posteur',
	'Author' => 'Auteur',
	'Time' => 'Date',
	'Hours' => 'Heures',
	'Message' => 'Message',

	'1_DAY' => '1 Jour',
	'7_DAYS' => '7 Jours',
	'2_WEEKS' => '2 Semaines',
	'1_MONTH' => '1 Mois',
	'3_MONTHS' => '3 Mois',
	'6_MONTHS' => '6 Mois',
	'1_YEAR' => '1 An',

	'Go' => 'Aller',
	'Jump_to' => 'Aller &agrave;',
	'Submit' => 'Envoyer',
	'Reset' => 'Réinitialiser',
	'Cancel' => 'Annuler',
	'Preview' => 'Prévisualiser',
	'Confirm' => 'Confirmer',
	'Spellcheck' => 'Vérification orthographique',
	'Yes' => 'Oui',
	'No' => 'Non',
	'Enabled' => 'Activé',
	'Disabled' => 'Désactivé',
	'Error' => 'Erreur',

	'GO' => 'Aller',
	'JUMP_TO' => 'Aller &agrave;',
	'SUBMIT' => 'Envoyer',
	'RESET' => 'Réinitialiser',
	'CANCEL' => 'Annuler',
	'PREVIEW' => 'Prévisualiser',
	'CONFIRM' => 'Confirmer',
	'YES' => 'Oui',
	'NO' => 'Non',
	'ENABLED' => 'Activé',
	'DISABLED' => 'Désactivé',
	'ERROR' => 'Erreur',

	'Next' => 'Suivant',
	'Previous' => 'Précedent',
	'Goto_page' => 'Aller &agrave; la page',
	'Joined' => 'Inscrit le',
	'IP_Address' => 'Adresse IP',

	'Select_forum' => 'Sélectionnez un forum',
	'View_latest_post' => 'Voir le dernier message',
	'View_newest_post' => 'Voir le message le plus récent',
	'Page_of' => 'Page <b>%d</b> sur <b>%d</b>', // Remplacez avec: Page 1 sur 2 par exemple.

	'AIM' => 'Adresse AIM',
	'ICQ' => 'Numéro ICQ',
	'JABBER' => 'Jabber',
	'MSNM' => 'MSN Live',
	'SKYPE' => 'Skype',
	'YIM' => 'Yahoo Messenger',

	'Forum_Index' => 'Forum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Poster un nouveau sujet',
	'Reply_to_topic' => 'Répondre au sujet',
	'Reply_with_quote' => 'Répondre en citant',

	'Click_return_login' => 'Cliquez %sici%s pour réessayer.',
	'Click_return_index' => 'Cliquez %sici%s pour revenir &agrave; l\'index.',
	'Click_return_forum' => 'Cliquez %sici%s pour revenir au forum.',
	'Click_return_topic' => 'Cliquez %sici%s pour revenir au sujet.', // Le " %sici%s " est l&agrave; pour le lien, ne l'enlevez pas !
	'Click_return_viewtopic' => 'Cliquez %sici%s pour revenir au sujet.',
	'Click_return_modcp' => 'Cliquez %sici%s pour revenir au Panneau de Modération.',
	'Click_return_profile' => 'Cliquez %sici%s pour revenir au Profil de l\'Utilisateur.',
	'Click_return_preferences' => 'Cliquez %sici%s pour revenir aux préférences.',
	'Click_return_group' => 'Cliquez %sici%s pour revenir aux informations du groupe.',
	'Click_return_drafts' => 'Cliquez %sici%s pour revenir aux brouillons.',
	'Click_return_inbox' => 'Cliquez %sici%s pour revenir &agrave; votre Boite de Réception.',
	'Click_view_message' => 'Cliquez %sici%s pour voir votre message.',
	'Click_view_privmsg' => 'Cliquez %sici%s pour visiter votre Boite de Réception.',

	'Admin_panel' => 'Panel Administrateur',

	'Board_disabled' => 'Désolé, mais ce site est actuellement indisponible. Veuillez réessayer plus tard.',

// Variables globales de l'en-t&ecirc;te (Header)
	'Registered_users' => 'Utilisateurs enregistrés:',
	'Browsing_forum' => 'Utilisateurs parcourant ce forum:',
	'Online_users_zero_total' => 'Il n\'y a aucun utilisateur en ligne: ',
	'Online_users_total' => 'Il y a au total <b>%d</b> utilisateurs en ligne: ',
	'Online_user_total' => 'Il y a au total <b>%d</b> utilisateur en ligne: ',// Cas o&ugrave; %d = 1
	'AC_Online_users_zero_total' => 'Il n\'y a aucun utilisateur dans le chat: ',
	'AC_Online_users_total' => 'Il y a au total <b>%d</b> utilisateurs dans le chat: ',
	'AC_Online_user_total' => 'Il y a au total <b>1</b> utilisateur dans le chat: ',
	'Reg_users_zero_total' => 'aucun enregistré, ',
	'Reg_users_total' => '%d enregistrés, ',
	'Reg_user_total' => '%d enregistré, ',
	'Hidden_users_zero_total' => 'aucun invisible et ',
	'Hidden_user_total' => '%d invisible et ',
	'Hidden_users_total' => '%d invisibles et ',
	'Guest_users_zero_total' => 'aucun invité',
	'Guest_users_total' => '%d invités',
	'Guest_user_total' => '%d invité',
	'Record_online_users' => 'Le record du nombre d\'utilisateurs en ligne était de <b>%s</b>, le %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministrateur%s',
	'Mod_online_color' => '%sModérateur%s',

	'You_last_visit' => 'Votre dernière visite était le %s', // %s replaced by date/time
	'Current_time' => 'Nous sommes le %s', // %s replaced by time

	'Search_new' => 'Voir les messages depuis votre dernière visite',
	'Search_your_posts' => 'Voir vos messages',
	'Search_unanswered' => 'Voir les messsages sans réponse',

	'Register' => 'S\'enregistrer',
	'Profile' => 'Profil',
	'Edit_profile' => 'Éditer votre profil',
	'Search' => 'Recherche',
	'Memberlist' => 'Liste des Membres',
	'FAQ' => 'FAQ',//'<acronym title="Foire Aux Questions">FAQ</acronym>',
	'KB_title' => 'Base de connaissances',
	'BBCode_guide' => 'Guide du BBCode',
	'Usergroups' => 'Groupes',
	'Last_Post' => 'Dernier Message',
	'Moderator' => 'Modérateur',
	'Moderators' => 'Modérateurs',

// Partie concernant les Statistiques
	'Posted_articles_zero_total' => 'Les utilisateurs n\'ont postés <b>aucun</b> message pour l\'instant.', // Number of posts
	'Posted_articles_total' => 'Les utilisateurs ont postés un total de <b>%d</b> messages', // Number of posts
	'Posted_article_total' => 'Les utilisateurs ont postés un total de <b>%d</b> message', // Number of posts
	'Registered_users_zero_total' => 'Il n\'y a aucun utilisateur enregistré.', // # registered users
	'Registered_users_total' => 'Nous avons <b>%d</b> utilisateurs enregistrés.', // # registered users
	'Registered_user_total' => 'Nous avons <b>%d</b> utilisateur enregistré.', // # registered users
	'Newest_user' => 'L\'utilisateur le plus récent est %s<b>%s</b>%s', // a href, username, /a

	'No_new_posts_last_visit' => 'Aucun nouveau message depuis votre dernière visite',

	'No_new_posts_global_announcement' => 'Pas de nouveau message [Global]',
	'New_posts_global_announcement' => 'Nouveau message [Global]',
	'No_new_posts_announcement' => 'Pas de nouveau message [Annonce]',
	'New_posts_announcement' => 'Nouveau message [Annonce]',
	'No_new_posts_sticky' => 'Pas de nouveau message [Note]',
	'New_posts_sticky' => 'Nouveau message [Note]',
	'No_new_posts_locked' => 'Pas de nouveau message [Verrouillé]',
	'New_posts_locked' => 'Nouveau message [Verrouillé]',
	'No_new_posts' => 'Pas de nouveau message',
	'New_posts' => 'Nouveaux messages',
	'New_post' => 'Nouveau message',
	'No_new_posts_hot' => 'Pas de nouveau message [Populaire]',
	'New_posts_hot' => 'Nouveau message [Populaire]',

	'Forum_no_new_posts' => 'Aucun Nouveau Message<br />[Forum]',
	'Forum_new_posts' => 'Nouveaux Messages<br />[Forum]',
	'Cat_no_new_posts' => 'Aucun Nouveau Message<br />[Catégorie]',
	'Cat_new_posts' => 'Nouveaux Messages<br />[Catégorie]',
	'Forum_is_locked' => 'Forum Verrouillé',

// Partie concernant la Connexion (Login)
	'Enter_password' => 'Veuillez entrer votre nom d\'utilisateur et votre mot de passe pour vous connecter.',
	'Login' => 'Connexion',
	'Logout' => 'Déconnexion',
	'Forgotten_password' => 'J\'ai oublié mon mot de passe',
	'AUTOLOGIN' => 'Me connecter automatiquement &agrave; chaque visite',
	'Error_login' => 'Vous avez soit spécifié un nom d\'utilisateur incorrect ou inactif soit votre mot de passe est incorrect.',

// Partie concernant l'Index
	'No_Posts' => 'Aucun message',
	'No_forums' => 'Ce site n\'a pas de forum',

	'Private_Message' => 'Message privé',
	'Private_Messages' => 'Messages privés',
	'Who_is_Online' => 'Qui est en ligne ?',

	'Mark_all_forums' => 'Marquer tous les forums comme lu',
	'Forums_marked_read' => 'Tous les forums ont été marqués comme lus.',

// Partie concernant l'intérieur des Forums (Viewforum)
	'View_forum' => 'Voir le forum',

	'Reached_on_error' => 'Vous avez atteint cette page par erreur.',

	'Display_topics' => 'Montrer les sujets depuis le',
	'ALL_TOPICS' => 'Tous les sujets',

	'Topic_News_nb' => 'Nouvelles',
	'Topic_global_announcement_nb' => 'Annonce globale',
	'Topic_Announcement_nb' => 'Annonce',
	'Topic_Sticky_nb' => 'Post-it',
	'Topic_Moved_nb' => 'Déplacé',
	'Topic_Poll_nb' => 'Sondage',
	'Topic_Event_nb' => 'Évènement',
	'Topic_Announcement' => '<b>Annonce:</b>',
	'Topic_Sticky' => '<b>Post-it:</b>',
	'Topic_Moved' => '<b>Déplacé:</b>',
	'Topic_Poll' => '<b>Sondage:</b>',
	'Topic_Event' => '<b>évènement:</b>',
	'Topic_global_announcement' => '<b>Annonce globale:</b>',
	'Post_global_announcement' => 'Annonce globale',


	'Mark_all_topics' => 'Marquer tous les sujets comme lu',
	'Topics_marked_read' => 'Tous les sujets de ce forum ont été marqués comme lu',

/*
	'Rules_post_can' => 'Vous <b>pouvez</b> créer des nouveaux sujets dans ce forum',
	'Rules_post_cannot' => 'Vous <b>ne pouvez pas</b> créer de nouveaux sujets dans ce forum',
	'Rules_reply_can' => 'Vous <b>pouvez</b> répondre aux sujets dans ce forum',
	'Rules_reply_can_own' => 'Vous <b>pouvez</b> répondre &agrave; vos sujets dans ce forum',
	'Rules_reply_cannot' => 'Vous <b>ne pouvez pas</b> répondre aux sujets dans ce forum',
	'Rules_edit_can' => 'Vous <b>pouvez</b> éditer vos messages dans ce forum',
	'Rules_edit_cannot' => 'Vous <b>ne pouvez pas</b> éditer vos messages dans ce forum',
	'Rules_delete_can' => 'Vous <b>pouvez</b> supprimer vos messages dans ce forum',
	'Rules_delete_cannot' => 'Vous <b>ne pouvez pas</b> supprimer vos messages dans ce forum',
	'Rules_vote_can' => 'Vous <b>pouvez</b> voter dans les sondages dans ce forum',
	'Rules_vote_cannot' => 'Vous <b>ne pouvez pas</b> voter dans les sondages dans ce forum',
*/
	'Rules_post_can' => 'Vous <b>pouvez</b> créer des nouveaux sujets',
	'Rules_post_cannot' => 'Vous <b>ne pouvez pas</b> créer de nouveau sujet',
	'Rules_reply_can' => 'Vous <b>pouvez</b> répondre aux sujets',
	'Rules_reply_can_own' => 'Vous <b>pouvez</b> répondre &agrave; vos sujets',
	'Rules_reply_cannot' => 'Vous <b>ne pouvez pas</b> répondre aux sujets',
	'Rules_edit_can' => 'Vous <b>pouvez</b> éditer vos messages',
	'Rules_edit_cannot' => 'Vous <b>ne pouvez pas</b> éditer vos messages',
	'Rules_delete_can' => 'Vous <b>pouvez</b> supprimer vos messages',
	'Rules_delete_cannot' => 'Vous <b>ne pouvez pas</b> supprimer vos messages',
	'Rules_vote_can' => 'Vous <b>pouvez</b> voter dans les sondages',
	'Rules_vote_cannot' => 'Vous <b>ne pouvez pas</b> voter dans les sondages',
	'Rules_moderate' => 'Vous <b>pouvez</b> %smodérer ce forum%s', // %s replaced by a href links, do not remove!

    'No_topics_post_one' => 'Il n\'y a aucun sujet dans ce forum. <br />Cliquez sur le bouton <b>Nouveau Sujet</b> pour en commencer un.',
//	'No_topics_post_one' => 'Soit il n\'y a aucun sujet dans ce forum, soit il n\'y a aucune correspondance pour la lettre que vous avez sélectionn&eacute.<br />Cliquez sur le bouton <b>Nouveau sujet</b> pour créer un nouveau sujet ou sélectionnez une autre lettre.',

// Partie concernant les Sujets (Viewtopic)
	'View_topic' => 'Voir le sujet',

	'Guest' => 'Invité',
	'Post_subject' => 'Poster un sujet',
	'View_next_topic' => 'Voir le sujet suivant',
	'View_previous_topic' => 'Voir le sujet précédant',
	'Submit_vote' => 'Voter',
	'View_results' => 'Voir les résultats',

	'No_newer_topics' => 'Il n\'y a aucun sujet plus récent dans ce forum.',
	'No_older_topics' => 'Il n\'y a aucun sujet plus ancien dans ce forum.',
	'No_posts_topic' => 'Aucun message n\'existe dans ce sujet',

	'Display_posts' => 'Montrer les messages depuis le ',
	'ALL_POSTS' => 'Tous les messages',
	'Newest_First' => 'Récents d\'abord',
	'Oldest_First' => 'Anciens d\'abord',

	'Back_to_top' => 'Revenir en haut',
	'Back_to_bottom' => 'Pied de page',

	'Read_profile' => 'Voir le profil de l\'utilisateur',
	'Send_email' => 'Envoyer un mail &agrave; l\'utilisateur',
	'Visit_website' => 'Visiter le site du posteur',
	'ICQ_status' => 'Statut ICQ',
	'Edit_delete_post' => 'Editer/Supprimer ce message',
	'View_IP' => 'Voir l\'adresse IP du posteur',
	'Delete_post' => 'Supprimer ce message',

	'wrote' => 'a écrit', // suit le nom de l'utilisateur cité et est suivit par le texte cité.
	'Quote' => 'Citation', // se place avant le bbcode de citation.
	'Code' => 'Code', // se place avant le bbcode de code.

	'Edited_time_total' => 'Dernière édition par %s le %s. édit&eacute %d fois au total', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => 'Dernière édition par %s le %s. édit&eacute %d fois au total', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => 'Verrouiller ce sujet',
	'Unlock_topic' => 'Déverrouiller ce sujet',
	'Move_topic' => 'Déplacer ce sujet',
	'Delete_topic' => 'Supprimer ce sujet',
	'Split_topic' => 'Découper ce sujet',

	'Stop_watching_topic' => 'Arr&ecirc;ter de surveiller ce sujet',
	'Start_watching_topic' => 'Surveiller ce sujet',
	'No_longer_watching' => 'Vous ne surveillez plus ce sujet',
	'You_are_watching' => 'Vous surveillez maintenant ce sujet',

	'Total_votes' => 'Total des votes',

// Partie concernant la zone de poste/réponse (Pas les messages privés !)
	'Message_body' => 'Corps du message',
	'Topic_review' => 'Relire le sujet',

	'No_post_mode' => 'Le mode d\'écriture n\'est pas spécifié.<br />Faites " Page Précédente " afin de revenir &agrave; votre zone de texte pour tenter de réenvoyer votre message et, si cela ne fonctionne pas, copiez-le et recommencez l\'opération du début.', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)

	'Post_a_new_topic' => 'Poster un nouveau sujet',
	'Post_a_reply' => 'Poster une réponse',
	'Post_topic_as' => 'Poster le sujet en mode:',
	'Edit_Post' => 'Editer le message',
	'Options' => 'Options',

	'PM_Read' => 'Message privé lu',
	'PM_Unread' => 'Message privé non lu',
	'PM_Replied' => 'Message privé auquel vous avez répondu',

	'Post_Announcement' => 'Annonce',
	'New_post_Announcement' => 'Nouvelle annonce',
	'Post_Sticky' => 'Post-it',
	'New_post_Sticky' => 'Nouveau Post-it',
	'Post_Normal' => 'Normal',

	'Confirm_delete' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce sujet ?',
	'Confirm_delete_poll' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce sondage ?',

	'Flood_Error' => 'Vous ne pouvez pas poster un nouveau message si rapidement après le dernier, veuillez essayer &agrave; nouveau dans peu de temps.',
	'Empty_subject' => 'Vous devez spécifier un intitulé avant de poster un nouveau sujet.',
	'Empty_message' => 'Vous devez entrer un message pour poster.',
	'Forum_locked' => 'Ce forum est verrouillé: vous ne pouvez ni poster, ni répondre, ni éditer vos messages.',
	'Topic_locked' => 'Ce sujet est verrouillé: vous ne pouvez ni répondre, ni éditer vos messages.',
	'No_post_id' => 'Vous devez sélectionner un message &agrave; éditer',
	'No_topic_id' => 'Vous devez sélectionner un sujet pour poster une réponse',
	'No_valid_mode' => 'Vous pouvez seulement poster, répondre, éditer ou citer des messages. Veuillez revenir en arrière et réessayer.',
	'No_such_post' => 'Le message que vous cherchez n\'existe pas. Veuillez revenir en arrière et réessayer.',
	'Edit_own_posts' => 'Désolé, mais vous ne pouvez éditer que vos propres messages.',
	'Delete_own_posts' => 'Désolé, mais vous ne pouvez supprimer que vos propres messages.',
	'Cannot_delete_replied' => 'Désolé, mais vous ne pouvez supprimer les messages auquel on a déj&agrave; répondu.',
	'Cannot_delete_poll' => 'Désolé, mais vous ne pouvez pas supprimer un sondage actif.',
	'Empty_poll_title' => 'Vous devez entrer un titre pour votre sondage.',
	'To_few_poll_options' => 'Vous devez entrer au moins deux options pour le sondage.',
	'To_many_poll_options' => 'Vous ne pouvez pas entrer autant d\'options de sondage.',
	'Post_has_no_poll' => 'Ce sujet n\'a pas de sondage.',
	'Already_voted' => 'Vous avez déj&agrave; voté dans ce sondage.',
	'No_vote_option' => 'Vous devez choisir une option pour voter.',

	'Add_poll' => 'Ajouter un sondage',
	'Add_poll_explain' => 'Si vous ne voulez pas ajouter de sondage sur votre sujet, laissez ces champs vides.',
	'Poll_question' => 'Question du sondage',
	'Poll_option' => 'Option du sondage',
	'Add_option' => 'Ajouter une option',
	'Update' => 'Mettre &agrave; jour',
	'Delete' => 'Supprimer',
	'Poll_for' => 'Laisser le sondage ouvert',
	'Days' => 'Jours', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Entrez 0 ou laissez ce champ blanc pour un sondage sans date limite ]',
	'Delete_poll' => 'Supprimer le sondage',

	'POST_ENABLE_BBCODE' => 'Activer les BBCodes dans ce message',
	'POST_ENABLE_SMILEYS' => 'Activer les Smileys dans ce message',
	'POST_ENABLE_HTML' => 'Activer le HTML dans ce message',
	'POST_ENABLE_ACRO_AUTO' => 'Activer les acronymes et les liens automatiques dans ce message',
	'Disable_HTML_post' => 'Désactiver le HTML dans ce message',
	'Disable_ACRO_AUTO_post' => 'Désactiver les acronymes et les liens automatiques dans ce message',
	'Disable_BBCode_post' => 'Désactiver les BBCodes dans ce message',
	'Disable_Smilies_post' => 'Désactiver les Smileys dans ce message',

	'HTML_is_ON' => 'Le <b>HTML</b> est <b><u>activé</u></b>',
	'HTML_is_OFF' => 'Le <b>HTML</b> est <b><u>désctivé</u></b>',
	'BBCode_is_ON' => 'Les %s<b>BBCode</b>%s sont <b><u>activés</u></b>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => 'Les %s<b>BBCode</b>%s sont <b><u>désctivés</u></b>',
	'Smilies_are_ON' => 'Les <b>Smileys</b> sont <b><u>activés</u></b>',
	'Smilies_are_OFF' => 'Les <b>Smileys</b> sont <b><u>désactivés</u></b>',

	'Attach_signature' => 'Attacher sa signature (les signatures peuvent &ecirc;tre modifiées dans le profil)',
	'Notify' => 'M\'avertir lorsqu\'une nouvelle réponse est postée',
	'Delete_post' => 'Supprimer ce message',

	'Stored' => 'Votre message a été correctement entré.',
	'Deleted' => 'Votre message a été correctement supprimé.',
	'Poll_delete' => 'Votre sondage a été correctement supprimé.',
	'Vote_cast' => 'Votre vote a bien été pris en compte.',

	'Topic_reply_notification' => 'Notification d\'une réponse au sujet',

	'Emoticons' => 'Smileys',
	'More_emoticons' => 'Voir tous les smileys',

// Partie concernant la Messagerie Privée
	'Private_Messaging' => 'Messages privés',

	'Login_check_pm' => 'Connectez-vous pour voir vos messages privés',
	'New_pms' => 'Vous avez %d nouveaux messages privés', // You have 2 new messages
	'New_pm' => 'Vous avez %d nouveau message privé', // You have 1 new message
	'No_new_pm' => 'Vous n\'avez aucun nouveau message privé',
	'Unread_pms' => 'Vous avez %d messages privés non-lus',
	'Unread_pm' => 'Vous avez %d message privé non-lu',
	'No_unread_pm' => 'Vous n\'avez aucun message privé non-lu',
	'You_new_pm' => 'Un nouveau message privé vous attend dans votre bo&icirc;te de réception',
	'You_new_pms' => 'De nouveaux messages privés vous attendent dans votre bo&icirc;te de réption',
	'You_no_new_pm' => 'Aucun message privé ne vous attend',

	'Unread_message' => 'Message non lu',
	'Read_message' => 'Message lu',

	'Read_pm' => 'Lire un message',
	'Post_new_pm' => 'Poster un message',
	'Post_reply_pm' => 'Répondre &agrave; au message',
	'Post_quote_pm' => 'Citer le message',
	'Edit_pm' => 'Éditer le message',

	'Inbox' => 'Bo&icirc;te de Réception',
	'Outbox' => 'Messages envoyés',
	'Savebox' => 'Bo&icirc;te de Sauvegarde',
	'Sentbox' => 'Bo&icirc;te d\'envoi',
	'Flag' => 'Drapeau',
	'Subject' => 'Titre du Sujet:',
	'From' => 'De',
	'To' => '&Agrave;',
	'Date' => 'Date',
	'Mark' => 'Marquer',
	'Sent' => 'Envoyé',
	'Saved' => 'Sauvegardé',
	'Delete_marked' => 'Supprimer la sélection',
	'Delete_all' => 'Tout supprimer',
	'Save_marked' => 'Sauvegarder la sélection',
	'Download_marked' => 'Télécharger la sélection',
	'Mailbox' => 'Bo&icirc;te Mail',
	'Save_message' => 'Sauvegarder le message',
	'Delete_message' => 'Supprimer le message',
	'Next_privmsg' => 'Message privé suivant',
	'Previous_privmsg' => 'Message privé précedant',
	'No_newer_pm' => 'Il n\'y a pas de message privé plus récent.',
	'No_older_pm' => 'Il n\'y a pas de message priv&eacute, plus ancien.',
	'Display_messages' => 'Montrer les messages depuis le ', // Followed by number of days/weeks/months
	'All_Messages' => 'Tous les messages',

	'No_messages_folder' => 'Vous n\'avez aucun message dans ce dossier',

	'PM_disabled' => 'La messagerie privée a été désactivée sur ce forum.',
	'Cannot_send_privmsg' => 'Désolé, mais l\'administration vous a interdit d\'envoyer des messages privés.<br />Pour toute réclamation, contactez un administrateur.',
	'No_to_user' => 'Vous devez spécifier un nom d\'utilisateur &agrave; qui envoyer ce message.',

	'Disable_HTML_pm' => 'Désactiver le HTML dans ce message privé.',
	'Disable_ACRO_AUTO_pm' => 'Désactiver les acronymes et les liens automatiques dans ce message privé.',
	'Disable_BBCode_pm' => 'Désactiver les BBCodes dans ce message privé.',
	'Disable_Smilies_pm' => 'Désactiver les Smileys dans ce message privé.',

	'Message_sent' => 'Votre message a bien été envoyé.',

	'Send_a_new_message' => 'Envoyer un nouveau message privé',
	'Send_a_reply' => 'Réplondre &agrave; un message privé',
	'Edit_message' => 'Éditer un message privé',

	'Notification_subject' => 'Un nouveau message privé est arrivé !',

	'FIND_USERNAME' => 'Trouver un nom d\'utilisateur',
	'Find' => 'Trouver',
	'No_match' => 'Aucun enregistrement trouvé.',

	'No_post_id' => 'L\'identifiant du message n\'est pas spécifié',
	'No_such_folder' => 'Ce dossier n\'existe pas',
	'No_folder' => 'Le dossier n\'a pas été spécifiée',

	'Mark_all' => 'Tout cocher',
	'Unmark_all' => 'Tout décocher',

	'Confirm_delete_pm' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce message ?',
	'Confirm_delete_pms' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ces messages ?',

	'Inbox_size' => 'Bo&icirc;te de Réception [%d%% pleine]', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Bo&icirc;te d\'envoi [%d%% pleine]',
	'Savebox_size' => 'Bo&icirc;te de Sauvegarde [%d%% pleine]',

// Partie concernant les Profils et l'Inscription
	'Viewing_user_profile' => 'Vue du profil :: %s', // %s is username
	'About_user' => 'Tout &agrave; propos de %s', // %s is username
// Partie concernant l'administration rapide du Profil
	'Quick_admin_options' => 'Administration rapide de l\'utilisateur',
	'Admin_edit_profile' => 'Éditer le profil',
	'Admin_edit_permissions' => 'Éditer les permissions',
	'User_active' => 'Le membre <b>est</b> actif',
	'User_not_active' => 'Le membre <b>n\'est pas</b> actif',
	'Username_banned' => 'Le pseudonyme <b>est</b> banni',
	'Username_not_banned' => 'Le pseudonyme <b>n\'est pas</b> banni',
	'USER_BAN' => 'Bannir',
	'USER_UNBAN' => 'Débannir',
	'User_email_banned' => 'L\'adresse mail de l\'utilisateur [ %s ] <b>est</b> bannie',
	'User_email_not_banned' => 'L\'adresse mail de l\'utilisateur <b>n\'est pas</b> bannie',
// Fin de la partie concernant l'administration rapide
	'Preferences' => 'Préférences',
	'Items_required' => 'Les articles marqués avec une astérique <b>(*)</b> sont nécessaires.',
	'Registration_info' => 'Données de l\'inscription',
	'Profile_info' => 'Profil',
	'Profile_info_warn' => 'Ces informations seront visibles par tous.',
	'Avatar_panel' => 'Avatar',
	'Avatar_gallery' => 'Galerie d\'avatar',
	'NO_AVATAR_GALLERY' => 'Pas de galerie',

	'Website' => 'Site web',
	'Location' => 'Localisation',
	'Contact' => 'Contact',
	'Email_address' => 'Adresse Mail',
	'Email' => 'Mail',
	'Send_private_message' => 'Envoyer un Message Privé',
	'Hidden_email' => '[ Caché ]',
	'Search_user_posts' => 'Rechercher les messages postés par cet utilisateur',
	'Interests' => 'Intér&ecirc;ts',
	'Occupation' => 'Occupation',
	'Poster_rank' => 'Rang du posteur',

	'Total_posts' => 'Total des Messages',
	'User_post_pct_stats' => '%.2f%% au total', // 1.25% of total
	'User_post_day_stats' => '%.2f messages par jour', // 1.5 posts per day
	'Search_user_posts' => 'Trouver tous les messages de %s', // Find all posts by username
	'Search_user_topics_started' => 'Trouver tous les sujets commencés par %s', // Find all topics started by username

	'Wrong_Profile' => 'Vous ne pouvez modifier que votre propre profil.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Activité',
	'Invision_Communicate' => 'Me Contacter',
	'Invision_Info' => 'Informations',
	'Invision_Member_Group' => 'Groupe(s) du membre',
	'Invision_Member_Title' => 'Rang du membre',
	'Invision_Most_Active' => 'Plus actif dans',
	'Invision_Most_Active_Posts' => '%s messages dans ce forum',
	'Invision_Details' => 'Statistiques des Messages',
	'Invision_PPD_Stats' => 'Messages par jour',
	'Invision_Signature' => 'Signature',
	'Invision_Website' => 'Site Personnel',
	'Invision_Total_Posts' => 'Total des messages',
	'Invision_User_post_pct_stats' => '(%.2f%% de vos messages)',
	'Invision_User_post_day_stats' => '%.2f messages par jour',
	'Invision_Search_user_posts' => 'Trouver tous les messages de ce membre',
	'Invision_Posting_details' => 'Détails du message',
// Invision View Profile - END

	'Only_one_avatar' => 'Un seul type d\'avatar peut &ecirc;tre spécifié',
	'File_no_data' => 'Le fichier &agrave; cette adresse ne contient pas de donnée',
	'No_connection_URL' => 'La connection ne peut &ecirc;tre faite avec l\'adresse donnée',
	'Incomplete_URL' => 'L\'adresse que vous avez entré est incomplète',
	'Wrong_remote_avatar_format' => 'L\'adresse de votre avatar n\'est pas valide',
	'No_send_account_inactive' => 'Désolé, mais votre mot de passe ne peut vous &ecirc;tre rendu car votre compte est actuellement inactif. Veuillez contacter l\'administrateur du forum pour plus d\'informations.',

	'Always_smile' => 'Toujours autoriser les Smileys',
	'Always_html' => 'Toujours autoriser le HTML',
	'Always_bbcode' => 'Toujours autoriser les BBCodes',
	'Always_add_sig' => 'Toujours attacher ma signature',
	'Always_notify' => 'Toujours m\'avertir des réponses',
	'Always_notify_explain' => 'M\'envoyer un mail lorsque quelqu\'un répond dans un sujet o&ugrave; vous avez posté. Cette option peut &ecirc;tre modifiée &agrave; chaque message..',

	'Board_style' => 'Style',
	'Board_lang' => 'Langue',
	'No_themes' => 'Aucun Thème dans la Base de Donnée',
	'Timezone' => 'Fuseau horaire',
	'Date_format' => 'Format de la date',
	'Date_format_explain' => 'La syntaxe est identique &agrave; celle utilisée par la fonction PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>.',
	'Signature' => 'Signature',
	'Signature_explain' => 'La signature est un bloc de texte qui peut &ecirc;tre ajouté &agrave; vos messages. Il y a une limite de %d caractès',
	'Public_view_email' => 'Toujours montrer mon adresse mail',

	'Current_password' => 'Mot de passe actuel',
	'New_password' => 'Nouveau mot de passe',
	'Confirm_password' => 'Confirmation du mot de passe',
	'Confirm_password_explain' => 'Vous devez confirmer votre mot de passe actuel si vous voulez le changer ou changer votre adresse mail',
	'password_if_changed' => 'Vous devez uniquement donner un nouveau mot de passe si vous voulez le changer',
	'password_confirm_if_changed' => 'Vous devez uniquement confirmer votre mot de passe si vous voulez le changer',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Montre une petite image sous votre nom quand vous postez un message. Une seule image peut &ecirc;tre affichée en m&ecirc;me temps. Les dimensions maximum sont de %d*%d pixels (largeur*hauteur). Le poids limite maximum d\'un avatar est de %d KB, et doit respecter les dimensions maximum. Les avatars hébergés &agrave; distance seront automatiquement redimensionnées pour s\'adapter aux dimensions du forum.',
	'Upload_Avatar_file' => 'Envoyer un Avatar depuis votre ordinateur',
	'Upload_Avatar_URL' => 'Envoyer un Avatar depuis une adresse',
	'Upload_Avatar_URL_explain' => 'Entrez l\'adresse de l\'image, elle sera enregistrée sur ce forum.',
	'Pick_local_Avatar' => 'Sélectionner un Avatar depuis la galerie',
	'Link_remote_Avatar' => 'Lier &agrave; un Avatar externe',
	'Link_remote_Avatar_explain' => 'Entrez l\'adresse de l\'Avatar &agrave; que vous souhaitez lier.',
	'Avatar_URL' => 'Adresse de l\'Avatar',
	'Select_from_gallery' => 'Sélectionner l\'Avatar dans la Galerie',
	'View_avatar_gallery' => 'Voir la galerie',

	'Select_avatar' => 'Sélectionnez un Avatar',
	'Return_profile' => 'Retourner au profil',
	'Select_category' => 'Sélectionner une catégorie',

	'Delete_Image' => 'Supprimer l\'image',
	'Current_Image' => 'Image actuelle',

	'Notify_on_privmsg' => 'M\'avertir lorsque je re&ccedil;ois un Message Privé',
	'Popup_on_privmsg' => 'Ouvrir une fen&ecirc;tre pop-up lorsque je re&ccedil;ois un Message Privé',
	'Popup_on_privmsg_explain' => 'Certains thèmes peuvent ouvrir une fen&ecirc;tre lorsque vous recevez un message privé.',
	'Hide_user' => 'Cacher votre statut "en ligne"',

	'Profile_updated' => 'Votre profil a été mis &agrave; jour',
	'Profile_updated_inactive' => 'Votre profil a été mis &agrave; jour. Cependant, vous avez changé des détails vitaux et votre compte est maintenant inactif. Vérifiez vos mails pour le réactiver ou attendez qu\'un administrateur le réactive.',

	'Password_mismatch' => 'Les mots de passe entrés ne correspondent pas.',
	'Current_password_mismatch' => 'Le mot de passe actuel ne correspond avec celui donné.',
	'Password_long' => 'Votre mot de passe est trop grand: il doit faire moins de trente-deux caractères.',
	'Username_taken' => 'Désolé, mais ce nom d\'utilisateur est déj&agrave; pris.',
	'Username_invalid' => 'Désolé, mais ce nom d\'utilisateur contient des caractères interdits, comme \'.',
	'Username_disallowed' => 'Désol&eacute, mais ce nom d\'utilisateur a été interdit.',
	'Email_taken' => 'Désolé, mais cette adresse mail est déj&agrave; utilisée.',
	'Email_banned' => 'Désolé, mais cette adresse mail a été bannie.',
	'Email_invalid' => 'Désolé, mais cette adresse mail est invalide.',
	'Signature_too_long' => 'Votre signature est trop longue.',
	'Fields_empty' => 'Vous devez remplir <b>tous</b> les champs nécessaires.',
	'Avatar_filetype' => 'L\'extension de l\'avatar doit &ecirc;tre .jpg, .gif ou .png',
	'Avatar_filesize' => 'La taille de l\'avatar doit &ecirc;tre inférieure &agrave; %d KB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'La taille de l\'avatar doit &ecirc;tre inférieure ou égale &agrave; %d pixels de largeur et %d pixels de hauteur',

	'Welcome_subject' => 'Bienvenue sur le forum de %s', // Welcome to my.com forums
	'New_account_subject' => 'Nouveau compte',
	'Account_activated_subject' => 'Compte Activé',

	'Account_added' => 'Merci de vous &ecirc;tre enregistré. Votre compte a été crée. Vous pouvez dès maintenant vous connecter avec votre nom d\'utilisateur et votre mot de passe',
	'Account_inactive' => 'Votre compte a bien été crée, mais ce forum demande une activation. Une clef d\'activation a été envoyé &agrave; l\'adresse mail donnée. Veuillez vérifier vos mails pour plus d\'informations',
	'Account_inactive_admin' => 'Votre compte a bien été crée, mais ce forum demande une activation par l\'administration. Un mail leur a été envoyé et vous serez informé lorsque votre compte sera activé',
	'Account_active' => 'Votre compte a bien été activé. Merci de votre inscription',
	'Account_active_admin' => 'Le compte a été activé',
	'Reactivate' => 'Réactivez votre compte !',
	'Already_activated' => 'Ce compte est d&eaucte;j&agrave; actif',
	'COPPA' => 'Votre compte a ét&eacute crée mais il doit &ecirc;tre approuvé. Vérifier vos mails pour plus d\'informations.',

	'Registration' => 'Règlement de l\'Inscription',
	'Reg_agreement' => 'Les administrateurs et modérateurs de ce forum s\'efforceront de supprimer ou d\'éditer tous les messages &agrave; caractère répréhensible aussi rapidement que possible. Toutefois, il leur est impossible de passer en revue tous les messages. Vous admettez donc que tous les messages postés sur ces forums expriment la vue et l\'opinion de leurs auteurs respectifs, et non pas des administrateurs, ou modérateurs, ou webmestres (excepté les messages postés par eux-m&ecirc;me) et par conséquent ils ne peuvent &ecirc;tre tenus pour responsables.<br /><br /><font color="red"><b>Contenu de vos messages</b></font><br />Vous consentez &agrave; ne pas poster de messages injurieux, obscènes, vulgaires, diffamatoires, mena&ccedil;ants, sexuels ou tout autre message qui violerait les lois applicables. Le faire peut vous conduire &agrave; &ecirc;tre banni immédiatement et de fa&ccedil;on permanente (et votre fournisseur d\'accès &agrave; internet en sera informé). L\'adresse IP de chaque message est enregistrée afin d\'aider &agrave; faire respecter ces conditions. Vous &ecirc;tes d\'accord sur le fait que le webmestre, l\'administrateur et les modérateurs de ce forum ont le droit de supprimer, éditer, déplacer ou verrouiller n\'importe quel sujet de discussion &agrave; tout moment. En tant qu\'utilisateur, vous &ecirc;tes d\'accord sur le fait que toutes les informations que vous donnerez ci-après seront stockées dans une base de données. Cependant, ces informations ne seront divulguées &agrave; aucune tierce personne ou société sans votre accord. Le webmestre, l\'administrateur, et les modérateurs ne peuvent pas &ecirc;tre tenus pour responsables si une tentative de piratage informatique conduit &agrave; l\'accès de ces données.<br /><br /><font color="red"><b>Informations collectées et Cookies</b></font><br />Ce forum utilise les cookies pour stocker des informations sur votre ordinateur. Ces cookies ne contiendront aucune information que vous aurez entrée ci-après, ils servent uniquement &agrave; améliorer le confort d\'utilisation. L\'adresse mail est uniquement utilisée afin de confirmer les détails de votre inscription ainsi que votre mot de passe (et aussi pour vous envoyer un nouveau mot de passe dans le cas o&ugrave; vous l\'oublieriez).<br /><br /><font color="red"><b>Vous acceptez...</b></font><br />En vous inscrivant, vous vous portez garant du fait d\'&ecirc;tre en accord avec le règlement ci-dessus.',

	'Agreement' => 'Je l\'accepte',
	'Agree_under_13' => 'J\'accepte les règles et j\'ai <b>moins</b> de 13 ans',
	'Agree_over_13' => 'Continuer',
	'Agree_not' => 'Arr&ecirc;ter',
	'Agree_checkbox' => 'Je suis d\'accord avec ces règles.',
	'Agree_checkbox_Error' => 'Vous devez cocher la case d\'acceptation en bas de la page pour vous inscrire !',

	'Wrong_activation' => 'La clef d\'activation ne correspond pas avec celle sauvegardée dans la base de donnée.',
	'Send_password' => 'Envoyez-moi un nouveau mot de passe',
	'Password_updated' => 'Un nouveau mot de passe a été cré; veuillez vérifier vos mails pour plus de détails.',
	'No_email_match' => 'L\'adresse mail que vous avez entrée ne correspond pas avec celle stockée dans la base de donnée pour cet utilisateur.',
	'New_password_activation' => 'Activation du nouveau mot de passe',
	'Password_activated' => 'Votre compte a été réactivé. Pour vous connecter, veuillez utiliser le mot de passe donné dans le mail que vous avez re&ccedil;u.',

	'Send_email_msg' => 'Envoyer un mail',
	'No_user_specified' => 'Aucun utilisateur spécifié',
	'User_prevent_email' => 'Cet utilisateur ne veut pas recevoir de mail. Essayez de lui envoyer un message privé.',
	'User_not_exist' => 'Cet utilisateur n\'existe pas.',
	'CC_email' => 'M\'envoyer une copie du message',
	'Email_message_desc' => 'Ce message sera envoyé en texte simple, sans HTML ni BBCode. L\'adresse de retour pour ce message sera votre adresse mail.',
	'Flood_email_limit' => 'Impossible d\'envoyer un mail actuellement. Veuillez réessayer plus tard.',
	'Recipient' => 'Récepteur',
	'Email_sent' => 'L\'mail a été envoyé.',
	'Send_Email' => 'Envoyer un mail',
	'Empty_sender_email' => 'Vous devez spécifier une adresse d\'expéditeur.',
	'Empty_subject_email' => 'Vous devez spécifier un sujet.',
	'Empty_message_email' => 'Vous devez entrer un message !',

// Visual confirmation system strings
	'CONFIRM_CODE_WRONG' => 'Le code de confirmation que vous avez entré est incorrect',
	'TOO_MANY_ATTEMPTS' => 'Vous avez dépassé le nombre d\'essais pour cette session. Merci de réessayer plus tard.',
	'CONFIRM_CODE_IMPAIRED' => 'Si vous &ecirc;tes visuellement déficient ou si vous ne pouvez pas lire correctement le code, essayez de %scontacter l\'administrateur%s.',
	'CONFIRM_CODE' => 'Code de confirmation',
	'CONFIRM_CODE_EXPLAIN' => 'Entrez le code exactement comme vous le voyez. Le code est sensible &agrave; la casse, et il n\'y a pas de Zéro.',

// Memberlist
	'Select_sort_method' => 'Sélectionnez une méthode de classement',
	'Sort' => 'Classement',
	'SORT_TOP_TEN' => 'Dix meilleurs posteurs',
	'SORT_JOINED' => 'Date d\'inscription',
	'SORT_USERNAME' => 'Nom d\'utilisateur',
	'SORT_LOCATION' => 'Localisation',
	'SORT_POSTS' => 'Total des Messages',
	'SORT_EMAIL' => 'Mail',
	'SORT_WEBSITE' => 'Site Web',
	'Sort_Ascending' => 'Croissant',
	'Sort_Descending' => 'Décroissant',
	'Order' => 'Ordre',

// Group control panel
	'Group_Control_Panel' => 'Panneau de contrôle des Groupes',
	'Group_member_details' => 'Détails d\'adhésion au groupe',
	'Group_member_join' => 'Rejoindre un groupe',

	'Group_Information' => 'Informations',
	'Group_name' => 'Nom du groupe',
	'Group_description' => 'Description du groupe',
	'Group_membership' => 'Votre statut',
	'Group_Members' => 'Membres du groupe',
	'Group_Moderator' => 'Modérateur du groupe',
	'Pending_members' => 'Membres en attente',

	'Group_type' => 'Type de groupe',
	'Group_open' => 'Groupe Ouvert',
	'Group_closed' => 'Groupe Fermé',
	'Group_hidden' => 'Groupe Invisible',

	'Current_memberships' => 'Membre du groupe',
	'Non_member_groups' => 'Non-membre du groupe',
	'Memberships_pending' => 'Adhésion en attente',

	'No_groups_exist' => 'Aucun groupe n\'existe',
	'Group_not_exist' => 'Ce groupe n\'existe pas',

	'Join_group' => 'Rejoindre ce groupe',
	'No_group_members' => 'Ce groupe n\'a pas de membre',
	'Group_hidden_members' => 'Ce groupe est invisible, vous ne pouvez pas voir ses membres',
	'No_pending_group_members' => 'Ce groupe n\'a pas de membre en attente',
	'Group_joined' => 'Vous vous &ecirc;tes correctement inscrit &agrave; ce groupe.<br />Vous serez averti lorsque votre inscription sera approuvée par le modérateur du groupe.',
	'Group_request' => 'Une requ&ecirc;te pour rejoindre votre groupe a été faite.',
	'Group_approved' => 'Votre requ&ecirc;te a été approuvée.',
	'Group_added' => 'Vous avez été admis dans ce groupe.',
	'Already_member_group' => 'Vous &ecirc;tes déj&agrave; membre de ce groupe',
	'User_is_member_group' => 'L\'utilisateur est déj&agrave; membre de ce groupe',
	'Group_type_updated' => 'Le type du groupe a été correctement mis &agrave; jour.',
	'Could_not_add_user' => 'L\'utilisateur sélectionné n\'existe pas.',
	'Could_not_anon_user' => 'Les invités ne peuvent rejoindre de groupe.',
	'Confirm_unsub' => '&Ecirc;tes-vous s&ucirc;r de vouloir quitter de ce groupe ?',
	'Confirm_unsub_pending' => 'Votre inscription n\'est pas encore approuvée, &ecirc;tes-vous s&ucirc;r de vouloir vous désinscrire de ce groupe ?',
	'Unsub_success' => 'Vous avez été désinscrit de ce groupe.',
	'Approve_selected' => 'Approuver la sélection',
	'Deny_selected' => 'Refuser la sélection',
	'Not_logged_in' => 'Vous devez &ecirc;tes connecté pour rejoindre un groupe.',
	'Remove_selected' => 'Retirer la sélection',
	'Add_member' => 'Ajouter un membre',
	'Not_group_moderator' => 'Vous n\'&ecirc;tes pas modérateur du groupe, vous ne pouvez pas effectuer cette action.',
	'Login_to_join' => 'Connectez-vous pour rejoindre ou gérer les adhésions au groupe',
	'This_open_group' => 'Ce groupe est ouvert; cliquez pour faire une demande d\'adhésion',
	'This_closed_group' => 'Ce groupe est fermé: %s',
	'This_hidden_group' => 'Ce groupe est invisible: %s',
	'Member_this_group' => 'Vous &ecirc;tes membre de ce groupe',
	'Pending_this_group' => 'Votre adhésion &agrave; ce groupe est en attente',
	'Are_group_moderator' => 'Vous &ecirc;tes le modérateur du groupe',
	'None' => 'Aucun',
	'Subscribe' => 'S\'inscrire',
	'Unsubscribe' => 'Se désinscrire',
	'View_Information' => 'Voir les informations',

// Search
	'Search_query' => 'Rechercher',
	'Search_options' => 'Options de la recherche',

	'Search_keywords' => 'Recherche par mots-clefs',
	'Search_keywords_explain' => 'Vous pouvez utiliser <u>AND</u> pour déterminer les mots qui <i>doivent</i> &ecirc;tre visibles dans les résultats, <u>OR</u> pour déterminer les mots qui <i>peuvent</i> &ecirc;tre visibles dans les résultats et <u>NOT</u> pour déterminer les mots qui <i>ne doivent pas</i> &ecirc;tre visibles dans les résultats. Utilisez * comme un joker pour des recherches partielles.',
	'Search_author' => 'Rechercher par Auteur',
	'Search_author_explain' => 'Utilisez * comme un joker pour des recherches partielles.',
	'Search_author_topic_starter' => 'Rechercher uniquement les sujets commencés par cet auteur',

	'Search_for_any' => 'Rechercher n\'importe lequel de ces termes',
	'Search_for_all' => 'Rechercher tous les termes',
	'Search_title_msg' => 'Rechercher dans les titres et dans les messages',
	'Search_title_only' => 'Rechercher uniquement dans les titres',
	'Search_msg_only' => 'Rechercher uniquement dans les messages',

	'Return_first' => 'Retourner les ', // suivit par xxx caractères dans le champs de sélection
	'characters_posts' => 'premiers caractères des messages.',

	'Search_previous' => 'Rechercher les messages ayant ', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Classer par ',
	'Sort_Time' => 'Date d\'envoi',
	'Sort_Post_Subject' => 'Sujet du message',
	'Sort_Topic_Title' => 'Titre du sujet',
	'Sort_Author' => 'Auteur',
	'Sort_Forum' => 'Forum',

	'Display_results' => 'Afficher sous forme de ',
	'All_available' => 'Tous disponibles',
	'No_searchable_forums' => 'Vous n\'avez pas la permission de chercher dans un forum de ce site.',

	'No_search_match' => 'Aucun messages ne correspond &agrave; vos critères de recherche.',
	'Found_search_match' => '%d résultat trouvé', // eg. Search found 1 match
	'Found_search_matches' => '%d résultats trouvés', // eg. Search found 24 matches

	'Close_window' => 'Fermer la Fen&ecirc;tre',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Désol&eacute, mais seuls les %s peuvent poster des annonces dans ce forum.',
	'Sorry_auth_sticky' => 'Désol&eacute, mais seuls les %s peuvent poster des notes dans ce forum.',
	'Sorry_auth_read' => 'Désol&eacute, mais seuls les %s peuvent lire les sujets de ce forum.',
	'Sorry_auth_post' => 'Désol&eacute, mais seuls les %s peuvent poster des sujets dans ce forum.',
	'Sorry_auth_reply' => 'Désol&eacute, mais seuls les %s peuvent répondre aux sujets dans ce forum.',
	'Sorry_auth_edit' => 'Désol&eacute, mais seuls les %s peuvent éditer les messages dans ce forum.',
	'Sorry_auth_delete' => 'Désol&eacute, mais seuls les %s peuvent supprimer les messages dans ce forum.',
	'Sorry_auth_vote' => 'Désol&eacute, mais seuls les %s peuvent voter dans ce forum.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>Invités</b>',
	'Auth_Registered_Users' => '<b>Membres</b>',
	'Auth_Self_Users' => '<b>Utilisateurs spécifique</b>',
	'Auth_Users_granted_access' => '<b>Utilisateurs avec un accès spécial</b>',
	'Auth_Moderators' => '<b>Modérateurs</b>',
	'Auth_Administrators' => '<b>Administrateurs</b>',

	'Not_Moderator' => 'Vous n\'&ecirc;tes pas modérateur de ce forum.',
	'Not_Authorized' => 'Non Autorisé',

	'You_been_banned' => 'Vous avez été banni de ce forum.<br />Veuillez contacter l\'administrateur du site ou du forum pour plus d\'informations.',

// Viewonline
	'Reg_users_zero_online' => 'Il n\'y a aucun utilisateur enregistré et ', // There are 0 Registered and
	'Reg_users_online' => 'Il y a %d utilisateurs enregistrés et ', // There are 2+ Registered and
	'Reg_user_online' => 'Il y a %d utilisateur enregistré et ', // There is 1 Registered and
	'Hidden_users_zero_online' => 'Aucun utilisateur invisible en ligne', // 0 Hidden users online
	'Hidden_users_online' => '%d utilisateurs invisibles en ligne', // 2+ Hidden users online
	'Hidden_user_online' => '%d utilisateur invisible en ligne', // 1 Hidden users online
	'Guest_users_online' => 'Il y a %d invités en ligne', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Il n\'y a aucun invité en ligne', // There are 0 Guest users online
	'Guest_user_online' => 'Il y a %d invité en ligne', // There is 1 Guest user online
	'No_users_browsing' => 'Aucun utilisateur ne parcourt actuellement le forum.',

	'ONLINE_EXPLAIN' => 'Ces données sont basées sur les utilisateurs actifs ces ' . intval(ONLINE_REFRESH / 60) . ' dernières minutes',
	'ONLINE_TODAY' => 'Ces données sont basées sur les utilisateurs actifs aujourd\'hui',

	'Forum_Location' => 'Position sur le forum',
	'Last_updated' => 'Dernière mise &agrave; jour',

	'Forum_index' => 'Index du forum',
	'Portal' => 'Page d\'accueil',
	'Logging_on' => 'Se connecte',
	'Posting_message' => 'Poste un message',
	'Searching_forums' => 'Recherche sur le forum',
	'Viewing_profile' => 'Regarde un profil',
	'Viewing_HACKSLIST' => 'Regarde les crédits',
	'Viewing_online' => 'Regarde qui est en ligne',
	'Viewing_member_list' => 'Regarde la liste des membres',
	'Viewing_priv_msgs' => 'Regarde ses messages privés',
	'Viewing_FAQ' => 'Regarde la Foire aux Questions',
	'Viewing_KB' => 'Regarde la base de connaissances',
	'Viewing_RSS' => 'Flux RSS',


// Moderator Control Panel
	'Mod_CP' => 'Panneau de Contrôle des Modérateurs',
	'Mod_CP_explain' => 'Vous pouvez accomplir des opérations de modération de masse. Vous pouvez verrouiller, déverrouiller, déplacer ou supprimer n\'importe quel nombre de sujet.',

	'Select' => 'Sélectionner',
	'Delete' => 'Supprimer',
	'Move' => 'Déplacer',
	'Copy' => 'Copier',
	'Lock' => 'Verrouiller',
	'Unlock' => 'Déverrouiller',

	'Topics_Removed' => 'Les sujets sélectionnés ont été correctement supprimés.',
	'Topics_Locked' => 'Les sujets sélectionnés ont été correctement verrouillés.',
	'Topics_Moved' => 'Les sujets sélectionnés ont été correctement déplacés.',
	'Topics_Unlocked' => 'Les sujets sélectionnés ont été correctement déverrouillés.',
	'No_Topics_Moved' => 'Aucun sujet n\'a été déplacés.',

	'Confirm_delete_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer le(s) sujet(s) sélectionné(s) ?',
	'Confirm_lock_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir verrouiller le(s) sujet(s) sélectionné(s) ?',
	'Confirm_unlock_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir déverrouiller le(s) sujet(s) sélectionné(s) ?',
	'Confirm_move_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir déplacer le(s) sujet(s) sélectionné(s) ?',

	'Move_to_forum' => 'Déplacer vers le forum',
	'Leave_shadow_topic' => 'Laisser un sujet traceur dans l\'ancien forum.',

	'Split_Topic' => 'Panneau de Contrôle des Sujets &agrave; Diviser',
	'Split_Topic_explain' => 'En utilisant le formulaire ci-dessous, vous pouvez diviser un sujet en deux soit en sélectionnant les messages individuellement, soit en divisant &agrave; partir d\'un message.',
	'Split_title' => 'Titre du nouveau sujet',
	'Split_forum' => 'Forum du nouveau sujet',
	'Split_posts' => 'Diviser les messages sélectionnés',
	'Split_after' => 'Diviser &agrave; partir du message sélectionné',
	'Topic_split' => 'Le sujet sélectionné a été correctement divisé',

	'Too_many_error' => 'Vous avez sélectionné trop de messages. Vous ne pouvez sélectionner qu\'un seul message &agrave; partir duquel diviser le sujet !',

	'None_selected' => 'Vous n\'avez pas sélectionné de sujet pour cette opération. Veuillez revenir en arrière et en sélectionner au moins un.',
	'New_forum' => 'Nouveau forum',

	'This_posts_IP' => 'Adresse IP de ce message',
	'Other_IP_this_user' => 'Autres adresses IP depuis lequel cet utilisateur a posté',
	'Users_this_IP' => 'Utilisateurs postant depuis cette adresse IP',
	'IP_info' => 'Information sur l\'IP',
	'Lookup_IP' => 'Chercher l\'adresse IP',

// Erreurs (not related to a specific failure on a page)
	'Information' => 'Information',
	'Critical_Information' => 'Information Critique',

	'General_Error' => 'Erreur Générale',
	'Critical_Error' => 'Erreur Critique',
	'An_error_occured' => 'Une errreur est survenue.',
	'A_critical_error' => 'Une erreur critique est survenue.',
	'Admin_reauthenticate' => 'Pour administrer le site, vous devez vous reconnecter.',

	'Topic_description' => 'Description de votre sujet',
// 'Description' => 'Topic Description',

	'Guestbook' => 'Livre d\'Or',
	'Viewing_guestbook' => 'Lit le Livre d\'Or',

	'Warn_new_post' => 'Il y a eu au moins une réponse dans ce sujet. Veuillez regarder les nouvelles réponses avant de réenvoyer votre message.',

	'Today_at' => '<b class="date-today">Aujourd\'hui</b> &agrave; ',
	'Yesterday_at' => '<b class="date-yesterday">Hier</b> &agrave: ',
	'TODAY' => '<b class="date-today">Aujourd\'hui</b>',
	'YESTERDAY' => '<b class="date-yesterday">Hier</b>',

// Birthday - BEGIN
	'Birthday' => 'Anniversaire',
	'No_birthday_specify' => 'Non spécifié',
	'Age' => '&Acirc;ge',
	'Wrong_birthday_format' => 'Le format de la date d\'anniversaire entrée est incorrect.',
	'Birthday_to_high' => 'Désolé, mais ce site n\'accepte que les personnes ayant moins de %d ans.',
	'Birthday_require' => 'Votre date de naissance est nécessaire sur ce site.',
	'Birthday_to_low' => 'Désolé, mais ce site n\'accepte que les personnes ayant plus de %d ans.',
	'Submit_date_format' => 'd-m-Y', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
	'Birthday_greeting_today' => 'Nous voudrions vous souhaiter un joyeux anniversaire pour vos vos %s ans.',//%s is substituted with the users age
	'Birthday_greeting_prev' => 'Nous voudrions vous souhaiter un joyeux anniversaire pour vos vos %s le %s malgré le retard.',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' => 'Félicitations',
	'Birthday_today' => 'Utilisateurs f&ecirc;tant leur anniversaire aujourd\'hui:',
	'Birthday_week' => 'Utilisateurs f&ecirc;tant leur anniversaire dans les %d prochains jours:',
	'Nobirthday_week' => 'Aucun utilisateur ne fête son anniversaire dans les %d prochains jours.', // %d is substituted with the number of days
	'Nobirthday_today' => 'Aucun utilisateur ne fête son anniversaire aujourd\'hui.',
	'Year' => 'Année',
	'Month' => 'Mois',
	'Day' => 'Jour',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Genre',//used in users profile to display which gender he/she is
	'Male' => 'Homme',
	'Female' => 'Femme',
	'No_gender_specify' => 'Non Spécifié',
	'Gender_require' => 'Votre genre est nécessaire sur ce site.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Liste les utilisateurs ayant vu ce sujet',
	'Topic_time' => 'Dernière vue',
	'Topic_count' => 'Compteur de vue',
	'Topic_view_count' => 'Compteur de vue de ce sujet',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Gracier l\'utilisateur',
	'Give_Y_card' => 'Donner l\'avertissement &agrave; #%d',
	'Give_R_card' => 'Bannir cet utilisateur',
	'Ban_update_sucessful' => 'La liste des bannissements a été mise &agrave; jour avec succès.',
	'Ban_update_green' => 'Cet utilisateur a été gracié.',
	'Ban_update_yellow' => 'Cet utilisateur a re&ccedil;u un avertissement, et en a maintenant %d sur un maximum de %d autorisés.',
	'Ban_update_red' => 'Cet utilisateur a été banni.',
	'Ban_reactivate' => 'Votre compte a été gracié.',
	'Ban_warning' => 'Vous avez re&ccedil;u un avertissement.',
	'Ban_blocked' => 'Votre compte est maintenant bloqué.',
/*
	'Rules_ban_can' => 'You <b>can</b> ban other users in this forum',
	'Rules_greencard_can' => 'You <b>can</b> un-ban users in this forum',
	'Rules_bluecard_can' => 'You <b>can</b> report post to moderators in this forum',
*/
	'Rules_ban_can' => 'Vous <b>pouvez</b> bannir d\'autres utilisateurs',
	'Rules_greencard_can' => 'Vous <b>pouvez</b> débannir des utilisateurs',
	'Rules_bluecard_can' => 'Vous <b>pouvez</b> reporter les messages aux modérateurs',
	'user_no_email' => 'L\'utilisateur n\'a pas d\'adresse mail, le message n\'a donc pas pu &ecirc;tre envoyé. Vous devriez essayer de lui envoyer un message privé.',
	'user_already_banned' => 'L\'utilisateur sélectionné est déj&agrave; banni.',
	'Ban_no_admin' => 'Cet utilisateur est un administrateur et ne peut &ecirc;tre ni averti ni banni.',
	'Give_b_card' => 'Reporter ce message aux modérateurs de ce forum',
	'Clear_b_card' => 'Ce message a %d rapports. Si vous cliquez sur ce bouton vous les supprimerez.',
	'No_moderators' => 'Le forum n\'a pas de modérateur, impossible d\'envoyer un rapport.',
	'Post_reported' => 'Ce message a été reporté &agrave; %d modérateurs',
	'Post_reported_1' => 'Ce message a été reporté au(x) modérateur(s).',
	'Post_report' => 'Notification de Réponse', //Subject in email notification
	'Post_reset' => 'Les rapports sur ce message ont été supprimés.',
	'Search_only_bluecards' => 'Rechercher uniquement les messages avec rapport(s)',
	'Send_message' => 'Cliquez %sici%s pour écrire un message aux modérateurs ou <br />',
	'Send_PM_user' => 'Cliquez %sici%s pour écrire un message privé &agrave; l\'utilisateur ou',
	'Link_to_post' => 'Cliquez %sici%s pour aller au message reporté
--------------------------------

',
	'Post_a_report' => 'Envoyer un rapport',
	'Report_stored' => 'Votre rapport a été envoyé avec succès',
	'Send_report' => 'Cliquez %sici%s pour revenir au message original',
	'Red_card_warning' => 'Vous &ecirc;tes sur le point de donner &agrave; l\'utilisateur: %s un carton rouge, ce qui le bannira, &ecirc;tes-vous s&ucirc;r ?',
	'Yellow_card_warning' => 'Vous &ecirc;tes sur le point de donner &agrave; l\'utilisateur: %s un carton jaune, cela lui donnera un avertissement, &ecirc;tes-vous s&ucirc;r ?',
	'Green_card_warning' => 'Vous &ecirc;tes sur le point de donner &agrave; l\'utilisateur: %s un carton vert, cela débannira l\'utilisateur, &ecirc;tes-vous s&ucirc;r ?',
	'Blue_card_warning' => 'Vous &ecirc;tes sur le point de reporter un message aux modérateurs, &ecirc;tes-vous s&ucirc;r de vouloir continuer ?',
	'Clear_blue_card_warning' => 'Vous &ecirc;tes sur le point de supprimer les rapports sur ce message, &ecirc;tes-vous s&ucirc;r de vouloir continuer ?',
	'Warnings' => 'Avertissements: %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'Banni', //shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => 'Dernière visite',
	'Hidde_last_logon' => 'Caché',
	'Never_last_logon' => 'jamais',
	'Users_today_zero_total' => 'Personne n\'a visité ce site aujourd\'hui.', #V: hey, WTF? Si je vois ce message, c'est que je suis dessus non ._. ?
	'Users_today_total' => 'Au total, <b>%d</b> utilisateurs ont visités ce site aujourd\'hui: ',
	'User_today_total' => 'Au total, <b>Un</b> utilisateur a visité ce site aujourd\'hui: ',
	'Users_lasthour_explain' => ', dont %d dans l\'heure.',
	'Users_lasthour_none_explain' => ' et vous êtes le seul visiteur de cette dernière heure.', //shown if no one has visited in the last hour, fill if you like

	'Years' => 'Années',
	'Year' => 'Année',
	'Weeks' => 'Semaines',
	'Week' => 'Semaine',
	'Day' => 'Jour',
	'Total_online_time' => 'Temps total en ligne',
	'Last_online_time' => 'Dernière Connexion',
	'Number_of_visit' => 'Nombre de visites',
	'Number_of_pages' => 'Nombre de pages vues',
// Last visit - END

	'total_site_hits_key' => '%V% Pages vues depuis %D%.',

	'Message_too_short' => 'Message trop court',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'En ligne',
	'Offline' => 'Hors ligne',
	'Hidden' => 'Invisible',

	'Online_status' => 'Statut',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Télécharger',

//signature editor
	'sig_edit_link' => 'Signature',
	'sig_description' => 'Éditer la Signature (<b>Prévisualisation incluse</b>)',
	'sig_edit' => 'Éditer sa Signature',
	'sig_current' => 'Signature actuelle',
	'sig_none' => 'Pas de signature',
	'sig_save' => 'Sauvegarder',
	'sig_save_message' => 'Signature correctement enregistrée !',

	'Statistics' => 'Statistiques',

// Start add - Global announcement MOD
	'Globalannounce' => 'Annonce Globale',
	'Globalannounce' => 'Nouvelle Annonce Globale',
// End add - Global announcement MOD
	'Global_Announcements' => 'Annonces globales',
	'Announcements' => 'Annonces',
	'Sticky_Topics' => 'Post-it',
	'Announcements_and_Sticky' => 'Annonces et post-it',
// db_update generator
	'Db_update_generator' => 'Générateur de mises &agrave; jour pour la base de données',
	'Instructions' => 'Instructions',
	'SQL_instructions' => '<p>Ce programme va créer un fichier PHP qui mettra &agrave; jour votre base de données en passant par votre navigateur. Il y a un certain nombre de choses auxquelles vous devez penser avant d\'ajoueter une requ&ecirc;te SQL dans le champs ci-dessous:<br />Premièrement, v&eaciute;rifiez que chaque requ&ecirc;te SQL se termine avec un point-virgule (;). Sinon, le programme l\'ajoutera par défaut. Ensuite, vérifiez que les tables ont le préfixe "phpbb_". Il sera remplacé par une partie de code qui s\'adaptera &agrave; chaque préfixe.</p>',
	'Enter_SQL' => '<strong>Requ&ecirc;te SQL</strong>',
	'Enter_SQL_explain' => '<strong>MySQL</strong> est le système de gestion de bases de données open-source le plus utilisé au monde, reconnu pour sa rapidité et ses fonctionnalités.',
	'Output_SQL' => '<strong>Résultat</strong>',
	'Output_SQL_explain' => 'Copiez et coller le contenu du champ &agrave; droite dans un fichier blanc. Sauvegardez le fichier avec comme nom <u>db_update.php</u> et envoyez-le sur votre serveur. Lancez-le (<b>une fois uniquement !</b>) par votre navigateur.<br /><br />Alternativement, cliquez sur le bouton de téléchargment pour télécharger le fichier directement sur votre ordinateur <strong>(recommandé)</strong>.',
	'Download' => 'Télécharger',

	'TOP_POSTERS' => 'Meilleurs Posteurs',

// TELL A FRIEND
	'TELL_FRIEND' => 'Envoyez un mail &agrave; un ami',
	'TELL_FRIEND_SENDER_USER' => 'Votre nom',
	'TELL_FRIEND_SENDER_EMAIL' => 'Votre adresse mail',
	'TELL_FRIEND_RECEIVER_USER' => 'Le nom de votre ami',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'L\'adresse mail de votre ami',
	'TELL_FRIEND_WRONG_EMAIL' => 'L\'adresse mail n\'est pas valide.',
	'TELL_FRIEND_MSG' => 'Votre message:',
	'TELL_FRIEND_TITLE' => 'Message &agrave; un ami',
	'TELL_FRIEND_BODY' => "Bonjour,\nJ'ai lu le sujet &raquo;{TOPIC}&laquo; sur {SITENAME} et je pensais que &ccedil;a pourrait t'intéteresser.\n\nVoici le lien: {LINK}\n\nLis-le et répond si tu veux ! Tu peux t\'inscrire si tu n'as pas encore de compte.",

// Begin Thanks Mod
	'thankful' => 'Personne remerciant',
	'thanks_to' => 'Merci pour ce sujet',
	'thanks_end' => ' de la part de:',
	'thanks_alt' => 'Remercier l\'auteur',
	'thanks_add_rate' => 'Remercier l\'auteur pour l\'utilité de son sujet.',
	'thanked_before' => 'Vous avez déj&agrave; remercié ce sujet.',
	'thanks_add' => 'Votre remerciement a été donné.',
	'thanks_not_logged' => 'Vous devez &ecirc;tre connecté pour remercier un auteur.',
	'thanks2' => 'Merci beaucoup !<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Version Lo-Fi',
// 'Full_Version' => 'Full Version',
	'Full_Version' => 'Voici la version "Lo-Fi" de notre site. Pour voir la version complète avec plus d\'informations, les images et le formatage, veuillez cliquer ici.',
	'quote_lofi' => 'Citer',
	'edit_lofi' => 'Éditer',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Supprimer',
	'profile_lofi' => 'Profil',
	'pm_lofi' => 'MP',
	'email_lofi' => 'Mail',
	'website_lofi' => 'Site Web',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Réponse Rapide',
	'new_pm_lofi' => 'Envoyer un MP',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Attacher ma signature &agrave; mes messages précédents.',
	'Retro_sig_explain' => 'Si vous ajoutez/modifiez votre signature, IcyPhoenix l\'appliquera, par défaut, uniquement aux nouveaux messages.',
	'Retro_sig_checkbox' => 'Cochez cette case si vous souhaitez attacher votre signature &agrave; vos messages précédents.',
// End Retro Sig MOD

	'legend' => 'Légende',
	'users' => 'Utilisateurs',
//added to autogroup mod
	'No_more' => 'Les utilisateurs ne sont plus autorisés',
	'No_add_allowed' => 'L\'ajout automatique d\'utilisateur n\'est pas autorisé',
	'Join_auto' => 'Vous pouvez rejoindre ce groupe, vos nombre de messages étant suffisant',

// merge topics
	'Merge' => 'Fusionner',
	'Merge_topic' => 'Fusionner le sujet',
	'Topics_Merged' => 'Les sujets sélectionnés ont été fusionnés.',
	'No_Topics_Merged' => 'Aucun sujet fusionné.',
	'Confirm_merge_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir fusionner les sujets sélectionnés ?',

	'Downloads' => 'Téléchargements',

// Start add - Bin Mod
	'Move_bin' => 'Mettre ce sujet &agrave; la corbeille',
	'Topics_Moved_bin' => 'Le sujet a été déplacé dans la corbeille.',
	'Bin_disabled' => 'La corbeille est désactivée',
	'Bin_recycle' => 'Recycler',
// End add - Bin Mod
	'Recent_topics' => 'Sujets Récents', // Recent Topics

	'Topics_Title_Edited' => 'Le titre des sujets sélectionnés a été édité.',
	'Edit_title' => 'Édition du titre',
	'PM' => 'MP',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'Adresse IP pour les modérateurs uniquement',
	'Registered_ip_address' => 'Adresse IP enregistré',
	'Registered_hostname' => 'Domaine enregistré',
	'Other_registered_ips' => 'Autres utilisateurs enregistrés depuis %s', //%s is the IP address
	'Other_posted_ips' => 'Adresses IP depuis lequel cet utilisateur a posté',
	'Search_ip' => 'Rechercher les messages depuis une adresse IP',
	'Search_ip_explain' => 'Entrez une adresse IP correcte comme par exemple <u>127.0.0.1</u> (vous pouvez utiliser * comme joker, par exemple <u>127.*.*.1</u>)',
	'IP' => 'IP',
	'Whois' => 'Informations',
	'Browser' => 'Navigateur',
	'No_other_registered_ips' => 'Aucun autre utilisateur n\'a cette adresse IP.',
	'No_other_posted_ips' => 'Cet utilisateur n\'a posté aucun message.',
	'Not_recorded' => 'Non enregistré',
	'Logins' => 'Connexions',
	'No_logins' => 'Cet utilisateur ne s\'est pas encore connecté.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Cliquez pour voir l\'image dans sa taille réelle',
	'LIW_click_image_explain' => 'Cliquez sur l\'image pour la voir en taille réelle.',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Album',
	'Personal_Gallery' => 'Galerie Personnelle',
	'Personal_Gallery_Of_User' => 'Galerie Personnelle de %s',
	'Personal_Gallery_Of_User_Profile' => 'Galerie Personnelle de %s (%d images)',
	'Show_All_Pic_View_Mode_Profile' => 'Montrer toutes les images dans la galerie personnelle de %s (sans les sous-catégories)',
	'Not_allowed_to_view_album' => 'Désolé, vous n\'&ecirc;tes pas autorisé &agrave; voir l\'album.',
	'Not_allowed_to_upload_album' => 'Désolé, vous n\'&ecirc;tes pas autorisé &agrave; envoyé une image dans l\'album. Contactez l\'administrateur de l\'album pour plus d\'informations.',
	'Album_empty' => 'Il y n\'y a aucune image dans l\'album<br />Cliquez sur le lien <b>Envoyer une image</b> pour en ajouter une.',
	'Album_empty2' => 'Il y n\'y a aucune image dans l\'album.',
	'Upload_New_Pic' => 'Envoyer une image.',
	'Pic_Title' => 'Titre de l\'image',
	'Pic_Title_Explain' => 'Il est très important de donner un bon nom &agrave; votre image. Cela peut &ecirc;tre le sujet, le nom du modèle, etc. pour permettre aux autres d\'imaginer le contenu de l\'image sans la voir.',
	'Pic_Upload' => 'Envoi d\'images',
	'Pic_Upload_Explain' => 'Les types autorisés sont JPG, GIF et PNG. La taille maximum des fichiers est de %s bytes. Les dimensions maximales pour l\'image sont de %sx%s pixels.',
	'Album_full' => 'Désolé, l\'album a atteint le nombre maximum d\'images. Contactez un administrateur pour plus d\'information.',
	'Album_upload_successful' => 'Votre image a été correctement insérée.',
	'Click_return_album' => 'Cliquez %sici%s pour revenir &agrave; l\'album.',
	'Invalid_upload' => 'Envoi invalide<br /><br />Votre image est trop grande ou n\'a pas une extension autorisée',
	'Image_too_big' => 'Désolé, mais votre image est trop large.',
	'Uploaded_by' => 'Envoyée par',
	'Category_locked' => 'Désolé, vous ne pouvez ajouter d\'image car cette catégorie a été verrouillée par un administrateur. Veuillez contacter l\'administrateur pour plus d\'informations.',
	'View_Album_Index' => 'Index de l\'album',
	'View_Album_Personal' => 'Regarde l\'album personnel d\'un utilisateur',
	'View_Pictures' => 'Regarde une image ou poste/li les commentaires dans l\'album',
	'Album_Search' => 'Fait une recherche dans l\'album',
	'Pic_Name' => 'Nom de l\'image',
	'Description' => 'Description',
	'Search_Contents' => ' qui contient: ',
	'Search_Found' => 'Résultats: ',
	'Search_Matches' => 'Trouvé:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Dernières Nouvelles',
	'xs_no_news' => 'Il n\'y a aucune nouvelle.',
	'xs_news_version' => 'XS News Version: %s',
	'xs_news_ticker_feed' => 'Source du flux XML: %s',
	'xs_no_ticker' => 'Il n\'y a défileur de nouvelles de défini, merci d\'aller dans le panneau d\'administration pour en créer un.',
	'xs_news_ticker_title' => 'Défileur de Nouvelles',
	'xs_news_tickers_title' => 'Défileur de Nouvelles',
	'xs_news_item_title' => 'Nouvelle',
	'xs_news_items_title' => 'Nouvelles',
	'hide' => 'Cacher',
	'show' => 'Montrer',
	'Welcome' => 'Bienvenue',
	'birthdays' => 'Anniversaires',

//Battle of the Sexes
//Vendethiel: seems to be unused
	'male_zero_total' => 'Aucun Membre Masculin', // # registered male users
	'male_total' => '<b>%d</b> Membres Masculin', // # registered male users
	'male_one_total' => '<b>Un</b> Membre Masculin', // # registered male user
	'female_zero_total' => 'Nous n\'avons pas de membre féminin', // # registered female users
	'female_total' => 'Nous avons <b>%d</b> membres féminins', // # registered female users
	'female_one_total' => 'Nous avons <b>un</b> membre féminin', // # registered female users
	'unknown_total' => '& <b>%d</b> membres n\'ont pas précisé leur sexe',
	'unknown_one_total' => '& <b>%d</b> membre n\'a pas précisé leur sexe',
	'unknown_zero_total' => 'Tout le monde a précisé son genre.',
	'battle_of_sexes' => 'Bataille des sexes: ',
//Vendethiel/


	'who_viewed' => 'Vues du sujet',
	'BoardRules' => 'Règles',

	'View_post' => 'Voir le message',
	'Post_review' => 'Poster un retour',
	'View_next_post' => 'Voir le message suivant',
	'View_previous_post' => 'Voir le message précédent',
	'No_newer_posts' => 'Il n\'y a pas de messages plus récent dans ce forum',
	'No_older_posts' => 'Il n\'y a pas de messages plus ancien dans ce forum',

	'StaffSite' => 'Équipe du Site',
	'Staff_level' => array('Administrateur', 'Modérateur'),
	'Staff_forums' => 'Forums',
	'Staff_stats' => 'Statistiques',
	'Staff_user_topic_day_stats' => '%.2f sujets par jour', // %.2f = topics per day
	'Staff_period' => 'depuis %d jours', // %d = days
	'Staff_contact' => 'Contacts',
	'Staff_messenger' => 'Messagerie',
// Start Edit Notes MOD
	'Edit_notes' => 'Note d\'édition',
	'Delete_note' => 'Supprimer la note',
	'Edited_by' => 'Édité par',
	'Confirm_delete_edit_note' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cette note ?',
	'Edit_note_deleted' => 'La note a bien été supprimée.',
// End Edit Notes MOD

	'Recent_topics' => 'Sujets récents',
	'Recent_today' => 'Aujourd\'hui',
	'Recent_yesterday' => 'Hier',
	'Recent_last24' => 'Ces dernières 24 heures',
	'Recent_lastweek' => 'La semaine passée',
	'Recent_lastXdays' => 'Ces %s derniers jours',
	'Recent_last' => 'Dernier',
	'Recent_days' => 'Jours',
	'Recent_first' => 'commencé %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Sélectionnez le mode :',
	'Recent_showing_posts' => 'Vue des messages:',
	'Recent_title_one' => '%s sujet %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s sujets %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' d\'aujourd\'hui',
	'Recent_title_yesterday' => ' d\'hier',
	'Recent_title_last24' => ' des 24 dernières heures',
	'Recent_title_lastweek' => ' de cette semaine',
	'Recent_title_lastXdays' => ' de ces %s derniers jours', // %s = days
	'Recent_no_topics' => 'Aucun sujet trouvé.',
	'Recent_wrong_mode' => 'ce mode n\'existe pas.',
	'Recent_click_return' => 'Cliquez %sici%s pour retourner au site.',

	'Profile_view_option' => 'Ouvrir une fen&ecirc;tre lors de la vue du profil',
	'Profile_viewed' => 'Les visiteurs de mon profil',

// BEGIN Disable Registration MOD
	'registration_status' => 'Désolé, mais les inscriptions sont actuellement désactivées. Veuillez réessayer plus tard.',
// END Disable Registration MOD

	'PostHighlight' => 'Surligner',
	'QuickQuote' => 'Citation rapide',
	'Randomquote' => 'Citation aléatoire',

// Mod User CP Organize
	'Cpl_Navigation' => 'Panneau de Contrôle',
//  'Cpl_Settings_Options' => 'Settings And Options',
	'Cpl_Settings_Options' => 'Configuration',
	'Cpl_Board_Settings' => 'Configuration du Site',
	'Cpl_NewMSG' => 'Envoyer un Message Privé',
	'Cpl_Click_Return_Cpl' => 'Ou cliquez %sici%s pour revenir &agrave; votre %1$sPanneau de Contrôle%2$s',
	'Cpl_Personal_Profile' => 'Profil Personnel',
	'Cpl_More_info' => 'Inscriptions',

	'Forbidden_characters' => 'Les caractères autorisés pour les pseudos sont a-z, 0-9, -, _ et les espaces.',

	'Topics_per_page' => 'Sujets par page',
	'Posts_per_page' => 'Messages par page',
	'Hot_threshold' => 'Seuil des messages populaires',

	'Mod_CP_first_post' => 'Premier message',
	'Mod_CP_topic_count' => '<b>Un</b> sujet trouvé.',
	'Mod_CP_topics_count' => '<b>%s</b> sujets trouvés.',
	'Mod_CP_no_topics' => 'Aucun sujet correspondant &agrave; vos critères n\'a été trouvé.',
	'Mod_CP_sticky' => 'Mettre en Post-It',
	'Mod_CP_announce' => 'Mettre en Annonce',
	'Mod_CP_global' => 'Rendre Global',
	'Mod_CP_normal' => 'Rendre Normal',
	'Display_sticky' => 'Post-it',
	'Display_announce' => 'Annonce',
	'Display_global' => 'Annonce Globale',
	'Display_poll' => 'Sondage',
	'Display_shadow' => 'Déplacé',
	'Display_locked' => 'Verrouillé',
	'Display_unlocked' => 'Déverrouillé',
	'Display_unread' => 'Non lus',
	'Display_unanswered' => 'sans réponse',
	'Display_all' => 'Tout',
	'Mod_CP_confirm_delete_polls' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ces sondages ?',
	'Mod_CP_poll_removed' => 'Le sondage sélectionné a été correctement retiré du sujet.',
	'Mod_CP_polls_removed' => 'Les sondages sélectionnés ont été correctement retirés des sujets.',
	'Mod_CP_topic_removed' => 'Les sujets sélectionnés ont été correctement supprimés.',
	'Mod_CP_topic_moved' => 'Le sujet sélectionné a été déplacé de <b>%s</b> vers <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Les sujets sélectionnés ont été déplacé de <b>%s</b> vers <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'Le sujet sélectionné a été verrouillé.',
	'Mod_CP_topic_unlocked' => 'Le sujet sélectionné a été déverrouillé.',
	'Mod_CP_topics_sticked' => 'Les sujets sélectionnés ont été mis en Post-It.',
	'Mod_CP_topic_sticked' => 'Le sujet sélectionné a été mis en Post-It.',
	'Mod_CP_topics_announced' => 'Les sujets sélectionnés ont été mis en Annonces.',
	'Mod_CP_topic_announced' => 'Le sujet sélectionné a été mis en Annonce.',
	'Mod_CP_topics_globalized' => 'Les sujets sélectionnés ont été mis en Annonce Globale.',
	'Mod_CP_topic_globalized' => 'Le sujet sélectionné a été mis en Annonce Globale.',
	'Mod_CP_topics_normalized' => 'Les sujets sélectionnés ont été remis en sujets normaux.',
	'Mod_CP_topic_normalized' => 'Le sujet sélectionné ont été remis en sujet normal.',
	'Mod_CP_click_return_topic' => 'Cliquez %sici%s pour retourner &agrave; l\'ancien sujet ou %sici%s pour aller au nouveau.',

	't_starter' => 'Vous ne pouvez vous remercier vous-m&ecirc;me',
	'Watched_Topics' => 'Sujets Surveillés',
	'No_Watched_Topics' => 'Vous ne surveillez aucun sujet',
	'Watched_Topics_Started' => 'Sujet Commencés',
	'Watched_Topics_Stop' => 'Arr&ecirc;ter de surveiller',

	'Stop_watching_forum' => 'Arr&ecirc;ter de surveiller ce forum',
	'Start_watching_forum' => 'Surveiller les messages de ce forum',
	'No_longer_watching_forum' => 'Vous ne surveillez plus ce forum.',
	'You_are_watching_forum' => 'Vous surveillez maintenant ce forum.',

	'UCP_SubscForums' => 'Liste des Forums Souscrits',
	'UCP_NoSubscForums' => 'Vous n\'avez souscrit a aucun forum',
	'UCP_SubscForums_Flag' => 'Drapeau',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Forum avec souscription',
	'UCP_SubscForums_Forum_already_subscribed' => 'Vous avez déj&agrave; souscrit &agrave; ce forum.',
	'UCP_SubscForums_Click_return_forum' => 'Cliquez %sici%s pour retourner au forum',
	'UCP_SubscForums_Topics' => 'Sujets',
	'UCP_SubscForums_Posts' => 'Messages',
	'UCP_SubscForums_LastPost' => 'Dernier message',
	'UCP_SubscForums_UnSubscribe' => 'Se Désinscrire',
	'UCP_SubscForums_NewTopic' => 'Nouveau Sujet',

	'profile_main' => 'Informations Générales',
	'profile_explain' => 'Bienvenue dans le Panneau de Contrôle des Utilisateurs. D\'ici, vous pouvez surveiller, voir et mettre &agrave; jour votre profil, vos préf&aecute;rences et la liste des forum(s)/sujet(s) au(x)quel(s) vous avez souscrit(s). Vous pouvez aussi envoyer des messages aux autres utilisateurs (si le système est activé).',
	'your_activity' => 'Votre Profil',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Si vous avez un <a href="http://www.gravatar.com" target="_blank">gravatar</a>, entrez l\'adresse mail avec laquelle vous vous &ecirc;tes inscrit.',

	'private_msg_review_title' => 'Message auquel vous répondez',
	'private_msg_review_error' => 'Erreur dans la recherche du message privé !',

	'BSH_Viewing_Topic' => 'Regarde un sujet: %t%',
	'BSH_Viewing_Post' => '%sRegarde un message%s',
	'BSH_Viewing_Profile' => 'Regarde le profil de %u%',
	'BSH_Viewing_Groups' => '%sRegarde les groupes%s',
	'BSH_Viewing_Forums' => 'Regarde le forum: %f%',
	'BSH_Index' => '%sRegarde l\'index%s',
	'BSH_Searching_Forums' => '%sFait une recherche dans les forums%s',
	'BSH_Viewing_Onlinelist' => '%sRegarde qui est en ligne%s',
	'BSH_Viewing_Messages' => '%sRegarde ses messages privés%s',
	'BSH_Viewing_Memberlist' => '%sRegarde la liste des membres%s',
	'BSH_Login' => '%sSe connecte%s',
	'BSH_Logout' => '%sSe déconnecte%s',
	'BSH_Editing_Profile' => '%sédite son profil%s',
	'BSH_Viewing_ACP' => '%sEst sur le Panel Administrateur%s',
	'BSH_Moderating_Forum' => '%sModère le forum%s',
	'BSH_Viewing_FAQ' => '%sRegarde la FAQ%s',
	'BSH_Viewing_Category' => 'Regarde la catégorie: %c%',

	'Board_statistic' => 'Stastiques du Forum',
	'Database_statistic' => 'Statistiques de la base de données',
	'Version_info' => 'Informations sur la version',
	'Thereof_deactivated_users' => 'Nombre de membres non-actifs',
	'Thereof_Moderators' => 'Nombre de Modérateurs',
	'Thereof_Junior_Administrators' => 'Nombre d\'Administrateurs Junior',
	'Thereof_Administrators' => 'Nombre d\'Administrateurs',
	'Deactivated_Users' => 'Membres en attente d\'activation',
	'Users_with_Mod_Privileges' => 'Membre avec des droits de Modérateurs',
	'Users_with_Junior_Admin_Privileges' => 'Membre avec des droits d\'Administrateurs Junior',
	'Users_with_Admin_Privileges' => 'Membres avec des droits d\'Administrateur',
	'DB_size' => 'Taille de la base de données',
	'Version_of_ip' => 'Version d\'<a href="http://www.icyphoenix.com/">IcyPhoenix</a>',
	'Version_of_board' => 'Version de <a href="http://www.phpbb.com">phpBB</a>',
	'Version_of_PHP' => 'Version de <a href="http://www.php.net/">PHP</a>',
	'Version_of_MySQL' => 'Version de <a href="http://www.mysql.com/">MySQL</a>',
	'Download_post' => 'Télécharger le message',

	'Download_topic' => 'Télécharger le sujet',
	'Always_swear' => 'Ne pas filtrer les jurons',

	'Shoutbox' => 'Shoutbox',
	'Shoutbox_date' => ' (d/m/Y) [H:i:s]',
	'Shout_censor' => '<b>Message Supprimé !</b>',
	'Shout_refresh' => 'Rafraichir',
	'Shout_text' => 'Votre texte',
	'Viewing_Shoutbox' => 'Regarde la shoutbox',
	'Censor' => 'Censurer',

	'Edit_post_time' => 'Éditer la date/heure du message',
	'Edit_post_time_xs' => 'Éditer',
	'Topic_time_xs' => 'Date du sujet',
	'Post_time' => 'Date du message',
	'Post_time_successfull_edited' => '<b>Date correctement mise &agrave; jour.</b></span><br /><span class="postdetails">Cette fen&ecirc;tre se fermera dans 3 secondes.',

	'staff_message' => 'Message de l\'équipe',

	'Board_Rules' => 'Règlement du Forum', // Forum = site général
	'Forum_Rules' => 'Règles des forums', // Forum = dans les catégories
	'Show_avatars' => 'Montrer les avatars dans le sujet',
	'Show_signatures' => 'Montrer les signatures dans le sujet',
	'Acronym' => 'Acronyme',
	'Acronyms' => 'Acronymes',
	'User_Number' => 'Utilisateur n°',
	'Member_Count' => 'Membres',
	'Reply_message' => 'Réponse',
	'Click_read_topic' => 'Cliquez %sici%s pour le lire', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Créer un avatar avec le Générateur d\'Avatar',
	'View_avatar_generator' => 'Générateur d\'Avatar',
	'Adv_Search' => 'Recherche Avancée',
	'Search_Explain' => 'Rechercher dans le Site',
	'Please_remove_install_contrib' => 'Veuillez vérifier que les dossier install/ et contrib/ ont bien été supprimés',
	'Search_Engines' => 'Robots des moteurs de recherche:',
	'Bots_browsing_forum' => 'Robots parcourant le forum:',
	'Debug_On' => 'Debug Actif',
	'Debug_Off' => 'Debug Inactif',
	'Page_Generation_Time' => 'Temps de génération',
	'Memory_Usage' => 'Mémoire',
	'SQL_Queries' => 'Requ&ecirc;tes SQL',
	'Search_new2' => 'Nouveaux Messages',
	'Search_new_p' => 'Messages depuis votre dernière visite',
	'Show_In_Portal' => 'Montrer sur la page d\'accueil',
	'Not_Auth_View' => 'Vous n\'&ecirc;tes pas autorisé &agrave; voir cette page.',
	'Site_Hist' => 'Historique du site',
	'Links' => 'Liens',
	'Print_View' => 'Version imprimable',
	'Browsing_topic' => 'Utilisateurs regardant ce sujet:',
	'SUDOKU' => 'Sudoku',
	'Bookmarks' => 'Marque-pages',
	'Set_Bookmark' => 'Mettre un marque-page sur ce sujet',
	'Remove_Bookmark' => 'Retirer le marque-page de ce sujet',
	'No_Bookmarks' => 'Vous n\'avez aucun marque-page',
	'Always_set_bm' => 'Ajouter automatiquement un marque-page après avoir posté',
	'Found_bookmark' => 'Vous avez %d marque-page.', // eg. Search found 1 match
	'Found_bookmarks' => 'Vous avez %d marque-pages.', // eg. Search found 24 matches
	'More_bookmarks' => 'Plus de marque-page ...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Qu\'est-ce que c\'est ?',
	'Rss_news_help_title' => 'Aide du Lecteur de Flux RSS',
	'Rss_news_help_header' => 'Que sont les Fluxs RSS et comment puis-je les utiliser ?',
	'Rss_news_help_explain' => 'Un Flux RSS est un résumé de certaines informations sur internet et qui est régulièrement mis &agrave; jour. Ces flux contiennent les principales informations ainsi que des liens pour voir les versions complètes. Si vous vous inscrivez &agrave; un Flux RSS, vous recevrez toutes les nouveautés et changements de ce site dans un sommaire.<br /><br /><b>Attention:</b> Pour s\'inscrire au Flux d\'un site, un <a href="http://www.rssowl.org/" target="new">Lecteur de Flux (en)</a> doit &ecirc;tre utilisé. Dans le cas contraire, si vous cliquez sur un lien RSS ou ATOM, le résultat apparaitra sous une forme non-formatée et vous pourrez avoir des problèmes d\'affichage.',
	'Rss_news_help_header_2' => '<b>Qu\'est-ce que RSS et Atom ?</b>',
	'Rss_news_help_explain_2' => 'RSS et Atom sont deux formats pour les fluxs. La plupart des lecteurs supportent les deux. &Agrave; l\'heure actuelle, nous supportons Atom 0.3 et RSS 2.0.',
	'Rss_news_help_header_3' => '<b>Comment puis-je utiliser un flux ?</b>',
	'Rss_news_help_explain_3' => 'Pour commencer vous devez avoir un lecteur de flux, trouvable par exemple sur <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a> (en).<br /><br />Après quoi vous pourrez, dans le programme:<br /><br /><b>1.</b> Rechercher des liens RSS de notre côté <b>ou</b><br /><b>2.</b> Ajouter un nouveau Flux &agrave; suivre:',
	'L_url_rss_explain' => 'Adresse pour tous les sujets du forum.',
	'L_url_rss_news_explain' => 'URL uniquement pour les Nouvelles du Forum.',
	'L_url_rss_atom_explain' => 'URL du Flux ATOM.',
	'Rss_news_help_rights' => 'Nous nous réservons le droit de supprimer n\'importe quel flux &agrave; n\'importe quel moment sans avertissement. Les flux de notre forum ne doivent pas &ecirc;tre utilisés en dehors de leur cadre d\'origine.',
	'Rss_news_feeds' => 'Fluxs RSS des Nouvelles',

	'Quick_Reply' => 'Réponse',
	'Mod_CP_sticky2' => 'Post-It',
	'Mod_CP_announce2' => 'Annonce',
	'Mod_CP_global2' => 'Rendre Global',
	'Mod_CP_normal2' => 'Rendre Normal',

	'Search_Flood_Error' => 'Vous ne pouvez faire une recherche si vite après la précédente. Veuillez réessayer dans un court instant.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Ces champs ont été crées par les administrateurs. Ils peuvent &ecirc;tre, ou non, visibles publiquement. Les champs marqués d\'un astérisque (*) sont obligatoires.',
	'and' => ' et ',
// END Custom Profile Fields MOD

	'dsbl' => 'Votre adresse mail est sur une <a href="%url%">Liste Noire basée sur le DNS</a>. <br />Votre tentative d\'inscription a été bloquée.',
	'Emails_Only_To_Admins_Error' => 'Vous ne pouvez envoyer des mails qu\'aux administrateurs.',
	'Wordgraph' => 'Mots-Clefs',
	'Viewing_wordgraph' => 'Regarde les Mots-Clefs',
	'Links_For_Guests' => '<b>Vous devez &ecirc;tre inscrit pour voir ce lien</b>',
	'New' => 'N',
	'New_Label' => 'Nouveaux',
	'New_Messages_Label' => 'Nouveaux Messages',
	'Show_Personal_Gallery' => 'Galerie personnelle',
	'Login_Status' => 'Statut \'En ligne\'',
	'Login_Hidden' => 'Invisible',
	'Login_Visible' => 'Visible',
	'Login_Default' => 'Par défaut',
	'ERRORS_NOT_FOUND' => 'L\'adresse demandée n\'a pas pu &ecirc;tre trouvée sur le serveur',
	'ERRORS_000' => 'Erreur inconnue',
	'ERRORS_000_FULL' => 'L\'adresse a retourné un numéro d\'erreur inconnu.<br /> L\'erreur a été enregistré dans le fichier journal et nous allons tenter de corriger le problème.',
	'ERRORS_400' => 'Error 400',
	'ERRORS_400_FULL' => 'L\'adresse n\'est pas valide.',
	'ERRORS_401' => 'Error 401 - Erreur d\'autorisation',
	'ERRORS_401_FULL' => 'Vous n\'&ecirc;tes pas autorisé a voir cette adresse.',
	'ERRORS_403' => 'Error 403',
	'ERRORS_403_FULL' => 'L\'accès a cette page est interdit.',
	'ERRORS_404' => 'Error 404 - Fichier Introuvable',
	'ERRORS_404_FULL' => 'Le fichier demandé n\'a pas été trouvé. Vous avez peut-&ecirc;tre fait une erreur dans l\'adresse ou ce que vous cherchez a pu &ecirc;tre retiré.',
	'ERRORS_500' => 'Error 500 - Erreur de configuration',
	'ERRORS_500_FULL' => 'L\'adresse que vous avez entré contient une erreur de configuration.<br />L\'erreur a été enregistrée dans le fichier journal et nous allons tenter de corriger le problème le plus vite possible.',
	'ERRORS_EMAIL_SUBJECT' => 'Erreurs: ',
	'ERRORS_EMAIL_ADDRRESS_PREFIX' => 'Erreurs !',
	'ERRORS_EMAIL_BODY' => 'Une erreur est survenue sur votre site. Veuillez vérifier les logs.',
	'Remote_avatar_no_image' => 'L\'image %s n\'existe pas',
	'Remote_avatar_error_filesize' => 'L\'image est trop lourde (maximum: %d Bytes)',
	'Remote_avatar_error_dimension' => 'L\'image est trop grande (maximum: %d x %d pixels)',
	'How_Many_Chatters' => 'Il y a actuellement <b>%d</b> utilisateurs sur le Chat.',
	'Who_Are_Chatting' => '<b>%s</b>',
	'Click_to_join_chat' => 'Cliquez pour rejoindre le chat',
	'ChatBox' => 'ChatBox',
	'log_out_chat' => 'Vous avez bien quitté la Chatbox ',
	'Send' => 'Envoyer',
	'Login_to_join_chat' => 'Connectez-vous pour rejoindre le Chat',

// Hacks List
/* General */
	'Hacks_List' => 'Crédits',
	'Page_Desc' => 'Ce module vous permet d\'ajouter/éditer/supprimer la liste des crédits pour les hacks/modifications installées sur votre forum. Ils sont affichés aux utilisateurs lorsqu\'ils visitent la page credits.php',
	'Deleted_Hack' => 'Les crédits du module %s ont été supprimés de la liste.<br />',
	'Updated_Hack' => 'Les crédits du module %s ont été mis &agrave; jour.<br />',
	'Added_Hack' => 'Informations sur le module %s ajoutées.<br />',
	'Status' => 'Statut',
	'No_Website' => 'Aucun site web disponible.',
	'No_Hacks' => 'Aucun crédit &agrave; afficher.',
	'Add_New_Hack' => 'Ajouter un Crédit',
	'User_Viewable' => 'Cacher de la Liste des Utilisateurs ?',
	'Hack_Name' => 'Nom du Module',
//	'Description' => 'Description',
	'Required' => 'Nécéssaire',
	'Author_Email' => 'Mail de l\'Auteur',
	'Version' => 'Version',
	'Download_URL' => 'Télécharger la Localisation',

/* Errors */
	'Error_Hacks_List_Table' => 'Erreur lors de la requ&ecirc;te sur la table des hacks.',
	'Required_Field_Missing' => 'Vous n\'avez pas entré toutes les informations nécéssaires.',
	'Error_File_Opening' => 'Impossible d\'ouvrir le fichier %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Dernière Image', // Album Addon
	'Random_pic' => 'Image Aléatoire', // Album Addon
	'Click_enlarge_pic' => 'Cliquez sur l\'image pour l\'agrandir',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Dernière adresse IP utilisée',
	'Last_Used_OS' => 'Système d\'Exploitation',
	'Last_Used_Browser' => 'Navigateur',
	'Last_Used_Referer' => 'Page Lien',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Administrateurs',
	'Users_Mods' => 'Modérateurs',
	'Users_Global_Mods' => 'Modérateurs Globaux',
	'Users_Regs' => 'Utilisateurs',
	'Users_Guests' => 'Invités',
	'Users_Hidden' => 'Masqués',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Style' => 'Style',
	'User_Contacts' => 'Contacts',
	'Memberlist_Users_Display' => 'Utilisateurs par page:',
	'SORT_FAST' => 'Rapide',
	'SORT_STANDARD' => 'Standard',
	'SORT_RANK' => 'Rang',
	'SORT_STAFF' => 'Équipe',
	'SORT_STYLE' => 'Style',
	'SORT_LASTLOGON' => 'Dernière Connexion',
	'SORT_BIRTHDAY' => 'Anniversaire',
	'SORT_ONLINE' => 'En ligne',
	'ASCENDING' => 'Ascendant',
	'DESCENDING' => 'Descendant',
	'LESS_THAN' => 'Moins que',
	'EQUAL_TO' => 'Égal &agrave;',
	'MORE_THAN' => 'Plus que',
	'BEFORE' => 'Avant',
	'AFTER' => 'Après',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Équipe',
	'Rank' => 'Rang',
	'Rank_Header' => 'Rangs',
	'Rank_Image' => 'Image du Rang',
	'Rank_Posts_Count' => 'Rang par nombre de messages',
	'Rank_Days_Count' => 'Rang par ancienneté (jours)',
	'Rank_Min_Des' => 'Nombre minimum par messages/jours',
	'Rank_Min_M' => 'Messages minimum',
	'Rank_Max_M' => 'Messages maximum',
	'Rank_Min_D' => 'Ã‚ge minimum (jours)',
	'Rank_Max_D' => 'Ã‚ge maximum (jours)',
	'Rank_Special' => 'Rang Spécial',
	'Rank_Special_Guest' => 'Rang spécial pour les invités',
	'Rank_Special_Banned' => 'Rang spécial pour les utilisateurs bannis',
	'Current_Rank_Image' => 'Image actuelle du rang',
	'No_Rank' => 'Pas de rang',
	'No_Rank_Image' => 'Pas d\'image de rang',
	'No_Rank_Special' => 'Pas de rang spécial assigné',
	'Memberlist_Administrator' => 'Administrateur',
	'Memberlist_Moderator' => 'Modérateur',
	'Memberlist_User' => 'Utilisateur',
	'Guest_User' => 'Invité',
	'Banned_User' => 'Bannis',
	'Rank1_title' => 'Titre du Rang 1',
	'Rank2_title' => 'Titre du Rang 2',
	'Rank3_title' => 'Titre du Rang 3',
	'Rank4_title' => 'Titre du Rang 4',
	'Rank5_title' => 'Titre du Rang 5',
// Mighty Gorgon - Multiple Ranks - END

// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Menu',
	'MAIN_LINKS' => 'Liens Principaux',
	'NEWS_LINKS' => 'Nouvelles',
	'INFO_LINKS' => 'Informations',
	'USERS_LINKS' => 'Groupes&amp;Membres',
	'SELECT_STYLE' => 'Style',
	'SELECT_LANG' => 'Langue',
	'RSS_FEEDS' => 'Fluxs RSS',
	'SPONSORS_LINKS' => 'Sponsors',
	'TOOLS_LINKS' => 'Outils',
	'HelpDesk' => 'Bureau d\'Aide',
	'AvatarGenerator' => 'Generateur d\'Avatar',
	'DBGenerator' => 'Generateur SQL &agrave; PHP',

	'LINK_ACP' => 'PA',
	'LINK_CMS' => 'CMS', 
	'LINK_HOME' => 'Accueil', 
	'LINK_PROFILE' => 'Profil', 
	'LINK_FORUM' => 'Forum',
	'LINK_BOARDRULES' => 'Règles',
	'LINK_FAQ' => 'FAQ',
	'LINK_SEARCH' => 'Recherche',
	'LINK_SITEMAP' => 'Plan du site',
	'LINK_ALBUM' => 'Album',
	'LINK_CALENDAR' => 'Calendrier',
	'LINK_DOWNLOADS' => 'Téléchargements',
	'LINK_BOOKMARKS' => 'Marque-pages',
	'LINK_DRAFTS' => 'Brouillons',
	'LINK_UPLOADED_IMAGES' => 'Vos images',
	'LINK_AJAX_SHOUTBOX' => 'Chat',
	'LINK_LINKS' => 'Liens',
	'LINK_CONTACT_US' => 'Nous Contacter',
	'LINK_SUDOKU' => 'Sudoku',

	'LINK_NEWS_CAT' => 'Catégories de Nouvelles',
	'LINK_NEWS_ARC' => 'Archives des Nouvelles',
	'LINK_NEW_MESSAGES' => 'Nouveaux Nessages',
	'LINK_DISPLAY_UNREAD_S' => 'Non lus',
	'LINK_DISPLAY_MARKED_S' => 'Marqués',
	'LINK_DISPLAY_PERMANENT_S' => 'Toujours lus',
	'LINK_DIGESTS' => 'Lettres d\'information',

	'LINK_CREDITS' => 'Crédits',
	'LINK_REFERERS' => 'Liens vers le Site',
	'LINK_VIEWONLINE' => 'Utilisateurs en ligne',
	'LINK_STATISTICS' => 'Statistiques',
	'LINK_DELETE_COOKIES' => 'Supprimer ses Cookies',

	'LINK_MEMBERLIST' => 'Liste des Membres',
	'LINK_USERGROUPS' => 'Groupes d\'Utilisateur',
	'LINK_RANKS' => 'Rangs',
	'LINK_STAFF' => 'Équipe',
// Mighty Gorgon - Nav Links - END

	'Activity' => 'Jeux',
	'Games' => 'Jeux',
	'Trohpy' => 'Trophés',
	'quick_links_games' => 'Menu des Jeux',

	'By' => 'Par',
	'No_Icon_Image' => 'Pas d\'icône',
	'Change_Style' => 'Style',
	'Change_Lang' => 'Langue',
	'Permissions_List' => 'Liste des Permissions',
	'IP_TEAM' => 'L\'équipe d\'IcyPhoenix',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'Prévision Météo',
	'ErrorNotFound' => 'Fichier introuvable !',
	'MGC_Users_Online' => 'MGC Utilisateurs en Ligne',
	'MGC_User_Servertime' => 'Date',
	'MGC_User_Nickname' => 'Nom',
	'MGC_User_Server' => 'Serveur',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'Version MGC',

	'Country_Flag' => 'Drapeau du pays',
	'Select_Country' => 'Sélectionnez votre pays',
	'Extra_profile_info' => 'Informations Supplémentaires',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Vous pouvez ajouter plus d\'informations &agrave; propos de vous ou de vos occupations. Vous pouvez aussi ajouter des photos. Vous pouvez utilisez certains BBCodes comme lorsque vous postez, ou que vous modifiez votre signature.',
	'Extra_window' => 'Ouvrir dans une fen&ecirc;tre séparée',
	'Extra_too_long' => 'Votre champ supplémentaire est trop long (maximum: <b>%d</b> caractères)',
	'UserLike' => 'L\'utilisateur aime',
	'UserDisLike' => 'L\'utilisateur n\'aime pas',
	'UserLikeIns' => 'Trois choses que vous aimez',
	'UserDisLikeIns' => 'Trois choses que vous n\'aimez pas',
	'UserPhone' => 'Numéro de Téléphone',
	'UserSport' => 'Sports',
	'UserMusic' => 'Groupes de Musiques',
	'UserNoInfo' => 'Aucune information disponible',
	'LAST_SEEN' => 'Dernière Connexion',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'Gérer le CMS',
	'CMS_CONFIG' => 'Configuration',
	'CMS_SETTINGS' => 'Options',
	'CMS_ACP' => 'Éditer cette page',
	'CUSTOM_PAGE' => 'Personnaliser la page',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Sujets Similaires',
	'Chat' => 'Chat',
	'DIGESTS' => 'Lettres d\'information',

	'CPL_REG_INFO_EXPLAIN' => 'Nom d\'utilisateur, adresse mail et mot de passe',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Informations générales (messenger, anniversaire, intér&ecirc;ts et autres informations)',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Utilisateurs ayant regardé votre profil',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Un avatar est une petite image que vous pouvez lier a votre pseudo',
	'CPL_SIG_EDIT_EXPLAIN' => 'Votre signature: vous pouvez définir un petit bloc de texte qui sera affiché en bas de vos messages',
	'CPL_PREFERENCES_EXPLAIN' => 'Préférences sur l\'envoi et la lecture de messages',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Préférences sur la date, le thème et la langue',
	'Calendar_settings_EXPLAIN' => 'Options du Calendrier',
	'Hierarchy_setting_EXPLAIN' => 'Options des sous-forums et des séparations de types de sujet',
	'LOGIN_SEC_EXPLAIN' => 'Si activée, cette section vous permet de surveiller toutes les connexions sur votre nom d\'utilisateur.',
	'CPL_OWN_POSTS_EXPLAIN' => 'Rechercher vos messages',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Visiter votre galerie personnelle',
	'CPL_INBOX_EXPLAIN' => 'Bo&icirc;te de réception: Contient les messages privés re&ccedil;us',
	'CPL_SAVEBOX_EXPLAIN' => 'Messages sauvegardés: Contient les messages privés sauvegardés',
	'CPL_OUTBOX_EXPLAIN' => 'Bo&icirc;te d\'envoi: Contient les messages privés envoyés, mais qui n\'ont pas encore été lus',
	'CPL_SENTBOX_EXPLAIN' => 'Messages Envoyés: Contient les messages privés que vous avez envoyé et qui ont ét&é lus',
	'CPL_BOOKMARKS_EXPLAIN' => 'Liste de tous les marque-pages que vous avez placés sur les sujets',
	'WATCHED_TOPICS_EXPLAIN' => 'Liste de tous les sujets que vous surveillez',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'Les forums auxquels vous avez souscrits pour &ecirc;tre informé lors de création de sujet',
	'DIGESTS_EXPLAIN' => 'Les lettres d\'information sont des e-mails envoyés périodiquement et contenant la liste des nouveaux message posté dans le forum',
	'DRAFTS_EXPLAIN' => 'Gérer vos Brouillons',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Shoutbox',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Archive du Chat',
	'Shoutbox_flooderror' => 'Désolé, vous ne pouvez envoyer un nouveau message si rapidement après le précédent. Veuillez re-essayer dans un court instant.',
	'Shoutbox_no_auth' => 'Désolé, mais seuls les utilisateurs enregistrés peuvent utiliser la Shoutbox',
	'Shoutbox_loading' => 'Chargement ...',
// Errors
	'Shoutbox_unable' => 'Désolé, cette action n\'a pu &ecirc;tre effectuée. Veuillez réessayer.',
	'Shoutbox_empty' => 'Aucun Message',
	'Shoutbox_no_mode' => 'Aucun mode valide spécifié',
// Archive
	'Shouts' => 'Messages',
	'Statistics' => 'Statistiques',
	'Total_shouts' => 'Tous les Messages',
	'Stored_shouts' => 'Messages Sauvegardés',
	'My_shouts' => 'Mes Messages',
	'Today_shouts' => 'Messages des 24 dernières heures',
	'Top_Ten_Shouters' => 'Top 10',
// Online list
	'Online_total' => 'Total',
	'Online_registered' => 'Utilisateurs',
	'Online_guests' => 'Invités',
	'Who_is_Chatting' => 'Qui est sur la chatbox ?',
	'Shoutbox_online_explain' => 'Les données sont basés sur les utilisateurs actifs ces 30 dernières secondes',
	'Start_Private_Chat' => 'Cliquez sur un nom pour commencer une discussion privée',
	// chat rooms
	'Shout_rooms' => 'Salons de chat',
	'Admin_rooms' => 'Tous les salons',
	'Public_room' => 'Salon public',
	'Private_room' => 'Salon privé',
	'My_id' => 'Moi-même',
// Ajax Shoutbox - END

	'Contact_us' => 'Nous Contacter',
	'Contact_us_explain' => 'En utilisant cette page vous pouvez nous envoyer un mail',
	'Session_invalid' => 'Session invalide. Veuillez réenvoyer le formulaire.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' Ce nom d\'utilisateur est trop court',
	'Reg_Username_Long' => ' Ce nom d\'utilisateur est trop long',
	'Reg_Username_Taken' => ' Ce nom d\'utilisateur n\'est pas disponible',
	'Reg_Username_Free' => ' Ce nom d\'utilisateur est disponible',
	'Reg_PWD_Short' => 'Ce mot de passe est trop court',
	'Reg_PWD_Easy' => 'Ce mot de passe est trop simple',
	'Reg_PWD_OK' => 'Ce mot de passe est bon',
	'Reg_Email_Invalid' => ' L\'adresse mail est invalide ou déj&agrave; utilisée',
	'Reg_Email_OK' => ' L\'adresse mail est bonne',

// Moved here from lang_adv_time.php
	'time_mode' => 'Gestion de l\'Heure',
	'time_mode_text' => 'Le décalage horaire du &agrave; l\'heure d\'été (DST) est la différence entre l\'heure o&ugrave; le soleil dans votre pays et l\'heure o&ugrave; il devrait se lever selon votre fuseau horaire. Cette différence varie de 0 &agrave; 120 minutes, généralement 60 mins.',
	'time_mode_auto' => 'Modes automatiques ...',
	'time_mode_full_pc' => 'Heure de votre ordinateur',
	'time_mode_server_pc' => 'Heure universelle du serveur, Fuseau horaire/DST<br /><span style="margin-left: 25">de votre ordinateur</span>',
	'time_mode_full_server' => 'Heure locale du serveur',
	'time_mode_manual' => 'Mode manuel...',
	'time_mode_dst' => 'Activer l\'heure d\'été',
	'time_mode_dst_server' => 'par le serveur',
	'time_mode_dst_time_lag' => 'Décalage Horaire',
	'time_mode_dst_mn' => 'min',
	'time_mode_dst_mn_explain' => 'Temps exprimé en minutes',
	'time_mode_timezone' => 'Fuseau horaire',

	'dst_time_lag_error' => 'Erreur avec la valeur du décalage horaire. Vous devez entrer un nombre entre 0 et 120.',

	'dst_enabled_mode' => ' [Heure d\'été activée]',
	'full_server_mode' => 'Heure synchronisée avec l\'heure du serveur',
	'server_pc_mode' => 'Heure synchronisée avec le serveur - Fuseau horaire/DST avec votre ordinateur',
	'full_pc_mode' => 'Heure synchronisée avec celle de votre ordinateur',

	'Smileys_Per_Page' => 'Smileys par Page',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Historique du Site',
	'Month' => 'Mois',
	'Week_day' => 'Jour de la semaine',
	'Not_availble' => 'Non disponible',
	'Total_users' => 'Utilisateurs maximum',
	'Reg_users' => 'Utilisateurs enregistrés',
	'Hidden_users' => 'Utilisateurs invisibles',
	'Guests_users' => 'Invités',
	'New_users' => 'Nouveaux utilisateurs',
	'New_topics' => 'Nouveaux sujets',
	'New_posts_reply' => 'Messages/réponses',
	'Most_online' => 'Record de connexions simultannées %s',
	'Most_online_week' => 'Record de connexions simultannées les 7 derniers jours',
	'Last_24' => 'Record de connexions simultannées les %s dernières heures',
	'Top_Posting_Users' => 'Utilisateurs postant le plus',
	'Top_Posting_Users_week' => 'Utilisateurs postant le plus cette semaine [%s]',
	'Rank' => 'Rang',
	'Percent' => 'Pourcentage',
	'Graph' => 'Graphique',
	'Top_Visiting_Users' => 'Utilisateurs le plus longtemps connectés',
/* lang_site_hist.php - END */

/* lang_referers.php - BEGIN */
	'REFERERS' => 'Référencement Web',
	'VIEWING_REFERERS' => 'Regarde le Référencement',
	'REFERERS_TITLE' => 'Gestion des Référencement Web',
	'REFERERS_CLEARED' => 'Référencement Nettoyé',
	'REFERERS_CLEAR' => 'Tout Supprimer',
	'CLICK_RETURN_REFERERS' => 'Cliquez %sIci%s pour revenir aux Référents',
	'REFERER_HOST' => 'Hôte',
	'REFERER_URL' => 'Lien',
	'REFERER_T_URL' => 'Lien Visité',
	'REFERER_IP' => 'IP',
	'REFERER_HITS' => 'Cliques',
	'REFERER_FIRST' => 'Première Visite',
	'REFERER_LAST' => 'Dernière Visite',
	'REFERER_DELETE' => 'Supprimer',
	'REFERER_KILL' => 'Retirer de la BDD (utilisez * comme joker)',
	'REFERER_GROUP_BY' => 'Grouper par',
/* lang_referers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_DAYS' => '%d Jours',
	'X_WEEKS' => '%d Semaines',
	'X_MONTHS' => '%d Mois',
	'X_YEARS' => '%d Années',

	'Confirm_delete_user' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cet utilisateur ?',
	'Prune_no_users' => 'Aucun utilisateur supprimé',
	'Prune_users_number' => 'Les %d utilisateurs suivant ont été supprimés:',

	'Prune_user_list' => 'Utilisateurs qui vont &ecirc;tre supprimés',
	'Prune_on_click' => 'Vous &ecirc;tes sur le point de supprimer %d utilisateurs. &Ecirc;tes-vous s&ucirc;r ?',
	'Prune_Action' => 'Cliquez sur le lien ci-dessous pour éxécuter l\'action',
	'Prune_users_explain' => 'Délestage d\'utilisateurs!. Vous pouvez cliquer sur l\'un des trois liens: Supprimer les anciens utilisateurs qui n\'ont jamais posté, Supprimer les anciens utilisateurs qui ne se sont jamais connecté, Supprimer les anciens utilisateurs qui n\'ont jamais activé leur compte.<br /><b>Note:</b> Il n\'est pas possible de revenir en arrière.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Générateurs d\'Avatar',
	'Available' => 'Avatars disponibles',
	'Random' => 'Aléatoire',
	'Avatar_Text' => 'Veuillez entrer le texte que vous voulez avoir sur votre Avatar:',
	'Avatar_Preview' => 'Prévisualiser l\'Avatar',
	'Your_Avatar' => 'Votre Avatar',
	'Submit_Avatar' => 'Enregistrer l\'avatar',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Uploading' => 'En cours d\'envoie...',
	'Upload_Image_Local' => 'Envoyer une image',
	'Uploaded_Images_Local' => 'Mes images',
	'Upload_Image_Local_Explain' => 'Sélectionnez le fichier a envoyer',
	'Uploaded_Image_Success' => 'L\'image a été correctement envoyée.',
	'Uploaded_Image_BBC' => 'Vous pouvez utiliser ce BBCode pour poster cette image.',
	'Upload_Image_Empty' => 'Vous devez sélectionner un fichier &agrave; envoyer vous savez !', //"vous ne pouvez envoyer de l'air" en anglais o/
	'Upload_File_Too_Big' => 'Le fichier que vous essayez d\'envoyer est trop grand ! La taille maximum autorisée est de:',
	'Upload_File_Error' => 'Erreur Inconnue',
	'Upload_File_Error_Size' => 'Fichier trop lourd !',
	'Upload_File_Error_Type' => 'Extension non autorisée !',
	'Upload_File_Type_Allowed' => 'Seuls ces types de fichier peuvent &ecirc;tre envoyées',
	'Upload_File_Max_Size' => 'La taille maximum pour un fichier est',
	'Upload_Insert_Image' => 'Insérer le BBCode',
	'Upload_Close' => 'Fermer',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'Aucun article',

	'Email_confirm' => 'Confirmez votre adresse email',
	'Email_mismatch' => 'Les adresses email entrées ne correspondent pas.',

	'View_ballot' => 'Voir le Scrutin',
	'Full_edit' => 'Passer en édition complète',
	'Save_changes' => 'Sauvegarder',
	'No_subject' => '(Aucun Titre)',
	'Edit_quick_post' => 'Éditer rapidement ce message',
	'AJAX_search_results' => 'Une recherche rapide a trouvée %s sujets contenant les mots-clefs de votre titre. Cliquez ici pour les voir.',
	'AJAX_search_result' => 'Une recherche rapide a trouvée un sujet contenant les mots-clefs de votre titre. Cliquez ici pour le voir.',
	'More_matches_username' => 'Plus d\'un nom d\'utilisateur correspond avec votre requ&ecirc;te. Merci d\'en sélectionner un dans la liste ci-dessus.',
	'No_username' => 'Vous devez entrer un nom d\'utilisateur.',
	'AJAX_quick_search_results' => 'Une recherche rapide a trouvée %s sujets avec ces mots-clefs.<br />Vous pouvez voir le premier résultat sur votre droite.<br />Cliquez sur RECHERCHE pour afficher la liste complète.',
	'AJAX_quick_search_result' => 'Une recherche rapide a trouvée un sujet avec ces mots-clefs.<br />Le résultat est sur votre droite.',

	'Icon_Description' => 'Description des Images',

	'Feature_Disabled' => 'Cette fonctionnalité a été désactivée.',

// Réenvoyer le mail d'activation - DéBUT
	'Resend_activation_email' => 'Réenvoyer le mail d\'activation',
	'Invalid_activation' => 'L\'activation de compte peut uniquement &ecirc;tre faite par les administrateurs.',
	'No_actkey' => 'Il n\'y a pas de clef d\'activation pour votre compte. Veuillez contacter l\'administrateur du forum pour plus d\'information.',
	'Send_actmail_flood_error' => 'Impossible de faire une requ&ecirc;tre si rapidement après la dernière, veuillez réessayer un petit peu plus tard.',
	'Resend_activation_email_done' => 'Le mail d\'activation a bien été réenvoyé. Vérifiez vos mails pour plus d\'information.',
// Réenvoyer le mail d'activation - FIN

	'Bots_Group' => 'Robots',
	'Bots_Color' => 'Couleur des robots',
	'Active_Users_Group' => 'Utilisateurs actifs',
	'Active_Users_Color' => 'Couleur des utilisateurs actifs',
	'Group_Default_Membership' => 'Groupe par défaut',
	'Group_Default_Membership_Explain' => 'Choisissez le rang par défaut des utilisateurs afin de leur assigner un rang et une couleur.',
	'User_Color' => 'Couleur de l\'Utilisateur',
	'User_Color_Explain' => 'Si vous spécifiez une couleur pour cet utilisateur, elle sera remplacée par celle du groupe si vous en précisez un dans le cadre ci-dessus. Utilisez le code hexadécimal sans dièse (<b>#</b>). Par exemple: ff0000 est le code pour du rouge.',
	'No_Groups_Membership' => 'No Membership',
	'No_Default_Group' => 'Aucun Groupe par Défaut',
	'Group_members_updated' => 'Membres du groupes mis &agrave; jour avec succès.',
	'Colorize_All' => 'Attribuer la couleur &agrave; tous les membres',
	'Colorize_Selected' => 'Attribuer la couleur aux membres sélectionnés',

	'CompanyWho' => 'Qui sommes-nous',
	'CompanyWhere' => 'Comment nous Contacter',
	'CompanyServices' => 'Services',
	'CompanyProducts' => 'Produits',

	'ShareThisTopic' => 'Partager ce sujet',

	'Remove_cookies' => 'Supprimer les cookies de ce site',
	'Cookies_deleted' => 'Tous les cookies ont été supprimés. Vous &ecirc;tes maintenant déconnecté. <br />Pour terminer la suppression, redémarrez votre navigateur.',
	'Delete_cookies' => 'Supprimer les cookies',
	'cookies_confirm' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer tous vos cookies sur ce site ?<br /><br />Cette action vous déconnectera.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Brouillons',
	'Drafts_Action' => 'Action',
	'Drafts_Save' => 'Sauvegarder',
	'Drafts_Load' => 'Charger',
	'Drafts_Saved' => 'Ce brouillon &agrave; été sauvegardé',
	'Drafts_Loaded' => 'Ce brouillon &agrave; été chargé',
	'Drafts_No_Drafts' => 'Aucun brouillon sauvegardé',
	'Drafts_Delete_Sel' => 'Supprimer la sélection',
	'Drafts_Save_Question' => '<br /><br />&Ecirc;tes-vous s&ucirc;r de vouloir sauvegarder ce message en tant que brouillon ?<br /><br />Notez bien que seul le contenu du message sera sauvegardé, les options ne le seront pas.',
	'Drafts_Delete_Question' => '<br /><br />&Ecirc;tes-vous s&ucirc;r de vouloir supprimer les brouillons sélectionnés ?',
	'Drafts_Type' => 'Type de Brouillon',
	'Drafts_Subject' => 'Sujet Brouillon',
	'Drafts_NT' => 'Nouveau sujet',
	'Drafts_NM' => 'Répondre',
	'Drafts_NPM' => 'Message Privé',

	'CannotEditAdminsPosts' => 'Vous ne pouvez éditer les messages d\'un administrateur',
	'Random_Number' => 'Nombre Aléatoire',

	'New_download' => 'Un nouveau téléchargement &agrave; été envoyé ou mis &agrave; jour<br />Cliquez %sici%s pour le voir.',
	'Dl_bug_tracker' => 'Traqueur d\'Erreurs',
	'Downloads_ADV' => 'Téléchargements Avancés',

	'TopicUseful' => 'Avez-vous trouvé ce sujet utile ?',
	'Article' => 'Article',
	'Comments' => 'Commentaires',

	'Sitemap' => 'Plan du site',

	'Delete_My_Account' => 'Supprimer mon Compte',
	'Delete_My_Account_Explain' => 'Si vous voulez supprimer votre compte sur ce site, veuillez envoyer une requ&ecirc;te en utilisant ce formulaire et votre compte sera désactivé aussi vite que possible.<br />Veuillez spécifier "Suppression de compte" si vous souhaitez le supprimer complètement (et non le désactiver) et donnez, si possible, une raison en quelques mots.<br /><b> Attention:</b> les suppressions complètes sont irréversibles !',

	'KB_MODE_ON' => 'Activer le mode \'Base de Connaissances\'',
	'KB_MODE_OFF' => 'Désactiver le mode \'Base de Connaissances\'',

	'Go_To_Page_Number' => 'Aller &agrave; la page',

	'Admin_Emails' => 'Les administrateurs peuvent m\'envoyer des informations par mail',
	'Allow_PM_IN' => 'Autoriser les utilisateurs &agrave; m\'envoyer des messages privés',
	'Allow_PM_IN_Explain' => 'Notez que les administrateurs, les modérateurs ainsi que vos amis pourront toujours vous envoyer des messsages.',
	'Allow_PM_IN_SEND_ERROR' => 'Le message privé ne peut &ecirc;tre envoyé car le récepteur a fermé sa boite de réception.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
	'UCP_ZEBRA' => 'Amis & Ennemis',
	'UCP_ZEBRA_FOES' => 'Gestion des Ennemis',
	'UCP_ZEBRA_FRIENDS' => 'Gestion des Amis',

	'ADD_FOES' => 'Ajouter de nouveaux ennemis',
	'ADD_FOES_EXPLAIN' => 'Vous pouvez ajouter plusieurs personnes, une par ligne.',
	'YOUR_FOES' => 'Vos Ennemis',
	'YOUR_FOES_EXPLAIN' => 'Pour retirer des utilisateurs, sélectionné leurs noms et cliquez sur "envoyer".<br />Astuce: Utilisez "ctrl" pour sélectionner/déselectionner plusieurs personnes.',
	'FOE_MESSAGE' => 'Message d\'un Ennemi',
	'FOES_EXPLAIN' => 'Les ennemis sont les utilisateurs qui seront ignorés par défaut. Leurs messages ne seront pas totalement visibles. Ils ne pourront pas vous envoyer de messages privés. Vous ne pouvez ignorer les modérateurs et les administrateurs.',
	'FOES_UPDATED' => 'Votre liste d\'ennemis a été correctement mise &agrave; jour.',
	'FOES_UPDATE_ERROR' => 'Votre liste d\'ennemis n\'a PAS été mise &agrave; jour.',
	'NO_FOES' => 'Vous n\'avez pas d\'ennemis',

	'ADD_FRIENDS' => 'Ajouter de nouveaux amis',
	'ADD_FRIENDS_EXPLAIN' => 'Vous pouvez ajouter plusieurs personnes, une par ligne.',
	'YOUR_FRIENDS' => 'Vos amis',
	'YOUR_FRIENDS_EXPLAIN' => 'Pour retirer des utilisateurs, sélectionné leurs noms et cliquez sur "envoyer".<br />Astuce: Utilisez "ctrl" pour sélectionner/déselectionner plusieurs personnes.',
	'FRIEND_MESSAGE' => 'Message d\'un ami',
	'FRIENDS' => 'Amis',
	'FRIENDS_EXPLAIN' => 'Les amis sont les utilisateurs qui peuvent communiquer avec vous fréquemment. Si le thème le permet, leurs messages peuvent &ecirc;tre en surbrillance.',
	'FRIENDS_UPDATED' => 'Votre liste d\'amis a été correctement mise &agrave; jour',
	'FRIENDS_UPDATE_ERROR' => 'Votre liste d\'amis n\'a pas été mise &agrave; jour.',
	'FRIENDS_ONLINE' => 'Connecté',
	'FRIENDS_HIDDEN' => 'Invisible',
	'FRIENDS_OFFLINE' => 'Déconnecté',
	'NO_FRIENDS' => 'Vous n\'avez pas d\'amis',
	'NO_FRIENDS_OFFLINE' => 'Aucun ami déconnecté',
	'NO_FRIENDS_ONLINE' => 'Aucun ami connecté',

	'Default' => 'Défaut',

	'Reserved_Author' => '[ INVISIBLE ]',
	'Reserved_Topic' => '[ SUJET R&Eacute;SERV&Eacute; ]',
	'Reserved_Post' => '[ MESSAGE R&Eacute;SERV&Eacute; ]',

	'THANKS_RECEIVED' => 'Remerciements re&ccedil;us',

	'RECENT_USER_ACTIVITY' => 'Activitée récente de l\'utilisateur',
	'USER_TOPICS_STARTED' => 'Sujets commencés',
	'USER_POSTS' => 'Messages écrits',
	'USER_TOPICS_VIEWS' => 'Sujets vus',
	'RECENT_USER_STARTED_TITLE' => 'commencé par %s',
	'RECENT_USER_STARTED_NAV' => 'Sujets commencés par %s',
	'RECENT_USER_POSTS_TITLE' => 'dont %s postés dans',
	'RECENT_USER_POSTS_NAV' => 'Sujets que %s a posté dans',
	'RECENT_USER_VIEWS_TITLE' => 'vus par %s',
	'RECENT_USER_VIEWS_NAV' => 'Sujets vus par %s',

	'WARN_NO_BUMP' => 'Vous &ecirc;tes le dernier posteur de ce sujet: vous ne pouvez écrire un nouveau message que toutes les 24 heures &agrave; moins que quelqu\'un ne réponde avant.',

	'LINK_THIS_TOPIC' => 'Envoyer un lien vers ce sujet',
	'LINK_URL' => 'Adresse',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Parcourir les Nouvelles postées',
	'TOPICS_POSTED' => 'Chercher les sujets commencés',
	'POSTS_POSTED' => 'Cherche tous les messages de l\'utilisateur',

	'ACCOUNT_DELETION_REQUEST' => '%s a demandé la suppresion de son compte.',

	'SORT_TOPICS' => 'Classer les sujets',
	'SORT_TOPICS_NEWEST' => 'Plus récent',
	'SORT_TOPICS_OLDEST' => 'Plus ancien',

	'EDIT_POST_DETAILS' => 'Éditer les détails du message',
	'CURRENT_POSTER' => 'Posteur actuel',
	'NEW_POSTER' => 'Nouveau posteur',
	'DETAILS_CHANGED' => '<b>Les détails du message ont été correctement édité.</b></span><br /><span class="postdetails">Cette fen&ecirc;tre se fermera d\'ici trois secondes.',

	'Redirect' => 'Redirection',
	'Redirect_to' => 'Si votre navigateur ne vous redirige pas automatiquement, cliquez %sici%s pour &ecirc;tre redirigé',

	'InProgress' => 'En cours',

	'HAPPY_BIRTHDAY' => 'Joyeux Anniversaire',

	'DOWNLOAD' => 'Télécharger',
	'DOWNLOADED' => 'Téléchargé',
	'FILESIZE' => 'Taille du fichier',
	'FILENAME' => 'Nom du fichier',
	'FILE_NOT_AUTH' => 'Vous n\'&ecirc;tes pas autorisé &agrave; télécharger ce fichier',
	'SHOW_POSTS_FROM' => 'Montrer les messages du',
	'SHOW_POSTS_TO' => 'au',

	'SEE_MORE_DETAILS' => 'Voir plus de détails',
	'UNKNOWN' => 'Inconnu',
	'MASS_PM' => 'MP de masse',
	'TEXT_FORMAT' => 'Format',
	'SENDER' => 'Envoyeur',
	'PM_NOTIFICATION' => 'Bonjour,<br /><br />Vous avez re&ccedil;u un nouveau message privé sur "{SITENAME}".<br /><br />Vous pouvez le voir en cliquant sur le lien suivant:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Recherche Google',
	'GSEARCH_ENGINE' => 'Utiliser le moteur de recherche Google',
	'SEARCH_WHAT' => 'Rechercher quoi ?',
	'SEARCH_WHERE' => 'Rechercher dans',
	'SEARCH_THIS_FORUM' => 'Chercher dans ce forum',
	'SEARCH_THIS_TOPIC' => 'Chercher dans ce sujet',
	'VF_ALL_TOPICS' => 'Tous les Sujets',

	'WHITE_LIST_MESSAGE' => 'Ce site demande une confirmation par mail pour activer votre compte. Veuillez vérifier que ce domaine est dans la liste blanche de votre système d\'anti-spam ou vous pourriez ne jamais recevoir le message d\'activation.',
	'CLICK_RETURN_HOME' => 'Cliquez %sici%s pour retourner &agrave; la page d\'accueil',

	'RATINGS' => 'Notations',

	'ERROR_TABLE' => 'Impossible de faire une requ&ecirc;te sur la table %s',

	'SMILEYS' => 'Smileys',
	'SMILEYS_NO_CATEGORIES' => 'Aucune catégorie définie',
	'SMILEYS_CATEGORY' => 'Catégorie',
	'SMILEYS_GALLERY' => 'Galerie des Smileys',
	'SMILEYS_STANDARD' => 'Smileys Standarts',

	'QUICK_LIST' => 'Liste complète',
	'NORMAL_LIST' => 'Liste normale',

	'RETURN_PAGE' => '%sRetourner &agrave; la page précedente%s',
	'FILE_NOT_FOUND' => 'Fichier introuvable',
	'FSOCK_DISABLED' => 'Fonction "FSOCK" désactivée',

	'MANAGEMENT' => 'Gestion',
	'SORT_ORDER' => 'Classer par',
	'SORT_DIR' => 'Ordre de classement',

	'CONTACTS' => 'Contacts',

	// Event Registration - BEGIN
	'Reg_Title' => 'Rejoindre l\'événement',
	'Post_Registration' => 'Inscription &agrave; l\'événement',
	'Add_registration' => 'Nouvel événement',
	'Add_reg_explain' => '&nbsp;&bull; Cochez "<b>Autoriser</b>" pour afficher le formulaire d\'inscription avec ce message. Décochez pour le cacher.<br />&nbsp;&bull; Cochez "<b>Remettre &agrave; zéro</b>" pour supprimer tous les membres actuellement inscrits.<br />&nbsp;&bull; Entrez un nombre dans "<b>Places</b>" pour limiter le nombre d\'inscriptions. Si vous entrez "0", ou que vous ne remplissez pas le champ, il n\'y aura pas de limite.',
	'reg_activate' => 'Autoriser',
	'reg_reset' => 'Remettre &agrave; zéro',
	'Reg_Insert' => 'Vous avez rejoint l\'événement.',
	'Reg_Change' => 'Inscription changée.',
	'Reg_Confirm' => 'Inscription confirmée.',
	'Reg_Unregister' => 'Inscription annulée.',
	'Reg_Max_Registrations' => 'La limite d\'utilisateurs pour cet événement est atteinte. Les inscriptions ne sont plus possibles.',
	'Reg_No_Slots_Left' => 'Aucune place restante pour s\'inscrire.',
	'Reg_One_Slot_Left' => 'Une place restante pour s\'inscrire.',
	'Reg_Slots_Left' => '%s places restantes pour s\'inscrire.',
	'Reg_Self_Unregister' => 'Se désinscrire',
	'Reg_Own_Confirmation' => 'Confirmation',
	'Reg_Own_Confirmed' => 'confirmé',
	'Reg_Green_Option' => 'Option verte',
	'Reg_Blue_Option' => 'Option bleue',
	'Reg_Red_Option' => 'Option rouge',
	'Reg_Value_Max_Registrations' => 'Places',
	'Reg_Do' => 'S\'inscrire',
	'Reg_Maybe' => 'Pas certain',
	'Reg_Dont' => 'Pas cette fois-ci',
	'Reg_Head_Username' => 'Utilisateur:',
	'Reg_Head_Time' => 'Date:',
	'Reg_for' => 'Autoriser les inscriptions pendant',
	'Reg_for_explain' => '[ Entrez 0 ou laissez blanc pour que les inscriptions ne finissent jamais ]',
	'Reg_no_options_specified' => 'Vous devez spécifier au moins une option.',
	'Reg_event_date' => '<b>Date de l\'événement: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Nous sommes désolé, mais le forum est actuellement en mode <b>lecture seule</b> ce qui veut dire que vous ne pouvez poster que si vous avez les droits suffisants. Veuillez réessayer plus tard.',

	// Tickets Submission - BEGIN
	'TICKET_CAT' => 'Categorie',
	// Tickets Submission - END

	'LIMIT_EDIT_TIME_WARN' => 'Désolé, mais vous ne pouvez éditer vos messages que durant les <b>%d</b> minutes suivant l\'envoie.',
	'CLEAN_NAME' => 'Nom simple (laissez vide pour une génération automatique)',
	'CLEAN_NAME_EXPLAIN' => 'Seuls les caractères alpha-numériques et les slashs sont autorisés',
	'TOPIC_TAGS' => 'Tags et Mots-Clefs',
	'TOPIC_TAGS_REPLACE' => 'Remplacer un tag',
	'TOPIC_TAGS_EXPLAIN' => 'Séparer chaque tag d\'une virgule',
	'TOPIC_TAGS_CLOUDS' => 'Nuage de Mots-Clefs',
	'TOPIC_TAGS_LIST' => 'Liste des Tags et Mots-Clefs',
	'TAG_COUNT' => 'Compteur',
	'TAG_TEXT' => 'Tag',
	'TAGS_TEXT' => 'Tags',
	'TAG_RESULTS' => 'Tag sélectionné : <b>%s</b>',
	'TAGS_SEARCH' => 'Recherche le Tag...',
	'TAGS_SEARCH_NO_RESULTS' => 'Aucun Tag trouvé!',
	'TAGS_NO_TAGS' => 'Aucun Tag n\'a été défini.',
	'TAGS_NO_TAG' => 'Le Tag spécifié n\'existe pas',

	'SQL_ERROR_OCCURRED' => 'Une erreur SQL est survenue durant le chargement de cette page. Merci de contacter l\'administrateur du site si ce problème persiste.',

	'PLUGIN_DISABLED' => 'This plugin is currently disabled.',

	'AJAX_SHOUTBOX' => 'Chat',
	'AJAX_SHOUTBOX_PVT' => 'Chat Privé',
	'AJAX_SHOUTBOX_PVT_LINK' => 'Chat direct avec cet utilisateur',
	'AJAX_SHOUTBOX_PVT_ALERT' => 'Vous avez une requ&ecirc;te de chat',

	// COMMON DB - BEGIN
	'SELECT_SORT_METHOD' => 'Trier par',
	'ORDER' => 'Méthode de classification',
	'SUBMIT' => 'Envoyer',
	'DATE' => 'Date',
	'USERID' => 'Identifiant de l\'Utilisateur',
	'USERNAME' => 'Nom d\'Utilisateur',
	'EMAIL' => 'Mail',
	'WEBSITE' => 'Site Web',
	'EDIT' => 'Éditer',
	'DELETE' => 'Supprimer',
	'YES' => 'Oui',
	'NO' => 'Non',

	'DB_ITEM_VIEW' => 'Voir',
	'DB_ITEM_UPDATED' => 'Mise &agrave; jour effectuée avec succès.',
	'DB_ITEM_ADD' => 'Ajouter',
	'DB_ITEM_ADDED' => 'Ajout effectué avec succès.',
	'DB_ITEM_REMOVED' => 'Suppression effectuée avec succès.',
	'DB_ITEM_NO_ITEMS' => '(vide)',
	'DB_ITEM_CLICK_VIEW_ITEM' => 'Cliquez %sici%s pour voir les données ajoutées.',
	'DB_ITEM_CLICK_RETURN_ITEMS' => 'Cliquez %sici%s pour retourner &agrave; la liste.',
	// COMMON DB - END

	'LOGIN_ATTEMPTS_EXCEEDED' => 'Vous avez dépassé le nombre maximum de tentatives de connexion (%s). Vous ne pouvez plus vous connecter durant les prochaines %s minutes.',
	'LOGIN_CONFIRM_EXPLAIN' => 'Pour éviter le bruteforcing des comptes, le forum vous demande un code de confirmation après un certain nombre de tentatives de connexion. Vous devez recopier le code que vous voyez ci-dessous. Si vous &ecirc;tes handicapé visuellement ou que vous ne pouvez pas voir le code, %scontactez un Administrateur%s.',
	'LOGIN_ERROR_ATTEMPTS' => 'Vous avez dépassé le nombre maximum de tentatives de connexion. En plus du nom de compte et du mot de passe vous devez maintenant aussi entrer le code de l\'image que vous voyez ci-dessous.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE' => 'Vous n\'avez pas été autorisé par Apache.',
	'LOGIN_ERROR_PASSWORD' => 'Vous avez spécifié un mot de passe incorrect. Veuillez le vérifier et réessayer. Si le problème persiste, contactez un %sAdministrateur%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT' => 'Il n\'a pas été possible de convertir votre mot de passe lors de la mise &agrave; jour du site. Veuillez %sdéfinir un nouveau mot de passe%s. Si le problème persiste, %scontactez un Administrateur%s.',
	'LOGIN_ERROR_USERNAME' => 'Vous avez spécifié un nom d\'utilisateur incorrect. Veuillez le vérifier et réessayer. Si le problème persiste, contactez un %sAdministrateur%s.',
	'NO_PASSWORD_SUPPLIED' => 'Vous ne pouvez pas connecter sans mot de passe.',
	'ACTIVE_ERROR' => 'Le nom d\'utilisateur est actuellement inactif. Si vous avez des problèmes avec l\'activation, %scontactez un Administrateur%s.',

	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'GB' => 'GB',

	'NO_EVENTS' => 'Aucun évènement prévu',
	'EVENT_START_DATE' => 'Date de Départ',
	'EVENT_START_TIME' => 'Heure de Départ',
	'EVENT_END_DATE' => 'Date de Fin',
	'EVENT_END_TIME' => 'Heure de Fin',
	'EVENT_TITLE' => 'Évènement',
	'EVENT_FORUM' => 'Catégorie',

	'MAX_OPTIONS_SELECT' => 'Vous pouvez sélectionner jusqu\'&agrave; <strong>%d</strong> options',
	'MAX_OPTION_SELECT' => 'Vous pouvez sélectionner <strong>une</strong> option',
	'NO_POLLS' => 'Aucun Sondage',
	'NO_VOTE_OPTION' => 'Vous devez choisir une option pour voter.',
	'NO_VOTES' => 'Aucun Vote',
	'POLL_ENDED_AT' => 'Sondage se terminant le %s',
	'POLL_MAX_OPTIONS' => 'Options max',
	'POLL_MAX_OPTIONS_EXPLAIN' => 'Nombre maximum d\'options par utilisateur',
	'POLL_NO_GUESTS' => 'Désolé, mais les invités ne peuvent voter',
	'POLL_RUN_TILL' => 'Sondage continuant jusqu\'au %s',
	'POLL_VOTE_CHANGE' => 'Autoriser le changement de choix',
	'POLL_VOTED_OPTION' => 'Vous avez voté pour cette option',
	'TOO_MANY_VOTE_OPTIONS' => 'Vous ne pouvez pas choisir autant d\'options.',
	'VIEW_POLL' => 'Voir le sondage',
	'VOTE_SUBMITTED' => 'Votre vote &agrave; été pris en compte.',
	'VOTE_CONVERTED' => 'Impossible de changer votre vote pour les sondages convertis.',

	'FORM_INVALID' => 'Le formulaire envoyé est invalide. Essayez &agrave; nouveau.',	'NO_USERS_FOUND' => 'No users found',

	'NO_USERS_FOUND' => 'Aucun utilisateur trouvé',
	'POST_IP' => 'Adresse IP',
	'FIND_USERNAME' => 'Trouver un membre',
	'FIND_USERNAME_HIDE' => 'Cacher le formulaire &quot;trouver un membre&quot;',
	'FIND_USERNAME_EXPLAIN' => 'Utilisez ce formulaire pour chercher des membres spécifiques. Vous n\'avez pas besoin de remplir tous les champs. Pour faire des recherches partielles utilisez * comme joker. Utilisez le format <kbd>YYYY-MM-DD</kbd> pour les dates. Utilisez les cases &agrave; cocher pour sélectionner plus d\'un utilisateur (plusieurs nom d\'utilisateurs peuvent &ecirc;tre acceptés selon le formulaire) et cliquez sur le bouton " Utiliser la Sélection " pour revenir au formulaire précédent.',

	'AUTH_NONE' => 'AUCUN',
	'AUTH_ALL' => 'TOUS',
	'AUTH_REG' => 'CONNECTé',
	'AUTH_SELF' => 'SOIS-M&Ecirc;ME',
	'AUTH_PRIVATE' => 'PRIVé',
	'AUTH_MOD' => 'MOD',
	'AUTH_JADMIN' => 'J ADMIN',
	'AUTH_ADMIN' => 'ADMIN',

	'SHARE' => 'Partager',
	'LIKE' => 'Aimer',
	'UNLIKE' => 'Ne pas aimer',
	'LIKE_POST' => 'Aimer ce message',
	'UNLIKE_POST' => 'Ne pas aimer ce message',
	'LIKE_TIME' => 'Date',
	'LIKE_RECAP' => 'Membres appréciant ce message',
	'LIKE_COUNTER_YOU' => 'Vous aimez ce message',
	'LIKE_COUNTER_YOU_OTHERS_SINGLE' => 'Vous et %s aimez ce message',
	'LIKE_COUNTER_YOU_OTHERS' => 'Vous et %s autres personnes aimez ce message',
	'LIKE_COUNTER_OTHERS' => '%s personnes aiment ce message',
	'LIKE_COUNTER_OTHERS_SINGLE' => '%s aime ce message',

	'FRIENDSHIP_STATUS' => 'Relation',
	'FRIEND_ADD' => 'Ajouter dans les amis',
	'FRIEND_REMOVE' => 'Retirer des amis',
	'FOE_ADD' => 'Ajouter dans les ennemis',
	'FOE_REMOVE' => 'Retirer des ennemis',

	'SOCIAL_NETWORKS' => 'Réseaux Sociaux',
	'USER_FIRST_NAME' => 'Prénom',
	'USER_LAST_NAME' => 'Nom de famille',
	'FACEBOOK' => 'Facebook',
	'TWITTER' => 'Twitter',

	'INACTIVE_USER' => 'Utilisateur inactif',
	'SEARCH_MIN_CHARS' => 'Vous devez au moins entrer %d caractères pour faire une recherche.',

	'EXTRA_STATS_SHOW' => 'Montrer les statistiques avancées',
	'EXTRA_STATS_HIDE' => 'Cacher les statistiques avancées',
	'RESERVED' => 'Reservé',

	'VIEW_TOPICS_DAYS' => 'Afficher les sujets du jour précédent',
	'VIEW_TOPICS_DIR' => 'Afficher l\'ordre d\'affichage du sujet',
	'VIEW_TOPICS_KEY' => 'Afficher les sujets en fonction',
	'VIEW_POSTS_DAYS' => 'Afficher les messages du jour précédent',
	'VIEW_POSTS_DIR' => 'Afficher l\'ordre d\'affichage du message',
	'VIEW_POSTS_KEY' => 'Afficher les messages en fonction',

	'AUTHOR' => 'de l\'Auteur',
	'POST_TIME' => 'de l\'Heure',
	'REPLIES' => 'des Réponses',
	'SUBJECT' => 'du Sujet',
	'VIEWS' => 'des Vues',

	'INVALID' => 'Donnée Invalide.',
	'TOO_LARGE' => 'La valeur entrée est trop large.',
	'TOO_LONG' => 'La valeur entrée est trop longue.',
	'TOO_SHORT' => 'La valeur entrée est trop courte.',
	'TOO_SMALL' => 'La valeur entrée est trop petite.',
	'WRONG_DATA' => 'Donnée Incorrecte.',

	'ATTACHMENTS' => 'Fichiers attachés',
	'ERROR_NO_ATTACHMENT' => 'Le fichier que vous essayez de télécharger n\'existe pas.',
	'NO_FORUM' => 'Le forum sélectionné n\'existe pas.',
	'NO_TOPIC' => 'Le sujet ou message demandé n\'existe pas.',
	'NO_USER' => 'Désolé, mais cet utilisateur n\'existe pas.',

	'AJAX_SEARCH' => 'Recherche...',

	'FLICKR' => 'Flickr',
	'GOOGLEPLUS' => 'Google Plus',
	'LINKEDIN' => 'LinkedIn',
	'YOUTUBE' => 'YouTube',

	'MOBILE_STYLE_ENABLE' => 'Activer le style Mobile',
	'MOBILE_STYLE_DISABLE' => 'Désactiver le style Mobile',

	'INVALID_SESSION' => 'Session invalide. Si le problème persiste, contactez un administrateur.',

	'BACK_TO_TOP' => 'Haut',
	'BACK_TO_PREV' => 'Retourner &agrave; la page précédente',

	'CMS_EDIT_PARENT_BLOCK' => 'Éditer le bloc parent',

	'UPI2DB_DISABLED' => 'UPI2DB Désactivé',
	'UPI2DB_LINK_U' => 'UPI2DB Non-lus',
	'UPI2DB_LINK_M' => 'UPI2DB Marqués',
	'UPI2DB_LINK_P' => 'UPI2DB Toujours lu',
	'UPI2DB_LINK_FULL' => 'UPI2DB',
	'NEW_POSTS_LINK' => 'Nouveaux messages',
	'LOGIN_LOGOUT_LINK' => 'Connexion/Déconnexion',
	'MENU_EMPTY_LINK' => 'Lien vide',

	'IP_BLACKLISTED' => 'Votre IP (%s) a été bloquée. Pour plus de détails veuillez cliquer ici : <a href="%s">%s</a>.',

	'PRINTABLE_VERSION' => 'Version Imprimable',
	'CHANGE_FONT_SIZE' => 'Changer la taille de la police',
	'CHANGE_FONT_SIZE' => 'Changer la taille de la page',
	'FULL_EDITOR' => 'Utiliser l\'éditeur complet',

	'SN_SHOW_POSTS' => 'Montrer le texte des messages',
	'SN_SHOW_TOPICS' => 'Montrer les sujets uniquement',

	'NOT_LOGGED_IN_VIEW_PAGE' => 'Vous devez être connecté pour voir cette page.',

	'TAGS_SEARCH_REPLACE' => 'Chercher et trouver des tags',
	'TAGS_SEARCH_REPLACE_SRC' => 'Tag à remplacer',
	'TAGS_SEARCH_REPLACE_TGT' => 'Nouveau tag',
	'TAGS_SEARCH_REPLACE_RESULT' => '%d tag(s) ont été remplacé(s).',

	'UNABLE_TO_UPLOAD_AVATAR' => 'Impossible d\'envoyer l\'image, vérifiez son type et sa taille.',

	'MOVE_ALL' => 'Tout déplacer',
	'MOVED_TOPICS_PREFIX' => 'Choisir un préfixe pour les sujets à déplacer (optionnel)',

	'TAGS_REMOVE_ITEM' => 'Retirer le tag',
	'TAGS_EDIT_ITEM' => 'Sauvegarder les changements',
	'TAGS_DELETE_ITEM' => 'Supprimer ce tag',
	'TAGS_DELETE_CONFIRM' => 'Confirmez-vous la suppression de ce tag ?',
	'TAGS_DELETED_ITEM' => 'Ce tag sera supprimé.',
	'TAGS_BREAK_EDIT' => 'Annuler',

	'POST_FEATURED_IMAGE' => 'Image descriptive',
	'POST_FEATURED_IMAGE_EXPLAIN' => 'Ajouter une image pour décrire le sujet',

	'NOT_LOGGED_IN_ERROR' => 'Vous devez être connecté pour utiliser cette fonctionnalité.',

	'LOCK_POST' => 'Verrouiller ce message',
	'POST_LOCKED' => 'Ce message a été verrouillé par un modérateur, vous ne pouvez pas l\'éditer.',
	'POST_AUTO_SPLIT' => '[DIVIS&Eacute;]',

	'SOCIAL_CONNECT' => 'Vous pouvez vous connecter via ces réseaux sociaux :',
	'SOCIAL_CONNECT_LOGIN' => 'Me connecter avec mon compte %s',
	'SOCIAL_CONNECT_REGISTER_INFO' => 'Votre profil sera automatiquement rempli avec les informations de votre compte.',
	'SOCIAL_CONNECT_LINK_ACCOUNT' => 'Veuillez vous connecter pour lier votre compte sur un réseau social avec votre compte utilisateur',
	'SOCIAL_CONNECT_LINK_ACCOUNT_MSG' => 'Nous n\'avons pas pu trouver de compte sur réseau social lié à votre compte %s. Vous pouvez vous inscrire ou vous connecter via un compte %s pré-existant.<br /><br />Cliquez %sici%s si vous avez déjà un compte.<br /><br />Cliquez %sici%s pour vous créer un compte.',
	'FACEBOOK' => 'Facebook',

	'IMG_BA_SHOW_ONLY_BEFORE' => 'Montrer seulement avant',
  	'IMG_BA_SHOW_ONLY_AFTER' => 'Montrer seulement après',
  
  	'GET_MORE_IMGS' => 'Afficher plus d\'images',
  	'AJAX_REQ_SUCCESS' => 'Requête traitée avec succès',
  	'AJAX_REQ_ERROR' => 'Erreur lors du traitement de la requête',
  	'ALL_UPLOADED_IMAGES' => 'Toutes les images envoyées peuvent être trouvées ici :',
  
	'EVENTS_REG_USER' => 'Ajouter un utilisateur à l\'évènement',

	'NOTES_MOD' => 'Notes de la modération',

	'500PX' => '500px',
	'GITHUB' => 'GitHub',
	'INSTAGRAM' => 'Instagram',
	'PINTEREST' => 'Pinterest',
	'VIMEO' => 'Vimeo',
	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();
// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Délester les utilisateurs sans messages';
$lang['Prune_explain'][0] = 'Les utilisateurs qui n\'ont pas posté, <b>excepté</b> les utilisateurs s\'étant inscrit depuis %d jours';
$lang['Prune_commands'][1] = 'D&eaucte;lester les utilisateurs inactifs';
$lang['Prune_explain'][1] = 'Les utilisateurs qui ne se sont jamais connectés, <b>excepté</b> les utilisateurs s\'étant inscrit depuis %d jours';
$lang['Prune_commands'][2] = 'Délester les utilisateurs non activés';
$lang['Prune_explain'][2] = 'Les utilisateurs qui n\'ont jamais été activé, <b>excepté</b> les utilisateurs s\'étant inscrit depuis %d jours';
$lang['Prune_commands'][3] = 'Délester les utilisateurs qui ne sont pas venus depuis soixante jours';
$lang['Prune_explain'][3] = 'Les utilisateurs qui ne se sont pas connectés depuis soixante jours, <b>excepté</b> les utilisateurs s\'étant inscrit depuis %d jours';
$lang['Prune_commands'][4] = 'Délester les utilisateurs qui ne postent presque jamais';
$lang['Prune_explain'][4] = 'Les utilisateurs qui ont postés moins de un message pour dix jours, <b>excepté</b> les utilisateurs s\'étant inscrit depuis %d jours';
$lang['Prune_commands'][5] = 'Délester les utilisateurs qui ne postent pas et qui ne viennent pas souvent';
$lang['Prune_explain'][5] = 'Les utilisateurs qui n\'ont jamais postés et qui ne sont pas passés récemment, <b>excepté</b> les utilisateurs s\'étant inscrit depuis %d jours';

// Timezones - BEGIN
$lang['All_times'] = 'Toutes les dates sont au format %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tz'] = array(
	'-12' => 'UTC - 12 Heures',
	'-11' => 'UTC - 11 Heures',
	'-10' => 'UTC - 10 Heures',
	'-9.5' => 'UTC - 9 Heures 30',
	'-9' => 'UTC - 9 Heures',
	'-8' => 'UTC - 8 Heures',
	'-7' => 'UTC - 7 Heures',
	'-6' => 'UTC - 6 Heures',
	'-5' => 'UTC - 5 Heures',
	'-4.5' => 'UTC - 4 Heures 30',
	'-4' => 'UTC - 4 Heures',
	'-3.5' => 'UTC - 3 Heures 30',
	'-3' => 'UTC - 3 Heures',
	'-2' => 'UTC - 2 Heures',
	'-1' => 'UTC - 1 Heure',
	'0' => 'UTC',
	'1' => 'UTC + 1 Heure',
	'2' => 'UTC + 2 Heures',
	'3' => 'UTC + 3 Heures',
	'3.5' => 'UTC + 3 Heures 30',
	'4' => 'UTC + 4 Heures',
	'4.5' => 'UTC + 4 Heures 30',
	'5' => 'UTC + 5 Heures',
	'5.5' => 'UTC + 5 Heures 30',
	'5.75' => 'UTC + 5 Heures 45',
	'6' => 'UTC + 6 Heures',
	'6.5' => 'UTC + 6 Heures 30',
	'7' => 'UTC + 7 Heures',
	'8' => 'UTC + 8 Heures',
	'8.75' => 'UTC + 8 Heures 45',
	'9' => 'UTC + 9 Heures',
	'9.5' => 'UTC + 9 Heures 30',
	'10' => 'UTC + 10 Heures',
	'10.5' => 'UTC + 10 Heures 30',
	'11' => 'UTC + 11 Heures',
	'11.5' => 'UTC + 11 Heures 30',
	'12' => 'UTC + 12 Heures',
	'12.75' => 'UTC + 12:45 Hours',
	'13' => 'UTC + 13 Hours',
	'14' => 'UTC + 14 Hours',
	'dst' => '[ <abbr title="Heure d\'été">DST</abbr> ]',
);

// These are displayed in the timezone select box
$lang['tz_zones'] = array(
	'-12' => '[UTC - 12] Baker Island Time',
	'-11' => '[UTC - 11] Niue Time, Samoa Standard Time',
	'-10' => '[UTC - 10] Hawaii-Aleutian Standard Time, Cook Island Time',
	'-9.5' => '[UTC - 9:30] Marquesas Islands Time',
	'-9' => '[UTC - 9] Alaska Standard Time, Gambier Island Time',
	'-8' => '[UTC - 8] Pacific Standard Time',
	'-7' => '[UTC - 7] Mountain Standard Time',
	'-6' => '[UTC - 6] Central Standard Time',
	'-5' => '[UTC - 5] Eastern Standard Time',
	'-4.5' => '[UTC - 4:30] Venezuelan Standard Time',
	'-4' => '[UTC - 4] Atlantic Standard Time',
	'-3.5' => '[UTC - 3:30] Newfoundland Standard Time',
	'-3' => '[UTC - 3] Amazon Standard Time, Central Greenland Time',
	'-2' => '[UTC - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time',
	'-1' => '[UTC - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time',
	'0' => '[UTC] Western European Time, Greenwich Mean Time',
	'1' => '[UTC + 1] Central European Time, West African Time',
	'2' => '[UTC + 2] Eastern European Time, Central African Time',
	'3' => '[UTC + 3] Moscow Standard Time, Eastern African Time',
	'3.5' => '[UTC + 3:30] Iran Standard Time',
	'4' => '[UTC + 4] Gulf Standard Time, Samara Standard Time',
	'4.5' => '[UTC + 4:30] Afghanistan Time',
	'5' => '[UTC + 5] Pakistan Standard Time, Yekaterinburg Standard Time',
	'5.5' => '[UTC + 5:30] Indian Standard Time, Sri Lanka Time',
	'5.75' => '[UTC + 5:45] Nepal Time',
	'6' => '[UTC + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time',
	'6.5' => '[UTC + 6:30] Cocos Islands Time, Myanmar Time',
	'7' => '[UTC + 7] Indochina Time, Krasnoyarsk Standard Time',
	'8' => '[UTC + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time',
	'8.75' => '[UTC + 8:45] Southeastern Western Australia Standard Time',
	'9' => '[UTC + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time',
	'9.5' => '[UTC + 9:30] Australian Central Standard Time',
	'10' => '[UTC + 10] Australian Eastern Standard Time, Vladivostok Standard Time',
	'10.5' => '[UTC + 10:30] Lord Howe Standard Time',
	'11' => '[UTC + 11] Solomon Island Time, Magadan Standard Time',
	'11.5' => '[UTC + 11:30] Norfolk Island Time',
	'12' => '[UTC + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time',
	'12.75' => '[UTC + 12:45] Chatham Islands Time',
	'13' => '[UTC + 13] Tonga Time, Phoenix Islands Time',
	'14' => '[UTC + 14] Line Island Time',
);
// Timezones - END

// Dates And Times - BEGIN
$lang = array_merge($lang, array(
	'WEEK_DAY_SUNDAY' => 'Dimanche',
	'WEEK_DAY_MONDAY' => 'Lundi',
	'WEEK_DAY_TUESDAY' => 'Mardi',
	'WEEK_DAY_WEDNESDAY' => 'Mercredi',
	'WEEK_DAY_THURSDAY' => 'Jeudi',
	'WEEK_DAY_FRIDAY' => 'Vendredi',
	'WEEK_DAY_SATURDAY' => 'Samedi',

	'TIME_YEAR' => 'An',
	'TIME_MONTH' => 'Mois',
	'TIME_DAY' => 'Jour',
	'TIME_HOUR' => 'Heure',
	'TIME_MINUTE' => 'Minute',
	'TIME_SECOND' => 'Seconde',

	// The value is only an example and will get replaced by the current time on view
	'dateformats' => array(
		'd M Y, H:i' => '01 Jan 2007, 13:37',
		'd M Y H:i' => '01 Jan 2007 13:37',
		'M jS, \'y, H:i' => 'Jan 1er, \'07, 13:37',
		'D M d, Y g:i a' => 'Lun Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a' => 'Janvier 1er, 2007, 1:37 pm',
		'|d M Y|, H:i' => 'Aujourd\'hui, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a' => 'Aujourd\'hui, 1:37 pm / Janvier 1er, 2007, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat' => 'D jS M Y, H:i', // Lun 1er Jan 2007, 1:37 pm

	)
);

$lang['datetime'] = array(
	'TODAY' => 'Aujourd\'hui',
	'TOMORROW' => 'Demain',
	'YESTERDAY' => 'Hier',
	'AGO' => array(
		0 => 'il y a moins d\'une minute',
		1 => '%d minute plus tôt',
		2 => '%d mminutes plus tôt',
		60=> '1 heure plus tôt',
	),

	'Sunday' => 'Dimanche',
	'Monday' => 'Lundi',
	'Tuesday' => 'Mardi',
	'Wednesday' => 'Mercredi',
	'Thursday' => 'Jeudi',
	'Friday' => 'Vendredi',
	'Saturday' => 'Samedi',

	'Sun' => 'Dim',
	'Mon' => 'Lun',
	'Tue' => 'Mar',
	'Wed' => 'Mer',
	'Thu' => 'Jeu',
	'Fri' => 'Ven',
	'Sat' => 'Sam',

	'SUN_S' => 'Di',
	'MON_S' => 'Lu',
	'TUE_S' => 'Ma',
	'WED_S' => 'Me',
	'THU_S' => 'Je',
	'FRI_S' => 'Ve',
	'SAT_S' => 'Sa',

	'January' => 'Janvier',
	'February' => 'Février',
	'March' => 'Mars',
	'April' => 'Avril',
	'May' => 'Mai',
	'June' => 'Juin',
	'July' => 'Juillet',
	'August' => 'Ao&ucirc;t',
	'September' => 'Septembre',
	'October' => 'Octobre',
	'November' => 'Novembre',
	'December' => 'Decembre',

	'JAN' => 'Jan',
	'FEB' => 'Fév',
	'MAR' => 'Mar',
	'APR' => 'Avr',
	'MAY' => 'Mai',
	'JUN' => 'Juin',
	'JUL' => 'Juil',
	'AUG' => 'Ao&ucirc;',
	'SEP' => 'Sep',
	'OCT' => 'Oct',
	'NOV' => 'Nov',
	'DEC' => 'Dec',

	'Jan_short' => 'Jan',
	'Feb_short' => 'Fév',
	'Mar_short' => 'Mar',
	'Apr_short' => 'Avr',
	'May_short' => 'Mai',
	'Jun_short' => 'Juin',
	'Jul_short' => 'Juil',
	'Aug_short' => 'Ao&ucirc;',
	'Sep_short' => 'Sep',
	'Oct_short' => 'Oct',
	'Nov_short' => 'Nov',
	'Dec_short' => 'Dec',
);

$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);

$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);

$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);

$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);
// Dates And Times - END

//====================================================
// Do not insert anything below this line
//====================================================

?>