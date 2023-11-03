<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Api;
use App\Response;
class SearchController
{

    private Api $api;

    public function __construct()
    {
        $this->api = new Api();
    }

    public function search(): Response
    {
        $query = $_GET['q'] ?? '';

        $results = $this->api->searchEpisodes($query);
//dump($results);die;
        return new Response(
            'search/index',
            [
                'episodes' => $results,
                'header' => 'Search Results for: "' . $query . '"'
            ]
        );
    }
}