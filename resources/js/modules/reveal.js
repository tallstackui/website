/* Scroll-triggered entrance for `[data-reveal]` elements on the landing page. */
export default function reveal() {
  const elements = document.querySelectorAll('[data-reveal]')

  if (elements.length === 0) {
    return
  }

  if (!('IntersectionObserver' in window)) {
    elements.forEach((element) => element.classList.add('landing-revealed'))

    return
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return
        }

        entry.target.classList.add('landing-revealed')

        observer.unobserve(entry.target)
      })
    },
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' },
  )

  elements.forEach((element) => observer.observe(element))
}
