<?php

namespace CreationProject\Domain\Service;

use CreationProject\Domain\Model\User;
use CreationProject\Infrastructure\Repository\UserRepository;

/**
 * Class UserServiceImplementation
 */
class UserServiceImplementation implements UserService
{
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return array
     */
    public function getAllUsers(): array
    {
        // gets user file content array from repository
        $usersFileContent = $this->userRepository->getAll();
        $usersData = array();
        // creates associative array from file content array
        foreach ($usersFileContent as $row) {
            $user = new User($row['first_name'], $row['age'], $row['gender']);
            $usersData[] = $user;
        }
        return $usersData;
    }
}