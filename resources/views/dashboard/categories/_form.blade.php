@if ($errors->any())
    <div class="alert alert-danger">
        <h3>Error Occured!</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <x-form.input label="Category Name" class="form-control-lg" role="input" name="name" :value="$category->name" />
</div>


<div class="form-group">
    <x-form.select id="parent_id" name="parent_id" label="Category Parent:" :selected="$category->parent_id" :options="$parents"/>
</div>


<div class="form-group">
    <x-form.label id="image">Image</x-form.label>
    <x-form.input type="file" name="image" accept="image/*" />
    @if ($category->image)
        <div>{{$category->image}}</div>
        <img src="{{ asset( $category->image) }}" alt="" height="60">
    @endif
</div>

<div class="form-group">
    <label for="">Status</label>
    <div>
        <x-form.radio name="status" :checked="$category->status" :options="['active' => 'Active', 'archived' => 'Archived']" />
    </div>
</div>

<div class="form-group">
    <label for="">Distinctive</label>
    <div>
        <x-form.radio name="distinctive" :checked="$category->distinctive" :options="['yes' => 'Yes', 'no' => 'No']" />
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
