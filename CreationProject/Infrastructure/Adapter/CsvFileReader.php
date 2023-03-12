<?php
namespace CreationProject\Infrastructure\Adapter;

class CsvFileReader implements FileReader
{

    public function readFromFile(string $path, string $fileName): array
    {
        $fileData = file_get_contents($path, $fileName);
        return json_decode($fileData,true);
    }
}