<?php

namespace App\Form;

use App\Core\Form\BaseFormType;
use App\DTO\AlbumFormDTO;

class AlbumFormType extends BaseFormType
{
    public function dataClass(): string
    {
        return AlbumFormDTO::class;
    }
}