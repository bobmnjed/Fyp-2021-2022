<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserOrderExport;

class AdminOrderDetailsComponent extends Component
{

    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function exports()
    {
          return Excel::download(new UserOrderExport, 'orders.xlsx');
    }

    public function render()
    {
        $order = Order::find($this->order_id);
        return view('livewire.admin.admin-order-details-component',['order'=>$order])->layout('layouts.base');
    }
}
