<?php

namespace App\View\Components\Settings;

use App\Models\Setting;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class Index extends Component
{
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
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.settings.index');
    }
}
