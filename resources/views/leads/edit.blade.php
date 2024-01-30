@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mt-5 fw-bold">Editar Lead</h1>
            <div class="card-body">
                <form action="{{ route('home.update', $lead->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $lead->name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $lead->email }}">
                    </div>

                    <div class="form-group">
                        <label for="telephone">Telefone:</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" value="{{ $lead->telephone }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Editar Lead</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
