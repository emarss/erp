<?php

namespace App\Http\Livewire;

use App\Models\Requisation;
use Livewire\Component;

class Requisations extends Component
{
    public $action = 'requisations.index';
    public $date, $employee_id, $amount, $payment_method, $currency, $narration, $authorised_by, $added_by, $currentRequisationId, $requisationEmployeeName;

    protected $rules = [
        'date' => "required|date",
        'employee_id' => "required|numeric|min:0",
        'amount' => "required|numeric|min:0",
        'payment_method' => "required|string",
        'currency' => "required|string",
        'narration' => "required|string",
        'authorised_by' => "required|numeric|min:0",
    ];

    public function render()
    {
        return view('livewire.requisations');
    }

    public function edit(int $id)
    {
        $this->currentRequisationId = $id;

        $requisation = Requisation::findOrFail($id);
        $this->date = $requisation->date;
        $this->employee_id = $requisation->employee_id;
        $this->amount = $requisation->amount;
        $this->payment_method = $requisation->payment_method;
        $this->currency = $requisation->currency;
        $this->narration = $requisation->narration;
        $this->authorised_by = $requisation->authorised_by;
        $this->added_by = $requisation->added_by;


        $this->emit("hideFeedback");
        $this->action = "requisations.edit";
    }

    public function delete(int $id)
    {
        $this->currentRequisationId = $id;

        $this->requisationEmployeeName = Requisation::findOrFail($id)->employee->getFullName();
        $this->emit("hideFeedback");
        $this->action = "requisations.delete";
    }

    public function show(int $id)
    {
        $this->currentRequisationId = $id;
        $this->emit("hideFeedback");
        $this->action = "requisations.show";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "requisations.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "requisations.create";
    }

    public function saveRequisation()
    {
        $this->validate();

        Requisation::create([
            'date' => $this->date,
            'employee_id' => $this->employee_id,
            'amount' => $this->amount,
            'payment_method' => $this->payment_method,
            'currency' => $this->currency,
            'narration' => $this->narration,
            'authorised_by' => $this->authorised_by,
            'department_id' => session('department')->id,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'requisations.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Requisation added successfully");
    }

    public function destroyCurrentRequisation()
    {
        Requisation::destroy($this->currentRequisationId);

        $this->action = 'requisations.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Requisation deleted successfully");
    }


    public function updateRequisation()
    {
        $this->validate();

        $requisation = Requisation::find($this->currentRequisationId);
        $requisation->update([
            'date' => $this->date,
            'employee_id' => $this->employee_id,
            'amount' => $this->amount,
            'payment_method' => $this->payment_method,
            'currency' => $this->currency,
            'narration' => $this->narration,
            'authorised_by' => $this->authorised_by,
        ]);

        $this->action = 'requisations.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Requisation updated successfully");
    }

    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->date = $this->employee_id = $this->amount = $this->currency = $this->payment_method = $this->narration = $this->authorised_by = $this->added_by = $this->currentRequisationId = $this->requisationEmployeeName = null;
    }

}
