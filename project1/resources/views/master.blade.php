<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#menu {
background-color: red;
  
}
#menu li{
    display:inline-block;
    
}
#menu li a {
    text-decoration:none;
}
    </style>
</head>
<body>
    <!-- menu  -->
    <ul id="menu ">
        <li><a href="/etudiant">etudiant</a></li>
        <li><a href="/payement">payement</a></li>
    </ul>
    <!-- fin menu -->


    @yield('contenu')

</body>
</html>