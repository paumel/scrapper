<?php

namespace Paumel\Scrapper;

use GuzzleHttp\Client;

class HTTPClient implements iClient
{
    private $client;

    function __construct()
    {
        $this->client = new Client();
    }

    public function request($url)
    {
        $response = $this->client->request('GET', $url);
        return $response->getBody();
    }
}
