<?php
/**
 *
 * phpBB Media Embed PlugIn extension for the phpBB Forum Software package.
 * Slovak translation by Senky (https://github.com/senky)
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	// Settings
	'ACP_MEDIA_SETTINGS'				=> 'Nastavenia vkladania médií',
	'ACP_MEDIA_SETTINGS_EXPLAIN'		=> 'Tu môžete konfigurovať nastavenia pre plugin vkladania médií.',
	'ACP_MEDIA_BBCODE_LEGEND'			=> 'BBCode',
	'ACP_MEDIA_DISPLAY_BBCODE'			=> 'Zobraziť <samp>[media]</samp> BB kód pri prispievaní',
	'ACP_MEDIA_DISPLAY_BBCODE_EXPLAIN'	=> 'Ak je toto nezaškrtnuté, BB kód nebude zobrazený, no používatelia budú môcť používať <samp>[media]</samp> kód v ich príspevkoch',
	'ACP_MEDIA_OPTIONS_LEGEND'			=> 'Options',
	'ACP_MEDIA_ALLOW_SIG'				=> 'Povoliť v podpisoch',
	'ACP_MEDIA_ALLOW_SIG_EXPLAIN'		=> 'Povolí v podpisoch používateľov vložiť obsah médií.',
	'ACP_MEDIA_CACHE_LEGEND'			=> 'Content caching',
	'ACP_MEDIA_ENABLE_CACHE'			=> 'Enable Media Embed cache',
	'ACP_MEDIA_ENABLE_CACHE_EXPLAIN'	=> 'In some cases you may notice slower than normal performance when loading media from other sites, especially while loading the same content multiple times (e.g. when editing a post). Enabling this will cache the information Media Embed gathers from sites locally and should improve performance.',
	'ACP_MEDIA_PARSE_URLS'				=> 'Convert plain URLs',
	'ACP_MEDIA_PARSE_URLS_EXPLAIN'		=> 'Enable this to convert plain URLs (not wrapped in <samp>[media]</samp> or <samp>[url]</samp> tags) to embedded media content. Note that changing this setting will only affect new posts, as existing posts have already been parsed.',
	'ACP_MEDIA_WIDTH_LEGEND'			=> 'Content sizing',
	'ACP_MEDIA_FULL_WIDTH'				=> 'Enable full width content',
	'ACP_MEDIA_FULL_WIDTH_EXPLAIN'		=> 'Enable this to expand most Media Embed content to fill the full width of the post content area while maintaining its native aspect ratio.',
	'ACP_MEDIA_MAX_WIDTH'				=> 'Custom max-width content',
	'ACP_MEDIA_MAX_WIDTH_EXPLAIN'		=> 'Use this field to define custom max-width values for individual sites. This will override the default size and the full width option above. Enter each site on a new line, using the format <samp class="error">siteId:width</samp> with either <samp class="error">px</samp> or <samp class="error">%</samp>. For example:<br><br><samp class="error">youtube:80%</samp><br><samp class="error">funnyordie:480px</samp><br><br><i><strong class="error">Tip:</strong> Hover your mouse over a site on the Manage sites page to reveal the site id name to use here.</i>',
	'ACP_MEDIA_PURGE_CACHE'				=> 'Purge Media Embed cache',
	'ACP_MEDIA_PURGE_CACHE_EXPLAIN'		=> 'Media Embed cache is automatically purged once per day, however this button can be used to manually purge its cache now.',
	'ACP_MEDIA_SITE_TITLE'				=> 'ID stránky: %s',
	'ACP_MEDIA_SITE_DISABLED'			=> 'Táto stránka má konflikt s existujúcim BB kódom: [%s]',
	'ACP_MEDIA_ERROR_MSG'				=> 'The following errors were encountered:<br><br>%s',
	'ACP_MEDIA_INVALID_SITE'			=> '%1$s:%2$s :: “%1$s” is not a valid site id',
	'ACP_MEDIA_INVALID_WIDTH'			=> '%1$s:%2$s :: “%2$s” is not a valid width in “px” or “%%”',

	// Manage sites
	'ACP_MEDIA_MANAGE'					=> 'Spravovať stránky vkladania médií',
	'ACP_MEDIA_MANAGE_EXPLAIN'			=> 'Tu môžete spravovať stránky, pre ktoré chcete povoliť získavanie obsahu pluginu vkladania médií vkladanie médií.',
	'ACP_MEDIA_SITES_ERROR'				=> 'Nie sú žiadne stránky médií na zobrazenie.',
	'ACP_MEDIA_SITES_MISSING'			=> 'The following sites are no longer supported or working. Please re-submit this page to remove them.',
]);
