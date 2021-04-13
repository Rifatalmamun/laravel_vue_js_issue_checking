@extends('admin.admin_master')
@section('admin_body')

  <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <div class="row mt-3">
                    <div class="col">
                        <h4>All Product  <a href="{{route('admin.create.product')}}" class="mx-3 btn btn-sm btn-primary">Add Product </a> </h4>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"> 

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                           
                                            <th>Category Picture</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($products as $item)
                                          <tr>
                                                  <td>{{$item->product_name}}</td>
                                                  
                                                  <td>
                                                      <img src="{{asset($item->image_one)}}" alt="" style="width: 50px;height: 40px;">
                                                  </td>
                                                  <td>------</td> 
                                                  <td>
                                                      <a href="#" id="{{ $item->id }}" data-toggle="modal" data-target="#editCategoryModal" title="Edit" onclick="categoryview(this.id)"><i class="fa fa-edit"></i></a>
                                                  </td>
                                          </tr>
                                        @endforeach
                                          
                                      </tbody>
                                </table>

                            </div> 
                        </div> 
                    </div>
                </div>    
            </div> 
        </div> 
  </div> 







  

@endsection 