<div class="pr-3">

    <h1 class="display-5 mb-4"><a class="text-dark" href="/">{{ config('app.name', 'Alphad-Listings') }}</a></h1>

    @include('partials.profile')

    @include('partials.admin')

    <ul class="nav flex-column">
        <li class="nav-item">
            <a  class="nav-link text-secondary" href="{{ route('companies.index') }}">companies</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link text-secondary" href="{{ route('listings.index') }}">listings</a>
        </li>
    </ul>

</div>