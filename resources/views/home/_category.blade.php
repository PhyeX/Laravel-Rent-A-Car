@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

<div class ="category-nav">
    <span class="catgory-header">Categories <i class="fa fa-list"></i></span>
    <ul class="category-list">
    @foreach($parentCategories as $rs )
        <li class="dropdown side-dropdown">
        @if(count($rs->children))
            @include('categorytree',['children' => $rs->children ])
        @endif
        </li>
    @endforeach
    </ul>
</div>
