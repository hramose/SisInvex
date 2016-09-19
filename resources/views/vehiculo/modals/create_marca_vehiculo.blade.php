<!-- Modal -->
<div id="agregarmarca" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>                
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Agregar marca</h3>
          </div> 
          {!!Form::open(['route'=>'marca_vehiculo.store', 'method'=>'POST'])!!}             
            <div class="box-body">  
              <div class="form-group">
                {!!Form::label('alias', 'Alias *')!!}
                {!!Form::text('alias', null, ['class'=>'form-control', 'placeholder'=>'...'])!!}                    
              </div>
              <div class="callout callout-info">
                <p>* Campos obligatorios</p>
              </div> 
            </div>
            <div class="box-footer">
              {!!Form::submit('Agregar',['class'=>'btn btn-success'])!!}
            </div>
          {!!Form::close()!!}
        </div> 
      </div>              
    </div>
  </div>
</div>
<!-- Modal -->