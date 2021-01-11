<div>
    @if($action == 'clients.index')
        <x:clients.index />
    @elseif($action == 'clients.edit')
        <x:clients.edit />
    @elseif($action == 'clients.show')
        <x:clients.show :currentClientId="$currentClientId" />
    @elseif($action == 'clients.delete')
        <x:clients.delete :clientName="$clientName" />
    @elseif($action == 'clients.create')
        <x:clients.create />
    @elseif($action == 'clients.update-national-id')
        <x:clients.update-national-id :currentClientId="$currentClientId" />
    @endif
</div>
