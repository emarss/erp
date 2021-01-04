@extends('layouts.master')
@section('styles')

@endsection

@section('feedback')
    @livewire("feedback")
@endsection

@section('content')
	@livewire($page)
@endsection
