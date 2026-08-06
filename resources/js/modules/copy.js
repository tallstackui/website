/**
 * Backing state for the documentation "Copy" dropdown.
 *
 * The markdown is fetched when the menu opens, never when an item is clicked:
 * `$tsui.copy` writes through the async Clipboard API first, and browsers drop
 * the user gesture across an `await fetch`, which would make the write fail.
 */
export default (urls = []) => ({
    contents: {},

    async prefetch() {
        const pending = urls.filter((url) => !(url in this.contents))

        await Promise.all(pending.map(async (url) => {
            try {
                const response = await fetch(url)

                if (!response.ok) {
                    throw new Error(`Request failed: ${response.status}`)
                }

                this.contents[url] = await response.text()
            } catch (error) {
                console.error('Prefetching the markdown failed:', error)
            }
        }))
    },

    async markdown(url) {
        const text = this.contents[url]

        if (!text) {
            this.notify('error', 'Nothing to copy', 'The markdown could not be fetched.')

            return
        }

        await this.write(text, 'Copied as markdown', 'The page is on your clipboard.')
    },

    async link(url) {
        await this.write(url, 'Copied as link', 'Hand it to an agent!')
    },

    async write(text, title, description) {
        const copied = await window.$tsui.copy(text)

        if (!copied) {
            this.notify('error', 'Copy failed', 'Your browser blocked the clipboard write.')

            return
        }

        this.notify('success', title, description)
    },

    notify(type, title, description) {
        window.$tsui.interaction('toast').stacked()[type](title, description).send()
    },
})
