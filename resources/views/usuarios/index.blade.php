@extends('layouts/contentLayoutMaster')

@section('title', 'Usuarios')

@section('content')
    {{-- <livewire:usuarios-component :usuarios="{{ $usuarios }}" /> --}}
    <div class="row">
        <div class="py-2">
            <a name="" id="" class="btn btn-primary" href="{{ route('usuarios.create') }}" role="button">Crear Usuario</a>
        </div>
    </div>
    <div class="row">
        <livewire:usuarios-component />
    </div>
@endsection
