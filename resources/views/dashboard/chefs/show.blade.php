

@extends('layouts.dashboard.app')
@section('content')   
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb bg-transparent " >
    <li class="breadcrumb-item "> <a href="{{route('dashboard.welcome')}}" class="text-dark">home </a></li>
    <li class="breadcrumb-item"><a href="#" class="text-dark">  category </a></li>
    <li class="breadcrumb-item active" aria-current="page"> create</li>
  </ol>
</nav>




      <div class="row">
        <div class="col-md-12">

          <div class="tile">
          <div class="row">

              <div class="col-md-4">
            <h5 class="d-flex justify-content-start align-items-center "  style="height: 100%;" >  Show Users        </h5>

            </div>

            <div class="col-md-4 text-center">

            <input type="text" class="form-control float-left col-md-10" value="search ">
            <button type="submit" class="btn btn-info "> <i class="fa fa-search "></i></button>

            </div>
        
            <div class="col-md-4 text-right ">

           <button class="btn btn-warning text-right  " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add Chef </button>

            </div>

        </div>

        

            <hr/>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 700px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                      <p class="alert alert-success " style="display:none" id="msg_success"></p>
                      <form id="form_data" method="POST" action="{{route('dashboard.chefs.store')}}" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                          <div class="file-input">
                <input type="file" id="file" class="file" name="avatar_url">
                <label for="file">Select file</label>
                </div>
                      <span class="text-danger error-text avatar_url_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Email</label>
                      <input name="email" type="email" class="form-control" placeholder="Enter email.." value="{{old('email')}}">
                      <span class="text-danger error-text email_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Username</label>
                      <input name="username" type="text" class="form-control" placeholder="Enter username.." value="{{old('username')}}">
                      <span class="text-danger error-text username_error"></span>

                    </div>

                    <div class="form-group text-left">
                      <label>About</label>
                      <textarea rows="5" name="about" class="form-control"></textarea>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                      <label>Gender</label>
                      <select name="gender" class="custom-select">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                      </select>
                      <span class="text-danger error-text gender_error"></span>

                    </div>
              
        
                    </div>
                    <br>
                    <div class="form-group text-left">
                      <label>Password</label>
                      <input name="password" type="password" class="form-control" placeholder="Enter password.." value="{{old('password')}}">
                      <span class="text-danger error-text password_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Facebook url</label>
                      <input name="facebook_url" type="url" class="form-control" placeholder="Enter facebook.." value="{{old('facebook_url')}}">
                      <span class="text-danger error-text facebook_url_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Youtube url</label>
                      <input name="youtube_url" type="url" class="form-control" placeholder="Enter twitter.." value="{{old('youtube_url')}}">
                      <span class="text-danger error-text youtube_url_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Instagram url</label>
                      <input name="instagram_url" type="url" class="form-control" placeholder="Enter instagram.." value="{{old('instagram_url')}}">
                      <span class="text-danger error-text instagram_url_error"></span>

                    </div>
                
                    <div>
                    </div>
                  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button class="btn btn-success" id="ajaxSubmit" type="button"><i class="fa fa-fw fa-lg fa-edit"></i> Save Chef  </button>
      </div>
    </div>
  </div>
</div>

            <p class="alert alert-success " style="display:none" id="msg_success"></p>

        
            <div class="tile-body">
            <div class="table-responsive">
                <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                  <div class="row">
                  <div class="col-sm-12 col-md-6">
                	<div class="dataTables_length" id="sampleTable_length">
        
                
                </div></div>
                  <div class="col-sm-12 col-md-6">
                    <div id="sampleTable_filter" class="dataTables_filter">
                    </label></div></div></div>
                      <div class="row"><div class="col-sm-12">
                <div class="row no-gutters align-items-center">
                      @foreach($chefs as $chef)
                  <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="d-flex align-items-center justify-content-center">
                  @if($chef->avater)
                  <img style="height: 100px;width:100px;border-radius:50%;" class="mb-2" src="{{ asset('uploads/chefs/'.$chef->avater)}}" class="card-img-top" alt="Seafood">
          
                  @else


                  @if($chef->gender == 'male')
                  <img style="height: 100px;width:100px;border-radius:50%;" class="position-relative mb-2 " src="{{ asset('uploads/chefs/default.jpg')}}"/>
                  <h1 class="position-absolute  " style="font-size:42px;color:#fedb8f;">

                  @else
                  <img style="height: 100px;width:100px;border-radius:50%;" class="position-relative mb-2 " src="{{ asset('uploads/chefs/default-fame.jpg')}}"/>
                  <h1 class="position-absolute  " style="font-size:42px;color:#ffffff;">

                  @endif  
                  @php

                  $name = $chef->username;

                  echo $name[0];

                  @endphp

                  </h1>
                
                
                  @endif
                </div>
           
                  <div class="card" style="margin: 5px;">
                 
              <div class="card-body">
                <h4 class="card-title">{{$chef->username}} 
                  <span class="badge {{$chef->gender == 'female' ? 'badge-danger' : 'badge-info'}}  badge-pill  float-right mt-1" style="font-size:12px;">
                   {{$chef->gender}}</span>
                  
                  </h4>
                <p class="card-text"> Number of Recipes :  {{count($chef->recipes)}}</p>
                <a href="http://recipes.todocode.me/recipes/10" class="btn btn-info btn-sm col-sm-12 mb-2"><i class="fa fa-edit"></i> Edit </a>
                <a href="http://recipes.todocode.me/recipes/10" class="btn btn-danger  col-sm-12   btn-sm"><i class="fa fa-trash"></i> Delete</a>
              </div>
            </div>
            </div>

            @endforeach
</div>
            </div></div>

            <div class="row">

            	<div class="col-sm-12 col-md-5">
  
              </div>
              <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">

            		<ul class="pagination">
                    {{$chefs->appends(request()->query())->links()}}

            		</ul>
              </div>

              @endsection