@extends('layouts.2col')

@section('middle')
    @can('update', $company)
        <div class="col-6 bg-white p-3 rounded">
            <h2>update company information</h2>

            <form method="POST" action="{{ route('companies.update') }}">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>

                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $company->name) }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                {{-- todo auto slug --}}
                <div class="form-group">
                    <label for="slug">{{ __('Slug') }}</label>

                    <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug', $company->slug) }}" required autofocus>

                    @if ($errors->has('slug'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('slug') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="description">{{ __('Description') }}</label>

                    <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required>{{ old('description', $company->description) }}</textarea>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="location">{{ __('Location') }}</label>

                    <select name="location" id="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" value="{{ old('location', $company->location) }}" required>
                        @foreach($locations as $location)
                            <option value="{{$location}}">{{$location}}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('location'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>

                {{--<div class="form-group">--}}
                {{--<label for="sub-location">{{ __('Sub Location') }}</label>--}}

                {{--<select name="sub-location" id="sub-location" class="form-control{{ $errors->has('sub-location') ? ' is-invalid' : '' }}" value="{{ old('sub-location', $company->) }}" required>--}}
                {{-- use Js to populate list --}}
                {{--</select>--}}

                {{--@if ($errors->has('sub-location'))--}}
                {{--<span class="invalid-feedback" role="alert">--}}
                {{--<strong>{{ $errors->first('sub-location') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
                {{--</div>--}}

                <div class="form-group">
                    <label for="address">{{ __('Address') }}</label>

                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address', $company->address) }}" required>

                    @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="contact">{{ __('Contact') }}</label>

                    <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact', $company->contact) }}" required>

                    @if ($errors->has('contact'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update Company Information') }}
                    </button>
                </div>
            </form>
        </div>
    @else
        <p class="p-3">you are not authorize to update this company information ... for more information plz contact administration</p>
    @endcan

@endsection
