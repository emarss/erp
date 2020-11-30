<div class="container-fluid">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    {{ $pageTitle }}
                    <button wire:click="viewSettings" class="btn btn-primary float-right btn-sm">Back</button>
                </h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="default_currency">Default Currency</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <select name="default_currency" wire:model="default_currency" class="form-control" required>
                                @foreach($currencies as $currency)
                                    <option {{ $settings->default_currency == $currency->id ? "selected" : "" }} value="{{ $currency->id }}">{{ $currency->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
                <button wire:click="saveSettings" class="btn btn-primary btn-sm">Update</button>
            </div>
        </div>
    </div>
</div>
