<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socket Server Hub - Amrit Acharya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f8fafc;
            color: #1f2937;
            line-height: 1.6;
            scroll-behavior: smooth;
        }
        header {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
            text-align: center;
            padding: 4em 1em;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        header h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
        }
        header p {
            font-size: 1.3em;
            opacity: 0.9;
        }
        nav {
            background-color: #1e3a8a;
            padding: 1em;
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
            gap: 2em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1em;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #93c5fd;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2em 1.5em;
        }
        section {
            padding: 3em 0;
        }
        section h2 {
            color: #1e3a8a;
            font-size: 2.2em;
            text-align: center;
            margin-bottom: 1em;
        }
        .intro, .company-info, .developer-info {
            text-align: center;
            background-color: white;
            border-radius: 12px;
            padding: 2em;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 2em;
        }
        .developer-info ul {
            list-style: none;
            padding: 0;
            margin: 1em 0;
        }
        .developer-info ul li {
            font-size: 1.1em;
            margin: 0.5em 0;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5em;
            padding: 1em;
        }
        .feature-card {
            background-color: white;
            border-radius: 12px;
            padding: 1.5em;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-card h3 {
            color: #3b82f6;
            font-size: 1.5em;
            margin-bottom: 0.5em;
        }
        footer {
            background-color: #1e3a8a;
            color: white;
            text-align: center;
            padding: 1.5em 0;
            width: 100%;
        }
        footer a {
            color: #93c5fd;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2em;
            }
            header p {
                font-size: 1.1em;
            }
            nav {
                flex-direction: column;
                gap: 1em;
            }
            .features {
                grid-template-columns: 1fr;
                gap: 1em;
            }
            .feature-card {
                padding: 1.2em;
            }
            section h2 {
                font-size: 1.8em;
            }
        }
        @media (max-width: 480px) {
            header {
                padding: 2em 1em;
            }
            .container {
                padding: 1em;
            }
            .feature-card {
                padding: 1em;
            }
            .feature-card h3 {
                font-size: 1.3em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Socket Server Hub</h1>
        <p>Real-time communication solutions by Amrit Acharya, Backend Developer</p>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#company">About AdiraTech</a>
        <a href="#developer">About Developer</a>
        <a href="#features">Features</a>
    </nav>
    <div class="container">
        <section id="home" class="intro">
            <h2>Welcome to Socket Server Hub</h2>
            <p>Discover cutting-edge socket server solutions for real-time, bidirectional communication. Crafted by Amrit Acharya, a backend developer specializing in PHP, Laravel, and real-time technologies, our platform empowers developers to build scalable and responsive applications for modern needs.</p>
        </section>
        <section id="company" class="company-info">
            <h2>About AdiraTech Pvt. Ltd.</h2>
            <p>AdiraTech Pvt. Ltd. is a leading technology company based in Bharatpur, Chitwan, Nepal, dedicated to delivering innovative software solutions. Specializing in web development, real-time applications, and backend systems, AdiraTech drives digital transformation for businesses worldwide. Visit us at <a href="https://adiratech.com">adiratech.com</a> to explore our services and expertise in building cutting-edge technology solutions.</p>
        </section>
        <section id="developer" class="developer-info">
            <h2>About the Developer</h2>
            <p>Hi, I'm <a href="https://acharyaamrit.com.np">Amrit Acharya</a>, a passionate backend developer based in Bharatpur, Chitwan, Nepal. With expertise in PHP, Laravel, JavaScript, and API development, I specialize in building robust and scalable server-side solutions. My focus is on creating real-time applications using socket servers to enable seamless, bidirectional communication.</p>
            <p>As a developer at <a href="https://adiratech.com">AdiraTech Pvt. Ltd.</a>, I contribute to innovative projects that drive digital transformation. My goal is to empower developers and businesses with efficient, secure, and high-performance backend systems. Socket Server Hub is a testament to my commitment to advancing real-time communication technologies.</p>
            <ul>
                <li><strong>Expertise:</strong> PHP, Laravel, JavaScript, Socket Servers, RESTful APIs</li>
                <li><strong>Location:</strong> Bharatpur, Chitwan, Nepal</li>
                <li><strong>Role:</strong> Backend Developer at AdiraTech Pvt. Ltd.</li>
                <li><strong>Mission:</strong> Building scalable and secure real-time solutions for modern applications</li>
            </ul>
        </section>
        <section >
            <h2>Features</h2>
            <div id=features class="features">

            <div class="feature-card">
                <h3>Real-Time Messaging</h3>
                <p>Enable seamless instant messaging and live updates with low-latency socket connections, ideal for chat applications and live notifications.</p>
            </div>
            <div class="feature-card">
                <h3>Scalable Architecture</h3>
                <p>Support thousands of concurrent connections with optimized, high-performance server solutions tailored for reliability.</p>
            </div>
            <div class="feature-card">
                <h3>Secure Communication</h3>
                <p>Protect your data with encrypted socket protocols, ensuring privacy and integrity in all communications.</p>
            </div>
            <div class="feature-card">
                <h3>Custom API Integration</h3>
                <p>Seamlessly integrate socket servers with custom RESTful APIs for flexible and powerful backend functionality.</p>
            </div>
            </div>

        </section>
    </div>
    <footer>
        <p>&copy; 2025 <a href="https://adiratech.com">AdiraTech Pvt. Ltd.</a> All rights reserved.</p>
    </footer>
</body>
</html>