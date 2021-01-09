@extends('layouts.mainlayout')
@section('content')

<div class="container">
        <h1 class="mt-5">Show Package {{$package->package_number}}</h1>

        <div class="jumbotron text-center">
            <p class="pd-5">
                <strong>Package ID: </strong> {{$package->package_id}}<br>
                <strong>Truck number: </strong> {{$package->truck_number}}<br>
                <strong>Package number: </strong> {{$package->package_number}}<br>
                <strong>Destination: </strong> {{$package->destination}}<br>
                <strong>Operation Date: </strong> {{$package->date_of_operation}}<br>
            </p>
        </div>
</div>


















@endsection