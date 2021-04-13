@extends('admin.admin_master')
@section('admin_body')


  <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">JakJamok Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        
                        <!--FIRST ROW SECTION-->
                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-2 pb-0">
                                            <div class="float-right">
                                                <i class="mdi mdi-account-multiple text-primary widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Total Customer</h5>
                                            <h3 class="mt-2">0</h3>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-2 pb-0">
                                            <div class="float-right">
                                                <i class="mdi mdi-square text-primary widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Products</h5> 
                                            <h3 class="mt-2">0</h3>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-2 pb-0">
                                            <div class="float-right">
                                                <i class=" mdi mdi-currency-bdt text-primary widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Product V.Amount</h5>
                                            <h3 class="mt-2">0</h3> 
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-2 pb-0">
                                            <div class="float-right">
                                                <i class=" mdi mdi-currency-bdt text-primary widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Product S.Amount</h5>
                                            <h3 class="mt-2">0</h3>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!--SECOND ROW SECTION-->
                        <div class="row">
                          <div class="col">
                            <h5>Current Order timeline</h5>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xl-3 col-lg-6">
                              <div class="card widget-flat">
                                  <div class="card-body p-0">
                                      <div class="p-2 pb-0">
                                          <div class="float-right">
                                              <i class="fas fa-plus-circle text-danger widget-icon"></i>
                                          </div>
                                          <h5 class="text-muted font-weight-normal mt-0">New Order</h5>
                                          <h3 class="mt-2">0</h3>
                                      </div>
                                      
                                  </div> <!-- end card-body-->
                              </div> <!-- end card-->
                          </div> <!-- end col-->

                          <div class="col-xl-3 col-lg-6">
                              <div class="card widget-flat">
                                  <div class="card-body p-0">
                                      <div class="p-2 pb-0">
                                          <div class="float-right">
                                              <i class="fas fa-shipping-fast text-warning widget-icon"></i>
                                          </div>
                                          <h5 class="text-muted font-weight-normal mt-0">Delivered Order</h5>
                                          <h3 class="mt-2">0</h3>
                                      </div>
                                      
                                  </div> <!-- end card-body-->
                              </div> <!-- end card-->
                          </div> <!-- end col-->

                          <div class="col-xl-3 col-lg-6">
                            <div class="card widget-flat">
                                <div class="card-body p-0">
                                    <div class="p-2 pb-0">
                                        <div class="float-right">
                                            <i class="fas fa-hourglass-half text-primary widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0">Delivery Pending</h5>
                                        <h3 class="mt-2">0</h3>
                                    </div>
                                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                          <div class="col-xl-3 col-lg-6">
                              <div class="card widget-flat">
                                  <div class="card-body p-0">
                                      <div class="p-2 pb-0">
                                          <div class="float-right">
                                              <i class="fas fa-check-circle text-success widget-icon"></i>
                                          </div>
                                          <h5 class="text-muted font-weight-normal mt-0">Delivery Complete</h5>
                                          <h3 class="mt-2">0</h3> 
                                      </div>
                                      
                                  </div> 
                              </div> 
                          </div> 
                      </div>
                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Recent Order</h4>
        
                                        <div class="table-responsive mt-3">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>Date/Time</th>
                                                        <th>Tnx ID</th>
                                                        <th>Paid</th>
                                                        <th>Method</th>
                                                        <th>Customer</th>
                                                        <th>Customer Phone</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            
                                            
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#0121</th>
                                                        <td>2018/04/28/12:04 am</td>
                                                        <td>4878457845</td>
                                                        <td>500</td>
                                                        <td>JJ-MBL</td>
                                                        <td>Rifat al mamun</td>
                                                        <td>01770703320</td>
                                                        <td>
                                                          <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eey"></i> View</a>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->  
                    </div> 
                </div> 
  </div> 






@endsection 


