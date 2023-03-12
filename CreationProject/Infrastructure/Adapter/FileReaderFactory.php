<?php

namespace CreationProject\Infrastructure\Adapter;

use CreationProject\Infrastructure\Repository\UserDataFromFileRepositoryImplementation;

class FileReaderFactory
{
    static function create($fileName): UserDataFromFileRepositoryImplementation
    {
        // gets file type, PATHINFO_EXTENSION flag returns value after dot.
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        return new UserDataFromFileRepositoryImplementation($fileName,$fileType);
    }

}