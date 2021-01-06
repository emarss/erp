<form wire:submit.prevent="uploadAvatar">
    <div class="form-row">
        <div class="form-group col-md-12 text-center">
            <div wire:loading.remove wire:target="avatar" class="">
                @if($avatar)
                    <img src="{{ $avatar->temporaryURL() }}" style="height: 60px">
                @else
                    <img src="{{ auth()->user()->avatar() }}" style="height: 60px" class="rounded-circle">
                @endif
            </div>
            <div wire:loading wire:target="avatar">
                <img src="{{ asset('images/gifs/load.gif') }}" accept="image/*" style="height: 60px">
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="avatar">Avatar</label>
            <div class="input-group input-group--inline">
                <div class="input-group-addon">
                    <i class="material-icons">perm_media</i>
                </div>
                <input wire:model="avatar"
                    type="file" class="form-control" name="avatar"
                    placeholder="Select Avatar">
            </div>
            @error('avatar') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
    </div>
    <button  wire:loading.attr="disabled"  wire:target="avatar" class="btn btn-sm btn-primary">Update Avatar</button>
</form>

