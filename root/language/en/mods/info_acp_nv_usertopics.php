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
	//language/en/common.php
	'NUM_TOPICS_IN_QUEUE'		=> array(
		0			=> 'No topics in queue',	// 0
		1			=> '1 topic in queue',		// 1
		2			=> '%d topics in queue',	// 2+
	),
	'TOPIC_DAY'					=> '%.2f topics per day',
	'TOPIC_PCT'					=> '%.2f%% of all topics',
	'TOTAL_TOPICS'				=> 'Total topics',

	//language/en/memberlist.php
	'SEARCH_USER_TOPICS'	=> 'Search user’s topics',

	//language/en/ucp.php
	'SEARCH_YOUR_TOPICS'		=> 'Show your topics',

	//language/en/acp/common.php
	'RESYNC_TOPICCOUNTS'			=> 'Resynchronise topic counts',
	'RESYNC_TOPICCOUNTS_EXPLAIN'	=> 'Only existing topics will be taken into consideration. Pruned topics will not be counted.',
	'RESYNC_TOPICCOUNTS_CONFIRM'	=> 'Are you sure you wish to resynchronise topic counts?',

	'LOG_RESYNC_TOPICCOUNTS'	=> '<strong>User topic counts resynchronised</strong>',
));

?>