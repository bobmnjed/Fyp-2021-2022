<?php

namespace App\Exports;
use App\Models\OrderItem;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;


class UserOrderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return OrderItem::all();
    }
}
