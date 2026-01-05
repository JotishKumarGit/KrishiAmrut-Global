<!-- Footer -->
  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 mb-4">
                  <h5>KrishiAmrut Global</h5>
                  <p>We are committed to providing the highest quality organic moringa products to promote health and
                      wellness worldwide. Our sustainable practices ensure excellence in every product.</p>
                  <div class="social-icons mt-3">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      <a href="#"><i class="fab fa-whatsapp"></i></a>
                  </div>
              </div>
              <div class="col-lg-2 col-md-6 mb-4">
                  <h5>Quick Links</h5>
                  <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="services.php">Services</a></li>
                      <li><a href="gallery.php">Gallery</a></li>
                      <li><a href="blog.php">Blog</a></li>
                      <li><a href="contact.php">Contact</a></li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-4">
                  <h5>Our Products</h5>
                  <ul>
                      <li><a href="Moringa_Powder.php">Moringa Powder</a></li>
                      <li><a href="Dried_Moringa_Leaves.php">Dried Moringa Leaves</a></li>
                      <li><a href="Moringa_Oil.php">Moringa Oil</a></li>
                      <li><a href="Moringa_Seeds.php">Moringa Seeds</a></li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-4">
                  <h5>Address</h5>
                  <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt me-2"></i> Makote Galli, Wadgaon</li>
                      <li><i class="fas fa-city me-2"></i> Kolhapur, Maharashtra</li>
                      <li><i class="fas fa-flag me-2"></i> India</li>
                      <a href="tel:7759910010" class="text-white text-decoration-none">
                          <li><i class="fas fa-phone me-2"></i> 7759910010</li>
                      </a>
                      <a href="mailto:info@krishiamrutglobal.in" class="text-white text-decoration-none">
                          <li><i class="fas fa-envelope me-2"></i> info@krishiamrutglobal.in</li>
                      </a>
                  </ul>
              </div>
          </div>
          <div class="footer-bottom">
              <p>&copy; 2024 KrishiAmrut Global. All Rights Reserved. | Designed By <a
                      href="https://trade4export.com">Trade4Export</a></p>
          </div>
      </div>
  </footer>

  <!-- Enquiry Modal -->
  <div class="modal fade" id="enquiryModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title"><i class="fas fa-file-alt"></i> Send Enquiry</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                  <form id="enquiryForm">
                      <div class="mb-3">
                          <input type="text" class="form-control" id="enquiryName" placeholder="Your Name" required>
                      </div>
                      <div class="mb-3">
                          <input type="email" class="form-control" id="enquiryEmail" placeholder="Your Email"
                              required>
                      </div>
                      <div class="mb-3">
                          <input type="tel" class="form-control" id="enquiryPhone" placeholder="Your Phone Number"
                              required>
                      </div>
                      <div class="mb-3">
                          <input type="text" class="form-control" id="enquirySubject" placeholder="Subject" required>
                      </div>
                      <div class="mb-3">
                          <textarea class="form-control" id="enquiryMessage" rows="4" placeholder="Your Message"
                              required></textarea>
                      </div>
                      <button type="submit" class="submit-btn">
                          <i class="fab fa-whatsapp"></i> Send via WhatsApp
                      </button>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <!-- whole web js -->
  <script>
      // Initialize AOS
      AOS.init({
          duration: 1000,
          once: true,
          offset: 100
      });

      // Smooth scroll for navigation links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function(e) {
              e.preventDefault();
              const target = document.querySelector(this.getAttribute('href'));
              if (target) {
                  target.scrollIntoView({
                      behavior: 'smooth',
                      block: 'start'
                  });
                  // Close mobile menu if open
                  const navbarCollapse = document.querySelector('.navbar-collapse');
                  if (navbarCollapse.classList.contains('show')) {
                      navbarCollapse.classList.remove('show');
                  }
              }
          });
      });

      // Active navigation on scroll
      window.addEventListener('scroll', function() {
          let current = '';
          const sections = document.querySelectorAll('section');

          sections.forEach(section => {
              const sectionTop = section.offsetTop;
              const sectionHeight = section.clientHeight;
              if (pageYOffset >= (sectionTop - 200)) {
                  current = section.getAttribute('id');
              }
          });

          document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
              link.classList.remove('active');
              if (link.getAttribute('href') === '#' + current) {
                  link.classList.add('active');
              }
          });
      });

      // Enquiry form submission to WhatsApp
      document.getElementById('enquiryForm').addEventListener('submit', function(e) {
          e.preventDefault();

          const name = document.getElementById('enquiryName').value;
          const email = document.getElementById('enquiryEmail').value;
          const phone = document.getElementById('enquiryPhone').value;
          const subject = document.getElementById('enquirySubject').value;
          const message = document.getElementById('enquiryMessage').value;

          const whatsappMessage = `*New Enquiry from Website*%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Phone:* ${phone}%0A*Subject:* ${subject}%0A*Message:* ${message}`;

          const whatsappURL = `https://wa.me/917759910010?text=${whatsappMessage}`;

          window.open(whatsappURL, '_blank');

          // Close modal
          const modal = bootstrap.Modal.getInstance(document.getElementById('enquiryModal'));
          modal.hide();

          // Reset form
          this.reset();
      });

      // Contact form submission to WhatsApp
      document.getElementById('contactForm').addEventListener('submit', function(e) {
          e.preventDefault();

          const formData = new FormData(this);
          const name = this.querySelector('input[placeholder="Your Name"]').value;
          const email = this.querySelector('input[placeholder="Your Email"]').value;
          const phone = this.querySelector('input[placeholder="Your Phone"]').value;
          const subject = this.querySelector('input[placeholder="Subject"]').value;
          const message = this.querySelector('textarea').value;

          const whatsappMessage = `*Contact Form Submission*%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Phone:* ${phone}%0A*Subject:* ${subject}%0A*Message:* ${message}`;

          const whatsappURL = `https://wa.me/917759910010?text=${whatsappMessage}`;

          window.open(whatsappURL, '_blank');

          // Reset form
          this.reset();

          alert('Thank you! Your message will be sent via WhatsApp.');
      });

      // Newsletter subscription
      document.querySelector('.newsletter-form button').addEventListener('click', function() {
          const emailInput = document.querySelector('.newsletter-form input');
          const email = emailInput.value;

          if (email) {
              const whatsappMessage = `*Newsletter Subscription*%0A%0A*Email:* ${email}`;
              const whatsappURL = `https://wa.me/917028959536?text=${whatsappMessage}`;
              window.open(whatsappURL, '_blank');
              emailInput.value = '';
              alert('Thank you for subscribing!');
          }
      });
  </script>

  </body>

  </html>