
<!-- resources/views/quote/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit quote</h2>
    <form class="row quote_form" action="{{ route('quotes.update', $quote->id) }}" method="POST" id="quoteForm" novalidate="novalidate">
        @csrf
        @method('PUT')

        <div class="col-md-12">
            <div class="row form-group">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $quote->name) }}" placeholder="Enter your name" required>
                </div>
                <div class="col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $quote->date) }}" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <label for="country">Country</label>
                    <select class="form-select" id="country" name="country" required>
                        <option value="">Select</option>
                        @foreach($countries as $country)
                            <option value="{{ $country['name'] }}" 
                                @if(old('country', $quote->country) === $country['name']) selected @endif>
                                {{ $country['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="night">Number of Nights</label>
                    <select class="form-select" id="night" name="night" required>
                        <option value="">Select</option>
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}" @if(old('night', $quote->night) == $i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <label for="adult">Number of Adults</label>
                    <select class="form-select" id="adult" name="adult" required>
                        <option value="">Select</option>
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}" @if(old('adult', $quote->adult) == $i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="child">Number of Children</label>
                    <select class="form-select" id="child" name="child" required>
                        <option value="">Select</option>
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}" @if(old('child', $quote->child) == $i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="quoteno">Contact Number</label>
                <input type="text" class="form-control" id="contactno" name="contactno" value="{{ old('contactno', $quote->contactno) }}" placeholder="Enter quote No" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $quote->email) }}" placeholder="Enter email address" required>
            </div>

            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary mt-3">
                    Update quote
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
