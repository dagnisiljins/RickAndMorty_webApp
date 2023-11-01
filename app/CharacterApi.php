<?php

declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;
use App\Models\Character;

class CharacterApi
{
    private Client $client;

    private const CHARACTER_API_URL = 'https://rickandmortyapi.com/api/character';

    public function __construct()
    {
        $this->client = new Client([
            'verify' => false
        ]);
    }

    public function fetchCharacterFromUrl(string $characterUrl): Character
    {
        $response = $this->client->get($characterUrl);
        $characterData = json_decode((string)$response->getBody(), true);

        return new Character($characterData['name'], $characterData['image']);
    }
}