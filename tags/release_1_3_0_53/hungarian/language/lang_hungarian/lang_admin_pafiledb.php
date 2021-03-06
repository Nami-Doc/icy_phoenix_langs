<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_pafiledb.php 89 2009-03-11 10:03:30Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
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
// Categories
	'Cat_manage_title' => 'Category Management',
	'File_manage_title' => 'File Management',
	'All_files' => 'All Files',
	'Approved_files' => 'Unapproved Files',
	'Broken_files' => 'Broken Files',
	'File_cat' => 'File in Category',
	'Maintenance' => 'File Maintenance',
	'Approve' => 'Approve',
	'Unapprove' => 'Unapprove',
	'File_mode' => 'View',
	'Approve_selected' => 'Approve Selected',
	'Unapprove_selected' => 'Unapprove Selected',
	'Delete_selected' => 'Delete Selected',
	'No_file' => 'There are no files',
	'Acat' => 'Category: Add',
	'Ecat' => 'Category: Edit',
	'Dcat' => 'Category: Delete',
	'Rcat' => 'Category: Re-order',
	'Cat_Permissions' => 'Category Permissions',
	'User_Permissions' => 'User Permissions',
	'Group_Permissions' => 'Group Permissions',
	'User_Global_Permissions' => 'User Global Permissions',
	'Group_Global_Permissions' => 'Group Global Permissions',
	'Acattitle' => 'Add Category',
	'Ecattitle' => 'Edit Category',
	'Dcattitle' => 'Delete Category',
	'Rcattitle' => 'Re-order Categories',
	'Catexplain' => 'You can use the Category Management section to add, edit, delete and re-order categories. In order to add files to your database, you must have at least one category created. You can select a link below to manage your categories.',
	'Rcatexplain' => 'You can re-order categories to change the position they are displayed in on the main page. To re-order the categories, change the numbers to the order you want them shown. 1 will be shown first, 2 will be shown second, etc. This does not affect subcategories.',
	'Catadded' => 'The new category has been successfully added',
	'Catname' => 'Category Name',
	'Catnameinfo' => 'This will become the name of the category.',
	'Catdesc' => 'Category Description',
	'Catdescinfo' => 'This is a description of the files in the category',
	'Catparent' => 'Parent Category',
	'Catparentinfo' => 'If you want this category to be a subcategory, select the category you want it to be a subcategory of.',
	'Allow_file' => 'Allow Adding file',
	'Allow_file_info' => 'If you do not allow adding files to this category it will be a higher level category and you can add the category as a sub for this category, like in the forum.',
	'None' => 'None',
	'Catedited' => 'The category you selected has been successfully edited',
	'Delfiles' => 'What do you want to do with the files in this category?',
	'Do_cat' => 'What do you want to do with the subcategory in this category?',
	'Move_to' => 'Move to',
	'Catsdeleted' => 'The categories you selected have been successfully deleted',
	'Cdelerror' => 'You didn\'t select any categories to delete',
	'Rcatdone' => 'The categories have been successfully re-ordered',

//Categories Permission
	'View' => 'View',
	'Read' => 'Read',
	'View_file' => 'View File',
// MX Addon
	'Delete_file' => 'Delete File',
	'Edit_file' => 'Edit File',
// End
	'Upload' => 'Upload File',
	'Download_file' => 'Download File',
	'Rate' => 'Rate',
	'View_comment' => 'View Comments',
	'Post_comment' => 'Post Comments',
	'Edit_comment' => 'Edit Comments (n/a)',
	'Delete_comment' => 'Delete Comments',
	'Category_auth_updated' => 'Category permissions updated',
	'Click_return_catauth' => 'Click %sHere%s to return to Category Permissions',
	'Auth_Control_Category' => 'Category Permissions Control',
	'Category_auth_explain' => 'Alter the authorization levels of each category. Remember that changing the permission level of a category will affect which users can carry out the various operations within them.',
	'Select_a_Category' => 'Select a Category',
	'Look_up_Category' => 'Look Up Category',
	'Category' => 'Category',
	'Auth_Control_Category' => 'Category Permissions Control',

	'Category_ALL' => 'ALL',
	'Category_REG' => 'REG',
	'Category_PRIVATE' => 'PRIVATE',
	'Category_MOD' => 'MOD',
	'Category_ADMIN' => 'ADMIN',

// Configuration
	'Settings' => 'Configuration',
	'Settingstitle' => 'Download Configuration',
	'Settingsexplain' => 'Customize all the general download options.',
	'Dbname' => 'Database Name',
	'Dbnameinfo' => 'This is the name of the database, such as \'Download Index\'',
	'Sitename' => 'Site Name',
	'Sitenameinfo' => 'This is the name of your site for the navigation menu, such as \'Home\'',
	'Dburl' => 'Database URL',
	'Dburlinfo' => 'This is the URL to the directory where this is installed',
	'Hpurl' => 'Homepage URL',
	'Hpurlinfo' => 'This is the URL to your portal or home page',
	'Topnum' => 'Top Number',
	'Topnuminfo' => 'This is how many files will be displayed on the Top X Downloaded files list',
	'Nfdays' => 'New File Days',
	'Nfdaysinfo' => 'How many days a new file is to be listed with a \'New File\' icon. If this is set to 5, then all files added within the past 5 days will have the \'New File\' icon',
	'Showva' => 'Show \'View All Files\'',
	'Showvainfo' => 'Choose whether or not you wish to have the \'View All Files\' category displayed with the other categories on the main page',
	'Php_template' => 'PHP in template',
	'Php_template_info' => 'This will allow you to use php directly in the template files',
	'Dbdl' => 'Disable Downloads',
	'Dbdlinfo' => 'This will make the download section unavailable to users. This is a good option to use when making modifications to your database. Only Admins will be able to view the database',
	'Isdisabled' => 'The download section is currently unavailable, please try again later.',
	'Com_settings' => 'Comment Settings',
	'Com_allowh' => 'Allow HTML',
	'Com_allowb' => 'Allow BBCode',
	'Com_allows' => 'Allow Smileys',
	'Com_allowl' => 'Allow Links',
	'Com_messagel' => 'Default \'No Links\' Message',
	'Com_messagel_info' => 'If links are not allowed this text will be displayed instead',
	'Com_allowi' => 'Allow Images',
	'Com_messagei' => 'Default \'No Images\' Message',
	'Com_messagei_info' => 'If images are not allowed this text will be displayed instead',
	'Max_char' => 'Maximum Number of characters',
	'Max_char_info' => 'If someone posts a comment that exceeds the Maximum Number of Characters provided here an error message will be displayed (Limit the comment).',
	'Settings_changed' => 'Your settings have been successfully updated',
	'File_per_page' => 'Number of file per Page',
	'File_per_page_info' => 'Set the number of files per page, if you leave it empty the number of per page will be 20.',
	'Hotlink_prevent' => 'Hotlink Prevention',
	'Hotlinl_prevent_info' => 'Set this to yes if you don\'t want to allow hotlinks to the files',
	'Hotlink_allowed' => 'Allowed domains for hotlink',
	'Hotlink_allowed_info' => 'Allowed domains for hotlink (separated by a comma), for example, www.phpbb.com, www.icyphoenix.com',
	'Default_sort_method' => 'Default Sort Method',
	'Default_sort_order' => 'Default Sort Order',
	'Max_filesize' => 'Maximum File Size',
	'Max_filesize_explain' => 'Maximum File Size for Files. A value of 0 means \'unlimited\'. This Setting is restricted by your Server Configuration. For example, if your php Configuration only allows a maximum of 2 MB uploads, this cannot be overwritten by the Mod.',
	'Upload_directory' => 'Upload Directory',
	'Upload_directory_explain' => 'Enter the relative path from your icyphoenix installation to the Files upload directory. For example, enter \'downloads/\' if your icyphoenix Installation is located at http://www.yourdomain.com/icyphoenix and the Attachment Upload Directory is located at http://www.yourdomain.com/icyphoenix/downloads.',
	'Screenshots_directory' => 'Screenshots Directory',
	'Screenshots_directory_explain' => 'Enter the relative path from your icyphoenix installation to the Screenshots upload directory. For example, enter \'files/screenshots/\' if your icyphoenix Installation is located at http://www.yourdomain.com/icyphoenix and the Attachment Upload Directory is located at http://www.yourdomain.com/icyphoenix/files/screenshots.',
	'Forbidden_extensions' => 'Forbidden Extensions',
	'Forbidden_extensions_explain' => 'Add or delete the forbidden extensions. Separate each extension with a comma.',
	'Permission_settings' => 'Permission settings',
	'Auth_search' => 'Search Permission',
	'Auth_search_explain' => 'Allow search for specific group of users',
	'Auth_stats' => 'Stats Permission',
	'Auth_stats_explain' => 'Allow stats for specific group of users',
	'Auth_toplist' => 'Toplist Permission',
	'Auth_toplist_explain' => 'Allow toplist for specific group of users',
	'Auth_viewall' => 'Viewall Permission',
	'Auth_viewall_explain' => 'Allow viewall for specific group of users',
	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',


// Custom Field
	'Afield' => 'Custom Field: Add',
	'Efield' => 'Custom Field: Edit',
	'Dfield' => 'Custom Field: Delete',
	'Mfieldtitle' => 'Custom Fields',
	'Afieldtitle' => 'Add Field',
	'Efieldtitle' => 'Edit Field',
	'Dfieldtitle' => 'Delete Field',
	'Fieldexplain' => 'You can use the custom fields management section to add, edit, and delete custom fields. You can use custom fields to add more information about a file. For example, if you want an information field to put the file\'s size in, you can create the custom field and then you can add the file size on the Add/Edit file page.',
	'Fieldname' => 'Field Name',
	'Fieldnameinfo' => 'This is the name of the field, for example \'File Size\'',
	'Fielddesc' => 'Field Description',
	'Fielddescinfo' => 'This is a description of the field, for example \'File Size in Megabytes\'',
	'Fieldadded' => 'The custom field has been successfully added',
	'Fieldedited' => 'The custom field you selected has been successfully edited',
	'Dfielderror' => 'You didn\'t select any fields to delete',
	'Fieldsdel' => 'The custom fields you selected have been successfully deleted',

	'Field_data' => 'Options',
	'Field_data_info' => 'Enter the options that the user can choose from. Separate each option with a new line (carriage return).',
	'Field_regex' => 'Regular Expression',
	'Field_regex_info' => 'You may require the input field to match a regular expression %s(PCRE)%s.',
	'Field_order' => 'Display Order',

// File
	'Afile' => 'File: Add',
	'Efile' => 'File: Edit',
	'Dfile' => 'File: Delete',
	'Afiletitle' => 'Add File',
	'Efiletitle' => 'Edit File',
	'Dfiletitle' => 'Delete File',
	'Fileexplain' => 'You can use the file management section to add, edit, and delete files.',
	'Upload' => 'Upload File',
	'Uploadinfo' => 'Upload this file',
	'Uploaderror' => 'This file already exists. Please rename the file and try again.',
	'Uploaddone' => 'This file has been successfully uploaded. The URL to the file is',
	'Uploaddone2' => 'Click Here to place this URL in the Download URL field.',
	'Upload_do_done' => 'Uploaded Successfully',
	'Upload_do_not' => 'Not Uploaded',
	'Upload_do_exist' => 'File Exist',
	'Filename' => 'File Name',
	'Filenameinfo' => 'This is the name of the file you are adding, such as \'My Picture.\'',
	'Filesd' => 'Short Description',
	'Filesdinfo' => 'This is a short description of the file. This will go on the page that lists all the files in a category, so this description should be short',
	'Fileld' => 'Long Description',
	'Fileldinfo' => 'This is a longer description of the file. This will go on the file\'s information page so this description can be longer',
	'Filecreator' => 'Creator/Author',
	'Filecreatorinfo' => 'This is the name of whoever created the file.',
	'Fileversion' => 'File Version',
	'Fileversioninfo' => 'This is the version of the file, such as 3.0 or 1.3 Beta',
	'Filess' => 'Screenshot URL',
	'Filessinfo' => 'This is a URL to a screenshot of the file. For example, if you are adding a Winamp skin, this would be a URL to a screenshot of Winamp with this skin. You can manually enter a URL or you can leave it blank and upload a screen shot using browse above.',
	'Filess_upload' => 'Upload Screenshot',
	'Filessinfo_upload' => 'You can upload screenshot by clicking on browse',
	'Filess_link' => 'Screen Shot as Link',
	'Filess_link_info' => 'If you want to show screenshot as link select yes.',
	'Filedocs' => 'Documentation/Manual URL',
	'Filedocsinfo' => 'This is a URL to the documentation or a manual for the file',
	'Fileurl' => 'File URL',
	'Fileurlinfo' => 'This is a URL to the file that will be downloaded. You can type it in manually or you can click on browse above and upload a file.',
	'File_upload' => 'File Upload',
	'Fileinfo_upload' => 'You can upload a file by clicking on browse',
	'Uploaded_file' => 'Uploaded file',
	'Filepi' => 'Post Icon',
	'Filepiinfo' => 'You can choose a post icon for the file. The post icon will be shown next to the file in the list of files.',
	'Filecat' => 'Category',
	'Filecatinfo' => 'This is the category the file belongs in.',
	'Filelicense' => 'License',
	'Filelicenseinfo' => 'This is the license agreement the user must agree to before downloading the file.',
	'Filepin' => 'Pin File',
	'Filepininfo' => 'Choose if you want the file pinned or not. Pinned files will always be shown at the top of the file list.',
	'Fileadded' => 'The new file has been successfully added',
// MX Addon
	'Filedeleted' => 'The file has been successfully deleted',
// End
	'Fileedited' => 'The file you selected has been successfully edited',
	'Fderror' => 'You didn\'t select any files to delete',
	'Filesdeleted' => 'The files you selected have been successfully deleted',
	'Filetoobig' => 'That file is too big!',
	'Approved' => 'Approved',
	'Not_approved' => '(Not Approved)',
	'Approved_info' => 'Use this option to make the file available for users, and also to approve files that has been uploaded by the users.',
	'Fchecker' => 'File Maintenance',
	'File_checker' => 'File Maintenance',
	'File_checker_explain' => 'Check for all files in the database, and the files in the download directory.',
	'File_saftey' => 'File maintenance will attempt to delete all files and screenshots that are currently not needed and will remove any file records where the file has been deleted, and will clear all screenshots that are not found.<br /><br />If the files do not start with <span class="text_red">{html_path}</span> then the files will be skipped for security reasons.<br /><br />Please make sure that <span class="text_red">{html_path}</span> is the path that you use for your files.<br /><br /><b>Note:</b> It is strongly recommended that you <b><a href="' . append_sid('admin_db_utilities.' . PHP_EXT . '?perform=backup') . '" class="genmed">Backup your database</a></b>.',
	'File_checker_perform' => 'Perform Checking',
	'Checker_saved' => 'Total Saved Space',
	'Checker_sp1' => 'Checking for records with missing files...',
	'Checker_sp2' => 'Checking for records with missing screenshots...',
	'Checker_sp3' => 'Deleting unused Files...',
	'Filedls' => 'Download Total',
	'Addtional_field' => 'Additional Field',
	'File_not_found' => 'The file you specified cannot be found',
	'SS_not_found' => 'The screen shot you specified cannot be found',
// License
	'Alicense' => 'License: Add',
	'Elicense' => 'License: Edit',
	'Dlicense' => 'License: Delete',
	'Alicensetitle' => 'Add License',
	'Elicensetitle' => 'Edit License',
	'Dlicensetitle' => 'Delete License',
	'Licenseexplain' => 'You can use the license management section to add, edit, and delete license agreements. You can select a license for a file on the file add or edit page. If a file has a license agreement, a user will have to agree to it before downloading the file.',
	'Lname' => 'License Name',
	'Ltext' => 'License Text',
	'Licenseadded' => 'The new license agreement has been successfully added',
	'Licenseedited' => 'The license agreement you selected has been successfully edited',
	'Lderror' => 'You did not select any licenses to delete',
	'Ldeleted' => 'The license agreements you selected have been successfully deleted',
// MX
	'License_title' => 'License',
// ENd
	'Click_return' => 'Click %sHere%s to return to the previous page',
	'Click_return_upload' => 'Click %sHere%s to return to the upload page',
	'Click_edit_permissions' => 'Click %sHere%s to edit the permissions for this category',

//Java script messages and php errors
	'Cat_name_missing' => 'Please fill the category name field',
	'Cat_conflict' => 'You can\'t have a category with no file inside a category that doesn\'t allow files',
	'Cat_id_missing' => 'Please select a category',
	'Missing_field' => 'Please complete all the required fields',


//Fields Types

	'Input' => 'Single-Line Text Box',
	'Textarea' => 'Multiple-Line Text Box',
	'Radio' => 'Single-Selection Radio Buttons',
	'Select' => 'Single-Selection Menu',
	'Select_multiple' => 'Multiple-Selection Menu',
	'Checkbox' => 'Multiple-Selection Checkbox',

// MX Addon
	'Validation_settings' => 'Validation of uploads',
	'Need_validate' => 'Validate uploads?',
	'Validator' => 'Validator',
	'PM_notify' => 'PM Notify to validator(s) (n/a)',
	'Validator_admin_option' => 'Admin',
	'Validator_mod_option' => 'Admin and cat moderator',

	'Allow_comments' => 'Enable comments (n/a)',
	'Allow_comments_info' => 'Enable/disable comments in this category.',
	'Allow_ratings' => 'Enable ratings (n/a)',
	'Allow_ratings_info' => 'Enable/disable ratings in this category.',

	'MCP_title' => 'Moderator Control Panel',
	'MCP_title_explain' => 'Approve and manage files',

	'Fileadded_not_validated' => 'The new file has been successfully added, but a moderator (admin) needs to validate the file before approval.',
	)
);

?>