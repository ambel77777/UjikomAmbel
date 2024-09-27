@extends('layouts.app')
@section('contents')
    <h1 class="mb-0">Info Login</h1>
    <hr />
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
               
                <div class="row" id="res"></div>
                <div class="row mt-2">
  
                    <div class="col-md-6">
                        <label class="labels">Nama</label>
                        <input type="text" name="name" disabled class="form-control" placeholder="Masukkan Nama Anda" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Masukkan Email Anda">
                    </div>
                </div>
                 
                <!-- <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div> -->
            </div>
        </div>
         
    </div>   
            
        </form>
@endsection