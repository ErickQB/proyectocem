<!-- Encargado - Cuerpo -->

<div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Padres</li>
    </ol>
  </nav>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listado de Padres</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('Encargado/create/');?>">Nuevo</a>
        </div>
    </div>
</div>


<table id="tablaP" class="table table-striped table-bordered" style="width:100%">
  <thead>
      <tr>

          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Num_Telefono</th>
          <th>Observaciones</th>

          <th width="250px" style="text-align:center">Opciones</th>
          <th width="50px" style="text-align:center">Acciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $item) { ?>
      <tr>

          <td><?php echo $item->Nombre; ?></td>
          <td><?php echo $item->Apellido; ?></td>
          <td><?php echo $item->Correo; ?></td>
          <td><?php echo $item->Num_Telefono; ?></td>
          <td><?php echo $item->Observaciones; ?></td>

          <td>
            <div class="btn-group">
              <a class="btn btn-info btn-sm" href="<?php echo base_url('Encargado/'.$item->ID_Encargado) ?>"> <span class="glyphicon glyphicon-star"></span> Mostrar</a>
              <a class="btn btn-success btn-sm" href="<?php echo base_url('Alumno/'.$item->ID_Encargado) ?>"> <span class="glyphicon glyphicon-user"></span> Alumno</a>
              <a class="btn btn-primary btn-sm" href="<?php echo base_url('Encargado/edit/'.$item->ID_Encargado) ?>"><span class="glyphicon glyphicon-pencil"> Editar</a>
            </div>
          </td>
          <td>
            <form method="DELETE" action="<?php echo base_url('Encargado/delete/'.$item->ID_Encargado);?>">
              <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"> Eliminar</button>
            </form>
          </td>
          </tr>

      <?php } ?>
  </tbody>


</table>

<script>
  $(document).ready(function() {
      $('#tablaP').DataTable({
        "order": [[ 1, "asc" ]]
      });
      $('#padre').addClass('active');
  } );
</script>
