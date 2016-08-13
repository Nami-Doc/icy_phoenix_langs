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
* @author Nathan Guse (EXreaction) http://lithiumstudios.org
* @author David Lewis (Highway of Life) highwayoflife@gmail.com
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
	'ACTION' => 'Action',
	'ADVANCED' => 'Avancé',
	'AUTH_CACHE_PURGE' => 'Vidage du cache des authorisations',

	'CACHE_PURGE' => 'Vidage du cache du forum',
	'CONFIGURE' => 'Configuration',
	'CONFIG_ADD' => 'Ajout d\'une nouvelle variable de configuration : %s',
	'CONFIG_ALREADY_EXISTS' => 'Erreur : La variable de configuration %s existe d&eacute;j&agrave;',
	'CONFIG_NOT_EXIST' => 'Erreur : La variable de configuration %s n\'existe pas',
	'CONFIG_REMOVE' => 'Suppression de la variable de configuration %s',
	'CONFIG_UPDATE' => 'Mise &agrave; jour de la variable de configuration %s',

	'DISPLAY_RESULTS' => 'Afficher tous les r&eacute;sultats',
	'DISPLAY_RESULTS_EXPLAIN' => 'Permet d\'afficher toutes les actions, et les r&eacute;sultats de chacune des actions.',

	'ERROR_NOTICE' => 'Une ou plusieurs erreurs sont survenues pendant l\'ex&eacute;cution. Vous pouvez <a href="%s">T&eacute;l&eacute;charger ce fichier</a> pour avoir une liste d\'erreur, afin de demander de l\'assistance sur les forums de support IcyPhoenix.<br /><br />Si vous n\'arrivez pas &agrave; t&eacute;l&eacute;charger le fichier, vous pouvez y acc&eacute;der via votre FTP, le chemin est <b>%s</b>',
	'ERROR_NOTICE_NO_FILE' => 'Une erreur est survenue pendant l\'ex&eacute;cution. Notez les erreurs afin de demander du support',

	'FAIL' => '&Eacute;chec',
	'FILE_COULD_NOT_READ' => 'Erreur : Impossible d\'ouvrir le fichier %s en lecture.',
	'FOUNDERS_ONLY' => 'Vous devez &ecirc;tre un fondateur du forum pour acc&eacute;der &agrave; cette page ',

	'GROUP_NOT_EXIST' => 'Le groupe n\'existe pas',

	'IGNORE' => 'Ignorer',
	'IMAGESET_CACHE_PURGE' => 'Refreshing the %s imageset',
	'INSTALL' => 'Install',
	'INSTALL_MOD' => 'Install %s',
	'INSTALL_MOD_CONFIRM' => 'Are you ready to install %s?',

	'MODULE_ADD' => 'Adding %1$s module: %2$s',
	'MODULE_ALREADY_EXIST' => 'ERROR: Module already exists.',
	'MODULE_NOT_EXIST' => 'ERROR: Module does not exist.',
	'MODULE_REMOVE' => 'Removing %1$s module: %2$s',

	'NONE' => 'None',
	'NO_TABLE_DATA' => 'ERROR: No table data was specified',

	'PARENT_NOT_EXIST' => 'ERROR: The parent category specified for this module does not exist.',
	'PERMISSIONS_WARNING' => 'New permission settings have been added.  Be sure to check your permission settings and see that they are as you would like them.',
	'PERMISSION_ADD' => 'Adding new permission option: %s',
	'PERMISSION_ALREADY_EXISTS' => 'ERROR: Permission option %s already exists.',
	'PERMISSION_NOT_EXIST' => 'ERROR: Permission option %s does not exist.',
	'PERMISSION_REMOVE' => 'Removing permission option: %s',
	'PERMISSION_ROLE_ADD' => 'Adding new permission role: %s',
	'PERMISSION_ROLE_UPDATE' => 'Updating permission role: %s',
	'PERMISSION_ROLE_REMOVE' => 'Removing permission role: %s',
	'PERMISSION_SET_GROUP' => 'Setting permissions for the %s group.',
	'PERMISSION_SET_ROLE' => 'Setting permissions for the %s role.',
	'PERMISSION_UNSET_GROUP' => 'Unsetting permissions for the %s group.',
	'PERMISSION_UNSET_ROLE' => 'Unsetting permissions for the %s role.',

	'ROLE_ALREADY_EXISTS' => 'Permission role already exists.',
	'ROLE_NOT_EXIST' => 'Permission role does not exist',

	'SUCCESS' => 'Success',

	'TABLE_ADD' => 'Adding a new database table: %s',
	'TABLE_ALREADY_EXISTS' => 'ERROR: Database table %s already exists.',
	'TABLE_COLUMN_ADD' => 'Adding a new column named %2$s to table %1$s',
	'TABLE_COLUMN_ALREADY_EXISTS' => 'ERROR: The column %2$s already exists on table %1$s.',
	'TABLE_COLUMN_NOT_EXIST' => 'ERROR: The column %2$s does not exist on table %1$s.',
	'TABLE_COLUMN_REMOVE' => 'Removing the column named %2$s from table %1$s',
	'TABLE_COLUMN_UPDATE' => 'Updating a column named %2$s from table %1$s',
	'TABLE_KEY_ADD' => 'Adding a key named %2$s to table %1$s',
	'TABLE_KEY_ALREADY_EXIST' => 'ERROR: The index %2$s already exists on table %1$s.',
	'TABLE_KEY_NOT_EXIST' => 'ERROR: The index %2$s does not exist on table %1$s.',
	'TABLE_KEY_REMOVE' => 'Removing a key named %2$s from table %1$s',
	'TABLE_NOT_EXIST' => 'ERROR: Database table %s does not exist.',
	'TABLE_REMOVE' => 'Removing database table: %s',
	'TABLE_ROW_INSERT_DATA' => 'Inserting data in the %s database table.',
	'TABLE_ROW_REMOVE_DATA' => 'Removing a row from the %s database table',
	'TABLE_ROW_UPDATE_DATA' => 'Updating a row in the %s database table.',
	'TEMPLATE_CACHE_PURGE' => 'Refreshing the %s template',
	'THEME_CACHE_PURGE' => 'Refreshing the %s theme',

	'UNINSTALL' => 'Uninstall',
	'UNINSTALL_MOD' => 'Uninstall %s',
	'UNINSTALL_MOD_CONFIRM' => 'Are you ready to uninstall %s?  All settings and data saved by this mod will be removed!',
	'UNKNOWN' => 'Unknown',
	'UPDATE_MOD' => 'Update %s',
	'UPDATE_MOD_CONFIRM' => 'Are you ready to update %s?',
	'UPDATE_UMIL' => 'This version of UMIL is outdated.<br /><br />Please download the latest UMIL (Unified MOD Install Library) from: <a href="%1$s" target="_blank">%1$s</a>',

	'VERSIONS' => 'Mod Version: <strong>%1$s</strong><br />Currently Installed: <strong>%2$s</strong>',
	'VERSION_SELECT' => 'Version Select',
	'VERSION_SELECT_EXPLAIN' => 'Do not change from “Ignore” unless you know what you are doing or were told to.',
	)
);

?>
