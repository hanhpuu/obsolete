<?php
namespace App\Imports;

use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CsvImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        return $rows;
    }
}
