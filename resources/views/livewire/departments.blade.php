<div>
    @if($action == 'departments.index')
        <x:departments.index />
    @elseif($action == 'departments.edit')
        <x:departments.edit />
    @elseif($action == 'departments.delete')
        <x:departments.delete :departmentName="$name" />
    @elseif($action == 'departments.create')
        <x:departments.create />
    @endif
</div>
