<div>
    @if($action == 'stocks.index')
        <x:stocks.index />
    @elseif($action == 'stocks.edit')
        <x:stocks.edit />
    @elseif($action == 'stocks.show')
        <x:stocks.show :currentStockId="$currentStockId" />
    @elseif($action == 'stocks.delete')
        <x:stocks.delete :stockDescription="$description" />
    @elseif($action == 'stocks.create')
        <x:stocks.create />
    @endif
</div>
