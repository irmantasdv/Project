<?php

namespace CreationProject\Infrastructure\Adapter;

/**
 * Class CsvFileReader
 */
class CsvFileReader implements FileReader
{

    /**
     * @param string $path
     * @param string $fileName
     * @return array
     */
    public function readFromFile(string $path, string $fileName): array
    {
//         works only with files without quotation
        $allRows = array();
        $header = null;
        if (($file = fopen($path, "r")) !== FALSE) {
            while (($row = fgetcsv($file, 1000, ",")) !== FALSE) {
                if ($header === null) {
                    $header = $row;
                    continue;
                }
                $allRows[] = array_combine($header, $row);
            }
            fclose($file);
        }
        return $allRows;

    }
}