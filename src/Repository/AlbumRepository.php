<?php

namespace App\Repository;

use App\Core\ORM\BaseRepository;
use App\Entity\Album;

class AlbumRepository extends BaseRepository
{
    public function entityClass(): string
    {
        return Album::class;
    }
}
