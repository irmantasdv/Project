<?php

namespace CreationProject\Domain\Service;

/**
 * Interface UserService
 * package CreationProject
 */
interface UserService
{
    /**
     * @return array
     */
    public function getAllUsers(): array;
}