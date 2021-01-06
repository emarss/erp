<div>
    @if($action == 'employees.index')
        <x:employees.index />
    @elseif($action == 'employees.edit')
        <x:employees.edit />
    @elseif($action == 'employees.show')
        <x:employees.show :currentEmployeeId="$currentEmployeeId" />
    @elseif($action == 'employees.delete')
        <x:employees.delete :employeeName="$first_name" />
    @elseif($action == 'employees.create')
        <x:employees.create />
    @elseif($action == 'employees.update-contract')
        <x:employees.update-contract :currentEmployeeId="$currentEmployeeId" />
    @elseif($action == 'employees.update-national-id')
        <x:employees.update-national-id :currentEmployeeId="$currentEmployeeId" />
    @endif
</div>
