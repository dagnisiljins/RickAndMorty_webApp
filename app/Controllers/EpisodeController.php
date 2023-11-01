<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Api;
use App\CharacterApi;
use App\Response;

class EpisodeController
{
    private Api $api;
    private CharacterApi $characterApi;

    public function __construct()
    {
        $this->api = new Api();
        $this->characterApi = new CharacterApi();
    }


    public function show(array $vars): Response
    {
        $id = (int) $vars['id'];

        $episode = $this->api->fetchEpisode($id);

        $characters = [];
        foreach ($episode->getCharacterUrls() as $characterUrl) {
            $character = $this->characterApi->fetchCharacterFromUrl($characterUrl);
            $characters[] = [
                'name' => $character->getName(),
                'image' => $character->getImage(),
            ];
        }


        return new Response('episodes/show', [
            'episode' => $episode,
            'characters' => $characters
        ]);
    }
}
