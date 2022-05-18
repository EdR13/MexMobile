@extends('layouts.home')
@section('content')
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
                <th scope="col">battery</th>
                <th scope="col">fiveg_capable</th>
                <th scope="col">Release year</th>
                <th scope="col">Price</th>
                <th scope="col">Photo</th>
                <th scope="col">Acciones</th>
            </tr>     
        </thead>
        <tbody>
            @foreach($phones as $phone)
                <tr>
                    <td>{{$phone->manufacter}}</td>
                    <td>>{{$phone->color}}</</td>
                    <td>>{{$phone->os}}</</td>
                    <td>>{{$phone->model}}</</td>
                    <td>>{{$phone->name}}</</td>
                    <td>>{{$phone->storage}}</</td>
                    <td>>{{$phone->ram}}</</td>
                    <td>>{{$phone->battery}}</</td>
                    <td></td>
                    <td>{{$phone->release_year}}</td>
                    <td>{{$phone->price}}</td>
                    <td>{{$phone->photo}}</td>
                    <td>
                        <a href="/phone/{{ $phone->id }}">Ver detalle</a> |
                        <a href="/phone/{{ $phone->id }}/edit">Editar</a>
                        <form action="/phone/{{ $phone->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
@endsection