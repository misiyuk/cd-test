<?php

namespace App\Core\Form;

use App\Core\Request\Request;

interface FormInterface
{
    public function __construct(string $dataTypeClass, $dataObj);

    public function handleRequest(Request $request): void;

    public function isSubmit(): bool;

    public function isValid(): bool;

    public function getFormName(): string;
}
