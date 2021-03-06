<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nuevo Alumno</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="<?php echo base_url('Alumno/'.$id);?>"> Regresar</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('Alumno/store/'.$id);?>">
    <?php
      if ($this->session->flashdata('errors')){
          echo '<div class="alert alert-danger">';
          echo $this->session->flashdata('errors');
          echo "</div>";
      }
    ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre</strong>
                <input type="text" name="nombre" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Apellido</strong>
              <input type="text" name="apellido" class="form-control" required>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Correo</strong>
              <input type="text" name="correo" class="form-control" required>
          </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>

    <div class="form-group" hidden>
        <input type="text" name="id_encargado" value="<?php echo $id ?>" class="form-control">
    </div>
</form>
