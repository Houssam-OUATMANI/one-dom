@extends('admin.layout')

@section('body')
<div class="container">
    <h1>Mes Derniers Contact</h1>
</div>

<ul>
    @foreach($contacts as $contact)
        <li class="card">
          <p>  {{$contact->firstname}}
              {{$contact->lastname}}
          </p>
            <p>Objet {{$contact->category['name']}}</p>
        </li>
    @endforeach
</ul>

@endsection
