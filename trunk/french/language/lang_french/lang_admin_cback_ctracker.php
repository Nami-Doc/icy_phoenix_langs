<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_cback_ctracker.php 31 2009-04-27 16:37:18Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Christian Knerr (cback) - (www.cback.de)
* Lopalong
**** French Translation http://icyphoenix.fr **
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
/*
* Language Strings used for the ACP Menu points
*/
	'ctracker_module_category' => 'CrackerTracker',
	'ctracker_module_1' => 'Scan des Modifications de Fichiers',
	'ctracker_module_2' => 'Crédits',
	'ctracker_module_3' => 'Scan des Fichiers',
	'ctracker_module_4' => 'Message global',
	'ctracker_module_5' => 'Bloqueur d\'IP &amp; d\'agent',
	'ctracker_module_6' => 'Journalisation',
	'ctracker_module_7' => 'Maintenance &amp; Tests',
	'ctracker_module_8' => 'Utilisateurs misérables',
	'ctracker_module_9' => 'Réglages',
	'ctracker_module_10' => 'Sauvegarde',
	'ctracker_module_11' => 'Bas de Page',


/*
* Language Strings used in ACP Modules itself
*/
	'ctracker_wrong_module' => 'Module inconnu',
	'ctracker_img_descriptions' => 'Image',
	'ctracker_set_catname1' => 'Bloquer d\'IP, Proxy &amp; Agent',
	'ctracker_set_catname2' => 'Protection de la recherche',
	'ctracker_set_catname3' => 'Protection de la connexion',
	'ctracker_set_catname4' => 'Détection automatique du spam',
	'ctracker_set_catname5' => 'Protection des inscriptions',
	'ctracker_set_catname6' => 'Vérification sur les mots de passe',
	'ctracker_set_catname7' => 'Sécurité générale',
	'ctracker_set_catname8' => 'Autres options',
	'ctracker_settings_head' => 'Options CrackerTracker',
	'ctracker_settings_expl' => '<b>Modifiez les options du système de sécurité CrackerTracker.</b>',
	'ctracker_button_submit' => 'Sauvegarder les options',
	'ctracker_button_reset' => 'Restorer',

	'ctracker_settings_m1' => 'Activer le bloqueur d\'IP',
	'ctracker_settings_e1' => 'Active le bloqueur d\'IP, Proxy et d\'Agents.',
	'ctracker_settings_m2' => 'Taille du journal du bloqueur d\'ip',
	'ctracker_settings_e2' => 'Change le nombre d\'entrées à garder dans le bloqueur. Si le nombre d\'entrées dépasse la limite, le journal sera automatiquement supprimé pour gagner de l\'espace.',
	'ctracker_settings_m3' => 'Activer la protection de la recherche',
	'ctracker_settings_e3' => 'Activer ou désactiver la protection de la recherchée.',
	'ctracker_settings_m4' => 'Délai pour les membres',
	'ctracker_settings_e4' => 'Si la protection est activée : choisissez le délai avant que les utilisateurs enregistrés puissent refaire une recherche.',
	'ctracker_settings_m5' => 'Nombre de recherches pour les membres',
	'ctracker_settings_e5' => 'Choisissez le nombre de recherches que les membres peuvent faire dans l\'intervalle indiqué ci-dessus. Si excédé, les recherches supplémentaires seront bloquées pour le temps restant afin de réduire la charge serveur.',
	'ctracker_settings_m6' => 'Délai pour les invités',
	'ctracker_settings_e6' => 'Choisissez le délai avant que les invités puissent refaire une recherche.',
	'ctracker_settings_m7' => 'Nombre de recherches pour les invités',
	'ctracker_settings_e7' => 'Choisissez combien de recherche les invités peuvent faire dans l\'intervalle indiqué ci-dessus. Si excédé, les recherches supplémentaires seront bloquées pour le temps restant afin de réduire la charge serveur.',
	'ctracker_settings_m8' => 'Activer la protection de la connexion',
	'ctracker_settings_e8' => 'Activer ou désactiver le système de protection de la connexion.',
	'ctracker_settings_m9' => 'Taille du journal pour les connexions refusées',
	'ctracker_settings_e9' => 'Choisissez combien d\'entrées de connexion refusées doivent être gardées avant d\'être automatiquement purgées pour sauvegarder de l\'espace.',
	'ctracker_settings_m10' => 'Nombre de connexions avant d\'afficher la confirmation visuelle',
	'ctracker_settings_e10' => 'Choisissez combien de fois un utilisateur à le droit de se tromper à la connexion avant que la protection anti-bruteforce s\'active et que la confirmation visuelle s\'affiche.',
	'ctracker_settings_m11' => 'Historique des connexions',
	'ctracker_settings_e11' => 'Activer ou désactiver l\'historique des connexions.',
	'ctracker_settings_m12' => 'Entrées dans le journal par utilisateur',
	'ctracker_settings_e12' => 'Choisissez combien de connexions (correctes) doivent être gardées par utilisateur doivent être gardées dans l\'historique. Les utilisateurs peuvent voir la date & heure ainsi que l\'adresse IP pour chaque connexion sur son compte.',
	'ctracker_settings_m13' => 'Vérification de l\'adresse IP',
	'ctracker_settings_e13' => '<b>Activer ou désactiver la vérification de l\'adresse IP:</b> le vérificateur d\'adresse IP vérifie les changements dans votre adresse IP lorsque vous vous connecter. Chaque utilisateur peut activer ou désactiver cette fonctionnalité. L\'utilisateur sera notifié si sa plage d\'adresse IP a changé depuis sa dernière connexion, et/ou si quelqu\'un s\'est connecté depuis un autre endroit.',
	'ctracker_settings_m14' => 'Détection du Spam',
	'ctracker_settings_e14' => 'Choisissez le mode de protection contre le spam ou si vous voulez la désactiver.',
	'ctracker_settings_m15' => 'Intervalle de temps',
	'ctracker_settings_e15' => 'Choisissez l\'intervalle de temps (en secondes) avant que l\'utilisateur ne soit considéré comme un spammeur.',
	'ctracker_settings_m16' => 'Nombre de messages',
	'ctracker_settings_e16' => 'Choisissez le nombre de messages qu\'un utilisateur peut poster dans l\'intervalle indiqué ci-dessus. Une fois excédé, l\'utilisateur sera considéré comme un spammeur.',
	'ctracker_settings_m17' => 'Taille du journal',
	'ctracker_settings_e17' => 'Choisissez la taille du journal (Kb) où les utilisateurs marqués comme spammeurs seront enregistrés.',
	'ctracker_settings_m18' => 'Protection des inscriptions',
	'ctracker_settings_e18' => 'Activer ou désactiver la protection des inscriptions.',
	'ctracker_settings_m19' => 'Délail entre chaque inscription',
	'ctracker_settings_e19' => 'Choisissez le temps (en secondes) entre deux inscriptions.',

	'ctracker_settings_m21' => 'Surveiller les adresses IP',
	'ctracker_settings_e21' => 'En activant cette fonctionnalité, un utilisateur ne pourra se re-créer un compte qu\'après qu\'un utilisateur avec une autre adresse IP se soit inscrit.',
	'ctracker_settings_m22' => 'Validité des mots de passe',
	'ctracker_settings_e22' => 'Activer ou désactiver la vérification de validité des mots de passe des utilisateurs.',
	'ctracker_settings_m23' => 'Validité d\'un mot de passe (en jours)',
	'ctracker_settings_e23' => 'Choisissez combien de temps (en jours) les mots de passe des utilisateurs sera valide avant que l\'utilisateur ne soit rappelé qu\'il doit le changer.',
	'ctracker_settings_m24' => 'Vérification de la complexité des mots de passe',
	'ctracker_settings_e24' => 'Enable this feature to check the complexity of the User&#39;s passwords.',
	'ctracker_settings_m25' => 'Caractères requis',
	'ctracker_settings_e25' => 'Choisissez les caractères qui doivent être dans un mot de passe.',
	'ctracker_settings_m26' => 'Taille minimum',
	'ctracker_settings_e26' => 'Choisissez le nombre de lettres minimum pour un mot de pase.',
	'ctracker_settings_m27' => 'Protection de la réinitialisation du mot de passe',
	'ctracker_settings_e27' => 'Cette protection permet d\'empêcher les utilisateurs de réinitialiser leur mot de passe plus d\'une fois toutes les X minutes (délai défini ci-dessous).',
	'ctracker_settings_m28' => 'Délai entre chaque réinitialisation',
	'ctracker_settings_e28' => 'Délai (en minutes) avant qu\'un utilisateur ne puisse à nouveau réinitialiser son mot de passe.',
	'ctracker_settings_m29' => 'Surveillance des e-mails',
	'ctracker_settings_e29' => 'Activer cette protection permet d\'empêcher aux utilisateurs d\'abuser de la fonctionnalité d\'envoi d\'e-mail afin d\'éviter le spam.',
	'ctracker_settings_m30' => 'Délai entre chaque envoi d\'e-mail',
	'ctracker_settings_e30' => 'Délai (en minutes) entre deux e-mails qu\'un utilisateur peut envoyer via le forum.',
	'ctracker_settings_m31' => 'Sauvegarde automatique',
	'ctracker_settings_e31' => 'Activer cette sauvegarde permet que les options du forum soient sauvegardées automatiquement. Si cela ne marche pas, utilisez la dernière configuration fonctionnelle.',
	'ctracker_settings_m32' => 'Confirmation visuelle pour les invités',
	'ctracker_settings_e32' => 'Activer cette protection permet de forcer aux invités d\'entrer un code de confirmation visuelle avant d\'être autoriser à poster un message. Cette mesure est une protection contre le spam.',
	'ctracker_settings_m33' => 'Protection anti e-mails jetables',
	'ctracker_settings_e33' => 'cTracker possède une liste interne de services d\'adresses e-mails jetables (e-mails valides durant un court laps de temps). Activer cette fonctionnalité permet d\'empêcher les utilisateurs de s\'inscrire avec de telles adresses e-mails.',
	'ctracker_settings_m34' => 'Vérification de la validité de la configuration',
	'ctracker_settings_e34' => 'Activer cette fonctionnalité permet à CrackerTracker de vérifier que les réglages d\'IcyPhoenix sont valides, afin que vous ne puissiez endommager gravement votre site avec une mauvaise configuration',
	'ctracker_settings_m35' => 'Détection des spammeurs avancée',
	'ctracker_settings_e35' => 'En activant cette fonctionnalité, cTracker recherche les spammeurs et les messages spam. La plupart d\'entre eux seront bloqués.',
	'ctracker_settings_m36' => 'Vérification des mots-clefs',
	'ctracker_settings_e36' => 'En activant la détection des spammeurs avancée, les mots-clefs dans les profils et/ou les messages seront scannés pour identifier les spammeurs.<br/><b>Note :</b> il est possible que certains utilisateurs soient accusés à tort. Pensez à vérifier le journal.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Crédits',
	'ctracker_credits_subhead' => 'Crédits de CBACK CrackerTracker - page de remerciement.',
	'ctracker_credits_donate' => 'Faire un don',
	'ctracker_credits_donate_expl' => 'Appréciez-vous <b>CBACK CrackerTracker Professional</b> ? Si oui, pensez à faire un don au projet CBACK en utilisant le bouton Paypal, pour aider à payer les coûts serveurs, afin que nous puissions continuer à travailler sur tous nos projets libres et gratuits !<br /><br />Merci de votre support.',
	'ctracker_credits_credits' => 'Crédits',
	'ctracker_credits_credits_1' => 'Idées &amp; Implémentations',
	'ctracker_credits_credits_2' => 'Auteur et Support',
	'ctracker_credits_credits_3' => 'Icônes',
	'ctracker_credits_credits_4' => 'Site de téléchargement officiel',
	'ctracker_credits_moddownload' => 'Téléchargement du MOD CrackerTracker',
	'ctracker_credits_thanks' => 'Merci à ...',
	'ctracker_credits_thanks_text' => 'J\'aimerais remercier toutes ces personnes :',
	'ctracker_credits_thanks_to' => '<b>Idées, tests de sécurité et relecture</b><br />Tekin Birdüzen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Idées:</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Bêta-testeurs</b><br />Merci à tous les participants qui ont aidé à tester,<br />aux utilisateurs Premium<br />et à nos collègues moddeurs qui ont aidé à tester et à corriger, bien sûr.</i>',
	'ctracker_credits_info' => 'Plus de sécurité ?',
	'ctracker_credits_info_text' => 'N\'oubliez pas d\'activer le CATPCHA sur votre forum pour empêcher les robots de s\'inscrire !',
	// V: not used anymore /o/
	//L\'outil parfait pour IcyPhoenix et CrackerTracker : pour encore plus de sécurité, nous vous recommandons d\'installer le mod <b>Advanced Visual Confirmation</b> (Confirmation visuelle avancée) par Amiga
	//The perfect add-on for IcyPhoenix and CrackerTracker: For optimal safety we recommend the Mod <b>Advanced Visual Confirmation</b> by AmigaLink. This MOD expands the CAPTCHA feature of phpBB and CrackerTracker Professional with a more complex system which cannot be read by Bots. This MOD you can download from <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a>.<br /><br /><br /><br />We suggest that you also integrate this MOD into your Board for additional security.',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'Scan des fichiers',
	'ctracker_fchk_subhead' => '<b>Cr&eacute;er un checksum (total de contr&ocirc;le) pour chaque fichier PHP de forum votre.<br /><br />Pour commencer, cliquez sur "Cr&eacute;er ou mettre &agrave; jour les totaux de contr&ocirc;le". Apr&egrave;s &ccedil;a, vous aurez la possibilit&eacute; d\'effectuer une v&eacute;rification, ce qui vous confirmera si les fichiers ont chang&eacute; ou non depuis la derni&egrave;re fois. Si c\'est le cas, cela pourrait &ecirc;tre un signe que votre site est compromis. Il est aussi important de bien noter la date &agrave; laquelle vous cr&eacute;ez ou mettez un jour les totaux : un attaquant risque de les mettre &agrave; jour apr&egrave;s avoir modif&eacute; les fichiers pour vous induire en erreur. V&eacute;rifiez toujours la date. Il est important que vous mettiez &agrave; jour les totaux &agrave; chaque fois que vous apportez des modifications au site (mise &agrave; jour, ajout de mod ou de plugin), afin de ne pas cr&eacute;er de faux positifs.<br /><br /><b>Note :</b> Certains serveurs ne supportent pas cette fonctionnalit&eacute;. Si la proc&eacute;dure d&eacute;passe le d&eacute;lai d\'ex&eacute;cution ("Request Timeout" ou "Script Timeout", g&eacute;n&eacute;ralement),votre serveur n\'est pas compatible.<br /><br />&raquo; La derni&egrave;re mise &agrave; jour des totaux &eacute;tait le <b>%s</b>.',
	'ctracker_fchk_funcheader' => 'Actions',
	'ctracker_fchk_tableheader' => 'Sortie',
	'ctracker_fchk_option1' => 'Cr&eacute;er ou mettre &agrave; jour les totaux de contr&ocirc;le',
	'ctracker_fchk_option2' => 'V&eacute;rifier les fichiers',
	'ctracker_fchk_select_action' => 'Veuillez choisir une action.',
	'ctracker_fchk_update_action' => 'Totaux de contr&ocirc;les mis &agrave; jour',
	'ctracker_fchk_tablehead1' => 'Chemin',
	'ctracker_fchk_tablehead2' => '&Eacute;tat',
	'ctracker_file_unchanged' => 'NON MODIF.',
	'ctracker_file_changed' => 'MODIF.',
	'ctracker_file_deleted' => 'SUPPR.',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'Le scan de ficher s\'est effectu&eacute; avec succ&egrave;s. Cliquez sur "Afficher les r&eacute;sultats" pour voir les r&eacute;sultats. Vous pouvez corriger les fichiers incorrects.<br /><br /><b>Note :</b> il arrive que le scanner d&eacute;tecte un faux positif. Cela peut arriver car les fichiers PHP sont tous tr&egrave;s diff&eacute;rents les uns des autres, et parfois le d&eacute;veloppeur veut rendre le code accessible de l\'ext&eacute;rieur. Si c\'est le cas - et <b>uniquement</b> si vous en &ecirc;tes s&ucirc;r - vous pouvez ajouter au d&eacute;but du fichier - <u>APR&Egrave;S</u> &gt;?php - <br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br />Si vous ne savez pas quoi faire, allez demander d; l\'assistance sur les forums IcyPhoenix.',
	'ctracker_fscan_unchecked' => 'NON VERIF.',
	'ctracker_fscan_ok' => 'SAUF',
	'ctracker_fscan_prob_1' => 'extension.inc pas inclus / trop tard',
	'ctracker_fscan_prob_2' => 'IP_ROOT_PATH pas initialis&eacute; / incorrectement',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php non inclus / trop tard.',
	'ctracker_fscan_prob_4' => 'Le code dans le fichier est ex&eacute;cutable depuis l\'ext&eacute;rieur d\'IP.',
	'ctracker_fscan_prob_5' => 'extension.inc et / ou IP_ROOT_PATH n\'existent pas',
	'ctracker_fscan_prob_def' => 'Un cas inconnu est survenu',
	'ctracker_fscan_important' => '&Agrave; lire !',
	'ctracker_fscan_sel_action' => 'Pour lancer une v&eacute;rification, cliquez sur "Lancer un scan". Quand cette &eacute;tape sera termin&eacute;, vous pourrez afficher les r&eacute;sultats via le bouton "Afficher les r&eacute;sultats". Ce fichier est disponible jusqu\'&agrave; ce que vous relanciez une analyse.<br />Pour des raisons techniques, il est impossible de donner des r&eacute;sultats certains sur les fichiers, alors n\'en tirez pas de conclusions hatives. Il est possible que le scanneur classifie des fichiers s&ucirc;rs comme non s&ucirc;rs, et vice versa.<br /><br />Si vous avez plus de questions, visitez les forums d\'IcyPhoenix.',
	'ctracker_fscan_head' => 'CBACK CrackerTracker Scanneur de S&eacute;curit&eacute;',
	'ctracker_fscan_subhead' => 'Le scanneur passe sur chaque fichier PHP de votre forum, et en v&eacute;rifie la s&eacute;curit&eacute; via des r&egrave;gles pr&eacute;-&eacute;tablie par la communaut&eacute; phpBB / IP afin d\'en trouver les failles. Ce scanneur vous permet de les identifier afin de les r&eacute;gler.<br /><br /><b>Note :</b> les algorithmes utilis&eacute;s par ce scanneur sont tr&egrave;s complexes, ce qui fait qu\'ils prennent un temps certain &agrave; s\'ex&eacute;cuter. Il est possible que le processus PHP soit interrompu automatiquement par le serveur s\'il prend trop de temps &agrave; s\'ex&eacute;cuter. Gardez &ccedil;a en t&ecirc;te si un probl&egrave;me survient.<br /><br />La derni&egrave;re v&eacute;rification date de <b>%s</b>.',
	'ctracker_fscan_option1' => 'Lancer un scan',
	'ctracker_fscan_option2' => 'Afficher les r&eacute;sultats',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Message global',
	'ctracker_glob_msg_subhead' => '<b>Vous pouvez laisser un message global &agrave; tous vos utilisateurs.</b><br />Ceux-ci le verront &agrave; leur prochaine connexion sur le forum.<br />Vous pouvez mettre un lien vers un site, ou &eacute;crire le texte que vous voulez.<br /><b>Note :</b> le message doit tenir en 255 caract&egrave;res.',
	'ctracker_glob_msg_entry' => 'Configuration',
	'ctracker_glob_msg_submit' => 'Valider',
	'ctracker_glob_msg_reset' => 'Supprimer le message global actuel',
	'ctracker_glob_msg_type' => 'Type',
	'ctracker_glob_type_1' => 'Texte',
	'ctracker_glob_type_2' => 'Lien',
	'ctracker_glob_msg_txt' => 'Texte du message global',
	'ctracker_glob_msg_link' => 'Destination du lien du message',
	'ctracker_glob_msg_reset' => 'Annuler le message global actuel',
	'ctracker_glob_res_txt' => 'Si vous cliquez sur "Annuler le message global actuel", le texte sera supprim&eacute; (et ne sera pas affich&eacute; &agrave; la prochaine connexion des utilisateurs).',
'ctracker_glob_msg_saved' => 'Le message global a &eacute;t&eacute; cr&eacute;&eacute; avec succ&egrave;s.<br /><br />Cliquez <a href="%s">Ici</a> pour revenir sur la page pr&eacute;c&eacute;dente.',
	'ctracker_glob_msg_reset_ok' => 'Le message global a &eacute;t&eacute; supprim&eacute;. Le message ne s\'affichera plus.<br /><br />Cliquez <a href="%s">Ici</a> pour revenir &agrave; la page pr&eacute;c&eacute;dente.',

/*
* IP&Agent Blocker
*/
	'ctracker_ipb_delete' => 'Supprimer l\'entr&eacute;e',
	'ctracker_ipb_blocklist' => 'Entr&eacute;es de la liste noir',
	'ctracker_ipb_head' => 'Bloqueur de Proxy, IP &amp; UserAgent (navigateur)',
  'ctracker_ipb_description' => '<b>Voici la liste noire du bloqueur de Proxy, d\'IP et d\'UserAgent.</b><br />Vous pouvez supprimer des entr&eacute;es ou en ajouter de nouvelles.<br />Vous pouvez utiliser "*" comme joker pour filtrer des combinaisons. Par exemple, "lwp*" bloquera lwp-1 et lwp-simple. De m&ecirc;me, 100.*.*.* bloquera toutes les adresses IP commen&ccedil;ant par "100.".<br /><b>Attention :</b> Cet outil est un outil <i>avanc&eacute;</i>. Si vous entrez votre propre UserAgent ou Adresse IP, vous ne pourrez plus acc&eacute;der au forum !',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'Journalisation',
	'ctracker_log_manager_subtitle' => 'Gestion des fichiers de journalisation du site',
	'ctracker_log_manager_overview' => 'Vue d\'ensemble',
	'ctracker_log_manager_blocked' => 'CrackerTracker a bloqu&eacute; <b>%s</b> attaques jusqu\'&agrave; maintenant.',
	'ctracker_log_manager_overview' => 'Fichiers de journalisation',
	'ctracker_log_manager_head1' => 'Nom du fichier',
	'ctracker_log_manager_head2' => 'Nombre d\'entr&eacute;es',
	'ctracker_log_manager_head3' => 'Actions',
	'ctracker_log_manager_name2' => 'Protection contre les vers et les failles',
	'ctracker_log_manager_name3' => 'Bloqueur de Proxy, d\'IP et d\'UserAgent',
	'ctracker_log_manager_name4' => 'Connexions &eacute;chou&eacute;es',
	'ctracker_log_manager_name5' => 'Spammeurs bloqu&eacute;s',
	'ctracker_log_manager_name6' => 'Debug',
	'ctracker_log_manager_view' => 'Voir',
	'ctracker_log_manager_delete' => 'Supprimer',
	'ctracker_log_manager_delete_all' => 'Supprimer tous les fichiers',
	'ctracker_log_manager_deleted' => 'Le fichier a &eacute;t&eacute; supprim&eacute;.',
	'ctracker_log_manager_all_deleted' => 'Les fichiers ont tous &eacute;t&eacute; supprim&eacute;s.',
	'ctracker_log_manager_showheader1' => 'Il y a <b>une</b> entr&eacute;e dans ce fichier. Cliquez <a href="%s">Ici</a> pour revenir.',
	'ctracker_log_manager_showheader' => 'Il y a <b>%s</b> entr&eacute;es dans ce fichier. Cliquez <a href="%s">Ici</a> pour revenir.',
	'ctracker_log_manager_showlog' => 'Voir le fichier',
	'ctracker_log_manager_cell_1' => 'Date / heure',
	'ctracker_log_manager_cell_2a' => 'Faire appel',
	'ctracker_log_manager_cell_2b' => 'Nom d\'utilisateur',
	'ctracker_log_manager_cell_3' => 'Depuis',
	'ctracker_log_manager_cell_4' => 'UserAgent',
	'ctracker_log_manager_cell_5' => 'Addresse IP',
	'ctracker_log_manager_cell_6' => 'H&ocirc;te distant',
	'ctracker_log_manager_sysmsg' => 'Derni&egrave;re suppression le <b>%s</b>',

/*
* Footer configuration
* V: unused in IP
	'ctracker_footer_head' => 'Footer Management',
	'ctracker_footer_subhead' => 'Choose which footer CrackerTracker should show in your Forum. Please do not change the footer and the link to www.cback.de!',
	'ctracker_select_footer' => 'Choose Footer',
	'ctracker_footer_saveit' => 'Accept Footer Layout',
	'ctracker_footer_done' => 'Changes to Footer were saved successfully!',
*/

/*
* Maintenance Module in ACP
*/
	'ctracker_ma_unknown' => '<span class="text_orange">INDETERMIN&Eacute;</span>',
	'ctracker_ma_secure' => '<span class="text_green">OK</span>',
	'ctracker_ma_warning' => '<span class="text_red">ATTENTION</span>',
	'ctracker_ma_active' => '<span class="text_green">ACTIF</span>',
	'ctracker_ma_inactive' => '<span class="text_red">INACTIF</span>',
	'ctracker_ma_ca' => '<span class="text_green">OK</span>',
	'ctracker_ma_ci' => '<span class="text_red">NON DEFINI</span>',
	'ctracker_ma_head' => 'Maintenace &amp; V&eacute;rifications syst&egrave;mes',
	'ctracker_ma_subhead' => 'Ce syst&egrave;me v&eacute;rifie la fa&ccedil;on dont CrackerTracker fonctionne sur votre forum.',
	'ctracker_ma_systest' => 'Test syst&egrave;me',
	'ctracker_ma_sectest' => 'Test de s&eacute;curit&eacute;',
	'ctracker_ma_maint' => 'Fonctions de maintenance',
	'ctracker_ma_name_1' => 'Protection contre les vers et les failles',
	'ctracker_ma_name_2' => 'Unit&eacute; de contr&ocirc;le des variables',
	'ctracker_ma_name_3' => 'Bloqueur de Proxy, d\'IP et d\'UserAgent',
	'ctracker_ma_name_4' => 'Heuristiques de d&eacute;tection de vers - nombre de d&eacute;finitions : <b>%s</b>',
	'ctracker_ma_syshead_1' => 'Module de s&eacute;curit&eacute;',
	'ctracker_ma_syshead_2' => 'Status',
	'ctracker_ma_seccheck_1' => 'Type',
	'ctracker_ma_seccheck_2' => 'Version / Status',
	'ctracker_ma_seccheck_3' => 'R&eacute;f&eacute;rence',
	'ctracker_ma_seccheck_4' => 'Status',
	'ctracker_ma_scheck_1' => 'Version PHP (<a href="http://www.php.net" target="_blank">Site</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP SAFE MODE',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALS',
	'ctracker_ma_scheck_4' => 'Version IcyPhoenix (<a href="http://www.icyphoenix.com" target="_blank">Site</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; Confirmation visuelle',
	'ctracker_ma_scheck_4b' => '&raquo; Activation de compte',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Site</a>)',
	'ctracker_ma_chmod' => '<b>Chmod 777 :</b> ',
  'ctracker_ma_desc_link' => 'Lancer',
	'ctracker_ma_desc1' => '<b>Supprimer la table du bloqueurs de Proxy, d\'IP et d\'UserAgent</b><br />Supprime <u>toutes</u> les entr&eacute;es.',
	'ctracker_ma_desc2' => '<b>Restorer les r&eacute;glages d\'usine du bloqueur</b><br />Restore les valeurs par d&eacute;faut de la table du bloqueur. Vous perdrez vos confgurations.',
	'ctracker_ma_desc3' => '<b>Supprimer l\'historique des connexions</b><br />Supprime tout l\'historique des connexions, inconditionnellement.',
	'ctracker_ma_desc4' => '<b>Vider la table des totaux de contr&ocirc;les</b><br />Supprime les entr&eacute;es de la table des totaux de contr&ocirc;les des fichiers.',
	'ctracker_ma_desc5' => '<b>Vider la table de scan des fichiers</b><br />Supprime les entr&eacute;es de la table qui stocke les r&eacute;sultats des scans',
	'ctracker_ma_succ_main' => 'Action effectu&eacute;e avec succ&egrave;s',
	'ctracker_ma_err_main' => 'Une erreur est survenue durant l\'ex&eacute;cution',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'Un utilisateur "mis&eacute;rable" sera le seul (avec les administrateurs) &agrave; voir ses messages. Cela est suppos&eacute; les d&eacute;courager de continuer &agrave; converser, alors que personne ne leur r&eacute;pond.<br /><br /><b>Note :</b> Cette fonctionnalit&eacute; ne fait dispara&icirc;tre les messages que depuis la vue de sujet. Il sera encore possible de les citer, ou de les trouver via la recherche.',

	'ctracker_mu_select' => 'Rendre l\'utilisateur mis&eacute;rable',
	'ctracker_mu_find' => 'Recherche de noms d\'utilisateurs',
	'ctracker_mu_send' => 'Entrer les noms d\'utilisateurs',
	'ctracker_mu_entr' => 'Utilisateurs marqu&eacute;s',
	'ctracker_mu_uname' => 'Utilisateurs entr&eacute;s',
	'ctracker_mu_remove' => 'Supprimer les entr&eacute;es',
	'ctracker_mu_no_defined' => 'Aucun utilisateur n\'est encore marqu&eacute; "mis&eacute;rable"',


/*
* Recovery feature in ACP
*/
	'ctracker_rec_head' => 'R&eacute;cup&eacute;ration syst&egrave;me',
  'ctracker_rec_subhead' => 'Vous pouvez faire une sauvegarde (backup) de votre table de configuration, ou revenir aux derniers r&eacute;glages sauvegard&eacute;s. Si vous avec activ&eacute; cette fonctionnalit&eacute; de CrakerTracker, il pourra sauvegarder la configuration de votre forum pour vous &agrave; chaque fois que vous la modifiez (<b>ATTENTION !</b> Seule la configuration sera sauvegard&eacute;e, pas tout le forum).<br />Si vous n\'arrivez plus &agrave; acc&eacute;der &agrave; l\'administration apr&egrave;s une modification des r&eacute;glages, vous pouvez utiliser la console d\'urgence (<i>adm/erc.php</i>) pour r&eacute;activer une version des r&eacute;glages sauvegard&eacute;e.<br /><b>N\'utilisez cette fonctionnalit&eacute; qu\'en cas de probl&egrave;mes graves !</b>',
	'ctracker_rec_last_saved' => 'Derni&egrave;re sauvegarde <b>%s</b>',
	'ctracker_rec_never_saved' => 'La table de configuration n\'a jamais &eacute;t&eacute; sauvegard&eacute;e',
	'ctracker_rec_backup' => '<span class="gen">Sauvegarder la table de configuration</span>',
	'ctracker_rec_restore' => '<span class="gen">Restaurer la derni&egrave;re sauvegarde</span>',
	'ctracker_rec_succ' => '<span class="gen">L\'op&eacute;ration s\'est effectu&eacute;e avec succ&egrave;s</span>',
	'ctracker_rec_pab' => '<span class="gen">Vous ne pouvez pas faire de restoration sans avoir fait de sauvegarde au pr&eacute;alable !</span>',
	)
);
?>
