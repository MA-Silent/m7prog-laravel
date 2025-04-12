@yield('scripts')
<footer class="flex justify-evenly m-0 p-0">
    <x-nav-link :href="route('test')" :active="request()->routeIs('test')">{{ __('Test') }}</x-nav-link>
    <x-nav-link :href="route('about.index')" :active="request()->routeIs('about.index')">{{ __('About') }}</x-nav-link>
</footer>