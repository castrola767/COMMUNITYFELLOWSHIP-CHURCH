<?php
$pageTitle = 'Community Fellowship Church Kanyariri – Proclaiming the Full Gospel';
$activeNav = 'home';
require 'includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-orb orb1"></div>
  <div class="hero-orb orb2"></div>
  <div class="hero-content">
    <div style="margin-bottom:1.2rem;animation:fadeUp .8s ease both;">
      <img src="images/logo.jpg" alt="CFC Kanyariri" class="hero-logo"/>
    </div>
    <div class="hero-badge">✦ Welcome to CFC Kanyariri — Est. July 2007 ✦</div>
    <h1>Proclaiming the <em>Full Gospel</em><br>of Jesus Christ</h1>
    <div class="hero-motto">
      "Just say a word and my servant will be healed."
      <cite>Matthew 8:8b — Our Church Motto</cite>
    </div>
    <p>A community that models the fellowship of believers in the Book of Acts — extending the love of Christ to all people, and sending disciples to the nations.</p>
    <div class="hero-btns">
      <a href="about.php"      class="btn-primary">Who We Are</a>
      <a href="salvation.php"  class="btn-secondary">Know Salvation</a>
    </div>
  </div>
  <a href="#who-we-are" class="scroll-hint" aria-label="Scroll down">
    <span>Scroll</span>
    <div class="scroll-arrow"></div>
  </a>
</section>

<!-- WHO WE ARE -->
<section id="who-we-are" style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner cfc-2col-grid">
    <div>
      <span class="section-label">Who We Are</span>
      <h2 class="section-title">A Community <em>Rooted</em> in Acts</h2>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1.2rem;font-size:clamp(.84rem,2vw,.96rem);">We are a community that models the fellowship of believers described in the Book of Acts, and we seek to extend the love of Christ to all. We believe in the Full Gospel of Jesus Christ, and we affirm that the purpose of the church is to proclaim this Gospel.</p>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1.4rem;font-size:clamp(.84rem,2vw,.96rem);">Born from a marriage enrichment fellowship in 2005 and formally established in July 2007, CFC has grown from a small living-room gathering into a vibrant congregation in Kanyariri.</p>
      <blockquote style="border-left:4px solid var(--blue);padding-left:1.2rem;margin-bottom:1.8rem;font-style:italic;color:var(--navy);line-height:1.85;font-size:clamp(.82rem,1.9vw,.94rem);">
        "We never set out to build an institution; we simply responded to God's prompting to care for families and nurture faith in everyday life."
        <span style="display:block;margin-top:.5rem;font-style:normal;font-size:.76rem;color:var(--muted);">— Bishop J. Kamau, Founder</span>
      </blockquote>
      <a href="about.php" class="btn-primary">Learn Our Full Story</a>
    </div>
    <div>
      <?php
      $values = [
        ['🙏','Prayer','Prayer is our lifeline — we pray without ceasing, believing God hears and answers.'],
        ['📖','The Word','Faithful engagement in Holy Scriptures shapes our relationship with God.'],
        ['🤝','Community','Care, compassion, and empowerment for every member and neighbour.'],
        ['✝️','Servant Leadership','We lead by serving, following the example of Jesus Christ our Lord.'],
      ];
      foreach($values as $v): ?>
      <div style="display:flex;gap:.9rem;align-items:flex-start;padding:.9rem 0;border-bottom:1px solid var(--border);">
        <div style="width:40px;height:40px;min-width:40px;border-radius:10px;background:linear-gradient(135deg,var(--blue),var(--purple));display:flex;align-items:center;justify-content:center;font-size:1rem;"><?php echo $v[0];?></div>
        <div>
          <h4 style="font-weight:700;margin-bottom:.22rem;font-size:.92rem;"><?php echo $v[1];?></h4>
          <p style="font-size:.83rem;color:var(--muted);line-height:1.55;"><?php echo $v[2];?></p>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- VISION & MISSION -->
<section style="background:white;padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <div style="text-align:center;margin-bottom:2rem;">
      <span class="section-label">Our Direction</span>
      <h2 class="section-title">Vision &amp; <em>Mission</em></h2>
    </div>
    <div class="cfc-2col-grid">
      <div style="background:linear-gradient(135deg,var(--navy),#0d2d5c);border-radius:18px;padding:1.6rem;color:white;">
        <div style="font-size:2rem;margin-bottom:.8rem;">👁️</div>
        <h3 style="font-size:clamp(.95rem,2.4vw,1.3rem);margin-bottom:.8rem;color:var(--light);">Our Vision</h3>
        <p style="color:rgba(255,255,255,.78);line-height:1.85;font-size:clamp(.82rem,1.9vw,.93rem);">To become a community of believers transformed by the Word of God through the power of the Holy Spirit, growing in the grace and knowledge of Jesus Christ.</p>
      </div>
      <div style="background:linear-gradient(135deg,#3a1060,var(--navy));border-radius:18px;padding:1.6rem;color:white;">
        <div style="font-size:2rem;margin-bottom:.8rem;">🎯</div>
        <h3 style="font-size:clamp(.95rem,2.4vw,1.3rem);margin-bottom:.8rem;color:var(--light);">Our Mission</h3>
        <p style="color:rgba(255,255,255,.78);line-height:1.85;font-size:clamp(.82rem,1.9vw,.93rem);">To proclaim the Full Gospel of Jesus Christ; to prepare, equip, and send quality disciples to neighboring areas and the nations, so that all may be saved and become His disciples.</p>
      </div>
    </div>
  </div>
</section>

<!-- MOTTO BANNER -->
<section style="padding:var(--sp-v4) var(--sp-h);background:var(--offwhite);">
  <div class="inner">
    <div class="scripture-banner">
      <blockquote>"Just say a word and my servant will be healed."</blockquote>
      <cite>— Matthew 8:8b &nbsp;|&nbsp; Our Church Motto</cite>
    </div>
  </div>
</section>

<!-- SERVICE TIMES -->
<section style="background:white;padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <div style="text-align:center;margin-bottom:2rem;">
      <span class="section-label">Join Us</span>
      <h2 class="section-title">Service <em>Times</em></h2>
      <p class="section-sub" style="margin:0 auto;">We'd love to see you. Come as you are — there is always a seat for you at CFC Kanyariri.</p>
    </div>
    <div class="services-grid">
      <?php
      $services = [
        ['In-Person','SUNDAY','Morning Service','8:00 AM','Join us for praise, worship, and the preaching of the Full Gospel every Sunday morning.',false],
        ['⭐ Main Service','SUNDAY','Main Worship','10:00 AM','Our main celebration gathering with full worship, children\'s ministry, and a Word from the Lord.',true],
        ['Midweek','WEDNESDAY','Bible Study','6:30 PM','Dive deeper into the Scriptures in a relaxed, interactive setting for growing disciples.',false],
      ];
      foreach($services as $s): $cls=$s[5]?' featured':''; ?>
      <div class="service-card<?php echo $cls;?>">
        <div class="service-tag"><?php echo $s[0];?></div>
        <div class="service-day"><?php echo $s[1];?></div>
        <div class="service-name"><?php echo $s[2];?></div>
        <div class="service-time"><?php echo $s[3];?></div>
        <div class="service-desc"><?php echo $s[4];?></div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- COMMUNITY VOICES -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <div style="text-align:center;margin-bottom:2rem;">
      <span class="section-label">Our People</span>
      <h2 class="section-title">Voices from the <em>Community</em></h2>
    </div>
    <div class="cfc-3col-grid">
      <?php
      $quotes = [
        ['"Discipleship happens around the table, not just from the pulpit."','Mrs. B. Gikonyo','Church Elder'],
        ['"We measure success not by attendance numbers but by transformed lives."','J. Ndicu','Ministry Leader'],
        ['"Our history reminds us that God builds His church through ordinary people who respond in faith."','R. Gachoka','Church Leader'],
      ];
      foreach($quotes as $q):?>
      <div style="background:white;border-radius:16px;padding:1.5rem;box-shadow:0 3px 13px rgba(0,0,0,.06);">
        <div style="font-size:1.8rem;color:var(--light);margin-bottom:.65rem;">❝</div>
        <p style="font-style:italic;color:var(--navy);line-height:1.85;font-size:clamp(.82rem,1.9vw,.93rem);margin-bottom:1rem;"><?php echo $q[0];?></p>
        <div style="font-weight:700;font-size:.83rem;color:var(--blue);"><?php echo $q[1];?></div>
        <div style="font-size:.74rem;color:var(--muted);"><?php echo $q[2];?></div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- SALVATION CTA -->
<section style="background:linear-gradient(135deg,var(--navy) 0%,#0d2d5c 50%,#3a1060 100%);padding:var(--sp-v) var(--sp-h);text-align:center;">
  <div class="inner">
    <span class="section-label" style="color:var(--light);">The Good News</span>
    <h2 style="font-size:clamp(1.6rem,4vw,2.8rem);font-weight:700;color:white;margin-bottom:.9rem;">Do You Know <em style="color:var(--light);font-style:normal;">Jesus</em>?</h2>
    <p style="color:rgba(255,255,255,.72);max-width:520px;margin:0 auto 1.8rem;line-height:1.85;font-size:clamp(.82rem,1.9vw,.96rem);">Salvation is the greatest gift God has ever given. If you have never given your life to Christ — or want to recommit — today is the day of salvation.</p>
    <div style="display:flex;gap:.7rem;justify-content:center;flex-wrap:wrap;">
      <a href="salvation.php" class="btn-primary">Learn About Salvation</a>
      <a href="contact.php"   class="btn-secondary">Talk To Us</a>
    </div>
  </div>
</section>

<!-- UPCOMING EVENTS -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:1.8rem;flex-wrap:wrap;gap:.8rem;">
      <div>
        <span class="section-label">Calendar</span>
        <h2 class="section-title">Upcoming <em>Events</em></h2>
      </div>
      <a href="events.php" class="btn-primary" style="font-size:.85rem;padding:.55rem 1.2rem;">Full Calendar →</a>
    </div>
    <div class="events-list">
      <?php
      $events = [
        ['MAR','9','Sunday Service','Join us for our regular Sunday morning worship — all are welcome.','8:00 AM'],
        ['MAR','12','Midweek Bible Study','In-depth study of the Scriptures — all welcome to grow in the Word.','6:30 PM'],
        ['MAR','22','Community Outreach','Extending the love of Christ to our neighbours in Kanyariri and beyond.','10:00 AM'],
        ['APR','5','Easter Celebration','Celebrating the resurrection of our Lord Jesus Christ!','8:00 AM & 10:00 AM'],
      ];
      foreach($events as $ev):?>
      <div class="event-item">
        <div class="event-date-box">
          <div class="month"><?php echo $ev[0];?></div>
          <div class="day"><?php echo $ev[1];?></div>
        </div>
        <div class="event-info">
          <h4><?php echo $ev[2];?></h4>
          <p><?php echo $ev[3];?></p>
        </div>
        <div class="event-time"><?php echo $ev[4];?></div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<?php require 'includes/footer.php';?>
