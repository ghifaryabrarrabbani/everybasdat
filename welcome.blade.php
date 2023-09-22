<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghifary's Life!</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            flex-wrap: wrap;
        }
        .box {
            width: 45%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 10px;
            text-align: center;
            background-color:  #eaeaeaab;
            border-radius: 15px;
        }
    </style>
</head>
<body style="background-color: #ADD8E6;">
<p></p>
    <img src="{{ asset('Images/Ghifary.jpg')}}" style="display:block;margin: 0 auto; width: 400px; height: 300px; border-radius:20%" alt="Foto Profil">
    <h1 style="text-align: center; "><strong>Ghifary Abrar Rabbani</strong></h1>
    <p style="text-align: center;">Surabaya | ghifary.abrar.rabbani-2021@ftmm.unair.ac.id | 162112133013</p>
    <p style="text-align: center"><a href="https://github.com/ghifaryabrarrabbani">GitHub Profile</a> | <a href="https://www.linkedin.com/in/ghifaryabrarrabbani/">Linkedin Profile</a></p>
    <div class="container">
        <div class="box">
            <h2 style="text-align: center;">My ATS Curicculum Vitae</h2>
            <h3 style="text-align: center; font-weight: normal;">This CV will describe my brief journey during my college life in an ATS-friendly format.</h3>
            <p style="text-align: center"><a href="/cvats">Click here!</a></p>
            <h4 style="text-align: center;"></h4>
        <p></p>
        </div>
        <div class="box">
            <h2 style="text-align: center;">My Creative Curicculum Vitae</h2>
            <h3 style="text-align: center; font-weight: normal;">This CV will describe my brief journey during my college life in an Creative format.</h3>
            <p style="text-align: center"><a href="/cvint">Click here!</a></p>
            <h4 style="text-align: center;"></h4>
        </div>
    </div>
</body>
</html>
