<!-- Row es Fila  -->

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listado de Grados</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('Grado/create/');?>">Nuevo</a>
        </div>
    </div>
</div>

<!-- Tabla -->
<table class="table table-bordered">
  <thead>
      <tr>
          <th>ID</th>
          <th>Grado</th>
          <th>Descripcion</th>
          <th width="220px">Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $item) { ?>
      <tr>
          <td><?php echo $item->ID_Grado; ?></td>
          <td><?php echo $item->Nombre; ?></td>
          <td><?php echo $item->Descripcion; ?></td>
      <td>
        <a class="btn btn-info" href="<?php echo base_url('Grado/'.$item->ID_Grado) ?>"> Mostrar</a></br>
        <a class="btn btn-primary" href="<?php echo base_url('Grado/edit/'.$item->ID_Grado) ?>"> Editar</a></br>
        <form method="DELETE" action="<?php echo base_url('Grado/delete/'.$item->ID_Grado);?>">
        <button type="submit" class="btn btn-danger"> Eliminar</button>
          
        </form>
      </td>
      </tr>
      <?php } ?>
  </tbody>


</table>
