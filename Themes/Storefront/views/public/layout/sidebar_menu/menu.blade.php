<ul class="list-inline {{ $type === 'category_menu' ? 'sidebar-menu' : 'account-sidebar' }}">
    @foreach ($menu->menus() as $menu)
        <li class="{{ $menu->hasSubMenus() ? 'dropdown multi-level' : '' }} {{ is_current_url($menu->url()) ? 'active' : '' }}">
            <a href="{{ $menu->url() }}" class="menu-item" target="{{ $menu->target() }}">
                @if ($menu->hasIcon())
                    @if($type === 'category_menu')
                        <span class="menu-item-icon">
                            <i class="{{ $menu->icon() }}"></i>
                        </span>
                    @else
                        <i class="{{ $menu->icon() }}"></i>
                    @endif
                @endif

                {{ $menu->name() }}
            </a>

            @if ($menu->hasSubMenus())
                @include('public.layout.sidebar_menu.dropdown', ['subMenus' => $menu->subMenus()])
            @endif
        </li>
    @endforeach

    @if ($type === 'category_menu')
        <li class="more-categories">
            <a href="{{ route('categories.index') }}" class="menu-item">
                <span class="menu-item-icon">
                    <i class="las la-plus-square"></i>
                </span>

                {{ trans('storefront::layout.all_categories') }}
            </a>
        </li>
    @else
        @auth
            <li>
                <a href="{{ route('logout') }}" class="menu-item">
                    Logout
                </a>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}" class="menu-item">
                    Login
                </a>
            </li>
        @endauth
    @endif
</ul>
