@extends('layout.master');
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
<form id="monformulaire">
 @csrf
    <input type="text" name="noms" placeholder="entre un nom " id="noms">
    <input type="number" name="age" placeholder="entre votre age " id="age">
   <input  type="submit" value="enregistrer" class="btn btn-primary">

</form>
</div>

@endsection

@section('monscript')
<script>
$('#monformulaire').submit(function(event){
   //pouir dire au navigateur de ne pas faire cew qu'il fait d'habitude
   event.preventDefault();
   //mais de ce qui suis
   $.ajax({ 
      url:'{{ route("store_etudiants") }}',
      method:'POST',
      data: new FormData(this),
      processData:false,
      contentType:false,
      cache:false,
      headers:{'X-CSRF-Token':$('meta[name="csrf-token"]').attr('content')},
      success:function(data)
      {
         alert('inserted succefully');
         $('#monformulaire')[0].reset();
      }
   });
});
</script>

@endsection