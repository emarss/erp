@extends('layouts.master')
@section('styles')

@endsection

@section('content')
    @livewire("feedback")
	@livewire($page)
@endsection
