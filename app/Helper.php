<?php

use Illuminate\Support\Facades\Session;
use Stichoza\GoogleTranslate\GoogleTranslate;

if (!function_exists('random_code')){
    //All languages
    function allLanguages(){
        //return Language::all();
    }

    function activeLanguages(){
        //return Language::all()->where('status', '1');
    }

    function translate($text){
        $tr = new GoogleTranslate($text, Session::get('language'));
        return $tr->translate($text);
    }
}

?>
