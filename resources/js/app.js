import './bootstrap';
import clipboard from "./modules/clipboard";

document.addEventListener('alpine:init', () => {
    window.Alpine.data('clipboard', clipboard)
});
