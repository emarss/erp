<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
</div>@include("includes.loading_modal")

<div class="container-fluid"  wire:loading.remove>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">
                Employees List
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
                            <th scope="col" class="">Position</th>
                            <th scope="col" class="">Gender</th>
                            <th scope="col" class="">Status</th>
                            <th scope="col" class="">Department(s)</th>
                            <th scope="col" class="">Created At</th>
                            <th scope="col" class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($employees as $employee)
                            <tr>
                                <td> {{ $employee->id }} </th>
                                <td> {{ $employee->getFullName() }} </th>
                                <td> {{ $employee->position }} </th>
                                <td> {{ Str::ucfirst($employee->sex) }} </th>
                                <td> {{ $employee->status ? "Active" : "Not Active" }} </th>
                                <td>
                                    @forelse($employee->departments as $department)
                                        {{ Str::ucfirst($department->name) }} {{ $loop->last ? "" : ", " }}
                                    @empty
                                        ---
                                    @endforelse
                                </td>
                                <td> {{ $employee->created_at->diffForHumans() }} </th>
                                <td class="align-middle text-right">
                                    <button wire:click="show({{ $employee->id }})" class="btn btn-sm btn-primary">Show</button>
                                    <button wire:click="edit({{ $employee->id }})" class="btn btn-sm btn-primary">Edit</button>
                                    <button wire:click="delete({{ $employee->id }})" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No employees found. Click <a wire:click="create" href="#">this link</a> to create new.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
