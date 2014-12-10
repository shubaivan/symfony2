<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 16.10.14
 * Time: 20:53
 */
namespace App\JoboardBundle\Utils;

class Joboard
{
    static public function slugify($text)
    {

        $text = transliterator_transliterate("Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();", $text);
        $text = preg_replace('/[-\s]+/', '-', $text);
        $text = trim($text, '-');

        if (empty($text)){
            return 'n-a';
        }
        return $text;
    }
}
