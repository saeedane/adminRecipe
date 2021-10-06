@extends('layouts.dashboard.app')

@section('content')
   

<div class="row">

           <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Flowz</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-ticket"></i>
        <span class="count-numbers">599</span>
        <span class="count-name">Instances</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers">6875</span>
        <span class="count-name">Data</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers">35</span>
        <span class="count-name">Users</span>
      </div>
    </div>





      </div>

<div class="row mt-4">

 <div class="col-md-3">
          <div class="widget-small primary"><i class="icon fa fa-cog fa-3x"></i>
            <div class="info">
              <h4> Setting </h4>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small info"><i class="icon fa fa-bell fa-3x"></i>
            <div class="info">
              <h4>Notification </h4>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small warning"><i class="icon fa fa-money fa-3x"></i>
            <div class="info">
              <h4>Ads </h4>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small danger"><i class="icon fa fa-user fa-3x"></i>
            <div class="info">
              <h4> users </h4>
            </div>
          </div>
        </div>
</div>



@endsection