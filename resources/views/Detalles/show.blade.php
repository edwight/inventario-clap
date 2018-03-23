@extends('template.layout')
    @section('title', 'Home')
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
                         <div class="receipt-main col-xs-12 col-sm-12 col-md-12">
            <div class="row">
          <div class="receipt-header col-sm-12 col-xs-12">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="receipt-left">
                <img class="img-responsive" alt="iamgurdeeposahan" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" style="width: 71px; border-radius: 43px;">
              </div>
            </div>
          <div class="col-xs-6 col-sm-6 col-md-6 text-right">
            <div class="receipt-right">
              <h5>enviado {{$detalle->proveedor->nombre}}</h5>
              <p>{{$detalle->created_at}} <i class="fa fa-time"></i></p>
              <h5>recibido {{$detalle->proveedor->nombre}}</h5>
              <p>{{$detalle->updated_at}} <i class="fa fa-time"></i></p>
              <p>info@gmail.com <i class="fa fa-envelope-o"></i></p>
              <p>Australia <i class="fa fa-location-arrow"></i></p>
            </div>
          </div>
        </div>
            </div>
      
      <div class="row">
        <div class="receipt-header receipt-header-mid">
          <div class="col-xs-8 col-sm-8 col-md-8 text-left">
            <div class="receipt-right">
              <h5>Gurdeep Singh<small>  |   Lucky Number : 156</small></h5>
              <p><b>Mobile :</b> +91 12345-6789</p>
              <p><b>Email :</b> info@gmail.com</p>
              <p><b>Address :</b> Australia</p>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="receipt-left">
              <h1>Receipt</h1>
            </div>
          </div>
        </div>
            </div>
      
                          <div>
                          <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>Description</th>
                                  <th>Unidad</th>
                                  <th>Stock</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($detalle->productos as $producto)
                              <tr>
                                  <td class="col-md-6">{{$producto->nombre}}</td>
                                  <td class="col-md-3">{{$producto->unidad}}</td>
                                  <td class="col-md-3"><i class="fa fa-inr"></i> {{$producto->stock}}</td>
                              </tr>
                            @endforeach
                              <tr>
                                <td></td>
                                  <td class="text-right">
                                    <p>
                                        <strong>Total Amount: </strong>
                                    </p>
                                    <p>
                                        <strong>Late Fees: </strong>
                                    </p>
                                    <p>
                                        <strong>Payable Amount: </strong>
                                    </p>
                                    <p>
                                        <strong>Balance Due: </strong>
                                    </p>
                                  </td>
                                  <td>
                                    <p>
                                        <strong><i class="fa fa-inr"></i> 65,500/-</strong>
                                    </p>
                                    <p>
                                        <strong><i class="fa fa-inr"></i> 500/-</strong>
                                    </p>
                                    <p>
                                        <strong><i class="fa fa-inr"></i> 1300/-</strong>
                                    </p>
                                      <p>
                                        <strong><i class="fa fa-inr"></i> 9500/-</strong>
                                    </p>
                                  </td>
                                </tr>
                              <tr>
                                 <td></td>
                                  <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                  <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> 31.566/-</strong></h2></td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                  <div class="row">
                  <div class="receipt-header receipt-header-mid receipt-footer">
                    <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                      <div class="receipt-right">
                        <p><b>Date :</b> 15 Aug 2016</p>
                        <h5 style="color: rgb(140, 140, 140);">Thank you for your business!</h5>
                      </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="receipt-left">
                        <h1>Signature</h1>
                      </div>
                    </div>
                  </div>
                </div>  
              </div> 
                          <!-- end componente lista-item -->
            </div>
          </aside>
        </div>
      </div>
    @endsection
    @section('script')
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    @endsection
    @section('style')
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

      <style type="text/css">
        .text-danger strong {
        color: #9f181c;
    }
    .receipt-main {
      background: #ffffff none repeat scroll 0 0;
      border-bottom: 12px solid #333333;
      border-top: 12px solid #9f181c;
      margin-top: 50px;
      margin-bottom: 50px;
      padding: 40px 30px !important;
      position: relative;
      box-shadow: 0 1px 21px #acacac;
      color: #333333;
      font-family: open sans;
    }
    .receipt-main p {
      color: #333333;
      font-family: open sans;
      line-height: 1.42857;
    }
    .receipt-footer h1 {
      font-size: 15px;
      font-weight: 400 !important;
      margin: 0 !important;
    }
    .receipt-main::after {
      background: #414143 none repeat scroll 0 0;
      content: "";
      height: 5px;
      left: 0;
      position: absolute;
      right: 0;
      top: -13px;
    }
    .receipt-main thead {
      background: #414143 none repeat scroll 0 0;
    }
    .receipt-main thead th {
      color:#fff;
    }
    .receipt-right h5 {
      font-size: 16px;
      font-weight: bold;
      margin: 0 0 7px 0;
    }
    .receipt-right p {
      font-size: 12px;
      margin: 0px;
    }
    .receipt-right p i {
      text-align: center;
      width: 18px;
    }
    .receipt-main td {
      padding: 9px 20px !important;
    }
    .receipt-main th {
      padding: 13px 20px !important;
    }
    .receipt-main td {
      font-size: 13px;
      font-weight: initial !important;
    }
    .receipt-main td p:last-child {
      margin: 0;
      padding: 0;
    } 
    .receipt-main td h2 {
      font-size: 20px;
      font-weight: 900;
      margin: 0;
      text-transform: uppercase;
    }
    .receipt-header-mid .receipt-left h1 {
      font-weight: 100;
      margin: 34px 0 0;
      text-align: right;
      text-transform: uppercase;
    }
    .receipt-header-mid {
      margin: 24px 0;
      overflow: hidden;
    }
    
    #container {
      background-color: #dcdcdc;
    }
      </style>
    @endsection