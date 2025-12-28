<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Homoeo-Point | Homeopathic Medicines Faridabad</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- HEADER / NAV -->
  <header>
    <div class="nav-container">
      <div class="logo">HOMEO-POINT</div>
      <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="#order">Order</a>
      </nav>
    </div>
  </header>

  <!-- HOME SECTION -->
  <section class="hero" id="home">
    <div class="hero-inner">
      <div class="hero-text">
        <h1>Homoeo-Point, Sector 17 Faridabad</h1>
        <p>Trusted homeopathic medicines and remedies for your family’s health since many years in Sector 17 Market, Faridabad.</p>
        <p>Order medicines online or visit our shop for personalised guidance on homeopathy treatment.</p>

        <div class="hero-buttons">
          <a href="#order" class="btn btn-primary">Order Medicines</a>
          <a href="#contact" class="btn btn-outline">Call / WhatsApp</a>
        </div>
      </div>

      <div class="hero-info-box">
        <h3>Shop Details</h3>
        <p><strong>Name:</strong> Homoeo-Point (Homeopathic Medicines)</p>
        <p><strong>Address:</strong> SCF No. 141, Sector 17 Market, Faridabad, Haryana</p>
        <p><strong>Phone:</strong> +91 98101 90901, 90698 10811</p>
        <p style="margin-top:8px;">Timings: 10:00 AM – 9:00 PM (approx, change as needed)</p>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section id="about">
    <div class="section-inner">
      <h2 class="section-title">About Homoeo-Point</h2>
      <p class="section-text">
        Homoeo-Point is a dedicated homeopathic medicine shop in Sector 17 Market, Faridabad, providing genuine homeopathic medicines, mother tinctures, tonics and wellness products.
      </p>

      <div class="about-grid">
        <div class="card">
          <h3>Why Choose Us</h3>
          <p>• Genuine and well-known homeopathic brands.</p>
          <p>• Guidance for common day-to-day health problems.</p>
          <p>• Easy phone / online ordering with home delivery (as per area).</p>
        </div>

        <div class="card">
          <h3>Available Products</h3>
          <p>• Homeopathic dilutions and mother tinctures.</p>
          <p>• Bio-chemic tablets and combinations.</p>
          <p>• Syrups, drops, ointments and tonics.</p>
        </div>

        <div class="card">
          <h3>Location</h3>
          <p>We are located in the main Sector 17 Market, Faridabad, easily reachable from all nearby sectors and residential areas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section id="contact">
    <div class="section-inner">
      <h2 class="section-title">Contact & Visit</h2>

      <div class="contact-wrapper">
        <div class="contact-item">
          <p><strong>Address:</strong> SCF No. 141, Sector 17 Market, Faridabad, Haryana</p>
          <p><strong>Phone:</strong> <a href="tel:+919810190901">+91 98101 90901</a>, <a href="tel:+919069810811">90698 10811</a></p>
          <p><strong>Email:</strong>  <a href="mailto:homeopathyforever@gmail.com">homeopathyforever@gmail.com</a></p>
          <p><strong>WhatsApp:</strong> <a href="https://wa.me/919810190901" target="_blank">Chat on WhatsApp</a></p>
          <p>Timings: 10:00 AM – 9:00 PM (update as per actual shop timing).</p>
        </div>

        <div class="contact-item contact-links">
          <!-- Google Map embed example – replace with exact map iframe later -->
          <p><strong>Location Map:</strong></p>
          <iframe
            src="https://www.google.com/maps?q=Sector+17+Market+Faridabad&output=embed"
            allowfullscreen=""
            loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- ORDER SECTION -->
  <section id="order">
    <div class="section-inner">
      <h2 class="section-title">Order Medicines Online</h2>

      <div class="order-form">
        <h3>Fill the form to place an order</h3>
        <p class="order-note">
          Note: After submitting this form, our team will confirm your order on call or WhatsApp. Cash on delivery / shop pick‑up as per discussion.
        </p>

        <!-- For backend connect later: action="place-order.php" method="post" -->
        <form action="place-order.php" method="post">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name*</label>
              <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
              <label for="phone">Mobile Number*</label>
              <input type="tel" id="phone" name="phone" required>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email (optional)</label>
            <input type="email" id="email" name="email">
          </div>

          <div class="form-group">
            <label for="address">Full Address*</label>
            <textarea id="address" name="address" required></textarea>
          </div>

          <div class="form-group">
            <label for="medicines">Medicine Name(s) & Potency*</label>
            <textarea id="medicines" name="medicines"
              placeholder="Example: Belladonna 30 (2 bottles), Ferrum Phos 6X (1 bottle)" required></textarea>
          </div>

          <div class="form-group">
            <label for="note">Any note (optional)</label>
            <textarea id="note" name="note"
              placeholder="Example: Please send only German make medicine, delivery after 6 PM etc."></textarea>
          </div>

          <button type="submit" class="submit-btn">Submit Order Request</button>
        </form>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    © <span id="year"></span> Homoeo-Point, Sector 17 Faridabad. All rights reserved.
  </footer>

  <script>
    // Auto current year
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>

</body>
</html>
