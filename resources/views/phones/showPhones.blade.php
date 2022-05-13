<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phones</title>
</head>
<body>
    <h1>List oh phones</h1>
    <a href="/phone/create" class="btn btn-primary">Agregar nuevo teléfono</a>
    <table>
        <thead>
            <tr>
                <th scope="col">Manufacter</th>
                <th scope="col">Color</th>
                <th scope="col">OS</th>
                <th scope="col">Model</th>
                <th scope="col">Name</th>
                <th scope="col">Storage</th>
                <th scope="col">RAM</th>
                <th scope="col">Batery</th>
                <th scope="col">5G_Capable</th>
                <th scope="col">Release year</th>
                <th scope="col">Price</th>
                <th scope="col">Photo</th>
                <th scope="col">Acciones</th>
            </tr>     
        </thead>
        <tbody>
                <tr>
                    <td>{{$phonephone->manufacter}}</td>
                    <td>>{{$phone->color}}</</td>
                    <td>>{{$phone->os}}</</td>
                    <td>>{{$phone->model}}</</td>
                    <td>>{{$phone->name}}</</td>
                    <td>>{{$phone->storage}}</</td>
                    <td>>{{$phone->ram}}</</td>
                    <td>>{{$phone->batery}}</</td>
                      
                    <td>{{$phone->release_year}}</td>
                    <td>{{$phone->price}}</td>
                    <td>{{$phone->photo}}</td>
                </tr>
        </tbody>
    </table>
</body>
</html>