<?php
/**
 * @package    Joomla.Language
 * @version	$Id: language.php joomla.it ì$
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters. All rights reserved.
 * @copyright	Copyright (C) Translation 2008- 2013 joomla.it
 * @license	GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;

/**
 * en-GB localise class
 *
 * @package		Joomla.Language
 * @since		1.6
 */
abstract class it_ITLocalise 
{
	/**
	 * Returns the potential suffixes for a specific number of items
	 *
	 * @param   integer  $count  The number of items.
	 *
	 * @return  array  An array of potential suffixes.
	 *
	 * @since   1.6
	 */
	public static function getPluralSuffixes($count)
	{
		if ($count == 0)
		{
			return array('0');
		}
		elseif ($count == 1)
		{
			return array('1');
		}
		else
		{
			return array('MORE');
		}
	}
	
	/**
	 * Returns the ignored search words
	 *
	 * @return  array  An array of ignored search words.
	 *
	 * @since   1.6
	 */
	public static function getIgnoredSearchWords() 
	{
		return array('și', 'în', 'pe', 'sau', 'ori', 'la', 'de', 'va', 'vă', 'îți', 'sa', 'îl', 'o', 'a', 'e', 'i', 'ți', 'se');
	}
	/**
	 * Returns the lower length limit of search words
	 *
	 * @return  integer  The lower length limit of search words.
	 *
	 * @since   1.6
	 */
	public static function getLowerLimitSearchWord() 
	{
		return 3;
	}
	/**
	 * Returns the upper length limit of search words
	 *
	 * @return	integer  The upper length limit of search words.
	 *
	 * @since	1.6
	 */
	public static function getUpperLimitSearchWord() 
	{
		return 20;
	}
	/**
	 * Returns the number of chars to display when searching
	 *
	 * @return  integer  The number of chars to display when searching.
	 *
	 * @since   1.6
	 */
	public static function getSearchDisplayedCharactersNumber() 
	{
		return 200;
	}
}
