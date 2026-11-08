<?php
$name = "Justin Edralin";
$age = 21;
$school = "University of Science and Technology of Southern Philippines";
$introduction = "I am an IT student who enjoys learning programming and exploring new technologies. :)";
$hobbies = ["Coding", "Watching Movies and Anime", "Playing Games"];

$favorites = [
    "Food" => "Fried Rice",
    "Color" => "Black",
    "Anime" => "One Piece",
    "Programming Language" => "React Native"
];

$skills = ["Python", "React Native", "HTML", "CSS", "JavaScript"];
$email = "edralin.justin123@gmail.com";
$contact = "09123456789";
?>

<!DOCTYPE html>
<html>
<head>
    <title>About Me - Justin Edralin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="home">
        <p>HELLO! WELCOME TO MY WEBSITE</p>
        <h1>Hi, I'm <?php echo $name; ?></h1>
        <h2>IT Student</h2>
        <p><?php echo $introduction; ?></p>
    </section>

    <section id="about">
        <h2>About Me</h2>

        <div class="card">
            <h3><?php echo $name; ?></h3>
            <p>Age: <?php echo $age; ?></p>
            <p>School: <?php echo $school; ?></p>
            <p>Course: Information Technology</p>
            <p><?php echo $introduction; ?></p>
        </div>
    </section>

    <section id="hobbies">
        <h2>My Hobbies</h2>
        <div class="container">
            <?php foreach ($hobbies as $hobby) { ?>
                <div class="card">
                    <h3><?php echo $hobby; ?></h3>
                  </div>
            <?php } ?>
        </div>
    </section>

    <section id="favorites">
        <h2>My Favorites</h2>
        <div class="container">
            <?php foreach ($favorites as $category => $favorite) { ?>
                <div class="card">
                    <h3><?php echo $category; ?></h3>
                    <p><?php echo $favorite; ?></p>
                </div>
            <?php } ?>
        </div>
    </section>

    <section id="skills">
        <h2>My Skills</h2>
        <div class="container">
            <?php foreach ($skills as $skill) { ?>
                <div class="skill">
                    <?php echo $skill; ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <footer id="contact">
        <h2>Contact Me</h2>
        <p>Feel free to contact me!</p>
        <p>Email: <?php echo $email; ?></p>
        <p>Contact Number: <?php echo $contact; ?></p>
    </footer>

</body>
</html>