<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phones</title>
</head>
<body>
    <h1>Agregar teléfono</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($persona)
        <form action="/phone/{{ $phone->id }}" method="POST"> {{-- Actualizar (update) --}}
        @method('PATCH')
    @else
        <form action="/phone" method="POST"> {{-- Crear --}}
    @csrf
        <br>
        <div class="mb-3">
            <label for='manufacter'>Manufacter:</label>
            <input type="text" name="manufacter" class="form-control" tabindex="1" value="{{ old('manufacter') ?? $phone->manufacter ?? ''}}"> 
        </div>
        @error('manufacter')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for='color'>Color:</label>
            <input type="text" id="color" name="color" class="form-control" tabindex="2" value="{{ old('color') ?? $phone->color ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='os'>OS:</label>
            <input type="text" name="os" step="0.1" class="form-control" tabindex="3" value="{{ old('os') ?? $phone->os ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='model'>Model:</label>
            <input type="text" name="model" step="0.1" class="form-control" tabindex="4" value="{{ old('model') ?? $phone->model ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='name'>Name:</label>
            <input type="text" name="name" step="0.1" class="form-control" tabindex="5" value="{{ old('name') ?? $phone->name ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='storage'>Storage:</label>
            <input type="number" name="storage" step="0.1" class="form-control" tabindex="6" value="{{ old('storage') ?? $phone->storage ?? ''}}">
        </div>
        <div class="mb-3">
        <label for='ram'>RAM:</label>
        <input type="number" name="ram" step="0.1" class="form-control" tabindex="7" value="{{ old('ram') ?? $phone->ram ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='batery'>Batery:</label>
            <input type="number" id="batery" name="batery" class="form-control" tabindex="8" value="{{ old('batery') ?? $phone->batery ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='release_year'>5g capable:</label>  
        </div>
<!--
      
-->
        <div class="mb-3">
            <label for='release_year'>Release year:</label>
            <input type="number" name="release_year" step="0.1" class="form-control" tabindex="10" value="{{ old('release_year') ?? $phone->release_year ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='price'>Price:</label>
            <input type="number" name="price" step="0.1" class="form-control" tabindex="11" value="{{ old('price') ?? $phone->price ?? ''}}">
        </div>
        <div class="mb-3">
            <label for='photo'>Photo:</label>
            <input type="text" name="photo" step="0.1" class="form-control" tabindex="12" value="{{ old('photo') ?? $phone->photo ?? ''}}">
        </div>
        <input type="submit" value="Guardar" class="btn btn-primary" tabindex="13" />
    </form>
</body>
</html>