<div class="container-fluid">
    <div class="card">
	    <div class="card-header">
	    	<h4 class="card-title font-weight-bold">
	    		{{ $pageTitle }}
	    		<button class="btn btn-primary btn-sm float-right" wire:click="create">Create</button>
	    		<button class="btn btn-primary btn-sm float-right" wire:click="index">Index</button>
	    	</h4>
	    </div>
    	@if($action == 'products.index')
    		<x:products.index />
    	@elseif($action == 'products.create')
    		<x:products.create />
    	@endif
    </div>
</div>