<div class="row">
@foreach($categories as $category)
        <div class="col-md-6">
            @include('admin.partials.category', ['category' => $category])
        </div>
    @endforeach
</div>
