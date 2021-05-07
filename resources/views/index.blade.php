@extends('templates/crudTemplate')

@section('content')
<h1 class='text-center'>Crud simples</h1>

<div class="text-center">
     
    <a href="{{ url('user/create') }}">
      <button class="btn btn-success">Cadastrar</button>

    </a>

</div>

<div class="col-8 m-auto mt-3 mb-4">
    @csrf
  <table class="table texte-center">
    <thead class="thead-dark " style="background-color: #2d2424;
      color: white;">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col " class='thAction'>Ações</th>
      </tr>
    </thead>
    <tbody>
    @foreach($user as $users)
    <tr>
        <th scope="row">{{$users->id}}</th>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
        <td class="actionsBtn">
        
          <a href="{{url("user/$users->id/edit")}}">
            <button class="btn btn-primary">Editar</button>
          
          </a>
        
          <a href="{{url("user/$users->id")}}" class='btn-delete' >
            <button class="btn btn-danger">Excluir</button>
          </a>
        </td>

      </tr>
    @endforeach
    </tbody>
  </table>

</div>
@endsection