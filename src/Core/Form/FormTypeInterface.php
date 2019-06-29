<?php

namespace App\Core\Form;

interface FormTypeInterface
{
    public function dataClass(): string;

    public function getFormName(): string;
}
