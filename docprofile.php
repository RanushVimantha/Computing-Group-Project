<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Profile</title>
    <link rel="stylesheet" href="styles/docprofile.css">
</head>
<body>
<?php include('header.php'); ?>
    <div class="container">
        <header>
            <h1>Doctor Profile</h1>

        </header>
        <div class="profile">
            <div class="menu">
                <ul>
                    <li><a href="#">My Patients</a></li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
            <div class="content">
                <img src="doctor.jpg" alt="Doctor's Picture">
                <div class="description">
                    <h2>Dr. John Doe</h2>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida euismod metus, non cursus elit consequat eu.</p>
                    <p>Specialty: Cardiology</p>
                    <p>Experience: 15 years</p>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>