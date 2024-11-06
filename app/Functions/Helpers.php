<?php
namespace App\Functions;

use Illuminate\Contracts\Filesystem\FileNotFoundException;

class Helpers
{
    // metodo per gestire un file csv
    public static function getCsv(string $filePath)
    {
        $result = [];

        // apro il file in sola lettura
        $file = fopen($filePath, 'r');

        if ($file === false) {
            throw new FileNotFoundException('File not available at this path');
        }
        while (($row = fgetcsv($file)) !== FALSE) {
            $result[] = $row;
        }
        fclose($file);

        return $result;
    }
}
