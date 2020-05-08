<?php

namespace Paumel\Scrapper;

use GuzzleHttp\Client;
/**
 * Adapter class for GuzzleHTTP\Client
 */
class HTTPClient implements iClient
{
    /**
     * Client
     *
     * @var GuzzleHttp\Client
     */
    private $client;

    /**
     * Constructor
     */
    function __construct()
    {
        $this->client = new Client();
    }
/**
 * Function that sends HTTP request to url
 *
 * @param String $url
 * @return String
 */
    public function request($url)
    {
        $response = $this->client->request('GET', $url);
        return $response->getBody();
    }
}
