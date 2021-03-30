<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listado de Materias</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('itemCRUD/create/');?>">Nuevo</a>
        </div>
    </div>
</div>


<table class="table table-bordered">
  <thead>
      <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Grado</th>
          <th width="220px">Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $item) { ?>
      <tr>
          <td><?php echo $item->ID_Materia; ?></td>
          <td><?php echo $item->Nombre; ?></td>
          <td><?php echo $item->Descripcion; ?></td>
          <td><?php echo $item->ID_Grado; ?></td>
      <td>
        <a class="btn btn-info" href="<?php echo base_url('itemCRUD/'.$item->ID_Materia) ?>"> Mostrar</a></br>
        <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/edit/'.$item->ID_Materia) ?>"> Editar</a></br>
        <form method="DELETE" action="<?php echo base_url('itemCRUD/delete/'.$item->ID_Materia);?>">
          <button type="submit" class="btn btn-danger"> Eliminar</button>
        </form>
      </td>
      </tr>
      <?php } ?>
  </tbody>


</table>
