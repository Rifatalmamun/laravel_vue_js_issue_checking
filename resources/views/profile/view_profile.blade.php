@extends('welcome')
@section('user_dynamic_content')



<section>

    <div class="row mx-3 px-2">
        <div class="col">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{Auth::user()->email}}">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                
                <div class="form-group">
                  <label for="avatar">Avatar</label>
                  <input id="avatarInputId" type="file" class="form-control" id="avatarInputId" >
                  
                  
                  <img id="avatarShowId" src="{{asset(Auth::user()->profile_photo_path)}}" alt="Not found" style="width: 60px; height: 60px; margin: 10px; ">
                
                
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>



</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){

        $('#avatarInputId').change(function(e){

            var reader = new FileReader ();
            reader.onload = function(e){

                $('#avatarShowId').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);

        });
    });

</script>

@endsection