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
* Smartor (smartor_xp@hotmail.com)
* Lopalong
* Traduction française par Vendethiel et Yros
*/


if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

//V: Cette partie avait été traduite par Kooky <kooky@altern.org>
// merci à lui (via l'archive de la LoveMod - ezcom-fr.com)
$lang['Album_config'] = 'Configuration de l\'Album';
$lang['Album_config_explain'] = 'Ici, vous pouvez changer les options principales de votre Album Photos';
$lang['Album_config_updated'] = 'La configuration de l\'Album a été mise à jour avec succès';
$lang['Click_return_album_config'] = 'Cliquez %sici%s pour revenir à la configuration de l\'Album';
$lang['Max_pics'] = 'Nombre maximum de photos pour chaque galerie (-1 = illimité)';
$lang['User_pics_limit'] = 'Nombre limite de photos par galerie pour chaque membre (-1 = illimité)';
$lang['Moderator_pics_limit'] = 'Nombre limite de photos par galerie pour chaque modérateur (-1 = illimité)';
$lang['Pics_Approval'] = 'Approbation des photos';
$lang['Rows_per_page'] = 'Nombre de lignes sur la page des miniatures';
$lang['Cols_per_page'] = 'Nombre de colonnes sur la page des miniatures';
$lang['Thumbnail_quality'] = 'Qualité des miniatures (1-100)';
$lang['Thumbnail_cache'] = 'Cache des miniatures';
$lang['Manual_thumbnail'] = 'Option manuelle des miniatures';
$lang['GD_version'] = 'Optimisation pour la version de la librairie GD';
$lang['Pic_Desc_Max_Length'] = 'Longeur maximale de la description/commentaire de la photo (en caractères)';
$lang['Hotlink_prevent'] = 'Prévention des liens directs';
$lang['Hotlink_allowed'] = 'Autoriser des domaines pour les liens directs (séparer par une virgule)';
$lang['Personal_gallery'] = 'Autoriser la création d\'une galerie privée par les membres';
$lang['Personal_gallery_limit'] = 'Nombre limite de photos pour chaque galerie privée (-1 = illimité)';
$lang['Personal_gallery_view'] = 'Qui peut voir les galeries privées';
$lang['Rate_system'] = 'Autoriser le sytème de notation';
$lang['Rate_Scale'] = 'Echelle de notation';
$lang['Comment_system'] = 'Autoriser le système de commentaire';
$lang['Thumbnail_Settings'] = 'Options des miniatures';
$lang['Extra_Settings'] = 'Options spéciales';
$lang['Default_Sort_Method'] = 'Méthode de tri par défaut';
$lang['Default_Sort_Order'] = 'Ordre de tri par défaut';
$lang['Fullpic_Popup'] = 'Voir la photo complète dans une fenêtre';


// Personal Gallery Page
$lang['Personal_Galleries'] = 'Galeries Privées';
$lang['Album_personal_gallery_title'] = 'Galeries Privées';
$lang['Album_personal_gallery_explain'] = 'Sur cette page, vous pouvez choisir quels sont les groupes autorisés à créer et voir les galeries privées. Ces options s\'appliquent uniquement lorsque vous réglez "Autoriser la création d\'une galerie privée par les membres" ou "Qui peut voir les galeries privées" sur "PRIVE" dans l\'écran de configuration de l\'Album.';
$lang['Album_personal_successfully'] = 'Les options ont été mises à jour avec succès';
$lang['Click_return_album_personal'] = 'Cliquez %sici%s pour revenir aux options des Galeries Privées';

//
// Categories
//
$lang['Album_Categories_Title'] = 'Contrôle des galeries de l\'Album';
$lang['Album_Categories_Explain'] = 'Sur cette écran, vous pouvez gérer vos galeries: créer, modifier, supprimer, ordonner, etc.';
$lang['Category_Permissions'] = 'Permissions de la galerie';
$lang['Category_Title'] = 'Titre de la galerie';
$lang['Category_Desc'] = 'Description de la galerie';
$lang['View_level'] = 'Voir';
$lang['Upload_level'] = 'Uploader';
$lang['Rate_level'] = 'Noter';
$lang['Comment_level'] = 'Commenter';
$lang['Edit_level'] = 'Editer';
$lang['Delete_level'] = 'Supprimer';
$lang['New_category_created'] = 'La nouvelle galerie a été créée avec succès';
$lang['Click_return_album_category'] = 'Cliquez %sici%s pour revenir à la gestion des galeries de l\'Album';
$lang['Category_updated'] = 'Cette galerie a été mise à jour avec succès';
$lang['Delete_Category'] = 'Supprimer la galerie';
$lang['Delete_Category_Explain'] = 'Le formulaire ci-dessous vous autorise à supprimer une galerie et à décider où vous souhaitez placer les photos qu\'elle contient.';
$lang['Delete_all_pics'] = 'Supprimer toutes les photos';
$lang['Category_deleted'] = 'Cette galerie a été supprimée avec succès';
$lang['Category_changed_order'] = 'Cette galerie a changé d\'ordre avec succès';

//
// Permissions
//
$lang['Album_Auth_Title'] = 'Permissions de l\'Album';
$lang['Album_Auth_Explain'] = 'Ici, vous pouvez choisir quels groupes peuvent être modérateur pour chaque galerie de l\'Album ou seulement en tant qu\'accès privé.';
$lang['Select_a_Category'] = 'Sélectionner une galerie';
$lang['Look_up_Category'] = 'Consulter la galerie';
$lang['Album_Auth_successfully'] = 'Les permissions ont été mises à jour avec succès';
$lang['Click_return_album_auth'] = 'Cliquez %sici%s pour revenir aux permissions de l\'Album';

$lang['Upload'] = 'Uploader';
$lang['Rate'] = 'Noter';
$lang['Comment'] = 'Commentaire';

//
// Clear Cache
//
$lang['Clear_Cache'] = 'Vider le cache';
$lang['Album_clear_cache_confirm'] = 'Si vous utilisez l\'option du cache des miniatures, vous devez vider votre cache des miniatures après avoir modifié vos options des miniatures dans la configuration de l\'Album pour qu\'elles soient générées à nouveau.<br /><br />Voulez-vous le vider maintenant ?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />Votre cache des miniatures a été vidé avec succès<br />&nbsp;';

//V: partie IP

$lang = array_merge($lang, array(
// 01 - Configuration
	'Email_Notification' => 'Enable email notification on new images on album (only to admins)',
	'Show_Download' => 'Show DOWNLOAD button (which enables the downloading of pictures in ZIP format) only to those who have UPLOAD permission in the Album (if you choose ALWAYS the button will be always available even if the users have no UPLOAD permissions)',
	'Show_Slideshow' => 'Enable Slideshow feature',
	'Show_Slideshow_Script' => 'Enable transition effects for Slideshow',
	'Show_Pic_Size' => 'Show image size on thumbnail',
	'Show_IMG_No_GD' => 'Show GIF thumbnails without using GD libraries (full images are loaded and then just shown resized).',
	'Show_GIF_MidThumb' => 'Show full GIF images if Mid Thumb is enabled.',
	'Show_Pics_Nav' => 'Show Picture Navigation Box in Show Page',
	'Invert_Nav_Arrows' => 'Invert the Arrows link in Showpage (right arrow = more recent)',
	'Show_Inline_Copyright' => 'Show Copyright Info on a single line',
	'Enable_Nuffimage' => 'Enable Pictures Special Effects page based on Nuffmon Images Class',
	'Enable_Sepia_BW' => 'Enable Sepia and B&W in Special Effects page (disable this function if you want to not load the server\'s CPU)',
	'Show_EXIF_Info' => 'Show picture EXIF information',
	'Set_Memory' => 'Set a memory limit via PHP (MB)',
	'Set_Memory_Explain' => 'This feature may be used to increase memory limit in PHP (this setting must be allowed by your hosting IP): you can try to increase memory when your images are not loaded correctly. To avoid higher memory limits the max value is forced to be 16MB.',
	'LB_Preview' => 'Enable LightBox Preview',
	'LB_Preview_Explain' => 'This feature will show a LightBox with picture preview when moving the mouse over a thumbnail.',
	'Album_config_notice' => 'If you change the current Photo Album settings and then select another tab, you will be prompted to save your changes.<br />The system will <b>not save</b> the changes for you automatically.',
	'Save_sucessfully_confimation' => '%s was saved successfully',
	'Show_Recent_In_Subcats' => 'Show recent pictures in subcategories',
	'Show_Recent_Instead_of_NoPics' => 'Show recent pictures instead of no picture message',
	'Show_Last_Comments' => 'Display last comments block on album index and categories',
	'Album_Index_Settings' => 'Album Index',
	'Album_Index_Page_Settings' => 'Album Index Page Settings',
	'Show_Index_Subcats' => 'Show subcategories in index table',
	'Show_Index_Thumb' => 'Show category thumbnails in index table',
	'Show_Index_Pics' => 'Show the number of pictures in current category in index table',
	'Show_Index_Comments' => 'Show the number of comments in current category in index table',
	'Show_Index_Total_Pics' => 'Show the number of total pictures for current categories and all its subcategories in index table',
	'Show_Index_Total_Comments' => 'Show the number of total comments for current categories and all its subcategories in index table',
	'Show_Index_Last_Comment' => 'Show last comments for current categories and all its subcategories in index table',
	'Show_Index_Last_Pic' => 'Show last picture info for current categories and all its subcategories in index table',
	'Line_Break_Subcats' => 'Show each subcategory on a new line',
	'Show_Personal_Gallery_Link' => 'Show Personal Gallery and Users Personal Gallery link in Subcategories',
	'Album_Personal_Auth_Explain' => 'Choose which usergroup(s) can be the moderators for <b>all</b> personal album categories or just has the private access to them',
	'Album_debug_mode' => 'Enable the hierarchy debug mode.<br /><span class="gensmall">This will generate a lot of extra output on the page and also some header warnings, which are all ok.<br />This option should <b>only</b> be used when having problems.</span>',
	'New_Pic_Check_Interval' => 'The time to use to see if a picture is new or not.<br /><span class="gensmall"><b>Format</b> : &lt;number&gt;&lt;type&gt; Where type is either h, d, w or m (hour, day, week or month)<br /> e.g. 12H = 12 hours and 12D = 12 days and 12W = 12 weeks and 12M = 12 months<br />If no type is specified the system will use <b>days</b></span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">H = HOURS, D = DAYS, W = WEEKS, M = MONTHS</span>',
	'New_Pic_Check_Interval_LV' => 'Enabling this option the new pics counter is based on users last visit time.',
	'Enable_Show_All_Pics' => 'Enable toggling of personal gallery view mode (all pictures or only selected category).<br /> When set to <b>no</b>, only selected category is shown.',
	'Enable_Index_Supercells' => 'Enable super cells in the index table. <br /><span class="gensmall">This will enable the mouseover effects on the columns, also knows as the supercell effect.</span>',
	'Show_OTF_Link' => 'Show "Album OTF" link on Album Index',
	'Show_AllPics_Link' => 'Show "All Pics" link on Album Index',
	'Show_PG_Link' => 'Show "Personal Galleries" link on Album Index',

// 02 - Personal Galleries
	'Allow_Album_Avatars' => 'Allow users to use own posted images in Album as Avatar',
	'Album_Personal_Settings' => 'Personal Galleries',
	'Show_Personal_Sub_Cats' => 'Show personal subcategories in index table',
	'Personal_Gallery_Approval' => 'Personal gallery pics approval',
	'Personal_Gallery_MOD' => 'Personal gallery can be moderated by owner',
	'Personal_Sub_Cat_Limit' => 'Maximum number of subcategories (-1 = unlimited)',
	'User_Can_Create_Personal_SubCats' => 'Users can create subcategories in own personal gallery',
	'Click_return_personal_gallery_index' => 'Click %sHere%s to return to the personal gallery index',
	'Show_Recent_In_Personal_Subcats' => 'Show recent pictures in personal subcategories',
	'Show_Recent_Instead_of_Personal_NoPics' => 'Show recent pictures instead of no picture message in personal gallery',

// 03 - Categories
	'Categories' => 'Album Categories',
	'Personal_Root_Gallery' => 'Personal Gallery Root Category',
	'Parent_Category' => 'Parent Category (for this category)',
	'Child_Category_Moved' => 'Selected category had child categories. The child categories got moved to the <b>%s</b> category.',
	'No_Self_Refering_Cat' => 'You cannot set a category\'s parent to itself',
	'Can_Not_Change_Main_Parent' => 'You cannot change to parent of the main category of your personal gallery',
	'Watermark' => 'WaterMark',
	'Watermark_explain' => 'You can specify the watermark file to be used in this category. Insert the watermark file path respect to your Icy Phoenix root (i.e.: <b>images/album/mark_fap.png</b>). The watermark will be applied only if Watermark feature is on.',
	'Cat_Pics_Synchronize' => 'Sync Pics Counter',
	'Cat_Pics_Synchronized' => 'All pictures counter have been synchronized.',

// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'Use old thumbnails functions',
	'Use_Old_Thumbnails_Explain' => 'If you enable this feature, you will use the old thumbnails functions to generate small and mid thumbnails and a quick full pic loading. You should use this feature only if you are having problems without enabling it.',

// 06 - Sorting
	'Album_Category_Sorting' => 'Album Categories Sorting',
	'Album_Category_Sorting_Id' => 'ID',
	'Album_Category_Sorting_Name' => 'Name',
	'Album_Category_Sorting_Order' => 'Sort Order (default)',
	'Album_Category_Sorting_Direction' => 'Album Categories Sorting Direction',
	'Album_Category_Sorting_Asc' => 'Ascending',
	'Album_Category_Sorting_Desc' => 'Descending',

	'Album_Picture_Sorting' => 'Album Pictures Sorting',
	'Album_Picture_Sorting_Direction' => 'Album Pictures Sorting Direction',

// 07 - Clear Cache
	'Clear_Cache_Tab' => 'Cache',

// ACP - Javascript text
	'acp_ask_save_changes' => 'Do you want to save the changes ?\n(OK = Yes, Cancel = No)',
	'acp_nothing_to_save' => 'Nothing to save!',
	'acp_settings_changed_ask_save' => 'You have changed the settings. Do you want to save them?\n(OK = Yes, Cancel = No)',

// GD Info
	'GD_Info' => 'GD Info',
	'GD_Title' => 'GD Info',
	'GD_Description' => 'Retrieve information about the currently installed GD library',
	'GD_Version' => 'Version:',
	'GD_Freetype_Support' => 'Freetype Fonts Support:',
	'GD_Freetype_Linkage' => 'Freetype Link Type:',
	'GD_T1lib_Support' => 'T1lib Support:',
	'GD_Gif_Read_Support' => 'Gif Read Support:',
	'GD_Gif_Create_Support' => 'Gif Create Support:',
	'GD_Jpg_Support' => 'Jpg/Jpeg Support:',
	'GD_Png_Support' => 'Png Support:',
	'GD_Wbmp_Support' => 'WBMP Support:',
	'GD_XBM_Support' => 'XBM Support:',
	'GD_Jis_Mapped_Support' => 'Japanese Font Support:',
	'GD_True' => 'Yes',
	'GD_False' => 'No',

// Multiple Uploads Admin configuration
	'Upload_Settings' => 'Upload',
	'Max_Files_To_Upload' => 'Maximum number of files user can upload at a time',
	'Album_upload_settings' => 'Album Upload Settings',
	'Max_pregenerated_fields' => 'Maximum number of fields to pre-generate',
	'Dynamic_field_generation' => 'Enable dynamic adding of upload fields',
	'Pre_generate_fields' => 'Pre-generate the upload fields',
	'Propercase_pic_title' => 'Proper-case picture title e.g. <i>\'This Is A Picture Title\'</i><br />Setting it to \'NO\' will result in this <i>\'This is a picture title\'</i>',
	'Pic_Resampling' => 'Enabling this option, each image will be resized on the fly if needed (to keep image properties respecting the album settings in ACP).',
	'Max_file_size_resampling' => 'Maximum file size before re-sampling (bytes)',

// CLowN
	'SP_Album_config' => 'CLowN SP',
	'SP_Album_config_explain' => 'Configure some options for the Album Service Pack',
	'SP_Album_sp_general' => 'General Config',
	'SP_Album_sp_watermark' => 'WaterMark Config',
-	'SP_Album_sp_hotornot' => 'Hot or Not Config',
	'SP_Rate_type' => 'Select picture rating display',
	'SP_Rate_type_0' => 'Images only',
	'SP_Rate_type_1' => 'Numbers only',
	'SP_Rate_type_2' => 'Numbers and Images',
	'SP_Display_latest' => 'Display latest submitted pictures block',
	'SP_Display_highest' => 'Display highest rated pictures block',
	'SP_Display_most_viewed' => 'Display most viewed pictures block',
	'SP_Display_random' => 'Display random pictures block',
	'SP_Pic_row' => 'Number of rows on thumbnail blocks',
	'SP_Pic_col' => 'Number of columns on thumbnail blocks',
	'SP_Midthumb_use' => 'Use mid-thumbnail',
	'SP_Midthumb_cache' => 'Enable caching of mid-thumbnail',
	'SP_Midthumb_high' => 'Height of mid-thumbnail (pixel)',
	'SP_Midthumb_width' => 'Width of mid-thumbnail (pixel)',
	'SP_Watermark' => 'Use WaterMark',
	'SP_Watermark_users' => 'Show WaterMark for all users, if \'No\' only display to unregistered users',
	'SP_Watermark_placent' => 'WaterMark position on the picture',
	'SP_Hon_already_rated' => 'Unlimited rating on Hot or Not page',
	'SP_Hon_sep_rating' => 'Store Hot or Not rating in a separate table',
	'SP_Hon_where' => 'Display pictures on hot or not from what categories? (leave blank to use pictures from all of the categories, if more then one category, separate by commas)',
	'SP_Hon_users' => 'Can unregistered users rate',

	'SP_Disabled' => 'Disabled',
	'SP_Enabled' => 'Enabled',
	'SP_Yes' => 'Yes',
	'SP_No' => 'No',
	'SP_Always' => 'Always',
	'SP_Submit' => 'Submit',
	'SP_Reset' => 'Reset',

// Nuffload
	'Nuffload_Config' => 'Nuffload Configuration',
	'Enable_Nuffload' => 'Enable Nuffload',
	'Enable_Nuffload_Explain' => 'Enabling this option, Nuffload will be used instead of the standard upload form.',
	'progress_bar_configuration' => 'Nuffload - Progress Bar Configuration',
	'perl_uploader' => 'Enable Perl uploader',
	'path_to_bin' => 'Path from icyphoenix root to cgi-bin (i.e. <b>./cgi-bin/</b> if you have icyphoenix in a sub folder)',
	'show_progress_bar' => 'Show progress bar on upload',
	'close_progress_bar' => 'Close progress bar on finish',
	'activity_timeout' => 'Activity timeout (secs)',
	'simple_format' => 'Use simple formatting for progress bar',
	'multiple_uploads_configuration' => 'Nuffload - Multiple Uploads Configuration',
	'multiple_uploads' => 'Enable multiple uploads',
	'max_uploads' => 'Maximum upload fields',
	'zip_uploads' => 'Enable zip uploads',
	'image_resizing_configuration' => 'Nuffload - Image Resizing Configuration',
	'image_resizing' => 'Enable image resizing',
	'image_width' => 'Image width',
	'image_height' => 'Image height',
	'image_quality' => 'Image quality',
	)
);
?>