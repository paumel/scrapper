<?php

namespace Paumel\Scrapper;

class Scrapper
{

    protected $client;

    protected $url;

    protected $parser;

    public function __construct($url, $type)
    {
        $this->url = $url;
        $this->client = new HTTPClient();
        $parserFactory = new ParserFactory();
        $this->parser = $parserFactory->getParser($type);
    }

    public function find($pattern)
    {
        $content = $this->client->request($this->url);
        return $this->parser->find($content, $pattern);
    }
}
