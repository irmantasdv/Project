<?php

namespace CreationProject\Vendor;

use Exception;

/**
 * Class EnvLoader reads .env file and returns associative array
 */
class EnvLoader
{
    /**
     * @var array
     */
    private array $envVariableArray;
    /**
     * @var string
     */
    private string $envFilePath = "__DIR__ . '/config/.env";

    /**
     * @return array
     * @throws Exception
     */
    public function getEnv(): array
    {
        if (!file_exists($this->envFilePath)) {
            throw new Exception('.env file not found');
        }
        $envContent = file_get_contents($this->envFilePath);
        // creates array of strings from .env file
        $lines = explode(PHP_EOL, $envContent);
        // separates .env file values to key and values and creates associative array
        foreach ($lines as $line) {
            [$key, $value] = explode('=>', $line, 2);
            $key = trim($key);
            $value = trim($value);
            $this->envVariableArray[$key] = $value;
        }
        return $this->envVariableArray;
    }

}