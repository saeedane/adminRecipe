

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

              <div class="col-md-4 col-sm-12">
            <h5 class="d-flex justify-content-start align-items-center "  style="height: 100%;" >  Show Cuisine        </h5>

            </div>

            <div class="col-sm-12 col-md-4  text-center">

            <form class="form-inline mr-auto">
          <input class="form-control " type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-info btn-rounded my-0 ml-sm-2  " type="submit"> <i class="fa fa-search"></i></button>
        </form>
            </div>
        
            <div class="col-md-4  col-sm-12 text-right ">

           <button class="btn btn-warning text-right  " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add Cuisine </button>

            </div>

        </div>

        

            <hr/>


            
          <!-- code modal add category -->

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
              <p class="alert alert-success " style="display:none" id="msg_success"></p>

              <form id="form_data" method="POST" action="{{route('dashboard.cuisine.store')}}"   enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="control-label">Cuisine Name </label>
                  <br/>
                 <span class="text-danger error-text cuisine_name_error"></span>

                  <input class="form-control" name="cuisine_name" type="text" id="name" placeholder="Enter  name">

                </div>
              
    
         
             <div class="form-group">
                          <div class="file-input">
                <input type="file" id="file" class="file" name="cuisine_photo">
                <label for="file">Select file</label>

                </div>
                
                </div>
                <span class="text-danger error-text cuisine_photo_error"></span>

              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-success" id="ajaxSubmit" type="button"><i class="fa fa-fw fa-lg fa-edit"></i> confirmed  </button>
              </div>
            </div>
          </div>
          </div>
          <!-- end model add category -->


        
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
                      @foreach($cuisines as $cuisine)
                  <div class="col-lg-2 col-md-4 col-sm-6">
           
           
                  <div class="card" style="margin: 5px;">
              <img style="height: 150px;" src="{{asset('uploads/cuisine/'.$cuisine->cuisine_photo)}}" class="card-img-top" alt="Seafood">
              <div class="card-body">
                <h4 class="card-title">{{$cuisine->cuisine_name}}</h4>
                <p class="card-text">Number of Recipes :  {{count($cuisine->recipes)}}</p>
                <a href="http://recipes.todocode.me/recipes/10" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit </a>
                <a href="http://recipes.todocode.me/recipes/10" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>

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
                    {{$cuisines->appends(request()->query())->links()}}

            		</ul>
              </div>

              @endsection