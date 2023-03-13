<?php

namespace CreationProject\Infrastructure\Repository;

use CreationProject\Infrastructure\Adapter\FileReader;

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
     * @var FileReader
     */
    private FileReader $reader;

    /**
     * @var string
     */
    private string $fileName;


    /**
     * @param string $filePath
     * @param string $fileName
     * @param $reader
     */
    public function __construct(string $filePath, string $fileName,  $reader)
    {
        $this->filePath = $filePath;
        $this->fileName = $fileName;
        $this->reader = $reader;
    }

    /**
     * @return array
     */
    public function getAll(): array
    {

        return $this->reader->readFromFile($this->filePath, $this->fileName);

    }
}