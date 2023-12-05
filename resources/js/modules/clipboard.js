import ClipboardJS from "clipboard/dist/clipboard";

export default (text = null, hash = null) => ({
    text: text,
    notification: false,
    copy() {
        if (!text || !hash) {
            return;
        }

        const clipboard = new ClipboardJS(`[data-ref="${hash}"]`, {
            text: () => this.text
        });

        clipboard.on('success', (event) => {
            this.notification = true;

            event.clearSelection();

            setTimeout(() => this.notification = false, 3000);
        });

        clipboard.on('error', () => alert('Failed to copy!'));
    },
    raw(text, hash) {
        const clipboard = new ClipboardJS(`[data-ref="${hash}"]`, {
            text: () => text
        });

        clipboard.on('success', (event) => {
            this.notification = true;

            event.clearSelection();

            setTimeout(() => this.notification = false, 500);
        });

        clipboard.on('error', () => alert('Failed to copy!'));
    }
})
