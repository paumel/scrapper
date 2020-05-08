<?php

namespace Paumel\Scrapper;
/**
 * Class for Json data parsing
 */
class JsonParser implements iParser
{

    /**
     * Function that finds data in json 
     *
     * @param String $html
     * @param String $pattern
     * @return Array
     */
    public function find($html, $pattern)
    {
        $json = json_decode($html, true);
        $content = $json['content'];
        return $this->search($content, $pattern);
    }
    /**
     * Function to find specific parameters in json
     *
     * @param String $content
     * @param String $pattern
     * @return Array
     */
    private function search($content, $pattern)
    {
        $results = [];
        $keys = explode(' ', $pattern);
        foreach ($content as $line) {
            $tmp = [];
            foreach ($keys as $key) {
                if ($line[$key]) {
                    $tmp[] = $line[$key];
                }
            }
            $results[] = $tmp;
        }
        return $results;
    }
}
