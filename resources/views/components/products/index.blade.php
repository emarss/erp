<div class="card-body">
  <form method="post" action="">
    @csrf
    <div class="form-group">
      <label class="form-control-label" for="description">Description *</label>
      <input required="" type="text" class="form-control" wire:model="description">
      @error('description')
        <div class="text-danger my-1">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-row mb-3">
    	<div class="col">
	      <label class="form-control-label" for="physical_quantity">Physical Quantity *</label>
	      <input required="" type="number" step="0.01" class="form-control" wire:model="physical_quantity">
	      @error('physical_quantity')
	        <div class="text-danger my-1">{{ $message }}</div>
	      @enderror
	    </div>
	    <div class="col">
	      <label class="form-control-label" for="control_quantity">Control Quantity *</label>
	      <input required="" type="number" step="0.01" class="form-control" wire:model="control_quantity">
	      @error('control_quantity')
	        <div class="text-danger my-1">{{ $message }}</div>
	      @enderror
	    </div>
    </div>
    <div class="form-row mb-3">
    	<div class="col">
	      <label class="form-control-label" for="unit_buying_price">Unit Buying Price *</label>
	      <input required="" type="number" step="0.01" class="form-control" wire:model="unit_buying_price">
	      @error('unit_buying_price')
	        <div class="text-danger my-1">{{ $message }}</div>
	      @enderror
	    </div>
	    <div class="col">
	      <label class="form-control-label" for="unit_selling_price">Unit Selling Price *</label>
	      <input required="" type="number" step="0.01" class="form-control" wire:model="unit_selling_price">
	      @error('unit_selling_price')
	        <div class="text-danger my-1">{{ $message }}</div>
	      @enderror
	    </div>
    </div>
    <div class="form-row mb-3">
    	<div class="col">
	      <label class="form-control-label" for="unit_of_measure">Unit of Measure *</label>
	      <select required="" class="custom-select"  wire:model="unit_buying_price">
          	<option selected="">Choose...</option>
          	<option value="Kilograms">Kilograms</option>
          	<option value="Number">Number</option>
          	<option value="Litres">Litres</option>
	      </select>
	      @error('unit_of_measure')
	        <div class="text-danger my-1">{{ $message }}</div>
	      @enderror
	    </div>
	    <div class="col">
	      <label class="form-control-label" for="location">Location *</label>
	      <input required="" type="text" class="form-control" wire:model="location">
	      @error('location')
	        <div class="text-danger my-1">{{ $message }}</div>
	      @enderror
	    </div>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="remarks">Remarks </label>
      <input type="text" class="form-control" wire:model="remarks">
      @error('remarks')
        <div class="text-danger my-1">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-sm" type="submit">Save</button>
    </div>
  </form>
</div>