
document.addEventListener("DOMContentLoaded", function() {
    
    const toggleButton = document.querySelector('.toggle-button');
    const hiddenText = document.querySelector('.hidden-text');

    toggleButton.addEventListener('click', () => {
       
        if (hiddenText.style.display === 'none' || hiddenText.style.display === '') {
            hiddenText.style.display = 'block';
            toggleButton.textContent = '-'; 
        } else {
            hiddenText.style.display = 'none';
            toggleButton.textContent = '+'; 
        }
    });
});

