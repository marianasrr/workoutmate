<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Routines</title>
    <link rel="stylesheet" type="text/css" href="workout-routines.css">
   
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
    
    <div class="container">
        <h1>Workout Routines</h1>
        <label for="bodyPart">Choose Upper or Lower Body:</label>
        <select id="bodyPart">
            <option value="upper">Upper Body</option>
            <option value="lower">Lower Body</option>
        </select>
        <div class="routine-list" id="routineList">
           
            
        </div>
    </div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript">
    function fetchWorkoutRoutines(bodyPart) {
        const routineList = document.getElementById('routineList');
        routineList.innerHTML = ''; 

        fetch(`get_workout_routines.php?bodyPart=${bodyPart}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(routine => {
                    const routineDiv = document.createElement('div');
                    routineDiv.innerHTML = `
                        <h3>${routine.name}</h3>
                        <p>${routine.description}</p>
                    `;

                   
                    routine.exercises.forEach(exercise => {
                        routineDiv.innerHTML += `
                            <p>${exercise.name}</p>
                            <p>Sets: ${exercise.sets}, Reps: ${exercise.reps}, Rest Period: ${exercise.restPeriod}</p>
                        `;
                    });

                    routineList.appendChild(routineDiv);
                });
            });
    }

  
    document.getElementById('bodyPart').addEventListener('change', (event) => {
        const selectedBodyPart = event.target.value;
        fetchWorkoutRoutines(selectedBodyPart);
    });
</script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
