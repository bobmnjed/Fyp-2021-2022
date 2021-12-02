<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Review;
use App\Exports\ReviewsExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminSAComponent extends Component
{
    public function deleteReview($id)
    {
        $review = Product::find($id);
        $review->delete();
        session()->flash('message','Product is Deleted Successfully!');
    }
    public function export() 
    {
        return Excel::download(new ReviewsExport, 'reviews.xlsx');
    }
    public function render()
    {
        $reviews = Review::paginate(10);
        return view('livewire.admin.admin-s-a-component',['reviews'=>$reviews])->layout('layouts.base');
    }
}
