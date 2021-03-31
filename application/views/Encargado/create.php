<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nuevo Encargado</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="<?php echo base_url('Encargado');?>"> Regresar </a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('EncargadoCreate');?>">
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
                <input type="text" name="apellido" class="form-control" required></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo</strong>
                <textarea name="correo" class="form-control"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Num_Telefono</strong>
                <textarea name="num_telefono" class="form-control"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observaciones</strong>
                <textarea name="observaciones" class="form-control"></textarea>
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>


</form>
