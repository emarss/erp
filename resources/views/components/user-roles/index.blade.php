@include("includes.loading_modal")

<div class="container-fluid"  wire:loading.remove>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                User Roles List
                <button class="btn btn-primary btn-sm float-right" wire:click="create">Add New</button>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="data-table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="">#</th>
                            <th scope="col" class="">Title</th>
                            <th scope="col" class="">Description</th>
                            <th scope="col" class="">Added By</th>
                            <th scope="col" class="">Created At</th>
                            <th scope="col" class="">Last Updated</th>
                            <th scope="col" class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($userRoles as $userRole)
                            <tr>
                                <td> {{ $userRole->id }} </th>
                                <td> {{ $userRole->title }} </th>
                                <td> {{ $userRole->description }} </th>
                                <td> {{ $userRole->user->getFullName() }} </th>
                                <td> {{ $userRole->created_at->diffForHumans() }} </th>
                                <td> {{ $userRole->updated_at->diffForHumans() }} </th>
                                <td class="align-middle text-right">
                                    <button wire:click="edit({{ $userRole->id }})" class="btn btn-sm btn-primary">Edit</button>
                                    <button wire:click="delete({{ $userRole->id }})" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No User Roles found. Click <a wire:click="create" href="#">this link</a> to create new.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
