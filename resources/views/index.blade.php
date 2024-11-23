<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Biblioteca Virtual</title> 
</head> 
<body> 
<h1>Biblioteca Virtual</h1> 
<h2>Libros Disponibles</h2> 
<table> 
    
<thead> 
            <tr> 
                <th>Título</th> 
                <th>Autor</th> 
                <th>Categoría</th> 
                <th>Disponibilidad</th> 
            </tr> 
        </thead> 
        <tbody> 
            @foreach ($books as $book) 
            <tr> 
                <td>{{ $book->title }}</td> 
                <td>{{ $book->author }}</td> 
                <td>{{ $book->category }}</td> 
                <td>{{ $book->quantity > 0 ? 'Disponible' : 'No disponible' }}</td> 
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
</body> 
</html>