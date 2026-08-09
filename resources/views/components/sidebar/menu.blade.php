<x-sidebar.sidebar-link :href="route('cms.dashboard')" icon="ri-dashboard-line" :active="request()->routeIs('cms.dashboard')">
    Dashboard
</x-sidebar.sidebar-link>

<x-sidebar.sidebar-link :href="route('cms.artikel.index')" icon="ri-newspaper-line" :active="request()->routeIs('cms.artikel.*')">
    Artikel
</x-sidebar.sidebar-link>

<x-sidebar.sidebar-link :href="route('cms.publikasi.index')" icon="ri-booklet-line" :active="request()->routeIs('cms.publikasi.*')">
    Publikasi
</x-sidebar.sidebar-link>

<x-sidebar.sidebar-link :href="route('cms.mading.index')" icon="ri-artboard-line" :active="request()->routeIs('cms.mading.*')">
    Mading
</x-sidebar.sidebar-link>
