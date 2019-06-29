<?php

namespace App\Entity;

class Artist
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Album[]
     */
    private $albums;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Album[]
     */
    public function getAlbums(): array
    {
        return $this->albums;
    }

    /**
     * @param Album[] $albums
     */
    public function setAlbums(array $albums): void
    {
        $this->albums = $albums;
    }
}
