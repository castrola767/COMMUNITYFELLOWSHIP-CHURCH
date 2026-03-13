<?php
$pageTitle = 'Contact Us – Community Fellowship Church Kanyariri';
$activeNav = 'contact';
require 'includes/header.php';

$serviceTimes = [
  ['Sunday','Morning Service','8:00 AM'],
  ['Sunday','Bible Study','10:00 – 10:30 AM'],
  ['Sunday','Main Worship','10:30 AM – 1:00 PM'],
  ['Wednesday','Bible Study','6:30 PM'],
];
$topics = [
  'Planning a Visit','Prayer Request','Salvation & New Believer',
  'Marriage Counselling','Youth Mentorship','Getting Involved / Ministry','General Question',
];
$visitSteps = [
  'Arrive a few minutes early',
  'Our Welcome Team will receive you',
  'Children can join KidsFellowship',
  'Find a seat — worship begins!',
];
?>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ We're Here For You ✦</div>
    <h1>Get In <em>Touch</em></h1>
    <p>Whether you have a question, need prayer, want counselling, or are ready to visit — we would love to hear from you.</p>
  </div>
</div>

<!-- CONTACT MAIN -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner contact-grid">
    <div>
      <span class="section-label">Reach Us</span>
      <h2 class="section-title">We'd Love to <em>Connect</em></h2>
      <p style="color:var(--muted);line-height:1.85;margin-bottom:1.5rem;font-size:clamp(.82rem,2vw,.94rem);">Our doors are always open. Reach out and we'll get back to you as soon as possible. God bless you!</p>

      <div class="info-card">
        <div class="info-icon">📞</div>
        <div><h4>Phone</h4><p><a href="tel:+254706692733">+254 706 692 733</a></p></div>
      </div>
      <div class="info-card">
        <div class="info-icon">✉️</div>
        <div><h4>Email</h4><a href="mailto:cfckanyariri12@gmail.com">cfckanyariri12@gmail.com</a></div>
      </div>
      <div class="info-card">
        <div class="info-icon">📮</div>
        <div><h4>Postal Address</h4><p>P.O Box 39149–00623, Kenya</p></div>
      </div>
      <div class="info-card">
        <div class="info-icon">📍</div>
        <div><h4>Physical Location</h4><p>Muthure, along the Western By-Pass<br>Opposite Muthure Foot Bridge<br>Kanyariri, Kenya</p></div>
      </div>
      <div class="info-card">
        <div class="info-icon">📘</div>
        <div><h4>Facebook</h4><a href="https://www.facebook.com/CommunityFellowshipChurch" target="_blank">Community Fellowship Church</a></div>
      </div>

      <div class="st-box">
        <h4>🗓️ Weekly Service Times</h4>
        <?php foreach($serviceTimes as $st):?>
        <div class="st-row">
          <span class="dy"><?php echo $st[0];?></span>
          <span class="sn"><?php echo $st[1];?></span>
          <span class="tm"><?php echo $st[2];?></span>
        </div>
        <?php endforeach;?>
      </div>
    </div>

    <div class="cf-form">
      <h3>Send Us a Message</h3>
      <p class="sub">Fill in the form below and our team will respond as soon as we can. We are here for you.</p>
      <form id="contactForm">
        <div class="form-row">
          <div class="form-group"><label>First Name</label><input type="text" placeholder="John" required/></div>
          <div class="form-group"><label>Last Name</label><input type="text" placeholder="Doe" required/></div>
        </div>
        <div class="form-group"><label>Email Address</label><input type="email" placeholder="john@example.com" required/></div>
        <div class="form-group"><label>Phone (Optional)</label><input type="tel" placeholder="+254 7..."/></div>
        <div class="form-group">
          <label>How Can We Help?</label>
          <select><?php foreach($topics as $t):?><option><?php echo $t;?></option><?php endforeach;?></select>
        </div>
        <div class="form-group"><label>Your Message</label><textarea placeholder="Write your message here..." required></textarea></div>
        <button type="submit" class="submit-btn">Send Message ✉️</button>
      </form>
      <div class="success-msg" id="contactSuccess"></div>
    </div>
  </div>
</section>

<!-- MAP -->
<section style="background:white;padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <span class="section-label">Find Us</span>
    <h2 class="section-title">Our <em>Location</em></h2>
    <p style="color:var(--muted);margin-bottom:.5rem;font-size:clamp(.82rem,2vw,.94rem);">We are in Muthure along the Western By-Pass, opposite Muthure Foot Bridge, Kanyariri, Kenya.</p>
    <div class="map-placeholder">
      <div style="font-size:2.5rem;">📍</div>
      <p>Muthure, along the Western By-Pass, Kanyariri</p>
      <small>Paste your Google Maps &lt;iframe&gt; embed here after going live</small>
      <a href="https://maps.google.com/?q=Muthure+Kanyariri+Kenya" target="_blank" class="btn-primary" style="margin-top:.4rem;font-size:.83rem;">Open in Google Maps →</a>
    </div>
  </div>
</section>

<!-- FIRST VISIT -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <div class="visit-banner">
      <h3>Ready to <em>Visit Us?</em></h3>
      <p>We make every first-time visitor feel right at home. Here's what to expect when you come on Sunday.</p>
      <div class="vsteps">
        <?php foreach($visitSteps as $i => $step):?>
        <div class="vstep">
          <div class="vstep-num"><?php echo $i+1;?></div>
          <span><?php echo $step;?></span>
        </div>
        <?php endforeach;?>
      </div>
      <a href="mailto:cfckanyariri12@gmail.com" class="btn-primary">Email Us Before You Come</a>
    </div>
  </div>
</section>

<?php require 'includes/footer.php';?>
