<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Materia Del Profesor</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('MateriaProfesor');?>"> Regresar</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('MateriaProfesor/update/'.$item->ID_ProfesorMateria);?>">
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
                <strong>ID del Profesor:</strong>
                <input type="text" name="id_profesor" class="form-control" value="<?php echo $item->id_profesor; ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID de la Materia:</strong>
                <input type="text" name="id_materia" class="form-control" value="<?php echo $item->id_materia; ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>
