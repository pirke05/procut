<?php
/**
 * @version		$Id: fi-FI.localise.php 24 2011-02-04 19:26:15Z mortti $
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

 defined('_JEXEC') or die;

/**
 * fi-FI localise class
 *
 * @package		Joomla.Site
 * @since		1.6
 */
abstract class fi_FILocalise {
	/**
	 * Returns the potential suffixes for a specific number of items
	 *
	 * @param	int $count  The number of items.
	 * @return	array  An array of potential suffixes.
	 * @since	1.6
	 */
	public static function getPluralSuffixes($count) {
		if ($count == 0) {
			$return =  array('0');
		}
		elseif($count == 1) {
			$return =  array('1');
		}
		else {
			$return = array('MORE');
		}
		return $return;
	}
	/**
	 * Returns the ignored search words
	 *
	 * @return	array  An array of ignored search words.
	 * @since	1.6
	 */
	public static function getIgnoredSearchWords() {
		$search_ignore = array();
		$search_ignore[] = "ja";
		$search_ignore[] = "in";
		$search_ignore[] = "on";
		return $search_ignore;
	}
	/**
	 * Returns the lower length limit of search words
	 *
	 * @return	integer  The lower length limit of search words.
	 * @since	1.6
	 */
	public static function getLowerLimitSearchWord() {
		return 3;
	}
	/**
	 * Returns the upper length limit of search words
	 *
	 * @return	integer  The upper length limit of search words.
	 * @since	1.6
	 */
	public static function getUpperLimitSearchWord() {
		return 20;
	}
	/**
	 * Returns the number of chars to display when searching
	 *
	 * @return	integer  The number of chars to display when searching.
	 * @since	1.6
	 */
	public static function getSearchDisplayedCharactersNumber() {
		return 200;
	}
	public static function transliterate($string)
    {
         $str = JString::strtolower($string);
 
         //Specific language transliteration.
         //This one is for latin 1, latin supplement , extended A, Cyrillic, Greek
 
         $glyph_array = array(
         'a'            =>   'à,á,â,ã,ä,å,ā,ă,ą,ḁ,α,ά',
         'ae'   =>   'æ',
         'o'            =>   'ö,ò,ó,ô,õ,ø,ō,ŏ,ő,ο,ό,ω,ώ',
         'oe'   =>   'œ'
         );
 
          foreach( $glyph_array as $letter => $glyphs ) {
          $glyphs = explode( ',', $glyphs );
          $str = str_replace( $glyphs, $letter, $str );
          }
 
          return $str;
        }
}

