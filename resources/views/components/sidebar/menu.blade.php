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

<x-sidebar.sidebar-link :href="route('cms.podcast.index')" icon="ri-video-line" :active="request()->routeIs('cms.podcast.*')">
    Podcast
</x-sidebar.sidebar-link>

<x-sidebar.sidebar-link :href="route('cms.media.index')" icon="ri-folder-image-line" :active="request()->routeIs('cms.media.*')">
    Media
</x-sidebar.sidebar-link>

<x-sidebar.sidebar-link :href="route('cms.kategori.index')" icon="ri-price-tag-3-line" :active="request()->routeIs('cms.kategori.*')">
    Kategori
</x-sidebar.sidebar-link>

