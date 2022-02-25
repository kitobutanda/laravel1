@extends('./layout.master')
@section('contenu')
 <form action="{{ Route('update_etudiant')}}" method="post">
     @csrf
     <input type="hidden" value="{{$etud->id}}" name="id">
     <label for="">Noms</label>
     <input type="text" name="noms" value={{$etud->noms}}><br>
     <label for="">Age</label>
     <input type="number"name="age" value={{$etud->age}}>
     <input type="submit" value="Modifier" class="btn btn-primary">
 </form>

@endsection