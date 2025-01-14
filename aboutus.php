<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Style Your Space</title>
    <link rel="icon" href="img/favicon-32x32.png" />
    <link rel="stylesheet" href="css/aboutus.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
  </head>
  <body>
  
    <section class="header">
      <nav>
        <div class="nav-links" id="navLinks">
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="products.php">Products</a></li>    
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="SignIn.php">Sign in</a></li>
          </ul>
        </div>
      </nav>

      <div class="text-box">
        <h1>About Us</h1>
      </div>
    </section>
  <br>
  <br>
   
    <section class="our-company">
        <div class="intro-section">
          <p>
           Our mission is to inspire and transform your living spaces with innovative designs and ideas. 
            We believe that every home, office, or personal space has the potential to become a haven of comfort, elegance, and style. With a team of talented professionals and a deep understanding of design trends, we ensure that every project reflects your personality and lifestyle.
            Discover how we can help you create spaces that not only meet your needs but also inspire your daily life. Let us partner with you to craft environments that are as beautiful as they are functional—a place you can truly call your own.
            </p>
            <img src="./img/bg.png" >
        </div>
  
        <div class="what-we-provide">
          <h1>What We Provide</h1>
      <div class="row">
        <div class="our-company-col">
          <h3>What We Do</h3>
          <p>
            At Style Your Space, we specialize in creating beautifully designed
            spaces that reflect your unique style. From personalized interior
            design to a curated selection of elegant and functional products,
            we’re here to bring your vision to life. Our team offers expert
            guidance, innovative ideas, and affordable solutions to transform
            your home, office, or any space into something truly inspiring.
            Let’s craft the perfect space for you!
          </p>
        </div>
        <div class="our-company-col">
          <h3>Our Staff</h3>
          <p>
            Our team is the heart of what we do. Composed of passionate
            designers, creative thinkers, and dedicated professionals, we work
            together to bring your vision to life. Every member of our staff is
            committed to delivering exceptional service, innovative ideas, and
            personalized solutions tailored to your unique needs. With years of
            expertise and a shared passion for design, our staff ensures every
            project is a masterpiece.
          </p>
        </div>
        <div class="our-company-col">
          <h3>Our Approach</h3>
          <p>
            We believe that every design project is a unique journey. Our
            approach centers around understanding your needs, vision, and
            lifestyle to create spaces that are not only functional but also a
            true reflection of your personality. We collaborate closely with our
            clients throughout the entire process, from conceptualization to
            final touches, ensuring that each detail aligns with your desires.
            With a blend of creativity, expertise, and innovation, we approach
            every project with passion and precision. Let’s work together to
            transform your space into something extraordinary!
          </p>
        </div>
      </div>
    </section>

    <section class="Company">
      <h1>Our Company</h1>
      <p>
        Here’s a glimpse of our company and what we’re all about—check out the
        pictures below!
      </p>
      <div class="row">
        <div class="Company-col">
          <img src="./img/company.jpg" alt="Company" />
          <div class="layer">
            <h3>Prishtinë</h3>
          </div>
        </div>
        <div class="Company-col">
          <img src="./img/off.png" alt="Company" />
          <div class="layer">
            <h3>Mitrovicë</h3>
          </div>
        </div>
        <div class="Company-col">
          <img src="./img/company1.jpg" alt="Company" />
          <div class="layer">
            <h3>Prizren</h3>
          </div>
        </div>
      </div>
    </section>

    <section class="Comments">
      <h1>What Our Clients Say</h1>
      <div class="row">
        <div class="comments-col">
          <img src="./img/jane.jpeg" alt="Jane Smith" />
          <div>
            <p>
              Working with Style Your Space was an absolute delight! From the
              very beginning, their team took the time to understand my vision
              and transformed my home into a stunning, functional space that
              perfectly reflects my personality. The attention to detail,
              creative ideas, and exceptional craftsmanship were beyond my
              expectations. I highly recommend them to anyone looking to revamp
              their space with elegance and style!
            </p>
            <h3>Jane Smith</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
        </div>
        <div class="comments-col">
          <img src="./img/david.webp" alt="David James" />
          <div>
            <p>
              I had an incredible experience with Style Your Space. Their team
              was professional, approachable, and always went the extra mile to
              ensure my satisfaction. My office space has become a source of
              inspiration and productivity, thanks to their thoughtful design. I
              look forward to collaborating with them again in the future!
            </p>
            <h3>David James</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
        </div>
      </div>
    </section>

    <section class="a">
      <h1>Reach out for more information!</h1>
      <button id="redirectButton">Contact Us</button>

    </section>
    <script>
      const button = document.getElementById('redirectButton');
      button.addEventListener('click', function () {
        window.location.href = 'Contactus.html'; 
      });
    </script>

<section class="footer">
  <div class="footer-boxes">
    <div class="footer-box">
      <h4>Stay connected with us</h4>
      <p>
        Follow us on social media for the latest updates, inspiration, and
        more!
      </p>
      <div class="icons">
        <a
          href="https://facebook.com"
          target="_blank"
          aria-label="Visit our Facebook page"
        >
          <i class="fab fa-facebook"></i>
        </a>
        <a
          href="https://instagram.com"
          target="_blank"
          aria-label="Visit our Instagram page"
        >
          <i class="fab fa-instagram"></i>
        </a>
        <a
          href="https://linkedin.com"
          target="_blank"
          aria-label="Visit our LinkedIn page"
        >
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
    </div>
    <div class="footer-box">
      <h4>Subscribe to our newsletter</h4>
      <p>Subscribe for exclusive deals and updates!</p>
      <form class="newsletter" action="#">
        <input type="email" placeholder="Enter your email" required />
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </div>
  <p>&copy; 2024 Style Your Space. All rights reserved.</p>
</section>


    <script>
      function toggleMenu() {
        const navLinks = document.getElementById("navLinks");
        navLinks.classList.toggle("active");
      }
    </script>
    <script src="js/script.js"></script>

    


  </body>
</html>