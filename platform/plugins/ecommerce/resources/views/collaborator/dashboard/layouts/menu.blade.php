@php
    $menus = collect([
        [
            'key'   => 'marketplace.vendor.dashboard',
            'icon'  => 'icon material-icons md-home',
            'name'  => 'Tổng quan',
            'order' => 0,
        ],
        [
            'key'    => 'marketplace.vendor.products.index',
            'icon'   => 'icon material-icons md-shopping_bag',
            'name'   => __('Products'),
            'order' => 1,
        ],

        [
            'key'   => 'marketplace.vendor.settings',
            'icon'  => 'icon material-icons md-settings',
            'name'  => 'Cài đặt',
            'order' => 8,
        ],
        [
            'key'   => 'marketplace.vendor.dashboard',
            'icon'  => 'icon material-icons md-person',
            'name'  => 'Về giao diện tài khoản',
            'order' => 9,
        ],
    ]);

    $currentRouteName = Route::currentRouteName();
@endphp

{{--[--}}
{{--'key'   => 'collaborator.orders.index',--}}
{{--'icon'  => 'icon material-icons md-add_business',--}}
{{--'name'  => 'Đơn hàng Offline',--}}
{{--'order' => 4,--}}
{{--],--}}

<nav>
    <ul class="menu-aside">
        @foreach ($menus->sortBy('order') as $item)
            <li class="menu-item @if ($currentRouteName == $item['key'] || in_array($currentRouteName, Arr::get($item, 'routes', []))) active @endif">
                <a class="menu-link" @if(isset($item['target'])) target="{{$item['target']}}" @endif href="{{ route($item['key']) }}">
                    <i class="{{ $item['icon'] }}"></i>
                    <span class="text">{{ $item['name'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
    <br />
    <br />
</nav>
