<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Materia</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('MateriaGrado');?>"> Regresar</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('MateriaGrado/update/'.$item->ID_Materia.'/'.$item->ID_Grado);?>">
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
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" value="<?php echo $item->Nombre; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                <textarea name="descripcion" class="form-control"><?php echo $item->Descripcion; ?></textarea>
            </div>
            <div class="form-group" hidden>
                <textarea name="id_grado" class="form-control"><?php echo $item->ID_Grado; ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>
