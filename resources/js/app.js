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
    apiKey: '378dd543d0d51d43ef1f493c55eb5341',
    indexName: 'tallstackui',
    container: '#docsearch',
    insights: true,
    debug: false,
    searchParameters: {
        facetFilters: ['version:' + window.version],
    },
});
