/* Feeds --spot-x/--spot-y to cursor-tracking hover effects on landing panels. */
export default () => ({
  move(event) {
    const rect = this.$el.getBoundingClientRect()

    this.$el.style.setProperty('--spot-x', `${event.clientX - rect.left}px`)
    this.$el.style.setProperty('--spot-y', `${event.clientY - rect.top}px`)
  },
})
