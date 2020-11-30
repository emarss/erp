<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Settings extends Component
{
    public $action = 'settings.index';
    public $default_currency, $settings;

    public function mount()
    {
        $department = Session::get('department');
        $this->settings = Setting::where('department_id', $department->id)->first();
        $this->default_currency = $this->settings->default_currency;
    }


    public function updated($field)
    {
        $this->validateOnly($field, [
            'default_currency' => 'required|numeric',
        ]);
    }

    public function render()
    {
        return view('livewire.settings');
    }

    public function updateSettings()
    {
        $this->emit("hideFeedback");
        $this->action = "settings.update";
    }


    public function viewSettings()
    {
        $this->emit("hideFeedback");
        $this->action = "settings.index";
    }


    public function saveSettings()
    {
        $this->settings->update([
            'default_currency' => $this->default_currency,
        ]);
        $this->action = 'settings.index';

        $this->emit('successMessage', "Settings updated successfully");
    }

}
