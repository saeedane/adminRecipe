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
            <h5>  <i class="fa fa-users mr-1"></i>  Add Users </h5>
            <hr/>

            <p class="alert alert-success " style="display:none" id="msg_success"></p>

        
            <div class="tile-body">
              <form id="form_data" method="POST" action="{{route('dashboard.ajax')}}"   enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="control-label">User Name </label>
                  <br/>
                 <span class="text-danger error-text name_error"></span>

                  <input class="form-control" name="name" type="text" id="name" placeholder="Enter  name">

                </div>
              
                <div class="form-group">
                  <label class="control-label"> Recipe description </label>
                  <br/>
                 <span class="text-danger error-text content_error"></span>

                  <textarea class="form-control" name="content" rows="2" id="description" placeholder="Enter  description"></textarea>




                </div>
         
             <div class="form-group">
                          <div class="file-input">
                <input type="file" id="file" class="file" name="photo">
                <label for="file">Select file</label>
                </div>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-dark" id="ajaxSubmit" style="background-color:#000000;color: #fedb8f !important;" type="button"><i class="fa fa-fw fa-lg fa-edit"></i> Submit </button>
            </div>
          </div>
        </div>
     
       
      </div>

    
@endsection
@push('script-code')
 <script>
   CKEDITOR.replace( 'description' );

  </script>
@endpush

