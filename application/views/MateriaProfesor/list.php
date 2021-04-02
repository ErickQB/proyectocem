<!-- fila y tablas -->

<div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('Profesor');?>">Profesores</a></li>
      <li class="breadcrumb-item active" aria-current="page">Materia</li>
    </ol>
  </nav>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listado de Materias del profesor</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('MateriaProfesor/create/'.$id);?>"><span class="glyphicon glyphicon-plus"></span>Nuevo</a>
        </div>
    </div>
</div>


<table id="tablaP" class="table table-striped table-bordered" style="width:100%">
  <thead>
      <tr>
          <th>ID</th>
          <th>ID_Profesor</th>
          <th>ID_Materia</th>
          <th width="250px" style="text-align:center">Opciones</th>
          <th width="50px" style="text-align:center">Acciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $item) { ?>
      <tr>
          <td><?php echo $item->ID_ProfesorMateria; ?></td>
          <td><?php echo $item->ID_Profesor; ?></td>
          <td><?php echo $item->ID_Materia; ?></td>


      <td>
        <div class="btn-group">
          <a class="btn btn-info btn-sm" href="<?php echo base_url('MateriaProfesor/show/'.$item->ID_ProfesorMateria) ?>"> <span class="glyphicon glyphicon-star"></span> Mostrar</a>
          <a class="btn btn-success btn-sm" href="<?php echo base_url('MateriaProfesor/edit/'.$item->ID_ProfesorMateria) ?>"> <span class="glyphicon glyphicon-user"> Editar</a>
          <a class="btn btn-primary btn-sm" href="<?php echo base_url('MateriaProfesor/update/'.$item->ID_ProfesorMateria) ?>"><span class="glyphicon glyphicon-pencil"> Editar</a>
        </div>
      </td>
      <td>
        <form method="DELETE" action="<?php echo base_url('MateriaProfesor/delete/'.$item->ID_ProfesorMateria);?>">
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
  } );
</script>
