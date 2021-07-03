<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEOS</title>
    <link rel="stylesheet" href="css/navbar.css">
    <style>
        .wrap{
            width:1000px;
            margin: auto;
            margin-top: 100px;
        }
        .card{           
            width: 300px;
            font-size: 16px;
            text-align: center;
            float:left;
            font-family: Arial, Helvetica, sans-serif;
            margin:15px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgb(77, 75, 75);
            background-color: white;
        }
        .courseImage{
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .courseText{
            padding: 10px;
        }
        .courseButton{
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: rgb(12, 240, 12);
            border-radius: 20px;
            padding: 10px;
            cursor: pointer;
            border: none;
            color: white;
            font-weight: bold;
        }
        .courseButton:hover{
            background-color: rgb(6, 150, 6);
        }
    </style>
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
</head>
<body>
    <nav class="navbar">
        <a class="nav-brand" href="/index"><img id="logo" src="{{ asset('asset/img/logo.png') }}"></a>
        
       <input id="search" class="nav-item" type="search" placeholder="Search">
       <a href="/post" style = "margin-left : 50px; position:relative; bottom: 30px;">FORUM</a>
       <ul>
            <li>
                <a id="browse-btn" class="nav-item icon-btn" href="course.html"><i class="fas fa-compass"></i></a>
            </li>
            <li>
                <a id="user-btn" class="nav-item icon-btn" href="#"><i class="fas fa-user-circle"></i></a>
            </li>
        </ul>
    </nav>

    <div class="popup">
        <div class="popup-header">
            <a id="fullname">Kamaboko Gonpachiro</a>
            <a id="prof-btn" href="#">Go to profile</a>
        </div>

        <hr class="separator">

        <div class="popup-body">
            <a class="details-btn" href="#"><i class="fas fa-cog"></i> Settings</a>
            <a class="details-btn" href="#"><i class="fas fa-question-circle"></i> Help</a>
            <a class="details-btn" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
    </div>

    <div class="wrap">
        <div class="card">
            <img class="courseImage" src="{{ asset('asset/img/c_background.png') }}" alt="C">
            <div class="courseText">
                <h4><b>C</b></h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde soluta illum nesciunt, quam fuga saepe at aut tenetur pariatur quisquam eum fugiat iste impedit obcaecati, est accusamus, debitis minima quibusdam?</p>
            </div>
            <form action="/cpp"">
                <button class="courseButton">Take This Course</button>
            </form>            
        </div>
        <div class="card">
            <img class="courseImage" src="{{ asset('asset/img/cp_background.png') }}" alt="C++">
            <div class="courseText">
                <h4><b>C++</b></h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde soluta illum nesciunt, quam fuga saepe at aut tenetur pariatur quisquam eum fugiat iste impedit obcaecati, est accusamus, debitis minima quibusdam?</p>
            </div>
            <form action="/cpp"">
                <button class="courseButton">Take This Course</button>
            </form>
        </div>
        <div class="card">
            <img class="courseImage" src="{{ asset('asset/img/2.png') }}" alt="C" height="319px">
            <hr>
            <div class="courseText">
                <h4>Java</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde soluta illum nesciunt, quam fuga saepe at aut tenetur pariatur quisquam eum fugiat iste impedit obcaecati, est accusamus, debitis minima quibusdam?</p>
            </div>
            <form action="/cpp">
                <button class="courseButton">Take This Course</button>
            </form>
            
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="{{ asset('asset/js/navbar.js') }}"></script>
</body>
</html>