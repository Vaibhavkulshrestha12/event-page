<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="./src/css/styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #1e3a8a; /* Tailwind primary blue dark color */
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }

        .poster-container {
            position: relative;
            text-align: center;
        }

        .poster {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .popup {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            display: none;
        }

        .popup h2 {
            margin: 0;
            font-size: 24px;
        }
    </style>
</head>
<body>

<div class="poster-container">
    <img src="./src/assets/poster.png" alt="Event Poster" class="poster">
    <div id="successPopup" class="popup">
        <h2>Registration Successful!</h2>
    </div>
</div>

<script>
   
    window.onload = function() {
        document.getElementById('successPopup').style.display = 'block';

      
        setTimeout(function() {
            document.getElementById('successPopup').style.display = 'none';
        }, 3000);
    }
</script>

</body>
</html>
