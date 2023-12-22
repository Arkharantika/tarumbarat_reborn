<?php

namespace App\Imports;

use App\Models\ImageFTP;
use App\Models\RawGPA;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportExcel implements ToCollection,ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function model(array $row)
    {
        // return new ImageFTP([
        //     'img_name'     => $row['img_name'],
        //     // 'email'    => $row['email'], 
        //     // 'password' => \Hash::make($row['password']),
        // ]);

        return new RawGPA([
            'tlocal'=>$row['tlocal'],
            'kd_hardware'=>$row['kd_hardware'],
            'kd_sensor'=>$row['kd_sensor'],
            'value'=>$row['value'],
        ]);
    }
}
