<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Delete Property
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Cancel</button>
            </h4>
        </div>
        <div class="card-body">
            Are you sure you want to delete the Property '{{ $propertyName }}' <hr>
            <button class="btn btn-danger btn-sm" wire:click="destroyCurrentProperty">Delete</button>
            <button class="btn btn-primary btn-sm" wire:click="index">Cancel</button>
        </div>
    </div>
</div>
