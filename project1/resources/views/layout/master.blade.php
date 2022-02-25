<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
    <style>
#menu {
background-color: red;
  
}
#menu li{
    display:inline-block
    
}
#menu li a {
    text-decoration:none
}
    </style>
</head>
<body>
    <!-- menu  -->
    <div class="container">


        <div class="navbar navbar-expand fixed-top">
        <ul id="menu " class="navbar nav">
        <li class="nav-item"><a href="{{route('new')}}" class="nav-link">etudiant</a></li>
     
        <li class="nav-item"><a href="{{route('paiement')}}" >paiement</a></li>
    </ul>
        </div>


    </div>
   
    <!-- fin menu -->


    @yield('contenu')

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>