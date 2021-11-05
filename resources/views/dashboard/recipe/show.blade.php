

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

<div class="col-md-3">
<h5 class="d-flex justify-content-start align-items-center " style="height: 100%;">  Show Recipe        </h5>

</div>

<div class="col-md-5 text-center">
<form action="">
<div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control"  name="search" id="inputCity" value="{{request()->search}}">
    </div>
    <div class="form-group col-md-4">
      <select id="inputState" name="category_id" class="form-control">
        @foreach(App\Category::with('recipes')->get()  as $cate)
        <option selected="" value="{{$cate->id}}">{{$cate->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-2">
      <button type="submit" class="btn btn-info"> <i class="fa fa-search"></i></button>
    </div>
  </div>
</form>

</div>

<div class="col-md-4 text-right ">

<button class="btn btn-warning text-right  " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add Recipe </button>

</div>

</div>

            <hr/>
      
          <!-- code modal add recipe -->

          <!-- Modal -->
          <div class="modal fade" style="width:100%;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog"   style="max-width: 700px;"  role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add  New Recipe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <p class="alert alert-success " style="display:none" id="msg_success"></p>

              <form id="form_data" method="POST" action="{{route('dashboard.recipe.ajax')}}"   enctype="multipart/form-data">
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
                      <input name="title" type="text" class="form-control" placeholder="Enter recipe title..">
                      <span class="text-danger error-text title_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Description</label>
                      <textarea name="description" class="form-control" placeholder="Enter recipe description.."></textarea>
                      <span class="text-danger error-text description_error"></span>

                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                      <label>Time in minutes</label>
                      <input name="time" type="text" class="form-control" placeholder="Preparation time in min..">
                      <span class="text-danger error-text time_error"></span>

                    </div>
                    <div class="col-lg-6">
                      <label>Servings</label>
                      <input name="servings" type="text" class="form-control" placeholder="Number of servings (persons)..">
                      <span class="text-danger error-text servings_error"></span>

                    </div>
                    
                    </div>
                    <br>
                    <div class="form-group text-left">
                      <label>Video url (Youtube) - Optional</label>
                      <input name="youtube_url" type="text" class="form-control" placeholder="Enter recipe video link..">
                      <span class="text-danger error-text video_url_error"></span>

                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                      <label>Category</label>
                      <select name="category_id[]" class="custom-select">
                                    @foreach(App\Category::all() as $category)

                                         <option value="{{$category->id}}">{{$category->name}}</option>

                                    @endforeach
                                              </select>

                                              <span class="text-danger error-text category_id_error"></span>
                    </div>
                    <div class="col-lg-4">
                      <label>Cuisine</label>
                      <select name="cuisine_id" class="custom-select">
                                                
                            @foreach(App\Cuisine::all() as $cuisine)

                                <option value="{{$cuisine->id}}">{{$cuisine->cuisine_name}}</option>

                            @endforeach
                                              </select>
                                              <span class="text-danger error-text cuisine_id_error"></span>

                    </div>


                    <div class="col-lg-4">
                      <label>Chef</label>
                      <select name="chef_id" class="custom-select">
                                                
                            @foreach(App\Chef::all() as $chef)

                                <option value="{{$chef->id}}">{{$chef->username}}</option>

                            @endforeach
                                              </select>
                                              <span class="text-danger error-text cuisine_id_error"></span>

                    </div>
                  
                    </div>
                    <br>
                    <div class="row">
                 
               
                    <div class="col-lg-6">
                      <label>Rating</label>
                      <select name="rating" class="custom-select">
                          <option value="1">1 star</option>
                          <option value="2">2 stars</option>
                          <option value="3">3 stars</option>
                          <option value="4">4 stars</option>
                          <option selected="" value="5">5 stars</option>
                      </select>
                      <span class="text-danger error-text rating_error"></span>

                    </div>
                    <div class="col-lg-6">
                      <label>Review</label>
                      <select name="review" class="custom-select">
                            <option value="publish">Publish</option>
                            <option value="pending">Pending</option>
                      </select>
                      <span class="text-danger error-text review_error"></span>

                    </div>
                    </div>
                    <br>
                    <div>
                    </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-success" id="ajaxSubmit" type="button"> Save Recipe  </button>
              </div>
            </div>
          </div>
          </div>
          <!-- end model add recipe -->





        
            <div class="tile-body">

            @if(count($recipes))
<div class="table-responsive">
           
              
              
              
              </div><div c²lass="col-sm-12 col-md-6"><div id="sampleTable_filter" class="dataTables_filter">
                  
               
              </div></div></div><div class="row"><div class="col-sm-12"><table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
                  <thead>
                    <tr role="row">
                    	<th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 199.312px;">id</th>

                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 323.141px;">name </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 72.4531px;"> servings </th>

                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141.766px;">image </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 72.4531px;">rating </th>

                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 72.4531px;">category </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 72.4531px;">cuisine </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 72.4531px;">chefs </th>

                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 72.4531px;">type  </th>


                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 136.672px;">status </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 72.4531px;">action  </th>

                
                    </thead>
                  <tbody>
                  						@foreach ($recipes as $recipe)

                  <tr role="row" class="odd">

                      <td class="sorting_1"> {{$recipe->id}}</td>
                      <td class="sorting_1"> {{$recipe->title}}</td>
                      <td class="sorting_1"> {{$recipe->number_people}}</td>

                      <td class="sorting_1"> <img src="{{asset('uploads/recipe/'.$recipe->photo)}}" style="border-radius: 50%;" width="65px" height="65px" /> </td>
                      <td class="sorting_1"> 
                        

                      @for($i = 0 ; $i < $recipe->rating;$i++)


                      <i class="fa fa-star text-warning"></i>

                      @endfor



                      </td>

                      <td class="sorting_1">
                        
                      @foreach ($recipe->category as $category)
                                                <h5 style="display: inline-block;"><span class="badge badge-primary">{{ $category->name }}</span></h5>
                                            @endforeach


                      </td>

                      <td class="sorting_1">
                        
                        @foreach ($recipe->cuisines as $cuisine)
                          <img src="{{asset('uploads/cuisine/'.$cuisine->cuisine_photo)}}" style="border-radius: 4px;" width="65px" height="65px" /> 
                                              @endforeach
  
  
                        </td>


                        <td class="sorting_1">
                        
                        @foreach ($recipe->chefs as $chef)

                        {{ $chef->username}}</h5>
                       
                                              @endforeach
  
  
                        </td>

                      <td class="sorting_1">
                        
                                                  <h5 style="display: inline-block;"><span class="badge {{$recipe->type == 'video' ?  'badge-danger': 'badge-success' }}"> {{$recipe->type}}</span></h5>
  
  
                        </td>

                      <td class="sorting_1"> {{$recipe->status == 'publish' ? 'publish' : 'panding'}}</td>

                      <td class="sorting_1"> 

                      

                      <h5 style="display: inline-block; " >
                        <span class="badge badge-danger"> <a href=""><i class="fa fa-trash text-white"></i> </a> </span>
                        <span class="badge badge-warning"> <a href="{{route('dashboard.recipe.edit',$recipe->id)}}"><i class="fa fa-edit text-dark"></i> </a> </span>

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

                  {{$recipes->appends(request()->query())->links()}}

            		</ul>
              </div>

              @else

              <h1 class="text-center"> not found recipe </h1>

              @endif

              @endsection