@extends('./layout.master');
@section ('contenu')

<form method="POST" action ="{{ route('store_etudiants') }}">
 @csrf
    <input type="text" name="noms" placeholder="entre un nom ">
    <input type="number" name="age" placeholder="entre votre age ">
   <input  type="submit" value="enregistrer" class="btn btn-primary">

</form>
@endsection