<!-- Sidebar Menu -->

<!-- /.sidebar-menu -->
<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        @foreach ($items as $item)
            <li class=" nav-item">
                <a href="{{ route($item['route']) }}"
                    class="d-flex align-items-center  {{ Route::is($item['active']) ? 'active' : '' }}">

                    <i class="{{ $item['icon'] }}"></i>
                    <p>
                        {{ $item['title'] }}
                        @if (isset($item['badge']))
                            <span class="right badge badge-danger">{{ $item['badge'] }}</span>
                        @endif
                    </p>
                </a>
            </li>
        @endforeach
    </ul>
</div>



