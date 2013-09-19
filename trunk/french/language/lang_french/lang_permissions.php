<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

	// ROLES - BEGIN
	'ROLE_CMS_CONTENT_MANAGER' => 'Gérant',
	'ROLE_CMS_CONTENT_MANAGER_DESCRIPTION' => 'Accès total au CMS.',
	'ROLE_CMS_REVIEWER' => 'Correcteur',
	'ROLE_CMS_REVIEWER_DESCRIPTION' => 'Accès presque total au CMS, sauf retirer des blocs.',
	'ROLE_CMS_PUBLISHER' => '&Eacute;diteur',
	'ROLE_CMS_PUBLISHER_DESCRIPTION' => 'Peut ajouter du contenu.',
	'ROLE_CMS_USER' => 'Utilisateur',
	'ROLE_CMS_USER_DESCRIPTION' => 'Peut voir le contenu.',
	'ROLE_CMS_GUEST' => 'Visiteur',
	'ROLE_CMS_GUEST_DESCRIPTION' => 'Aucune permission.',
	'ROLE_ADMIN_FULL' => 'Administrateur total',
	'ROLE_ADMIN_FULL_DESCRIPTION' => 'A un accès total à l\'administration du site.',
	'ROLE_ADMIN_STANDARD' => 'Administrateur standard',
	'ROLE_ADMIN_STANDARD_DESCRIPTION' => 'A accès à l\'administration du site, mais ne peut pas utiliser des outils côté système.',
	'ROLE_MOD_FULL' => 'Modérateur total',
	'ROLE_MOD_FULL_DESCRIPTION' => 'Peut utiliser tous les outils de modération.',
	'ROLE_MOD_STANDARD' => 'Modérateur standard',
	'ROLE_MOD_STANDARD_DESCRIPTION' => 'Peut utiliser la plupart des outils de modération.',
	'ROLE_MOD_SIMPLE' => 'Modérateur simple',
	'ROLE_MOD_SIMPLE_DESCRIPTION' => 'Peut seulement utiliser certains outils de modérations.',
	'ROLE_USER_FULL' => 'Toutes les fonctionnalités',
	'ROLE_USER_FULL_DESCRIPTION' => 'Peut utiliser toutes les fonctionnalités à la disposition des utilisateurs.',
	'ROLE_USER_STANDARD' => 'Fonctionnalités standard',
	'ROLE_USER_STANDARD_DESCRIPTION' => 'Peut utiliser les fonctionnalités standard à la disposition des utilisateurs.',
	'ROLE_USER_LIMITED' => 'Fonctionnalités limitées',
	'ROLE_USER_LIMITED_DESCRIPTION' => 'Peut seulement utiliser certaines fonctionnalités à la disposition des utilisateurs.',
	'ROLE_FORUM_FULL' => 'Accès total',
	'ROLE_FORUM_FULL_DESCRIPTION' => 'Peut utiliser toutes les fonctionnalités du forum. Non recommandé pour les utilisateurs normaux.',
	'ROLE_FORUM_STANDARD' => 'Accès standard',
	'ROLE_FORUM_STANDARD_DESCRIPTION' => 'Peut utiliser la plupart des fonctionnalités du forum.',
	'ROLE_FORUM_NOACCESS' => 'Pas d\'accès',
	'ROLE_FORUM_NOACCES_DESCRIPTIONS' => 'Ne peut ni voir ni accéder au forum.',
	'ROLE_PLUGINS_FULL' => 'Accès total',
	'ROLE_PLUGINS_FULL_DESCRIPTION' => 'Peut utiliser toutes les fonctionnalités des plugins. Non recommandé pour les utilisateurs normaux.',
	'ROLE_PLUGINS_STANDARD' => 'Accès standard',
	'ROLE_PLUGINS_STANDARD_DESCRIPTION' => 'Peut utiliser la plupart des fonctionnalités des plugins.',
	'ROLE_PLUGINS_NOACCESS' => 'Pas d\'accès',
	'ROLE_PLUGINS_NOACCES_DESCRIPTIONS' => 'Ne peut ni voir ni accéder aux plugins.',
	// ROLES - END

	)
);

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat' => array(
		'actions' => 'Actions',
		'blocks' => 'Blocs',
		'cms' => 'CMS',
		'content' => 'Contenu',
		'forums' => 'Forums',
		'layouts' => 'Pages',
		'misc' => 'Divers',
		'permissions' => 'Permissions',
		'plugins_actions' => 'Actions autour des plugins', //V: todo: "plugins actions"?actions sur les plugins?
		'pm' => 'Messages privés',
		'polls' => 'Sondages',
		'post' => 'Poster',
		'post_actions' => 'Actions sur des messages',
		'posting' => 'Ajout de message',
		'profile' => 'Profil',
		'settings' => 'Réglages',
		'topic_actions' => 'Actions sur les sujets',
		'user_group' => 'Utilisateurs &amp; Groupes',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type' => array(
		'a_' => 'Permissions admin',
		'cms_' => 'Permissions CMS',
		'cmsl_' => 'Permissions Pages du CMS',
		'cmss_' => 'Permissions Pages standard du cms',
		'cmsb_' => 'Permissions blocs CMS',
		'f_' => 'Permissions forum',
		'm_' => 'Permissions modérateurs',
		'pl_' => 'Permissions plugins',
		'u_' => 'Permissions utilisateurs',
		'global' => array(
			'm_' => 'Permissions modérateurs globaux',
		),
	),

	)
);

// Admin Permissions
$lang = array_merge($lang, array( // "this also includes seeing browser in viewonline" wtf
	'acl_a_user' => array('lang' => 'Peut gérer les utilisateurs', 'cat' => 'user_group'),
	'acl_a_group' => array('lang' => 'Peut gérer les groupes', 'cat' => 'user_group'),

	'acl_a_modules' => array('lang' => 'Peut gérer les modules', 'cat' => 'permissions'),
	'acl_a_viewauth' => array('lang' => 'Peut voir les permissions', 'cat' => 'permissions'),
	'acl_a_authgroups' => array('lang' => 'Peut modifier les permissions d\'un groupe', 'cat' => 'permissions'),
	'acl_a_authusers' => array('lang' => 'Peut modifier les permissions d\'un utilisateur', 'cat' => 'permissions'),
	'acl_a_fauth' => array('lang' => 'Peut modifier les permissions d\'un forum', 'cat' => 'permissions'),//"permission class"?
	'acl_a_mauth' => array('lang' => 'Peut modifier les permissions des modérateurs', 'cat' => 'permissions'), //Can alter moderator permission class
	'acl_a_aauth' => array('lang' => 'Peut modifier les permissions des administrateurs', 'cat' => 'permissions'),
	'acl_a_uauth' => array('lang' => 'Peut modifier les permissions des utilisateurs', 'cat' => 'permissions'),
	'acl_a_roles' => array('lang' => 'Peut gérer les rôles', 'cat' => 'permissions'),
	)
);

// CMS Permissions
$lang = array_merge($lang, array(
	'acl_cms_admin' => array('lang' => 'Peut accéder à la gestion du CMS', 'cat' => 'cms'),
	'acl_cms_settings' => array('lang' => 'Peut modifier les réglages du CMS', 'cat' => 'cms'),
	'acl_cms_layouts' => array('lang' => 'Peut modifier les pages du CMS', 'cat' => 'cms'),
	'acl_cms_layouts_special' => array('lang' => 'Peut modifier les pages standard', 'cat' => 'cms'),
	'acl_cms_blocks' => array('lang' => 'Peut gérer les blocs', 'cat' => 'cms'),
	'acl_cms_blocks_global' => array('lang' => 'Peut gérer les blocs globaux', 'cat' => 'cms'),
	'acl_cms_permissions' => array('lang' => 'Peut gérer les permissions', 'cat' => 'cms'),
	'acl_cms_menu' => array('lang' => 'Peut gérer les menus', 'cat' => 'cms'),
	'acl_cms_ads' => array('lang' => 'Peut gérer les pubs', 'cat' => 'cms'),

	// Only Local
	'acl_cmsl_admin' => array('lang' => 'Peut gérer le contenu de la page', 'cat' => 'layouts'),

	'acl_cmss_admin' => array('lang' => 'Peut gérer le contenu de la page', 'cat' => 'layouts'),

	'acl_cmsb_admin' => array('lang' => 'Peut gérer le contenu du bloc', 'cat' => 'blocks'),
	)
);

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_html' => array('lang' => 'Peut utiliser le HTML dans ses messages', 'cat' => 'post'),

	'acl_f_topicdelete' => array('lang' => 'Peut supprimer des sujets', 'cat' => 'actions'),
	)
);

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_topicdelete' => array('lang' => 'Peut supprimer des sujets', 'cat' => 'topic_actions'),
	)
);

// Plugins Permissions
$lang = array_merge($lang, array(
	'acl_pl_admin' => array('lang' => 'Peut gérer le contenu dans les plugins', 'cat' => 'plugins_actions'),
	'acl_pl_input' => array('lang' => 'Peut ajouter du contenu dans les plugins', 'cat' => 'plugins_actions'),
	'acl_pl_edit' => array('lang' => 'Peut modifier du contenu dans les plugins', 'cat' => 'plugins_actions'),
	'acl_pl_delete' => array('lang' => 'Peut retirer du contenu dans les plugins', 'cat' => 'plugins_actions'),
	)
);

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_html' => array('lang' => 'Peut utiliser le HTML dans ses messages', 'cat' => 'post'),
	)
);


?>