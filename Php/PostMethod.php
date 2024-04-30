<?php
    include('HeaderAndFooter/mainheader.html');
?>

<html>
    <head>
        <title>Activity 6</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Css/PostMethod.css">
        <script src="Js/PostMethod.js"></script>
    </head>

    <body>
        <br>
            <center>
		    <p style="color: Black; font-size: 40pt; font-family: 'Lucida Handwriting';">My Dairy
            </p>

            <br>

            <p  style="color: Black; font-size: 15pt; font-family: Tahoma;">How was your day?</p>
        </center>
       <div class="container">
            <br>
            <h1>Good Vibes Form</h1> 

        <form method="POST" action="ActionPostMethod.php">
            
            <p style="color: black;">Tell us something positive that happened to you today.</p>
            <br>

            <!-- Name Input -->
            <label for="name">Name:</label> 
            <input type="text" id="nametext"name="name" placeholder="Name" required> 

            <br>
            <br>

            <!-- Email Input -->
            <label for="email">Email: </label> 
            <input type="email" id="emailtext" name="email" placeholder="Email" required> 
            
            <br>
            <br>

            <label for="scale"> On a scale of 1-10, how good was it?</label>

            <br>
            <br>

            <p style="margin-left: 5pt; color: black;">1
                <span style="margin-left: 18pt;">2</span>
                <span style="margin-left: 18pt;">3</span>
                <span style="margin-left: 18pt;">4</span>
                <span style="margin-left: 18pt;">5</span>
                <span style="margin-left: 18pt;">6</span>
                <span style="margin-left: 18pt;">7</span>
                <span style="margin-left: 18pt;">8</span>
                <span style="margin-left: 18pt;">9</span>
                <span style="margin-left: 16pt;">10</span>
            </p>
            
            <ul>
                <li class="bullet" data-value="1"></li>
                <li class="bullet" data-value="2"></li>
                <li class="bullet" data-value="3"></li>
                <li class="bullet" data-value="4"></li>
                <li class="bullet" data-value="5"></li>
                <li class="bullet" data-value="6"></li>
                <li class="bullet" data-value="7"></li>
                <li class="bullet" data-value="8"></li>
                <li class="bullet" data-value="9"></li>
                <li class="bullet" data-value="10"></li>
            </ul>

            <br>

            <!-- Scale Input -->
            <label for="selectedRating" style="text-decoration: underline;">Selected scale:</label>
            <input type="number" min="1" max="10" name="rating" id="selectedRating" readonly style="margin-left: 5pt; font-weight: bold;">

            <br>
            <br>

            <label for="place">Where did it happen?</label>
            <select name="place" id="place" onchange="chosenplace(this)">
              <option value="Home">Home</option>
              <option value="School">School</option>
              <option value="Work">Work</option>
              <option value="Public">Public</option>
            </select>
            
            <br>
            <br>

            <!-- Location Input -->
            <label for="place" style="text-decoration: underline;">It happens on:</label>
            <input type="text" id="selectedlocation" name="location" placeholder="Selected Location :>" readonly style="margin-left: 5pt; font-weight: bold;" value="Home" required>

            <br>
            <br>

            <label for="time">At what time of day did it happen?</label><br>
            <input type="radio" name="time" id="morning" value="Morning" onclick="chosenday(this)">Morning<br>
            <input type="radio" name="time" id="afternoon" value="Afternoon" onclick="chosenday(this)">Afternoon<br>
            <input type="radio" name="time" id="evening" value="Evening" onclick="chosenday(this)">Evening<br>
            
            <br>

            <!-- Day Input -->
            <label for="day" style="text-decoration: underline;">It happens on:</label>
            <input type="text" id="selectedday" name="day" placeholder="Selected Day :>" readonly style="margin-left: 5pt; font-weight: bold;" required>


            <br>
            <br>

            <!-- Emotion Input -->
            <label for="checkbox">What Emotion did you experience?<br><span style="margin-left: 90pt; font-size: small;">(Select all that apply)</span></label><br>
            <input type="checkbox" value="Energetic" id="Energetic" onchange="chosenemotion()">Energetic
            <br>
            <input type="checkbox" value="Happy" id="Happy" onchange="chosenemotion()">Happy
            <br>
            <input type="checkbox" value="SSDD" id="SSDD" onchange="chosenemotion()">SSDD(Same Shit, Different Day)
            <br>
            <input type="checkbox" value="Quite Good" id="QuiteGood" onchange="chosenemotion()">Quite Good
            <br>
            <input type="checkbox" value="Nevermind" id="Nevermind" onchange="chosenemotion()">Nevermind

            <br>
            <br>

            <label for="emotion" style="text-decoration: underline;">How was it?</label>
            <input type="text" id="emotions" name="emotion" placeholder="How do you feel?"readonly required style="margin-left: 5pt; font-weight: bold;">

            <br>
            <br>

            <!-- Textarea Input -->
            <label for="textarea">Can you elaborate exactly what happened?</label>
            <br>

            <textarea id="textarea" name="textarea" rows="4" cols="50" required></textarea>

            <br>
            <br>

            <input type="submit" id="submit" value="SUBMIT" required>
        </form>

        </div>
    </body>
</html>

<?php
    include('HeaderAndFooter/mainfooter.html');
?>