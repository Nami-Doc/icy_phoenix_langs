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
	'bbcb_mg_lang' => 'lang_french',

	'wrote' => 'a écrit',
	'Quote' => 'Citer',
	'Code' => 'Code',
	'Hide' => 'Cacher',
	'Show' => 'Afficher',
	'Download' => 'Téléchargement',
	'Syntax' => 'Syntaxe',
	'Select' => 'Sélectionner',
	'ReviewPost' => 'Voir le message',
	'OffTopic' => 'Hors sujet',
	'OpenNewWindow' => 'Cliquez pour ouvrir l\'image dans une nouvelle fenêtre',
	'C++' => 'C++',
	'PhpCode' => 'Php',

	'Close_Tags' => 'Fermer les balises',
	'Styles_tip' => 'Astuce : Vous pouvez styliser rapidement le texte sélectionné via les boutons.',

// Smiley Creator
	'bbcode_sc_help' => 'Créateur de smiley: [schild=1]Texte[/schild] créé un smiley avec votre texte',
	'Smiley_creator' => 'Créateur de smiley',
	'SC_shieldtext' => 'Couleur du smiley',
	'SC_fontcolor' => 'Couleur du texte',
	'SC_shadowcolor' => 'Couleur de l\'ombre',
	'SC_shieldshadow' => 'Protection de l\'ombre', // "shield shadow"????
	'SC_shieldshadow_on' => 'Activer',
	'SC_shieldshadow_off' => 'Désactiver',
	'SC_smiliechooser' => 'Choisissez le smiley',
	'SC_random_smilie' => 'Smiley aléatoire',
	'SC_default_smilie' => 'Smiley standard',
	'SC_create_smilie' => 'Créer',
	'SC_stop_creating' => 'Annuler',
	'SC_error' => 'Voici votre protection : vous avez oublié le texte',
	'SC_another_shield' => 'Voulez-vous créer un autre smiley ?',
	'SC_notext_error' => 'Vous ne pouvez pas créer un smiley sans texte',

	'bbcode_b_help' => 'Text en gras : [b]texte[/b] (alt+b)',
	'bbcode_i_help' => 'Texte en italic : [i]texte[/i] (alt+i)',
	'bbcode_u_help' => 'Texte souligné : [u]texte[/u] (alt+u)',
	'bbcode_q_help' => 'Texte cité : [quote]texte[/quote] (alt+q)',
	'bbcode_c_help' => 'Affichage de code : [code]code[/code] (alt+c)',
	'bbcode_l_help' => 'Liste : [list]texte[/list] (alt+l)',
	'bbcode_o_help' => 'Liste ordonnée : [list=]texte[/list] (alt+o)',
	'bbcode_p_help' => 'Insérez une image : [img]http://image_url[/img] (alt+p)',
	'bbcode_w_help' => 'Insérez une URL : [url]http://url[/url] ou [url=http://url]texte[/url] (alt+w)',
	'bbcode_a_help' => 'Fermer toutes les balises BBCode ouvertes',
	'bbcode_s_help' => 'Couleur du texte : [color=red]texte[/color] Astuce : vous pouvez aussi utiliser color=#FF0000',
	'bbcode_f_help' => 'Taille du texte : [size=x-small]texte en petit[/size]',

	'Font_color' => 'Couleur du texte',
	'color_default' => 'Par défaut',
	'color_dark_red' => 'Rouge foncé',
	'color_red' => 'Rouge',
	'color_orange' => 'Orange',
	'color_brown' => 'Marron',
	'color_yellow' => 'Jaune',
	'color_green' => 'Vert',
	'color_olive' => 'Olive',
	'color_cyan' => 'Cyan',
	'color_blue' => 'Bleu',
	'color_dark_blue' => 'Bleu foncé',
	'color_indigo' => 'Indigo',
	'color_violet' => 'Violet',
	'color_white' => 'Blanc',
	'color_black' => 'Noir',

	'color_cadet_blue' => 'Bleu Cadet',
	'color_coral' => 'Corail',
	'color_crimson' => '&Eacute;carlate',
	'color_dark_grey' => 'Gris foncé',
	'color_dark_orchid' => 'Orchidée foncé',
	'color_gold' => 'Or',
	'color_gray' => 'Gris',
	'color_light_blue' => 'Bleu clair',
	'color_light_cyan' => 'Cyan clair',
	'color_light_green' => 'Vert clair',
	'color_light_grey' => 'Gris clair',
	'color_light_orange' => 'Orange clair',
	'color_peach' => 'Pêche',
	'color_power_orange' => 'Orange juteuse', //V: todo: power orange wtf?
	'color_sea_green' => 'Vert mer',
	'color_silver' => 'Argent',
	'color_tomato' => 'Tomate',
	'color_turquoise' => 'Turquoise',
	'color_chocolate' => 'Chocolat',
	'color_deepskyblue' => 'Bleu ciel profond',
	'color_midnightblue' => 'Bleu miniut',
	'color_darkgreen' => 'Dark Green',

	'Font_size' => 'Taille du texte',
	'font_tiny' => 'Minuscule',
	'font_small' => 'Petit',
	'font_medium' => 'Medium',
	'font_normal' => 'Normal',
	'font_large' => 'Large',
	'font_huge' => '&Eacute;norme',
	'font_xl' => 'XL',

// Font Type
	'Font_Type' => 'Police d\'écriture',
	'Font_Arial' => 'Arial',
	'Font_Arial_black' => 'Arial Black',
	'Font_Comic_sans_ms' => 'Comic Sans MS',
	'Font_Courier_new' => 'Courier New',
	'Font_Impact' => 'Impact',
	'Font_Lucida_console' => 'Lucida Console',
	'Font_Lucida_sans_unicode' => 'Lucida Sans Unicode',
	'Font_Microsoft_sans_serif' => 'Microsoft Sans Serif',
	'Font_Symbol' => 'Symbol',
	'Font_Tahoma' => 'Tahoma',
	'Font_Times_new_roman' => 'Times New Roman',
	'Font_Traditional_arabic' => 'Traditional Arabic',
	'Font_Trebuchet_ms' => 'Trebuchet MS',
	'Font_Verdana' => 'Verdana',
	'Font_Webdings' => 'Webdings',
	'Font_Wingdings' => 'Wingdings',

// Alt Buttons
	'bbcb_mg_colorpicker' => 'Palette à couleurs',
	'bbcb_mg_j' => 'Justifier',
	'bbcb_mg_r' => 'Droite',
	'bbcb_mg_c' => 'Centre',
	'bbcb_mg_l' => 'Gauche',
	'bbcb_mg_b' => 'Gras',
	'bbcb_mg_i' => 'Italic',
	'bbcb_mg_u' => 'Souligné',
	'bbcb_mg_s' => 'Barré',
	'bbcb_mg_f' => 'Pâle',
	'bbcb_mg_g' => 'Dégradé',
	'bbcb_mg_tab' => 'Table',
	'bbcb_mg_td' => 'Cellule',
	'bbcb_mg_md' => 'Défilement vers le bas',
	'bbcb_mg_mu' => 'Défilement vers le haut',
	'bbcb_mg_ml' => 'Défilement vers la gauche',
	'bbcb_mg_mr' => 'Défilement vers la droite',
	'bbcb_mg_code' => 'Code',
	'bbcb_mg_phpbbmod' => 'phpBB Mod Template',
	'bbcb_mg_quote' => 'Citation',
	'bbcb_mg_spoil' => 'Spoiler',
	'bbcb_mg_highlight' => 'Surlignage',
	'bbcb_mg_url' => 'Adresse',
	'bbcb_mg_eml' => 'Email',
	'bbcb_mg_img' => 'Image',
	'bbcb_mg_imgl' => 'Image à gauche',
	'bbcb_mg_imgr' => 'Image à droite',
	'bbcb_mg_imgba' => 'Image - avant et après',
	'bbcb_mg_albumimg' => 'Image de l&#39;album',
	'bbcb_mg_flsh' => 'Flash',
	'bbcb_mg_vid' => 'Vidéo',
	'bbcb_mg_gvid' => 'Google Video',
	'bbcb_mg_youtube' => 'YouTube',
	'bbcb_mg_vimeo' => 'Vimeo',
	'bbcb_mg_ram' => 'Ram',
	'bbcb_mg_strm' => 'Stream',
	'bbcb_mg_emff' => 'EMFF (MP3)',
	'bbcb_mg_lst' => 'Liste',
	'bbcb_mg_hr' => 'Ligne horizontale',
	'bbcb_mg_bullet' => 'Puce',
	'bbcb_mg_sup' => 'Exposant',
	'bbcb_mg_sub' => 'Indice',
	'bbcb_mg_lsto' => 'Liste ordonnée',
	'bbcb_mg_fade' => 'Transparence',
	'bbcb_mg_spoiler' => 'Spoiler',
	'bbcb_mg_cell' => 'Cellule',
	'bbcb_mg_grad' => 'Dégradé',
	'bbcb_mg_upload_img' => 'Envoyer une image sur PostImage.org et l\'ajouter au message',
	'bbcb_mg_posticyimage' => 'Envoyer une image et l\'ajouter au message',
	'bbcb_mg_albumimgl' => 'Image de l\'album à gauche',
	'bbcb_mg_albumimgr' => 'Image de l\'album à droite',
	'bbcode_help' => 'Aide BBCode',

	'xs_bbc_hide_message' => 'Message caché',
	'xs_bbc_hide_quote_message' => 'Message caché cité, mais toujours caché.',
	'xs_bbc_hide_message_explain' => 'Désolé, mais vous devez poster une réponse pour voir ce message.',

	'bbcode_url' => 'Entrez l&#39;adresse (par exemple http://www.icyphoenix.com)',
	'bbcode_url_title' => 'Entrez le titre du lien',
	'bbcode_url_empty' => 'Vous n\'avez pas entré d\'adresse',
	'bbcode_url_errors' => 'Erreur !',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();

$js_lang['s_formerrors'] = 'Vous devez écrire du texte pour envoyer un message';
$js_lang['s_gen_error'] = ':: Erreur ::\n\n';
$js_lang['s_url_insert'] = 'Insérer une adresse (par exemple. http://www.icyphoenix.com/)';
$js_lang['s_url_insert_tip'] = 'http://';
$js_lang['s_url_error'] = 'Vous n\'avez pas entré d\'adresse';
$js_lang['s_url_title_insert'] = 'Entrez le titre de l\'adresse';
$js_lang['s_url_title_insert_tip'] = 'Lien';
$js_lang['s_url_title_error'] = 'vous n\'avez pas entré de titre pour l\'adresse';
$js_lang['s_email_insert'] = 'Entrez l\'adresse e-mail';
$js_lang['s_email_insert_tip'] = 'yourname@yourdomain.com';
$js_lang['s_email_error'] = 'Vous n\'avez pas entré d\'adresse e-mail';
$js_lang['s_img_insert'] = 'Entrez l\'adresse de l\'image';
$js_lang['s_img_error'] = 'Vous n\'avez pas entré l\'adresse de l\'image';
$js_lang['s_albumimg_insert'] = 'Numéro de l\'image dans l\'album';
$js_lang['s_albumimg_insert_tip'] = 'Numéro';
$js_lang['s_albumimg_error'] = 'Vous n\'avez pas entré Numéro de l\'image dans l\'album';
$js_lang['s_ram_insert'] = 'Entrez l\'adresse du fichier Real Media';
$js_lang['s_stream_insert'] = 'Entrez l\'adresse du fichier audio';
$js_lang['s_video_insert'] = 'Entrez l\'adresse du fichier video';
$js_lang['s_video_w_insert'] = 'Largeur de la vidéo';
$js_lang['s_video_w_error'] = 'Vous n\'avez pas entré la largeur de la vidéo';
$js_lang['s_video_h_insert'] = 'Hauteur de la vidéo ';
$js_lang['s_video_h_error'] = 'Vous n\'avez pas entré la hauteur de la vidéo';
$js_lang['s_googlevideo_insert'] = 'Entrez l\'ID Google Video';
$js_lang['s_youtube_insert'] = 'Entrez l\'ID de la vidéo YouTube';
$js_lang['s_vimeo_insert'] = 'Entrez l\'ID de la vidéo Vimeo';
$js_lang['s_emff_insert'] = 'Entrez l\'adresse du fichier mp3';
$js_lang['s_flash_insert'] = 'Entrez l\'adresse du fichier flash';
$js_lang['s_flash_w_insert'] = 'Largeur du fichier flash';
$js_lang['s_flash_w_error'] = 'Vous n\'avez pas entré la largeur';
$js_lang['s_flash_h_insert'] = 'Hauteur du fichier flash';
$js_lang['s_flash_h_error'] = 'Vous n\'avez pas entré la hauteur';
$js_lang['s_id_insert_tip'] = 'ID';
$js_lang['s_id_insert_error'] = 'Vous n\'avez pas entré d\'ID';
$js_lang['s_file_insert_error'] = 'Vous n\'avez pas entré d\'adresse';
$js_lang['s_grad_select'] = 'Veuillez commencer par sélectionner le texte';
$js_lang['s_grad_error'] = 'Vous devez sélectionner moins de 120 lettres';
$js_lang['s_grad_path'] = 'includes/grad.htm';
$js_lang['s_view_more_code'] = 'Afficher plus code';
$js_lang['s_image_upload'] = 'Envoi une image sur PostImage.org et l\'ajoute au message';
$js_lang['s_posticyimage'] = 'Envoi une image et l\'ajoute au message';

// Helpline messages
$js_lang['s_a_help'] = 'Fermer toutes les balises ouvertes';
$js_lang['s_b_help'] = 'Texte en gras : [b]text[/b]';
$js_lang['s_i_help'] = 'Text en italic : [i]text[/i]';
$js_lang['s_u_help'] = 'Texte souligné : [u]text[/u]';
$js_lang['s_strike_help'] = 'Texte barré : [strike]text[/strike]';
$js_lang['s_quote_help'] = 'Citation : [quote]text[/quote]';
$js_lang['s_code_help'] = 'Affichage de code : [code]code[/code]';
$js_lang['s_phpbbmod_help'] = 'phpBB Mod Template';
$js_lang['s_highlight_help'] = 'Surlignage : [highlight=#FFFFAA]text[/highlight]';
$js_lang['s_img_help'] = 'Insérez une image : [img]http://image_url[/img]';
$js_lang['s_imgl_help'] = 'Insérer une image alignée à gauche : [img align=left]http://image_url[/img]';
$js_lang['s_imgr_help'] = 'Insérer une image alignée à droite : [img align=right]http://image_url[/img]';
$js_lang['s_albumimg_help'] = 'Insérer une image de l\'album : [albumimg]Album Pic ID[/albumimg]';
$js_lang['s_albumimgl_help'] = 'Insérer une image de l\'album alignée à gauche : [albumimg align=left]Album Pic ID[/albumimg]';
$js_lang['s_albumimgr_help'] = 'Insérer une image de l\'album alignée à droite : [albumimg align=right]Album Pic ID[/albumimg]';
$js_lang['s_url_help'] = 'Insérer une adresse : [url]http://url[/url] or [url=http://url]URL text[/url]';
$js_lang['s_fc_help'] = 'Couleur du texte : [color=red]text[/color] (Tip : you can also use color=#FF0000)';
$js_lang['s_fs_help'] = 'Taille du texte : [size=9]small text[/size]';
$js_lang['s_ft_help'] = 'Police : [font=Andalus]text[/font]';
$js_lang['s_table_help'] = 'Insérer une table : [table]text[/table]';
$js_lang['s_td_help'] = 'Insérer une cellule : [td]text[/td]';
$js_lang['s_mail_help'] = 'Insérer une adresse e-mail : [email]Email Here[/email]';
$js_lang['s_grad_help'] = 'Insérer un texte dégradé';
$js_lang['s_right_help'] = 'Aligner un texte sur la droite : [align=right]text[/align]';
$js_lang['s_left_help'] = 'Aligner un texte sur la gauche : [align=left]text[/align]';
$js_lang['s_center_help'] = 'Aligner un texte au milieu : [align=center]text[/align]';
$js_lang['s_justify_help'] = 'Justifier : [align=justify]text[/align]';
$js_lang['s_marqr_help'] = 'Défilement vers la droite : [marquee direction=right]text[/marquee]';
$js_lang['s_marql_help'] = 'Défilement vers la gauche : [marquee direction=left]text[/marquee]';
$js_lang['s_marqu_help'] = 'Défilement vers le haut : [marquee direction=up]text[/marquee]';
$js_lang['s_marqd_help'] = 'Défilement vers le bas : [marquee direction=down]text[/marquee]';
$js_lang['s_sup_help'] = 'Exposant : [sup]text[/sup]';
$js_lang['s_sub_help'] = 'Indice : [sub]text[/sub]';
$js_lang['s_hr_help'] = 'Insérer une ligne de séparation [hr]';
$js_lang['s_bullet_help'] = 'Insérer une puce [*]';
$js_lang['s_video_help'] = 'Insérer une vidéo : [video width=# height=#]file URL[/video]';
$js_lang['s_googlevideo_help'] = 'Insérer une Google Video : [googlevideo]Google Video ID[/googlevideo]';
$js_lang['s_youtube_help'] = 'Inserérer une vidéo YouTube : [youtube]YouTube ID[/youtube]';
$js_lang['s_quick_help'] = 'Insérer une vidéo Quicktime : [quick]http://quicktime_video_url/[/quick]';
$js_lang['s_flash_help'] = 'Insérer un fichier flash : [flash width=# height=#]flash URL[/flash]';
$js_lang['s_ram_help'] = 'Insérer un fichier Real Media : [ram]File URL[/ram]';
$js_lang['s_stream_help'] = 'Insérer un stream audio : [stream]File URL[/stream]';
$js_lang['s_emff_help'] = 'Insérer un fichier mp3 : [emff]File URL[/emff]';
$js_lang['s_fade_help'] = 'Pâle : [opacity]text[/opacity] or [opacity][img]http://image_url/[/img][/opacity]';
$js_lang['s_spoiler_help'] = 'Spoiler : [spoiler]text[/spoiler]';
$js_lang['s_cell_help'] = 'Celulle : [cell]text[/cell]';
$js_lang['s_list_help'] = 'Liste : [list]text[/list] (Astuce : vous pouvez utiliser [*] pour insérer des puces)';
$js_lang['s_listo_help'] = 'Ordered list : [list=1|a]text[/list] (Tip : vous pouvez utiliser [*] pour insérer des puces)';
$js_lang['s_help_help'] = 'Ouvrir l\'aide BBCode';
$js_lang['s_image_upload_help'] = 'Envoyer une image sur PostImage.org et l\'ajouter au message';
$js_lang['s_posticyimage_help'] = 'Envoyer une image et l\'ajouter au message';
$js_lang['s_smiley_creator'] = 'Créateur de smiley : [smiley=1]Text[/smiley] (insère un smiley avec du texte)';

// Please do not remove this!!!
foreach ($js_lang as $k => $v)
{
	$lang[$k] = $v;
}

$javascript_lang_vars = '';
foreach ($js_lang as $k => $v)
{
	$javascript_lang_vars .= 'var ' . $k . ' = \'' . str_replace("'", "\'", $v) . '\';' . "\n";
}

$lang['JAVASCRIPT_LANG_VARS'] = $javascript_lang_vars;
unset($js_lang);
// JavaScript Text - END

?>