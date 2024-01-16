
function displayTips() {
  fetch('workout-tips.json')
    .then((response) => response.json())
    .then((data) => {
      const tipsList = document.querySelector('.tips-list');

      data.tips.forEach((tip) => {
        const tipSection = document.createElement('section');
        tipSection.classList.add('tip');

        const tipTitle = document.createElement('h2');
        tipTitle.textContent = `Tip ${tip.id}: ${tip.title}`;

        const tipDescription = document.createElement('p');
        tipDescription.textContent = tip.description;

        tipSection.appendChild(tipTitle);
        tipSection.appendChild(tipDescription);

        tipsList.appendChild(tipSection);
      });
    })
    .catch((error) => {
      console.error('Error fetching tips:', error);
    });
}
window.addEventListener('load', displayTips);
