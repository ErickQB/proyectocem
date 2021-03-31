<!-- Encargado - Cuerpo -->
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listado de Encargados</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('Encargado/create/');?>">Nuevo</a>
        </div>
    </div>
</div>


<table class="table table-bordered">
  <thead>
      <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Num_Telefono</th>
          <th>Observaciones</th>
          <th width="220px">Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $item) { ?>
      <tr>
          <td><?php echo $item->ID_Encargado; ?></td>
          <td><?php echo $item->Nombre; ?></td>
          <td><?php echo $item->Apellido; ?></td>
          <td><?php echo $item->Correo; ?></td>
          <td><?php echo $item->Num_Telefono; ?></td>
          <td><?php echo $item->Observaciones; ?></td>

      <td>
        <a class="btn btn-info" href="<?php echo base_url('Encargado/'.$item->ID_Encargado) ?>"> Mostrar</a></br>
        <a class="btn btn-primary" href="<?php echo base_url('Encargado/edit/'.$item->ID_Encargado) ?>"> Editar</a></br>
        <form method="DELETE" action="<?php echo base_url('Encargado/delete/'.$item->ID_Encargado);?>">
          <button type="submit" class="btn btn-danger"> Eliminar</button>
        </form>
      </td>
      </tr>
      <?php } ?>
  </tbody>


</table>
