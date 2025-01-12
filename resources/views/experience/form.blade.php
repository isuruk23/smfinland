<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $experience->name ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="summary" class="form-label">Summary</label>
    <textarea name="summary" class="form-control">{{ old('summary', $experience->summary ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" required>{{ old('description', $experience->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Front Image (600px*400px)</label>
    <input class="form-control" type="file" id="image" name="image">
</div>