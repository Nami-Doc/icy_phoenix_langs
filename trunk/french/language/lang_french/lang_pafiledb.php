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
*** French Translation Vendethiel and Yros ***
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
// Toplist
	'Toplist' => 'Top',
	'Select_list' => 'Sélectionner le type de la liste à afficher',
	'Latest_downloads' => 'Fichiers récents',
	'Most_downloads' => 'Fichiers populaires',
	'Rated_downloads' => 'Fichiers les mieux notés',
	'Total_new_files' => 'Nouveaux téléchargements',
	'Show' => 'Afficher',
	'One_week' => 'Une semaine',
	'Two_week' => 'Deux semaine',
	'30_days' => '30 Jours',
	'New_Files' => 'Nombre total de nouveaux fichiers ces derniers %d jours',
	'Last_week' => 'La semaine dernière',
	'Last_30_days' => 'Ces derniers 30 jours',
	'Show_top' => 'Montrer le top',
	'Or_top' => 'ou le Top',
	'Popular_num' => 'Top %d des %d fichiers dans la base de données',
	'Popular_per' => 'Top %d %% des %d fichiers dans la base de données',
	'General_Info' => 'Informations générales',
	'Downloads_stats' => 'Statistiques des téléchargements de l\'utilisateur',
	'Rating_stats' => 'Statistiques des notes de l\'utilisateur', //V: todo: User&#39;s Rating Stats',
	'Os' => 'Système',
	'Browsers' => 'Navigateurs',

// Main
	'Files' => 'Fichiers',
	'Viewall' => 'Voir tous les fichiers',
	'Vainfo' => 'Voir tous les fichiers dans la base de données',
	'Jump' => 'Sélectionnez une catégorie',
	'Sub_category' => 'Sous-catégorie',
	'Last_file' => 'Dernier fichier',

// Sort
	'Sort' => 'Tri',
	'Name' => 'Nom',
	'Update_time' => 'Dernière mise à jour',

// Category
	'No_files' => 'Pas de fichier',
	'No_files_cat' => 'Il n\'y a pas de fichier dans cette catégorie.',
	'Cat_not_exist' => 'La catégorie sélectionnée n\'existe pas.',
	'File_not_exist' => 'Le fichier sélectionné n\'existe pas.',
	'License_not_exist' => 'La licence sélectionnée n\'existe pas.',
	'No_dl_categories_exists' => 'Soit vous n\'êtes pas autorisé à voir cette catégorie, soit elle n\'existe pas.',

// File
	'File' => 'Fichier',
	'Desc' => 'Description',
	'Creator' => 'Créateur',
	'Version' => 'Version',
	'Scrsht' => 'Capture d\'écran',
	'Docs' => 'Site web',
	'Lastdl' => 'Dernier téléchargement',
	'Never' => 'Jamais',
	'Votes' => ' Votes',
	'Date' => 'Date',
	'Update_time' => 'Dernière mise à jour',
	'DlRating' => 'Note',
	'Dls' => ' Téléchargements',
	'Downloadfile' => 'Télécharger',
	'File_size' => 'Taille',
	'Not_available' => 'Fichier indisponible !',

	'Mirrors' => 'Miroirs',
	'Mirrors_explain' => 'Ajoutez ou supprimez des miroirs, faites attention à la validité des informations car le fichier sera envoyé à la base de données',
	'Click_here_mirrors' => 'Cliquez ici pour ajouter des miroirs',
	'Mirror_location' => 'Adresse',
	'Add_new_mirror' => 'Ajouter un miroir',

//User Upload
	'User_upload' => 'Envoyer un fichier',

// License
	'License' => 'Acceptation de la licence',
	'Licensewarn' => 'Vous devez accepter cette licence pour finaliser le téléchargement',
	'Iagree' => 'J\'accepte',
	'Dontagree' => 'Je refuse',

// Search
	'Search' => 'Recherche',
	'Search_for' => 'Recherche :',
	'Results' => 'Résultats pour',
	'No_matches' => 'Aucun résultat pour ',
	'Matches' => 'résultats ont été trouvés pour',
	'All' => 'Toutes les catégories',
	'Choose_cat' => 'Sélectionnez les catégories :',
	'Include_comments' => 'Include Comments',
	'Submiter' => 'Submitted by',

// Statistics
	'Statistics' => 'Statistiques',
	'Select_chart_type' => 'Sélectionnez le type de graphique',
	'Bars' => 'Barres',
	'Lines' => 'Lignes',
	'Area' => 'Zone',
	'Linepoints' => 'Points des lignes',
	'Points' => 'Points',
	'Chart_header' => 'Statistiques sur les fichiers - Fichiers ajoutés à la base de données chaque mois',
	'Chart_legend' => 'Fichiers',
	'X_label' => 'Monis',
	'Y_label' => 'Nombre de fichiers',

// Rate
	'Rate' => 'Noter',
	'Rerror' => 'Désolé, vous avez déjà noté le fichier.',
	'Rateinfo' => 'Vous êtes sur le point de noter <i>{filename}</i>.<br />Veuillez sélectionner une note ci-dessous. 1 est le pire, 10 le meilleur.',
	'Rconf' => 'Vous avez donné la note {rate} à <i>{filename}</i>.<br />La nouvelle note du fichier est donc {newrating}.',
	'R1' => '1',
	'R2' => '2',
	'R3' => '3',
	'R4' => '4',
	'R5' => '5',
	'R6' => '6',
	'R7' => '7',
	'R8' => '8',
	'R9' => '9',
	'R10' => '10',
	'Not_rated' => 'Pas noté',

// Email
	'Emailfile' => 'Envoyer le lien du fichier par e-mail',
	'Emailinfo' => 'Si vous voulez envoyer ce fichier à un ami, remplissez ce formulaire et il recevra un e-mail avec le lien.<br />Les éléments marqués d\'un * sont obligatoires sauf indication contraire',
	'Yname' => 'Votre nom',
	'Yemail' => 'Votre adresse e-mail',
	'Fname' => 'Nom de votre ami',
	'Femail' => 'Adresse e-mail de votre ami',
	'Esub' => 'Sujet de l\'e-mail',
	'Etext' => 'Texte',
	'Defaultmail' => 'Je pensais que tu pourrais être intéressé par le fichier disponible à l\'adresse',
	'Semail' => 'Envoyer l\'e-mail',
	'Econf' => 'L\'e-mail a été envoyé.',

// Comments
	'Comments' => 'Commentaires',
	'Comments_title' => 'Titres des commentaires',
	'Comment_subject' => 'Sujet du commentaire',
	'Comment' => 'Commentaire',
	'Comment_explain' => 'Utilisez la zone de texte ci-dessus pour donner votre opinion sur le fichier !',
	'Comment_add' => 'Ajouter un commentaire',
	'Comment_delete' => 'Supprimer',
	'Comment_posted' => 'Votre commentaire a été ajouté.',
	'Comment_deleted' => 'Le commentaire a été supprimé.',
	'Comment_desc' => 'Titre',
	'No_comments' => 'Aucun commentaire n\'a été posté pour l\'instant.',
	'Links_are_ON' => 'Les liens sont <u>ON</u>',
	'Links_are_OFF' => 'Les liens sont <u>OFF</u>',
	'Images_are_ON' => 'Les images sont <u>ON</u>',
	'Images_are_OFF' => 'Les images sont <u>OFF</u>',
	'Check_message_length' => 'Vérification de la longueur du message',
	'Msg_length_1' => 'Votre message fait ',
	'Msg_length_2' => ' caractères.',
	'Msg_length_3' => 'Il vous reste ',
	'Msg_length_4' => ' caractères.',
	'Msg_length_5' => 'Il vous reste ',
	'Msg_length_6' => ' caractères libre.',


// Download
	'Directly_linked' => 'Vous pouvez télécharger un fichier directement depuis un autre site',

//Permission
	'Sorry_auth_view' => 'Désolé, mais seuls les %s peuvent voir les fichiers et les sous-catégories de cette catégorie.',
	'Sorry_auth_file_view' => 'Désolé, mais seuls les %s peuvent voir ce fichier dans cette catégorie.',
	'Sorry_auth_upload' => 'Désolé, mais seuls les %s peuvent envoyer des fichiers dans cette catégorie.',
	'Sorry_auth_download' => 'Désolé, mais seuls les %s peuvent télécharger les fichiers dans cette catégorie.',
	'Sorry_auth_rate' => 'Désolé, mais seuls les %s peuvent noter les fichiers dans cette catégorie.',
	'Sorry_auth_view_comments' => 'Désolé, mais seuls les %s peuvent voir les commentaires dans cette catégorie.',
	'Sorry_auth_post_comments' => 'Désolé, mais seuls les %s peuvent poster des commentaires dans cette catégorie.',
	'Sorry_auth_edit_comments' => 'Désolé, mais seuls les %s peuvent éditer les commentaires dans cette catégorie.',
	'Sorry_auth_delete_comments' => 'Désolé, mais seuls les %s peuvent supprimer les commentaires dans cette catégorie.',
// MX
	'Sorry_auth_edit' => 'Désolé, mais vous ne pouvez pas éditer les fichiers dans cette catégorie.',
	'Sorry_auth_delete' => 'Désolé, mais vous ne pouvez pas supprimer les fichiers dans cette catégorie.',
	'Sorry_auth_mcp' => 'Désolé, mais vous ne pouvez pas modérer cette catégorie.',
	'Sorry_auth_approve' => 'Désolé, mais vous ne pouvez pas approuver les fichiers dans cette catégorie.',


// General
	'Category' => 'Catégorie',
	'Error_no_download' => 'Le fichier sélectionné n\'existe plus',
	'Options' => 'Options',
	'Click_return' => 'Cliquez %sici%s pour retourner à la page précédente',
	'Click_here' => 'Cliquez ici',
	'never' => 'Aucun',
	'pafiledb_disable' => 'La base de téléchargements est désactivée',
	'jump' => 'Sélectionnez une catégorie',
	'viewall_disabled' => 'Cette fonctionnalité a été désactivée par un administrateur.',
	'New_file' => 'Nouveau fichier',
	'No_new_file' => 'Pas de nouveau fichier',
	'None' => 'Aucun',
	'No_file' => 'Pas de fichier',
	'View_latest_file' => 'Voir le dernier fichier',

// Toplists mx blocks
	'Recent_Public_Files' => 'Derniers téléchargements',
	'Random_Public_Files' => 'Téléchargements aléatoires',
	'Toprated_Public_Files' => 'Top Téléchargements',
	'Most_Public_Files' => 'Plus téléchargés',
	'File_Title' => 'Titre',
	'File_Desc' => 'Description',
	'Rating' => 'Note',
	'Dls' => 'Téléchargé',

// MX Addon
	'Deletefile' => 'Supprimer le fichier',
	'Editfile' => '&Eacute;diter le fichier',
	'pa_MCP' => 'Panel Modérateur',
	'Click_return_not_validated' => 'Cliquez %sici%s pour retourner à la page précédente',
	)
);

$lang['Stats_text'] = "Il y a au total {total_files} fichiers dans {total_categories} catégories<br />";
$lang['Stats_text'] .= "Il y a eu {total_downloads} téléchargements au total<br /><br />";
$lang['Stats_text'] .= "Le fichier le plus récent est <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "Le fichier est plus ancien est <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "La note moyenne est {average}/10<br />";
$lang['Stats_text'] .= "Le fichier le plus populaire, basé sur la notation, est <a href={u_popular}>{popular}</a> avec une note de {most}/10<br />";
$lang['Stats_text'] .= "Le fichier le moins populaire, basé sur la notation, est <a href={u_lpopular}>{lpopular}</a> avec une note de {least}/10<br /><br />";
$lang['Stats_text'] .= "Le nombre moyen de téléchargements est de {avg_dls}<br />";
$lang['Stats_text'] .= "Le fichier le plus populaire, basé sur les téchargements, est <a href={u_most_dl}>{most_dl}</a> avec {most_no} téléchargements<br />";
$lang['Stats_text'] .= "Le fichier le moins populaire, basé sur les téchargements, est <a href={u_least_dl}>{least_dl}</a> avec {least_no} téléchargements<br />";

?>