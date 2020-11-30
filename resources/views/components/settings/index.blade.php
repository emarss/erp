<div class="container-fluid">
    <div class="col mb-4">
        <div class="row py-4 bg-white">
            <div class="col-lg-6">
                <div class="media media-user-info align-items-center">
                    <img src="{{ Session::get('department')->logo() }}" class="img-fluid rounded-circle mr-2" width="60"
                        alt="">
                    <div class="media-body lh-1">
                        <p class="h4 m-0">{{ Session::get('department')->name }}</p>
                        <p class="text-muted mb-0">{{ $settings->department->organisation->name }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-md-flex align-items-center justify-content-end">
                <button wire:click="updateSettings" class="btn btn-primary btn-sm">Update Setings</button>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card card-account">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="default_currency">Default Currency</label>
                        <div class="input-group input-group--inline">
                            <div class="input-group-addon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <input readonly type="text" class="form-control" name="default_currency"
                                value="{{ $settings->currency->title }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
