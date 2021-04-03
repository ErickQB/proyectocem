<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Asignar Materia</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="<?php echo base_url('MateriaProfesor/'.$id);?>" > Regresar</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('MateriaProfesor/store/'.$id);?>">
    <?php
      if ($this->session->flashdata('errors')){
          echo '<div class="alert alert-danger">';
          echo $this->session->flashdata('errors');
          echo "</div>";
      }
    ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" hidden>
                <strong>ID del Profesor:</strong>
                <input type="text" name="id_profesor" value="<?php echo $id?>" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID de la Materia:</strong>
                <input type ="text" name="id_materia" class="form-control" required></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
      </div>
</form>
