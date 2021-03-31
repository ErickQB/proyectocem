
<!-- fila y tablas -->
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listado de Profesores</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('Profesor/create/');?>">Nuevo</a>
        </div>
    </div>
</div>


<table class="table table-bordered">
  <thead>
      <tr>
          <th>ID</th>
          <th>Correo</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th width="220px">Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $item) { ?>
      <tr>
          <td><?php echo $item->ID_Profesor; ?></td>
          <td><?php echo $item->Correo; ?></td>
          <td><?php echo $item->Nombre; ?></td>
          <td><?php echo $item->Apellido; ?></td>

      <td>
        <a class="btn btn-info" href="<?php echo base_url('Profesor/'.$item->ID_Profesor) ?>"> Mostrar</a></br>
        <a class="btn btn-primary" href="<?php echo base_url('Profesor/edit/'.$item->ID_Profesor) ?>"> Editar</a></br>
        <form method="DELETE" action="<?php echo base_url('Profesor/delete/'.$item->ID_Profesor);?>">
          <button type="submit" class="btn btn-danger"> Eliminar</button>
        </form>
      </td>
      </tr>
      <?php } ?>
  </tbody>


</table>
