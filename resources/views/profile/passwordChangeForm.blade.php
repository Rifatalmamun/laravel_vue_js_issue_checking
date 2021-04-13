@extends('user.user_master')
@section('user_dynamic_content')

<div class="content_wrapper"> 
    <div class="middle_content_wrapper">

        <h5>Password Change Form</h5>       
        
        <section>
            <div class="row">
                <div class="col-md-7">

                    <form action="{{ route('password.change.request') }}" method="POST">
                        @csrf



                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Old Password</label>
                          <input type="password" name="old_password" class="form-control" id="exampleInputPassword1" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword2">New Password</label>
                            <input type="password" name="new_password" class="form-control" id="exampleInputPassword2" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword3">Confirm Password</label>
                            <input type="password" name="con_password" class="form-control" id="exampleInputPassword3" >
                        </div>

                        <button type="submit" class="btn btn-primary">Change Password</button>
                      </form>


                </div>
            </div>
        </section>






    </div>
</div>
@endsection

