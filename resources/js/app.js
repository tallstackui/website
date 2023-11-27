import './bootstrap';
import clipboard from "./modules/clipboard";
import docsearch from '@docsearch/js';

document.addEventListener('alpine:init', () => {
    window.Alpine.data('clipboard', clipboard)
});

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

docsearch({
    appId: 'R2IYF7ETH7',
    apiKey: '599cec31baffa4868cae4e79f180729b',
    indexName: 'docsearch',
    container: '#docsearch',
    debug: false
});
