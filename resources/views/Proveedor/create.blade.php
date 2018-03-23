@extends('template.layout')
@section('title', 'Proveedor Create')
    @section('content')
      <div class="container">
        <div class="mail-box">
          @include('template.aside')
          <aside class="lg-side">
              <div class="inbox-head">
                  <h3>Lista de Producto</h3>
                  <form action="#" class="pull-right position">
                    <div class="form-group">
                    </div>
                      <div class="input-append">
                          <input type="text" class="sr-input" placeholder="Buscar">
                          <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                      </div>
                  </form>
              </div>
              <div class="inbox-body">
                
                 <div class="mail-option">
                     <div class="chk-all">
                         <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                         <div class="btn-group">
                             <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                 All
                                 <i class="fa fa-angle-down "></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li><a href="#"> None</a></li>
                                 <li><a href="#"> Read</a></li>
                                 <li><a href="#"> Unread</a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="btn-group">
                         <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                             <i class=" fa fa-refresh"></i>
                         </a>
                     </div>
                     <div class="btn-group hidden-phone">
                         <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                             More
                             <i class="fa fa-angle-down "></i>
                         </a>
                         <ul class="dropdown-menu">
                             <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                             <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                             <li class="divider"></li>
                             <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                         </ul>
                     </div>
                     <div class="btn-group">
                         <a data-toggle="dropdown" href="#" class="btn mini blue">
                             Move to
                             <i class="fa fa-angle-down "></i>
                         </a>
                         <ul class="dropdown-menu">
                             <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                             <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                             <li class="divider"></li>
                             <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                         </ul>
                     </div>
                     
                     <ul class="unstyled inbox-pagination">
                         <li><span>1-50 of 234</span></li>
                         <li>
                             <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                         </li>
                         <li>
                             <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                         </li>
                     </ul>
                 </div>
                 <!-- componente lista-item -->
                  <div class="row">
                    <div class="form-area col-lg-12">  
                      <form role="form" action="/productos" method="post">
                            <br style="clear:both">
                            <h3 style="margin-bottom: 25px; text-align: center;">Formulario de Creación</h3>
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label>Precio:</label>
                                <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
                            </div>
                            <div class="form-group">
                                <label>cantidad:</label>
                                <input type="text" class="form-control" id="stock" name="stock" placeholder="cantidad">
                            </div>
                            <div class="form-group">
                                <label>Unidad:</label>
                                <input type="text" class="form-control" id="unidad" name="unidad" placeholder="Unidad">
                            </div>
                            <div class="form-group">
                                <label>Catgoria:</label>
                                <select id="categoria" name="categoria" class="form-control">
                                  <option>selecione una categoria</option>
                                  @foreach($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Marca:</label>
                                <select id="marca" name="marca" class="form-control">
                                  <option>selecione una marca</option>
                                  @foreach($marcas as $marca)
                                    <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>   
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary pull-right">Submit Form</button>
                      </form>
                    </div>
                  </div>
                  <!-- end componente lista-item -->
              </div>
          </aside>
        </div>
      </div>
    @endsection
 