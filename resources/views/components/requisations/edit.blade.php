<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Editing Requisation
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="date">Date</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">date_range</i>
                            </div>
                            <input wire:model="date" placeholder="Control Quantity" type="date" class="form-control" name="date">
                        </div>
                        @error('date') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="employee_id">Employee</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">person</i>
                            </div>
                            <select name="employee_id" wire:model="employee_id" class="form-control">
                                <option value="">Select Employee...</option>
                                @foreach(\App\Models\Employee::all() as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->getFullName() }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('employee_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="amount">Amount</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input wire:model="amount" type="number" step="0.01" class="form-control" name="amount" placeholder="Unit Buying Price">
                        </div>
                        @error('amount') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="authorised_by">Authorised By</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">assessment</i>
                            </div>
                            <select name="authorised_by" wire:model="authorised_by" class="form-control">
                                <option value="">Select Authoriser...</option>
                                @foreach(\App\Models\Employee::all() as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->getFullName() }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('authorised_by') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="currency">Currency</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">assessment</i>
                            </div>
                            <select name="currency" wire:model="currency" class="form-control">
                                <option value="">Select Currency...</option>
                                @foreach(\App\Models\Currency::all() as $currency)
                                    <option value="{{ $currency->title }}">{{ $currency->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('currency') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="payment_method">Payment Method</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">assessment</i>
                            </div>
                            <select name="payment_method" wire:model="payment_method" class="form-control">
                                <option value="">Select Payment Method...</option>
                                @foreach(\App\Models\PaymentMethod::all() as $paymentMethod)
                                    <option value="{{ $paymentMethod->title }}">{{ $paymentMethod->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('payment_method')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="narration">Narration</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">description</i>
                        </div>
                        <input wire:model="narration" type="text" class="form-control" name="narration" placeholder="Description">
                    </div>
                    @error('narration') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </form>
            <button class="btn btn-primary btn-sm" wire:click="updateRequisation">Save</button>
        </div>
    </div>
</div>
