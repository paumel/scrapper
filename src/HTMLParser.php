<?php

namespace Paumel\Scrapper;

require 'simplehtmldom_1_9_1' . DIRECTORY_SEPARATOR . 'simple_html_dom.php';

class HTMLParser implements iParser
{
    public function find($html, $pattern){
        $html = self::str_get_html($html);
        return $html->find($pattern);
    }

    static public function file_get_html()
    {
        return call_user_func_array('file_get_html', func_get_args());
    }

    static public function str_get_html()
    {
        return call_user_func_array('str_get_html', func_get_args());
    }
}
