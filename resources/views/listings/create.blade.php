@extends('layouts.2col')

@section('middle')

    <div class="col-md-8 bg-white rounded p-3">
        @can('create', \App\Models\Listing::class)
            <h2>Add New Listing</h2>
            <p>add new listing</p>

            <form method="POST" action="{{ route('listings.store') }}">
                @csrf

                <div class="form-group">
                    <label for="title" class="col-form-label">{{ __('title') }}</label>
                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="category">{{ __('Category') }}</label>

                    {{--<select name="category" id="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" value="{{ old('category') }}" required>--}}
                    {{--@foreach($catrgoriess as $catrgory)--}}
                    {{--<option value="{{$catrgory->id}}">{{$catrgory->name}}</option>--}}
                    {{--@endforeach--}}
                    {{--</select>--}}

                    <input id="category_id" type="text" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" value="{{ old('category_id') }}" required>

                    @if ($errors->has('category'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="attr_one" class="col-form-label">{{ __('attr_one') }}</label>

                    <input id="attr_one" type="text" class="form-control{{ $errors->has('attr_one') ? ' is-invalid' : '' }}" name="attr_one" value="{{ old('attr_one') }}" required autofocus>

                    @if ($errors->has('attr_one'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('attr_one') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="attr_two" class="col-form-label">{{ __('attr_two') }}</label>

                    <input id="attr_two" type="text" class="form-control{{ $errors->has('attr_two') ? ' is-invalid' : '' }}" name="attr_two" value="{{ old('attr_two') }}" required autofocus>

                    @if ($errors->has('attr_two'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('attr_two') }}</strong>
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="value" class="col-form-label">{{ __('value') }}</label>


                        <input id="value" type="text" class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="value" value="{{ old('value') }}" required autofocus>

                        @if ($errors->has('value'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('value') }}</strong>
                            </span>
                        @endif
                </div>

                {{--// todo--}}
                {{--// category name select list --}}

                <div class="form-group">
                    <label for="description" class="col-form-label">{{ __('Description') }}</label>

                    <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required>{{ old('description') }}</textarea>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                   @endif
                </div>

                <div class="form-group">
                    <label for="extra" class="col-form-label">{{ __('Extra') }}</label>

                    <textarea id="extra" type="text" class="form-control{{ $errors->has('extra') ? ' is-invalid' : '' }}" name="extra" required>{{ old('extra') }}</textarea>

                    @if ($errors->has('extra'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('extra') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="notes" class="col-form-label">{{ __('Notes') }}</label>

                    <textarea id="notes" type="text" class="form-control{{ $errors->has('notes') ? ' is-invalid' : '' }}" name="notes" required>{{ old('notes') }}</textarea>

                    @if ($errors->has('notes'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('notes') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mt-3">
                    <button  type="submit" class="btn btn-primary" id="">
                        {{ __('Add New Listing') }}
                    </button>
                </div>
            </form>
        @else
            <p class="p-3">you cant create new listings...for more information plz contact administration</p>
        @endcan
    </div>

@endsection
