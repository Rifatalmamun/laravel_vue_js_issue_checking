@extends('admin.admin_master')
@section('admin_body')

  <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <div class="row mt-3">
                    <div class="col">
                        <h4>Add Product  <a href="{{route('admin.index.product')}}" class="mx-3 btn btn-sm btn-primary">All Product </a> </h4>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-12 col-xl-12">


                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('admin.store.product') }}" enctype="multipart/form-data">
                                        @csrf

                                        <p style="font-weight: bold;" class="mt-4">1.Basic</p>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label> Product Name</label> 
                                                    <input type="text" name="product_name" value="{{ old('product_name') }}" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Vendor Price (৳)</label>  
                                                    <input type="number" name="buying_price" value="{{ old('buying_price') }}" min="1" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Selling Price (৳)</label> 
                                                    <input type="number" name="selling_price" value="{{old('selling_price')}}" min="1" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Discount Price (%)</label> 
                                                    <input type="number" name="discount" value="{{old('discount')}}" min="1" class="form-control" required>
                                                </div> 
                                            </div>
                                        </div>

                                        

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Category</label> 

                                                    <select class="form-control" name="category_id" required>
                                                         <option value="">--Seletec One--</option>
                                                        @foreach ($category as $item)
                                                            <option value="{{$item->id}}" >{{$item->category_name}}</option> 
                                                        @endforeach
                                                        
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Sub Category</label> 
                                                    <select class="form-control " name="subcategory_id" required>

                                                        <option value="">--Seletec One--</option>
                                                        @foreach ($subcategory as $item)
                                                            <option value="{{$item->id}}" >{{$item->subcategory_name}}</option> 
                                                        @endforeach
                                                        
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Product Code</label> 
                                                    <input type="text" name="product_code" value="{{old('product_code')}}" class="form-control">         
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Get Cashback (৳)</label> 
                                                    <input type="text" name="get_cashback" value="{{old('get_cashback')}}" class="form-control">         
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group"> 
                                                    <label >Use Cashback (৳)</label> 
                                                    <input type="text" name="use_cashback" value="{{old('use_cashback')}}" class="form-control">         
                                                </div>
                                            </div>

                                        </div>

                                        

                                        <div class="card-divider"></div>
                                        <p style="font-weight: bold;" class="mt-4">2. Product Image</p>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Image One* <small>(Size 500 kb max)</small></label> 
                                                    <input type="file" name="image_one" value="{{old('image_one')}}" class="form-control" required>
                                                                            
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Image Two* <small>(Size 500 kb max)</small></label> 
                                                    <input type="file" name="image_two" value="{{old('image_two')}}" class="form-control" required>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Image Three* <small>(Size 500 kb max)</small></label> 
                                                    <input type="file" name="image_three" value="{{old('image_three')}}"  class="form-control" required>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label >Image Four* <small>(Size 500 kb max)</small></label> 
                                                        <input type="file" name="image_four" value="{{old('image_four')}}" class="form-control" required>

                                                    </div>
                                            </div>
                                        </div>
                                       
                                        
                                        

                                        <p style="font-weight: bold;" class="mt-4">3. Product Description & Note</p>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Product Description</label> 
                                                    <textarea id="summernote" name="product_description" rows="6" class="form-control" required minlength="100">{{old('product_description')}}</textarea> 
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Product Note</label> 
                                                    <textarea id="summernoteKeepNote" name="keep_note" rows="4" class="form-control" required minlength="100">{{old('keep_note')}}</textarea> 
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <p style="font-weight: bold;" class="mt-4">4. Product Color with Quantity</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                <div class="row mt-1">
                                                    <div class="col-md-3">
                                                        <input onclick="redColor()" type="checkbox" id="red" name="red" value="1">
                                                        <label for="red"> Red Color</label><br>
                                                    </div>
                                                    <div class="col-md-3">

                                                        <input style="opacity: 0;" id="redColorQuantity" type="number" min="0" id="red" name="red_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('red_color_quantity')}}">
                                                        
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-3">
                                                        <input onclick="greenColor()" type="checkbox" id="green" name="green" value="1">
                                                    <label for="green"> Green Color</label><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="greenColorQuantity" type="number" min="0" id="green" name="green_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('green_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-3">
                                                        <input onclick="blueColor()" type="checkbox" id="blue" name="blue" value="1">
                                                        <label for="blue"> Blue Color</label><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="blueColorQuantity" type="number" min="0" id="blue" name="blue_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('blue_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-3">
                                                        <input onclick="yellowColor()" type="checkbox" id="yellow" name="yellow" value="1">
                                                        <label for="yellow"> Yellow Color</label><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="yellowColorQuantity" type="number" min="0" id="yellow" name="yellow_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('yellow_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-3">
                                                        <input onclick="whiteColor()" type="checkbox" id="white" name="white" value="1">
                                                        <label for="white"> White Color</label><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="whiteColorQuantity" type="number" min="0" id="white" name="white_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('white_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-3">
                                                        <input onclick="blackColor()" type="checkbox" id="black" name="black" value="1">
                                                    <label for="black"> Black Color</label><br><br> 
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="blackColorQuantity" type="number" min="0" id="black" name="black_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('black_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-0">
                                                    <div class="col-md-3">
                                                        <input onclick="grayColor()" type="checkbox" id="gray" name="gray" value="1">
                                                    <label for="gray"> Gray Color</label><br><br> 
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="grayColorQuantity" type="number" min="0" id="gray" name="gray_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('gray_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <input onclick="silverColor()" type="checkbox" id="silver" name="silver" value="1">
                                                        <label for="silver"> Silver Color</label><br>
                                                    </div>
                                                    <div class="col-md-3">

                                                        <input style="opacity: 0;" id="silverColorQuantity" type="number" min="0" id="silver" name="silver_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('silver_color_quantity')}}">
                                                        
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-5">
                                                    <input onclick="maroonColor()" type="checkbox" id="maroon" name="maroon" value="1">
                                                    <label for="maroon"> Maroon Color</label><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="maroonColorQuantity" type="number" min="0" id="maroon" name="maroon_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('maroon_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-3">
                                                        <input onclick="purpleColor()" type="checkbox" id="purple" name="purple" value="1">
                                                        <label for="purple"> Purple Color</label><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="purpleColorQuantity" type="number" min="0" id="purple" name="purple_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('purple_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-3">
                                                        <input onclick="pinkColor()" type="checkbox" id="pink" name="pink" value="1">
                                                        <label for="pink"> Pink Color</label><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="pinkColorQuantity" type="number" min="0" id="pink" name="pink_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('pink_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-3">
                                                        <input onclick="oliveColor()" type="checkbox" id="olive" name="olive" value="1">
                                                    <label for="olive"> Olive Color</label><br><br> 
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="oliveColorQuantity" type="number" min="0" id="olive" name="olive_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('olive_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-0">
                                                    <div class="col-md-3">
                                                        <input onclick="navyColor()" type="checkbox" id="navy" name="navy" value="1">
                                                    <label for="navy"> Navy Color</label><br><br> 
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="navyColorQuantity" type="number" min="0" id="navy" name="navy_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('navy_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                                <div class="row mt-0">
                                                    <div class="col-md-3">
                                                        <input onclick="limeColor()" type="checkbox" id="lime" name="lime" value="1">
                                                    <label for="lime"> Lime Color</label><br><br> 
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input style="opacity: 0;" id="limeColorQuantity" type="number" min="0" id="lime" name="lime_color_quantity" class="form-control" placeholder="Quantiry" value="{{old('lime_color_quantity')}}"> 
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mt-1">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Total Quantiry*</label> 
                                                    <input type="number" name="product_quantity" value="{{old('product_quantity')}}" class="form-control" min="0" required> 
                                                </div>
                                            </div>
                                        </div>

                                        <!--*** PRODUCT SIZE BOXES ***-->
                                        <p style="font-weight: bold;" class="mt-4">5. Product Size </p>
                                        
                                        
                                        <!--small size , quantity & price -->
                                        <div class="row">
                                            <div class="col-md-1">
                                                <input  type="checkbox" id="s" name="s" value="1">
                                                <label class="mt-2" for="s"> S</label><br>
                                            </div>

                                            <div class="col-md-1 ">
                                                <input  type="checkbox" id="m" name="m" value="1">
                                                <label class="mt-2" for="m"> M</label><br>
                                            </div>

                                            <div class="col-md-1">
                                                <input  type="checkbox" id="l" name="l" value="1">
                                                <label class="mt-2" for="l"> L</label><br>
                                            </div>

                                            <div class="col-md-1">
                                                <input  type="checkbox" id="xl" name="xl" value="1">
                                                <label class="mt-2" for="xl"> XL </label><br>
                                            </div>

                                            <div class="col-md-1">
                                                <input  type="checkbox" id="xxl" name="xxl" value="1">
                                                <label class="mt-2" for="xxl"> XXL</label><br>
                                            </div>


                                            {{-- <div class="col-md-3">
                                                <div id="s1" class="form-group" style="display: none;">
                                                    <label> Quantity</label> 
                                                    <input type="number" name="s_size_quantity" value="{{old('s_size_quantity')}}" class="form-control" min="0">         
                                                </div>
                                            </div>                       
                                            <div class="col-md-3">
                                                <div id="s2" class="form-group" style="display: none;">
                                                    <label> Price</label> 
                                                    <input type="number" name="s_size_price" value="{{old('s_size_price')}}" class="form-control" min="0">         
                                                </div>
                                            </div> --}}
                                        </div>

                                        <!--medium size , quantity & price -->
                                        <div class="row">
                                            
                                            {{-- <div class="col-md-4">
                                                <div id="m1" class="form-group" style="display: none;">
                                                    <label> Quantity</label> 
                                                    <input type="number" name="m_size_quantity" value="{{old('m_size_quantity')}}" class="form-control" min="0">         
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="m2" class="form-group" style="display: none;">
                                                    <label> Price increase</label> 
                                                    <input type="number" name="m_size_price" value="{{old('m_size_price')}}" class="form-control" min="0">         
                                                </div>
                                            </div> --}}
                                        </div>
                                        
                                        <!--large size , quantity & price -->
                                        <div class="row">
                                            
                                            {{-- <div class="col-md-4">
                                                <div id="l1" class="form-group" style="display: none;">
                                                    <label> Quantity</label> 
                                                    <input type="number" name="l_size_quantity" value="{{old('l_size_quantity')}}" class="form-control" min="0">         
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="l2" class="form-group" style="display: none;">
                                                    <label> Price increase</label> 
                                                    <input type="number" name="l_size_price" value="{{old('l_size_price')}}" class="form-control" min="0">         
                                                </div>
                                            </div> --}}
                                        </div>
                                        
                                        <!--X large size , quantity & price -->
                                        <div class="row">
                                            
                                            {{-- <div class="col-md-4">
                                                <div id="xl1" class="form-group" style="display: none;">
                                                    <label> Quantity</label> 
                                                    <input type="number" name="xl_size_quantity" value="{{old('xl_size_quantity')}}" class="form-control" min="0">         
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="xl2" class="form-group" style="display: none;">
                                                    <label> Price increase</label> 
                                                    <input type="number" name="xl_size_price" value="{{old('xl_size_price')}}" class="form-control" min="0">         
                                                </div>
                                            </div> --}}
                                        </div>

                                        <!--XX large size , quantity & price -->
                                        <div class="row">
                                            
                                            {{-- <div class="col-md-4">
                                                <div id="xxl1" class="form-group" style="display: none;">
                                                    <label> Quantity</label> 
                                                    <input type="number" name="xxl_size_quantity" value="{{old('xxl_size_quantity')}}" class="form-control" min="0">         
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="xxl2" class="form-group" style="display: none;">
                                                    <label> Price increase</label> 
                                                    <input type="number" name="xxl_size_price" value="{{old('xxl_size_price')}}" class="form-control" min="0">         
                                                </div>
                                            </div> --}}
                                        </div>

                                        {{-- <p style="font-weight: bold;" class="mt-4">5. Total Quantity  </p>

                                        <div class="row mt-2">
                                            
                                        </div> --}}

                                        <p style="font-weight: bold;" class="mt-4">6. Delivery Charge & Duration</p>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label> Delivery Charge</label> 
                                                    <input type="number" name="delivery_charge" value="{{ old('delivery_charge') }}" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label >Delivery Duration (Days)</label> 
                                                    <input type="number" name="delivery_time" value="{{ old('delivery_time') }}" min="3" class="form-control" required>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <p style="font-weight: bold;" class="mt-4">7. Product Warranty, Show</p>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input  type="checkbox" id="isWarranty" name="isWarranty" value="1">
                                                    <label onclick="warrantyClick()" class="mt-2" for="isWarranty"> is Warranty Available?</label><br>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="warranty_duration_id" class="form-group" style="display: none;">
                                                        <label> How many days?</label> 
                                                        <input type="number" name="warranty_duration" value="{{old('warranty_duration')}}" class="form-control" min="0" placeholder="Ex: 90 days">         
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">

                                                    <input  type="checkbox" id="show_warranty" name="show_warranty" value="1">
                                                    <label  class="mt-2" for="show_warranty"> Show Warranty?</label><br>
                                                    
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">

                                                    <input  type="checkbox" id="show_home" name="show_home" value="1">
                                                    <label  class="mt-2" for="show_home"> Product show in welcome page?</label><br>
                                                    
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">

                                                    <input  type="checkbox" id="show_note" name="show_note" value="1">
                                                    <label  class="mt-2" for="show_note"> Product note show?</label><br>
                                                    
                                                </div>
                                            </div>


                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-primary mt-3 w-50">Upload Product</button>
                                            </div>

                                    </form>

                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
        </div> 
  </div> 




  <script>

    function smallSize(){
        
        let s1_id = document.getElementById('s1');
        let s2_id = document.getElementById('s2');
        
        if(s1_id.style.display=='none'){
            s1_id.style.display='block'
            s2_id.style.display='block'
        }else{
            s1_id.style.display='none'
            s2_id.style.display='none'
        }
    }
    function mediumSize(){
        
        let m1_id = document.getElementById('m1');
        let m2_id = document.getElementById('m2');
        
        if(m1_id.style.display=='none'){
            m1_id.style.display='block'
            m2_id.style.display='block'
        }else{
            m1_id.style.display='none'
            m2_id.style.display='none'
        }
    }
    function largeSize(){
        
        let l1_id = document.getElementById('l1');
        let l2_id = document.getElementById('l2');
        
        if(l1_id.style.display=='none'){
            l1_id.style.display='block'
            l2_id.style.display='block'
        }else{
            l1_id.style.display='none'
            l2_id.style.display='none'
        }
    }
    function xLargeSize(){
        
        let xl1_id = document.getElementById('xl1');
        let xl2_id = document.getElementById('xl2');
        
        if(xl1_id.style.display=='none'){
            xl1_id.style.display='block'
            xl2_id.style.display='block'
        }else{
            xl1_id.style.display='none'
            xl2_id.style.display='none'
        }
    }
    function xxLargeSize(){
        
        let xxl1_id = document.getElementById('xxl1');
        let xxl2_id = document.getElementById('xxl2');
        
        if(xxl1_id.style.display=='none'){
            xxl1_id.style.display='block'
            xxl2_id.style.display='block'
        }else{
            xxl1_id.style.display='none'
            xxl2_id.style.display='none'
        }
    }
    function warrantyClick(){
        let warranty_duration_id = document.getElementById('warranty_duration_id');
        
        if(warranty_duration_id.style.display=='none'){
            warranty_duration_id.style.display='block'

        }else{
            warranty_duration_id.style.display='none'
            
        }
    }

</script>

<script>
    function redColor(){

        let redColorQuantityID = document.getElementById('redColorQuantity');
        
        if(redColorQuantityID.style.opacity==0){
            redColorQuantityID.style.opacity=1
        }else{
            redColorQuantityID.style.opacity=0
        }
    }
    function greenColor(){

        let greenColorQuantityID = document.getElementById('greenColorQuantity');

        if(greenColorQuantityID.style.opacity==0){
            greenColorQuantityID.style.opacity=1
        }else{
            greenColorQuantityID.style.opacity=0
        }

    }
    function blueColor(){

        let blueColorQuantityID = document.getElementById('blueColorQuantity');

        if(blueColorQuantityID.style.opacity==0){
            blueColorQuantityID.style.opacity=1
        }else{
            blueColorQuantityID.style.opacity=0
        }
    }
   function yellowColor(){

        let yellowColorQuantityID = document.getElementById('yellowColorQuantity');

        if(yellowColorQuantityID.style.opacity==0){
            yellowColorQuantityID.style.opacity=1
        }else{
            yellowColorQuantityID.style.opacity=0
        }
    }

   function whiteColor(){

        let whiteColorQuantityID = document.getElementById('whiteColorQuantity');

        if(whiteColorQuantityID.style.opacity==0){
            whiteColorQuantityID.style.opacity=1
        }else{
            whiteColorQuantityID.style.opacity=0
        }
    }

    function blackColor(){

        let blackColorQuantityID = document.getElementById('blackColorQuantity');

        if(blackColorQuantityID.style.opacity==0){
            blackColorQuantityID.style.opacity=1
        }else{
            blackColorQuantityID.style.opacity=0
        }
    }

    function grayColor(){

            let grayColorQuantityID = document.getElementById('grayColorQuantity');

            if(grayColorQuantityID.style.opacity==0){
                grayColorQuantityID.style.opacity=1
            }else{
                grayColorQuantityID.style.opacity=0
            }
    }
    function silverColor(){

        let silverColorQuantityID = document.getElementById('silverColorQuantity');

        if(silverColorQuantityID.style.opacity==0){
            silverColorQuantityID.style.opacity=1
        }else{
            silverColorQuantityID.style.opacity=0
        }
    }

    function maroonColor(){

        let maroonColorQuantityID = document.getElementById('maroonColorQuantity');

        if(maroonColorQuantityID.style.opacity==0){
            maroonColorQuantityID.style.opacity=1
        }else{
            maroonColorQuantityID.style.opacity=0
        }
    }

    function purpleColor(){

        let purpleColorQuantityID = document.getElementById('purpleColorQuantity');

        if(purpleColorQuantityID.style.opacity==0){
            purpleColorQuantityID.style.opacity=1
        }else{
            purpleColorQuantityID.style.opacity=0
        }
    }

    function pinkColor(){

        let pinkColorQuantityID = document.getElementById('pinkColorQuantity');

        if(pinkColorQuantityID.style.opacity==0){
            pinkColorQuantityID.style.opacity=1
        }else{
            pinkColorQuantityID.style.opacity=0
        }
    }


    function oliveColor(){

        let oliveColorQuantityID = document.getElementById('oliveColorQuantity');

        if(oliveColorQuantityID.style.opacity==0){
            oliveColorQuantityID.style.opacity=1
        }else{
            oliveColorQuantityID.style.opacity=0
        }
    }



    function navyColor(){

            let navyColorQuantityID = document.getElementById('navyColorQuantity');

            if(navyColorQuantityID.style.opacity==0){
                navyColorQuantityID.style.opacity=1
            }else{
                navyColorQuantityID.style.opacity=0
            }
        }


    function limeColor(){

        let limeColorQuantityID = document.getElementById('limeColorQuantity');

        if(limeColorQuantityID.style.opacity==0){
            limeColorQuantityID.style.opacity=1
        }else{
            limeColorQuantityID.style.opacity=0
        }
    }


</script>

<script>
    $('#summernote').summernote({
      placeholder: 'Write product description here...',
      tabsize: 2,
      height: 100
    });
</script>

<script>
    $('#summernoteKeepNote').summernote({
      placeholder: 'Write product note here...',
      tabsize: 2,
      height: 100
    });
</script>


@endsection 