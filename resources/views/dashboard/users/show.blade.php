

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

           <button class="btn btn-warning text-right  " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add User </button>

            </div>

        </div>

        

            <hr/>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="form_data" method="post" action="{{route('dashboard.users.store')}}"   >
                      <p class="alert alert-success " style="display:none" id="msg_success"></p>

                    @csrf
                    <div class="form-group text-left">
                      <label>Admin Name</label>
                      <input name="name" type="text" class="form-control" placeholder="Enter admin name">
                      <span class="text-danger error-text name_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Admin Email</label>
                      <input name="email" type="email" class="form-control" placeholder="Enter admin email">
                      <span class="text-danger error-text email_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Admin Password</label>
                      <input name="password" type="password" class="form-control" placeholder="Enter password">
                      <span class="text-danger error-text password_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Confirm Password</label>
                      <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm password">
                      <span class="text-danger error-text password_confirmation_error"></span>

                    </div>
                   
                  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button class="btn btn-success" id="ajaxSubmit" type="button"><i class="fa fa-fw fa-lg fa-edit"></i> confirmed  </button>
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
                      @foreach($users as $user)
                  <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="d-flex align-items-center justify-content-center">
              <img style="height: 100px;width:100px;border-radius:50%;" src="http://pngimg.com/uploads/burger_sandwich/small/burger_sandwich_PNG96780.png" class="card-img-top" alt="Seafood">
          
                </div>
           
                  <div class="card" style="margin: 5px;">
                 
              <div class="card-body">
                <h4 class="card-title">{{$user->name}} <span class="badge badge-danger  badge-pill  float-right mt-1" style="font-size:12px;"> admin</span></h4>
                <p class="card-text"> Email:  {{$user->email}}</p>
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
                    {{$users->appends(request()->query())->links()}}

            		</ul>
              </div>

              @endsection