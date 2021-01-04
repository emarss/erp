<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Delete Currency
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Cancel</button>
            </h4>
        </div>
        <div class="card-body">
            Are you sure you want to delete the currency '{{ $currencyTitle }}' <hr>
            <button class="btn btn-danger btn-sm" wire:click="destroyCurrentCurrency">Delete</button>
            <button class="btn btn-primary btn-sm" wire:click="index">Cancel</button>
        </div>
    </div>
</div>
