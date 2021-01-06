<form wire:submit.prevent="uploadNationalIdImage">
    <div class="form-row">
        <div class="form-group col-md-12 text-center">
            <div wire:loading.remove wire:target="nationalIdImage" class="">
                @if($nationalIdImage)
                    <img src="{{ $nationalIdImage->temporaryURL() }}" style="height: 60px">
                @else
                    <img src="{{ auth()->user()->nationalIdImage() }}" style="height: 60px">
                @endif
            </div>
            <div wire:loading wire:target="nationalIdImage">
                <img src="{{ asset('images/gifs/load.gif') }}" accept="image/*" style="height: 60px">
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="nationalIdImage">National Id</label>
            <div class="input-group input-group--inline">
                <div class="input-group-addon">
                    <i class="material-icons">perm_media</i>
                </div>
                <input wire:model="nationalIdImage"
                    type="file" class="form-control" name="nationalIdImage"
                    placeholder="Select National Id">
            </div>
            @error('nationalIdImage') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
    </div>
    <button  wire:loading.attr="disabled"  wire:target="nationalIdImage" class="btn btn-sm btn-primary">Update National Id</button>
</form>

