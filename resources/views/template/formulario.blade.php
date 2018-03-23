
  <form method="post" action="/detalles" id="formulario">

    <div class="inbox-body">
        <!-- formulario -->
        <h3 style="margin-bottom: 25px; text-align: center;">Formulario de Envio </h3>
        <button class="mybutton btn btn-primary" type="submit">Enviar</button>
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="user" placeholder="nombre de quien recibe" required>
        </div>
        <div class="form-group">
            <label for="sel1">Selecione un proveedor:</label>
            <select class="form-control" id="sel1" name="proveedor" required>
            <option> </option>
                @foreach($proveedores as $proveedors)
                    <option value="{{$proveedors->id}}">{{$proveedors->nombre}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
          <textarea class="form-control" type="textarea" name="observacion" id="message" placeholder="Observacion" maxlength="140" rows="7"></textarea>
            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
        </div>
      <table class="table table-inbox table-hover">
        <tbody>
          @foreach($proveedor->productos as $producto)
        <tr class="">
          <td class="inbox-small-cells">
              <input type="checkbox" name="productos_ids[]" value="{{$producto->id}}" class="mail-checkbox">
          </td>
          <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
          <td class="view-message dont-show">{{$producto->nombre}}</td>
          <td class="view-message"><input type="number" name="stock[]" min="0" max="{{$producto->pivot->stock_pivot}}" value="0"></td>
          <td class="view-message inbox-small-cells"></td>
          <td class="view-message text-right">March 15</td>
          <td class="view-message text-right">
            <a href="{{asset('detalles/'.$producto->id)}}" class="btn btn-success">Detalles</a>
           </td>
        </tr>
          @endforeach
        </tbody>
      </table>
        <!-- end componente lista-item -->
    </div>
  </form>
