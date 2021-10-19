@extends('layouts/contentLayoutMaster')

@section('title', 'Centros')

@section('content')
    {{-- <livewire:usuarios-component :usuarios="{{ $usuarios }}" /> --}}
    <div class="row">
        <div class="py-2">
            <a name="" id="" class="btn btn-primary" href="{{ route('usuarios.create') }}" role="button">Crear Centro</a>
        </div>
    </div>
    <div class="row">
        <livewire:centros-component />
    </div>
@endsection
