<!-- Country -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Country*</label>
    <select class="form-control form-control-sm" name="country" id="country" >
        <option value="">Select</option>
        @foreach($countries as $country)
            <option value="{{ $country->id }}" {{ old('country', $resort->country ?? '') == $country->id ? 'selected' : '' }}>
                {{ $country->country_name }}
            </option>
        @endforeach
    </select>
    @error('country')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Category -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Category*</label>
    <select class="form-control form-control-sm" name="category" id="category">
        <option value="">Select</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category', $resort->category ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->type }}
            </option>
        @endforeach
    </select>
    @error('category')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Resort -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Resort*</label>
    <input type="text" class="form-control form-control-sm" id="resort" name="resort" value="{{ old('resort', $resort->resort ?? '') }}" >
    @error('resort')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Price -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Price*</label>
    <input type="text" class="form-control form-control-sm" id="price" name="price" value="{{ old('price', $resort->price ?? '') }}" >
    @error('price')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Offer -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Offer*</label>
    <select class="form-control form-control-sm" name="offer" id="offer">
        <option value="">Select</option>
        @foreach($offers as $offer)
            <option value="{{ $offer->id }}" {{ old('offer', $resort->offer ?? '') == $offer->id ? 'selected' : '' }}>
                {{ $offer->title }}
            </option>
        @endforeach
    </select>
    @error('offer')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Resort Type -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Resort Type*</label>
    <select class="form-control form-control-sm" name="resorttype" id="resorttype">
        <option value="">Select</option>
        @foreach($resortTypes as $resortType)
            <option value="{{ $resortType->id }}" {{ old('resorttype', $resort->resorttype ?? '') == $resortType->id ? 'selected' : '' }}>
                {{ $resortType->type }}
            </option>
        @endforeach
    </select>
    @error('resorttype')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Rates -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Rates*</label>
    <input type="text" class="form-control form-control-sm" id="rates" name="rates" value="{{ old('rates', $resort->rates ?? '') }}" >
    @error('rates')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Keywords -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Keywords*</label>
    <input type="text" class="form-control form-control-sm" id="keyword" name="keyword" value="{{ old('keyword', $resort->keyword ?? '') }}" >
    @error('keyword')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Summary -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Summary*</label>
    <input type="text" class="form-control form-control-sm" id="summery" name="summery" value="{{ old('summery', $resort->summery ?? '') }}" >
    @error('summery')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Description -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Description*</label>
    <textarea class="form-control" id="description" name="description" rows="3" >{{ old('description', $resort->description ?? '') }}</textarea>
    @error('description')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Location Map -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Location Map*</label>
    <input type="text" class="form-control form-control-sm" id="imap" name="imap" value="{{ old('imap', $resort->imap ?? '') }}" >
    @error('imap')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Address -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Address*</label>
    <input type="text" class="form-control form-control-sm" id="address" name="address" value="{{ old('address', $resort->address ?? '') }}" >
    @error('address')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Upload Image -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Front Image (600px*400px)</label>
    <input type="file" class="form-control form-control-sm" name="file">
    @error('file')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>

<!-- Upload Banner Image -->
<div class="form-group">
    <label class="small font-weight-bold text-dark">Banner Image (1920px*500px)</label>
    <input type="file" class="form-control form-control-sm" name="file2">
    @error('file2')
        <span class="text-danger small">{{ $message }}</span>
    @enderror
</div>
