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

$lang = array_merge($lang, array(
	'05_Server_Settings' => 'Serveur',
	'10_Site_Settings' => 'Configuration du site',
	'15_Various_Settings' => 'Configuration générale',
	'20_SQL_Charge' => 'Optimisations SQL',
	'25_Users' => 'Utilisateurs',
	'27_Social_Networks' => 'Réseaux sociaux',
	'30_Posting' => 'Messages',
	'40_IMG_Posting' => 'Images dans les messages',
	'50_Hierarchy_setting' => 'Forum',
	'60_Calendar_settings' => 'Calendar',
	'70_SEO' => 'Référencement',
	'80_Security' => 'Journaux et Sécurité',
	'90_Cron' => 'Cron',
	)
);

// admin part
if ($lang_extend_admin)
{
	$lang = array_merge($lang, array(
		'Lang_extend_icy_phoenix' => 'Icy Phoenix',

// TAB - SERVER
		'SITE_META_KEYWORDS' => 'Mots-clefs du forum',
		'SITE_META_KEYWORDS_SWITCH' => 'Utiliser les mots-clefs stockés dans la base de données',
		'SITE_META_KEYWORDS_SWITCH_EXPLAIN' => 'Si vous activez cette option, les mots-clefs (dans la balise meta des pages) spécifiés ci-dessus seront utilisés à la place de ceux définis dans <i>lang_main_settings.php</i>.',
		'SITE_META_DESCRIPTION' => 'Description du forum',
		'SITE_META_DESCRIPTION_SWITCH' => 'Utiliser la description stockée dans la base de données',
		'SITE_META_DESCRIPTION_SWITCH_EXPLAIN' => 'Si vous activez cette option, la description (dans la balise meta des pages) spécifiée ci-dessus sera utilisé à la place de celle définie dans <i>lang_main_settings.php</i>.',
		'SITE_META_AUTHOR' => 'Fondateur du forum',
		'SITE_META_AUTHOR_SWITCH' => 'Utiliser le fondateur du forum stocké dans la base de données',
		'SITE_META_AUTHOR_SWITCH_EXPLAIN' => 'Si vous activez cette option, le fondateur (dans la balise meta des pages) spécifiée ci-dessus sera utilisé à la place de celui défini dans <i>lang_main_settings.php</i>.',
		'SITE_META_COPYRIGHT' => 'Copyright du forum',
		'SITE_META_COPYRIGHT_SWITCH' => 'Utiliser le copyright stocké dans la base de données',
		'SITE_META_COPYRIGHT_SWITCH_EXPLAIN' => 'Si vous activez cette option, le copyright (dans la balise meta des pages) spécifié ci-dessus sera utilisé à la place de celui défini dans <i>lang_main_settings.php</i>.',
    'IP_cookie_law' => 'Loi sur les cookies',
    'IP_cookie_law_explain' => 'Si vous activez cette option, une banni&egrave;re sera affich&eacute;s aux utilisateurs &agrave; propos de l\'utilisation de cookies sur le site, conform&eacute;ment &agrave; la loi europ&eacute;enne sur les cookies.',


// TAB - SITE
		'IP_mobile_style_disable' => 'Désactiver la détection des mobiles',
		'IP_mobile_style_disable_explain' => 'En temps normal, quand un utilisateur se connecte depuis un appareil mobile, le style <b>Mobile</b> est activé automatiquement (désactivable par l\'utilisateur). Si vous voulez désactiver cette détection automatique, activez cette option.',

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Activer la vérification de version IcyPhoenix',
		'IP_enable_xs_version_check_explain' => 'Activez cette option pour qu\'IcyPhoenix cherche des mises à jour à chaque vous que vous arriver sur le Panel Administrateur. Désactiver cette option peut accélerer légèrement l\'ouverture du Panel Administrateur.<br/><b>Note :</b> Cette vérification est faite une fois par jour uniquement.',

		'IP_disable_email_error' => 'Cacher les erreurs lors de l\'envoi d\'emails',

		'IP_html_email' => 'E-mails en HTML',
		'IP_html_email_explain' => 'Activer cette option pour envoyer les e-mails au format HTML, sinon ils seront envoyés au simple format texte',

		'IP_emails_only_to_admins' => 'E-mails seulement pour les Administrateurs',
		'IP_emails_only_to_admins_explain' => 'Activer le système d\'e-mails seulement pour envoyer des e-mails aux administrateurs',

		'IP_ajax_features_title' => 'Fonctionnalités AJAX',

		'IP_ajax_features' => 'Activer les fonctionnalités AJAX',
		'IP_ajax_features_explain' => 'Active certaines fonctionnalités AJAX intégrées dans le site',

		'IP_ajax_checks_register' => 'Vérifications AJAX à l\'inscription',
		'IP_ajax_checks_register_explain' => 'Si vous activez cette option, des vérifications seront faites en temps réel à l\'inscription.',

		'IP_inactive_users_memberlists' => 'Montrer les utilisateurs inactifs dans la liste des membres et le bloc des anniversaires',
		'IP_inactive_users_memberlists_explain' => 'Si vous activez cette option, les membres inactifs seront visibles dans la liste des membres et dans le bloc des anniversaires.',

		'IP_page_gen' => 'Temps de génération dans le bas de page',

/*
		'IP_switch_header_dropdown' => 'Menu déroulant de recherche dans l\'en-tête',
		'IP_switch_header_dropdown_explain' => 'Ceci activera un menu déroulant dans l\'en-tête du forum pour la recherche.',
*/

		'IP_show_alpha_bar' => 'Proposer le tri alphabétique dans la vue de forum (interrupteur global)',
		'IP_show_alpha_bar_explain' => 'Cette option permet d\'afficher une barre de tri alphabétique sur la vue de forum. Vous devez aussi l\'activer par forum dans la gestion de forums.',

		'IP_show_rss_forum_icon' => 'Icones pour les forums sur l\'index (interrupteur global)',
		'IP_show_rss_forum_icon_explain' => 'Activer cette option affichera, à droite de chaque nom de forum, des icones pour leur flux RSS ainsi que pour créer un nouveau sujet. Vous devez aussi l\'activer par forum dans la gestion de forums.',

		'IP_allow_mods_view_self' => 'Autoriser TOUS les modérateurs à voir les sujets avec l\'autorisation "Soi-même".',
		'IP_allow_mods_view_self_explain' => 'Si un forum a comme permission "Soi-même", seuls les administrateurs et les modérateurs du forum peuvent voir la liste des sujets et les lire. Seulement, il existe d\'autres fonctionnalités qui permettent d\'accéder aux contenus des messages hors de la vue de forum et de la vue de sujet: Bloc Sujets Récents, Messages Récents, Sujet au hasard. Pour empêcher cela, une sécurité supplémentaire existe pour empêcher aux personnes non autorisées de voir ces sujets par ces moyens secondaires. Pour les modérateurs, les vérifications ne sont faites que globalement : en activant cette option, TOUS les modérateurs pourront voir le contenu des messages par ces voies secondaires, sinon aucun modérateur ne pourra. Ce fonctionnement permet d\'économiser d\'alourdir énormément le serveur. Si vous n\'utiliser pas la permission "soi-même", vous n\'avez pas non plus besoin de cette fonctionnalité non plus.',

/*
		'IP_xmas_fx' => 'Neige de Noël',
		'IP_xmas_fx_explain' => 'Cette option active l\'effet Noël.',
*/
		
		'IP_xmas_gfx' => 'Décors de Noël',
		'IP_xmas_gfx_explain' => 'Activez cette option pour faire passer votre thème en version "Noël" (notez que seuls certains thèmes supportent cette fonctionnalité).',

		'IP_select_theme' => 'Changement de thème rapide',
		'IP_select_theme_explain' => 'En activant cette option, un menu déroulant pour changer de thème apparaîtra sur le forum.',

		'IP_select_lang' => 'Changement de langue rapide',
		'IP_select_lang_explain' => 'En activant cette option, un menu déroulant pour changer de langue apparaîtra sur le forum.',

		'IP_cms_dock' => 'Utiliser le Dock style Apple pour le CMS',

		'IP_cms_style' => 'Activer l\'AJAX dans le CMS',
		'IP_cms_style_explain' => 'Activez cette option pour utiliser les fonctionnalités AJAX du CMS.',

		'IP_split_ga_ann_sticky' => 'Séparer les sujets par type',
		'IP_split_ga_ann_sticky_explain' => 'Ici, vous pouvez choisir comment les sujets seront séparés dans la vue de forum.',
		'IP_split_topic_0' => 'Tous les types ensemble (pas de séparation)',
		'IP_split_topic_1' => 'Annonces globales, annonces et post-its ensemble, séparés des sujets normaux',
		'IP_split_topic_2' => 'Annonces globales séparés, annonces et post-its ensemble, séparés des sujets normaux',
		'IP_split_topic_3' => 'Séparer tous les types',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Fast &amp; Furious',
		'IP_fast_n_furious_explain' => 'Activer ce mode de fonctionnement désactivera les fonctionnalités lourdes en SQL, vous permettant d\'avoir un forum plus rapide',

		/*
		'IP_db_cron' => 'Database Optimize',
		'IP_db_cron_explain' => 'Enabling this option will enable Database Optimization.',
		*/

		'IP_site_history' => 'Statistiques',
		'IP_site_history_explain' => 'Activez cette option pour que des statistiques soient sauvegardées dans la base de données (visites journalières, nombre de messages, etc).',

		'IP_active_sessions' => 'Limiter le nombre de sessions',
		'IP_active_sessions_explain' => '<b>ATTENTION</b> avec cette valeur : c\'est le nombre maximum de sessions, une fois la limite atteinte, le site ne sera plus accessible. Si vous ne savez pas comment configurer cette option, laissez-la à 0 (Zéro).',

		'IP_global_disable_upi2db' => 'Désactiver UPI2DB globalement',
		'IP_global_disable_upi2db_explain' => 'Cette option vous permet de désactiver UPI2DB (système de suivi des messages non-lus) globalement, permettant de sauver un peu de mémoire.',

		'IP_enable_own_icons' => 'Icone de participation',
		'IP_enable_own_icons_explain' => 'En activant cette option, les sujets auxquels vous avez participé auront une icone spécifique.',

		'IP_show_forums_online_users' => 'Montrer le nombre de visiteurs pour chaque forum',
		'IP_show_forums_online_users_explain' => 'Cette option affichera le nombre de visisteurs pour chaque forum à côté du nom du forum sur l\'index.',

		'IP_google_bot_detector' => 'Activer le détecteur de GoogleBot',

		'IP_gsearch_guests' => 'Forcer les visiteurs à utiliser la recherche Google',

		'IP_visit_counter_switch' => 'Activer le compteur de visites',

		'IP_enable_new_messages_number' => 'Montrer le nombre de nouveaux messages depuis la dernière visite',

/*
		'IP_disable_thanks_topics' => 'Désactiver le système de remerciements (interrupteur global)',
*/

		'IP_show_thanks_viewtopic' => 'Montrer le nombre de remerciements reçus dans la vue de sujet',

		'IP_show_thanks_profile' => 'Montrer le nombre de remerciements reçus dans la vue de profil',

		'IP_disable_likes_posts' => 'Désactiver les "J\'aime" sur les messages (interrupteur global)',
		'IP_disable_likes_posts_explain' => 'Cette option vous permet de désactiver globalement la fonctionnalité &quot;J\'aime ce message&quot;',

		'IP_disable_topic_view' => 'Désactiver "Qui a lu ce sujet" (interrupteur global)',
		'IP_disable_topic_view_explain' => 'Ce option vous permet de désactiver &quot;Qui a lu ce sujet&quot; (en bas de la vue de sujet), pour économiser des ressources SQL.',

		'IP_disable_referers' => 'Désactiver les référants',
		'IP_disable_referers_explain' => 'Cette option vous permet de désactiver les référants (d\'où viennent vos visiteurs), pour économiser des ressources SQL.',

		'IP_disable_logins' => 'Désactiver l\'enregistrement des connexions',
		'IP_disable_logins_explain' => 'En activant cette option, les utilisateurs se connectant ne seront plus journalisés.',

		'IP_last_logins_n' => 'Nombre de connexions à enregistrer',

		'IP_index_top_posters' => 'Meilleurs posteurs :: Index du forum',
		'IP_index_top_posters_explain' => 'Activez cette option pour montrer les meilleurs posteurs sur l\'<b>index du forum</b>.',

		'IP_index_last_msgs' => 'Derniers messages :: Index du forum',
		'IP_index_last_msgs_explain' => 'Activez cette option pour montrer les derniers messages sur l\'<b>index du forum</b>.',

		'IP_online_last_msgs' => 'Derniers messages :: Qui est en ligne',
		'IP_online_last_msgs_explain' => 'Activez cette option pour montrer les derniers messages dans le <b>Qui est en ligne</b>.',

		'IP_last_msgs_n' => 'Nombre de messages à afficher.',

		'IP_last_msgs_x' => 'Forums à exclure',
		'IP_last_msgs_x_explain' => 'Insérez les IDs des forums dont les derniers messages ne doivent pas être affichés. Séparez les numéros par des virgules (exemple : <i>3,4,7</i>).',

		'IP_show_chat_online' => 'Utilisateurs sur le Chat AJAX :: Index du forum',
		'IP_show_chat_online_explain' => 'Activez cette option pour montrer les utilisateurs du Chat AJAX sur l\'<b>index du forum</b>.',

		'IP_index_shoutbox' => 'Shoutbox :: Index du forum',
		'IP_index_shoutbox_explain' => 'Activez cette option pour afficher la shoutbox sur l\'<b>index du forum</b>.',

		'IP_online_shoutbox' => 'Shoutbox :: Qui est en ligne',
		'IP_online_shoutbox_explain' => 'Activez cette option pour afficher la shoutbox dans le <b>Qui est en ligne</b>.',

		'IP_img_shoutbox' => 'Désactiver le BBCode [img][/img] dans la Shoutbox',
		'IP_img_shoutbox_explain' => 'Activez cette option pour empêcher les utilisateurs de la shoutbox de poster des images.',

		'IP_index_links' => 'Liens :: Index du forum',
		'IP_index_links_explain' => 'Activez cette option pour afficher le module de Liens sur l\'<b>index du forum</b>.',

		'IP_index_birthday' => 'Anniversaires :: Index du forum',
		'IP_index_birthday_explain' => 'Activez cette option pour afficher les anniversaires sur l\'<b>index du forum</b>.',

		'IP_show_random_quote' => 'Citations aléatoires :: Index du forum',
		'IP_show_random_quote_explain' => 'Activez cette option pour afficher des citations aléatoires sur l\'<b>index du forum</b>',

// TAB - Users
	    'IP_user_allow_pm_register' => 'Activer les messages privés pour les nouveaux utilisateurs',
    	'IP_user_allow_pm_register_explain' => 'Activez cette option pour que les utilisateurs puissent à leur création envoyer des messages. Si vous désactivez cette option, vous devrez activer les messages privés pour chaque utilisateur depuis le panneau d\'administration.',

// Spam Section
		'IP_spam_measures_header' => 'Mesures anti-spam',

		'IP_spam_posts_number' => 'SPAM - Seuil de messages nécessaires pour échapper aux mesures anti-spam',
		'IP_spam_posts_number_explain' => 'Jusqu\'à ce qu\'un utilisateur arrive à ce nombre de messages, les protections anti-spam seront actives (sécurités avec le préfixe "SPAM" ci dessous)',
		'IP_spam_p_0' => 'Désactivé',
		'IP_spam_p_3' => '3',
		'IP_spam_p_5' => '5',
		'IP_spam_p_10' => '10',
		'IP_spam_p_20' => '20',

		'IP_spam_disable_url' => 'SPAM - Désactiver les URLs dans les forums',
		'IP_spam_disable_url_explain' => 'Cette sécurité permet de supprimer toutes les adresses dans les messages et de remplacer HTTP pour H**P, cette fonctionnalité reste active tant que l\'utilisateur n\'a pas atteint le seuil spécifié ci-dessus. Les administrateurs verront le message original.',

		'IP_spam_hide_signature' => 'SPAM - Désactiver la signature et le champ "Site Web"',
		'IP_spam_hide_signature_explain' => 'Cette sécurité permet de désactiver la signature et le champ "Site Web" des utilisateurs qui n\'ont atteint le seuil anti-spam spécifié ci-dessus. Les administrateurs verront la signature.',

		'IP_spam_post_edit_interval' => 'SPAM - Empêcher l\'édition de messages',
		'IP_spam_post_edit_interval_explain' => 'Cette sécurité permet d\'empêcher les utilisateurs d\'éditer leurs messages after l\'intervalle spécifiée tant qu\'ils n\'ont pas atteint le seuil de messages anti-spam',
		'IP_time_15m' => '15 Minutes',
		'IP_time_30m' => '30 Minutes',
		'IP_time_1h' => '1 Heure',
		'IP_time_2h' => '2 Heures',
		'IP_time_6h' => '6 Heures',
		'IP_time_12h' => '12 Heures',
		'IP_time_24h' => '24 Heures',

// TAB - Social networks
		'Enable_Social_Networks_Login' => 'Activer la connexion via un réseau social (Interrupteur global)',
		'Enable_Social_Networks_Login_Explain' => 'Autorise les utilisateurs à se connecter via un compte sur un réseau social.',
		'Facebook_Login_Settings' => 'Paramètres de la connexion via Facebook',
		'Facebook_Login_Settings_explain' => 'Suivez ces instructions pour obtenir vos infos :<br />- Visitez la page développeur <a href="https://developers.facebook.com/" target="_blank">Facebook</a>.<br />- Connectez-vous avec votre compte Facebook.<br />- Créez une nouvelle application.<br />- Désactivez "Mode test".<br />- Rentrez le nom de domaine de votre application, sans http/https ni de www (comme icyphoenix.com).<br />- Choisissez l\'option "Site web avec connexion Facebook", et rentrez l\'adresse de votre forum, avec http/https ET www (exemple : http://www.icyphoenix.com).<br />- Validez.<br />- Rentrez l\'identifiant et la clef secrète.',
		'Enable_Facebook_Login' => 'Enable Facebook Login',
		'Enable_Facebook_Login_explain' => 'Allow users login and register using their Facebook account. Remember adding your app tokens below.',
		'Facebook_App_ID' => 'ID Application ("App ID")',
		'Facebook_App_Secret' => 'Clef secrète l\'application ("App Secret")',


// TAB - Posting
		'IP_posts_precompiled' => 'Désactiver les messages pré-compilés pour les visiteurs',
		'IP_posts_precompiled_explain' => 'Activez cette option pour que la vue de sujet re-compile les messages pour les visiteurs au lieu d\'utiliser le texte pré-compilé (plus lent, mais peu être utile dans certaines cases).',

		'IP_read_only_forum' => 'Forum en mode Lecture Seule',
		'IP_read_only_forum_explain' => 'Activez cette option pour que le forum entier soit en Lecture Seule sans altérer les permissions. Cette option peut être utile pendant certaines périodes où les administrateurs voudraient empêcher les utilisateurs de poster sans verrouiller le forum ou de changer toutes les permissions. Les administrateurs seront toujours capables de poster.',

		'IP_allow_drafts' => 'Activer les brouillons',
		'IP_allow_drafts_explain' => 'Autorise les utilisateurs à sauvegarder leurs messages en tant que brouillons.',

		'IP_allow_mods_edit_admin_posts' => 'Autoriser les modérateurs à éditer les messages des Administrateurs',
		'IP_allow_mods_edit_admin_posts_explain' => '',

		'IP_forum_limit_edit_time_interval' => 'Intervalle de temps pour l\'édition de message',
		'IP_forum_limit_edit_time_interval_explain' => 'Cette limite correspond au temps maximum avant qu\'un utilisateur ne soit plus autorisé à éditer son message. Mettez 0 (Zéro) pour désactiver cette limite (la fonctionnalité doit être activée par forum dans la gestion des forums). Ce réglage s\'applique à tous les utilisateurs, pas seulement aux utilisateurs n\'ayant pas atteint le seuil anti-spam (utilisez la sécurité au-dessus pour cela).',

		'IP_force_large_caps_mods' => 'Enforcer la casse des sujets',
		'IP_force_large_caps_mods_explain' => 'Le titre des sujets se verra modifié pour suivre La Casse (ne s\'applique pas aux administrateurs).',

		'IP_show_new_reply_posting' => 'Avertir des nouvelles réponses',
		'IP_show_new_reply_posting_explain' => 'Activez cette option pour avertir les utilisateurs qu\'une nouvelle réponse à été ajoutée pendant qu\'ils rédigeaient un message.',

		'IP_no_bump' => 'Interdire de poster un nouveau message (bump) avant 24 heures',
		'IP_no_bump_explain' => 'Activez cette option pour empêcher les utilisateurs de re-poster sur un sujet auxquels ils sont les derniers à avoir répondu (ne s\'applique pas aux administrateurs).',
		'MODS_ALLOWED' => 'Permettre aux modérateurs de poster',

		'IP_robots_index_topics_no_replies' => 'Autoriser les robots à indexer les sujets sans réponses',
		'IP_robots_index_topics_no_replies_explain' => 'Activez cette option pour permettre aux robots d\'indexer les sujets sans réponses.',

		'IP_use_jquery_tags' => 'TAGS :: Activer les tags via jQuery',
		'IP_use_jquery_tags_explain' => 'Activez cette option pour utiliser jQuery pour les Tags de sujets (plus rapide et meilleur formatage).',

		'IP_enable_featured_image' => 'Activer la fonctionnalité "Image Descriptive du Sujet"',
		'IP_enable_featured_image_explain' => 'Activez cette option pour permettre à un utilisateur de choisir une image descriptive à la création de sujet.',

		'IP_display_tags_box' => 'TAGS :: Montrer les Tags du sujet',
		'IP_display_tags_box_explain' => 'Activez cette option pour afficher les tags du sujet (utiles pour la recherche). L\'addition/l\'édition de tags peut être limité aux administrateurs seuls (ou aux modérateurs, via l\'interrupteur ci-dessous) pour éviter le spam.',

		'IP_allow_moderators_edit_tags' => 'TAGS :: Autoriser les modérateurs à modifier les tags',
		'IP_allow_moderators_edit_tags_explain' => 'Activez cette option pour permettre aux modérateurs, en plus des administrateurs, d\'éditer les tags des sujets',

		'IP_show_topic_description' => 'Activer les description de sujet',
		'IP_show_topic_description_explain' => 'Activez cette option pour afficher les descriptions de sujet dans la vue de forum',

		'IP_edit_notes' => 'Activer les notes d\'édition',
		'IP_edit_notes_explain' => 'Activez cette option pour permettre à l\'utilisateur d\'entrer la raison de l\'édition du message',

		'IP_edit_notes_n' => 'Nombre maximum de notes d\'édition',

		'IP_always_show_edit_by' => 'Toujours montrer les éditions',
		'IP_always_show_edit_by_explain' => 'Activez cette option pour toujours afficher "Dernière édition par ..." dans le bas du message lorsque celui-ci a été modifié. Les éditions des administrateurs sont cachées par défaut.',

		'IP_show_social_bookmarks' => 'Marque-page sociaux',
		'IP_show_social_bookmarks_explain' => 'Montrer les marque-page sociaux dans la vue de sujet',

		'IP_link_this_topic' => 'Activer "Lien vers ce sujet"',
		'IP_link_this_topic_explain' => 'Montre le cadre "Lien vers ce sujet" dans la vue de sujet',

		'IP_smilies_topic_title' => 'Activer les smileys dans les titres et les descriptions de sujets',
		'IP_smilies_topic_title_explain' => '',

		'IP_enable_colorpicker' => 'Activer le sélecteur de couleur lors de l\'ajout de message',

		'IP_quote_iterations' => 'Nombre maximum de citations imbriquées',

		'IP_ftr_disable' => 'Désactiver le "Sujet à lire obligatoirement"',
		'IP_ftr_disable_explain' => 'Activez cette option pour désactiver le "Sujet à lire obligatoirement" (FTR)',

		'IP_disable_html_guests' => 'Cacher les liens HTML pour les visiteurs',

		'IP_birthday_viewtopic' => 'Montrer l\'âge du posteur dans la vue de sujet',

		'IP_switch_poster_info_topic' => 'Montrer les informations du posteur (langue, thème, etc)',

		'IP_enable_quick_quote' => 'Activez les citations rapide et la balise "Hors Sujet"',
		'IP_enable_quick_quote_explain' => 'Les citations rapide permeettent aux utilisateurs de citer n\'importe quel message d\'un simple clic (cette fonctionnalité utilise le JavaScript), mais peu agrandir la page des sujets avec de longs messages.',

		'IP_allow_html_only_for_admins' => 'Activer le HTML pour les administrateurs seulement',
		'IP_allow_html_only_for_admins_explain' => 'Activez cette option pour que seuls les administrateurs puissent utiliser du HTML dans leurs messages. Attention, cette fonctionnalité peut être dangereuse ou empêcher la page de s\'afficher correctement si mal utilisée.',

		'IP_enable_custom_bbcodes' => 'Activer les BBCodes personnalisés',
		'IP_enable_custom_bbcodes_explain' => 'Cette option active les BBCodes personnalisés créés dans la Panel Administrateur.',

		'IP_allow_all_bbcode' => 'Activer tous les BBCodes partout',
		'IP_allow_all_bbcode_explain' => 'Activez cette option pour rendre tous les BBCodes utilisables dans les signatures et autres places où ils sont normalement désactivés. Les BBCodes désactivé habituellement dans les signatures sont: IMG, ALBUMIMG et d\'autres BBCodes de formattage trop changeants. Si vous activez cette option, les signatures peuvent consommer plus d\'espaces sur vos pages et plus de ressources.',

		'IP_switch_bbcb_active_content' => 'Activez les BBCodes de contenu interactif',
		'IP_switch_bbcb_active_content_explain' => 'Activez cette option pour activer les BBCodes Flash, Video, Streams audio, RealMedia et Quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Permissions pour l\'upload d\'images (Post Icy Images)',

		'IP_enable_postimage_org' => 'Activer le bouton "Envoyer une image" dans le formulaire de nouveau message',

		'IP_gd_version' => 'Version de GD:',
		'GD_0' => 'GD non installé',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Montrer les aperçus de GIFs sans utiliser GD (les images sont chargées en grand puis changées de taille).',

		'IP_thumbnail_posts' => 'Aperçus dans les messages',
		'IP_thumbnail_posts_explain' => 'Activez cette option pour afficher les aperçus d\'image quand le BBCode IMG est utilisé (un clic permet de voir l\'image en taille réelle).',

		'IP_show_pic_size_on_thumb' => 'Afficher la taille de l\'image sur l\'aperçu',

		'IP_thumbnail_highslide' => 'Utiliser HighSlide pour montrer les images en taille réel lors du clic sur un aperçu',
		'IP_thumbnail_highslide_explain' => 'Activez cette option pour afficher l\'image en taille réelle via HighSlide au lieu de l\'ouvrir dans une nouvelle fenêtre. Visitez <a href="http://www.highslide.com/" target="_blank">HighSlide JS</a> pour plus d\'informations<br />Nettoyez les messages pré-compilés après avoir modifié cette option !',

		'IP_thumbnail_cache' => 'Mise en cache des aperçus',

		'IP_thumbnail_quality' => 'Qualité des aperçus (1-100)',

		'IP_thumbnail_size' => 'Taille des aperçus (en pixels, par d&eacute;faut 450)',
    'IP_thumbnail_size_explain' => 'Toutes les images dans les messages seront redimensionn&eacute;es &agrave; cette taille si vous avez activ&eacute; les aperçus.',
    
    'IP_thumbnail_s_size' => 'Tailles des aperçus dans une page de listing d\'images (en pixels, par d&eacute;faut 120)',
    'IP_thumbnail_s_size_explain' => 'Taille des images dans une page de listing',

    'IP_img_list_cols' => 'Colonnes dans une page de listing d\'images (par d&eacute;faut 4)',
    'IP_img_list_cols_explain' => 'Nombre de colonnes qui doivent s\afficher dans une page de listing d\'images',

    'IP_img_list_rows' => 'Lignes dans une page de listing d\'images (par d&eacute;faut 5)',
    'IP_img_list_rows_explain' => 'Nombre de lignes qui doivent s\afficher dans une page de listing d\'images',

// TAB - Forum
		//V: Todo: Translate or not translate, that is the question
		// 'Lang_extend_categories_hierarchy' => 'Categories Hierarchy',
		'Lang_extend_categories_hierarchy' => 'Hiérarchie des catégories',

		'Category_attachment' => 'Attaché à',
		'Category_desc' => 'Description',
		'Category_config_error_fixed' => 'Une erreur dans la hiérarchie à été corrigée',
		'Attach_forum_wrong' => 'Vous ne pouvez pas attacher un forum à un forum',
		'Attach_root_wrong' => 'Vous ne pouvez pas attacher un forum à l\'index',
		'Forum_name_missing' => 'Vous ne pouvez pas créer un forum sans nom',
		'Category_name_missing' => 'Vous ne pouvez pas créer de catégorie sans nom',
		'Only_forum_for_topics' => 'Seuls les forums peuvent avoir des sujets',
		'Delete_forum_with_attachment_denied' => 'Vous ne pouvez pas supprimer de forums avec des sous-niveaux',

		'Category_delete' => 'Supprimer la catégorie',
		'Category_delete_explain' => 'Le formulaire ci-dessous vous permet de supprimer une catégorie et de décider où seront déplacés les forums et catégories qu\'elle contenait.',

// forum links type
		'Forum_link_url' => 'Adresse',
		'Forum_link_url_explain' => 'Faites un lien vers un fichier IcyPhoenix ou une adresse externe',
		'Forum_link_internal' => 'Fichier IcyPhoenix',
		'Forum_link_internal_explain' => 'Choisissez oui si vous vouler faire un lien vers une page dans le dossier IcyPhoenix',
		'Forum_link_hit_count' => 'Nombre de clics',
		'Forum_link_hit_count_explain' => 'Choisissez oui si vous voulez que le forum combien de fois le lien a été cliqué',
		'Forum_link_with_attachment_deny' => 'Vous ne pouvez pas transformer ce forum en forum-lien car il a des sous-forums',
		'Forum_link_with_topics_deny' => 'Vous ne pouvez pas transformer ce forum en forum-lien car il contient des sujets',
		'Forum_attached_to_link_denied' => 'Vous ne pouvez pas attacher un forum ou une catégorie à un forum-lien',

		'Manage_extend' => 'Gestion avancée',
		'No_subforums' => 'Pas de sous-forum',
		'Forum_type' => 'Choisissez le type de forum voulu',
		'Presets' => 'Prédéfinis',
		'Refresh' => 'Rafraîchir',
		'Position_after' => 'Mettre ce forum après',
		'Link_missing' => 'Le lien est manquant',
		'Category_with_topics_deny' => 'Vous ne pouvez pas transformer un forum qui contient encore des sujets en catégorie.',
		'Recursive_attachment' => 'Vous ne pouvez pas attacher un forum à un de ses sous-forumq',
		'Forum_with_attachment_denied' => 'Vous ne pouvez changer une catégorie qui contient des forums en forum',
		'icon' => 'Icone',
		'icon_explain' => 'Cette icone sera affichée devant le titre du forum. Vous pouvez rentrer une adresse complète ou une clef du tableau <i>$image<i> (cf. templates/<i>votre_thème</i>/<i>votre_thème</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Calendrier des sujets',

// TAB - SEO
		'IP_url_rw' => 'Re-écriture d\'adresses',
		'IP_url_rw_explain' => 'Activez cette option pour que la re-écriture d\'adresse prennent effet (lien .html au lieu de .php pour une meilleur indexation par les robots) pour tout le monde.',

		'IP_url_rw_guests' => 'Re-écriture d\'adresse pour les invités',
		'IP_url_rw_guests_explain' => 'Activez cette option pour que la re-écriture d\'adresse ne soit active que pour les invités et les robots.',

		'IP_bots_reg_auth' => 'Donner les permissions des utilisateurs aux robots',
		'IP_bots_reg_auth_explain' => 'Activez cette option pour que les robots aient les mêmes permissions que les utilisateurs enregistrés (sinon, ils auront les mêmes permissions que les visiteurs).',

		'IP_lofi_bots' => 'Mode LoFi pour les robots',
		'IP_lofi_bots_explain' => 'Active le mode LoFi pour les robots (mode d\'économie de bande passante).',

		'IP_seo_cyrillic' => 'Convertir les caractères cyrilliques',
		'IP_seo_cyrillic_explain' => 'Activez cette option pour que le forum essaye de convertir les caractères cyrilliques en alphabet latin (pas dans les messages mais dans les mots-clefs et dans les tags).',

		'IP_adsense_code' => 'Code Google AdSense',
		'IP_adsense_code_explain' => 'Insérez ici votre code Google AdSense pour la page Google Search. Si vous n\'avez pas de compte Google AdSense, laissez ce champ blanc.',

		'IP_google_analytics' => 'Code Google Analytics',
		'IP_google_analytics_explain' => 'Insérez ici votre code Google Analytics (le JavaScript donné par Google) et il sera automatiquement inséré en bas de chaque page.',

		'IP_google_custom_search' => 'Code Google Search',
		'IP_google_custom_search_explain' => 'Insérez ici votre code pour Google Search pour activer gsearch.php (autorise les invités à utiliser Google Search pour ne pas altérer les performances)',

//Sitemap
		'Sitemap_settings' => 'Options du plan du site (Google Sitemap)',

		'IP_sitemap_topic_limit' => 'Google Sitemap :: Limite de sujets',
		'IP_sitemap_topic_limit_explain' => 'Nombre maximum de sujets à prendre avec une seule requête à la base de données',

		'IP_sitemap_announce_priority' => 'Google Sitemap :: Priorité des annonces',
		'IP_sitemap_announce_priority_explain' => 'Doit être entre 0.0 et 1.0 (inclus)',

		'IP_sitemap_sticky_priority' => 'Google Sitemap :: Priorité des Post-its',
		'IP_sitemap_sticky_priority_explain' => 'Doit être entre 0.0 et 1.0 (inclus)',

		'IP_sitemap_default_priority' => 'Google Sitemap :: Priorité des sujets normaux',
		'IP_sitemap_default_priority_explain' => 'Doit être entre 0.0 et 1.0 (inclus)',

		'IP_sitemap_sort' => 'Google Sitemap :: Ordre de tri',
		'IP_sitemap_new_first' => 'Nouveaux messages d\'abord',
		'IP_sitemap_old_first' => 'Anciens messages d\'abord',

//Tags
		'IP_word_graph_max_words' => 'TAGS :: Nombre de mots maximum',
		'IP_word_graph_max_words_explain' => 'Sélectionnez le nombre maximum de mots à afficher. Plus le nombre est élevé, plus la charge serveur sera importante. La recommendation est 250.',

		'IP_word_graph_word_counts' => 'TAGS :: Compter le nombre d\'occurences',
		'IP_word_graph_word_counts_explain' => 'Afficher le nombre total d\'occurences à côté de chaque mot?<br/>Exemple : <b>IcyPhoenix (365)</b>',

		'IP_forum_wordgraph' => 'TAGS :: Tags des forums (interrupteur global)',
		'IP_forum_wordgraph_explain' => 'Cette fonctionnalité affichera le cadre des tags en bas de chaque forum. Vous devez aussi l\'activer par forum dans la gestion des forums.',

		'IP_forum_tags_type' => 'TAGS :: Type de Tags dans les forums',
		'IP_forum_tags_type_explain' => 'Vous pouvez choisir d\'afficher un nuage de mots (pris depuis les mots des messages du forum) ou les Tags (spécifiés dans chaque sujet).',
		'IP_forum_tags_type_tags' => 'Tags',
		'IP_forum_tags_type_wordgraph' => 'Nuage de mots',

		'Similar_topics' => 'Sujets similaires',
		'Similar_topics_explain' => 'Configurer la recherche de sujets similaires.',

		'IP_similar_topics' => 'Sujets Similaires :: Sujets Similaires (interrupteur global)',
		'IP_similar_topics_explain' => 'Interrupteur global pour les Sujets Similaires. Vous devez aussi activer cette fonctionnalité par forum dans la gestion des forums.',

		'IP_similar_topics_desc' => 'Sujets Similaires :: Prendre en compte la description d\'un sujet',

		'IP_similar_stopwords' => 'Sujets Similaires :: Exclure les mots interdits',

		'IP_similar_max_topics' => 'Sujets Similaires :: Nombre maximum de sujets à afficher',

		'IP_similar_sort_type' => 'Sujets Similaires :: Trier par',
		'IP_similar_sort_type_explain' => 'Sélectionnez la méthode de tri pour Sujets Similaires',
		'IP_similar_sort_type_time' => 'Date du sujet',
		'IP_similar_sort_type_relev' => 'Pertinence',

		'IP_similar_ignore_forums_ids' => 'Sujets Similaires :: Forums ignorés',
		'IP_similar_ignore_forums_ids_explain' => 'Entrer les IDs des forums dans lesquels les sujets similaires ne doivent être affichés (forums de test, forum de discussion, etc). Un numéro par ligne.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Protéger l\'administrateur principal',
		'IP_admin_protect_explain' => 'Activez cette option pour empêcher l\'édition du compte de l\'administrateur principal.',

		'IP_ip_admins_only' => 'Montrer les adresses IP pour les administrateurs seulement',
		'IP_ip_admins_only_explain' => 'Activez cette option pour cacher les adresses IPs aux modérateurs et ne les afficher qu\'aux administrateurs.',

		'IP_db_log_actions' => 'Journaliser les modifications de la base de données',
		'IP_db_log_actions_explain' => 'Activez cette option pour que toutes les actions qui modifient la base de données soient journalisées. Si cette option a été activée dans <i>includes/constants.php</i>, vous ne pouvez pas la désactiver ici. Si vous choisissez "oui", des fichiers additionnels seront stockés avec chaque erreur enregistrée.',

		'IP_mg_log_actions' => 'Journaliser les actions en .txt',
		'IP_mg_log_actions_explain' => 'Activez cette option pour que toutes les actions qui modifient la base de données soient stockées en tant que fichier texte sur le serveur (dans le dossier <i>logs/</i>). Le format du fichier est plus compliqué à lire. <b>Attention :</b> n\'activez cette option que si vous savez ce que vous faites.',

		'IP_write_errors_log' => 'Journaliser les erreurs du forum',
		'IP_write_errors_log_explain' => 'Activez cette option pour que toutes les erreurs (par exemple, erreurs 404, mauvaises requêtes) soient stockées dans un fichier .txt journalier. <b>Attention :</b> cette fonctionnalité requiert que vous activiez la redirection des erreurs vers <i>errors.php</i> dans votre <i>.htaccess</i> (ce dernier comportant un exemple).',

		//V: Todo: "digest"=lettre journalière ou flux?
		'IP_write_digests_log' => 'Journaliser les e-mails d\'informations',
		'IP_write_digests_log_explain' => 'Activez cette option pour que les e-mails d\'informations du forum soient soient journalisés.',

		'IP_logs_path' => 'Chemin vers les logs (le fichier doit être en chmod 0755 ou 0777 - sauf sous windows)',
		'IP_logs_path_explain' => 'Insérez le dossier où les erreurs et autres journalisations doivent être stockées. Chemin relatif à votre installation d\'IcyPhoenix, sans slash de fin. Exemple : <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Activer le Cron PHP (interrupteur global)',
		'IP_cron_global_switch_explain' => 'Activez cette option pour qu\'un pseudo-Cron en PHP soit activé. Certaines opérations seront éxecutées à un moment donné. L\'intervalle de temps idéal dépend du traffic sur votre site et de vos préférences : si vous ne savez pas comment ce réglage peut impacter le forum, gardez cette fonctionnalité désactivée - vous n\'en avez probablement pas besoin.',

		'IP_cron_digests_interval' => 'E-mails d\'information via le Cron PHP',
		'IP_cron_digests_interval_explain' => 'Activez cette option pour que le forum émule un système CRON qui enverra des e-mails d\'informations toutes les heures. Sachant que le système n\'est qu\'une émulation en PHP, il est possible que cela ne fonctionne pas toujours - certains e-mails pourraient ne pas être envoyer. Si vous pouvez activer Cron sur votre serveur, sélectionnez <b>Cron Serveur</b> et assurez-vous que le forum est bien autorisé à éxecuter des tâches.<br /><br /><b>Dernier lancement : ' . (($config['cron_digests_last_run'] == 0) ? 'Jamais' : create_date('d M Y  - H.i.s', ($config['cron_digests_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_birthdays_interval' => 'Anniversaires via le Cron PHP',
		'IP_cron_birthdays_interval_explain' => 'Activez cette option pour que le forum essaye d\'envoyer les e-mails d\'anniversaire via le Cron PHP. Sachant que le système n\'est qu\'une émulation en PHP, il est possible que cela ne fonctionne pas toujours - certains e-mails pourraient ne pas être envoyés.<br /><br /><b>Dernier lancement : ' . (($config['cron_birthdays_last_run'] == 0) ? 'Jamais' : create_date('d M Y  - H.i.s', ($config['cron_birthdays_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_files_interval' => 'Intervalle Cron entre les éxecutions de fichiers',
		'IP_cron_files_interval_explain' => 'Vous pouvez utiliser ce réglage pour éxecuter des fichiers à intervalles réguliers. Les fichiers doivent être spécifiés dans <b>includes/constants.php</b> : <b>define(\'CRON_FILES\', \'\');</b>. Séparés les noms de fichiers par des virgules.<br /><br /><b>Dernier lancement: ' . (($config['cron_files_last_run'] == 0) ? 'Jamais' : create_date('d M Y  - H.i.s', ($config['cron_files_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'Intervalle Cron entre chaque optimisation de la base de données',
		'IP_cron_database_interval_explain' => 'Vous pouvez utiliser ce réglage pour lancer une optimisation de la base de données régulièrement.<br /><br /><b>Dernier lancement: ' . (($config['cron_database_last_run'] == 0) ? 'Jamais' : create_date('d M Y  - H.i.s', ($config['cron_database_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Intervalle Cron entre chaque vidage du cache des fichiers thème',
		'IP_cron_cache_interval_explain' => 'Les fichiers cache du thème seront nettoyés à l\'intervalle choisi.<br /><br /><b>Last run: ' . (($config['cron_cache_last_run'] == 0) ? 'Jamais' : create_date('d M Y  - H.i.s', ($config['cron_cache_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Intervalle Cron entre chaque vidage du cache SQL',
		'IP_cron_sql_interval_explain' => 'Le cache SQL sera nettoyé à l\'intervalle choisi.<br /><br /><b>Last run: ' . (($config['cron_sql_last_run'] == 0) ? 'Jamais' : create_date('d M Y  - H.i.s', ($config['cron_sql_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Intervalle Cron entre chaque vidage du cache des utilisateurs',
		'IP_cron_users_interval_explain' => 'Le cache des utilisateurs sera nettoyé à l\'intervalle choisi.<br /><br /><b>Last run: ' . (($config['cron_users_last_run'] == 0) ? 'Jamais' : create_date('d M Y  - H.i.s', ($config['cron_users_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Intervalle Cron entre chaque vidage du cache des Sujets',
		'IP_cron_topics_interval_explain' => 'Le cache des sujets sera nettoyé à l\'intervalle choisi.<br /><br /><b>Last run: ' . (($config['cron_topics_last_run'] == 0) ? 'Jamais' : create_date('d M Y  - H.i.s', ($config['cron_topics_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_sessions_interval' => 'Intervalle Cron entre chaque vidage du cache des Sessions',
		'IP_cron_sessions_interval_explain' => 'Le cache sessions sera nettoyé à l\'intervalle choisi.<br /><br /><b>Last run: ' . (($config['cron_sessions_last_run'] == 0) ? 'Jamais' : create_date('d M Y  - H.i.s', ($config['cron_sessions_last_run']), $config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Désactivé',
		'Cron_Server' => 'Cron Serveur',
		'15M' => '15 Minutes',
		'30M' => '30 Minutes',
		'1H' => '1 Heure',
		'2H' => '2 Heures',
		'3H' => '3 Heures',
		'6H' => '6 Heures',
		'12H' => '12 Heures',
		'1D' => '1 Jour',
		'3D' => '3 Jourss',
		'7D' => '1 Semaine',
		'14D' => '2 Semaines',
		'30D' => '1 Mois',


// lang_extend_settings.php
		'Lang_extend_settings' => 'Réglages d\'IcyPhoenix',
		'Configuration_extend' => 'IcyPhoenix',
		'Override_user_choices' => 'Ignorer les choix de l\'utilisateur',
		)
	);
}

$lang = array_merge($lang, array(
	'CFG_NONE' => 'AUCUN',
	'CFG_ALL' => 'TOUS',
	'CFG_REG' => 'MEMBRE',
	'CFG_SELF' => 'SOI-MÊME',
	'CFG_PRIVATE' => 'PRIV&Eacute;',
	'CFG_MOD' => 'MODO',
	'CFG_ADMIN' => 'ADMIN',

// lang_extend_categories_hierarchy.php - BEGIN
	'Hierarchy_setting' => 'Forum',
	'Forum_link' => 'Redirection',
	'Forum_link_visited' => 'Ce lien a été visité %d fois',

	'Use_sub_forum' => 'Compression de l\'index',
	'Index_packing_explain' => 'Choisissez le niveau de compression que vous voulez pour l\'index du forum',
	'List' => 'Liste',
	'Medium' => 'Moyen',
	'Full' => 'Totalement',
	'Split_categories' => 'Séparer les catégories',
	'Use_last_topic_title' => 'Montrer le titre du dernier sujet de chaque forum',
	'Last_topic_title_length' => 'Longueur du titre',
	'Sub_level_links' => 'Montrer les sous-niveaux dans l\'index',
	'Sub_level_links_explain' => 'Affiche les liens vers les sous-niveaux dans la vue de forum ou de catégorie',
	'With_pics' => 'Activer les icones',
	'Display_viewonline' => 'Afficher les informations sur les membres en ligne',
	'Never' => 'Jamais',
	'Root_index_only' => 'Seulement sur l\'index du forum',
	'Always' => 'Toujours',
	'Subforums' => 'Sous-forums',
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
	'Calendar_settings' => 'Calendrier',
	'Calendar' => 'Calendrier',
	'Calendar_scheduler' => 'Agenda',
	'Calendar_event' => '&Eacute;vènement Calendrier',
	'Calendar_from_to' => 'Du %s au %s (inclusif)',
	'Calendar_time' => '%s',
	'Calendar_duration' => 'Durant',

	'Calendar_week_start' => 'Premier jour de la semaine',
	'Calendar_header_cells' => 'Nombre de cellules à afficher dans l\'en-tête du forum (0 pour ne rien afficher)',
	'Calendar_title_length' => 'Taille du titres des sujets à afficher dans les cellules',
	'Calendar_text_length' => 'Taille du texte à afficher dans la fenêtre de vue d\'ensemble',
	'Calendar_block_display' => 'Activer le calendrier dans l\'en-tête du forum',
	'Calendar_display_open' => 'Ouvrir automatiquement le calendrier dans l\'en-tête du forum (si activé)',
	'Calendar_nb_row' => 'Nombre de lignes par jour dans l\'en-tête du forum',
	'Calendar_birthday' => 'Afficher les anniversaires',
	'Calendar_forum' => 'Afficher le nom du forum en dessous du titre du sujet dans l\'agenda',

	'Sorry_auth_cal' => 'Désolé, mais seuls %s peuvent ajouter des évènements au calendrier dans ce forum.',
	'Date_error' => 'jour %d, mois %d, année %d n\'est pas une date valide',

	'Event_time' => 'Heure',
	'Minutes' => 'Minutes',
	'Today' => 'Aujourd\'hui',
	'Yesterday' => 'Hier',
	'All_events' => 'Tous les évènements',

/*
	'Rules_calendar_can' => 'You <b>can</b> post calendar events in this forum',
	'Rules_calendar_cannot' => 'You <b>cannot</b> post calendar events in this forum',
*/
	'Rules_calendar_can' => 'Vous <b>pouvez</b> poster d\'évènement dans le calendrier',
	'Rules_calendar_cannot' => 'Vous <b>ne pouvez pas</b> poster d\'évènement dans le calendrier',

	'birthday_header' => 'Joyeux anniversaire !',
	'birthday' => '<b>%s</b> fête son anniversaire aujourd\'hui !',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Oui, avec des rapports d\'erreur',
	)
);

?>
