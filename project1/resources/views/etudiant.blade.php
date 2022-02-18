@extends('master');

@section('contenu');
<p>hello from etudiant</p>
<ul>
    @foreach($etudiants as $item)
<li>{{$item}}</li>
    @endforeach
</ul>
<a href="{{route('new')}}"> nouveau etudiant </a>
@endsection

