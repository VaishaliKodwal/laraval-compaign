@extends('layouts.app')
@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div>
               
            </div>  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
            </div>
        </div>
    </div>
<div class="container-fluid" style="margin-top:-3%">
<div class="row">
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
 <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
 </div>
</div>
<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
<div style="position:absolute;width:200%;height:200%;left:0; top:0">
</div>
</div>
</div>
 <div class="col-lg-2">
</div>
<form>
 <div class="form-group">
 </div>
<form method="post" action="{{url('/Templatecontroller')}}">
    {{csrf_field()}}
  <div class="form-group">
     <div class="col-lg-9">
    <label for="exampleFormControl1"><h2>Subject</h2></label>
    <input type="text" class="form-control" id="exampleFormControl1" placeholder="Subject" name="subject" > 
  </div>
  <div class="form-group">
   
   </div>
    <div class="form-group">
    <div class="col-lg-9">
  <label for="exampleFormControlTextarea1"><h2>Content</h2>
    <div class="btn-group" role="group" aria-label="...">
  <button type="button" class=" btn-btn-group-sm"><strong>B</strong></button>
  <button type="button" class=" btn-btn-group-sm"><i>I</i></button>
  <button type="button" class=" btn-btn-group-sm">
    
  </button>
</div>  
 <div class="btn-group" role="group" aria-label="...">
  <button type="button" class=" btn-btn-group-sm">_</button>
  <button type="button" class=" btn-btn-group-sm">_</button>
  <button type="button" class=" btn-btn-group-sm">_</button>
</div>  
<button type="button" class=" btn-btn-group-sm">EDIT HTML</button>
</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
</div>
</div>
</div>
<div class="col-lg-2">
<button type="button" class="btn btn-primary btn-lg">Submit</button>
 </form>
</main>
 @endsection