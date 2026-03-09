<?php
$pageTitle = 'Events – Community Fellowship Church Kanyariri';
$activeNav = 'events';
require 'includes/header.php';

$events = [
  ['MAR','9','Worship','Sunday Morning Service','Our regular Sunday gathering — come encounter the living God with the CFC family.',     '8:00 AM',      'Main Hall','tag-worship'],
  ['MAR','12','Prayer','Midweek Bible Study',    'In-depth study of the Scriptures — all are welcome to grow in the Word together.',     '6:30 PM',      'Main Hall','tag-prayer'],
  ['MAR','22','Outreach','Community Outreach Day','Extending the love of Christ to our neighbours in Kanyariri and the surrounding areas.','10:00 AM',    'Meet at Church','tag-outreach'],
  ['MAR','29','Prayer','Corporate Prayer Morning','Come seek God together. Nothing but prayer — open to all.',                            '7:00 AM',      'Main Hall','tag-prayer'],
  ['APR','5','Special','Easter Sunday Celebration','Celebrating the resurrection of our Lord Jesus Christ! Bring a friend!',              '8:00 AM &amp; 10:00 AM','Main Hall','tag-special'],
  ['APR','18','Worship','Night of Praise &amp; Worship','An extended evening of worship and communion with God — a space to encounter His presence.','6:30 PM','Main Hall','tag-worship'],
];

$monthly = [
  ['📅 March 2026',[
    ['Mar 9','Sunday Service'],['Mar 12','Midweek Bible Study'],
    ['Mar 22','Community Outreach Day'],['Mar 29','Corporate Prayer Morning'],
  ]],
  ['📅 April 2026',[
    ['Apr 5','Easter Sunday Celebration 🌟'],['Apr 9','Midweek Bible Study'],
    ['Apr 18','Night of Praise & Worship'],['Apr 26','New Believers Class'],
  ]],
  ['📅 May 2026',[
    ['May 3','Prayer & Fasting Day'],['May 11','Mother\'s Day Service'],
    ['May 17','Youth Fellowship'],['May 31','Church Picnic & Outreach'],
  ]],
];
?>

<style>
  .feat-event{background:linear-gradient(135deg,var(--navy),#3a1060);border-radius:22px;padding:2.8rem;color:white;display:grid;grid-template-columns:1fr auto;gap:2rem;align-items:center;margin-bottom:2.5rem;}
  .feat-badge{display:inline-block;background:var(--light);color:var(--navy);font-size:.7rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:.25rem .75rem;border-radius:50px;margin-bottom:.9rem;}
  .feat-event h3{font-family:'Playfair Display',serif;font-size:clamp(1.5rem,3vw,2rem);font-weight:900;margin-bottom:.8rem;}
  .feat-event p{color:rgba(255,255,255,.72);line-height:1.85;max-width:480px;margin-bottom:1.4rem;}
  .feat-meta{display:flex;gap:1.8rem;flex-wrap:wrap;margin-bottom:1.4rem;}
  .feat-meta span{font-size:.88rem;color:rgba(255,255,255,.65);}
  .feat-btn{background:white;color:var(--navy);padding:.75rem 1.7rem;border-radius:50px;font-weight:700;text-decoration:none;transition:transform .2s;display:inline-block;}
  .feat-btn:hover{transform:translateY(-2px);}
  .feat-date{background:rgba(255,255,255,.12);border-radius:18px;padding:1.8rem;text-align:center;min-width:120px;border:1px solid rgba(255,255,255,.14);}
  .feat-date .mo{font-size:.8rem;text-transform:uppercase;letter-spacing:.1em;opacity:.72;margin-bottom:.25rem;}
  .feat-date .dy{font-family:'Playfair Display',serif;font-size:3.8rem;font-weight:900;line-height:1;color:var(--light);}
  .feat-date .yr{font-size:.75rem;opacity:.55;margin-top:.25rem;}
  .event-card{background:var(--offwhite);border-radius:16px;padding:1.6rem;display:grid;grid-template-columns:86px 1fr auto;gap:1.4rem;align-items:center;border:1.5px solid transparent;margin-bottom:1rem;transition:box-shadow .2s;}
  .event-card:hover{box-shadow:0 6px 24px rgba(19,127,235,.1);border-color:var(--border);}
  .ev-date{background:linear-gradient(135deg,var(--blue),var(--purple));border-radius:13px;padding:.75rem;text-align:center;color:white;}
  .ev-date .mo{font-size:.62rem;text-transform:uppercase;letter-spacing:.1em;opacity:.85;}
  .ev-date .dy{font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;line-height:1;}
  .ev-tag{display:inline-block;font-size:.68rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;padding:.2rem .62rem;border-radius:50px;margin-bottom:.45rem;}
  .tag-worship{background:#dce8ff;color:var(--blue)} .tag-prayer{background:#ead5f5;color:var(--purple)}
  .tag-outreach{background:#d5f0e8;color:#1a7a50} .tag-special{background:#fff0d5;color:#8a5a00}
  .event-card h4{font-weight:700;font-size:1rem;margin-bottom:.28rem;color:var(--navy);}
  .event-card p{font-size:.87rem;color:var(--muted);line-height:1.55;margin-bottom:.4rem;}
  .ev-tl{display:flex;gap:1.3rem;flex-wrap:wrap;}
  .ev-tl span{font-size:.8rem;color:#999;}
  .rsvp-btn{background:var(--blue);color:white;padding:.55rem 1.2rem;border-radius:50px;font-size:.82rem;font-weight:600;text-decoration:none;white-space:nowrap;transition:background .2s;}
  .rsvp-btn:hover{background:#0d65c8;}
  .month-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;margin-top:2rem;}
  .month-card{background:white;border-radius:16px;padding:1.5rem;box-shadow:0 3px 14px rgba(0,0,0,.06);}
  .month-card h4{font-family:'Playfair Display',serif;font-size:1.05rem;margin-bottom:.9rem;color:var(--navy);}
  .me{display:flex;gap:.75rem;align-items:flex-start;padding:.55rem 0;border-bottom:1px solid #f0f0f8;}
  .me:last-child{border-bottom:none;}
  .me-dot{width:7px;height:7px;border-radius:50%;background:var(--blue);margin-top:7px;flex-shrink:0;}
  .me span{font-size:.84rem;color:#555;line-height:1.4;}
  .me strong{display:block;font-size:.77rem;color:var(--purple);}
  @media(max-width:900px){.event-card{grid-template-columns:70px 1fr;}.rsvp-btn{display:none;}.feat-event{grid-template-columns:1fr;}.month-grid{grid-template-columns:1fr 1fr;}}
  @media(max-width:600px){.month-grid{grid-template-columns:1fr;}}
</style>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ Community Life ✦</div>
    <h1>Church <em>Events</em></h1>
    <p>Life is better together. Join us for worship services, prayer meetings, Bible studies, and community outreach days in Kanyariri.</p>
  </div>
</div>

<!-- FEATURED EVENT -->
<section style="padding:4rem 5% 2rem;">
  <div class="inner">
    <div class="feat-event">
      <div>
        <div class="feat-badge">🌟 Coming Up — Don't Miss It!</div>
        <h3>Easter Sunday Celebration</h3>
        <div class="feat-meta">
          <span>📅 April 5, 2026</span>
          <span>🕗 8:00 AM &amp; 10:00 AM</span>
          <span>📍 Main Hall, Kanyariri</span>
        </div>
        <p>Join us as we celebrate the resurrection of our Lord and Saviour Jesus Christ! A powerful, joyful service for the whole family — bring someone who needs to hear the Good News!</p>
        <a href="contact.php" class="feat-btn">Join Us →</a>
      </div>
      <div class="feat-date">
        <div class="mo">April</div>
        <div class="dy">5</div>
        <div class="yr">2026</div>
      </div>
    </div>
  </div>
</section>

<!-- ALL EVENTS -->
<section style="padding:2rem 5% 5rem;">
  <div class="inner">
    <span class="section-label">Upcoming</span>
    <h2 class="section-title">All <em>Events</em></h2>
    <div class="filter-bar">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="Worship">Worship</button>
      <button class="filter-btn" data-filter="Prayer">Prayer / Bible Study</button>
      <button class="filter-btn" data-filter="Outreach">Outreach</button>
      <button class="filter-btn" data-filter="Special">Special</button>
    </div>
    <div id="eventsGrid">
      <?php foreach($events as $ev):?>
      <div class="event-card" data-category="<?php echo $ev[2];?>">
        <div class="ev-date"><div class="mo"><?php echo $ev[0];?></div><div class="dy"><?php echo $ev[1];?></div></div>
        <div>
          <div class="ev-tag <?php echo $ev[7];?>"><?php echo $ev[2];?></div>
          <h4><?php echo $ev[3];?></h4>
          <p><?php echo $ev[4];?></p>
          <div class="ev-tl"><span>⏰ <?php echo $ev[5];?></span><span>📍 <?php echo $ev[6];?></span></div>
        </div>
        <a href="contact.php" class="rsvp-btn">Join</a>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- MONTHLY OVERVIEW -->
<section style="background:var(--offwhite);padding:5rem 5%;">
  <div class="inner">
    <span class="section-label">Overview</span>
    <h2 class="section-title">Monthly <em>Calendar</em></h2>
    <div class="month-grid">
      <?php foreach($monthly as $m):?>
      <div class="month-card">
        <h4><?php echo $m[0];?></h4>
        <?php foreach($m[1] as $item):?>
        <div class="me">
          <div class="me-dot"></div>
          <span><strong><?php echo $item[0];?></strong><?php echo $item[1];?></span>
        </div>
        <?php endforeach;?>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<?php require 'includes/footer.php';?>
