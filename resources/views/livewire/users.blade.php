<div>
    @if($action == 'users.index')
        <x:users.index />
    @elseif($action == 'users.edit')
        <x:users.edit />
    @elseif($action == 'users.change-password')
        <x:users.change-password />
    @elseif($action == 'users.show')
        <x:users.show :currentUserId="$currentUserId" />
    @elseif($action == 'users.delete')
        <x:users.delete :userName="$first_name" />
    @elseif($action == 'users.create')
        <x:users.create />
    @endif
</div>
