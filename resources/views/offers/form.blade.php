<form action="{{ isset($offer) ? route('offers.update', $offer->id) : route('offers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($offer))
        @method('PUT')
    @endif

    <!-- Title -->
    <div class="form-group mb-1">
        <label class="small font-weight-bold text-dark">Title*</label>
        <input type="text" class="form-control form-control-sm" id="title" name="title" 
               value="{{ old('title', $offer->title ?? '') }}" >
        @error('title')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>

    <!-- Keywords -->
    <div class="form-group mb-1">
        <label class="small font-weight-bold text-dark">Keywords*</label>
        <input type="text" class="form-control form-control-sm" id="keyword" name="keyword" 
               value="{{ old('keyword', $offer->keyword ?? '') }}" >
        @error('keyword')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>

    <!-- Summary -->
    <div class="form-group mb-1">
        <label class="small font-weight-bold text-dark">Summary*</label>
        <input type="text" class="form-control form-control-sm" id="summery" name="summery" 
               value="{{ old('summery', $offer->summery ?? '') }}" >
        @error('summery')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>

    <!-- Description -->
    <div class="form-group mb-1">
        <label class="small font-weight-bold text-dark">Description*</label>
        <input type="text" class="form-control form-control-sm" id="description" name="description" 
               value="{{ old('description', $offer->description ?? '') }}" >
        @error('description')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>

    <!-- Offer Type -->
    <div class="form-group">
        <label class="small font-weight-bold text-dark">Offer Type*</label>
        <select class="form-control form-control-sm" name="type" id="type" >
            <option value="">Select</option>
            <option value="1" {{ old('type', $offer->offer_type ?? '') == 1 ? 'selected' : '' }}>Honeymoon Offer</option>
            <option value="2" {{ old('type', $offer->offer_type ?? '') == 2 ? 'selected' : '' }}>Free Transfer Offer</option>
            <option value="3" {{ old('type', $offer->offer_type ?? '') == 3 ? 'selected' : '' }}>Summer Offer</option>
            <option value="4" {{ old('type', $offer->offer_type ?? '') == 4 ? 'selected' : '' }}>Free Transfer + Meal Upgrade Offer</option>
            <option value="5" {{ old('type', $offer->offer_type ?? '') == 5 ? 'selected' : '' }}>Early Bird Offer</option>
            <option value="6" {{ old('type', $offer->offer_type ?? '') == 6 ? 'selected' : '' }}>Special Offer For Low Season</option>
            <option value="7" {{ old('type', $offer->offer_type ?? '') == 7 ? 'selected' : '' }}>Combined Stay Offer</option>
            <option value="8" {{ old('type', $offer->offer_type ?? '') == 8 ? 'selected' : '' }}>Discount Offer</option>
        </select>
        @error('type')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>

    <!-- Meal Type -->
    <div class="form-group">
        <label class="small font-weight-bold text-dark">Meal Type*</label>
        <select class="form-control form-control-sm" name="meal" id="meal" >
            <option value="">Select</option>
            <option value="1" {{ old('meal', $offer->meal_type ?? '') == 1 ? 'selected' : '' }}>Full Board (Breakfast, Lunch &amp; Dinner)</option>
            <option value="2" {{ old('meal', $offer->meal_type ?? '') == 2 ? 'selected' : '' }}>Half Board (Breakfast &amp; Dinner)</option>
            <option value="3" {{ old('meal', $offer->meal_type ?? '') == 3 ? 'selected' : '' }}>Breakfast</option>
            <option value="4" {{ old('meal', $offer->meal_type ?? '') == 4 ? 'selected' : '' }}>All Inclusive</option>
            <option value="5" {{ old('meal', $offer->meal_type ?? '') == 5 ? 'selected' : '' }}>The LOBI Plan with Excursions (All Inclusive)</option>
            <option value="6" {{ old('meal', $offer->meal_type ?? '') == 6 ? 'selected' : '' }}>Deluxe All Inclusive</option>
            <option value="7" {{ old('meal', $offer->meal_type ?? '') == 7 ? 'selected' : '' }}>Premium All Inclusive Meal Plan</option>
        </select>
        @error('meal')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>

    <!-- Upload Image -->
    <div class="form-group mb-1">
        <label class="small font-weight-bold text-dark">Upload Image</label>
        <input type="file" class="form-control form-control-sm" name="file" id="fileupload">
        @error('file')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>

    <!-- Hidden Resort ID -->
    <input type="hidden" class="form-control form-control-sm" id="resortid" name="resortid" 
           value="{{ old('resortid', $resortid ?? '') }}">

    <!-- Submit Button -->
    <div class="form-group mt-2">
        <button type="submit" id="submitBtn" class="btn btn-outline-primary btn-sm w-50">
            <i class="far fa-save"></i>&nbsp;{{ isset($offer) ? 'Update' : 'Add' }}
        </button>
    </div>
</form>
