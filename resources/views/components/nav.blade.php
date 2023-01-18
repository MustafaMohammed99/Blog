<!-- Sidebar Menu -->

<!-- /.sidebar-menu -->
<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        @foreach ($items as $item)
            <li class=" nav-item">
                @if ($item['route'] === 'dashboard.users.edit')
                    <a href="{{ route($item['route'],Auth::user()->id) }}"
                        class="d-flex align-items-center  {{ Route::is($item['active']) ? 'active' : '' }}">
                    @else
                        <a href="{{ route($item['route']) }}"
                            class="d-flex align-items-center  {{ Route::is($item['active']) ? 'active' : '' }}">
                @endif

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
