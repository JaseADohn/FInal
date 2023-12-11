<?php
$pageTitle = "Home";
include "view-header.php";
?>
<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(45deg, #ffcc00, #ffcc00 40%, #ffd699 40%, #ffd699 60%, #ff6666 60%, #ff6666);
        }

        h1 {
            color: #333;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 8px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #fff;
        }
    </style>
      <h1>Final Project: To Do Sticky Notes</h1>
<?php
include "view-footer.php";
?>
