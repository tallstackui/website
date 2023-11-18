import ClipboardJS from "clipboard/dist/clipboard";

export default (text, hash) => ({
    text: text,
    notification: false,
    copy() {
        const clipboard = new ClipboardJS(`[data-ref="${hash}"]`, {
            text: () => this.text
        });

        clipboard.on('success', (event) => {
            this.notification = true;

            event.clearSelection();

            setTimeout(() => this.notification = false, 3000);
        });

        clipboard.on('error', () => alert('Failed to copy!'));
    }
})
