<div class="card mb-3">
    <div class="card-body">

        <h5>search for listings</h5>
        <hr>

        <form class="form my-3" method="GET" action="{{ route('listings.search') }}">
            
            <div class="form-group">
                <label for="attr_one">attr_one</label>
                <input type="text" name="attr_one" id="attr_one" class="form-control">
            </div>

            <div class="form-group">
                <label for="attr_two">attr_two</label>
                <input type="text" name="attr_two" id="attr_two" class="form-control">
            </div>

            <button type="submit" class="btn btn-outline-primary mt-1"><i class="fa fa-search"></i>search</button>

        </form>
    </div>
</div>
