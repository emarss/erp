@include("includes.loading_modal")

<div class="container-fluid"  wire:loading.remove>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Clients List
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
                            <th scope="col" class="">Email</th>
                            <th scope="col" class="">Phone</th>
                            <th scope="col" class="">Gender</th>
                            <th scope="col" class="">Created At</th>
                            <th scope="col" class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($clients as $client)
                            <tr>
                                <td> {{ $client->id }} </th>
                                <td> {{ $client->getFullName() }} </th>
                                <td> {{ $client->email }} </th>
                                <td> {{ $client->phone }} </th>
                                <td> {{ $client->sex }} </th>
                                <td> {{ $client->created_at->diffForHumans() }} </th>
                                <td class="align-middle text-right">
                                    <button wire:click="show({{ $client->id }})" class="btn btn-sm btn-primary">Show</button>
                                    <button wire:click="edit({{ $client->id }})" class="btn btn-sm btn-primary">Edit</button>
                                    <button wire:click="delete({{ $client->id }})" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No clients found. Click <a wire:click="create" href="#">this link</a> to create new.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
