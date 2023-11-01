<?php

namespace App\Controllers;

use App\Api;
use App\Response;

class SeasonController
{
    private Api $api;

    public function __construct()
    {
        $this->api = new Api();
    }

    public function index(): Response
    {
        return new Response(
            'seasons/index',
            [
                'seasons' =>  $this->api->fetchSeasons(),
                'header' => 'All Seasons'
            ]
        );
    }

    public function show(array $vars): Response
    {
        $id = (int) $vars['id'];

        return new Response(
            'seasons/show',
            [
                'episodes' =>  $this->api->fetchEpisodesBySeasonId($id),
                'header' => 'All Seasons'
            ]
        );
    }
}