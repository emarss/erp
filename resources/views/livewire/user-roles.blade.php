<div>
    @if($action == 'user-roles.index')
        <x:user-roles.index />
    @elseif($action == 'user-roles.edit')
        <x:user-roles.edit />
    @elseif($action == 'user-roles.delete')
        <x:user-roles.delete :userRoleTitle="$title" />
    @elseif($action == 'user-roles.create')
        <x:user-roles.create />
    @endif
</div>
