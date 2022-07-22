window.addEventListener('scroll', onScroll)

const backToTopButton = document.getElementById('backToTopButton')

onScroll()
function onScroll() {
  showBackToTopButtonOnScroll()
}

function showBackToTopButtonOnScroll() { 
  if (scrollY > 550) {
    backToTopButton.classList.add('show')
  } else {
    backToTopButton.classList.remove('show')
  }
}

ScrollReveal({
  origin: 'top',
  distance: '30px',
  duration: 700
}).reveal(`
  #home, 
  #home img, 
  #home .stats,
  #services,
  #services header,
  #services .card,
  #about,
  #about header,
  #about .content`)
