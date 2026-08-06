import './bootstrap';
import clipboard from "./modules/clipboard";
import copy from "./modules/copy";
import reveal from "./modules/reveal";
import spotlight from "./modules/spotlight";
import sidebarScroll from "./modules/sidebar-scroll";
import docsearch from '@docsearch/js';

/* landing entrance reveals */
document.addEventListener('DOMContentLoaded', reveal);

/* docs sidebar scroll persistence across wire:navigate */
sidebarScroll();

/* clipboard */
document.addEventListener('alpine:init', () => {
    window.Alpine.data('clipboard', clipboard)
    window.Alpine.data('copy', copy)
    window.Alpine.data('spotlight', spotlight)
});

/* algolia */
docsearch({
    appId: window.algolia_app_id,
    apiKey: window.algolia_search_key,
    indexName: 'tallstackui',
    container: '#docsearch',
    insights: true,
    debug: false,
    searchParameters: {
        facetFilters: ['version:' + window.version],
    },
});
