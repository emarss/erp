<div class="col-lg-12">
    <div class="card card-account">
        <div class="card-header">
	    	<h4 class="card-title font-weight-bold">
	    		Update Contract File
	    		<button class="btn btn-primary btn-sm float-right" wire:click="show({{ $client->id }})">Back</button>
	    	</h4>
        </div>
        <div class="card-body">
            @livewire('clients.update-national-id', ['client' => $client])
        </div>
    </div>
</div>
