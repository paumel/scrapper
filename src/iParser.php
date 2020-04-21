<?php

namespace Paumel\Scrapper;

interface iParser
{
    public function find($html, $pattern);
}
