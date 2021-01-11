@include("includes.loading_modal")

<div class="container-fluid"  wire:loading.remove>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Stocks List
                <button class="btn btn-primary btn-sm float-right" wire:click="create">Add New</button>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="data-table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="">#</th>
                            <th scope="col" class="">Description</th>
                            <th scope="col" class="">Physical Quantity(UoM)</th>
                            <th scope="col" class="">Unit Selling Price</th>
                            <th scope="col" class="">Total Stock Value</th>
                            <th scope="col" class="">Last Updated</th>
                            <th scope="col" class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($stocks as $stock)
                            <tr>
                                <td> {{ $stock->id }} </th>
                                <td> {{ $stock->description }} </th>
                                <td> {{ $stock->physical_quantity }} ({{ $stock->unitOfMeasure->title }}) </th>
                                <td> {{ $stock->unit_selling_price }} </th>
                                <td> {{ $stock->unit_selling_price }} </th>
                                <td> {{ $stock->updated_at->diffForHumans() }} </th>
                                <td class="align-middle text-right">
                                    <button wire:click="show({{ $stock->id }})" class="btn btn-sm btn-primary">Show</button>
                                    <button wire:click="edit({{ $stock->id }})" class="btn btn-sm btn-primary">Edit</button>
                                    <button wire:click="delete({{ $stock->id }})" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No stock found. Click <a wire:click="create" href="#">this link</a> to create new.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
