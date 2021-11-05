@extends('layouts.dashboard.app')

@section('content')
   
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb bg-transparent " >
    <li class="breadcrumb-item "> <a href="{{route('dashboard.welcome')}}" class="text-dark">home </a></li>
    <li class="breadcrumb-item"><a href="#" class="text-dark">  setting </a></li>
    <li class="breadcrumb-item active" aria-current="page"> create</li>
  </ol>
</nav>




      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h5> Add Setting</h5>
            <hr/>

            <p class="alert alert-success " style="display:none" id="msg_success"></p>

        
            <div class="tile-body">
              <form id="form_data" method="PUT" action="{{route('dashboard.setting.update')}}"   enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                <label>App  Name</label>
                <input name="name_app" type="text" class="form-control" value="{{$settings[0]->app_name}} ">
                <span class="text-danger error-text name_app_error"></span>

              </div>

                <div class="form-group">
                                        <div class="form-line">
                                            <div class="font-12"><b>Rest API Key</b></div>
                                            <input class="form-control" id="apikey" name="api_key" type="text" data-app-key="{{$settings[0]->app_key}}" />
                                        </div>
                                        <div class="help-info pull-left"><a href="" data-toggle="modal"  >Where I have to put my API Key?</a> | <a href="" id="keygen"><span class="label bg-blue">CHANGE API KEY</span></a></div>
</br>
<span class="text-danger error-text api_key_error"></span>

                                      </div>


              
                                    <div class="form-group">
                  <label class="control-label"> Privacy Policy </label>
                  <br/>

                  <textarea class="form-control ckeditor" name="content" rows="2"  placeholder="Enter  description">

                  {{$settings[0]->privacy_policy}}

                  </textarea>

                  <span class="text-danger error-text content_error"></span>



                </div>
                <div class="form-group">
                                        <div class="form-line">
                                            <div class="font-12"><b>More Apps Url</b></div>
                                            <input type="text" class="form-control" name="more_apps_url" id="more_apps_url" value="{{$settings[0]->more_app}}" required="" aria-required="true">
                                            <span class="text-danger error-text more_apps_url_error"></span>

                                          </div>
                                    </div>


               <div class="form-group text-left">
                      <label>Youtube url</label>
                      <input name="youtube_url" type="url" class="form-control" value="{{$settings[0]->youtube_url}}" placeholder="Enter youtube..">
                      <span class="text-danger error-text youtube_url_error"></span>

                    </div>


                    <div class="form-group text-left">
                      <label>Instagram url</label>
                      <input name="instagram_url" type="url"  value="{{$settings[0]->Instagram_url}}" class="form-control" placeholder="Enter instagram..">
                      <span class="text-danger error-text instagram_url_error"></span>

                    </div>

                    <div class="form-group text-left">
                      <label>Facebook url</label>
                      <input name="facebook_url" type="url" class="form-control"  value="{{$settings[0]->facebook_url}}" placeholder="Enter facebook..">
                      <span class="text-danger error-text facebook_url_error"></span>

                    </div>
            <div class="tile-footer">
              <button class="btn btn-success" id="ajaxSubmit" type="button"><i class="fa fa-fw fa-lg fa-edit"></i> Update </button>
            </div>
          </div>
        </div>
     
       
      </div>

    
@endsection

@push('script-code')
<script>
/**
 * Function to produce UUID.
 * See: http://stackoverflow.com/a/8809472
 */
function generateUUID()
{
	var d = new Date().getTime();
	
	if( window.performance && typeof window.performance.now === "function" )
	{
		d += performance.now();
	}
	
	var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c)
	{
		var r = (d + Math.random()*16)%16 | 0;
		d = Math.floor(d/16);
		return (c=='x' ? r : (r&0x3|0x8)).toString(16);
	});

return uuid;
}
var apikey = $('#apikey').data('app-key');
$('#apikey').attr('value',apikey);


/**
 * Generate new key and insert into input value
 */
$( '#keygen' ).on('click',function(e)
{
e.preventDefault();

//$('#apikey').val( generateUUID() );
$('#apikey').attr('value',generateUUID());

});

</script>
@endpush

