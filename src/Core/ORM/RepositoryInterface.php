<?php


namespace App\Core\ORM;


interface RepositoryInterface
{
    public function entityClass(): string;
}