@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 class="text-center mt-5 b-5 fw-bold">Adicionar novo Lead</h1>

            <div class="card-body">
                <form action="{{ route('home.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telefone:</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn btn-primary btn-lg btn-block mt-3">Adicionar Lead</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
