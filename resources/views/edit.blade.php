@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="shadow-lg p-3 bg-dark text-white rounded p-5" style="width: 850px; min-height: 300px;">
            <h1>Editar Tarefa</h1>
            <form action="/todos/update" method="post" class="mt-3">
                @csrf
                <div class="input-group">
                    <div class="input-group-text bg-white p-0">
                        <input type="color" class="form-control form-control-color border-0" name="color" title="Escolha uma cor">
                    </div>
                    <input type="text" class="form-control" name="title" placeholder="O que fazer?" required>
                    <button type="submit" class="btn btn-secondary">
                        <i class="bi bi-plus fs-4"></i>
                    </button>
                </div>
            </form>
            <hr>
            <ul class="list-group list-group-flush">
            </ul>
        </div>
    </div>
@endsection
