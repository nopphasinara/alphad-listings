<div class="card mb-3">
    <div class="card-body">

        <h5>search for companies</h5>
        <hr>

        <form class="form my-3" method="GET" action="{{ route('companies.search') }}">
            {{--<div class="form-group">--}}
                {{--<label for="categories">categories</label>--}}
                {{--<select name="categories" id="categories" class="form-control">--}}
                    {{--@foreach($categoriess as $categories)--}}
                        {{--<option value="{{$categories}}">{{$categories}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}

            <div class="form-group">
                <label for="location">location</label>
                <select name="location" id="location" class="form-control">
                    @foreach($locations as $location)
                        <option value="{{$location}}">{{$location}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-outline-primary mt-1"><i class="fa fa-search"></i>search</button>

        </form>
    </div>
</div>
