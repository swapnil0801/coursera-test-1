<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function(){
            $('#btn1').click(function(){
                $('#test').load('q1.txt');
            });
            $('#btn2').click(function(){
                $('#test').load('q2.txt');
            });
            $('#btn3').click(function(){
                $('#test').load('q3.txt');
            });
        });
    </script>
</head>
<body>
    <div class="container">
<div id="test">
        <p>This Is AJAX test</p>
    </div>
    <div id="btn_holder">
        <button id='btn1'>Image 1</button>
        <button id='btn2'>Image 2</button>
        <button id='btn3'>Image 3</button>
    </div>
    </div>
    
    
</body>
</html>