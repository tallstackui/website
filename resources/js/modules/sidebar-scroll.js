const selector = '[data-sidebar-scroll]'

let position = 0

export default function sidebarScroll() {
  document.addEventListener('livewire:navigating', () => {
    const sidebar = document.querySelector(selector)

    if (!sidebar) {
      return
    }

    position = sidebar.scrollTop
  })

  document.addEventListener('livewire:navigated', () => {
    // The swapped-in sidebar has no layout yet (scrollHeight = 0), so any
    // scrollTop assignment clamps to 0. Wait one frame before restoring.
    requestAnimationFrame(() => {
      const sidebar = document.querySelector(selector)

      if (!sidebar) {
        return
      }

      sidebar.scrollTop = position
    })
  })
}
