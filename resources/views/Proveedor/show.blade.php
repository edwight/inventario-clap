@extends('template.layout')
    @section('title', 'Proveedor Detalles')
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
                 
                  <!-- componente show-->
                  <div class="col-lg-12 col-sm-12">
                    <div class="card hovercard">
                        <div class="card-background">
                            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
                            <!-- http://lorempixel.com/850/280/people/9/ -->
                        </div>
                        <div class="useravatar">
                            <img alt="" src="http://lorempixel.com/100/100/people/9/">
                        </div>
                        <div class="card-info"> <span class="card-title">{{$proveedor->nombre}}</span>

                        </div>
                    </div>
                    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <div class="hidden-xs">Formulario</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <div class="hidden-xs">Producto</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="favorites" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <div class="hidden-xs">Reporte</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <div class="hidden-xs">Usuarios</div>
                            </button>
                        </div>
                    </div>

                    <div class="well">
                      <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                          <h3>formulario </h3>
                           
                            @include('template.formulario',['proveedor'=>$proveedor,'proveedores'=>$proveedores])

                        </div>
                        <div class="tab-pane fade in" id="tab2">
                          <h3>productos lista</h3>
                          
                          <table class="table table-inbox table-hover">
                            <tbody>
                            @foreach($detalles as $detalle)
                            <tr class="">
                            <td class="inbox-small-cells">
                              @if($detalle->enviado)
                              <i class="fa fa-arrow-circle-up"></i>
                              @endif
                            </td>
                             
                            <td class="view-message dont-show">{{$detalle->proveedor->nombre}}</td>
                            <td class="view-message">{{$detalle->stock}}</td>
                            <td class="view-message inbox-small-cells"></td>
                              <td class="view-message text-right">
                                <a href="{{asset('detalles/'.$detalle->id)}}" class="btn btn-success">Detalles</a>
                               </td>
                              <td class="view-message text-right">{{$detalle->created_at}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                          </table>
                        </div>

                        <div class="tab-pane fade in" id="tab3">
                          <h3>This is tab 2</h3>
                          <div id="highcharts"></div>
                        </div>
                        <div class="tab-pane fade in" id="tab4">
                          @foreach($proveedor->users as $users)
                            <p>
                              nombre:{{$users->name}}
                              - correo:{{$users->email}}
                            </p>
                          @endforeach
                        </div>
                      </div>
                    </div>
                    
                    </div>
                  <!-- end componente show -->

              </div>
          </aside>
        </div>
      </div>
    @endsection

    @section('style')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <style type="text/css">
        /* USER PROFILE PAGE */
         .card {
            margin-top: 20px;
            padding: 30px;
            background-color: rgba(214, 224, 226, 0.2);
            -webkit-border-top-left-radius:5px;
            -moz-border-top-left-radius:5px;
            border-top-left-radius:5px;
            -webkit-border-top-right-radius:5px;
            -moz-border-top-right-radius:5px;
            border-top-right-radius:5px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .card.hovercard {
            position: relative;
            padding-top: 0;
            overflow: hidden;
            text-align: center;
            background-color: #fff;
            background-color: rgba(255, 255, 255, 1);
        }
        .card.hovercard .card-background {
            height: 130px;
        }
        .card-background img {
            -webkit-filter: blur(25px);
            -moz-filter: blur(25px);
            -o-filter: blur(25px);
            -ms-filter: blur(25px);
            filter: blur(25px);
            margin-left: -100px;
            margin-top: -200px;
            min-width: 130%;
        }
        .card.hovercard .useravatar {
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
        }
        .card.hovercard .useravatar img {
            width: 100px;
            height: 100px;
            max-width: 100px;
            max-height: 100px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.5);
        }
        .card.hovercard .card-info {
            position: absolute;
            bottom: 14px;
            left: 0;
            right: 0;
        }
        .card.hovercard .card-info .card-title {
            padding:0 5px;
            font-size: 20px;
            line-height: 1;
            color: #262626;
            background-color: rgba(255, 255, 255, 0.1);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        .card.hovercard .card-info {
            overflow: hidden;
            font-size: 12px;
            line-height: 20px;
            color: #737373;
            text-overflow: ellipsis;
        }
        .card.hovercard .bottom {
            padding: 0 20px;
            margin-bottom: 17px;
        }
        .btn-pref .btn {
            -webkit-border-radius:0 !important;
        }


      </style>
      <style>
        .fa.fa-arrow-circle-down{
          color:red;
        }
        .fa.fa-arrow-circle-up{
          color:green;
        }
      </style>
    @endsection
    @section('script')
    <script>
      $(document).ready(function() {
      $(".container .lg-side .btn-pref .btn").click(function () {
          $(".container .lg-side .btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
          // $(".tab").addClass("active"); // instead of this do the below 
          $(this).removeClass("btn-default").addClass("btn-primary");   
      });
      });
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript">
      Highcharts.chart('highcharts', {

        title: {
            text: 'Solar Employment Growth by Sector, 2010-2016'
        },

        subtitle: {
            text: 'Source: thesolarfoundation.com'
        },

        yAxis: {
            title: {
                text: 'Number of Employees'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 2010
            }
        },

        series: [{
            name: 'Installation',
            data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
        }, {
            name: 'Manufacturing',
            data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
        }, {
            name: 'Sales & Distribution',
            data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
        }, {
            name: 'Project Development',
            data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
        }, {
            name: 'Other',
            data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });
    </script>
    @endsection