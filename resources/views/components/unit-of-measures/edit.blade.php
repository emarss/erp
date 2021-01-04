<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Edit Unit Of Measure
                <button class="btn btn-primary btn-sm float-right" wire:click="index">Back</button>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Unit Of Measure Title</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">label</i>
                        </div>
                        <input wire:model="title" type="text" class="form-control" name="title"
                            placeholder="Title">
                    </div>
                    @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Unit Of Measure Description</label>
                    <div class="input-group input-group--inline">
                        <div class="input-group-addon">
                            <i class="material-icons">description</i>
                        </div>
                        <input wire:model="description" type="text" class="form-control" name="description"
                            placeholder="Description">
                    </div>
                    @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </form>
            <button class="btn btn-primary btn-sm" wire:click="updateUnitOfMeasure">Update</button>
        </div>
    </div>
</div>
