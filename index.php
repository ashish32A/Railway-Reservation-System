<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
 <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    <div class="banner">
        <video src="assets/css/imgs/train.mp4" type="video/mp4" autoplay muted loop></video>
        <!-- Header -->
        <div class="content" id="home">
            <nav>
                <div class="logo">
                    <a href="#"> <i class="fa-solid fa-train-subway"></i>IRMS</a>
                </div>

                <ul class="navbar">
                    <li>
                        <a href="index.php" id="n1">Home</a>
                        <a href="#Holiday"> Holidays</a>
                        <a href="#contact">Contact Us</a>
                        <div class="dropdown" style="float:right;">
                            <a href="#" class="dropbtn">Menu</a>
                            <div class="dropdown-content">
                                <a href="pass-login.php">RESERVATION</a>
                                <a href="admin/emp-login.php">ADMIN</a>

                            </div>
                        </div>
                    </li>
                </ul>

            </nav>
            <div class="title">
                <h1>Railway<span> RESERVATION </span>System</h1>
                <p>Plan your trip with us and travel around the different states with the most affordable price!</p>
                <!-- <a href="./register.html" class="button">Book Now!</a> -->
                <a href="pass-signup.php" class="button">Book Now!</a>
            </div>
        </div>
    </div>

    <!-- Cards section -->
    <h2 class="card-heading"><a href="#" class="Holiday" id="Holiday" Style="text-decoration:none;color:black;">HOLIDAYS
        </a></h2>
    <div class="cards">
        <div class="card" style="width: 18rem;">
            <img src="assets/css/imgs/exterior.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Maharajas' Express</h3>
                <p class="card-text">Redefining Royalty Maharajas' express takes you on a sojourn to the era of bygone
                    stately splendour of princely states. Sylvan furnishings, elegant ambience and modern amenities are
                    amalgamated for an “Experience Unsurpassed”.</p>
                <a href="#" style="color:rgb(84, 84, 84);text-decoration: none;">Read more <i style="font-size:12px"
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/css/imgs/Bharat_Gaurav.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Bharat Gaurav Tourist Train</h3>
                <p class="card-text"> This train runs on various theme based circuits covering pilgrimage and heritage
                    destinations in its itinerary on a 5 days to 20 days trip and showcase India’s rich cultural
                    heritage.</p>
                <a href="#" style="color:rgb(84, 84, 84);text-decoration: none;">Read more <i style="font-size:12px"
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/css/imgs/Manali.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Rail Tour Packages</h3>
                <p class="card-text">IRCTC offers Exclusive Rail tour packages with confirmed train tickets,
                    sight-seeing and meals for enchanting Nilgiri Mountains, Darjeeling, Kullu Manali, Kashmir, Gangtok
                    or divine tours of Mata Vaishno Devi, Rameswaram, Madurai, Shirdi, Tirupati etc. </p>
                <a href="#" style="color:rgb(84, 84, 84);text-decoration: none;">Read more <i style="font-size:12px"
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/css/imgs/Kashmir.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Domestic Air Packages</h3>
                <p class="card-text">Be it the spiritual devotee seeking blessings of Tirupati, Shirdi or Mata Vaishno
                    Devi or the leisure traveller wanting to relish the Blue mountains of North East, Sand-dunes of
                    Rajasthan, Hamlets of Ladakh, Wonders of Himalayas,</p>
                <a href="#" style="color:rgb(84, 84, 84);text-decoration: none;">Read more <i style="font-size:12px"
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <h2 class="card-heading contact" id="contact" ><a href="#" Style="text-decoration:none;color:black;">CONTACT</h2>
    <!-- contact us -->
    <div class="container">
        <div class="contents">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Surkhet, NP12</div>
                    <div class="text-two">Birendranagar 06</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+0098 9893 5647</div>
                    <div class="text-two">+0096 3434 5678</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">codinglab@gmail.com</div>
                    <div class="text-two">info.codinglab@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>If you have any work from me or any types of quries related to my tutorial, you can send me message
                    from here. It's my pleasure to help you.</p>
                <!-- <form > -->
                <div class="input-box">
                    <input type="text" placeholder="Enter your name" id="name">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Enter your email" id="email">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Enter Subject" id="subject">
                </div>
                <div class="input-box message-box">
                    <input type="textarea" placeholder="Your Message" id="message">
                </div>
                <div class="buttons">
                    <input type="submit" value="Send Now" id="submit">
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>

    <!-- Footer -->

    <section class="footer">
        <hr>
        <div class="foot">

            <div class="footer-content">

                <div class="footlinks">
                    <h4>Trains</h4>
                    <ul>
                        <li><a href="#">General information</a></li>
                        <li><a href="#">Agents</a></li>
                        <li><a href="#">Enquires</a></li>
                    </ul>
                </div>
                <div class="footlinks">
                    <h4>Legal Policy</h4>
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Refund rules</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="footlinks">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>

                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="end">
            <p>Copyright © 2024 Train Travels All Rights Reserved.</p>
        </div>
    </section>
    <!-- Email Js -->


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script>
    (function() {
        emailjs.init({
            publicKey: "Etq9tDOuA-Gr9aJ3o",
        });
    })();

    document.getElementById('submit').addEventListener('click', (e) => {
        e.preventDefault();
        var templateParams = {
            to_name: 'James',
            from_name: "Ashish Aliases",
            message: 'Check this out!',
            reply_to: "Dont Reply"
        };

        emailjs.send('service_nhseehn', 'template_um2lkil', templateParams).then(
            (response) => {
                alert('SUCCESS!', response.status, response.text);
            },
            (error) => {
                alert('FAILED...', error);
            },
        );
    })
    </script>
</body>

</html>