<!doctype html>
<html lang="en">

<head>
  <title>Pagina PHP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <h1>Formulario empleados</h1>
    <div class="container">
        <form class="d-flex">
            <div class="col">
                <div class="mb-3">
                    <label for="lbl_codigo" class="form-label"><b>Código</b></label>
                    <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" placeholder="Código: E001" required>
                </div>

                <div class="mb-3">
                    <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
                    <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="Nombre1 Nombre2" required>
                </div>

                <div class="mb-3">
                    <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
                    <input type="text" name="txt_apellidos" id="txt_apellidos" class="form-control" placeholder="Apellido1 Apellido2" required>
                </div>

                <div class="mb-3">
                    <label for="lbl_direccion" class="form-label"><b>Dirección</b></label>
                    <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="Guatemala, Villa Canales ..." required>
                </div>

                <div class="mb-3">
                    <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
                    <input type="number" name="txt_number" id="txt_number" class="form-control" placeholder="22222222" required>
                </div>

                <div class="mb-3">
                    <label for="lbl_puesto" class="form-label"><b>Puesto</b></label>
                    <select class="form-select form-select-lg" name="drop_puesto" id="drop_puesto">
                        <option selected>--- Puesto ---</option>
                        <option value=1>Puesto 1</option>
                        <option value=2>Puesto 2</option>
                        <option value=3>Puesto 3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="lbl_fn" class="form-label"><b>Fecha nacimiento</b></label>
                    <input type="date" name="txt_fn" id="txt_fn" class="form-control" required>
                </div>

                <div class="mb-3">
                    <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
                </div>
            </div>
        </form>

        
        <table class="table table-striped table-inverse table-responsive">
            <thead class="table-inverse">
                <tr>
                    <th>Código</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Puesto</th>
                    <th>Nacimiento</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr class="table-primary" >
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                    <tr class="table-primary">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
        
        

    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>