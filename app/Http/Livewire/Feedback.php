<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Feedback extends Component
{
    public $success, $error, $info = null;

    protected $listeners = [
        'errorMessage' => 'showErrorMessage',
        'successMessage' => 'showSuccessMessage',
        'infoMessage' => 'showInfoMessage',
        'hideFeedback' => 'hideFeedback',
    ];

    public function render()
    {
        return view('livewire.feedback');
    }

    public function showSuccessMessage(string $message)
    {
        $this->success = $message;
    }


    public function showInfoMessage(string $message)
    {
        $this->info = $message;
    }


    public function showErrorMessage(string $message)
    {
        $this->error = $message;
    }


    public function hideFeedback()
    {
        $this->success = $this->error = $this->info = null;
    }
}
