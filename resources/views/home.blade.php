@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Leads</h2>
                    @if(!empty($leads))
                        <p>Número de Leads: {{ count($leads) }}</p>
                        <div class="card-body text-center">
                            <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover h4 fw-bold" href="{{ route('home.create') }}">Adicionar um novo Lead</a>
                        </div>
                        <br>                        
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col"># ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Criado em</th>
                                <th scope="col">Editado em</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Apagar</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($leads as $lead)
                                <tr>
                                    <th scope="row">
                                        {{ $lead->id }}
                                    </th>
                                    <td>
                                        {{ $lead->name }}
                                    </td>
                                    <td>
                                        {{ $lead->email }}
                                    </td>
                                    <td>
                                        {{ $lead->telephone }}
                                    </td>
                                    <td>
                                        {{ $lead->created_at }}
                                    </td>
                                    <td>
                                        {{ $lead->updated_at }}
                                    </td>
                                    <td>
                                        <form action="{{ route('home.edit', $lead->id) }}" method="get">
                                            <button type="submit" class="btn btn-warning">Editar</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('home.destroy', $lead->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Apagar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No leads found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection