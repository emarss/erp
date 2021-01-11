<div>
    @if($action == 'sales.index')
        <x:sales.index />
    @elseif($action == 'sales.edit')
        <x:sales.edit />
    @elseif($action == 'sales.show')
        <x:sales.show :currentSaleId="$currentSaleId" />
    @elseif($action == 'sales.delete')
        <x:sales.delete :productDescription="$productDescription" />
    @elseif($action == 'sales.create')
        <x:sales.create />
    @endif
</div>
