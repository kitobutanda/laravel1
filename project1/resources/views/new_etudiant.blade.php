@extends('./layout.master');
@section ('contenu')



@if($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $item)
   <p>{{ $item }}</p>  
   @endforeach
</div>
@endif
<div class="container">
<br><br><br><br>
<form method="POST" action ="{{ route('store_etudiants') }}">
 @csrf
    <input type="text" name="noms" placeholder="entre un nom ">
    <input type="number" name="age" placeholder="entre votre age ">
   <input  type="submit" value="enregistrer" class="btn btn-primary">

</form>
</div>

@endsection