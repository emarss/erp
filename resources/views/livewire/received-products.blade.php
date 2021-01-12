<div>
    @if($action == 'received-products.index')
        <x:received-products.index />
    @elseif($action == 'received-products.edit')
        <x:received-products.edit />
    @elseif($action == 'received-products.show')
        <x:received-products.show :currentReceivedProductId="$currentReceivedProductId" />
    @elseif($action == 'received-products.delete')
        <x:received-products.delete :productDescription="$productDescription" />
    @elseif($action == 'received-products.create')
        <x:received-products.create />
    @endif
</div>
