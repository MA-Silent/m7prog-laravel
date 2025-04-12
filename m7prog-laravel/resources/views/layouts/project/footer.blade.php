@yield('scripts')
<footer class="flex justify-evenly m-0 p-0">
    <x-nav-link :href="route('about.index')" :active="request()->routeIs('about.index')">{{ __('About') }}</x-nav-link>
    <x-nav-link :href="route('project.index')" :active="request()->routeIs('project.index')">{{ __('Projects') }}</x-nav-link>
</footer>