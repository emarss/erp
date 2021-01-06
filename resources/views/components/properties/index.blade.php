@include("includes.loading_modal")

<div class="container-fluid"  wire:loading.remove>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Properties List
                <button class="btn btn-primary btn-sm float-right" wire:click="create">Add New</button>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="data-table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="">#</th>
                            <th scope="col" class="">Name</th>
                            <th scope="col" class="">Description</th>
                            <th scope="col" class="">Location</th>
                            <th scope="col" class="">Quantity(UoM)</th>
                            <th scope="col" class="">Last Updated</th>
                            <th scope="col" class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($properties as $property)
                            <tr>
                                <td> {{ $property->id }} </th>
                                <td> {{ $property->name }} </th>
                                <td> {{ $property->description }} </th>
                                <td> {{ $property->location }} </th>
                                <td> {{ $property->quantity }} ({{ $property->unitOfMeasure->title }}) </th>
                                <td> {{ $property->updated_at->diffForHumans() }} </th>
                                <td class="align-middle text-right">
                                    <button wire:click="show({{ $property->id }})" class="btn btn-sm btn-primary">Show</button>
                                    <button wire:click="edit({{ $property->id }})" class="btn btn-sm btn-primary">Edit</button>
                                    <button wire:click="delete({{ $property->id }})" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No property found. Click <a wire:click="create" href="#">this link</a> to create new.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
