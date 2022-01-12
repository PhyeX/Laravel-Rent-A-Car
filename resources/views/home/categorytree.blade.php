@foreach($children as $subcategory)
    <ul class ="list-links">
        @if( count($subcategory -> children ))
            <li style="">{{ $subcategory->title }}</li>
            <ul class="list-links">
                @include('home.categorytree',['children' => $subcategory->$children])
            </ul>
            <hr>
        @else
            <li><a href="a">{{$subcategory->title}}</a></li>
        @endif

    </ul>
@endforeach
