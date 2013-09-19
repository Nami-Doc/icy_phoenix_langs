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
* Chris Lennert - (calennert@users.sourceforge.net) - (http://lennertmods.sourceforge.net)
* Lopalong
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
	'BBUS_Mod_Title' => 'Statistiques d\'utilisation du forum',
	'BBUS_Misc' => 'Divers   ',

	'BBUS_ColHeader_PostRate' => 'Fréquence d\'ajout<br/>de message',
	'BBUS_ColHeader_PctUTP' => '%TMU',
	'BBUS_ColHeader_PctUTUP' => '%TMUND',
	'BBUS_ColHeader_NewTopics' => 'Nouveaux sujets',
	'BBUS_ColHeader_TopicRate' => 'Fréquence d\'ajout<br/>de sujet',
	'BBUS_ColHeader_Topics_Watched' => 'Suivis',
	'BBUS_ColHeader_Header' => 'En-tête',
	'BBUS_ColHeader_Description' => 'Description',

	'BBUS_ColHeader_Posts_Explain' => 'Nombre total de messages.',
	'BBUS_ColHeader_PostRate_Explain' => 'Nombre moyen de messages par jour.',
	'BBUS_ColHeader_PctUTP_Explain' => 'Pourcentage du total des messages de l\'utilisateur.',
	'BBUS_ColHeader_PctUTUP_Explain' => 'Pourcentage du total des messages de l\'utilisateur non délestés',
	'BBUS_ColHeader_NewTopics_Explain' => 'Nombre de sujets commencés',
	'BBUS_ColHeader_TopicRate_Explain' => 'Moyenne de nouveaux sujets par jour',
	'BBUS_ColHeader_Topics_Watched_Explain' => 'Nombre total de messages surveillés',

	'BBUS_Col_Descriptions_Caption' => 'Descriptions des colonnes',

	'BBUS_Msg_NoPosts' => 'L\'utilisateur n\'a posté dans aucun forum.',
	'BBUS_Unpruned_Posts' => 'Nombre de messages délestés',
	'BBUS_Scale_By' => '&Eacute;chelle :',

// Admin Configuration page
	'BBUS_Settings_Caption' => 'Réglages des Statistiques d\'utilisation du forum',
	'BBUS_Settings_Explain' => 'Ces réglages vous permettent de configurer qui aura accès aux statistiques utilisateurs (depuis la page profil) et vous permettra de contrôler quelles données seront affichées.',

	'BBUS_Setting_ViewLevel_Caption' => 'Niveau nécessaire pour accéder aux stats',
	'BBUS_Setting_ViewLevel_Note' => '<i>Note</i> : Ce champ est en lecture seule.<br />Utilisez les caches à cocher ci-dessus.',

	'BBUS_Setting_ViewLevel_Explain1' => 'Le niveau nécessaire est une somme composite d\'une ou plusieurs cases à cocher qui permettent de déterminer si un utilisateur aura le droit de voir les statistiques des utilisateurs sur le forum. <b>Utilisez les cases à cocher.</b><br /><br />Les cases sont les suivants :<br />',

	'BBUS_Setting_ViewLevel_Explain2' => '<br />Le réglage de base pour beaucoup de forum sera 24 (16 + 8), permettant aux administrateurs et aux modérateurs d\'accéder aux stats des utilisateurs, alors que les autres utilisateurs n\'auront accès qu\'aux informations classiques du profil.<br/><br/>Il est recommandé de limiter la vue des statistiques, particulièrement sur les gros forums, pour éviter les problèmes de performances lorsque que beaucoup de stats sont calculées en même temps.',

	'BBUS_Setting_ViewOptions_Caption' => 'Données à afficher',
	'BBUS_Setting_ViewOptions_Note' => '<i>Note</i> : Ce champ est en lecture seule.<br />Utilisez les caches à cocher ci-dessus.',
	'BBUS_Setting_ViewOptions_Explain1' => 'Comme pour le niveau nécessaire pour afficher les stats, utiliser les cases à cocher pour afficher ou cacher des données.',
	'BBUS_Setting_ViewOptions_Explain2' => '',

	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'Facteur par défaut pour les messages',
	'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'Défini le facteur par défaut pour la fréquence d\'ajout de messages.',

	'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'Facteur par défaut pour les sujets',
	'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'Défini le facteur par défaut pour la fréquence d\'ajout de sujets.',

	'BBUS_ViewLevel_Anonymous_Caption' => 'Visiteurs',
	'BBUS_ViewLevel_Self_Caption' => 'Soi-même',
	'BBUS_ViewLevel_Users_Caption' => 'Membres',
	'BBUS_ViewLevel_Moderators_Caption' => 'Modérateus',
	'BBUS_ViewLevel_Admins_Caption' => 'Admins',
	'BBUS_ViewLevel_SpecialGrp_Caption' => 'Groupe spécial',

	'BBUS_ViewLevel_Anonymous_Explain' => 'Autoriser les visiteurs à voir les stats.',
	'BBUS_ViewLevel_Self_Explain' => 'Autorise les membres à voir leurs propres stats.',
	'BBUS_ViewLevel_Users_Explain' => 'Autorise n\'importe quel utilisateur à voir les stats d\'autres.',
	'BBUS_ViewLevel_Moderators_Explain' => 'Autorise les modérateurs à voir les stats.',
	'BBUS_ViewLevel_Admins_Explain' => 'Autorise les administrateurs à voir les stats (recommendé).',
	'BBUS_ViewLevel_SpecialGrp_Explain' => 'Autorise un groupe désigné à voir les stats.',

	'BBUS_ViewOption_Show_All_Forums_Caption' => 'Montrer tous les forums, quel que soit le compteur de messages du membre.',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => 'Montrer la colonne %TMUND dans les stats',
	'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Montrer la section "Divers"',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => 'Afficher "Nombre total de messages non délestés" dans la section Divers',
	'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'Permettre à l\'utilisateur de modifier l\'échelle pour la fréquence des messages',
	'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'Permettre à l\'utilisateur de modifier l\'échelle pour la fréquence des sujets',

	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',

	'BBUS_Setting_SpecialGrp_Caption' => 'Groupe avec accès spécial',
	'BBUS_Setting_SpecialGrp_Explain' => 'Désigne le groupe qui sera capable de voir les statistiques avancées par utilisateur. <i>Note</i> : Cette option aura un effet seulement si l\'option "Groupe Spécial" est activée.',
	)
);

?>