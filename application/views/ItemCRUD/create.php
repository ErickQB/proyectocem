<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nueva Materia</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="/Code/"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('itemCRUDCreate');?>">
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
                <strong>Descripcion</strong>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Seleccione Grado</label>
              <select class="form-control" name="id_grado">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>


</form>
