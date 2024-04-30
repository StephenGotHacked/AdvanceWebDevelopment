<?php
	include('HeaderAndFooter/mainheader.html');
?>

<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" href="Css/ActionPostMethod.css">
</head>
<body>

    <div class="defaultplace">
        <a href="PostMethod.php"><</a>
    <div class="container">
        <h1>Result of your Form</h1>

<?php
        # Name Condition
        if(!empty($_POST['name'])){
                $name = $_POST['name'];
                echo '<label class="label">Hello , </label><label class="underline">',$name,'</label>';
            }
        else {
            echo '<p class= "error"> Go Back it seems the input has error!</p>';
        }

        # Email Condition
        if (!empty($_POST['email'])){
                $email = $_POST['email'];
                echo '<br><br><label class="label">Your Email: </label><label class="underline">',$email,'</label>';
            }
        else{
            echo '<h4 class="error"> Go Back it seems the input has error!</h4>';
        }

        # Rating Condition
        if (!empty($_POST['rating'])){
                $rating = $_POST['rating'];
                echo '<br><br><label class="label">Your Rate: </label><label class="underline">',$rating,'</label>';
        }
        else{
            echo '<h4 class="error"> Go Back it seems the input has error!</h4>';
        }

        # Place Condition
        if (!empty($_POST['location'])) {
                $location = $_POST['location'];
                echo '<br><br><label class="label">Located at: </label><label class="underline">',$location,'</label>';
        }
        else{
            echo '<h4 class="error"> Where did it happen?</h4>';
        }

        # Time Condition
        if(!empty($_POST['day'])){
                $day = $_POST['day'];
                echo '<br><br><label class="label">It Happens on: </label><label class="underline">',$day,'</label>';
        }
        else{
            echo '<h4 class="error"> Go Back it seems the input has error!</h4>';
        }

        # Emotion Condition
        if (!empty($_POST['emotion'])){
                $emotion = $_POST['emotion'];
                echo '<br><br><label class="label">Wow, you feel </label>', '<label class="underline">', $emotion , '</label>','<label  class="label">, I hope you feel better accurately.</label>';
        }
        else{
            echo '<h4 class="error"> Go Back it seems the input has error!</h4>';
        }


        # Textarea Condition
        if (!empty($_POST['textarea'])){
                $textarea = $_POST['textarea'];
                echo '<br><br><label class="label">Comment: </label> <label class="underline">' , $textarea ,'</label><br><br>';
        }
        else{
            echo '<h4 class="error"> Go Back it seems the input has error!</h4>';
        }
        ?>
</div>
</div>

</body>
</html>

<?php
    include('HeaderAndFooter/mainfooter.html');
?>