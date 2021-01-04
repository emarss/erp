<div>
    @if($action == 'currencies.index')
        <x:currencies.index />
    @elseif($action == 'currencies.edit')
        <x:currencies.edit />
    @elseif($action == 'currencies.delete')
        <x:currencies.delete :currencyTitle="$title" />
    @elseif($action == 'currencies.create')
        <x:currencies.create />
    @endif
</div>
