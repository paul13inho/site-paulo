<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Template 4</title>
</head>
<body>

<section class="header">
    <nav>
        <span>logo</span>
        <div class="menu" id="menu">
            <i class="fa-solid fa-circle-xmark" onclick="hideMenu()"></i>
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">disclosure</a></li>
                <li><a href="#">contact us</a></li>
            </ul>
        </div>
        <i class="fa-solid fa-bars" onclick="showMenu()"></i>
    </nav>

    <div class="banner">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et iure maxime odit veritatis?
        </p>
        <form action="">
            <div class="input-wrapper">
                <label for="email">email</label>
                <input type="email" id="email">
            </div>
            <div class="input-wrapper">
                <label for="money">how much?</label>
                <input type="number" id="money">
            </div>
            <button>find money now</button>
        </form>
    </div>
</section>

<section class="go">
    <div>

    </div>
</section>


<script>
    var menu = document.getElementById("menu")

    function showMenu(){
        menu.style.right = "0";
    }

    function hideMenu(){
        menu.style.right = "-200px";
    }

</script>

</body>
</html>
