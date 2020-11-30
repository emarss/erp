<?php

namespace App\View\Components\Settings;

use App\Models\Currency;
use App\Models\Setting;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class Update extends Component
{
    public $pageTitle = "Updating Settings";
    public $currencies;
    public $settings;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $department = Session::get('department');
        $this->settings = Setting::where('department_id', $department->id)->first();
        $this->currencies = Currency::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.settings.update');
    }
}
