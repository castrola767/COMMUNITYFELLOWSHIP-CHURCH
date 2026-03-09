<?php
$pageTitle = 'Contact Us – Community Fellowship Church Kanyariri';
$activeNav = 'contact';
require 'includes/header.php';

$serviceTimes = [
  ['Sunday','Morning Service','8:00 AM'],
  ['Sunday','Main Worship','10:00 AM'],
  ['Wednesday','Bible Study','6:30 PM'],
];
$topics = [
  'Planning a Visit',
  'Prayer Request',
  'Salvation & New Believer',
  'Marriage Counselling',
  'Youth Mentorship',
  'Getting Involved / Ministry',
  'General Question',
];
$visitSteps = [
  'Arrive a few minutes early',
  'Our Welcome Team will receive you',
  'Children can join KidsFellowship',
  'Find a seat — worship begins!',
];
?>

<style>
  .contact-grid{display:grid;grid-template-columns:1fr 1.2fr;gap:4rem;align-items:start;}
  .info-card{background:var(--offwhite);border-radius:16px;padding:1.35rem;display:flex;align-items:flex-start;gap:1rem;margin-bottom:.9rem;}
  .info-icon{width:46px;height:46px;border-radius:12px;background:linear-gradient(135deg,var(--blue),var(--purple));display:flex;align-items:center;justify-content:center;font-size:1.2rem;flex-shrink:0;}
  .info-card h4{font-weight:700;margin-bottom:.28rem;font-size:.92rem;color:var(--navy);}
  .info-card p,  .info-card a{font-size:.87rem;color:var(--muted);line-height:1.65;text-decoration:none;}
  .info-card a{color:var(--blue);}
  .info-card a:hover{text-decoration:underline;}
  .st-box{background:linear-gradient(135deg,var(--navy),#3a1060);border-radius:18px;padding:1.8rem;color:white;margin-top:1.5rem;}
  .st-box h4{font-family:'Playfair Display',serif;font-size:1.05rem;margin-bottom:1rem;}
  .st-row{display:flex;justify-content:space-between;align-items:center;padding:.52rem 0;border-bottom:1px solid rgba(255,255,255,.1);font-size:.88rem;}
  .st-row:last-child{border-bottom:none;}
  .st-row .dy{color:rgba(255,255,255,.65);}
  .st-row .sn{color:rgba(255,255,255,.85);}
  .st-row .tm{color:var(--light);font-weight:700;}
  .cf-form{background:white;border-radius:22px;padding:2.5rem;box-shadow:0 8px 36px rgba(0,0,0,.08);}
  .cf-form h3{font-family:'Playfair Display',serif;font-size:1.45rem;margin-bottom:.4rem;color:var(--navy);}
  .cf-form .sub{font-size:.88rem;color:var(--muted);margin-bottom:1.8rem;}
  .map-placeholder{background:linear-gradient(135deg,var(--offwhite),var(--light));border-radius:18px;height:340px;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:.8rem;margin-top:2rem;border:2px dashed rgba(19,127,235,.25);text-align:center;padding:2rem;}
  .map-placeholder p{color:var(--blue);font-weight:600;font-size:.95rem;}
  .map-placeholder small{color:#999;font-size:.82rem;}
  .visit-banner{background:linear-gradient(135deg,var(--navy),#3a1060);color:white;text-align:center;border-radius:22px;padding:2.8rem;max-width:820px;margin:0 auto;}
  .visit-banner h3{font-family:'Playfair Display',serif;font-size:1.9rem;margin-bottom:.8rem;}
  .visit-banner h3 em{font-style:normal;color:var(--light);}
  .visit-banner p{color:rgba(255,255,255,.72);max-width:460px;margin:0 auto 1.8rem;line-height:1.85;}
  .vsteps{display:flex;gap:1.8rem;justify-content:center;flex-wrap:wrap;margin-bottom:1.8rem;}
  .vstep{display:flex;align-items:center;gap:.6rem;font-size:.88rem;color:rgba(255,255,255,.8);}
  .vstep-num{width:27px;height:27px;border-radius:50%;background:var(--light);color:var(--navy);font-weight:700;font-size:.8rem;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
  @media(max-width:900px){.contact-grid{grid-template-columns:1fr;}}
  @media(max-width:600px){.vsteps{flex-direction:column;align-items:center;}}
</style>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ We're Here For You ✦</div>
    <h1>Get In <em>Touch</em></h1>
    <p>Whether you have a question, need prayer, want counselling, or are ready to visit — we would love to hear from you.</p>
  </div>
</div>

<!-- CONTACT MAIN -->
<section style="background:var(--offwhite);padding:5rem 5%;">
  <div class="inner contact-grid">
    <div>
      <span class="section-label">Reach Us</span>
      <h2 class="section-title">We'd Love to <em>Connect</em></h2>
      <p style="color:var(--muted);line-height:1.85;margin-bottom:1.8rem;">Our doors are always open. Reach out and we'll get back to you as soon as possible. God bless you!</p>

      <div class="info-card">
        <div class="info-icon">📞</div>
        <div>
          <h4>Phone</h4>
          <p>+254 7... <span style="color:#bbb;">(Full number coming soon)</span></p>
        </div>
      </div>
      <div class="info-card">
        <div class="info-icon">✉️</div>
        <div>
          <h4>Email</h4>
          <a href="mailto:cfckanyariri12@gmail.com">cfckanyariri12@gmail.com</a>
        </div>
      </div>
      <div class="info-card">
        <div class="info-icon">📮</div>
        <div>
          <h4>Postal Address</h4>
          <p>P.O Box 39149–00623, Kenya</p>
        </div>
      </div>
      <div class="info-card">
        <div class="info-icon">📍</div>
        <div>
          <h4>Physical Location</h4>
          <p>Muthure, along the Western By-Pass<br>Opposite Muthure Foot Bridge<br>Kanyariri, Kenya</p>
        </div>
      </div>
      <div class="info-card">
        <div class="info-icon">📘</div>
        <div>
          <h4>Facebook</h4>
          <a href="https://www.facebook.com/CommunityFellowshipChurch" target="_blank">Community Fellowship Church</a>
        </div>
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
          <select>
            <?php foreach($topics as $t):?>
            <option><?php echo $t;?></option>
            <?php endforeach;?>
          </select>
        </div>
        <div class="form-group"><label>Your Message</label><textarea placeholder="Write your message here..." required></textarea></div>
        <button type="submit" class="submit-btn">Send Message ✉️</button>
      </form>
      <div class="success-msg" id="contactSuccess"></div>
    </div>
  </div>
</section>

<!-- MAP -->
<section style="background:white;padding:5rem 5%;">
  <div class="inner">
    <span class="section-label">Find Us</span>
    <h2 class="section-title">Our <em>Location</em></h2>
    <p style="color:var(--muted);margin-bottom:.5rem;">We are in Muthure along the Western By-Pass, opposite Muthure Foot Bridge, Kanyariri, Kenya.</p>
    <div class="map-placeholder">
      <div style="font-size:3rem;">📍</div>
      <p>Muthure, along the Western By-Pass, Kanyariri</p>
      <small>Paste your Google Maps embed &lt;iframe&gt; here after going live</small>
      <a href="https://maps.google.com/?q=Muthure+Kanyariri+Kenya" target="_blank" class="btn-primary" style="margin-top:.5rem;font-size:.88rem;">Open in Google Maps →</a>
    </div>
  </div>
</section>

<!-- FIRST VISIT BANNER -->
<section style="background:var(--offwhite);padding:5rem 5%;">
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
