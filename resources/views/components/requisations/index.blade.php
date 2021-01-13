@include("includes.loading_modal")

<div class="container-fluid"  wire:loading.remove>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Requisations List
                <button class="btn btn-primary btn-sm float-right" wire:click="create">Add New</button>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="data-table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="">#</th>
                            <th scope="col" class="">Employee</th>
                            <th scope="col" class="">Narration</th>
                            <th scope="col" class="">Amount</th>
                            <th scope="col" class="">Authorised By</th>
                            <th scope="col" class="">Created At</th>
                            <th scope="col" class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($requisations as $requisation)
                            <tr>
                                <td> {{ $requisation->id }} </th>
                                <td> {{ $requisation->employee->getFullName() }} </th>
                                <td> {{ $requisation->narration }} </th>
                                <td> {{ $requisation->amount }} </th>
                                <td> {{ $requisation->authoriser->getFullName() }} </th>
                                <td> {{ $requisation->created_at->diffForHumans() }} </th>
                                <td class="align-middle text-right">
                                    <button wire:click="show({{ $requisation->id }})" class="btn btn-sm btn-primary">Show</button>
                                    <button wire:click="edit({{ $requisation->id }})" class="btn btn-sm btn-primary">Edit</button>
                                    <button wire:click="delete({{ $requisation->id }})" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No requisations found. Click <a wire:click="create" href="#">this link</a> to create new.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
