@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-black elevation-1">
                  <small>  % 10</small>
                </span>                    
  
                <div class="info-box-content">
                  <span class="info-box-number">

                  </span>
                  <span class="info-box-text">TOTAL REVENUE <h6 class="description-percentage text-success" ><i class="fas fa-caret-up"></i> 17%</h6> </span>
                  <span class="info-box-text">Rp 100.120.000</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-black elevation-1">
                  <small>  % 70</small>
                </span>                    
  
                <div class="info-box-content">
                  <span class="info-box-number">

                  </span>
                  <span class="info-box-text">TOTAL COST <h6 class="description-percentage text-red" ><i class="fas fa-caret-down"></i> 17%</h6> </span>
                  <span class="info-box-text">Rp 860.120.000</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-black elevation-1">
                  <small>  % 40</small>
                </span>                    
  
                <div class="info-box-content">
                  <span class="info-box-number">

                  </span>
                  <span class="info-box-text">TOTAL PROFIT <h6 class="description-percentage text-success" ><i class="fas fa-caret-up"></i> 17%</h6> </span>
                  <span class="info-box-text">Rp 135,210.43</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon bg-black elevation-1">
                    <small>  % 10</small>
                  </span>                    
    
                  <div class="info-box-content">
                    <span class="info-box-number">

                    </span>
                    <span class="info-box-text">GOAL COMPLETIONS <h6 class="description-percentage text-success" ><i class="fas fa-caret-up"></i> 17%</h6> </span>
                    <span class="info-box-text">Rp 35,210.43</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>

          </div>
          <!-- /.row -->
  
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">
                    Modal : Rp 550.000.000 |               
                    Modal Terpakai : Rp 550.000.000 |
                    Modal Sisa : Rp 250.000.000
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: {{ ($totalMenus / 100) * 100 }}%"></div>
                    </div>
                  </h5>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-wrench"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                        <a class="dropdown-divider"></a>
                        <a href="#" class="dropdown-item">Separated link</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
  
                      <div class="">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-chart-pie mr-1"></i>
                              
                              <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link active today-chart" href="#today-chart" data-toggle="tab">Today</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link week-chart" href="#week-chart" data-toggle="tab">week</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link month-chart" href="#month-chart" data-toggle="tab">month</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#q1-chart" data-toggle="tab">Q1</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#q2-chart" data-toggle="tab">Q2</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#q3-chart" data-toggle="tab">Q3</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#q4-chart" data-toggle="tab">Q4</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#6-month-chart" data-toggle="tab">6 month</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#year-chart" data-toggle="tab">this year</a>
                                  </li>
                                </ul>
                              </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                              <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active today-chart-pane" id="today-chart" style="position: relative; height: 300px;">
                                    <canvas id="todayChart"></canvas>
                                 </div>
                                <div class="chart tab-pane week-chart-pane" id="week-chart" style="position: relative; height: 300px;">
                                    this week chart
                                </div>
                                <div class="chart tab-pane month-chart-pane" id="month-chart" style="position: relative; height: 300px;">
                                    this month chart
                                </div>
                                <div class="chart tab-pane 6-month-chart-pane" id="6-month-chart" style="position: relative; height: 300px;">
                                    6 month chart
                                </div>
                                <div class="chart tab-pane year-chart-pane" id="1-year-chart" style="position: relative; height: 300px;">
                                    this year chart
                                </div>
                              </div>
                            </div><!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                      </div>
                      <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->

                

                    <div class="col-md-4 goal-completion-today">
                      <p class="text-center">
                        <strong>Goal Completion <span style="background-color:purple; color:white;">Today</span> </strong>
                      </p>
  
                      <div class="progress-group">
                        Add Menus to List Menu
                        <span class="float-right"><b>{{ $totalMenus }}</b>/1000</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" style="width: {{ ($totalMenus / 100) * 100 }}%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
  
                      <div class="progress-group">
                        Failed / Unpaid Customer Purchase Online
                        <span class="float-right"><b>{{ $paymentOnlineStatusFailedToday }}</b>/{{$paymentOnlineStatusToday}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-danger" style="width: {{ ($totalMenus / 100) * 100 }}%"></div>
                        </div>
                      </div>
  
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Complete Customer Order Online</span>
                        <span class="float-right"><b>{{$paymentOnlineStatusPaidToday}}</b>/{{$paymentOnlineStatusToday}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-success" style="width: 60%"></div>
                        </div>
                      </div>
  
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        On Delivery Customer Order Online
                        <span class="float-right"><b> {{ $paymentOnlineStatusOndeliveryToday }} </b>/{{$paymentOnlineStatusToday}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-warning" style="width: 50%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
                    </div>

                    
                    <div class="col-md-4 goal-completion-week">
                      <p class="text-center">
                        <strong>Goal Completion <span style="background-color:red; color:white;">Week</span></strong>
                      </p>
  
                      <div class="progress-group">
                        Add Menus to List Menu
                        <span class="float-right"><b>{{ $totalMenus }}</b>/{{$paymentOnlineStatusFailedWeek}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" style="width: {{ ($totalMenus / 100) * 100 }}%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
  
                      <div class="progress-group">
                        Failed Customer Purchase Online
                        <span class="float-right"><b>{{ $paymentOnlineStatusFailedToday }}</b>/{{$paymentOnlineStatusFailedWeek}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-danger" style="width: {{ ($totalMenus / 100) * 100 }}%"></div>
                        </div>
                      </div>
  
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Complete Customer Order Online</span>
                        <span class="float-right"><b>480</b>/{{$paymentOnlineStatusFailedWeek}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-success" style="width: 60%"></div>
                        </div>
                      </div>
  
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        On Delivery Customer Order Online
                        <span class="float-right"><b>250</b>/{{$paymentOnlineStatusFailedToday}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-warning" style="width: 50%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
                    </div>

                    
                    <div class="col-md-4 goal-completion-month">
                      <p class="text-center">
                        <strong>Goal Completion <span style="background-color:red; color:white;">Week</span></strong>
                      </p>
  
                      <div class="progress-group">
                        Add Menus to List Menu
                        <span class="float-right"><b>{{ $totalMenus }}</b>/1000</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" style="width: {{ ($totalMenus / 100) * 100 }}%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
  
                      <div class="progress-group">
                        Failed Customer Purchase Online
                        <span class="float-right"><b>{{ $paymentOnlineStatusFailedToday }}</b>/{{$paymentOnlineStatusFailedMonth}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-danger" style="width: {{ ($totalMenus / 100) * 100 }}%"></div>
                        </div>
                      </div>
  
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Complete Customer Order Online</span>
                        <span class="float-right"><b>480</b>/{{$paymentOnlineStatusFailedWeek}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-success" style="width: 60%"></div>
                        </div>
                      </div>
  
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        On Delivery Customer Order Online
                        <span class="float-right"><b>250</b>/{{$paymentOnlineStatusFailedToday}}</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-warning" style="width: 50%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./card-body -->
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-3 col-6">
                      <div class="description-block border-right">
                        
                        <h5 class="description-header"></h5>
                        <span class="description-text"></span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                   
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->


          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
        
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Populer Menus</h3>
        
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Item</th>
                                        <th>Status</th>
                                        <th>Popularity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>Call of Duty IV</td>
                                        <td><span class="badge badge-success">Shipped</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>iPhone 6 Plus</td>
                                        <td><span class="badge badge-danger">Delivered</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="badge badge-info">Processing</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>iPhone 6 Plus</td>
                                        <td><span class="badge badge-danger">Delivered</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>Call of Duty IV</td>
                                        <td><span class="badge badge-success">Shipped</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        


            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recently Added Menus</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img class="mr-3" src="dist/img/default-50x50.gif" alt="Menu Image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Samsung TV</h5>
                                    <span class="badge badge-warning">$1800</span>
                                    <p>
                                        Samsung 32" 1080p 60Hz LED Smart HDTV.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="dist/img/default-50x50.gif" alt="Menu Image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Bicycle</h5>
                                    <span class="badge badge-info">$700</span>
                                    <p>
                                        26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="dist/img/default-50x50.gif" alt="Menu Image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Xbox One</h5>
                                    <span class="badge badge-danger">$350</span>
                                    <p>
                                        Xbox One Console Bundle with Halo Master Chief Collection.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="dist/img/default-50x50.gif" alt="Menu Image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">PlayStation 4</h5>
                                    <span class="badge badge-success">$399</span>
                                    <p>
                                        PlayStation 4 500GB Console (PS4)
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="javascript:void(0)" class="btn btn-sm btn-outline-primary">View All Menus</a>
                    </div>
                </div>
            </div>
            


        </div>
        
  

         

          
@stop

@section('css')
 
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

{{-- recapitulation sales chart  --}}
<script>

//   Today chart 
const ctx = document.getElementById('todayChart');
$.ajax({
  url: "{{ url('menus') }}",
  type: "GET",
  dataType: "json",
  success: function(response) {
    const data = response.data;
    const groupedData = {}; // Objek untuk menyimpan data yang digabungkan

    // Gabungkan data berdasarkan category_name
    data.forEach(menu => {
      const categoryName = menu.category_name;
      const price = menu.price;

      if (groupedData[categoryName]) {
        // Jika label sudah ada, tambahkan price
        groupedData[categoryName] += price;
      } else {
        // Jika label belum ada, inisialisasi dengan price
        groupedData[categoryName] = price;
      }
    });

    // Ekstraksi label dan data dari groupedData
    const labels = Object.keys(groupedData);
    const price = Object.values(groupedData);
    
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [{
          label: '# Jumlah Menu dan price hari ini',
          data: price, // Data penjualan berdasarkan category (contoh data statis)
          borderWidth: 2,
          borderColor: 'purple'
        }]
      },
      options: {
        scales: {
          y: {
            display: true,
            title: {
              display: true,
              text: 'price' // Label untuk sumbu Y
            },
            // ticks: {
            //   callback: function(value, index, values) {
            //     let ampm = value < 12 ? 'AM' : 'PM';
            //     if (value === 0 || value === 12) {
            //       return '12 ' + ampm;
            //     } else {
            //       return (value % 12) + ' ' + ampm;
            //     }
            //   }
            // }
          },
          x: {
            display: true,
            title: {
              display: true,
              text: 'Categories' // Label untuk sumbu X
            }
          }
        },
        tooltips: {
          enabled: true, // Matikan tooltip bawaan
        }
      },
      onClick: function(event, elements) {
        if (elements && elements.length > 0) {
          var dataIndex = elements[0].index;
          console.log('Klik pada indeks data:', dataIndex);
        }
      }
    });
  }
});


  
//   End Today chart 


</script>

<script>
  // Jquery Hide and Show graph 

  $(document).ready(function() {
  $('.today-chart').click(function() {
    $('.today-chart-pane').show();
    $('.goal-completion-today').show();
    
    $('.week-chart-pane').hide();
    $('.goal-completion-week').hide();
    
    $('.month-chart-pane').hide();
    $('.goal-completion-month').hide();

    $('.month-chart-pane').hide();
    $('.6-month-chart-pane').hide();
    $('.year-chart-pane').hide();
  });


  $('.week-chart').click(function() {
    $('.week-chart-pane').show();
    $('.goal-completion-week').show();

    $('.today-chart-pane').hide();
    $('.goal-completion-today').hide();

    $('.month-chart-pane').hide();
    $('.goal-completion-month').hide();

    $('.month-chart-pane').hide();
    $('.6-month-chart-pane').hide();
    $('.year-chart-pane').hide();
  });


  $('.month-chart').click(function() {
    $('.month-chart-pane').show();
    $('.goal-completion-month').show();

    $('.today-chart-pane').hide();
    $('.goal-completion-today').hide();

    $('.week-chart-pane').hide();
    $('.goal-completion-week').hide();

    $('.month-chart-pane').hide();
    $('.6-month-chart-pane').hide();
    $('.year-chart-pane').hide();
  });
});
</script>
@stop
