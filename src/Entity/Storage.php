<?php

namespace App\Entity;

class Storage
{
    /**
     * @var int
     */
    private $roomNumber;

    /**
     * @var int
     */
    private $rackNumber;

    /**
     * @var int
     */
    private $shelfNumber;

    /**
     * @var Album[]
     */
    private $albums;

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

    /**
     * @return int
     */
    public function getRackNumber(): int
    {
        return $this->rackNumber;
    }

    /**
     * @param int $rackNumber
     */
    public function setRackNumber(int $rackNumber): void
    {
        $this->rackNumber = $rackNumber;
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @param int $roomNumber
     */
    public function setRoomNumber(int $roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return int
     */
    public function getShelfNumber(): int
    {
        return $this->shelfNumber;
    }

    /**
     * @param int $shelfNumber
     */
    public function setShelfNumber(int $shelfNumber): void
    {
        $this->shelfNumber = $shelfNumber;
    }
}
