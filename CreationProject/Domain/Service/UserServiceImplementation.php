<?php

namespace CreationProject\Domain\Service;

/**
 * Class UserServiceImplementation
 */
class UserServiceImplementation implements UserService
{
    /**
     * @var UserRepository
     */
    private $userRepository;

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
        return $this->userRepository->getAll();
    }
}