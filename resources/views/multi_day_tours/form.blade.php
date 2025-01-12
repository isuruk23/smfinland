<div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $multiDayTour->name ?? '') }}" >
            @if ($errors->has('name'))
                <div class="text-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="discount" class="form-label">Discount (%)</label>
            <input type="text" name="discount" class="form-control" value="{{ old('discount', $multiDayTour->discount ?? '') }}" >
            @if ($errors->has('discount'))
                <div class="text-danger">{{ $errors->first('discount') }}</div>
            @endif
        </div>

        <!--div class="mb-3">
            <label for="slogan" class="form-label">Slogan</label>
            <input type="text" name="slogan" class="form-control" value="{{ old('slogan', $multiDayTour->slogan ?? '') }}">
            @if ($errors->has('slogan'))
                <div class="text-danger">{{ $errors->first('slogan') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea name="summary" class="form-control">{{ old('summary', $multiDayTour->summary ?? '') }}</textarea>
            @if ($errors->has('summary'))
                <div class="text-danger">{{ $errors->first('summary') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" >{{ old('description', $multiDayTour->description ?? '') }}</textarea>
            @if ($errors->has('description'))
                <div class="text-danger">{{ $errors->first('description') }}</div>
            @endif
        </div-->

        <div class="mb-3">
            <label for="days" class="form-label">Days</label>
            <input type="number" name="days" class="form-control" value="{{ old('days', $multiDayTour->days ?? 1) }}" >
            @if ($errors->has('days'))
                <div class="text-danger">{{ $errors->first('days') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="nights" class="form-label">Nights</label>
            <input type="number" name="nights" class="form-control" value="{{ old('nights', $multiDayTour->nights ?? 1) }}" >
            @if ($errors->has('nights'))
                <div class="text-danger">{{ $errors->first('nights') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" value="{{ old('price', $multiDayTour->price ?? '') }}">
            @if ($errors->has('price'))
                <div class="text-danger">{{ $errors->first('price') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $multiDayTour->start_date ?? '') }}">
            @if ($errors->has('start_date'))
                <div class="text-danger">{{ $errors->first('start_date') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $multiDayTour->end_date ?? '') }}">
            @if ($errors->has('end_date'))
                <div class="text-danger">{{ $errors->first('end_date') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="itinerary" class="form-label">Itinerary</label>
            <textarea name="itinerary" id="itinerary" class="form-control">{{ old('itinerary', $multiDayTour->itinerary ?? '') }}</textarea>
            @if ($errors->has('itinerary'))
                <div class="text-danger">{{ $errors->first('itinerary') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="includes" class="form-label">Includes</label>
            <textarea name="includes" id="includes" class="form-control">{{ old('includes', $multiDayTour->includes ?? '') }}</textarea>
            @if ($errors->has('includes'))
                <div class="text-danger">{{ $errors->first('includes') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="excludes" class="form-label">Excludes</label>
            <textarea name="excludes" id="excludes" class="form-control">{{ old('excludes', $multiDayTour->excludes ?? '') }}</textarea>
            @if ($errors->has('excludes'))
                <div class="text-danger">{{ $errors->first('excludes') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="conditions" class="form-label">Conditions</label>
            <textarea name="conditions" id="conditions" class="form-control">{{ old('conditions', $multiDayTour->conditions ?? '') }}</textarea>
            @if ($errors->has('conditions'))
                <div class="text-danger">{{ $errors->first('conditions') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="important" class="form-label">Important</label>
            <textarea name="important" id="important" class="form-control">{{ old('important', $multiDayTour->important ?? '') }}</textarea>
            @if ($errors->has('important'))
                <div class="text-danger">{{ $errors->first('important') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="tips" class="form-label">Travel Tips</label>
            <textarea name="tips" id="tips" class="form-control">{{ old('tips', $multiDayTour->tips ?? '') }}</textarea>
            @if ($errors->has('tips'))
                <div class="text-danger">{{ $errors->first('tips') }}</div>
            @endif
        </div>
        @if (!empty($multiDayTour) && !empty($multiDayTour->image))
        <p><img src="{{ asset('public/storage/' . $multiDayTour->image) }}" alt="{{ $multiDayTour->name }}" width="200"></p>
        @endif
    

        <div class="mb-3">
            <label for="image" class="form-label">Front Image (600px*400px)</label>
            <input class="form-control" type="file" id="image" name="image">
            @if ($errors->has('image'))
                <div class="text-danger">{{ $errors->first('image') }}</div>
            @endif
        </div>
        
        @if (!empty($multiDayTour) && !empty($multiDayTour->banner_image))
        <p><img src="{{ asset('public/storage/' . $multiDayTour->banner_image) }}" alt="{{ $multiDayTour->name }}" width="200"></p>
        @endif
        <div class="mb-3">
            <label for="banner" class="form-label">Banner Image (1920px*500px)</label>
            <input class="form-control" type="file" id="banner" name="banner">
            @if ($errors->has('banner'))
                <div class="text-danger">{{ $errors->first('banner') }}</div>
            @endif
        </div>

