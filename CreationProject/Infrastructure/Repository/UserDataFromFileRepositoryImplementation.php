<?php

namespace CreationProject\Infrastructure\Repository;

/**
 * Class UserDataFromFileRepositoryImplementation
 */
class UserDataFromFileRepositoryImplementation implements UserRepository
{
    /**
     * @var string
     */
    private string $filePath;

    /**
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        $file = $this->filePath;
        return file_get_contents($file);
    }
}