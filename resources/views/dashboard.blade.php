@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Country</th>
                            <th>Nights</th>
                            <th>Tour</th>
                            <th>Tour Type</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quotes as $quote)
                            <tr>
                                <td>{{ $quote->name }}</td>
                                <td>{{ $quote->date }}</td>
                                <td>{{ $quote->country }}</td>
                                <td>{{ $quote->night }}</td>
                                <td>{{ $quote->tourid }}</td>
                                <td>{{ $quote->tourtype }}</td>
                                <td>{{ $quote->contactno }}</td>
                                <td>{{ $quote->email }}</td>
                                <td>
                                   
                                    <a href="{{ route('quotes.show', $quote->id) }}" class="btn btn-info btn-sm">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="col-md-3 g-1">
            <div class="card">
            <div class="card-header">Quote Count</div>
            <div class="card-body">
            </div>
                <div class="m-auto"><h1>{{$quoteCount}}</h1></div>
            </div>
        </div>
        <div class="col-md-3 g-1">
            <div class="card">
            <div class="card-header">Confirm Count</div>
            <div class="card-body">
            </div>
                <div class="m-auto"><h1>{{$confirmCount}}</h1></div>
            </div>
        </div>
        <div class="col-md-3 g-1">
            <div class="card">
            <div class="card-header">Quote Count</div>
            <div class="card-body">
            </div>
                <div class="m-auto"><h1>{{$quoteCount}}</h1></div>
            </div>
        </div>
        <div class="col-md-3 g-1">
            <div class="card">
            <div class="card-header">Quote Count</div>
            <div class="card-body">
            </div>
                <div class="m-auto"><h1>{{$quoteCount}}</h1></div>
            </div>
        </div>
    </div>
</div>
@endsection
