import './bootstrap';
import clipboard from "./modules/clipboard";
import docsearch from '@docsearch/js';

/* clipboard */
document.addEventListener('alpine:init', () => {
    window.Alpine.data('clipboard', clipboard)
});

/* smooth navigation */
document.addEventListener('livewire:init', () => {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault()

            const hash = this.getAttribute('href')

            document.querySelector(hash)?.scrollIntoView({
                behavior: 'smooth'
            })

            history.pushState(null, null, hash)
        })
    })

    const hash = window.location.hash

    if (hash) {
        document.querySelector(hash)?.scrollIntoView({
            behavior: 'smooth'
        })
    }
})

/* algolia */
docsearch({
    appId: 'I2TEBW9Z1H',
    apiKey: '378dd543d0d51d43ef1f493c55eb5341',
    indexName: 'tallstackui',
    container: '#docsearch',
    insights: true,
    debug: false
});
