
<!-- Modal -->
<div class="modal fade" id="ahorro-{{$deseo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


  <div class="modal-dialog"  role="document">
    <div class="modal-content " style="margin-top: 120px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$deseo->nombre}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div id="container" align="center">
      
 <form action="{{route('ahorrar',['post'=>$deseo->id])}}" method="POST">
 {{Form::token()}}

  
     
</div>
  <div class="form-group">
    <label for="cuota">Cantidad a ahorrar</label>
    <input type="number" class="form-control" id="cuota" placeholder="Cuota">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
  </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



