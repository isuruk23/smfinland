<div class="mb-3">
    <!-- Name Field -->
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $DayTour->name ?? '') }}" >
    @if ($errors->has('name'))
        <div class="text-danger">{{ $errors->first('name') }}</div>
    @endif
</div>

<div class="mb-3">
    <!-- Discount Field -->
    <label for="discount" class="form-label">Discount</label>
    <input type="text" name="discount" class="form-control" value="{{ old('discount', $DayTour->discount ?? '') }}" >
    @if ($errors->has('discount'))
        <div class="text-danger">{{ $errors->first('discount') }}</div>
    @endif
</div>

<div class="mb-3">
    <!-- Slogan Field -->
    <label for="slogan" class="form-label">Slogan</label>
    <input type="text" name="slogan" class="form-control" value="{{ old('slogan', $DayTour->slogan ?? '') }}">
    @if ($errors->has('slogan'))
        <div class="text-danger">{{ $errors->first('slogan') }}</div>
    @endif
</div>

<div class="mb-3">
    <!-- Summary Field -->
    <label for="summary" class="form-label">Summary</label>
    <textarea name="summary" class="form-control">{{ old('summary', $DayTour->summary ?? '') }}</textarea>
    @if ($errors->has('summary'))
        <div class="text-danger">{{ $errors->first('summary') }}</div>
    @endif
</div>

<div class="mb-3">
    <!-- Description Field -->
    <label for="description" class="form-label">Description</label>
    <textarea name="description" id="description" class="form-control" >{{ old('description', $DayTour->description ?? '') }}</textarea>
    @if ($errors->has('description'))
        <div class="text-danger">{{ $errors->first('description') }}</div>
    @endif
</div>

<div class="mb-3">
    <!-- Price Field -->
    <label for="price" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" value="{{ old('price', $DayTour->price ?? '') }}">
    @if ($errors->has('price'))
        <div class="text-danger">{{ $errors->first('price') }}</div>
    @endif
</div>

<div class="mb-3">
    <!-- Start Date Field -->
    <label for="start_date" class="form-label">Start Date</label>
    <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $DayTour->start_date ?? '') }}">
    @if ($errors->has('start_date'))
        <div class="text-danger">{{ $errors->first('start_date') }}</div>
    @endif
</div>

<div class="mb-3">
    <!-- End Date Field -->
    <label for="end_date" class="form-label">End Date</label>
    <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $DayTour->end_date ?? '') }}">
    @if ($errors->has('end_date'))
        <div class="text-danger">{{ $errors->first('end_date') }}</div>
    @endif
</div>

<div class="mb-3">
    <!-- Front Image Field -->
    <label for="image" class="form-label">Front Image (600px*400px)</label>
    <input class="form-control" type="file" id="image" name="image">
    @if ($errors->has('image'))
        <div class="text-danger">{{ $errors->first('image') }}</div>
    @endif
</div>

<div class="mb-3">
    <!-- Banner Image Field -->
    <label for="banner" class="form-label">Banner Image (1920px*500px)</label>
    <input class="form-control" type="file" id="banner" name="banner">
    @if ($errors->has('banner'))
        <div class="text-danger">{{ $errors->first('banner') }}</div>
    @endif
</div>
