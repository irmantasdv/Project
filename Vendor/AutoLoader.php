<?php
namespace CreationProject\Vendor;
class AutoLoader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            // Replacing '\' with '/'
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            try{
                require $file;
            } catch (\Exception $e){
                Echo($e);
            }
        });
    }

}