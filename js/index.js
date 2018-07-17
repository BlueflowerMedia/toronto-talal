var path = window.location.pathname;
var page = path.split("/")
var pageName = page[page.length - 2];

const movingArrow = document.querySelector('.moving-arrow');

let animation = anime({
  targets: movingArrow,
  translateX: '-30%',
  direction: 'alternate',
  duration:300,
  loop: true,
  easing: 'easeInCubic',
  autoplay: false
});

movingArrow.addEventListener('mouseover', () => {
  console.log("mouseover")
  animation.play()
})

movingArrow.addEventListener('mouseleave', () => {
  console.log("onmouseleave", animation)
  animation.pause()
})
