<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
       
    </head>
    <body>
        <div class='container'>
        <div class='row'>
        <div class='col-sm-8 mx-auto'>
            <div class="card"> 
                <label>Registro Proveedor</label>
                <form action="{{ route('providers.store')}}" method="POST">
                <div class="form-row">
                    <div class="col-sm-3">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre">
                    </div>
                    <div class="col-auto">
                        @csrf
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </div>
                </form>
            </div>
            <label>PROVEEDORES:</label>
          <table class='table' title="Productos"> 
          <thead>
              <tr>
                 <th>Nombre</th>
                 <td>&nbsp;</td>
              </tr>
          </thead>
          <tbody>
              @foreach($providers as $provider)
              <tr>
                  <td>{{ $provider->nombre}}</td>
                  <td>
                      <form action="{{ route('providers.destroy', $provider)}}" method="POST">
                         @method('DELETE')
                         @csrf
                         <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm('Desea eliminar ?')">
                      </form>
                  </td>

              </tr>
              @endforeach
          </tbody>
          </table> 
        </div> 
        <div class='col-sm-8 mx-auto'> 
            <div class="card"> 
                <label>Registro Producto</label>
                <form action="{{ route('products.store')}}" method="POST">
                <div class="form-row">
                    <div class="col-sm-3">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre">
                    </div>
                    <div class="col-sm-4">
                        <input  name="precio" class="form-control" placeholder="precio">
                    </div>
                    <div class="col-sm-3">
                        <input  name="cantidad" class="form-control" placeholder="cantidad">
                    </div>
                    <div class="col-sm-3">
                        <select name="provider_id" id="provider_id" class="form-control">
                            @foreach($providers as $provider)
                              <option value="{{ $provider->id }}">{{ $provider->nombre }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col-auto">
                        @csrf
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </div>
                </form>
            </div>
          <label>PRODUCTOS:</label>
          <table class='table' title="Productos"> 
          <thead>
              <tr>
                 <th>Nombre</th>
                 <th>precio</th>
                 <th>cantidad</th>
                 <th>proveedor</th>
                 <td>&nbsp;</td>
              </tr>
          </thead>
          <tbody>
              @foreach($products as $product)
              <tr>
                  <td>{{ $product->nombre}}</td>
                  <td>{{ $product->precio}}</td>
                  <td>{{ $product->cantidad}}</td>
                  <td>{{ $product->provider->nombre}}</td>
                  <td>
                      <form action="{{ route('products.destroy', $product)}}" method="POST">
                         @method('DELETE')
                         @csrf
                         <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm('Desea eliminar ?')">
                      </form>
                  </td>

              </tr>
              @endforeach
          </tbody>
          </table> 
        </div> 
        </div> 
        </div>
         
     </body>
</html>
