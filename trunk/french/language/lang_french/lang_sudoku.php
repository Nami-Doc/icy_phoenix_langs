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
* Majorflam - (majorflam@majormod.com) - (http://majormod.com)
* Lopalong
*** French Translation http://icyphoenix.fr ***
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
	'Sudoku_Version' => 'Sudoku Mod Version %s &copy; Majorflam 2005 - Dernier pack de jeu : Pack %s',
	'suduko_blank_tile' => 'Cliquez pour entrer un nombre',
	'suduko_user_tile' => 'Cliquez pour éditer',
	'sudoku_no_tile' => 'Vous devez sélectionner une case !',
	'sudoku_input_num' => 'Sélectionnez un nombre à entrer dans la case.',
	'sudoku_no_number' => 'Vous devez choisir un nombre !',
	'sudoku_instructions' => 'Placez des chiffres de 1 à 9 dans chaque cellule vide pour que chaque ligne, colonne et bloc de 3x3 contiennent tous les numbres de 1 à 9. Les grilles sont légèrement pré-remplies pour vous aider. Cliquez sur une cellule vide pour choisir un chiffre, ou cliquez sur une cellule que vous avez déjà rempli pour changer de chiffre.',
	'sudoku_invalid_number' => 'Chiffre invalide !',
	'sudoku_howto' => 'Comment jouer',
	'sudoku_stats' => 'Statistiques',
	'sudoku_statistics' => 'Les statistiques sont recuellies selon vos performances à ce jeu, et les performances des autres. Seuls les dix meilleurs joueurs sont affichés.<br/>Chaque fois que vous placez un nombre, vous gagnez 10 points. Mais attention, quand vous changer un nombre, vous perdez 15 points. Si vous remettez la grille à zéro, vous recommencer la partie avec -200 points.',
	'sudoku_game_info' => 'Pack : <b>%s</b> || Numéro de partie : <b>%s</b> || Niveau : <b>%s</b>',
	'sudoku_player_stats' => 'Vos statistiques',
	'sudoku_leaderboard' => 'Top 10',
	'sudoku_played' => 'Nombre total de parties',
	'sudoku_points' => 'Nombre total de points',
	'sudoku_these_points' => 'Points gagnés sur cette partie',
	'sudoku_lead_played' => 'Parties jouées',
	'sudoku_lead_points' => 'Points',
	'sudoku_level_easy' => 'Facile',
	'sudoku_level_medium' => 'Moyen',
	'sudoku_level_hard' => 'Difficile',
	'sudoku_level_very_hard' => 'Très difficile',
	'sudoku_confirm_reset' => 'Remise à zéro de la grille',
	'sudoku_confirm_reset_text' => 'Êtes-vous sûr de vouloir recommencer cette grille à zéro ? Si vous acceptez, vous recommencerez la grille avec -200 points..',
	'sudoku_reset_cancelled' => 'Remise à zéro annulée.',
	'sudoku_lead_current_game' => 'Partie en cours',
	'sudoku_current_game_text' => 'Pack : <b>%s ~ </b>Partie n°<b>%s</b>',
	'sudoku_nomore_grids' => 'Bravo ! Vous avez fini toutes les grilles disponibles. Veuillez contacter un Administrateur pour qu\'il ajoute plus de grilles.',
	'sudoku_load_new' => 'Grille chargée avec succès. Chargement ...',
	'sudoku_wrong_numbers' => 'Vous avez complété la grille, mais certains chiffres étaient à la mauvaise place. La grille va se recharger, et les chiffres faux seront retirés. Cela vous coutera 20 points pour chaque chiffre faux. Il a y %s chiffres faux, et cela vous a coûté %s points au total.<br/><br/>Chargement ...',
	'sudoku_reset_confirmed' => 'Votre grille va se remettre à zéro. Chargement ...',
	'sudoku_no_change_starter' => 'Vous ne pouvez pas changer un numéro pré-rentré',
	'sudoku_no_url_tricks' => 'Pas de triche, merci',
	'sudoku_place' => 'Place!',
	'sudoku_reset_grid' => 'Remettre à zéro la grille',
	'sudoku_who_is_online' => 'Qui joue au sudoku',
	'sudoku_total_online' => 'Au total, <b>%s</b> utilisateurs ont joué au sudoku ces dernières 24 heures.',
	'sudoku_logged_in_list' => 'Utilisateurs jouant actuellement au sudoku :',
	'sudoku_online_explain' => 'Ces données sont basées sur les utilisateurs ayant joué au sudoku ces cinq dernières minutes.',
	'sudoku_game_stats' => 'Au total, <b>%s</b> utilisateurs ont joué au sudoku sur ce site, soit un total de <b>%s</b> parties !',
	'sudoku_no_blank_starter' => 'Vous ne pouvez pas effacer une case non remplie !',
	'sudoku_view_all' => 'Tout voir',
	'sudoku_buy_number' => 'Acheter un chiffre',
	'sudoku_confirm_buy_text' => 'Vous avez choisi d\'acheter un chiffre. Une case blanche de votre grille sera choisie aléatoirement, et le chiffre correct sera inséré. Cela vous coûtera 30 points. Êtes-vous sûr de vouloir acheter un chiffre ?',
	'sudoku_buy_cancelled' => 'Vous avez décider de ne pas acheter de chiffre',
	'sudoku_ran_error' => 'Une erreur est survenue lors de l\'insertion du chiffre, veuillez re-essayer. Si le problème persiste, veuillez contacter l\'administrateur du forum',
	'sudoku_ran_success' => 'Une case a été choisie au hasard et le chiffre correct a été inséré. La case sera en surbrillance pour être plus visible',
	'sudoku_resynch_success' => 'Synchronisation des statistiques terminé. Redirection ...',
	'sudoku_resynch' => 'Resynchroniser',
// for ver 1.0.5
	'sudoku_reset_game' => 'Remettre le sudoku à zéro',
	'sudoku_reset_game_text' => 'Êtes-vous sûr de vouloir remettre le sudoku à zéro ? Toutes les statistiques de tous les joueurs seront effacées. Veuillez noter que vos packs ne seront pas touchés, vous n\'aurez rien à réinstaller. Cette action ne peut être annulée.',
	'sudoku_reset_game_cancelled' => 'Remise à zéro sur sudoku annulé.',
	'sudoku_rest_game_success' => 'Le sudoku a été remis à zéro.',
	)
);

?>