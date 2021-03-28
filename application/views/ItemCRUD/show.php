<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Vista Previa Materia</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Regresar</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID</strong>
            <?php echo $item->ID_Materia; ?>
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
            <strong>Descripcion:</strong>
            <?php echo $item->Descripcion; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Grado:</strong>
            <?php echo $item->ID_Grado; ?>
        </div>
    </div>
</div>
