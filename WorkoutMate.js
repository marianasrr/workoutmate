function showExercises() {
    
    window.location.href = "exercises.php";
}

function showWorkoutRoutines() {
    
    window.location.href = "workout-routines.php";
}

function showWorkoutTips() {
   
    window.location.href = "workout-tips.php";
}
function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
// About us JS
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
