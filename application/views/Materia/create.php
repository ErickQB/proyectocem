<div class="row">
  <h1>Seleccione Grado</h1>
  <select  data-live-search="true">
    <option value="0">Grados</option>
    <?php
    foreach($dataGrado as $item){
      echo "
      <option value=".$item->ID_Grado.">".$item->Nombre."</option>
      ";
    }
    ?>
  </select>
</div>
</br>
<div class="row">
  <table id="tablaP" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Materia</th>
            <th>Descripcion</th>
            <th>ID_Grado</th>
            <th style="text-align:center">Asignar</th>
        </tr>
    </thead>
    <tbody>
     <?php foreach ($dataMateria as $item) { ?>
        <tr>
            <td><?php echo $item->Nombre; ?></td>
            <td><?php echo $item->Descripcion; ?></td>
            <td><?php echo $item->ID_Grado; ?></td>
        <td>
          <div class="checkbox" class="text-center">
            <label><input id="ch_<?php echo $item->ID_Materia ?>" type="checkbox" value=""></label>
          </div>
        <!--
        <div class="btn-group">
          <a class="btn btn-info btn-sm" href="<?php echo base_url('MateriaGrado/show/'.$item->ID_Materia) ?>"> <span class="glyphicon glyphicon-star"></span> Mostrar</a>
          <a class="btn btn-primary btn-sm" href="<?php echo base_url('MateriaGrado/edit/'.$item->ID_Materia) ?>"><span class="glyphicon glyphicon-pencil"> Editar</a>
        </div>

      </td>
      <td>
        <form method="DELETE" action="<?php echo base_url('MateriaGrado/delete/'.$item->ID_Materia);?>">
          <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"> Eliminar</button>
          </form>
        -->
        </td>
        </tr>
        <?php } ?>
    </tbody>


  </table>
</div>
<script>
$(document).ready(function() {
    $('#tablaP').DataTable({
      "order": [[ 0, "asc" ]]
    });
    var table = $('#tablaP').DataTable();

    $('select').on('change', function(e){
      console.log($(this).find("option:selected").val());
      table
        .columns( 2 )
        .search( $(this).find("option:selected").val() )
        .draw();
    });

    $('#padre').addClass('active');
    $("#ch_10").prop("checked", true);


} );
</script>
