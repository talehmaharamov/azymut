@foreach($categories as $category)
    <li class="{{ $category->subcategories->isNotEmpty() ? 'has-dropdown' : '' }}">
        <a href="{{ $category->subcategories->isNotEmpty() ? '#' : route('frontend.selectedCategory', $category->slug) }}" class="nav-link">
            {{ $category->translate(app()->getLocale())->name ?? '' }}
        </a>
        @if($category->subcategories->isNotEmpty())
            @include('includes.menu', ['categories' => $category->subcategories])
        @endif
    </li>
@endforeach
