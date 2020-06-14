

<?php

$login = new ControladorConfig();
$login -> ctrDatauser();

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Configuracion
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Configuracion</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">










      
            <div class="box-header with-border">
              <h3 class="box-title">Datos de el usuario</h3>
            </div>


        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        
      
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name">
        </div>
        


      </div>
      <!-- /.box-body -->
      <div class="box-footer">
         <button type="button" class="btn btn-primary">Guardar</button>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->