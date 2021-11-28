<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Setting;

class AdminSettingComponent extends Component
{
    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;
    public $twitter;
    public $pinterest;
    public $facebook;
    public $instagram;
    public $youtube;

    public function mount()
    {
        $setting = Setting::find(1);
        if($setting)
        {
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->map = $setting->map;
            $this->twitter = $setting->twitter;
            $this->pinterest = $setting->pinterest;
            $this->facebook = $setting->facebook;
            $this->instagram = $setting->instagram;
            $this->youtube = $setting->youtube;
        }
    }

    public function update($fields)
    {
        $this->validateOnly($fields,[
            'email' =>'required|email',
            'phone' =>'required',
            'phone2' =>'required',
            'address' =>'required',
            'map' =>'required',
            'twitter' =>'required',
            'pinterest' =>'required',
            'facebook' =>'required',
            'instagram' =>'required',
            'youtube'=>'required'
        ]);
    }

    public function saveSettings()
    {
        $this->validate([
            'email' =>'required|email',
            'phone' =>'required',
            'phone2' =>'required',
            'address' =>'required',
            'map' =>'required',
            'twitter' =>'required',
            'pinterest' =>'required',
            'facebook' =>'required',
            'instagram' =>'required',
            'youtube'=>'required'
        ]);

        $setting = Setting::find(1);
        if(!$setting )
        {
            $setting = new Setting();
        }
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->phone2 = $this->phone2;
        $setting->address = $this->address;
        $setting->map = $this->map;
        $setting->twitter = $this->twitter;
        $setting->pinterest = $this->pinterest;
        $setting->facebook = $this->facebook;
        $setting->instagram = $this->instagram;
        $setting->youtube = $this->youtube;
        $setting->save();
        session()->flash('message','Setting has been Saved Successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-setting-component')->layout('layouts.base');
    }
}