<div>
    @if($action == 'properties.index')
        <x:properties.index />
    @elseif($action == 'properties.edit')
        <x:properties.edit />
    @elseif($action == 'properties.show')
        <x:properties.show :currentPropertyId="$currentPropertyId" />
    @elseif($action == 'properties.delete')
        <x:properties.delete :propertyName="$name" />
    @elseif($action == 'properties.create')
        <x:properties.create />
    @endif
</div>
