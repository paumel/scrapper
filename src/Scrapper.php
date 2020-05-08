<?php

namespace Paumel\Scrapper;
/**
 * Class for getting data from URL
 */
class Scrapper
{
    /**
     * Client
     *
     * @var IClient
     */
    protected $client;
    /**
     * Requested url
     *
     * @var String
     */
    protected $url;
    /**
     * Parser
     *
     * @var IParser
     */
    protected $parser;
    /**
     * Constructor
     *
     * @param String $url
     * @param String $type
     */
    public function __construct($url, $type)
    {
        $this->url = $url;
        $this->client = new HTTPClient();
        $parserFactory = new ParserFactory();
        $this->parser = $parserFactory->getParser($type);
    }
    /**
     * Request and find data in url
     *
     * @param String $pattern
     * @return void
     */
    public function find($pattern)
    {
        $content = $this->client->request($this->url);
        return $this->parser->find($content, $pattern);
    }
}
