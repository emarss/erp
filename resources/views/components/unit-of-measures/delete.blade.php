<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Delete Unit Of Measure
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Cancel</button>
            </h4>
        </div>
        <div class="card-body">
            Are you sure you want to delete the Unit Of Measure '{{ $unitOfMeasureTitle }}' <hr>
            <button class="btn btn-danger btn-sm" wire:click="destroyCurrentUnitOfMeasure">Delete</button>
            <button class="btn btn-primary btn-sm" wire:click="index">Cancel</button>
        </div>
    </div>
</div>
