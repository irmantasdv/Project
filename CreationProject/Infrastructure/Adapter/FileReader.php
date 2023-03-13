<?php

namespace CreationProject\Infrastructure\Adapter;

/**
 * Interface FileReader
 */
interface FileReader
{
    /**
     * @param string $path
     * @param string $fileName
     * @return array
     */
    public function readFromFile(string $path, string $fileName) : array;
}