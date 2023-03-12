<?php

namespace CreationProject\Infrastructure\Adapter;

use CreationProject\Infrastructure\Repository\UserDataFromFileRepositoryImplementation;
use EnvLoader;
use Exception;

class FileReaderFactory
{
    /**
     * @throws Exception
     */
    static function create($file): UserDataFromFileRepositoryImplementation
    {
        $envLoader = new EnvLoader();
        $availableFileTypeArray = $envLoader->getEnv();

        // gets file name
        $fileName = $file['name'];
        // gets file path
        $pathName = $file['tmp_name'];
        // gets file type, PATH INFO_EXTENSION flag returns value after dot.
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        // checks if file type exists in .env file
        if (!$availableFileTypeArray[$fileType]) {
            throw new Exception("File type not valid");
        }
        // creates class name (string) from file type
        $fileClass = $availableFileTypeArray[$fileType];
        // creates namespaces for class
        $class = "CreationProject\Infrastructure\Adapter" . "\\" . $fileClass;
        // creates exact FileReader class
        $reader = new $class;

        return new UserDataFromFileRepositoryImplementation($pathName, $fileName, $reader);
    }

}