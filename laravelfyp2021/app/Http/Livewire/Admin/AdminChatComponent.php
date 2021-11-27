<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminChatComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-chat-component')->layout('layouts.base');
    }
}
