@extends('admin.layout')
@section('title', 'Connexion Administrateur')



@section('body')

   <div class="container mt-2">
       <h1 class="text-center">Connexion Adminstrateur</h1>

       <form method="post" class="w-50 m-auto mt-lg-5">
           @csrf
           @include('components.input', ['name' => 'email', 'placeholder' => "Addresse mail", 'type' => 'email'] )
           @include('components.input', ['name' => 'password', 'placeholder' => "mot de passe", 'type' => 'password'] )
           <button class="btn btn-primary">Connexion</button>
       </form>
   </div>
@endsection


