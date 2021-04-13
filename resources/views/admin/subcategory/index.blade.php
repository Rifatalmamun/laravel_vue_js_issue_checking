@extends('admin.admin_master')
@section('admin_body')


  <div class="content-page">
        <div class="content">

            <div class="container-fluid">

                <div class="row mt-3">
                    <div class="col">
                        <h4>All Sub Category  <a href="#" class="mx-3 btn btn-sm btn-primary" data-toggle="modal" data-target="#addSubCategoryModal">Add Sub-Category </a> </h4>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="header-title">Basic Data Table</h4> --}}
                                

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <tr>
                                                <th>Sub Category</th>
                                                <th>url</th>
                                                <th>Category</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                         
                                            </tr>
                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        @foreach ($subcategory as $item)
                                        <tr>
                                          <td>{{$item->subcategory_name}}</td>
                                          <td>{{$item->url_name}}</td>
                                          <td>{{$item->category_name}}</td> 
                                          <td>{{$item->uploaded_date}}</td> 
                                          <td>
                                            
                                            <a href="#" id="{{ $item->id }}" data-toggle="modal" data-target="#editSubCategoryModal" title="Edit" onclick="subcategoryview(this.id)"><i class="fa fa-edit"></i></a>
        
                                            {{-- <a id="delete" href="{{URL::to('admin/delete/subcategory/'.$item->id)}}"><i class=" mx-2 text-danger fa fa-trash"></i></a>  --}}
        
                                          </td>
                                      
                                        </tr>
        
                                        @endforeach
                                          
                                      </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                          
            </div> 
        </div> 
  </div> 








        <!-- ADD SUB CATEGORY MODAL -->

        <div class="modal fade" id="addSubCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
            <div class="modal-dialog" role="document"> 
                <div class="modal-content">
    
                        <!--ERROR MESSAGE-->
    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
    
                    <form action="{{route('admin.store.subcategory')}}" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Sub Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            @csrf
    
                            <div class="form-group">
                                <label>Sub Category name</label>
                                <input type="text" name="subcategory_name" class="form-control" required>
                            </div>
    
                            <div class="form-group">
                                <label> Select Category</label>
                                <select name="category_id" class="form-control" required>
                                    <option value="">--select one--</option>
                                    @foreach ($category as $item)
                                    <option value="{{$item->id}}"> {{$item->category_name}} </option>
                                    @endforeach
                                </select>
                            </div>
    
                            
                        
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    
    
              <!-- EDIT SUB CATEGORY MODAL -->
    
              <div class="modal fade" id="editSubCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
                <div class="modal-dialog" role="document"> 
                    <div class="modal-content">
    
        <!--ERROR MESSAGE-->
    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
    
                        <form action="{{route('admin.update.subcategory')}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Sub Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                @csrf
    
                                <input type="hidden" class="form-control" id="cid" value=""  name="subcategory_id">
    
                                <div class="form-group">
                                    <label>Sub Category name</label>
                                    <input type="text" id="cname" value=""  name="subcategory_name" class="form-control" required>
                                </div>
    
                                <div class="form-group">
                                    <select name="category_id" class="form-control" required>
                                        <option value="">--select one--</option>
                                        @foreach ($category as $item)
                                        <option value="{{$item->id}}" > {{$item->category_name}} </option>
                                        @endforeach
                                    </select>
                                </div>   
                        </div>
    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"> Update </button>
                        </div> 
    
                    </form>
                    </div>
                </div>
            </div>




        <!--Ajax cdn link--> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript">
                function subcategoryview(id){
                        $.ajax({
                                url: "{{ url('/admin/edit/subcategory/') }}/"+id,
                                type:"GET",
                                dataType:"json",
                                success:function(data) {
                                    $('#cid').val(data.id);
                                    $('#cname').val(data.subcategory_name);
                        }
                    })
                }
        
            </script>


    



@endsection 


