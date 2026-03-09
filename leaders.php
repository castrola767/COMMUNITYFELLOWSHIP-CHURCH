<?php
$pageTitle = 'Our Leaders – Community Fellowship Church Kanyariri';
$activeNav = 'about';
require 'includes/header.php';

$leaders = [
  ['Bishop J. Kamau','Senior Pastor & Founder','✝️',
   'Bishop Kamau founded Community Fellowship Church after returning from the United States in 2004 following a divine vision and an audible instruction to return to Kenya and begin ministry. His burden for families and the Full Gospel led to the formation of the marriage enrichment fellowship in 2005, which grew into CFC Kanyariri.',
   '"We never set out to build an institution; we simply responded to God\'s prompting to care for families and nurture faith in everyday life."',
   ['Preaching & Teaching','Pastoral Leadership','Vision & Strategy','Marriage Ministry'],
   true],
  ['Rev. Beatrice Kamau','Co-Founder & Women\'s Ministry Leader','🕊️',
   'Rev. Beatrice Kamau co-founded Community Fellowship Church alongside Bishop Kamau. Her heart for women, families, and prayer has been central to the church\'s identity from its very first living-room gatherings. She oversees the women\'s ministry and is a pillar of pastoral care at CFC.',
   '"The church grows when women are strong in the Word and strong in prayer."',
   ['Women\'s Ministry','Pastoral Care','Prayer Leadership','Family Counselling'],
   true],
  ['Pastor Daniel Mburu','Resident Pastor','🔥',
   'Pastor Daniel Mburu serves as the Resident Pastor of Community Fellowship Church Kanyariri, faithfully shepherding the congregation week by week. His dedication to the Word of God, pastoral care, and discipleship keeps the vision of CFC alive in the hearts of the people.',
   '"The local church is the hope of the world — and I am honoured to serve this one."',
   ['Preaching & Teaching','Pastoral Care','Discipleship','Congregational Leadership'],
   false],
];
?>

<div class="breadcrumb-bar">
  <a href="index.php">Home</a> &rsaquo;
  <a href="about.php">About</a> &rsaquo;
  <strong style="color:var(--navy);">Our Leaders</strong>
</div>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ Servant Leadership ✦</div>
    <h1>Our <em>Leaders</em></h1>
    <p>God builds His church through ordinary people who respond to His call in faith. Meet the men and women who serve and shepherd Community Fellowship Church Kanyariri.</p>
  </div>
</div>

<section style="background:white;padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <div class="leaders-intro">
      <span class="section-label">Servant Leadership</span>
      <h2 class="section-title">Led by <em>Faith</em>, Serving in <em>Love</em></h2>
      <p style="color:var(--muted);line-height:1.85;margin-top:.75rem;font-size:clamp(.82rem,2vw,.94rem);">Servant leadership is one of CFC's core values — following the example of Jesus, who came not to be served, but to serve. Our leaders are ordinary people who responded in faith to God's call on their lives.</p>
    </div>

    <div class="leaders-grid">
      <?php foreach($leaders as $l): $isFounder = $l[6]; ?>
      <div class="leader-card <?php echo $isFounder ? 'founder' : ''; ?>">
        <div class="leader-avatar"><?php echo $l[2]; ?></div>
        <div class="leader-body">
          <?php if($isFounder): ?>
          <div style="margin-bottom:.5rem;">
            <span style="background:linear-gradient(135deg,var(--blue),var(--purple));color:white;font-size:.62rem;font-weight:700;padding:.15rem .56rem;border-radius:50px;letter-spacing:.07em;">FOUNDER</span>
          </div>
          <?php endif; ?>
          <div class="leader-name"><?php echo $l[0]; ?></div>
          <div class="leader-role"><?php echo $l[1]; ?></div>
          <p class="leader-bio"><?php echo $l[3]; ?></p>
          <div class="leader-quote"><?php echo $l[4]; ?></div>
          <div class="leader-tags">
            <?php foreach($l[5] as $tag): ?>
            <span class="leader-tag"><?php echo $tag; ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="vision-box">
      <h3>🤝 Want to Serve with Us?</h3>
      <p>CFC is always looking for faithful, humble people willing to serve God and the community. If you feel called to serve, we'd love to talk with you.</p>
      <div style="display:flex;gap:.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="contact.php" class="btn-primary">Get In Touch</a>
        <a href="about.php"   class="btn-secondary">Back to About</a>
      </div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
