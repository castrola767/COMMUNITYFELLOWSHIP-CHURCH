<?php
$pageTitle = 'About Us – Community Fellowship Church Kanyariri';
$activeNav = 'about';
require 'includes/header.php';

$coreValues = [
  ['📖','Relationship with God','Faithful engagement in Holy Scripture as the foundation of our walk with God.'],
  ['🙏','Prayer','Prayer is our lifeline — we pray without ceasing, believing God hears and answers every prayer.'],
  ['🕊️','Humility','We approach God and one another with meekness and a teachable spirit.'],
  ['🫂','Communion','Fellowship, worship, and listening to God together in a spirit of unity and openness.'],
  ['🤝','Community','Care, compassion, and empowerment for every member and those around us.'],
  ['💎','Stewardship &amp; Excellence','Acting with integrity and excellence in every area entrusted to us by God.'],
  ['🧑‍🤝‍🧑','Servant Leadership','Leading by example, following Christ who came not to be served but to serve.'],
];
?>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ Our Story ✦</div>
    <h1>About <em>CFC</em> Kanyariri</h1>
    <p>From a small living-room marriage fellowship in 2005 to a vibrant, registered congregation — this is the story of God's faithfulness through ordinary people.</p>
  </div>
</div>

<!-- LEADERS PREVIEW -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <div style="text-align:center;margin-bottom:1.5rem;">
      <span class="section-label">Leadership</span>
      <h2 class="section-title">Meet Our <em>Leaders</em></h2>
      <p style="color:var(--muted);max-width:520px;margin:.5rem auto 0;line-height:1.85;font-size:clamp(.82rem,2vw,.94rem);">Servant leadership is one of our core values. Our pastors, elders, and ministry leaders are ordinary people who responded in faith to God's call.</p>
    </div>
    <div class="lp-grid">
      <?php
      $lp = [
        ['✝️','Bishop J. Kamau','Senior Pastor & Founder','founder'],
        ['🕊️','Rev. B. Kamau','Co-Founder','founder'],
        ['🔥','Pastor Daniel Mburu','Resident Pastor',''],
      ];
      foreach($lp as $l):
        $f = $l[3]==='founder';
        $border = $f ? 'border:1.5px solid rgba(19,127,235,.3);' : 'border:1.5px solid var(--border);';
        $grad   = $f ? 'var(--blue),var(--purple)' : 'var(--navy),#3a1060';
      ?>
      <div class="lp-card" style="<?php echo $border;?>">
        <div class="lp-avatar" style="background:linear-gradient(135deg,<?php echo $grad;?>);"><?php echo $l[0];?></div>
        <?php if($f):?><div><span class="lp-badge">FOUNDER</span></div><?php endif;?>
        <div class="lp-name"><?php echo $l[1];?></div>
        <div class="lp-role"><?php echo $l[2];?></div>
      </div>
      <?php endforeach;?>
    </div>
    <div style="text-align:center;">
      <a href="leaders.php" class="btn-primary">View Full Leader Profiles →</a>
    </div>
  </div>
</section>

<!-- WHO WE ARE -->
<section style="background:white;padding:var(--sp-v) var(--sp-h);">
  <div class="inner about-grid">
    <div>
      <span class="section-label">Who We Are</span>
      <h2 class="section-title">A Community <em>Rooted</em> in Acts</h2>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1rem;font-size:clamp(.82rem,2vw,.94rem);">We are a community that models the fellowship of believers described in the Book of Acts, and we seek to extend the love of Christ to all. We believe in the Full Gospel of Jesus Christ, and we affirm that the purpose of the church is to proclaim this Gospel.</p>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1.2rem;font-size:clamp(.82rem,2vw,.94rem);">CFC is described by its members as a family rather than an institution — fostering belonging and accountability, enabling individuals to grow spiritually within supportive relationships.</p>
      <div class="q-card">
        <p>"We never set out to build an institution; we simply responded to God's prompting to care for families and nurture faith in everyday life."</p>
        <cite>— Bishop J. Kamau, Founder</cite>
      </div>
      <div class="q-card">
        <p>"Discipleship happens around the table, not just from the pulpit."</p>
        <cite>— Mrs. B. Gikonyo, Church Elder</cite>
      </div>
      <div class="scripture-banner" style="margin-top:1.2rem;">
        <blockquote>"Just say a word and my servant will be healed."</blockquote>
        <cite>— Matthew 8:8b &nbsp;|&nbsp; Our Church Motto</cite>
      </div>
    </div>
    <div>
      <div style="background:linear-gradient(135deg,var(--navy),#3a1060);border-radius:16px;padding:1.5rem;color:white;text-align:center;">
        <div style="font-size:2.8rem;margin-bottom:.8rem;">✝</div>
        <h3 style="font-size:clamp(1rem,2.4vw,1.45rem);margin-bottom:.5rem;">Community Fellowship Church</h3>
        <p style="opacity:.78;font-size:.85rem;line-height:1.7;margin:0;">Kanyariri, Kenya<br>Formally Established <strong style="color:var(--light);">July 2007</strong></p>
        <div class="stats-2col">
          <?php foreach([['2005','Fellowship Founded'],['July 2007','Registered'],['Acts 2','Our Model'],['Full Gospel','Our Message']] as $s):?>
          <div style="background:rgba(255,255,255,.12);border-radius:10px;padding:.7rem .5rem;">
            <div style="font-weight:700;font-size:clamp(.86rem,2vw,1.05rem);color:var(--light);"><?php echo $s[0];?></div>
            <div style="font-size:.66rem;opacity:.7;margin-top:.15rem;"><?php echo $s[1];?></div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
      <div style="margin-top:1rem;background:white;border-radius:12px;padding:1.2rem;box-shadow:0 3px 10px rgba(0,0,0,.07);border:1px solid var(--border);">
        <h4 style="font-weight:700;font-size:.95rem;margin-bottom:.6rem;color:var(--navy);">The Spirit of CFC</h4>
        <p style="font-size:.84rem;color:var(--muted);line-height:1.8;margin-bottom:.6rem;">The spirit of CFC is anchored in its vision, mission, motto, and core values — emphasising <strong>relational discipleship</strong>, responsiveness to the Great Commission, and <strong>resilience</strong> in the face of challenges.</p>
        <p style="font-size:.84rem;color:var(--muted);line-height:1.8;margin:0;"><em>"Our vision grew out of listening — to God, to families, and to the community around us."</em></p>
      </div>
    </div>
  </div>
</section>

<!-- HISTORY -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <span class="section-label">Our History</span>
    <h2 class="section-title">The Story of <em>God's Faithfulness</em></h2>
    <p style="color:var(--muted);line-height:1.85;max-width:660px;margin-bottom:1.6rem;font-size:clamp(.82rem,2vw,.94rem);">CFC's history is one of faith, obedience, and relational authenticity — ordinary people who responded to God's leading and built something extraordinary together.</p>
    <div class="tl-wrap">
      <?php
      $history = [
        ['2004','A Call to Return','Bishop Kamau relocated to the United States with his family. Three months later he experienced a vision accompanied by an audible instruction to return to Kenya and begin ministry. The family returned home in obedience to God\'s call.',''],
        ['2005','Marriage Enrichment Fellowship Begins','Bishop Kamau and Rev. Beatrice developed a deep burden for marriages. They launched a marriage enrichment fellowship, creating a safe environment where couples could receive biblical guidance and mutual encouragement.','"They created a safe, supportive environment where couples could receive biblical guidance and mutual encouragement." — Rev. B. Kamau'],
        ['2005–2006','Organic Growth','The fellowship grew rapidly as participants invited others. What began as a living-room gathering evolved into structured meetings featuring prayer, teaching, and counselling. Several unbelieving spouses encountered faith and committed their lives to Christ.','"Seeing families restored and individuals come to faith confirmed that God was at work among us." — H. Mirara'],
        ['July 2007','Officially Established &amp; Registered','CFC was officially registered with the Registrar of Societies in Kenya. Leadership roles emerged according to spiritual gifting, and early ministries included prayer coordination, marriage counselling, and youth mentorship.','"We realised that God was forming a community, not just hosting meetings." — H. Mirara'],
        ['Growing Years','Expanding Ministries','Key milestones included acquiring a worship space, launching children\'s and youth ministries, formalising membership, and planting new churches.','"Every step forward required faith, sacrifice, and a willingness to remain flexible to God\'s leading." — W. Mwaura'],
        ['Today','Still Going Forward','CFC continues to serve Kanyariri and beyond — balancing structure with relational authenticity and fostering a sense of ownership among its members.','"Our history reminds us that God builds His church through ordinary people who respond in faith." — R. Gachoka'],
      ];
      foreach($history as $h):?>
      <div class="tl-item">
        <div class="tl-dot"></div>
        <div class="tl-year"><?php echo $h[0];?></div>
        <h4><?php echo $h[1];?></h4>
        <p><?php echo $h[2];?></p>
        <?php if($h[3]):?><div class="q-card" style="margin-top:.7rem;"><p style="font-size:.8rem;"><?php echo $h[3];?></p></div><?php endif;?>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- VISION & MISSION -->
<section style="background:white;padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <span class="section-label">Our Direction</span>
    <h2 class="section-title">Vision &amp; <em>Mission</em></h2>
    <div class="vm-grid">
      <div class="vm-card" style="background:linear-gradient(135deg,var(--navy),#0d2d5c);">
        <div style="font-size:1.8rem;margin-bottom:.7rem;">👁️</div>
        <h3>Our Vision</h3>
        <p>To become a community of believers transformed by the Word of God through the power of the Holy Spirit, growing in the grace and knowledge of Jesus Christ.</p>
      </div>
      <div class="vm-card" style="background:linear-gradient(135deg,#3a1060,var(--navy));">
        <div style="font-size:1.8rem;margin-bottom:.7rem;">🎯</div>
        <h3>Our Mission</h3>
        <p>To proclaim the Full Gospel of Jesus Christ; to prepare, equip, and send quality disciples to neighboring areas and the nations, so that all may be saved and become His disciples.</p>
      </div>
    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner">
    <span class="section-label">What Guides Us</span>
    <h2 class="section-title">Our <em>Core Values</em></h2>
    <p style="color:var(--muted);line-height:1.85;max-width:640px;margin-bottom:.5rem;font-size:clamp(.82rem,2vw,.94rem);"><em>"Our vision grew out of listening — to God, to families, and to the community around us."</em></p>
    <div class="values-grid">
      <?php foreach($coreValues as $i => $v):?>
      <div class="value-card">
        <div class="vi"><?php echo $v[0];?></div>
        <h4><?php echo ($i+1).'. '.html_entity_decode($v[1]);?></h4>
        <p><?php echo $v[2];?></p>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- COMMUNITY IMPACT -->
<section style="background:white;padding:var(--sp-v) var(--sp-h);">
  <div class="inner cfc-2col-grid">
    <div>
      <span class="section-label">Community Impact</span>
      <h2 class="section-title">How We Serve <em>Beyond Our Walls</em></h2>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1rem;font-size:clamp(.82rem,2vw,.94rem);">Community Fellowship Church has consistently extended its ministry beyond its walls, addressing both spiritual and social needs within the wider community.</p>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1rem;font-size:clamp(.82rem,2vw,.94rem);"><em>"We measure success not by attendance numbers but by transformed lives."</em></p>
      <div class="q-card">
        <p>"Many young people simply needed someone to believe in them and walk alongside them."</p>
        <cite>— E. Nganga, Youth Mentor</cite>
      </div>
      <div class="q-card">
        <p>"There were seasons when resources were scarce, but our faith and unity sustained us."</p>
        <cite>— G. Njoroge, Church Elder</cite>
      </div>
    </div>
    <div>
      <?php
      $impacts = [
        ['❤️','Family Restoration','The marriage enrichment fellowship restored many families and saw unbelieving spouses come to saving faith.'],
        ['🧒','Youth Mentorship','Volunteers provide academic support, life skills training, and spiritual guidance to youth at risk.'],
        ['🌍','Community Relief &amp; Outreach','CFC mobilises resources to support families during economic hardships and health emergencies.'],
        ['👨‍👩‍👧','Orphan &amp; Family Support','Partnerships with local organisations provided counselling, mentorship, and support for orphaned children.'],
        ['✝️','Evangelism &amp; Proclamation','Through every ministry, CFC remains focused on proclaiming the Full Gospel of Jesus Christ.'],
      ];
      foreach($impacts as $imp):?>
      <div class="impact-item">
        <div class="imp-icon"><?php echo $imp[0];?></div>
        <div><h4><?php echo $imp[1];?></h4><p><?php echo $imp[2];?></p></div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- LEGACY -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner cfc-2col-grid">
    <div>
      <span class="section-label">Legacy &amp; Future</span>
      <h2 class="section-title">Preserving Our <em>Heritage</em></h2>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1rem;font-size:clamp(.82rem,2vw,.94rem);">CFC's legacy is rooted in its organic beginnings and steadfast commitment to relational discipleship. Unlike institutions driven primarily by expansion goals, CFC emerged from pastoral care and communal discernment.</p>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1rem;font-size:clamp(.82rem,2vw,.94rem);">Documenting testimonies, milestones, and lessons learned ensures the church's story remains a source of inspiration for future generations.</p>
      <p style="color:var(--muted);line-height:1.9;font-size:clamp(.82rem,2vw,.94rem);">Emerging leaders play a critical role in sustaining CFC's mission by mentoring younger members and fostering intergenerational collaboration.</p>
    </div>
    <div>
      <?php
      $lq = [
        ['"Our history reminds us that God builds His church through ordinary people who respond in faith."','R. Gachoka, Church Leader'],
        ['"Every step forward required faith, sacrifice, and a willingness to remain flexible to God\'s leading."','W. Mwaura, Long-Serving Member'],
        ['"We realised that God was forming a community, not just hosting meetings."','H. Mirara, Church Leader'],
      ];
      foreach($lq as $q):?>
      <div class="q-card"><p><?php echo $q[0];?></p><cite>— <?php echo $q[1];?></cite></div>
      <?php endforeach;?>
      <div style="background:linear-gradient(135deg,var(--navy),#3a1060);border-radius:12px;padding:1.2rem;color:white;margin-top:.5rem;">
        <p style="line-height:1.85;color:rgba(255,255,255,.82);font-size:.85rem;margin:0;">CFC's community impact is also reflected in the daily lives of its members — modeling integrity, service, and compassion in their workplaces and neighborhoods.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:linear-gradient(135deg,var(--navy) 0%,#0d2d5c 50%,#3a1060 100%);padding:var(--sp-v) var(--sp-h);text-align:center;">
  <div class="inner">
    <h2 style="font-size:clamp(1.5rem,4vw,2.5rem);color:white;margin-bottom:.8rem;">Come &amp; Be Part of the <em style="color:var(--light);font-style:normal;">Community</em></h2>
    <p style="color:rgba(255,255,255,.72);max-width:460px;margin:0 auto 1.6rem;line-height:1.85;font-size:clamp(.82rem,2vw,.96rem);">We welcome everyone — wherever you are on your journey with God. Come as you are.</p>
    <div style="display:flex;gap:.7rem;justify-content:center;flex-wrap:wrap;">
      <a href="contact.php"   class="btn-primary">Visit Us This Sunday</a>
      <a href="salvation.php" class="btn-white">Know Salvation</a>
    </div>
  </div>
</section>

<?php require 'includes/footer.php';?>
