<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;

class Episode
{
    private int $id;
    private string $name;
    private Carbon $airDate;
    private string $episode;
    private array $characterUrls;

    public function __construct(
        int    $id,
        string $name,
        Carbon $airDate,
        string $episode,
        array $characterUrls
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->airDate = $airDate;
        $this->episode = $episode;
        $this->characterUrls = $characterUrls;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAirDate(): Carbon
    {
        return $this->airDate;
    }

    public function getEpisode(): string
    {
        return $this->episode;
    }

    /**
     * @return array
     */
    public function getCharacterUrls(): array
    {
        return $this->characterUrls;
    }
}