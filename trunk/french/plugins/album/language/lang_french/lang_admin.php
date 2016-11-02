<?php
/***************************************************************************
 *                            lang_album_admin.php [English]
 *                              -------------------
 *     begin                : Sunday, February 02, 2003
 *     copyright            : (C) 2003 Smartor
 *     email                : smartor_xp@hotmail.com
 *
 *     $Id: lang_album_admin.php,v 1.0.6 2003/03/05 00:21:55 ngoctu Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

// Configuration
$lang['Album_config'] = 'Album';
$lang['Album_config_explain'] = 'Vous pouvez changer les options de l\'album photos ici.<br />';
$lang['Album_config_updated'] = 'La configuration de l\'album a été mise à jour avec succès';
$lang['Click_return_album_config'] = 'Cliquez %sIci%s pour retourner à la configuration de l\'album';
$lang['Max_pics'] = 'Nombre maximal de photos pour chaque catégorie (-1 = illimité)';
$lang['User_pics_limit'] = 'Limite de photos par catégorie pour chaque utilisateur (-1 = illimitée)';
$lang['Moderator_pics_limit'] = 'Limite de photos par catégorie pour chaque modérateur (-1 = illimitée)';
$lang['Pics_Approval'] = 'Approbation des photos';
$lang['Rows_per_page'] = 'Nombre de rangs sur la page des miniatures';
$lang['Cols_per_page'] = 'Nombre de colonnes sur la page des miniatures';
$lang['Thumbnail_quality'] = 'Qualité des miniatures (1-100)';
$lang['Thumbnail_cache'] = 'Cache des miniatures';
$lang['Manual_thumbnail'] = 'Miniature manuelle';
$lang['GD_version'] = 'Optimiser pour la version de GD';
$lang['Pic_Desc_Max_Length'] = 'Description de la photo/Longueur maximale des commentaires (octets)';
$lang['Hotlink_prevent'] = 'Prévention des liens directs';
$lang['Hotlink_allowed'] = 'Domaines autorisés pour les liens directs (séparés par une virgule)';
$lang['Personal_gallery'] = 'Autorisé à créer une galerie personnelle pour les utilisateurs';
$lang['Personal_gallery_limit'] = 'Limite de photos pour chaque gallerie personnelle (-1 = illimitée)';
$lang['Personal_gallery_view'] = 'Par défaut, qui peut voir les galeries personnelles';
$lang['Rate_system'] = 'Activer le système de notation';
$lang['Rate_Scale'] ='Echelle de notation';
$lang['Comment_system'] = 'Activer le système de commentaires';
$lang['Thumbnail_Settings'] = 'Options des miniatures';
$lang['Extra_Settings'] = 'Options supplémentaires';
$lang['Default_Sort_Method'] = 'Méthode de tri par défaut';
$lang['Default_Sort_Order'] = 'Ordre de tri par défaut';
$lang['Fullpic_Popup'] = 'Voir la photo dans une pop-up';
$lang['Email_Notification'] = 'Activer la notification par e-mail lors de l\'ajout de nouvelles photos dans l\'album ( pour les administrateurs uniquemement)';
$lang['Show_Download'] = 'Montrer le bouton TELECHARGER (qui active le téléchargement de photos au format ZIP) seulement pour ceux qui ont des permissions d\'ENVOI vers l\'album (si vous choisissez TOUJOURS le bouton sera toujours visible même si l\'utilisateur n\'a pas de permissions d\'ENVOI de photos)';
$lang['Show_Slideshow'] = 'Activer l\'option Diaporama';
$lang['Show_Pic_Size'] = 'Montrer les tailles de photos sur les miniatures';
$lang['Show_IMG_No_GD'] = 'Montrer les miniatures de GIF sans utiliser la librairie GD (les images agrandies sont chargées et ensuite juste montrées redimensionnées).';
$lang['Show_Pics_Nav'] = 'Montrer la Box de navigation dans les photos sur la page de visionnage des photos';
$lang['Show_Inline_Copyright'] = 'Montrer les infos de copyright sur une seule ligne';
$lang['Enable_Nuffimage'] = 'Activer la page des Effets Spéciaux basée sur Images Class de Nuffmon';
$lang['Enable_Sepia_BW'] = 'Activer les effets Ton Sépia et Noir et Blanc sur la page des Effets Spéciaux (désactivez cette fonction si vous ne voulez pas surcharger le CPU de votre serveur)';

// Multiple Uploads Admin configuration
$lang['Upload_Settings'] = 'Envoi';
$lang['Max_Files_To_Upload'] = 'Nombre maximal de fichiers qu\'un utilisateur peut envoyer en même temps';
$lang['Album_upload_settings'] = 'Options d\'envoi de photos de l\'album';
$lang['Max_pregenerated_fields'] = 'Nombre maximal de champs à pré-générer';
$lang['Dynamic_field_generation'] = 'Activer l\'ajout dynamique de champs d\'envoi';
$lang['Pre_generate_fields'] = 'Pré-générer les champs d\'envoi';
$lang['Propercase_pic_title'] = 'Titre de photo avec majuscules par ex / <i>\'Voici Un Titre De Photo\'</i><br />Metre sur \'NON\' affichera ceci <i>\'Voici un titre de photo\'</i>';
$lang['Pic_Resampling'] = 'En activant cette option, chaque image sera redimensionnée en un instant si nécessaire (pour garder les propriétés de l\'images tout en respectant les options de l\'album dans le panneau d\'administration).';
$lang['Max_file_size_resampling'] = 'Taille maximale de fichier avant le redimmentsionnement (octets)';

// Nuffload
$lang['Nuffload_Config'] = 'Configuration de Nuffload';
$lang['Enable_Nuffload'] = 'Activer Nuffload';
$lang['Enable_Nuffload_Explain'] = 'En activant cette option, Nuffload sera utilisé à la place du formulaire standard d\'envoi de photos.';
$lang['progress_bar_configuration'] = 'Nuffload - Configuration de la barre de progression d\'envoi';
$lang['perl_uploader'] = 'Activer l\uploader Perl';
$lang['path_to_bin'] = 'Chemin de la racine phpBB vers cgi-bin (en gen. <b>./cgi-bin/</b> si vous avez phpBB dans un sous-dossier)';
$lang['show_progress_bar'] = 'Montrer la barre de progression d\'envoi lors de l\'upload';
$lang['close_progress_bar'] = 'Fermer la barre à la fin de l\'envoi';
$lang['activity_timeout'] = 'Délai d\'attente d\'activité (en secs)';
$lang['simple_format'] = 'Utiliser un format simple pour la barre de progression';
$lang['multiple_uploads_configuration'] = 'Nuffload - Configuration des uploads multiples';
$lang['multiple_uploads'] = 'Activer les uploads multiples';
$lang['max_uploads'] = 'Champs maximum d\'upload';
$lang['zip_uploads'] = 'Activer les uploads zippés';
$lang['image_resizing_configuration'] = 'Nuffload - Configuration du redimensionnement d\'image';
$lang['image_resizing'] = 'Activer le redimensionnement d\'image';
$lang['image_width'] = 'Largeur de l\'image';
$lang['image_height'] = 'Hauteur de l\'image';
$lang['image_quality'] = 'Qualité de l\'image';

// Personal Gallery Page
$lang['Personal_Galleries'] = 'Galeries personnelles';
$lang['Album_personal_gallery_title'] = 'Galerie personnelle';
$lang['Album_personal_gallery_explain'] = 'De cette page, vous pouvez choisri quels groupes d\'utilisateurs ont le droit de créer et de voir les galeries personnelles. Ces options ne sont prises en compte qui si vous configure sur "Privé" pour "Autorisés à créer des galeries personnelles pour les utilisateurs" ou "Qui peut voir les galeries personnelles" dans la page Configuration de l\'album';
$lang['Album_personal_successfully'] = 'Cette option a été mise à jour avec succès';
$lang['Click_return_album_personal'] = 'Cliquez %sIci%s pour retourner aux options des galeries personnelles';

// Categories
$lang['Categories'] = 'Catégories de l\'album';
$lang['Album_Categories_Title'] = 'Catégories de l\'album';
$lang['Album_Categories_Explain'] = 'De cette page, vous pouvez gérer vos catégories : créer, modifier, supprimer, trier, etc.';
$lang['Category_Permissions'] = 'Permissions de la catégorie';
$lang['Category_Title'] = 'Titre de la catégorie';
$lang['Category_Desc'] = 'Description';
$lang['View_level'] = 'Voir le niveau';
$lang['Upload_level'] = 'Uploader le niveau';
$lang['Rate_level'] = 'Noter le niveau';
$lang['Comment_level'] = 'Commenter le niveau';
$lang['Edit_level'] = ' Editer le niveau';
$lang['Delete_level'] = 'Supprimer le niveau';
$lang['New_category_created'] = 'La nouvelle catégorie a été créé avec succès';
$lang['Click_return_album_category'] = 'Cliquez %sIci%s pour retourner au gestionnaire des Catégories de l\'album';
$lang['Category_updated'] = 'Cette catégorie a été mise à jour avec succès';
$lang['Delete_Category'] = 'Supprimer la catégorie';
$lang['Delete_Category_Explain'] = 'le champ ci-dessous vous permet de supprimer une catégorie et de décider où vous voulez mettre les photos qu\'elle contenait';
$lang['Delete_all_pics'] = 'Supprimer toutes les photos';
$lang['Category_deleted'] = 'Cette catégorie a été supprimé avec succès';
$lang['Category_changed_order'] = 'Cette catégorie a changé d\'ordre avec succès';

// Permissions
$lang['Album_Auth_Title'] = 'Permissions de l\'album';
$lang['Album_Auth_Explain'] = 'D\'ici vous pouvez choisir quels groupes d\'utilisateurs peuvent être modérateurs pour chaque catégorie d\'album ou juste en avoir l\'accès privé';
$lang['Select_a_Category'] = 'Sélectionner une catégorie';
$lang['Look_up_Category'] = 'Consulter une cagétories';
$lang['Album_Auth_successfully'] = 'Les authorisations ont été mises à jour avec succès';
$lang['Click_return_album_auth'] = 'Cliquez %sIci%s pour retourner aux permissions de l\'album';

$lang['Upload'] = 'Uploader';
$lang['Rate'] = 'Noter';
$lang['Comment'] = 'Commenter';

// Clear Cache
$lang['Clear_Cache_Tab'] = 'Cache';
$lang['Clear_Cache'] = 'Nettoyer le cache';
$lang['Album_clear_cache_confirm'] = 'Si vous utilisez l\'option "Cache de la miniature" vous devez nettoyer votre cache de miniature après avoir changé vos options de miniatures dans la configuration de l\'album pour qu\'elles soient régénérées.<br /><br /> Voulez-vous le nettoyer maintenant ?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />Le cache de vos miniatures a été nettoyé avec succès<br />&nbsp;';

// CLowN
$lang['SP_Album_config'] = 'CLowN SP';
$lang['SP_Album_config_explain'] = 'D\'ici vous pouvez configurer quelques options pour l\'album service pack';
$lang['SP_Album_sp_general'] = 'Configuration Générale';
$lang['SP_Album_sp_watermark'] = 'Configuration Protection des images (Watermark)';
$lang['SP_Album_sp_hotornot'] = 'Configuration Popularité';
$lang['SP_Rate_type'] = 'Sélectionner comment l\'affichage de la notation des photos doit être montré';
$lang['SP_Rate_type_0'] = 'Images seulement';
$lang['SP_Rate_type_1'] = 'Nombres seulement';
$lang['SP_Rate_type_2'] = 'Nombres et images';
$lang['SP_Display_latest'] = 'Afficher le bloc des dernières photos proposées';
$lang['SP_Display_highest'] = 'Afficher le bloc des photos les mieux notées';
$lang['SP_Display_most_viewed'] = 'Afficher le bloc des photos les plus vues';
$lang['SP_Display_random'] = 'Afficher le bloc des photos aléatoires';
$lang['SP_Pic_row'] = 'Nombre de rangs sur les blocs de miniatures';
$lang['SP_Pic_col'] = 'Nombre de colonnes sur les blocs de miniatures';
$lang['SP_Midthumb_use'] = 'Utiliser des miniatures réduites';
$lang['SP_Midthumb_cache'] = 'Activer le cache des miniatures réduites';
$lang['SP_Midthumb_high'] = 'Hauteur des miniatures réduites (pixel)';
$lang['SP_Midthumb_width'] = 'Largeur des miniatures réduites (pixel)';
$lang['SP_Watermark'] = 'Utiliser la protection des images (watermark)';
$lang['SP_Watermark_users'] = 'Utiliser la protection des images avec tous les utilisateurs (Si vous activez \'non\' elle sera affichée seulement pour les non-membres.)';
$lang['SP_Watermark_placent'] = 'Afficher la protection \'Watermark\' à cet emplacement sur la photo';
$lang['SP_Hon_already_rated'] = 'Vote illimité sur la page Photo Populaire ou non';
$lang['SP_Hon_sep_rating'] = 'Stocker la page Photo Populaire ou non sur un tableau séparé ?';
$lang['SP_Hon_where'] = 'Choisissez une catégorie à afficher sur le page Photo Populaire ou non ( laissez en blanc pour afficher des photos de toutes les catégories, s\'il y a plus d\'une catégorie, séparez-les par une virgule))';
$lang['SP_Hon_users'] = 'Les invités peuvent-ils voter ?';

$lang['SP_Disabled'] = 'Désactivé';
$lang['SP_Enabled'] = 'Activé';
$lang['SP_Yes'] = 'Oui';
$lang['SP_No'] = 'Non';
$lang['SP_Always'] = 'Toujours';
$lang['SP_Submit'] = 'Envoyer';
$lang['SP_Reset'] = 'Réinitialiser';

/***************************************************************************
 * Album Hierarchy Administration                                          *
 ***************************************************************************/

// Configuration
$lang['Album_config_notice'] = 'Si vous changez les options actuelles de l\'album photos et que vous sélectionnez ensuite un autre onglet, on vous demandera si vous voulez sauvegarder les changements<br />Le système <b>ne sauvegardera pas </b> les changements automatiquement pour vous.';
$lang['Save_sucessfully_confimation'] = '%s a été sauvegardé avec succès';

$lang['Show_Recent_In_Subcats'] = 'Montrer les photos récentes dans les sous-catégories';
$lang['Show_Recent_Instead_of_NoPics'] = 'Montrer les photos récentes à la place du message "Aucune photo"';

$lang['Album_Index_Settings'] = 'Index de l\'album';
$lang['Show_Index_Subcats'] = 'Montrer les sous-catégories sur l\'index de l\'album';
$lang['Show_Index_Thumb'] = 'Montrer les miniatures des catégories sur l\'index de l\'album';
$lang['Show_Index_Pics'] = 'Montrer le nombre de photos dans les catégories actuelles sur l\'index de l\'album';
$lang['Show_Index_Comments'] = 'Montrer le nombre de commentaires dans les catégories actuelles sur l\'index de l\'album';
$lang['Show_Index_Total_Pics'] = 'Montrer le nombre total de photos pour les catégories actuelles et toutes leurs sous-catégories sur l\'index de l\'album';
$lang['Show_Index_Total_Comments'] = 'Montrer le nombre total de commentaires pour les catégories actuelles et toutes ses sous-catégories sur l\'index de l\'album';
$lang['Show_Index_Last_Comment'] = 'Montrer les derniers commentaires pour les catégories actuelles et toutes ses sous-catégories sur l\'index de l\'album';
$lang['Show_Index_Last_Pic'] = 'Montrer les dernières infos sur les photos pour les catégories actuelles et toutes ses sous-catégories sur l\'index de l\'album';
$lang['Line_Break_Subcats'] = 'Montrer chaque sous-catégorie sur une nouvelle ligne';

$lang['Show_Personal_Gallery_Link'] = 'Montrer le lien vers sa galerie personnelle et vers les galeries personnelles des utilisateurs dans les sous-catégories';

$lang['Album_Personal_Auth_Explain'] = 'Ici vous pouvez choisir quel(s) groupe(s) d\'utilisateur(s) peuvent être modérateurs pour <b>toutes</b> Les catégories personnelles de l\'album ou y avoir juste l\'accès';

$lang['Album_debug_mode'] = 'Activer le mode de débuggage de la Hiérarchie.<br><span class="gensmall">Cela générera quelques avertissements sur la page et aussi dans l\'en-tête (header), ce qui ne pose pas de problème.<br>Cette option doit <b>seulement</b> être utilisée quand vous avez des problèmes.</span>';

$lang['New_Pic_Check_Interval'] = 'L\'espace de temps défini pour voir si une photo est considérée comme nouvelle ou non.<br><span class="gensmall"><b>Format</b> : &lt;nombre&gt;&lt;type de durée&gt; Où le type de durée est soit h, min, sem or m (heure, jour, semaine ou mois)<br> e.g. 12H = 12 heures , 12D = 12 jours , 12W = 12 semaines et 12M = 12 mois<br>Si aucune durée n\'est spécifiée le système choisira <b>Jours</b></span>';
$lang['New_Pic_Check_Interval_Desc'] = '<span class="gensmall">H = Heures, D = Jours, W = Semaines, M = Mois</span>';
$lang['New_Pic_Check_Interval_LV'] = 'En activant cette option, le compteur des nouvelles photos se base sur la dernière visite des utilisateurs.';
$lang['Enable_Show_All_Pics'] = 'Activer le basculement en mode vue des galeries personnelles (Toutes les photos ou seulement la catégorie sélectionnée).<br/> Quand <b>non</b> est choisi, seule la catégorie sélectionnée est affichée.'; 
$lang['Enable_Index_Supercells'] = 'Activer les super cellules sur le tableau de l\'index de l\'album. <br><span class="gensmall">Ceci activera les effets mouseover(passage de souris) sur les colonnes, aussi connu comme l\'effet hypercell.</span>';

// Sorting
$lang['Album_Category_Sorting'] = 'Tri des catégories de l\'album';
$lang['Album_Category_Sorting_Id'] = 'ID';
$lang['Album_Category_Sorting_Name'] = 'Nom';
$lang['Album_Category_Sorting_Order'] = 'Ordre de tri ( par défaut )';
$lang['Album_Category_Sorting_Direction'] = 'Sens du tri (seulement valide pour le tri par nom et ID)';
$lang['Album_Category_Sorting_Asc'] = 'Ascendant';
$lang['Album_Category_Sorting_Desc'] = 'Descendant';

// Personal Gallery
$lang['Album_Personal_Settings'] = 'Galeries personnelles';
$lang['Show_Personal_Sub_Cats'] = 'Montrer les sous-catégories personnelles sur l\'index de l\album';
$lang['Personal_Gallery_Approval'] = 'Les photos des galeries personnelles doivent être approuvées par un administrateur';
$lang['Personal_Gallery_MOD'] = 'les galeries personnelles peuvent être modérées par leurs propriétaires';
$lang['Personal_Sub_Cat_Limit'] = 'Nombre maximal de sous-catégories (-1 = illimité)';
$lang['User_Can_Create_Personal_SubCats'] = 'Les utilisateurs peuvent créer des sous-catégories dans leur propre galerie personnelle';

$lang['Click_return_personal_gallery_index'] = 'Cliquez %sIci%s pour retourner à l\'index des galeries personnelles';

$lang['Show_Recent_In_Personal_Subcats'] = 'Montrer les photos récentes dans les sous-catégories personnelles';
$lang['Show_Recent_Instead_of_Personal_NoPics'] = 'Montrer les photos récents au lieu du message "Aucune photo" dans les galeries personnelles';

// Categories
$lang['Personal_Root_Gallery'] = 'Catégorie-mère des galeries personnelles';
$lang['Parent_Category'] = 'Catégorie-mère (pour cette catégorie)';
$lang['Child_Category_Moved'] = 'La catégorie sélectionnée a des catégories filles. Les catégories-filles seront déplacées vers la catégorie <B>%s</B>.';
$lang['No_Self_Refering_Cat'] = 'Vous ne pouvez pas lier une catégorie-mère à elle-même';
$lang['Can_Not_Change_Main_Parent'] = 'Vous ne pouvez pas la catégorie principale de votre galeirie personnelle en catégorie-mère';

// ACP - Javascript text
$lang['acp_ask_save_changes'] = 'Voulez-vous sauvegarder les changements ?\n(OK = oui, Annuler = Non)';
$lang['acp_nothing_to_save'] = 'Rien à sauvegarder !';
$lang['acp_settings_changed_ask_save'] = 'Vous avez modifié les options. Voulez-vous les sauvegarder ?\n(OK = oui, Annuler = Non)';

// GD Info
$lang['GD_Info'] = 'Info GD';
$lang['GD_Title'] = 'Info GD';
$lang['GD_Description'] = 'Ici vous pouvez trouver des informations sur la librairie GD actuellement installée';
$lang['GD_Version'] = 'Version :';
$lang['GD_Freetype_Support'] = 'Support des polices Freetype :';
$lang['GD_Freetype_Linkage'] = 'Type de lien Freetype :';
$lang['GD_T1lib_Support'] = 'Support T1lib :';
$lang['GD_Gif_Read_Support'] = 'Support de lecture de Gif :';
$lang['GD_Gif_Create_Support'] = 'Support de création de Gif :';
$lang['GD_Jpg_Support'] = 'Support Jpg/Jpeg :';
$lang['GD_Png_Support'] = 'Support Png :';
$lang['GD_Wbmp_Support'] = 'Support WBMP :';
$lang['GD_XBM_Support'] = 'SupportXBM :';
$lang['GD_Jis_Mapped_Support'] = 'Support de la police japonaise :';
$lang['GD_True'] = 'Oui';
$lang['GD_False'] = 'Non';

// Manually translated by Informpro
$lang = array_merge($lang, array(
  'Show_EXIF_Info' => 'Montrer les informations EXIF de la photo',
  'Invert_Nav_Arrows' => 'Inverser les fl&egrave;ches sur la page de vue (fl&egrave;che droite = plus r&eacute;cent)',
	'Show_Slideshow_Script' => 'Activer les transitions du Diaporama',
	'Set_Memory' => 'Limite de m&eacute;moire PHP (MB)',
	'Set_Memory_Explain' => 'Cette fonctionnalit&eacute; sert &agrave; augmenter la m&eacute;moire allou&eacute;e au processus de PHP (si votre serveur le permet) si vous avez un probl&egrave;me de chargement d\'images. Pour des raisons de s&eacute;curit&eacute;, cette valeur est fix&eacute;e &agrave; 16MB.',
	'Album_Picture_Sorting' => 'Tri des images',
	'Album_Picture_Sorting_Direction' => 'Ordre du tri des images',
	'Show_Last_Comments' => 'Afficher les derniers commentaires sur l\'index de l\'album et dans les cat&eacute;gories',
	'Show_Personal_Gallery_Link' => 'Afficher les liens pour les galleries personnelles dans les sous-cat&eacute;gories',
	'Show_OTF_Link' => 'Afficher le lien "Album OTF" sur l\'index de l\'album',
	'Show_AllPics_Link' => 'Afficher le lien "Toutes les images" sur l\'index de l\'album',
	'Show_PG_Link' => 'Afficher le lien "Galleries personnelles" sur l\'index de l\'album',
	'Allow_Album_Avatars' => 'Autoriser les utilisateurs d\'utiliser des photos de leur galerie comme avatar',
	'Show_GIF_MidThumb' => 'Afficher les images en entier si Mid Thumb est activ&eacute;.',
	'LB_Preview' => 'Activer la pr&eacute;vue LightBox',
	'LB_Preview_Explain' => 'Cette photo affichera une modale LightBox pour pr&eacute;voir les images quand vous les survolerez',
	'Quick_Thumbnails' => 'Miniatures rapides',
	'Quick_Thumbnails_explain' => 'Activez cette option pour que le syst&egrave;me v&eacute;rifie si les miniatures ont d&eacute;j&agrave; &eacute;t&eacute; g&eacute;ner&eacute;e, et le cas &eacute;cheant, les utiliser directement. Cela pourrait fortement acc&eacute;ler la vue de cat&eacute;gorie.',
	'Use_Old_Thumbnails' => 'Utiliser les anciennes fonctionnalit&eacute;s des miniatures',
	'Use_Old_Thumbnails_Explain' => 'Si vous activez cette option, les miniatures utiliseront l\'ancien format pour les formats petits / moyens. N\'utilisez cette option que si vous avez des probl&egrave;mes d\'habitude.',
));

?>
