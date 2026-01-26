<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INS3064 Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            max-width: 600px;
            text-align: center;
        }
        h1 { color: #667eea; margin-bottom: 20px; }
        .info { background: #f0f0f0; padding: 20px; border-radius: 5px; margin: 20px 0; }
        .info p { margin: 10px 0; text-align: left; }
        .label { font-weight: bold; color: #667eea; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to INS3064</h1>
        
        <div class="info">
            <?php
                /* SECTION 2.3: PRACTICAL TASK INSTRUCTIONS
                   Task: Display Student Info and System Date/Time 
                */

                // 1. Khai báo biến (Variable assignments)
                $name = "Phạm Trà My"; 
                $studentId = "22070559"; 
                $class = "INS3064";
                $email = "22070559@vnu.edu.vn";

                // 2. Sử dụng echo để hiển thị thông tin (At least 4 echo statements)
                echo "<p><span class='label'>Name:</span> " . $name . "</p>";
                echo "<p><span class='label'>Student ID:</span> " . $studentId . "</p>";
                echo "<p><span class='label'>Class:</span> " . $class . "</p>";
                echo "<p><span class='label'>Email:</span> " . $email . "</p>";

                // 3. Hiển thị ngày (Format: Monday, January 26, 2026)
                echo "<p><span class='label'>Date:</span> " . date("l, F j, Y") . "</p>";

                // 4. Hiển thị giờ (Format: HH:MM:SS)
                echo "<p><span class='label'>Time:</span> " . date("H:i:s") . "</p>";
            ?>
        </div>
        
        <p style="font-size: 0.8em; color: #666;">
            Server-side generated content using PHP
        </p>
    </div>
</body>
</html>