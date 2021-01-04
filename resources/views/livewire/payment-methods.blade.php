<div>
    @if($action == 'payment-methods.index')
        <x:payment-methods.index />
    @elseif($action == 'payment-methods.edit')
        <x:payment-methods.edit />
    @elseif($action == 'payment-methods.delete')
        <x:payment-methods.delete :paymentMethodTitle="$title" />
    @elseif($action == 'payment-methods.create')
        <x:payment-methods.create />
    @endif
</div>
