@extends('./layout.master');

@section('contenu');

<div class="container">
<p>hello from etudiant</p>

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
<a href="{{'/edit_etudiant/'.$item->id}}">edit |</a>
<a href="#" >delete</a>
           </td>
       </tr>
       @endforeach
   </tbody>
</table>

<a href="{{route('new')}}"> nouveau etudiant </a>

</div>


@endsection

