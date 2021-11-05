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
            <h5> Update  Ads</h5>
            <hr/>

            <p class="alert alert-success " style="display:none" id="msg_success"></p>

        
            <div class="tile-body">
            <form id="form_data" method="PUT" action="{{route('dashboard.ads.update')}}">
              @csrf
              
              <div class="form-group">
                <label>Admob Native Ad Id</label>
                <input name="admob_native" type="text" class="form-control" value="{{$sellad[0]->admob_native}}">
              </div>
              <div class="form-group">
                <label>Admob Interstitial Ad Id</label>
                <input name="admob_interstitial" type="text" class="form-control" value="{{$sellad[0]->admob_interstitial}}">
              </div>
              <div class="form-group">
                <label>Admob Banner Ad Id</label>
                <input name="admob_banner" type="text" class="form-control" value="{{$sellad[0]->admob_banner}}">
              </div>
              <div class="form-group">
                <label>Admob Rewarded Video Ad Id</label>
                <input name="admob_video" type="text" class="form-control" value="{{$sellad[0]->admob_video}}">
              </div>

             
            </form>
            </div>
            <div class="tile-footer">
            <button class="btn btn-success" id="ajaxSubmit" type="button"><i class="fa fa-fw fa-lg fa-edit"></i> Update </button>
            </div>
          </div>
        </div>
     
       
      </div>

    
@endsection

