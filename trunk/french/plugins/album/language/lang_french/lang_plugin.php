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

$lang['Photo_Album'] = 'Album Photos';
$lang['Pics'] = 'Photos';
$lang['Last_Pic'] = 'Dernière photo';
$lang['Public_Categories'] = 'Galeries publiques';
$lang['No_Pics'] = 'Aucune Photo';
$lang['Users_Personal_Galleries'] = 'Galeries Privées des membres';
$lang['Your_Personal_Gallery'] = 'Ma Galerie';
$lang['Recent_Public_Pics'] = 'Photos publiques récentes';

$lang['View'] = 'Vue';

//
// Category View
//
$lang['Category_not_exist'] = 'Cette galerie n\'existe pas';
$lang['Upload_Pic'] = 'Uploader';
$lang['Pic_Title'] = 'Titre';

$lang['Album_upload_can'] = 'Vous <b>pouvez</b> uploader de nouvelles photos';
$lang['Album_upload_cannot'] = 'Vous <b>ne pouvez pas</b> uploader de nouvelles photos';
$lang['Album_rate_can'] = 'Vous <b>pouvez</b> noter des photos';
$lang['Album_rate_cannot'] = 'Vous <b>ne pouvez pas</b> noter des photos';
$lang['Album_comment_can'] = 'Vous <b>pouvez</b> poster des commentaires sur les photos';
$lang['Album_comment_cannot'] = 'Vous <b>ne pouvez pas</b> poster des commentaires sur les photos';
$lang['Album_edit_can'] = 'Vous <b>pouvez</b> éditer vos photos et commentaires';
$lang['Album_edit_cannot'] = 'Vous <b>ne pouvez pas</b> éditer vos photos et commentaires';
$lang['Album_delete_can'] = 'Vous <b>pouvez</b> supprimer vos photos et commentaires';
$lang['Album_delete_cannot'] = 'Vous <b>ne pouvez pas</b> supprimer vos photos et commentaires';
$lang['Album_moderate_can'] = 'Vous <b>pouvez</b> %smodérer%s cette galerie';

$lang['Edit_pic'] = 'Editer';
$lang['Delete_pic'] = 'Supprimer';
$lang['Rating'] = 'Note';
$lang['Comments'] = 'Commentaires';
$lang['New_Comment'] = 'Nouveau commentaire';

$lang['Not_rated'] = '<i>aucune note</i>';

//
// Upload
//
$lang['Pic_Desc'] = 'Description';
$lang['Plain_text_only'] = 'Texte à caractère simple uniquement';
$lang['Max_length'] = 'Longeur maximale (en caractères)';
$lang['Upload_pic_from_machine'] = 'Uploader une photo à partir de votre ordinateur';
$lang['Upload_to_Category'] = 'Uploader vers une galerie';
$lang['Upload_thumbnail_from_machine'] = 'Uploader cette miniature à partir de votre ordinateur (doit avoir le même type d\'extension que votre photo)';
$lang['Upload_thumbnail'] = 'Uploader une miniature';
$lang['Upload_thumbnail_explain'] = 'Cela doit-être le même type d\'extension que votre image';
$lang['Thumbnail_size'] = 'Taille de la miniature (en pixels)';
$lang['Filetype_and_thumbtype_do_not_match'] = 'Votre photo et votre miniature doivent avoir le même type d\'extension';

$lang['Upload_no_title'] = 'Vous devez entrer un titre pour votre photo';
$lang['Upload_no_file'] = 'Vous devez entrer votre chemin et votre nom de fichier';
$lang['Desc_too_long'] = 'Votre description est trop longue';

$lang['Max_file_size'] = 'Taille maximale du fichier (en octets)';
$lang['Max_width'] = 'Largeur maximale de l\'image (en pixels)';
$lang['Max_height'] = 'Hauteur maximale de l\'image (en pixels)';

$lang['JPG_allowed'] = 'Autoriser l\'upload de fichiers JPG';
$lang['PNG_allowed'] = 'Autoriser l\'upload de fichiers PNG';
$lang['GIF_allowed'] = 'Autoriser l\'upload de fichiers GIF';

$lang['Album_reached_quota'] = 'Ce système a atteint le quota de photos. Maintenant vous ne pouvez plus uploader. Veuillez contacter le webmaster pour plus d\'informations';
$lang['User_reached_pics_quota'] = 'Vous avez atteint votre quota de photos. Maintenant vous ne pouvez plus uploader. Veuillez contacter le webmaster pour plus d\'informations';

$lang['Bad_upload_file_size'] = 'Votre fichier uploadé est trop grand ou corrompu';
$lang['Not_allowed_file_type'] = 'Votre type de fichier n\'est pas autorisé';
$lang['Upload_image_size_too_big'] = 'La dimension de votre image est trop grande';
$lang['Upload_thumbnail_size_too_big'] = 'La dimension de votre miniature est trop grande';

$lang['Missed_pic_title'] = 'Vous devez entrer le titre de votre photo';

$lang['Album_upload_successful'] = 'Votre photo a été uploadée avec succès';
$lang['Album_upload_need_approval'] = 'Votre photo a été uploadée avec succès.<br /><br />Mais l\'option d\'Approbation des photos a été activée, ainsi votre photo doit-être approuvée par le webmaster ou un modérateur avant d\'être postée';
$lang['Click_return_category'] = 'Cliquez %sici%s pour revenir à la galerie';
$lang['Click_return_album_index'] = 'Cliquez %sici%s pour revenir à l\'index de l\'Album';

// View Pic
$lang['Pic_not_exist'] = 'Cette photo n\'existe pas';

// Edit Pic
$lang['Edit_Pic_Info'] = 'Editer les informations de la photo';
$lang['Pics_updated_successfully'] = 'Les informations de votre photo ont été mises à jour avec succès';

// Delete Pic
$lang['Album_delete_confirm'] = 'Etes-vous sûr de vouloir supprimer cette photo ?';
$lang['Pics_deleted_successfully'] = 'Cette photo a été supprimée avec succès';

//
// ModCP
//
$lang['Approval'] = 'Approbation';
$lang['Approve'] = 'Approuver';
$lang['Unapprove'] = 'Désapprouver';
$lang['Status'] = 'Statut';
$lang['Locked'] = 'Verrouillé';
$lang['Unlocked'] = 'Déverrouillé';
$lang['Not_approved'] = 'Désapprouvé';
$lang['Approved'] = 'Approuvé';
$lang['Move_to_Category'] = 'Déplacer vers cette galerie';
$lang['Pics_moved_successfully'] = 'Votre photo a été déplacée avec succès';
$lang['Pics_locked_successfully'] = 'Votre photo a été verrouillée avec succès';
$lang['Pics_unlocked_successfully'] = 'Votre photo a été déverrouillée avec succès';
$lang['Pics_approved_successfully'] = 'Votre photo a été approuvée avec succès';
$lang['Pics_unapproved_successfully'] = 'Votre photo a été désapprouvée avec succès';

//
// Rate
//
$lang['Current_Rating'] = 'Note actuelle';
$lang['Please_Rate_It'] = 'Veuillez la noter';
$lang['Already_rated'] = 'Vous avez déjà noté cette photo';
$lang['Album_rate_successfully'] = 'Votre photo a été notée avec succès';

//
// Comment
//
$lang['Post_your_comment'] = 'Postez votre commentaire';
$lang['Comment_no_text'] = 'Veuillez entrer votre commentaire';
$lang['Comment_too_long'] = 'Votre commentaire est trop long';
$lang['Comment_delete_confirm'] = 'Etes-vous sûr de vouloir supprimer ce commentaire ?';
$lang['Pic_Locked'] = 'Désolé, mais cette photo a été verrouillée. Par conséquent, vous ne pouvez plus poster de commentaire pour cette photo.';

//
// Personal Gallery
//
$lang['Personal_Gallery_Explain'] = 'Vous pouvez voir les galeries privées des autres membres en cliquant sur le lien dans leur profil.';
$lang['Personal_gallery_not_created'] = 'La galerie privée de %s est vide ou n\'a pas été créée';
$lang['Not_allowed_to_create_personal_gallery'] = 'Désolé, mais le webmaster de ce site ne vous a pas autorisé à créer votre propre galerie privée.';
$lang['Click_return_personal_gallery'] = 'Cliquez %sici%s pour revenir à la galerie privée';

//
// Album New entries
//
$lang['Album_search_contain'] = 'Rechercher avec le mot';

$lang['Dimension'] = 'Dimensions';
$lang['Size'] = 'Taille';
$lang['Kb'] = 'Ko';

$lang['Gallery'] = 'Galerie';
$lang['Personnal_Galleries'] = 'Galeries Privées';
$lang['Recent_Personal_Pics'] = 'Photos privées récentes';

$lang['Pic_details'] = 'Détails de la Photo';

$lang['No_comments'] = 'Aucun commentaire';
$lang['Comment'] = 'Commentaire';
$lang['Comments_disabled'] = 'Commentaire désactivé';

//V: partie IP

$lang = array_merge($lang, array(
// Album Index
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
	'Upload_Pics' => 'Envoyer les images vers',
	'JUpload_Pic' => 'Envoyer plusieurs images via Jupload',
	'Pic_Poster' => 'Posteur',
	'Pic_Image' => 'Image',
	'Waiting' => ' image(s) attendant d\'être approuvées',

// Permissions
	'Album_view_can' => 'Vous <b>pouvez</b> voir les photos',
	'Album_view_cannot' => 'Vous <b>ne pouvez pas</b> voir les photos',

	'Last_Comment' => 'Dernière commentaire',
	'Random_Pictures' => 'Images aléatoires',
	'Highest_Rated_Pictures' => 'Image la mieux votée',
	'Most_Viewed_Pictures' => 'Images les plus vues',

	'Avatar_Set' => 'Utiliser comme avatar',
	'BBCode_Copy' => 'Copier le BBCode',

// Upload
	'No_valid_category_selected' => 'La catégorie sélectionnée n\'est pas valide',
	'No_category_to_upload' => 'Malheureusement, il n\'y a aucune catégorie dans laquelle vous pouvez ajouter une image.',

	'Add_File' => 'Ajouter un fichier',
	'File_thumbnail_count_mismatch' => 'Le nombre d\'image ne correspond pas au nombre d\'aperçus',
	'No_thumbnail_for_picture_found' => 'Pas d\'aperçu disponible pour l\'image (nommée %s)',
	'No_picture_for_thumbnail_found' => 'Pas d\'image associée à l\'aperçu (nommée %s)',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Une erreur inconnue est apparue lors de l\'envoi de l\'image et de l\'aperçu.<br/>Image nommée : %s, aperçu nommé : %s<br/>',
	'Picture_exceeded_maximum_size_INI' => 'L\'image "%s" est trop grosse pour être envoyée, elle ne sera pas envoyée.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => 'L\'aperçu "%s" est trop gros pour être envoyé, l\'image et l\'aperçu ne seront pas envoyés<br/>',
	'Execution_time_exceeded_skipping' => 'Le temps maximum d\'exécution a été atteint. Les images suivantes ont été sautées :<br/>',
	'Skipping_uploaded_picture_file' => '%s<br />',
	'Skipping_uploaded_picture_and_thumbnail_file' => '%s (aperçu: %s)<br />',
	'Album_upload_not_successful' => 'Aucune de vos images n\'a été envoyée.<br /><br />',
	'Album_upload_partially_successful' => 'Certaines de vos images n\'ont pu être envoyées<br /><br />',
	'No_pictures_selected_for_upload' => 'Pas d\'images sélectionnées ou erreur inconnue',

// 'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
// 'Album_upload_successful' => 'Your picture has been uploaded successfully',
// 'Album_upload_need_approval' => 'Your picture has been uploaded successfully.<br /><br />But the feature Picture Approval has been enabled so your picture must be approved by a administrator or a moderator before posting',

	'Bad_upload' => 'Mauvais envoi',
	'Rotation' => 'Tourner (sens inverse d\'une montre) - Degrées',

// Album Nuffload
	'time_elapsed' => 'Temps écoulé',
	'time_remaining' => 'Temps restant',
	'upload_in_progress' => 'Envoi en cours',
	'please_wait' => 'Veuillez attendre ...',
	'uploaded' => '%multi_id% images envoyées sur un total de %multi_max%.',
	'no_file_received' => 'Aucun fichier reçu',
	'no_thumbnail_file_received' => 'Aucun aperçu reçu',
	'file_too_big' => 'Le fichier est trop gros',
	'thumbnail_too_big' => 'La taille du fichier d\'aperçu est trop gros',
	'image_res_too_high' => 'La résolution de l\'image est trop haute',
	'add_field' => 'Ajouter un champ d\'envoi',
	'remove_field' => 'Retirer un champ d\'envoi',
	'ZIP_allowed' => 'Autorisé à envoyer un ZIP',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Image Details',
	'Pic_Size' => 'Taille',
	'Pic_Type' => 'Type',
	'Pic_BBCode' => 'BBCode',
	'Click_enlarge' => 'Cliquez pour voir l\'image en plus grand',
	'Prev_Pic' => 'Voir l\'image précédente',
	'Next_Pic' => 'Voir l\'image suivante',
	'Slideshow' => 'Diaporama',
	'Slideshow_Delay' => 'Délai du diaporama',
	'Slideshow_On' => 'Diaporama',
	'Slideshow_Off' => 'Arrêter le Diaporama',
	'Pics_Nav' => 'Navigation',
	'Pics_Nav_Next' => 'Image suivante',
	'Pics_Nav_Prev' => 'Image précédente',
	'Pics_Counter' => 'Image n°%s sur %s',

// ModCP
	'Copy' => 'Copier',
	'Copy_to_Category' => 'Copier vers la catégorie',
	'NO_PICS_SPECIFIED' => 'Aucune image sélectionnée',

// Rate
	'Login_To_Vote' => 'Vous devez être connecté pour noter une image',
	'Own_Pic_Rate' => 'Vous ne pouvez pas noter vos propres images',
	'Click_rate_more' => 'Cliquez %sici%s pour noter d\'autres images.',
	'Hot_Or_Not' => 'Tendance ou pas',

// Download Archive
	'Download_pics' => 'Télécharger les images (ZIP)',
	'Download_page' => 'Télécharger les images sur cette page (ZIP)',
	'No_Download_auth' => 'Vous n\'êtes pas autorisé à archiver des images de cet album',

// Email Notification
	'Email_Notification' => 'Notifications e-mails de l\'album',
	'Email_Notification_Explain' => 'Cette option permet aux administrateurs de recevoir un e-mail lorsqu\'une image est ajoutée dans l\'album',
	'Approvation_OK' => 'Approuvé',
	'Approvation_NO' => 'Pas encore approuvé',

// Album Hierarchy Index Table
	'Last_Comment' => 'Dernier commentaire',
	'Last_Comments' => 'Dernières commentaires',
	'No_Comment_Info' => 'Pas de commentaire',
	'No_Pictures_In_Cat' => 'Pas de photos dans la catégorie',
	'Total_Pics' => 'Nombre d\'images',
	'Total_Comments' => 'Nombre de commentaires',
	'Last_Index_Thumbnail' => 'Dernière image',
	'One_Sub_Total_Pics' => '%d Image',
	'Multiple_Sub_Total_Pics' => '%d Images',
	'Album_sub_categories' => 'Sous-catégories',
	'No_Public_Galleries' => 'Pas de galeries publiques',
	'One_new_picture' => '%d nouvelle image',
	'Multiple_new_pictures' => '%d nouvelles images',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Galerie personnelle',
	'Create_Personal_Categories' => 'Créer une galerie personnelle',
	'Personal_Cat_Admin' => 'Gestion de votre galerie personnelle',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Tout cocher',
	'Modcp_uncheck_all' => 'Tout décocher',
	'Modcp_inverse_selection' => 'Inverser la sélection',

	'Show_selected_pic_view_mode' => 'Montrer uniquement les galeries sélectionnées',
	'Show_all_pic_view_mode' => 'Montrer toutes les images dans cette galerie',

// Access language strings
	'Album_Can_Manage_Categories' => 'Vous <b>pouvez</b> %sgérer%s les catégories de la galerie',
	'No_Personal_Category_admin' => 'You n\'êtes pas autorisé à gérer les categories de votre galerie personnelle',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => 'Categorie',
	'Picture_List_Of_User' => 'Toutes les images par %s',
	'Member_Picture_List_Explain' => 'Vous pouvez une liste complète des images envoyées par nos membres en cliquant sur le lien dans leur profil',
	'Comment_List_Of_User' => 'Tous les commentaires par %s',
	'Rating_List_Of_User' => 'Tous les notes de %s',
	'Show_All_Pictures_Of_user' => 'Montrer toutes les images de %s',
	'Show_All_Comments_Of_user' => 'Montrer tous les commentaires de %s',
	'Show_All_Ratings_Of_user' => 'Montrer toutes les notes de %s',

// The pictures list
	'All_Picture_List_Of_User' => 'Toutes les images',
	'All_Comment_List_Of_User' => 'Tous les commentaires',
	'All_Rating_List_Of_User' => 'Toutes les notes',
	'All_Show_All_Pictures_Of_user' => 'Montrer toutes les images',
	'All_Show_All_Comments_Of_user' => 'Montrer tous les commentaires',
	'All_Show_All_Ratings_Of_user' => 'Montrer toutes les notes',

	'Not_commented' => '<i>Pas de commentaire</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Cliquez ici pour appliquer les effets spéciaux',
	'Nuff_UnClick' => 'Cliquez ici pour revenir à l\'image normale',
	'Nuff_Title' => 'Effets spéciaux',
	'Nuff_Explain' => 'Applique divers effets sur les images.<br/>Souvenez vous que c\'est une opération très lourde pour le serveur, alors essayez de ne pas en abuser. Certains effets redimensionneront automatiquement l\'image pour ne pas surcharger le serveur.',
	'Nuff_Normal' => 'Image normal',
	'Nuff_Normal_Explain' => '',
	'Nuff_BW' => 'Noir & blanc',
	'Nuff_BW_Explain' => '',
	'Nuff_Sepia' => 'Ton Sépia',
	'Nuff_Sepia_Explain' => 'Appliquer un effet Sépia',
	'Nuff_Flip' => 'Retourner',
	'Nuff_Flip_Explain' => 'Retourne l\'image',
	'Nuff_Mirror' => 'Miroir',
	'Nuff_Mirror_Explain' => '',
	'Nuff_Flip_H' => 'Horizontal',
	'Nuff_Flip_V' => 'Vertical',
	'Nuff_Rotate' => 'Rotation (sens inverse des aiguilles d\'une montre)',
	'Nuff_Rotate_Explain' => '',
	'Nuff_Resize' => 'Redimensionner',
	'Nuff_Resize_Explain' => '',
	'Nuff_Resize_W' => 'Largeur',
	'Nuff_Resize_H' => 'Hauteur',
	'Nuff_Resize_No_Resize' => 'Pas de redimensionnement',
	'Nuff_Watermark' => 'Filigrane',
	'Nuff_Watermark_Explain' => '',
	'Nuff_Recompress' => 'Recompression',
	'Nuff_Recompress_Explain' => '',
	'Nuff_Alpha' => 'Alpha',
	'Nuff_Alpha_Explain' => 'Ajoute un canal alpha par dessus l\'image',
	'Nuff_Blur' => 'Flou',
	'Nuff_Blur_Explain' => 'Ajoute un effet de flou',
	'Nuff_Pixelate' => 'Pixelliser',
	'Nuff_Pixelate_Explain' => '',
	'Nuff_Scatter' => 'Dispersion',
	'Nuff_Scatter_Explain' => 'Ajoute un effet de dispersion à l\'image',
	'Nuff_Infrared' => 'Infrarouge',
	'Nuff_Infrared_Explain' => 'Ajoute un effet infrarouge à l\'image',
	'Nuff_Tint' => 'Teinte',
	'Nuff_Tint_Explain' => 'Ajoute une teinte rouge à l\'image',
	'Nuff_Interlace' => 'Entrelacer (lignes horizontales)',
	'Nuff_Interlace_Explain' => '',
	'Nuff_Screen' => '&Eacute;cran (lignes verticales/horizontales)', // screen ?
	'Nuff_Screen_Explain' => '',
	'Nuff_Stereogram' => 'Stéréographe',
	'Nuff_Stereogram_Explain' => '(BW 16 bit nécessaire)',

	'Pic_Gallery' => 'Galerie OTF', //V: Todo OTF??????
	'Select_Pic' => 'Choisissez une image',
	'Select_Category' => 'Choisissez une catégorie',
	'Title_Description' => 'Titre &amp; Description',

// Pic watch
	'No_longer_watching_comment' => 'Vous ne recevrez plus de notifications lors de l\'ajout de commentaires sur cette image',
	'Watching_comment' => 'Vous recevrez maintenant des notifications lors de l\'ajout de commentaires sur cette image',
	'Pic_comment_notification' => 'Notifications pour les commentaires',
	'Pic_comment_watch_checkbox' => 'Cochez pour recevoir des notifications :',
	'Watch_pic' => 'Recevoir des notifications lors de l\'ajout de commentaire',
	'Unwatch_pic' => 'Arrêter d\'être notifié des commentaires',
	'Click_return_pic' => 'Cliquez %sici%s pour retourner à l\'image',

	'Pic_RDF' => 'Flux RSS 1.0',
	'Pic_RSS' => 'Flux RSS 2.0',
	)
);

?>
