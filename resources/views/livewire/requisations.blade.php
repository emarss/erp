<div>
    @if($action == 'requisations.index')
        <x:requisations.index />
    @elseif($action == 'requisations.edit')
        <x:requisations.edit />
    @elseif($action == 'requisations.show')
        <x:requisations.show :currentRequisationId="$currentRequisationId" />
    @elseif($action == 'requisations.delete')
        <x:requisations.delete :requisationEmployeeName="$requisationEmployeeName" />
    @elseif($action == 'requisations.create')
        <x:requisations.create />
    @endif
</div>
