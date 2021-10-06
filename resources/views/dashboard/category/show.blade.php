

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
            <h5>  Show Category </h5>
            <hr/>

            <p class="alert alert-success " style="display:none" id="msg_success"></p>

        
            <div class="tile-body">
<div class="table-responsive">
                <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6">
                	<div class="dataTables_length" id="sampleTable_length"><label>Show <select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm">


                		<option value="10"></option>

                	</select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="sampleTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="sampleTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
                  <thead>
                    <tr role="row">
                    	<th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 199.312px;">id</th>

                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 323.141px;">name </th>

                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141.766px;">image </th>

                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 72.4531px;">content</th>

                    	<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 136.672px;">status </th>
                  </thead>
                  <tbody>
                  						@foreach ($category as $cate)

                  <tr role="row" class="odd">

                      <td class="sorting_1"> {{$cate->id}}</td>
                      <td class="sorting_1"> {{$cate->name}}</td>
                      <td class="sorting_1"> <img src="{{asset('uploads/category/'.$cate->photo)}}" style="border-radius: 50%;" width="65px" height="65px" /> </td>
                      <td class="sorting_1"> {{$cate->content}}</td>
                      <td class="sorting_1"> {{$cate->status == 1 ? 'active' : 'disabled'}}</td>



                 
                  </tr>
                                        @endforeach

                </tbody>
                </table>

            </div></div>

            <div class="row">

            	<div class="col-sm-12 col-md-5"><div class="dataTables_info" id="sampleTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">

            		<ul class="pagination">

                       {{$category->links()}}
            		</ul>
              </div>

              @endsection