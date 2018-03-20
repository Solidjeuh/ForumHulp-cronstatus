<?php
/**
*
* @package cronstatus
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_CRON_STATUS_TITLE'	=> 'Cron Status',
	'LOG_CORE_INSTALLED'	=> 'Bestanden succesvol gewijzigd',
	'LOG_CORE_DEINSTALLED'	=> 'Gewijzigde bestanden succesvol ongedaan gemaakt',
	'LOG_CORE_NOT_REPLACED'	=> 'Kan bestand(en) niet vervangen<br />» %s',
	'LOG_CORE_NOT_UPDATED'	=> 'Kon bestand(en) niet bijwerken<br />» %s',
	'FH_HELPER_NOTICE'		=> 'Forumhulp helper extensie bestaat niet!<br />Download <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> en kopieer de helper map naar uw forumhulp extensie map.',
	'CRONSTAT_NOTICE'		=> '<div class="phpinfo"><p class="entry">Deze extensie bevindt zich in %1$s » %2$s » %3$s.</p></div>',
));

// Description of Cron Status extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Beschrijving',
	'DESCRIPTION_NOTICE'	=> 'Extensie notitie',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'Overzicht van taken (met sortering)',
			'DESCRIPTION_2'		=> 'Toon de status van iedere taak',
			'DESCRIPTION_3'		=> 'Start een taak manueel',
			'DESCRIPTION_4'		=> 'Reset cronlock met een eenvoudige klik',
		),
		'note' => array(
			'NOTICE_1'			=> 'Cron Status Melding (optioneel)',
			'NOTICE_2'			=> 'Instelbaar in Forum instellingen',
			'NOTICE_3'			=> 'Schakelbaar Run Cron altijd',
			'NOTICE_4'			=> 'phpBB 3.2 klaar'
		)
	)
));
