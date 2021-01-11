@include("includes.loading_modal")

<div class="container-fluid"  wire:loading.remove>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Sales List
                <button class="btn btn-primary btn-sm float-right" wire:click="create">Add New</button>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="data-table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="">#</th>
                            <th scope="col" class="">Product</th>
                            <th scope="col" class="">Quantity(UoM)</th>
                            <th scope="col" class="">Actual Selling Price</th>
                            <th scope="col" class="">Discount</th>
                            <th scope="col" class="">Profit</th>
                            <th scope="col" class="">Last Updated</th>
                            <th scope="col" class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sales as $sale)
                            <tr>
                                <td> {{ $sale->id }} </th>
                                <td> {{ $sale->product->description }} </th>
                                <td> {{ $sale->quantity }} ({{ $sale->product->unitOfMeasure->title }}) </th>
                                <td> {{ $sale->actual_selling_price }} </th>
                                <td> {{ $sale->discount }} </th>
                                <td> {{ $sale->profit }} </th>
                                <td> {{ $sale->updated_at->diffForHumans() }} </th>
                                <td class="align-middle text-right">
                                    <button wire:click="show({{ $sale->id }})" class="btn btn-sm btn-primary">Show</button>
                                    <button wire:click="edit({{ $sale->id }})" class="btn btn-sm btn-primary">Edit</button>
                                    <button wire:click="delete({{ $sale->id }})" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">No sale found. Click <a wire:click="create" href="#">this link</a> to create new.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
