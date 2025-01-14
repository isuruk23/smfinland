
                <form 
                    action="{{ isset($villa) ? route('villas.update', $villa->id) : route('villas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($villa))
                        @method('PUT')
                    @endif

                    <!-- Type -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">Type*</label>
                        <select class="form-control form-control-sm" name="type" id="type" >
                            <option value="">Select</option>
                            <option value="Villa" {{ old('type', $villa->type ?? '') == 'Villa' ? 'selected' : '' }}>Villa</option>
                            <option value="Room" {{ old('type', $villa->type ?? '') == 'Room' ? 'selected' : '' }}>Room</option>
                        </select>
                        @error('type')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Name -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">Name*</label>
                        <input type="text" class="form-control form-control-sm" id="name" name="name" 
                            value="{{ old('name', $villa->name ?? '') }}" >
                        @error('name')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">Description*</label>
                        <input type="text" class="form-control form-control-sm" id="description" name="description" 
                            value="{{ old('description', $villa->description ?? '') }}" >
                        @error('description')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Room Size -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">Room Size*</label>
                        <input type="text" class="form-control form-control-sm" id="roomsize" name="roomsize" 
                            value="{{ old('roomsize', $villa->roomsize ?? '') }}" >
                        @error('roomsize')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Sleep Bed -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">Sleep Bed*</label>
                        <input type="text" class="form-control form-control-sm" id="bed" name="bed" 
                            value="{{ old('bed', $villa->bed ?? '') }}" >
                        @error('bed')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- View -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">View*</label>
                        <input type="text" class="form-control form-control-sm" id="view" name="view" 
                            value="{{ old('view', $villa->view ?? '') }}" >
                        @error('view')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Wifi -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">Wifi*</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="wifi" id="wifi0" value="0" 
                                {{ old('wifi', $villa->wifi ?? '') == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="wifi0">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="wifi" id="wifi1" value="1" 
                                {{ old('wifi', $villa->wifi ?? '') == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="wifi1">Yes</label>
                        </div>
                        @error('wifi')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- AC -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">AC*</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ac" id="ac0" value="0" 
                                {{ old('ac', $villa->ac ?? '') == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="ac0">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ac" id="ac1" value="1" 
                                {{ old('ac', $villa->ac ?? '') == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="ac1">Yes</label>
                        </div>
                        @error('ac')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Private Bathroom -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">Private Bathroom*</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="barthroom" id="barthroom0" value="0" 
                                {{ old('barthroom', $villa->barthroom ?? '') == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="barthroom0">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="barthroom" id="barthroom1" value="1" 
                                {{ old('barthroom', $villa->barthroom ?? '') == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="barthroom1">Yes</label>
                        </div>
                        @error('barthroom')
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

                    <!-- Submit Button -->
                    <div class="form-group mt-2">
                        <input type="hidden" name="resort" value="{{$resortid}}">
                        <button type="submit" id="submitBtn" class="btn btn-outline-primary btn-sm w-50">
                            <i class="far fa-save"></i>&nbsp;{{ isset($villa) ? 'Update' : 'Add' }}
                        </button>
                    </div>
                </form>

               