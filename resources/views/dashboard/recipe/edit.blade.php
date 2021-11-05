

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






        
            <div class="tile-body">

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
                      <input name="title" type="text" class="form-control"  placeholder="Enter recipe title.." value="{{$recipes->title}}">
                      <span class="text-danger error-text title_error"></span>

                    </div>
                    <div class="form-group text-left">
                      <label>Description</label>
                      <textarea name="description" class="form-control" placeholder="Enter recipe description..">


                      {{$recipes->description}}

                      </textarea>
                      <span class="text-danger error-text description_error"></span>

                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                      <label>Time in minutes</label>
                      <input name="time" type="text" class="form-control" placeholder="Preparation time in min.." value="{{$recipes->time}}">
                      <span class="text-danger error-text time_error"></span>

                    </div>
                    <div class="col-lg-6">
                      <label>Servings</label>
                      <input name="servings" type="text" value="{{$recipes->number_people}}"  class="form-control" placeholder="Number of servings (persons)..">
                      <span class="text-danger error-text servings_error"></span>

                    </div>
                    
                    </div>
                    <br>
                    <div class="form-group text-left">
                      <label>Video url (Youtube) - Optional</label>
                      <input name="youtube_url" type="text" class="form-control" value="{{$recipes->youtube_url}}" placeholder="Enter recipe video link..">
                      <span class="text-danger error-text video_url_error"></span>

                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                      <label>Category</label>
                      <select name="category_id[]" class="custom-select">
                                    @foreach(App\Category::all() as $category)

                                    <option value="{{ $category->id }}" {{in_array($category->id,$recipes->category->pluck('id')->toArray()) ? 'selected' : ''}} >  {{ $category->name  }}</option>
                                    @endforeach
                                              </select>

                                              <span class="text-danger error-text category_id_error"></span>
                    </div>
                    <div class="col-lg-4">
                      <label>Cuisine</label>
                      <select name="cuisine_id" class="custom-select">
                                                
                            @foreach(App\Cuisine::all() as $cuisine)

                                <option value="{{$cuisine->id}}" {{in_array($cuisine->id,$recipes->cuisines->pluck('id')->toArray()) ? 'selected' : ''}}>{{$cuisine->cuisine_name}}</option>

                            @endforeach
                                              </select>
                                              <span class="text-danger error-text cuisine_id_error"></span>

                    </div>


                    <div class="col-lg-4">
                      <label>Chef</label>
                      <select name="chef_id" class="custom-select">
                                                
                            @foreach(App\Chef::all() as $chef)

                                <option value="{{$chef->id}}" {{in_array($chef->id,$recipes->chefs->pluck('id')->toArray()) ? 'selected' : ''}}>{{$chef->username}}</option>

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
                          <option value="5">5 stars</option>
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

              @endsection