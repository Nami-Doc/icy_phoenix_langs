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
$lang['Album_config_updated'] = 'La configuration de l\'album a �t� mise � jour avec succ�s';
$lang['Click_return_album_config'] = 'Cliquez %sIci%s pour retourner � la configuration de l\'album';
$lang['Max_pics'] = 'Nombre maximal de photos pour chaque cat�gorie (-1 = illimit�)';
$lang['User_pics_limit'] = 'Limite de photos par cat�gorie pour chaque utilisateur (-1 = illimit�e)';
$lang['Moderator_pics_limit'] = 'Limite de photos par cat�gorie pour chaque mod�rateur (-1 = illimit�e)';
$lang['Pics_Approval'] = 'Approbation des photos';
$lang['Rows_per_page'] = 'Nombre de rangs sur la page des miniatures';
$lang['Cols_per_page'] = 'Nombre de colonnes sur la page des miniatures';
$lang['Thumbnail_quality'] = 'Qualit� des miniatures (1-100)';
$lang['Thumbnail_cache'] = 'Cache des miniatures';
$lang['Manual_thumbnail'] = 'Miniature manuelle';
$lang['GD_version'] = 'Optimiser pour la version de GD';
$lang['Pic_Desc_Max_Length'] = 'Description de la photo/Longueur maximale des commentaires (octets)';
$lang['Hotlink_prevent'] = 'Pr�vention des liens directs';
$lang['Hotlink_allowed'] = 'Domaines autoris�s pour les liens directs (s�par�s par une virgule)';
$lang['Personal_gallery'] = 'Autoris� � cr�er une galerie personnelle pour les utilisateurs';
$lang['Personal_gallery_limit'] = 'Limite de photos pour chaque gallerie personnelle (-1 = illimit�e)';
$lang['Personal_gallery_view'] = 'Par d�faut, qui peut voir les galeries personnelles';
$lang['Rate_system'] = 'Activer le syst�me de notation';
$lang['Rate_Scale'] ='Echelle de notation';
$lang['Comment_system'] = 'Activer le syst�me de commentaires';
$lang['Thumbnail_Settings'] = 'Options des miniatures';
$lang['Extra_Settings'] = 'Options suppl�mentaires';
$lang['Default_Sort_Method'] = 'M�thode de tri par d�faut';
$lang['Default_Sort_Order'] = 'Ordre de tri par d�faut';
$lang['Fullpic_Popup'] = 'Voir la photo dans une pop-up';
$lang['Email_Notification'] = 'Activer la notification par e-mail lors de l\'ajout de nouvelles photos dans l\'album ( pour les administrateurs uniquemement)';
$lang['Show_Download'] = 'Montrer le bouton TELECHARGER (qui active le t�l�chargement de photos au format ZIP) seulement pour ceux qui ont des permissions d\'ENVOI vers l\'album (si vous choisissez TOUJOURS le bouton sera toujours visible m�me si l\'utilisateur n\'a pas de permissions d\'ENVOI de photos)';
$lang['Show_Slideshow'] = 'Activer l\'option Diaporama';
$lang['Show_Pic_Size'] = 'Montrer les tailles de photos sur les miniatures';
$lang['Show_IMG_No_GD'] = 'Montrer les miniatures de GIF sans utiliser la librairie GD (les images agrandies sont charg�es et ensuite juste montr�es redimensionn�es).';
$lang['Show_Pics_Nav'] = 'Montrer la Box de navigation dans les photos sur la page de visionnage des photos';
$lang['Show_Inline_Copyright'] = 'Montrer les infos de copyright sur une seule ligne';
$lang['Enable_Nuffimage'] = 'Activer la page des Effets Sp�ciaux bas�e sur Images Class de Nuffmon';
$lang['Enable_Sepia_BW'] = 'Activer les effets Ton S�pia et Noir et Blanc sur la page des Effets Sp�ciaux (d�sactivez cette fonction si vous ne voulez pas surcharger le CPU de votre serveur)';

// Multiple Uploads Admin configuration
$lang['Upload_Settings'] = 'Envoi';
$lang['Max_Files_To_Upload'] = 'Nombre maximal de fichiers qu\'un utilisateur peut envoyer en m�me temps';
$lang['Album_upload_settings'] = 'Options d\'envoi de photos de l\'album';
$lang['Max_pregenerated_fields'] = 'Nombre maximal de champs � pr�-g�n�rer';
$lang['Dynamic_field_generation'] = 'Activer l\'ajout dynamique de champs d\'envoi';
$lang['Pre_generate_fields'] = 'Pr�-g�n�rer les champs d\'envoi';
$lang['Propercase_pic_title'] = 'Titre de photo avec majuscules par ex / <i>\'Voici Un Titre De Photo\'</i><br />Metre sur \'NON\' affichera ceci <i>\'Voici un titre de photo\'</i>';
$lang['Pic_Resampling'] = 'En activant cette option, chaque image sera redimensionn�e en un instant si n�cessaire (pour garder les propri�t�s de l\'images tout en respectant les options de l\'album dans le panneau d\'administration).';
$lang['Max_file_size_resampling'] = 'Taille maximale de fichier avant le redimmentsionnement (octets)';

// Nuffload
$lang['Nuffload_Config'] = 'Configuration de Nuffload';
$lang['Enable_Nuffload'] = 'Activer Nuffload';
$lang['Enable_Nuffload_Explain'] = 'En activant cette option, Nuffload sera utilis� � la place du formulaire standard d\'envoi de photos.';
$lang['progress_bar_configuration'] = 'Nuffload - Configuration de la barre de progression d\'envoi';
$lang['perl_uploader'] = 'Activer l\uploader Perl';
$lang['path_to_bin'] = 'Chemin de la racine phpBB vers cgi-bin (en gen. <b>./cgi-bin/</b> si vous avez phpBB dans un sous-dossier)';
$lang['show_progress_bar'] = 'Montrer la barre de progression d\'envoi lors de l\'upload';
$lang['close_progress_bar'] = 'Fermer la barre � la fin de l\'envoi';
$lang['activity_timeout'] = 'D�lai d\'attente d\'activit� (en secs)';
$lang['simple_format'] = 'Utiliser un format simple pour la barre de progression';
$lang['multiple_uploads_configuration'] = 'Nuffload - Configuration des uploads multiples';
$lang['multiple_uploads'] = 'Activer les uploads multiples';
$lang['max_uploads'] = 'Champs maximum d\'upload';
$lang['zip_uploads'] = 'Activer les uploads zipp�s';
$lang['image_resizing_configuration'] = 'Nuffload - Configuration du redimensionnement d\'image';
$lang['image_resizing'] = 'Activer le redimensionnement d\'image';
$lang['image_width'] = 'Largeur de l\'image';
$lang['image_height'] = 'Hauteur de l\'image';
$lang['image_quality'] = 'Qualit� de l\'image';

// Personal Gallery Page
$lang['Personal_Galleries'] = 'Galeries personnelles';
$lang['Album_personal_gallery_title'] = 'Galerie personnelle';
$lang['Album_personal_gallery_explain'] = 'De cette page, vous pouvez choisri quels groupes d\'utilisateurs ont le droit de cr�er et de voir les galeries personnelles. Ces options ne sont prises en compte qui si vous configure sur "Priv�" pour "Autoris�s � cr�er des galeries personnelles pour les utilisateurs" ou "Qui peut voir les galeries personnelles" dans la page Configuration de l\'album';
$lang['Album_personal_successfully'] = 'Cette option a �t� mise � jour avec succ�s';
$lang['Click_return_album_personal'] = 'Cliquez %sIci%s pour retourner aux options des galeries personnelles';

// Categories
$lang['Categories'] = 'Cat�gories de l\'album';
$lang['Album_Categories_Title'] = 'Cat�gories de l\'album';
$lang['Album_Categories_Explain'] = 'De cette page, vous pouvez g�rer vos cat�gories : cr�er, modifier, supprimer, trier, etc.';
$lang['Category_Permissions'] = 'Permissions de la cat�gorie';
$lang['Category_Title'] = 'Titre de la cat�gorie';
$lang['Category_Desc'] = 'Description';
$lang['View_level'] = 'Voir le niveau';
$lang['Upload_level'] = 'Uploader le niveau';
$lang['Rate_level'] = 'Noter le niveau';
$lang['Comment_level'] = 'Commenter le niveau';
$lang['Edit_level'] = ' Editer le niveau';
$lang['Delete_level'] = 'Supprimer le niveau';
$lang['New_category_created'] = 'La nouvelle cat�gorie a �t� cr�� avec succ�s';
$lang['Click_return_album_category'] = 'Cliquez %sIci%s pour retourner au gestionnaire des Cat�gories de l\'album';
$lang['Category_updated'] = 'Cette cat�gorie a �t� mise � jour avec succ�s';
$lang['Delete_Category'] = 'Supprimer la cat�gorie';
$lang['Delete_Category_Explain'] = 'le champ ci-dessous vous permet de supprimer une cat�gorie et de d�cider o� vous voulez mettre les photos qu\'elle contenait';
$lang['Delete_all_pics'] = 'Supprimer toutes les photos';
$lang['Category_deleted'] = 'Cette cat�gorie a �t� supprim� avec succ�s';
$lang['Category_changed_order'] = 'Cette cat�gorie a chang� d\'ordre avec succ�s';

// Permissions
$lang['Album_Auth_Title'] = 'Permissions de l\'album';
$lang['Album_Auth_Explain'] = 'D\'ici vous pouvez choisir quels groupes d\'utilisateurs peuvent �tre mod�rateurs pour chaque cat�gorie d\'album ou juste en avoir l\'acc�s priv�';
$lang['Select_a_Category'] = 'S�lectionner une cat�gorie';
$lang['Look_up_Category'] = 'Consulter une cag�tories';
$lang['Album_Auth_successfully'] = 'Les authorisations ont �t� mises � jour avec succ�s';
$lang['Click_return_album_auth'] = 'Cliquez %sIci%s pour retourner aux permissions de l\'album';

$lang['Upload'] = 'Uploader';
$lang['Rate'] = 'Noter';
$lang['Comment'] = 'Commenter';

// Clear Cache
$lang['Clear_Cache_Tab'] = 'Cache';
$lang['Clear_Cache'] = 'Nettoyer le cache';
$lang['Album_clear_cache_confirm'] = 'Si vous utilisez l\'option "Cache de la miniature" vous devez nettoyer votre cache de miniature apr�s avoir chang� vos options de miniatures dans la configuration de l\'album pour qu\'elles soient r�g�n�r�es.<br /><br /> Voulez-vous le nettoyer maintenant ?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />Le cache de vos miniatures a �t� nettoy� avec succ�s<br />&nbsp;';

// CLowN
$lang['SP_Album_config'] = 'CLowN SP';
$lang['SP_Album_config_explain'] = 'D\'ici vous pouvez configurer quelques options pour l\'album service pack';
$lang['SP_Album_sp_general'] = 'Configuration G�n�rale';
$lang['SP_Album_sp_watermark'] = 'Configuration Protection des images (Watermark)';
$lang['SP_Album_sp_hotornot'] = 'Configuration Popularit�';
$lang['SP_Rate_type'] = 'S�lectionner comment l\'affichage de la notation des photos doit �tre montr�';
$lang['SP_Rate_type_0'] = 'Images seulement';
$lang['SP_Rate_type_1'] = 'Nombres seulement';
$lang['SP_Rate_type_2'] = 'Nombres et images';
$lang['SP_Display_latest'] = 'Afficher le bloc des derni�res photos propos�es';
$lang['SP_Display_highest'] = 'Afficher le bloc des photos les mieux not�es';
$lang['SP_Display_most_viewed'] = 'Afficher le bloc des photos les plus vues';
$lang['SP_Display_random'] = 'Afficher le bloc des photos al�atoires';
$lang['SP_Pic_row'] = 'Nombre de rangs sur les blocs de miniatures';
$lang['SP_Pic_col'] = 'Nombre de colonnes sur les blocs de miniatures';
$lang['SP_Midthumb_use'] = 'Utiliser des miniatures r�duites';
$lang['SP_Midthumb_cache'] = 'Activer le cache des miniatures r�duites';
$lang['SP_Midthumb_high'] = 'Hauteur des miniatures r�duites (pixel)';
$lang['SP_Midthumb_width'] = 'Largeur des miniatures r�duites (pixel)';
$lang['SP_Watermark'] = 'Utiliser la protection des images (watermark)';
$lang['SP_Watermark_users'] = 'Utiliser la protection des images avec tous les utilisateurs (Si vous activez \'non\' elle sera affich�e seulement pour les non-membres.)';
$lang['SP_Watermark_placent'] = 'Afficher la protection \'Watermark\' � cet emplacement sur la photo';
$lang['SP_Hon_already_rated'] = 'Vote illimit� sur la page Photo Populaire ou non';
$lang['SP_Hon_sep_rating'] = 'Stocker la page Photo Populaire ou non sur un tableau s�par� ?';
$lang['SP_Hon_where'] = 'Choisissez une cat�gorie � afficher sur le page Photo Populaire ou non ( laissez en blanc pour afficher des photos de toutes les cat�gories, s\'il y a plus d\'une cat�gorie, s�parez-les par une virgule))';
$lang['SP_Hon_users'] = 'Les invit�s peuvent-ils voter ?';

$lang['SP_Disabled'] = 'D�sactiv�';
$lang['SP_Enabled'] = 'Activ�';
$lang['SP_Yes'] = 'Oui';
$lang['SP_No'] = 'Non';
$lang['SP_Always'] = 'Toujours';
$lang['SP_Submit'] = 'Envoyer';
$lang['SP_Reset'] = 'R�initialiser';

/***************************************************************************
 * Album Hierarchy Administration                                          *
 ***************************************************************************/

// Configuration
$lang['Album_config_notice'] = 'Si vous changez les options actuelles de l\'album photos et que vous s�lectionnez ensuite un autre onglet, on vous demandera si vous voulez sauvegarder les changements<br />Le syst�me <b>ne sauvegardera pas </b> les changements automatiquement pour vous.';
$lang['Save_sucessfully_confimation'] = '%s a �t� sauvegard� avec succ�s';

$lang['Show_Recent_In_Subcats'] = 'Montrer les photos r�centes dans les sous-cat�gories';
$lang['Show_Recent_Instead_of_NoPics'] = 'Montrer les photos r�centes � la place du message "Aucune photo"';

$lang['Album_Index_Settings'] = 'Index de l\'album';
$lang['Show_Index_Subcats'] = 'Montrer les sous-cat�gories sur l\'index de l\'album';
$lang['Show_Index_Thumb'] = 'Montrer les miniatures des cat�gories sur l\'index de l\'album';
$lang['Show_Index_Pics'] = 'Montrer le nombre de photos dans les cat�gories actuelles sur l\'index de l\'album';
$lang['Show_Index_Comments'] = 'Montrer le nombre de commentaires dans les cat�gories actuelles sur l\'index de l\'album';
$lang['Show_Index_Total_Pics'] = 'Montrer le nombre total de photos pour les cat�gories actuelles et toutes leurs sous-cat�gories sur l\'index de l\'album';
$lang['Show_Index_Total_Comments'] = 'Montrer le nombre total de commentaires pour les cat�gories actuelles et toutes ses sous-cat�gories sur l\'index de l\'album';
$lang['Show_Index_Last_Comment'] = 'Montrer les derniers commentaires pour les cat�gories actuelles et toutes ses sous-cat�gories sur l\'index de l\'album';
$lang['Show_Index_Last_Pic'] = 'Montrer les derni�res infos sur les photos pour les cat�gories actuelles et toutes ses sous-cat�gories sur l\'index de l\'album';
$lang['Line_Break_Subcats'] = 'Montrer chaque sous-cat�gorie sur une nouvelle ligne';

$lang['Show_Personal_Gallery_Link'] = 'Montrer le lien vers sa galerie personnelle et vers les galeries personnelles des utilisateurs dans les sous-cat�gories';

$lang['Album_Personal_Auth_Explain'] = 'Ici vous pouvez choisir quel(s) groupe(s) d\'utilisateur(s) peuvent �tre mod�rateurs pour <b>toutes</b> Les cat�gories personnelles de l\'album ou y avoir juste l\'acc�s';

$lang['Album_debug_mode'] = 'Activer le mode de d�buggage de la Hi�rarchie.<br><span class="gensmall">Cela g�n�rera quelques avertissements sur la page et aussi dans l\'en-t�te (header), ce qui ne pose pas de probl�me.<br>Cette option doit <b>seulement</b> �tre utilis�e quand vous avez des probl�mes.</span>';

$lang['New_Pic_Check_Interval'] = 'L\'espace de temps d�fini pour voir si une photo est consid�r�e comme nouvelle ou non.<br><span class="gensmall"><b>Format</b> : &lt;nombre&gt;&lt;type de dur�e&gt; O� le type de dur�e est soit h, min, sem or m (heure, jour, semaine ou mois)<br> e.g. 12H = 12 heures , 12D = 12 jours , 12W = 12 semaines et 12M = 12 mois<br>Si aucune dur�e n\'est sp�cifi�e le syst�me choisira <b>Jours</b></span>';
$lang['New_Pic_Check_Interval_Desc'] = '<span class="gensmall">H = Heures, D = Jours, W = Semaines, M = Mois</span>';
$lang['New_Pic_Check_Interval_LV'] = 'En activant cette option, le compteur des nouvelles photos se base sur la derni�re visite des utilisateurs.';
$lang['Enable_Show_All_Pics'] = 'Activer le basculement en mode vue des galeries personnelles (Toutes les photos ou seulement la cat�gorie s�lectionn�e).<br/> Quand <b>non</b> est choisi, seule la cat�gorie s�lectionn�e est affich�e.'; 
$lang['Enable_Index_Supercells'] = 'Activer les super cellules sur le tableau de l\'index de l\'album. <br><span class="gensmall">Ceci activera les effets mouseover(passage de souris) sur les colonnes, aussi connu comme l\'effet hypercell.</span>';

// Sorting
$lang['Album_Category_Sorting'] = 'Tri des cat�gories de l\'album';
$lang['Album_Category_Sorting_Id'] = 'ID';
$lang['Album_Category_Sorting_Name'] = 'Nom';
$lang['Album_Category_Sorting_Order'] = 'Ordre de tri ( par d�faut )';
$lang['Album_Category_Sorting_Direction'] = 'Sens du tri (seulement valide pour le tri par nom et ID)';
$lang['Album_Category_Sorting_Asc'] = 'Ascendant';
$lang['Album_Category_Sorting_Desc'] = 'Descendant';

// Personal Gallery
$lang['Album_Personal_Settings'] = 'Galeries personnelles';
$lang['Show_Personal_Sub_Cats'] = 'Montrer les sous-cat�gories personnelles sur l\'index de l\album';
$lang['Personal_Gallery_Approval'] = 'Les photos des galeries personnelles doivent �tre approuv�es par un administrateur';
$lang['Personal_Gallery_MOD'] = 'les galeries personnelles peuvent �tre mod�r�es par leurs propri�taires';
$lang['Personal_Sub_Cat_Limit'] = 'Nombre maximal de sous-cat�gories (-1 = illimit�)';
$lang['User_Can_Create_Personal_SubCats'] = 'Les utilisateurs peuvent cr�er des sous-cat�gories dans leur propre galerie personnelle';

$lang['Click_return_personal_gallery_index'] = 'Cliquez %sIci%s pour retourner � l\'index des galeries personnelles';

$lang['Show_Recent_In_Personal_Subcats'] = 'Montrer les photos r�centes dans les sous-cat�gories personnelles';
$lang['Show_Recent_Instead_of_Personal_NoPics'] = 'Montrer les photos r�cents au lieu du message "Aucune photo" dans les galeries personnelles';

// Categories
$lang['Personal_Root_Gallery'] = 'Cat�gorie-m�re des galeries personnelles';
$lang['Parent_Category'] = 'Cat�gorie-m�re (pour cette cat�gorie)';
$lang['Child_Category_Moved'] = 'La cat�gorie s�lectionn�e a des cat�gories filles. Les cat�gories-filles seront d�plac�es vers la cat�gorie <B>%s</B>.';
$lang['No_Self_Refering_Cat'] = 'Vous ne pouvez pas lier une cat�gorie-m�re � elle-m�me';
$lang['Can_Not_Change_Main_Parent'] = 'Vous ne pouvez pas la cat�gorie principale de votre galeirie personnelle en cat�gorie-m�re';

// ACP - Javascript text
$lang['acp_ask_save_changes'] = 'Voulez-vous sauvegarder les changements ?\n(OK = oui, Annuler = Non)';
$lang['acp_nothing_to_save'] = 'Rien � sauvegarder !';
$lang['acp_settings_changed_ask_save'] = 'Vous avez modifi� les options. Voulez-vous les sauvegarder ?\n(OK = oui, Annuler = Non)';

// GD Info
$lang['GD_Info'] = 'Info GD';
$lang['GD_Title'] = 'Info GD';
$lang['GD_Description'] = 'Ici vous pouvez trouver des informations sur la librairie GD actuellement install�e';
$lang['GD_Version'] = 'Version :';
$lang['GD_Freetype_Support'] = 'Support des polices Freetype :';
$lang['GD_Freetype_Linkage'] = 'Type de lien Freetype :';
$lang['GD_T1lib_Support'] = 'Support T1lib :';
$lang['GD_Gif_Read_Support'] = 'Support de lecture de Gif :';
$lang['GD_Gif_Create_Support'] = 'Support de cr�ation de Gif :';
$lang['GD_Jpg_Support'] = 'Support Jpg/Jpeg :';
$lang['GD_Png_Support'] = 'Support Png :';
$lang['GD_Wbmp_Support'] = 'Support WBMP :';
$lang['GD_XBM_Support'] = 'SupportXBM :';
$lang['GD_Jis_Mapped_Support'] = 'Support de la police japonaise :';
$lang['GD_True'] = 'Oui';
$lang['GD_False'] = 'Non';

?>