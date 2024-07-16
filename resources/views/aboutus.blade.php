<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><span style="color: #ff69b4">{{ $ke }}</span></title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
       .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
       .header {
            background-image: url('https://images.unsplash.com/photo-1518791841217-8f3e05ce6559?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max');
            background-size: cover;
            background-position: center;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
        }
       .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            color: #ff69b4; /* added a pink color to the header title */
        }
       .header p {
            font-size: 1.2rem;
        }
       .section {
            margin-bottom: 30px;
        }
       .section h2 {
            font-size: 2rem;
            color: #4a4a4a;
            margin-bottom: 10px;
        }
       .section p {
            font-size: 1.1rem;
            color: #7a7a7a;
            line-height: 1.5;
        }
       .section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
       .section li {
            margin-bottom: 10px;
        }
       .section a {
            color: #007bff;
            text-decoration: none;
        }
       .section a:hover {
            text-decoration: underline;
        }
       .image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }
       .footer {
            background-color: #333;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $ke }}</h1>
            <p>Welcome to the official website of the Ministry of Economy in Malaysia.</p>
        </div>
        <div class="section">
            <h2>About Us</h2>
            <p>The Ministry of Economy is responsible for formulating and implementing economic policies in Malaysia. Our mission is to promote sustainable and inclusive economic growth, create job opportunities, and improve the living standards of all Malaysians.</p>
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" alt="About Us" class="image">
        </div>
        <div class="section">
            <h2>Our Vision</h2>
            <p>Our vision is to be a leading Ministry in driving Malaysia's economic development and transformation towards a high-income nation.</p>
            <img src="https://images.unsplash.com/photo-1518791841217-8f3e05ce6559?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" alt="Our Vision" class="image">
        </div>
        <div class="section">
            <h2>Our Values</h2>
            <ul>
                <li>Integrity: We uphold the highest standards of honesty, transparency, and accountability in all our actions.</li>
                <li>Excellence: We strive for excellence in everything we do, and continuously improve our performance to achieve the best results.</li>
                <li>Collaboration: We work collaboratively with all stakeholders, including government agencies, private sector, and civil society, to achieve our common goals.</li>
            </ul>
            </div>
            <div class="footer">
                <p>Copyright &copy; 2023 Ministry of Economy Malaysia. All rights reserved.</
                    </div>
                    </div>
                    </body>
                    </html>
