<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>About Us - ZedriconPlus</title>
    <style>
        body {
    width: 100%;
    height: 100%;
    font-family: "Roboto", sans-serif;
    background-color: #f4f6f5; /* Light neutral background with a hint of green */
}

.container-fluid {
    background-color: #e0f2f1; /* Very light green background */
    margin: 2px;
    padding: 10px;
    display: flex;
    
}

.serve {
    margin-top: 5%;
}

.txt {
    margin-top: 8%;
}

.txt h1 {
          font-family: 'Arial', sans-serif;
          font-size: 30px;
          font-weight: bold;
          color: #2c3e50; /* Dark blue-gray color */
          text-align: center;
          padding: 20px;
          background: #c0c0c0; /* Light gray background */
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
          margin: 20px;
        }
}

#services {
    padding: 50px 0;
    background-color: #f4f6f5; /* Light background to maintain consistency */
}

#services h2 {
    font-family: 'Arial', sans-serif;
    font-size: 2rem;
    font-weight: bold;
    color: #2e7d32; /* Dark green for headings */
    text-align: center;
    margin-bottom: 30px;
    padding: 10px 20px;
    border-radius: 8px;
    display: inline-block;
}

.service-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px; /* Space between cards */
}

.service-item {
    background-color: #ffffff; /* White background for clean look */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Shadow for elegant card design */
    padding: 20px;
    width: 300px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition on hover */
}

.service-item:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
}

.service-item img {
    max-width: 100%;
    height: auto;
    border-radius: 8px; /* Rounded image corners */
}

.service-item h3 {
    margin-top: 15px;
    font-size: 1.6rem;
    color: #2e7d32; /* Dark green for service headings */
}

.service-item p {
    font-size: 1rem;
    color: #666666; /* Gray for body text */
    margin-bottom: 15px;
    text-align: left;
}

ul {
    text-align: left;
    padding-left: 20px;
}

.book {
    margin-top: 15%;
}

/* Minimalist Navbar */
.navbar {
    background-color: #2e7d32; /* Dark green for navbar */
    padding: 10px 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.navbar-brand {
    font-size: 1.5rem;
    color: #000000; /* White text for contrast */
}

.navbar-nav .nav-item .nav-link {
    font-size: 1rem;
    color: #000000; /* White links */
    margin-right: 15px;
    transition: background-color 0.3s;
}

.navbar-nav .nav-item .nav-link:hover {
    background-color: #4caf50; /* Lighter green on hover */
    border-radius: 5px;
}

.navbar-toggler-icon {
    filter: invert(100%); /* White toggle icon */
}

/* Footer */
footer {
    background-color: #2e7d32; /* Dark green footer */
    padding: 20px;
    color: #ffffff;
    text-align: center;
    margin-top: 50px;
    box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

        .book{
            margin-top: 15%;
        }
        /* Global Styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header p, h1  {
            color: #f0f2f5;
        }
        h2 {
            color: #1d3557;
        }

        p {
            color: #555;
            line-height: 1.7;
        }

        /* Header Styles */
        .header {
            background-color: #2e7d32;
            color: #fff;
            padding: 100px 20px;
            text-align: center;
            
        }

        .header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        /* Section Styles */
        .section {
            background-color: #fff;
            padding: 40px 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            border-bottom: 3px solid #e63946;
            padding-bottom: 10px;
        }

        .section ul {
            list-style-type: disc;
            margin-left: 20px;
            padding-left: 10px;
        }

        .section ul li {
            margin-bottom: 10px;
        }

        /* Contact Section */
        .contact {
            text-align: center;
            margin-top: 30px;
        }

        .contact a {
            font-size: 1.2rem;
        }

        /* Footer Styles */
        .footer {
            background-color: #2e7d32;
            color: #f0f2f5;
            padding: 20px 0;
            text-align: center;
        }
        .footer p{
            color: #f0f2f5;
        }
         /* Responsive Design */
         @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .header p {
                font-size: 1rem;
            }

            .section {
                padding: 30px 15px;
            }

            .section h2 {
                font-size: 1.6rem;
            }

        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.8rem;
            }

            .header p {
                font-size: 0.9rem;
            }

            .section {
                padding: 20px 10px;
            }

            .section h2 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <h1>Welcome to ZedriconPlus</h1>
        <p>Your Trusted Pest Control Experts</p>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Our Mission Section -->
        <div class="section">
            <h2>Our Mission</h2>
            <p>Our mission is simple: to offer effective, eco-friendly, and affordable pest control solutions tailored to meet the unique needs of our customers. We believe that every property deserves to be free from the nuisance and health risks that pests can bring, and we are here to make that a reality.</p>
        </div>

        <!-- Why Choose Us Section -->
        <div class="section">
            <h2>Why Choose Us?</h2>
            <ul>
                <li><strong>Expertise You Can Trust:</strong> Our team is comprised of highly trained technicians with extensive knowledge in pest biology and behavior. We use the latest techniques and state-of-the-art equipment to tackle any pest problem, big or small.</li>
                <li><strong>Customized Solutions:</strong> We understand that every situation is different, which is why we offer personalized pest control plans designed to address your specific needs. Whether you're dealing with ants, rodents, termites, bed bugs, or any other pests, we've got you covered.</li>
                <li><strong>Eco-Friendly Approach:</strong> Your safety and the environment are our top priorities. We utilize environmentally friendly products and methods that are safe for your family, pets, and the planet, without compromising on effectiveness.</li>
                <li><strong>Guaranteed Results:</strong> We stand behind our work. Our services come with a satisfaction guarantee, ensuring that if the pests come back, so do we—at no extra cost to you.</li>
            </ul>
        </div>

        <!-- Our Services Section -->
        <div class="section">
            <h2>Our Services</h2>
            <p>We offer a comprehensive range of pest control services, including:</p>
            <ul>
                <li><strong>Residential Pest Control:</strong> Protect your home from common household pests such as ants, spiders, cockroaches, and rodents.</li>
                <li><strong>Commercial Pest Control:</strong> Safeguard your business and reputation with our reliable pest management solutions for offices, restaurants, hotels, and more.</li>
                <li><strong>Termite Control:</strong> Prevent costly damage to your property with our thorough termite inspection and treatment services.</li>
                <li><strong>Bed Bug Treatment:</strong> Rest easy with our specialized bed bug removal services that effectively eliminate these persistent pests.</li>
                <li><strong>Wildlife Control:</strong> Humane and efficient removal of larger pests like raccoons, squirrels, and birds.</li>
            </ul>
        </div>

        <!-- Commitment Section -->
        <div class="section">
            <h2>Our Commitment to You</h2>
            <p>At ZedriconPlus, customer satisfaction is at the heart of everything we do. We are committed to delivering the highest quality service, ensuring that your pest problems are resolved quickly, efficiently, and with minimal disruption to your daily life.</p>
        </div>

       
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>&copy; 2024 ZedriconPlus. All rights reserved.</p>
    </div>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ZedriconPlus</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AboutUs.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/azrael/calendar/book1.php">Book Now</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Account
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="settings.php?id=<?php echo $_SESSION['user_id']; ?>">Settings</a></li>
          <!--<li><a class="dropdown-item" href="booked.php?user_id=<?php echo $_SESSION['user_id']; ?>">My Bookings</a></li>-->


            <li><a class="dropdown-item" href="logout.php">Logout</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>