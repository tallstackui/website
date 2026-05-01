import './bootstrap';
import clipboard from "./modules/clipboard";
import copyMarkdown from "./modules/copy-markdown";
import docsearch from '@docsearch/js';

/* clipboard */
document.addEventListener('alpine:init', () => {
    window.Alpine.data('clipboard', clipboard)
    window.Alpine.data('copyMarkdown', copyMarkdown)
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
