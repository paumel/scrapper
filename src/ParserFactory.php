<?php

namespace Paumel\Scrapper;
/**
 * Class for making parsers
 */
class ParserFactory
{
    /**
     * Function that returns specific type parser
     *
     * @param String $type
     * @return IParser
     */
    public function getParser($type){
        switch ($type) {
            case 'html':
                return new HTMLParser();
                break;
            case 'json':
                return new JsonParser();
                break;
            
            default:
                break;
        }
        return null;
    }
}
