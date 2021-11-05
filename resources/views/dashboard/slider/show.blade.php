

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
          <div class="tile ">


          <div class="row">

<div class="col-md-3">
<h5 class="d-flex justify-content-start align-items-center " style="height: 100%;">  Show Slider        </h5>

</div>



<div class="col-md-9 text-right ">

<button class="btn btn-warning text-right  " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add Slider </button>

</div>

</div>

<hr/>


          <!-- Modal -->
          <div class="modal fade" style="width:100%;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog"   style="max-width: 700px;"  role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add  New  Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <p class="alert alert-success " style="display:none" id="msg_success"></p>

              <form id="form_data" method="POST" action="{{route('dashboard.slider.store')}}"   enctype="multipart/form-data">
               @csrf
                    <div class="form-group">
                          <div class="file-input">

                <input type="file" id="file" class="file" name="photo">
                <label for="file">Select file</label>

                </div>
                </div>
                <span class="text-danger error-text photo_error"></span>

                    <div class="form-group text-left">
                      <label>Title</label>
                      <input name="title" type="text" class="form-control" placeholder="Enter slider title..">
                      <span class="text-danger error-text title_error"></span>

                    </div>
                  
                    <div class="form-group text-left">
                      <label>Status</label>
                      <select name="review" class="custom-select">
                            <option value="publish">Publish</option>
                            <option value="pending">Pending</option>
                      </select>
                      <span class="text-danger error-text review_error"></span>

                    </div>
                    <br>
                    <div>
                    </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-success" id="ajaxSubmit" type="button"> Save Slider  </button>
              </div>
            </div>
          </div>
          </div>
          <!-- end model add recipe -->





        
            <div class="tile-body">

            @if(count($slider))
<div class="table-responsive">
           
              
              
              
              </div><div c²lass="col-sm-12 col-md-6"><div id="sampleTable_filter" class="dataTables_filter">
                  
               
              </div></div></div><div class="row"><div class="col-sm-12"><table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
                  <thead>
                    <tr role="row">
                    	<th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 199.312px;">id</th>

                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 323.141px;"> title  </th>

                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141.766px;">image </th>



                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 136.672px;">status </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 72.4531px;">action  </th>

                
                    </thead>
                  <tbody>
                  						@foreach ($slider as $slide)

                  <tr role="row" class="odd">

                      <td class="sorting_1"> {{$slide->id}}</td>
                      <td class="sorting_1"> {{$slide->title}}</td>

                      <td class="sorting_1"> <img src="{{asset('uploads/slider/'.$slide->photo)}}" style="border-radius: 5px;" width="65px" height="65px" /> </td>
                     

                      <td class="sorting_1"> {{$slide->status == 'publish' ? 'publish' : 'panding'}}</td>

                      <td class="sorting_1"> 

                      

                      <h5 style="display: inline-block; " >
                        <span class="badge badge-danger"> <a href=""><i class="fa fa-trash text-white"></i> </a> </span>
                        <span class="badge badge-warning"> <a href=""><i class="fa fa-edit text-dark"></i> </a> </span>

                      </h5>
                      </td>


                 
                  </tr>
                                        @endforeach

                </tbody>
                </table>

            </div>
          
 
          </div>

            <div class="row">

            	<div class="col-sm-12 col-md-5">
      
            </div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">

            		<ul class="pagination">

                  {{$slider->appends(request()->query())->links()}}

            		</ul>
              </div>

              @else

              <h1 class="text-center"> not found recipe </h1>

              @endif

              @endsection