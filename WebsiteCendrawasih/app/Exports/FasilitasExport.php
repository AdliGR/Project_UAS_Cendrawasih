<?php

namespace App\Exports;

use App\Models\Fasilitas;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FasilitasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fasilitas::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Fasilitas',
            'Total',
            'Note',
            'Created At',
            'Updated At',
        ];
    }
}
