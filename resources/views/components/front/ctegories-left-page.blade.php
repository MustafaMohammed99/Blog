 <!-- categories  -->
 <div class="widget widget-categories ">
    <h4 class="widget-title"><span>الأصناف</span></h4>
    <ul class="list-unstyled widget-list">
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->id) }}"
                    style=" padding-right: 15px;" class="d-flex">
                    {{ $category->name . '      (' . $category->posts_count . ')' }}
                </a>
            </li>
        @endforeach
    </ul>

</div>



