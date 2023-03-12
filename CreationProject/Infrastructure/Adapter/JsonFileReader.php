<?php
namespace CreationProject\Infrastructure\Adapter;

/**
 * Class JsonFileReader
 */
class JsonFileReader implements FileReader
{

    /**
     * @param string $path
     * @param string $fileName
     * @return array
     */
    public function readFromFile(string $path, string $fileName): array
    {
        $fileData = file_get_contents($path, $fileName);
        return json_decode($fileData,true);
    }
}