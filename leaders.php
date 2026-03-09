<?php
$pageTitle = 'Our Leaders – Community Fellowship Church Kanyariri';
$activeNav = 'about';
require 'includes/header.php';

$leaders = [
  [
    'Bishop J. Kamau',
    'Senior Pastor & Founder',
    '✝️',
    'Bishop Kamau founded Community Fellowship Church after returning from the United States in 2004 following a divine vision and an audible instruction to return to Kenya and begin ministry. His burden for families and the Full Gospel led to the formation of the marriage enrichment fellowship in 2005, which grew into CFC Kanyariri.',
    '"We never set out to build an institution; we simply responded to God\'s prompting to care for families and nurture faith in everyday life."',
    ['Preaching & Teaching','Pastoral Leadership','Vision & Strategy','Marriage Ministry'],
  ],
  [
    'Rev. Beatrice Kamau',
    'Co-Founder & Women\'s Ministry Leader',
    '🕊️',
    'Rev. Beatrice Kamau co-founded Community Fellowship Church alongside Bishop Kamau. Her heart for women, families, and prayer has been central to the church\'s identity from its very first living-room gatherings. She oversees the women\'s ministry and is a pillar of pastoral care at CFC.',
    '"The church grows when women are strong in the Word and strong in prayer."',
    ['Women\'s Ministry','Pastoral Care','Prayer Leadership','Family Counselling'],
  ],
  [
    'Mrs. B. Gikonyo',
    'Church Elder',
    '📖',
    'Mrs. Gikonyo serves as a church elder and has been part of CFC\'s journey since its early years. Her wisdom, faithfulness, and deep commitment to discipleship have shaped the culture of the church.',
    '"Discipleship happens around the table, not just from the pulpit."',
    ['Eldership','Discipleship','Mentorship','Community Care'],
  ],
  [
    'G. Njoroge',
    'Church Elder',
    '🙏',
    'Elder Njoroge has walked with CFC through seasons of growth and challenge. His steady faith and pastoral heart have been a source of encouragement to the entire congregation and leadership team.',
    '"There were seasons when resources were scarce, but our faith and unity sustained us."',
    ['Eldership','Leadership','Prayer','Church Governance'],
  ],
  [
    'J. Ndicu',
    'Ministry Leader',
    '🌟',
    'J. Ndicu leads one of CFC\'s key ministry departments and is passionate about building a church that measures success not in numbers but in transformed lives. His servant leadership reflects the values at the heart of CFC.',
    '"We measure success not by attendance numbers but by transformed lives."',
    ['Ministry Leadership','Outreach','Discipleship','Youth'],
  ],
  [
    'E. Nganga',
    'Youth Mentor',
    '🔥',
    'E. Nganga pours her life into the youth of Kanyariri — walking alongside young people, providing academic support, spiritual guidance, and simply believing in them. Her ministry has changed the trajectory of many young lives.',
    '"Many young people simply needed someone to believe in them and walk alongside them."',
    ['Youth Mentorship','Spiritual Guidance','Academic Support','Life Skills'],
  ],
];
?>

<style>
  .leaders-intro { max-width: 680px; margin: 0 auto; text-align: center; }
  .leaders-grid  { display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-top: 2.5rem; }
  @media (min-width: 600px) { .leaders-grid { grid-template-columns: repeat(2,1fr); } }
  @media (min-width: 992px) { .leaders-grid { grid-template-columns: repeat(3,1fr); } }

  .leader-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,.07);
    border: 1.5px solid var(--border);
    transition: transform .2s, box-shadow .2s;
    display: flex;
    flex-direction: column;
  }
  .leader-card:hover { transform: translateY(-5px); box-shadow: 0 14px 40px rgba(19,127,235,.13); }

  .leader-avatar {
    height: 130px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3.5rem;
    background: linear-gradient(135deg, var(--navy), var(--plum));
    position: relative;
  }
  .leader-avatar::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 30px;
    background: white;
    clip-path: ellipse(55% 100% at 50% 100%);
  }

  .leader-body { padding: 1rem 1.25rem 1.4rem; flex: 1; display: flex; flex-direction: column; }
  .leader-name  { font-family: 'Playfair Display',serif; font-size: 1.1rem; font-weight: 700; color: var(--navy); margin-bottom: .18rem; }
  .leader-role  { font-size: .72rem; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: var(--blue); margin-bottom: .9rem; }
  .leader-bio   { font-size: .86rem; color: var(--muted); line-height: 1.75; margin-bottom: 1rem; flex: 1; }
  .leader-quote {
    font-style: italic;
    font-size: .84rem;
    color: var(--navy);
    border-left: 3px solid var(--purple);
    padding-left: .85rem;
    line-height: 1.65;
    margin-bottom: 1rem;
  }
  .leader-tags  { display: flex; flex-wrap: wrap; gap: .4rem; }
  .leader-tag {
    font-size: .68rem;
    font-weight: 600;
    padding: .2rem .62rem;
    border-radius: 50px;
    background: var(--offwhite);
    color: var(--navy);
    border: 1px solid var(--border);
  }

  /* Founder cards — slightly highlighted */
  .leader-card.founder .leader-avatar { background: linear-gradient(135deg, var(--blue), var(--purple)); }
  .leader-card.founder { border-color: rgba(19,127,235,.25); }

  .vision-box {
    background: linear-gradient(135deg, var(--navy), var(--plum));
    border-radius: 20px;
    padding: 2.2rem 1.5rem;
    color: white;
    text-align: center;
    margin-top: 3rem;
  }
  @media (min-width: 576px) { .vision-box { padding: 2.8rem 3rem; } }
  .vision-box h3 { font-family: 'Playfair Display',serif; font-size: clamp(1.3rem,3vw,1.9rem); color: var(--light); margin-bottom: .8rem; }
  .vision-box p  { color: rgba(255,255,255,.74); max-width: 540px; margin: 0 auto 1.5rem; line-height: 1.85; }

  .breadcrumb-bar {
    background: var(--offwhite);
    border-bottom: 1px solid var(--border);
    padding: .6rem 1.25rem;
    font-size: .8rem;
    color: var(--muted);
  }
  .breadcrumb-bar a { color: var(--blue); text-decoration: none; }
  .breadcrumb-bar a:hover { text-decoration: underline; }
  @media (min-width: 768px) { .breadcrumb-bar { padding: .6rem 5%; } }
</style>

<!-- BREADCRUMB -->
<div class="breadcrumb-bar">
  <a href="index.php">Home</a> &rsaquo;
  <a href="about.php">About</a> &rsaquo;
  <strong style="color:var(--navy);">Our Leaders</strong>
</div>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ Servant Leadership ✦</div>
    <h1>Our <em>Leaders</em></h1>
    <p>God builds His church through ordinary people who respond to His call in faith. Meet the men and women who serve and shepherd Community Fellowship Church Kanyariri.</p>
  </div>
</div>

<!-- INTRO -->
<section style="background:white;padding:5rem 5%;">
  <div class="inner">
    <div class="leaders-intro">
      <span class="section-label">Servant Leadership</span>
      <h2 class="section-title">Led by <em>Faith</em>, Serving in <em>Love</em></h2>
      <p style="color:var(--muted);line-height:1.85;margin-top:.75rem;">Servant leadership is one of CFC's core values — following the example of Jesus, who came not to be served, but to serve. Our leaders are ordinary people who responded in faith to God's call on their lives.</p>
    </div>

    <!-- LEADERS GRID -->
    <div class="leaders-grid">
      <?php foreach($leaders as $i => $l): $isFounder = $i < 2; ?>
      <div class="leader-card <?php echo $isFounder ? 'founder' : ''; ?>">
        <div class="leader-avatar"><?php echo $l[2]; ?></div>
        <div class="leader-body">
          <?php if($isFounder): ?>
          <div style="margin-bottom:.5rem;"><span style="background:linear-gradient(135deg,var(--blue),var(--purple));color:white;font-size:.65rem;font-weight:700;padding:.18rem .6rem;border-radius:50px;letter-spacing:.08em;">FOUNDER</span></div>
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

    <!-- BOTTOM CTA -->
    <div class="vision-box">
      <h3>🤝 Want to Serve with Us?</h3>
      <p>CFC is always looking for faithful, humble people willing to serve God and the community. If you feel called to serve, we'd love to talk with you.</p>
      <div style="display:flex;gap:.85rem;justify-content:center;flex-wrap:wrap;">
        <a href="contact.php" class="btn-primary">Get In Touch</a>
        <a href="about.php" class="btn-secondary">Back to About</a>
      </div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
