<?php

namespace Paumel\Scrapper;

class JsonParser implements iParser
{
    public function find($html, $pattern)
    {
        $json = json_decode($html, true);
        $content = $json['content'];
        return $this->search($content, $pattern);
    }

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
