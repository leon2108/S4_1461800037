<?php

namespace App\Imports;

use App\pasien;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row[0])) {
            return null;
        }
        if (!isset($row[1])) {
            return null;
        }
        if (!isset($row[2])) {
            return null;
        }

        return new pasien([
               'id'     => $row[0],
               'nama'   => $row[1], 
               'alamat' => $row[2],
        ]);

    }
}
