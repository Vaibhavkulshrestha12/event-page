<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="./src/css/styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
            overflow: hidden; 
        }

        .poster-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #10141c; 
        }

        .poster {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 0;
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
            color: white;
        }

        .popup h2 {
            margin: 0;
            font-size: 24px;
        }
    </style>
</head>
<body>

<div class="poster-container">
    
    <div id="successPopup" class="popup">
        <h2>Registration Successful!</h2>
    </div>
</div>

<script>
  window.onload = function() {
    document.getElementById('successPopup').style.display = 'block';
    setTimeout(function() {
      document.getElementById('successPopup').style.display = 'none'; 

      window.location.href = "index.html"; 
    }, 3000);
  }
</script>

</body>
</html>
