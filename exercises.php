<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Library</title>
    <link rel="stylesheet" href="exercises.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="Logo.png" alt="Logo">
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="WorkoutMate.html">Home</a></li>
                <li id="google_translate_element">Language</li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <style>
    .exercise-type {
        cursor: pointer;
    }
    .exercise-type .image-container img {
        width: 100%;
    }
    .exercise-type .type-name {
        font-weight: bold;
    }
    .exercise-card {
        border: 2px solid red; 
        display: none;
    }
    .exercise-card img {
        width: 200px;
        height: 150px;
    }
</style>

<div class="container">
    <h1>Exercise Library</h1>
    <div class="exercise-types">
        <div class="exercise-type" data-type="back">
            <div class="image-container">
                <img src="back.jpg" alt="Back Exercises">
            </div>
            <div class="type-name">Back</div>
            <div class="exercise-card"></div> 
        </div>
        <div class="exercise-type" data-type="chest">
            <div class="image-container">
                <img src="chest.jpg" alt="Chest Exercises">
            </div>
            <div class="type-name">Chest</div>
            <div class="exercise-card"></div> 
        </div>
        <div class="exercise-type" data-type="shoulders">
            <div class="image-container">
                <img src="shoulders.jpg" alt="Shoulders Exercises">
            </div>
            <div class="type-name">Shoulders</div>
            <div class="exercise-card"></div>
        </div>
        <div class="exercise-type" data-type="abs">
            <div class="image-container">
                <img src="abs.png" alt="abs Exercises">
            </div>
            <div class="type-name">Abs</div>
            <div class="exercise-card"></div>
        </div>
        <div class="exercise-type" data-type="biceps">
            <div class="image-container">
                <img src="biceps.jpg" alt="Biceps Exercises">
            </div>
            <div class="type-name">Biceps</div>
            <div class="exercise-card"></div> 
        </div>
    </div>
    <div class="exercise-types">
       
        <div class="exercise-type" data-type="triceps">
            <div class="image-container">
                <img src="triceps.jpg" alt="Triceps Exercises">
            </div>
            <div class="type-name">Triceps</div>
            <div class="exercise-card"></div> 
        </div>
        <div class="exercise-type" data-type="glutes">
            <div class="image-container">
                <img src="glutes.jpg" alt="Glutes Exercises">
            </div>
            <div class="type-name">Glutes</div>
            <div class="exercise-card"></div>
        </div>
        <div class="exercise-type" data-type="hamstrings">
            <div class="image-container">
                <img src="hamstrings.jpg" alt="Hamstrings Exercises">
            </div>
            <div class="type-name">Hamstrings</div>
            <div class="exercise-card"></div>
        </div>
        <div class="exercise-type" data-type="quads">
            <div class="image-container">
                <img src="quads.jpg" alt="Quads Exercises">
            </div>
            <div class="type-name">Quads</div>
            <div class="exercise-card"></div> 
        </div>
        <div class="exercise-type" data-type="calves">
            <div class="image-container">
                <img src="calves.jpg" alt="Calves Exercises">
            </div>
            <div class="type-name">Calves</div>
            <div class="exercise-card"></div> 
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr,es,', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    
    // JavaScript to toggle exercise cards on click
    const exerciseTypes = document.querySelectorAll('.exercise-type');
    exerciseTypes.forEach(exerciseType => {
        exerciseType.addEventListener('click', () => {
            const exerciseCard = exerciseType.querySelector('.exercise-card');
            exerciseCard.style.display = (exerciseCard.style.display === 'none' || exerciseCard.style.display === '') ? 'block' : 'none';
        });
    });
</script>

<script>
exerciseTypes.forEach(exerciseType => {
    exerciseType.addEventListener('click', async () => {
        const muscleGroup = exerciseType.getAttribute('data-type');
        const response = await fetch(`get-exercises.php?muscleGroup=${muscleGroup}`);
        const data = await response.json();

        // Display the retrieved exercise data in the respective exercise-card div
        const exerciseCard = exerciseType.querySelector('.exercise-card');
        exerciseCard.innerHTML = ""; 
        data.forEach(exercise => {
            const exerciseDiv = document.createElement('div');
            exerciseDiv.innerHTML = `
                <h3>${exercise.name}</h3>
                <img src="${exercise.image}" alt="${exercise.name}">
                <p>${exercise.description}</p>
                <iframe width="560" height="315" src="${exercise.videoLink}" frameborder="0" allowfullscreen></iframe>
            `;
            exerciseCard.appendChild(exerciseDiv);
        });
    });
});
</script>


<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
