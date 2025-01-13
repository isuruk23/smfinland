
            <form action="{{ isset($winedine) ? route('winedine.update', $winedine->id) : route('winedine.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($winedine))
                        @method('PUT')
                    @endif

                    

                    <!-- Name -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">Title*</label>
                        <input type="text" class="form-control form-control-sm" id="title" name="title" 
                            value="{{ old('title', $winedine->title ?? '') }}" >
                        @error('title')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="form-group mb-1">
                        <label class="small font-weight-bold text-dark">Description*</label>
                        <input type="text" class="form-control form-control-sm" id="description" name="description" 
                            value="{{ old('description', $winedine->description ?? '') }}" >
                        @error('description')
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
                    <input type="hidden" class="form-control form-control-sm" id="resortid" name="resortid" 
                    value="{{ old('resortid', $resortid ?? '') }}" >
                        <button type="submit" id="submitBtn" class="btn btn-outline-primary btn-sm w-50">
                            <i class="far fa-save"></i>&nbsp;{{ isset($winedine) ? 'Update' : 'Add' }}
                        </button>
                    </div>
                </form>

               