<?php

namespace Paumel\Scrapper;
/**
 * Parser interface
 */
interface iParser
{
    /**
     * Function to find data
     *
     * @param String $html
     * @param String $pattern
     * @return Array
     */
    public function find($html, $pattern);
}
