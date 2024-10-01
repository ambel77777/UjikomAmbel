@extends('layouts.app')
@section('contents')

<div class="container mt-5">
    <h1 class="font-bold text-2xl text-center">LAPORAN</h1>
   
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-white bg-success mb-4" style="min-height: 150px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-calendar-day fa-3x mb-2"></i> 
                    <h5 class="card-title">Data Hari Ini</h5>
                    <p class="card-text">{{ $todayCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-4" style="min-height: 150px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-calendar-alt fa-3x mb-2"></i> 
                    <h5 class="card-title">Data Kemarin</h5>
                    <p class="card-text">{{ $yesterdayCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-4" style="min-height: 150px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-calendar fa-3x mb-2"></i> 
                    <h5 class="card-title">Data Bulan Ini</h5>
                    <p class="card-text">{{ $thisMonthCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-4" style="min-height: 150px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-chart-bar fa-3x mb-2"></i> 
                    <h5 class="card-title">Total</h5>
                    <p class="card-text">{{ $totalCount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
