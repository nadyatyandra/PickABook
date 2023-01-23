@if (!Auth::check())
    @include('layout.headerGuest')
@else
    @if (Auth::user()->role_id == 1)
        @include('layout.headerAdmin')
    @elseif (Auth::user()->role_id == 2)
        @include('layout.headerMember')
    @endif
@endif
