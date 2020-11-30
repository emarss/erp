<div class="col">
    @if(!is_null($success))
        <div class="alert alert-dismissible alert-success">
            <a href="#" data-dismiss="alert" class="close">&times;</a>
            {{ $success }}
        </div>
    @endif
    @if(!is_null($info))
        <div class="alert alert-dismissible alert-info">
            <a href="#" data-dismiss="alert" class="close">&times;</a>
            {{ $info }}
        </div>
    @endif
    @if(!is_null($error))
        <div class="alert alert-dismissible alert-danger">
            <a href="#" data-dismiss="alert" class="close">&times;</a>
            {{ $error }}
        </div>
    @endif

</div>
