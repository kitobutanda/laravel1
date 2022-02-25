@extends('./layout.master');

@section('contenu');

<div class="container">
<p>hello from etudiant</p>

   
<!-- @if(\Session::has('message'))
<div class="alert alert-primary" > 
{{\Session::get('message')}}
</div>
@endif -->

@if (\Session::has('message'))
 <div class="alert alert-primary"> {{ \Session::get('message') }} </div>
@endif
@if(\Session::has('destroy'))
<div class="alert alert-danger">
    {{\Session::get('destroy')}}
</div>
@endif
<a href="{{route('new')}}" class="btn btn-primary offset-8"> nouveau etudiant </a>
<table class="table table-bordered stripped mt-2">
    <thead>
    <tr>
        <th>Id</th>
        <th>Noms</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

    </thead>
   <tbody>
   @foreach($etud as $item)

       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->noms}}</td>
           <td>{{$item->age}}</td>
           <td>
<a href="{{'/edit_etudiant/'.$item->id}} " class="btn btn-success">edit </a>
<a href="{{'/delete_etudiant/'.$item->id}}"  class="btn btn-danger">delete</a>
           </td>
       </tr>
       @endforeach
   </tbody>
</table>



</div>


@endsection

