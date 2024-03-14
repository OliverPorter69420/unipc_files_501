const mainNode = document.getElementById('main')
const toggleNode = document.getElementById('toggle')

toggleNode.addEventListener('click', function() {
  mainNode.classList.toggle('--blue')
})