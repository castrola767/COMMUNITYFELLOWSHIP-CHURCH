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

<style>
  .about-grid{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:start;}
  .values-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.2rem;margin-top:2.5rem;}
  .value-card{background:white;border-radius:16px;padding:1.4rem;border-left:4px solid var(--blue);box-shadow:0 3px 14px rgba(0,0,0,.06);}
  .value-card .vi{font-size:1.5rem;margin-bottom:.55rem;}
  .value-card h4{font-weight:700;margin-bottom:.35rem;font-size:.95rem;color:var(--navy);}
  .value-card p{font-size:.86rem;color:var(--muted);line-height:1.6;}
  .vm-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;margin-top:2.5rem;}
  .vm-card{border-radius:20px;padding:2.2rem;color:white;}
  .vm-card h3{font-family:'Playfair Display',serif;font-size:1.3rem;margin-bottom:.8rem;color:var(--light);}
  .vm-card p{color:rgba(255,255,255,.78);line-height:1.85;font-size:.95rem;}
  /* TIMELINE */
  .tl-wrap{position:relative;padding-left:2.5rem;margin-top:2.5rem;}
  .tl-wrap::before{content:'';position:absolute;left:8px;top:6px;bottom:6px;width:3px;background:linear-gradient(to bottom,var(--blue),var(--purple));border-radius:3px;}
  .tl-item{position:relative;padding-bottom:2.5rem;}
  .tl-item:last-child{padding-bottom:0;}
  .tl-dot{position:absolute;left:-2.5rem;top:4px;width:18px;height:18px;border-radius:50%;background:linear-gradient(135deg,var(--blue),var(--purple));border:3px solid white;box-shadow:0 0 0 2px var(--blue);}
  .tl-year{font-size:.74rem;font-weight:700;color:var(--blue);letter-spacing:.12em;text-transform:uppercase;margin-bottom:.35rem;}
  .tl-item h4{font-family:'Playfair Display',serif;font-size:1.15rem;margin-bottom:.45rem;color:var(--navy);}
  .tl-item p{font-size:.9rem;color:var(--muted);line-height:1.75;max-width:600px;}
  /* QUOTES */
  .q-card{background:var(--offwhite);border-radius:16px;padding:1.5rem 1.5rem 1.5rem 1.8rem;border-left:4px solid var(--purple);margin-bottom:1rem;}
  .q-card p{font-style:italic;color:var(--navy);line-height:1.85;font-size:.93rem;margin-bottom:.55rem;}
  .q-card cite{font-size:.77rem;color:var(--muted);font-style:normal;}
  /* IMPACT */
  .impact-item{background:white;border-radius:16px;padding:1.6rem;display:flex;gap:1rem;align-items:flex-start;box-shadow:0 3px 14px rgba(0,0,0,.06);margin-bottom:1rem;}
  .imp-icon{width:48px;height:48px;border-radius:12px;flex-shrink:0;background:linear-gradient(135deg,var(--blue),var(--purple));display:flex;align-items:center;justify-content:center;font-size:1.2rem;}
  .impact-item h4{font-weight:700;margin-bottom:.35rem;color:var(--navy);}
  .impact-item p{font-size:.88rem;color:var(--muted);line-height:1.7;}
  @media(max-width:900px){.about-grid,.vm-grid,.values-grid{grid-template-columns:1fr;}}
</style>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ Our Story ✦</div>
    <h1>About <em>CFC</em><br>Kanyariri</h1>
    <p>From a small living-room marriage fellowship in 2005 to a vibrant, registered congregation — this is the story of God's faithfulness through ordinary people.</p>
  </div>
</div>

<!-- MEET OUR LEADERS — shown first -->
<section style="background:var(--offwhite);padding:5rem 5%;">
  <div class="inner">
    <div style="text-align:center;margin-bottom:2.5rem;">
      <span class="section-label">Leadership</span>
      <h2 class="section-title">Meet Our <em>Leaders</em></h2>
      <p style="color:var(--muted);max-width:520px;margin:.6rem auto 0;line-height:1.85;">Servant leadership is one of our core values. Our pastors, elders, and ministry leaders are ordinary people who responded in faith to God's call.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:1.1rem;margin-bottom:2rem;">
      <?php
      $leaders_preview = [
        ['✝️','Bishop J. Kamau','Senior Pastor & Founder','founder'],
        ['🕊️','Rev. B. Kamau','Co-Founder','founder'],
        ['📖','Mrs. B. Gikonyo','Church Elder',''],
        ['🙏','G. Njoroge','Church Elder',''],
        ['🌟','J. Ndicu','Ministry Leader',''],
        ['🔥','E. Nganga','Youth Mentor',''],
      ];
      foreach($leaders_preview as $lp):?>
      <div style="background:white;border-radius:16px;padding:1.4rem 1rem;border:1.5px solid <?php echo $lp[3]==='founder' ? 'rgba(19,127,235,.3)' : 'var(--border)';?>;text-align:center;box-shadow:0 3px 12px rgba(0,0,0,.05);transition:transform .2s;" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform=''">
        <div style="width:56px;height:56px;border-radius:50%;background:linear-gradient(135deg,<?php echo $lp[3]==='founder' ? 'var(--blue),var(--purple)' : 'var(--navy),#3a1060';?>);display:flex;align-items:center;justify-content:center;font-size:1.5rem;margin:0 auto .75rem;"><?php echo $lp[0];?></div>
        <?php if($lp[3]==='founder'):?><div style="margin-bottom:.4rem;"><span style="background:linear-gradient(135deg,var(--blue),var(--purple));color:white;font-size:.6rem;font-weight:700;padding:.15rem .55rem;border-radius:50px;letter-spacing:.07em;">FOUNDER</span></div><?php endif;?>
        <div style="font-weight:700;font-size:.9rem;color:var(--navy);margin-bottom:.2rem;font-family:'DM Sans',sans-serif;"><?php echo $lp[1];?></div>
        <div style="font-size:.72rem;color:var(--muted);"><?php echo $lp[2];?></div>
      </div>
      <?php endforeach;?>
    </div>
    <div style="text-align:center;">
      <a href="leaders.php" class="btn-primary">View Full Leader Profiles →</a>
    </div>
  </div>
</section>

<!-- WHO WE ARE -->
<section style="background:var(--offwhite);padding:5rem 5%;">
  <div class="inner about-grid">
    <div>
      <span class="section-label">Who We Are</span>
      <h2 class="section-title">A Community <em>Rooted</em> in Acts</h2>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1.2rem;">We are a community that models the fellowship of believers described in the Book of Acts, and we seek to extend the love of Christ to all. We believe in the Full Gospel of Jesus Christ, and we affirm that the purpose of the church is to proclaim this Gospel.</p>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1.4rem;">CFC is described by its members as a family rather than an institution. This relational orientation fosters belonging and accountability, enabling individuals to grow spiritually within supportive relationships.</p>
      <div class="q-card">
        <p>"We never set out to build an institution; we simply responded to God's prompting to care for families and nurture faith in everyday life."</p>
        <cite>— Bishop J. Kamau, Founder (Personal Communication, Feb 12, 2025)</cite>
      </div>
      <div class="q-card">
        <p>"Discipleship happens around the table, not just from the pulpit."</p>
        <cite>— Mrs. B. Gikonyo, Church Elder (Personal Communication, Feb 18, 2025)</cite>
      </div>
      <div class="scripture-banner" style="margin-top:1.5rem;padding:1.8rem;">
        <blockquote style="font-size:1.05rem;">"Just say a word and my servant will be healed."</blockquote>
        <cite>— Matthew 8:8b &nbsp;|&nbsp; Our Church Motto</cite>
      </div>
    </div>
    <div>
      <div style="background:linear-gradient(135deg,var(--navy),#3a1060);border-radius:22px;padding:2.8rem 2.2rem;color:white;text-align:center;">
        <div style="font-size:4rem;margin-bottom:1.2rem;">✝</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:1.7rem;margin-bottom:.8rem;">Community Fellowship Church</h3>
        <p style="opacity:.78;font-size:.92rem;line-height:1.75;">Kanyariri, Kenya<br>Formally Established <strong style="color:var(--light);">July 2007</strong></p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:.9rem;margin-top:1.5rem;">
          <?php foreach([['2005','Fellowship Founded'],['July 2007','Registered'],['Acts 2','Our Model'],['Full Gospel','Our Message']] as $s):?>
          <div style="background:rgba(255,255,255,.12);border-radius:12px;padding:.9rem;">
            <div style="font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:var(--light);"><?php echo $s[0];?></div>
            <div style="font-size:.72rem;opacity:.7;margin-top:.2rem;"><?php echo $s[1];?></div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
      <div style="margin-top:1.5rem;background:white;border-radius:18px;padding:1.8rem;box-shadow:0 3px 14px rgba(0,0,0,.06);">
        <h4 style="font-family:'Playfair Display',serif;font-size:1.1rem;margin-bottom:1rem;color:var(--navy);">The Spirit of CFC</h4>
        <p style="font-size:.9rem;color:var(--muted);line-height:1.8;">The spirit of CFC is anchored in its vision, mission, motto, and core values — emphasising <strong>relational discipleship</strong>, responsiveness to the Great Commission, attentiveness to community needs, and <strong>resilience</strong> in the face of challenges.</p>
        <p style="font-size:.9rem;color:var(--muted);line-height:1.8;margin-top:.8rem;">As one founder explained: <em>"Our vision grew out of listening — to God, to families, and to the community around us."</em></p>
      </div>
    </div>
  </div>
</section>

<!-- HISTORY TIMELINE -->
<section style="background:white;padding:5rem 5%;">
  <div class="inner">
    <span class="section-label">Our History</span>
    <h2 class="section-title">The Story of <em>God's Faithfulness</em></h2>
    <p style="color:var(--muted);line-height:1.85;max-width:680px;margin-bottom:2rem;">CFC's history is one of faith, obedience, and relational authenticity — a story of ordinary people who responded to God's leading and built something extraordinary together.</p>
    <div class="tl-wrap">
      <?php
      $history = [
        ['2004','A Call to Return',
         'Bishop Kamau relocated to the United States with his family. Although the transition initially proceeded smoothly, three months later he experienced a vision accompanied by an audible instruction to return to Kenya and begin ministry. Discerning this as God\'s will, the family made the difficult decision to return home in obedience.',
         ''],
        ['2005','Marriage Enrichment Fellowship Begins',
         'After resettling in Kenya, Bishop Kamau and Rev. Beatrice developed a deep burden for marriages and family life. They launched a marriage enrichment fellowship after recognising that many Christian families were struggling silently with relational challenges. Rather than immediately planting a church, they created a safe, supportive environment where couples could receive biblical guidance and mutual encouragement.',
         '"[They] created a safe, supportive environment where couples could receive biblical guidance and mutual encouragement." — Rev. B. Kamau (Personal Communication, Feb 10, 2025)'],
        ['2005–2006','Organic Growth',
         'The fellowship grew rapidly as participants invited others. What began as a small living-room gathering evolved into structured meetings featuring prayer, teaching, and counselling. Several unbelieving spouses who attended out of curiosity encountered the Christian faith and committed their lives to Christ.',
         '"Seeing families restored and individuals come to faith confirmed that God was at work among us." — H. Mirara (Personal Communication, Feb 10, 2025)'],
        ['July 2007','Officially Established &amp; Registered',
         'The need for formal organisation became evident. CFC was officially registered with the Registrar of Societies in Kenya in July 2007. Leadership roles emerged according to spiritual gifting, and early ministries included prayer coordination, marriage counselling, and youth mentorship.',
         '"We realised that God was forming a community, not just hosting meetings." — H. Mirara (Personal Communication, Feb 15, 2025)'],
        ['Growing Years','Expanding Ministries',
         'A leadership council was formed to ensure accountability while preserving the church\'s relational ethos. Key milestones included acquiring a worship space, launching children\'s and youth ministries, formalising membership, and planting new churches. These developments reflected both growth and adaptability.',
         '"Every step forward required faith, sacrifice, and a willingness to remain flexible to God\'s leading." — W. Mwaura (Personal Communication, Feb 20, 2025)'],
        ['Today','Still Going Forward',
         'CFC continues to serve Kanyariri and beyond — balancing structure with relational authenticity and fostering a sense of ownership among its members. The ministry has also streamlined its pastoral recruitment and training processes to ensure homegrown ministers assume leadership responsibilities and mentor others.',
         '"Our history reminds us that God builds His church through ordinary people who respond in faith." — R. Gachoka (Personal Communication, Feb 20, 2025)'],
      ];
      foreach($history as $h):?>
      <div class="tl-item">
        <div class="tl-dot"></div>
        <div class="tl-year"><?php echo $h[0];?></div>
        <h4><?php echo $h[1];?></h4>
        <p><?php echo $h[2];?></p>
        <?php if($h[3]):?>
        <div class="q-card" style="margin-top:.9rem;"><p style="font-size:.87rem;"><?php echo $h[3];?></p></div>
        <?php endif;?>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- VISION & MISSION -->
<section style="background:var(--offwhite);padding:5rem 5%;">
  <div class="inner">
    <span class="section-label">Our Direction</span>
    <h2 class="section-title">Vision &amp; <em>Mission</em></h2>
    <div class="vm-grid">
      <div class="vm-card" style="background:linear-gradient(135deg,var(--navy),#0d2d5c);">
        <div style="font-size:2rem;margin-bottom:.8rem;">👁️</div>
        <h3>Our Vision</h3>
        <p>To become a community of believers transformed by the Word of God through the power of the Holy Spirit, growing in the grace and knowledge of Jesus Christ.</p>
      </div>
      <div class="vm-card" style="background:linear-gradient(135deg,#3a1060,var(--navy));">
        <div style="font-size:2rem;margin-bottom:.8rem;">🎯</div>
        <h3>Our Mission</h3>
        <p>To proclaim the Full Gospel of Jesus Christ; to prepare, equip, and send quality disciples to neighboring areas and the nations, so that all may be saved and become His disciples.</p>
      </div>
    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section style="background:white;padding:5rem 5%;">
  <div class="inner">
    <span class="section-label">What Guides Us</span>
    <h2 class="section-title">Our <em>Core Values</em></h2>
    <p style="color:var(--muted);line-height:1.85;max-width:640px;margin-bottom:.5rem;">These guiding principles were not imposed from the top down but emerged through communal prayer and reflection. As one founder explained, <em>"Our vision grew out of listening — to God, to families, and to the community around us."</em></p>
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

<!-- IMPACT ON SOCIETY -->
<section style="background:var(--offwhite);padding:5rem 5%;">
  <div class="inner">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:start;">
      <div>
        <span class="section-label">Community Impact</span>
        <h2 class="section-title">How We Serve <em>Beyond Our Walls</em></h2>
        <p style="color:var(--muted);line-height:1.9;margin-bottom:1.2rem;">Community Fellowship Church has consistently extended its ministry beyond its walls, addressing both spiritual and social needs within the wider community.</p>
        <p style="color:var(--muted);line-height:1.9;margin-bottom:1.2rem;">As a ministry leader observed, <em>"We measure success not by attendance numbers but by transformed lives."</em> This perspective reflects a commitment to holistic discipleship and long-term community transformation.</p>
        <div class="q-card">
          <p>"Many young people simply needed someone to believe in them and walk alongside them."</p>
          <cite>— E. Nganga, Youth Mentor (Personal Communication, Feb 25, 2025)</cite>
        </div>
        <div class="q-card">
          <p>"There were seasons when resources were scarce, but our faith and unity sustained us."</p>
          <cite>— G. Njoroge, Church Elder (Personal Communication, Feb 18, 2025)</cite>
        </div>
      </div>
      <div>
        <?php
        $impacts = [
          ['❤️','Family Restoration','The marriage enrichment fellowship restored many families and saw unbelieving spouses come to saving faith. "Seeing families restored and individuals come to faith confirmed that God was at work among us." — H. Mirara'],
          ['🧒','Youth Mentorship','Volunteers provide academic support, life skills training, and spiritual guidance to youth at risk — demonstrating the church\'s commitment to long-term community impact rather than short-term interventions.'],
          ['🌍','Community Relief &amp; Outreach','CFC mobilises resources to support affected families during economic hardships and health emergencies. Members contribute time, finances, and expertise to ensure assistance reaches those in need.'],
          ['👨‍👩‍👧','Orphan &amp; Family Support','Partnerships with local organisations enabled CFC to provide counselling, youth mentorship, and support for orphaned children in the Kanyariri area.'],
          ['✝️','Evangelism &amp; Proclamation','Through every ministry, CFC remains focused on proclaiming the Full Gospel — seeing lives transformed by the power of Jesus Christ across the community and beyond.'],
        ];
        foreach($impacts as $imp):?>
        <div class="impact-item">
          <div class="imp-icon"><?php echo $imp[0];?></div>
          <div>
            <h4><?php echo $imp[1];?></h4>
            <p><?php echo $imp[2];?></p>
          </div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</section>

<!-- LEGACY & FUTURE -->
<section style="background:white;padding:5rem 5%;">
  <div class="inner">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:start;">
      <div>
        <span class="section-label">Legacy &amp; Future</span>
        <h2 class="section-title">Preserving Our <em>Heritage</em></h2>
        <p style="color:var(--muted);line-height:1.9;margin-bottom:1.2rem;">CFC's legacy is rooted in its organic beginnings and steadfast commitment to relational discipleship. Unlike institutions driven primarily by expansion goals, CFC emerged from pastoral care and communal discernment.</p>
        <p style="color:var(--muted);line-height:1.9;margin-bottom:1.2rem;">Preserving this history is essential for future generations. Documenting testimonies, milestones, and lessons learned ensures that the church's story remains a source of inspiration and guidance.</p>
        <p style="color:var(--muted);line-height:1.9;">Emerging leaders play a critical role in sustaining CFC's mission. By mentoring younger members and fostering intergenerational collaboration, the church can preserve its heritage while embracing innovation.</p>
      </div>
      <div>
        <?php
        $legacyQuotes = [
          ['"Our history reminds us that God builds His church through ordinary people who respond in faith."','R. Gachoka, Church Leader'],
          ['"Every step forward required faith, sacrifice, and a willingness to remain flexible to God\'s leading."','W. Mwaura, Long-Serving Member'],
          ['"We realised that God was forming a community, not just hosting meetings."','H. Mirara, Church Leader'],
        ];
        foreach($legacyQuotes as $q):?>
        <div class="q-card">
          <p><?php echo $q[0];?></p>
          <cite>— <?php echo $q[1];?></cite>
        </div>
        <?php endforeach;?>
        <div style="background:linear-gradient(135deg,var(--navy),#3a1060);border-radius:18px;padding:1.8rem;color:white;margin-top:.5rem;">
          <p style="line-height:1.85;color:rgba(255,255,255,.82);font-size:.93rem;">CFC's community impact is not limited to organised programs; it is also reflected in the daily lives of its members — modeling integrity, service, and compassion in their workplaces and neighborhoods, extending the church's influence into broader society.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:linear-gradient(135deg,var(--navy) 0%,#0d2d5c 50%,#3a1060 100%);padding:5rem 5%;text-align:center;">
  <div class="inner">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.8rem,4vw,2.8rem);color:white;margin-bottom:1rem;">Come &amp; Be Part of the <em style="color:var(--light);">Community</em></h2>
    <p style="color:rgba(255,255,255,.72);max-width:500px;margin:0 auto 2rem;line-height:1.85;">We welcome everyone — wherever you are on your journey with God. Come as you are.</p>
    <a href="contact.php" class="btn-primary">Visit Us This Sunday</a>
    <a href="salvation.php" class="btn-white">Know Salvation</a>
  </div>
</section>

<?php require 'includes/footer.php';?>
