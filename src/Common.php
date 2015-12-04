<?php

namespace Mix;

class Common {

	public static function config($config) {
      $separator = DIRECTORY_SEPARATOR;
      return require TEMPLATEPATH . "{$separator}config{$separator}{$config}.php";
   }

	public static function excerpt($text, $length, $more = '[...]') {
		$only_text = trim(strip_tags($text));

		if ( strlen($only_text) <= $length ) {
         return $only_text;
      }

      return substr($only_text, 0, $length) . $more;
	}

	public static function debug($code) {
      echo '<pre>';
      var_dump($code);
      echo '</pre>';
   }

}