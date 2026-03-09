<?php
$pageTitle = 'Events – Community Fellowship Church Kanyariri';
$activeNav = 'events';
require 'includes/header.php';

$events = [
  ['MAR','9','Worship','Sunday Morning Service','Our regular Sunday gathering — come encounter the living God with the CFC family.','8:00 AM','Main Hall','tag-worship'],
  ['MAR','12','Prayer','Midweek Bible Study','In-depth study of the Scriptures — all are welcome to grow in the Word together.','6:30 PM','Main Hall','tag-prayer'],
  ['MAR','22','Outreach','Community Outreach Day','Extending the love of Christ to our neighbours in Kanyariri and the surrounding areas.','10:00 AM','Meet at Church','tag-outreach'],
  ['MAR','29','Prayer','Corporate Prayer Morning','Come seek God together. Nothing but prayer — open to all.','7:00 AM','Main Hall','tag-prayer'],
  ['APR','5','Special','Easter Sunday Celebration','Celebrating the resurrection of our Lord Jesus Christ! Bring a friend!','8:00 AM &amp; 10:00 AM','Main Hall','tag-special'],
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

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ Community Life ✦</div>
    <h1>Church <em>Events</em></h1>
    <p>Life is better together. Join us for worship services, prayer meetings, Bible studies, and community outreach days in Kanyariri.</p>
  </div>
</div>

<!-- FEATURED EVENT -->
<section style="padding:var(--sp-v2) var(--sp-h) var(--sp-v3);">
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
<section style="padding:var(--sp-v3) var(--sp-h) var(--sp-v);">
  <div class="inner">
    <span class="section-label">Upcoming</span>
    <h2 class="section-title">All <em>Events</em></h2>
    <div class="filter-bar">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="Worship">Worship</button>
      <button class="filter-btn" data-filter="Prayer">Prayer</button>
      <button class="filter-btn" data-filter="Outreach">Outreach</button>
      <button class="filter-btn" data-filter="Special">Special</button>
    </div>
    <div id="eventsGrid">
      <?php foreach($events as $ev):?>
      <div class="event-card" data-category="<?php echo $ev[2];?>">
        <div class="ev-date">
          <div class="mo"><?php echo $ev[0];?></div>
          <div class="dy"><?php echo $ev[1];?></div>
        </div>
        <div>
          <span class="ev-tag <?php echo $ev[7];?>"><?php echo $ev[2];?></span>
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

<!-- MONTHLY CALENDAR -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
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
