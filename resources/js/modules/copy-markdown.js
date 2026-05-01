import ClipboardJS from "clipboard/dist/clipboard";

export default (defaultUrl = null) => ({
    open: false,
    loading: false,
    copied: false,
    failed: false,
    async copy(url = null) {
        const target = url || defaultUrl

        if (!target || this.loading) {
            return
        }

        this.loading = true
        this.failed = false

        try {
            const response = await fetch(target)

            if (!response.ok) {
                throw new Error(`Request failed: ${response.status}`)
            }

            const text = await response.text()

            ClipboardJS.copy(text)

            this.copied = true
            this.open = false

            setTimeout(() => this.copied = false, 2000)
        } catch (error) {
            console.error('Copy as markdown failed:', error)

            this.failed = true
            this.open = false

            setTimeout(() => this.failed = false, 2500)
        } finally {
            this.loading = false
        }
    },
})
