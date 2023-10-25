const words = ['Software Developer.', 'Game Developer.'];
let currentWord = 0;
let currentLetter = 0;
let erasing = false;

const typewriterElement = document.getElementById('typewriter');

function typeWriter() {
  if (!erasing) {
    if (currentLetter < words[currentWord].length) {
      typewriterElement.textContent += words[currentWord][currentLetter];
      currentLetter++;
      setTimeout(typeWriter, 50);
    } else {
      erasing = true;
      setTimeout(typeWriter, 500);
    }
  } else {
    if (currentLetter > 0) {
      typewriterElement.textContent = words[currentWord].substring(0, currentLetter - 1);
      currentLetter--;
      setTimeout(typeWriter, 50);
    } else {
      erasing = false;
      currentWord = (currentWord + 1) % words.length;
      setTimeout(typeWriter, 500);
    }
  }
}

setTimeout(typeWriter, 500);
