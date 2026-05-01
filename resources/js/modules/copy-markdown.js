import ClipboardJS from "clipboard/dist/clipboard";

export default (url) => ({
    loading: false,
    copied: false,
    failed: false,
    async copy() {
        if (this.loading) {
            return
        }

        this.loading = true
        this.failed = false

        try {
            const response = await fetch(url)

            if (!response.ok) {
                throw new Error(`Request failed: ${response.status}`)
            }

            const text = await response.text()

            ClipboardJS.copy(text)

            this.copied = true

            setTimeout(() => this.copied = false, 2000)
        } catch (error) {
            console.error('Copy as markdown failed:', error)

            this.failed = true

            setTimeout(() => this.failed = false, 2500)
        } finally {
            this.loading = false
        }
    },
})
