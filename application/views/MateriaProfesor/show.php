<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Vista Previa Materia del Profesor</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('MateriaProfesor/1');?>"> Regresar</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID</strong>
            <?php echo $item->ID_ProfesorMateria; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID del Profesor:</strong>
            <?php echo $item->ID_Profesor; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID de la Materia:</strong>
            <?php echo $item->ID_Materia; ?>
        </div>
    </div>
</div>
