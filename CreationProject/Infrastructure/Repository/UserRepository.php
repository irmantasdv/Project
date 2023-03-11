<?php

namespace CreationProject\Infrastructure\Repository;

/**
 * Interface UserRepository
 */
interface UserRepository
{
    /**
     * @return array
     */
    public function getAll(): array;

}