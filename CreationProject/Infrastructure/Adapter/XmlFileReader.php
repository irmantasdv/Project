<?php

namespace CreationProject\Infrastructure\Adapter;

/**
 * Class XmlFileReader
 */
class XmlFileReader implements FileReader
{

    /**
     * @param string $path
     * @param string $fileName
     * @return array
     */
    public function readFromFile(string $path, string $fileName): array
    {
        $data = array();
        $xmlFileContent = simplexml_load_file($path);
        foreach ($xmlFileContent->children() as $child) {
            $arrayAssoc = array();
            foreach ($child->children() as $grandChild) {
                $arrayAssoc[$grandChild->getName()] = (string)$grandChild;
            }
            $data[] = $arrayAssoc;
        }
        return $data;
    }
}