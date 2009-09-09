<?php
/**
*
* NV usertopics
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	//language/de/common.php
	'NUM_TOPICS_IN_QUEUE'		=> array(
		0			=> 'Kein Thema in der Warteschlange',	// 0
		1			=> '1 Thema in der Warteschlange',		// 1
		2			=> '%d Themen in der Warteschlange',	// 2+
	),
	'TOPIC_DAY'				=> '%.2f Themen pro Tag',
	'TOPIC_PCT'				=> '%.2f%% aller Themen',
	'TOTAL_TOPICS'			=> 'Themen insgesamt',

	//language/de/memberlist.php">
	'SEARCH_USER_TOPICS'		=> 'Themen des Mitglieds anzeigen',

	//language/de/ucp.php">
	'SEARCH_YOUR_TOPICS'		=> 'Deine Themen anzeigen',

	//language/de/acp/common.php">
	'RESYNC_TOPICCOUNTS'			=> 'Themenzähler resynchronisieren',
	'RESYNC_TOPICCOUNTS_EXPLAIN'	=> 'Nur existierende Themen werden berücksichtigt, nicht jedoch automatisch gelöschte.',
	'RESYNC_TOPICCOUNTS_CONFIRM'	=> 'Bist du sicher, dass du die Themenzähler resynchronisieren willst?',

	'LOG_RESYNC_TOPICCOUNTS'	=> '<strong>Themenzähler resynchronisiert</strong>',
));

?>