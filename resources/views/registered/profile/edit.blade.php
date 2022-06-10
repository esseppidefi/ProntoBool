@extends('layouts.app1')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('professionist.profile.update', $coin->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="container mt-4">
                <h1>Edit Coin</h1>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="name" class="form-label">Coin Name</label>
                        <input type="text" class="form-control" placeholder="Titolo" id="name" name="name"
                            value="{{ old('name', $coin->name) }}"
                            style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="button" value="Generate Info" id="btn-slugger">


                    <div class="col-12">
                        <label for="email" class="form-label">Image <span
                                class="text-muted">(Optional)</span></label>
                        <input type="url" class="form-control" id="image" placeholder="Thumb" name="image"
                            value="{{ old('image', $coin->image) }}">
                        <div class="invalid-feedback">
                            Please enter a valid url image.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug"
                            value="{{ old('slug', $coin->slug) }}">
                        <div class="invalid-feedback">
                            Please generate a slug.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Description"
                            name="description" value="{{ old('description', $coin->description) }}">
                        <div class="invalid-feedback">
                            Please generate a description.
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <button class="w-50 btn btn-primary btn-lg mx-auto" type="submit">Edit info Coin</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
