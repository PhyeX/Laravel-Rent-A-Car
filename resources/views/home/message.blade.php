@if ( $message = Session::get('success') )
    <h1>{{ $message }}</h1>
@endif
