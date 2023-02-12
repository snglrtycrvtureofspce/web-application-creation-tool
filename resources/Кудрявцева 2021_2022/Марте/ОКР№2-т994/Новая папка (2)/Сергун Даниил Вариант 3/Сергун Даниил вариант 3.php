<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

    .circle {
        width: 120px;
        height: 120px;
        background: #7fee1d;
        border-radius: 60px;
    }

    </style>
    
    <script>
    function change_color(elem, color) 
    {
    elem.style.background = color;
    }   
    </script>

    <div class="circle" onclick="change_color(this,'red')"></div>
    <br>
    <div class="circle" onclick="change_color(this,'yellow')"></div>
    <br>
    <div class="circle" onclick="change_color(this,'green')"></div>
    <br>
    <div class="circle" onclick="change_color(this,'blue')"></div>
    <br>
    <div class="circle" onclick="change_color(this,'orange')"></div>

</body>
</html>