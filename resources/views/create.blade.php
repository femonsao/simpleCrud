@extends('templates/crudTemplate')

@section('content')
<h1 class='text-center'> @if(isset($user)) Editar @else Cadastrar @endif</h1>

@if(isset($errors) && count($errors)>0)
  <div class="text-center mt-4 mb-4 p-2 alert-danger">
    @foreach($errors->all() as $error)
      {{$error}}<br>
    @endforeach
  </div>
@endif

<div class="col-8 m-auto mt-5 form-container">

@if(isset($user))
  <form name='formEdit' id='formEdit' method='post' action="{{url("user/$user->id")}}">
    @method('PUT')
@else
  <form name='formInsert' id='formInsert' method='post' action="{{url('user')}}">
@endif
    @csrf
    <input class="form-control" type="text" name='name' id='name' placeholder="Nome" value="{{$user->name ?? ''}}" required>
    <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
  </form>

</table>

</div>
@endsection