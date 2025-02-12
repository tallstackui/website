import './bootstrap';
import clipboard from "./modules/clipboard";
import docsearch from '@docsearch/js';

/* clipboard */
document.addEventListener('alpine:init', () => {
    window.Alpine.data('clipboard', clipboard)
});

/* algolia */
docsearch({
    appId: 'I2TEBW9Z1H',
    apiKey: '7fa6fdbd890560e79484bd1f4f8e6f40',
    indexName: 'tallstackui',
    container: '#docsearch',
    insights: true,
    debug: false,
    searchParameters: {
        facetFilters: ['version:' + window.version],
    },
});
