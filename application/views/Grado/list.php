<!-- Row es Fila  -->
<div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Grado</li>
    </ol>
  </nav>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listado de Grados</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('Grado/create/');?>"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
        </div>
    </div>
</div>

<!-- Tabla -->
<table id="tablaP" class="table table-striped table-bordered" style="width:100%">
  <thead>
      <tr>
          <th>Grado</th>
          <th>Descripcion</th>
          <th width="260px" style="text-align:center">Opciones</th>
          <th width="50px" style="text-align:center">Acciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $item) { ?>
      <tr>
          <td><?php echo $item->Nombre; ?></td>
          <td><?php echo $item->Descripcion; ?></td>
      <td>
      <div class="btn-group">
        <a class="btn btn-info btn-sm" href="<?php echo base_url('Grado/'.$item->ID_Grado) ?>"> <span class="glyphicon glyphicon-star"></span> Mostrar</a>
        <a class="btn btn-success btn-sm" href="<?php echo base_url('MateriaGrado/'.$item->ID_Grado) ?>"> <span class="glyphicon glyphicon-user"></span> Materia</a>
        <a class="btn btn-primary btn-sm" href="<?php echo base_url('Grado/edit/'.$item->ID_Grado) ?>"><span class="glyphicon glyphicon-pencil"> Editar</a>
      </div>
    </td>
    <td>
      <form method="DELETE" action="<?php echo base_url('Grado/delete/'.$item->ID_Grado);?>">
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
      $('#grado').addClass('active');
  } );
</script>
