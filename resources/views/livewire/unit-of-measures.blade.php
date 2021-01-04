<div>
    @if($action == 'unit-of-measures.index')
        <x:unit-of-measures.index />
    @elseif($action == 'unit-of-measures.edit')
        <x:unit-of-measures.edit />
    @elseif($action == 'unit-of-measures.delete')
        <x:unit-of-measures.delete :unitOfMeasureTitle="$title" />
    @elseif($action == 'unit-of-measures.create')
        <x:unit-of-measures.create />
    @endif
</div>
