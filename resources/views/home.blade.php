@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            

            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid"style="margin-top:-5%,padding-top:-5%,"class="container">
    <div class="container">
    <h1>EMAIL COMPAIGN APP</h1>
    <p class="lead">simply create,edit and your email</p>
    <div style="margin-top:7%;padding-bottom:5%;"><a href="/compaign" class="btn btn-outline-primary btn-lg" style="margin-right:3%;" tabindex="-1" role="button">Compaign</a>
 <a href="/subscriber" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button"style="margin-right:3%;">Subscriber</a>
 <a href="/categories" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button">Categories</a>
 <div>
</div>
</div>
@endsection
