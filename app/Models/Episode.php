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

    public function __construct(
        int    $id,
        string $name,
        Carbon $airDate,
        string $episode
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->airDate = $airDate;
        $this->episode = $episode;
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
}