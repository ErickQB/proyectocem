<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Vista Previa Alumno</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('Alumno');?>"> Regresar</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID</strong>
            <?php echo $item->ID_Alumno; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            <?php echo $item->Nombre; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellido:</strong>
            <?php echo $item->Apellido; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Correo:</strong>
            <?php echo $item->Correo; ?>
        </div>
    </div>




</div>
