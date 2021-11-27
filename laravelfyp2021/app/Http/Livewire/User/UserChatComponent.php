<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserChatComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-chat-component')->layout('layouts.base');
    }
}
