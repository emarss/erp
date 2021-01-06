<form wire:submit.prevent="uploadContractFile">
    <div class="form-row">
        <div class="form-group col-md-12 text-center">
            <div wire:loading.remove wire:target="contractFile" class="">
                @if(strlen($employee->contract) || $contractFile)
                    <i class="material-icons">picture_as_pdf</i>
                @endif
            </div>
            <div wire:loading wire:target="contractFile">
                <img src="{{ asset('images/gifs/load.gif') }}" accept="image/*" style="height: 60px">
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="contractFile">National Id</label>
            <div class="input-group input-group--inline">
                <div class="input-group-addon">
                    <i class="material-icons">picture_as_pdf</i>
                </div>
                <input accept="application/pdf" wire:model="contractFile"
                    type="file" class="form-control" name="contractFile"
                    placeholder="Select National Id">
            </div>
            @error('contractFile') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
    </div>
    <button wire:loading.attr="disabled"  wire:target="contractFile" class="btn btn-sm btn-primary">Update National Id</button>
</form>
