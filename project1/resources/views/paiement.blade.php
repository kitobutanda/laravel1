@extends('./layout.master');
@section('contenu');
<p>hello from payement</p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('newp')}}">nouveau paiement</a>
   <div class="container">
       <table class="table table-bordered strip ">
           <thead>
               <th>Numero</th>
               <th>Frais</th>
               <th>Responsable</th>
           </thead>
           <tbody>
               <tr>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
           </tbody>
       </table>
   </div> 
</body>
</html>


@endsection