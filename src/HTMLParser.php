<?php

namespace Paumel\Scrapper;

require 'simplehtmldom_1_9_1' . DIRECTORY_SEPARATOR . 'simple_html_dom.php';
/**
 * Class that is responsible for HTML data parsing
 */
class HTMLParser implements iParser
{
    /**
     * Function that finds data in html by html tags
     *
     * @param String $html
     * @param String $pattern
     * @return Array
     */
    public function find($html, $pattern){
        $html = self::str_get_html($html);
        return $html->find($pattern);
    }
    /**
     * Function that calls simplehtmldom
     *
     * @return void
     */
    static public function file_get_html()
    {
        return call_user_func_array('file_get_html', func_get_args());
    }
    /**
     * Function that calls simplehtmldom
     *
     * @return void
     */
    static public function str_get_html()
    {
        return call_user_func_array('str_get_html', func_get_args());
    }
}
