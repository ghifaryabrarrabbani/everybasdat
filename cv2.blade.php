<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: 'Times New Roman', sans-serif;
            background-color: #ADD8E6;
            margin: 0;
            padding: 0;
        }

        #header {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
            
        }

        #header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        h1, h2, h3 {
            margin: 10px 0;
        }

        #about, #contact, #work-experience, #education, #skills, #interests {
            background-color: #fff;
            margin: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="header">
        <img src="{{asset('Images/Ghifary.jpg')}}" alt="Foto Profil">
        <h1>Ghifary Abrar Rabbani</h1>
        <p>Data Science Student</p>
    </div>

    <div id="about">
        <h2>About Me</h2>
        <hr style="border-radius: 5px; border-width: 2px;">
        <p>Highly organized and detail-oriented third-year undergraduate student majoring in Data Science. I have 
a strong passion for exploring new developments in the field. With excellent communication skills and 
experience in my Data Science program, I have developed a solid foundation in visualization data and 
analysis. Able to use languages such as Phyton and R, I have utilized these skills to gain insights from 
complex datasets and EDA. Additionally, I am well-versed in SQL to efficiently retrieve and manage 
data</p>
    </div>

    <div id="contact">
        <h2>Contact Information</h2>
        <hr style="border-radius: 5px; border-width: 2px;">
        <p>Alamat: Surabaya</p>
        <p>Email: <a href="ghifaryabrarrr@gmail.com">ghifaryabrarrr@gmail.com</a></p>
        <p>LinkedIn: <a href="https://www.linkedin.com/in/ghifaryabrarrabbani/">linkedin.com/in/ghifaryabrarrabbani/</a></p>
    </div>

    <div id="work-experience">
        <h2>Work Experience</h2>
        <hr style="border-radius: 5px; border-width: 2px;">
        <ul>
            <li>
                <h3>PT. Kimia Farma, TBK</h3>
                <p>Big Data Analyst-Project Virtual Internship</p>
                
                <p>August-September 2023</p>
            </li>
            <!-- Tambahkan pengalaman kerja lainnya jika diperlukan -->
        </ul>
    </div>

    <div id="education">
        <h2>Education</h2>
        <hr style="border-radius: 5px; border-width: 2px;">
        <ul>
            <li>
                <h3>Universitas Airlangga</h3>
                <p>Bachelor of Data Science</p>
                <p>2021-Now</p>
            </li>
            <li>
                <h3>SMA Muhammadiyah 2 Surabaya</h3>
                <p>2018-2021</p>
            </li>
            
        </ul>
    </div>

    <div id="skills">
        
        <h2>Skills</h2>
        <hr style="border-radius: 5px; border-width: 2px;">
        <ul>
            <li>Python</li>
            <li>SPSS</li>
            <li>MySQL</li>
            <li>Tableau</li>
            <li>Google Data Studio</li>
            <li>Canva</li>
            
        </ul>
    </div>

    <div id="interests">
        <h2>Interests</h2>
        <hr style="border-radius: 5px; border-width: 2px;">
        <ul>
            <li>Art</li>
            <li>Books</li>
            <li>Movies</li>
            <li>Music</li>
            <li>Games</li>
        </ul>
    </div>
</body>
</html>
