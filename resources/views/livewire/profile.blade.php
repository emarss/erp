<div>
    @if($action == 'users.view-profile')
        <x:users.view-profile />
    @elseif($action == 'users.update-details')
        <x:users.update-details />
    @elseif($action == 'users.update-profile')
        <x:users.update-profile />
    @elseif($action == 'users.update-email')
        <x:users.update-email />
    @elseif($action == 'users.update-password')
        <x:users.update-password />
    @elseif($action == 'users.update-avatar')
        <x:users.update-avatar />
    @elseif($action == 'users.update-national-id')
        <x:users.update-national-id />
    @endif
</div>
