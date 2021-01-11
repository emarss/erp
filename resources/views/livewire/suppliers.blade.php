<div>
    @if($action == 'suppliers.index')
        <x:suppliers.index />
    @elseif($action == 'suppliers.edit')
        <x:suppliers.edit />
    @elseif($action == 'suppliers.show')
        <x:suppliers.show :currentSupplierId="$currentSupplierId" />
    @elseif($action == 'suppliers.delete')
        <x:suppliers.delete :supplierName="$supplierName" />
    @elseif($action == 'suppliers.create')
        <x:suppliers.create />
    @endif
</div>
