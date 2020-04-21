<?php

namespace Paumel\Scrapper;

class ParserFactory
{
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
