<?php
$pageTitle = 'Sermons – Community Fellowship Church Kanyariri';
$activeNav = 'sermons';
require 'includes/header.php';

$sermons = [
  ['🎤','t1','Full Gospel Series','Proclaiming the Good News','Bishop J. Kamau','Mar 2, 2026','Romans 1:16'],
  ['📖','t2','Full Gospel Series','Saved by Grace Through Faith','Bishop J. Kamau','Feb 23, 2026','Ephesians 2:8–9'],
  ['🌟','t3','Transformed by the Word','Living as a New Creation','Pastor CFC','Feb 16, 2026','2 Cor 5:17'],
  ['🙏','t4','Prayer &amp; The Word','The Secret of Prevailing Prayer','Pastor CFC','Feb 9, 2026','Matthew 6:6'],
  ['❤️','t5','Community of Acts','Living as the Early Church','Bishop J. Kamau','Feb 2, 2026','Acts 2:42–47'],
  ['🔥','t6','Transformed by the Word','The Power of the Holy Spirit','Pastor CFC','Jan 26, 2026','Acts 1:8'],
];
$series = [
  ['📢','t1','The Full Gospel Series','Messages on the Full Gospel of Jesus Christ — the heart of our mission and identity.'],
  ['🌬️','t2','Transformed by the Word','Growing through the power of the Holy Spirit as we engage God\'s Word.'],
  ['🏡','t3','Community of Acts','Building a church that mirrors the Spirit-filled community described in Acts 2.'],
];
?>

<style>
  .feat-sermon{background:linear-gradient(135deg,var(--navy),#3a1060);border-radius:22px;padding:2.8rem;color:white;display:grid;grid-template-columns:1fr 1fr;gap:2.5rem;align-items:center;margin-bottom:2.5rem;}
  .feat-label{display:inline-block;background:var(--light);color:var(--navy);font-size:.7rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:.25rem .75rem;border-radius:50px;margin-bottom:.9rem;}
  .feat-sermon h3{font-family:'Playfair Display',serif;font-size:clamp(1.4rem,3vw,2rem);font-weight:900;margin-bottom:.8rem;}
  .feat-sermon p{color:rgba(255,255,255,.72);line-height:1.85;margin-bottom:1.4rem;}
  .feat-meta{display:flex;gap:1.3rem;flex-wrap:wrap;margin-bottom:1.3rem;}
  .feat-meta span{font-size:.83rem;color:rgba(255,255,255,.6);}
  .watch-btn{background:white;color:var(--navy);padding:.75rem 1.7rem;border-radius:50px;font-weight:700;font-size:.9rem;text-decoration:none;transition:transform .2s;display:inline-block;}
  .watch-btn:hover{transform:translateY(-2px);}
  .feat-thumb{background:rgba(255,255,255,.1);border-radius:16px;height:210px;display:flex;align-items:center;justify-content:center;font-size:4.5rem;border:1px solid rgba(255,255,255,.12);}
  .series-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;margin-top:2rem;}
  .series-card{border-radius:18px;overflow:hidden;box-shadow:0 3px 16px rgba(0,0,0,.07);transition:transform .2s;}
  .series-card:hover{transform:translateY(-4px);}
  .s-img{height:130px;display:flex;align-items:center;justify-content:center;font-size:2.5rem;}
  .s-info{background:white;padding:1.2rem;}
  .s-info h4{font-family:'Playfair Display',serif;font-size:1rem;margin-bottom:.3rem;color:var(--navy);}
  .s-info p{font-size:.8rem;color:var(--muted);}
  .pod-box{background:linear-gradient(135deg,var(--navy),#3a1060);color:white;text-align:center;border-radius:22px;padding:2.8rem;margin-top:2.5rem;}
  .pod-box h3{font-family:'Playfair Display',serif;font-size:1.7rem;margin-bottom:.8rem;}
  .pod-box p{color:rgba(255,255,255,.72);max-width:460px;margin:0 auto 1.8rem;line-height:1.85;}
  .pod-btns{display:flex;gap:.9rem;justify-content:center;flex-wrap:wrap;}
  .pod-btn{background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.22);color:white;padding:.65rem 1.4rem;border-radius:50px;font-weight:600;font-size:.88rem;text-decoration:none;transition:background .2s;}
  .pod-btn:hover{background:rgba(255,255,255,.24);}
  @media(max-width:900px){.feat-sermon{grid-template-columns:1fr;}.series-grid{grid-template-columns:1fr 1fr;}}
  @media(max-width:600px){.series-grid{grid-template-columns:1fr;}}
</style>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ The Word ✦</div>
    <h1>Sermons &amp; <em>Messages</em></h1>
    <p>Life-giving messages rooted in the Full Gospel of Jesus Christ. Watch, listen, or read — anytime, anywhere.</p>
  </div>
</div>

<!-- FEATURED -->
<section style="padding:4rem 5% 2rem;">
  <div class="inner">
    <div class="feat-sermon">
      <div>
        <div class="feat-label">⭐ Latest Message</div>
        <h3>Proclaiming the Good News</h3>
        <div class="feat-meta">
          <span>📅 March 2, 2026</span>
          <span>👤 Bishop J. Kamau</span>
          <span>📖 Romans 1:16</span>
        </div>
        <p>The Full Gospel of Jesus Christ is the power of God for salvation to everyone who believes. This message unpacks what it means to proclaim it without compromise — in Kanyariri, and to the nations.</p>
        <a href="#" class="watch-btn">▶ Watch Now</a>
      </div>
      <div class="feat-thumb">🎤</div>
    </div>
  </div>
</section>

<!-- ALL SERMONS -->
<section style="padding:2rem 5% 5rem;">
  <div class="inner">
    <span class="section-label">All Messages</span>
    <h2 class="section-title">Recent <em>Sermons</em></h2>
    <div class="filter-bar">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="Full Gospel Series">Full Gospel</button>
      <button class="filter-btn" data-filter="Transformed by the Word">Holy Spirit</button>
      <button class="filter-btn" data-filter="Community of Acts">Acts</button>
      <button class="filter-btn" data-filter="Prayer &amp; The Word">Prayer</button>
    </div>
    <div class="sermons-grid" id="sermonsGrid">
      <?php foreach($sermons as $sr):?>
      <div class="sermon-card" data-category="<?php echo htmlspecialchars(html_entity_decode($sr[2]));?>">
        <div class="sermon-thumb <?php echo $sr[1];?>"><?php echo $sr[0];?></div>
        <div class="sermon-body">
          <div class="sermon-series"><?php echo $sr[2];?></div>
          <div class="sermon-title"><?php echo $sr[3];?></div>
          <div class="sermon-meta"><?php echo $sr[4];?> &middot; <?php echo $sr[5];?></div>
          <div class="sermon-actions">
            <a href="#" class="s-btn s-watch">▶ Watch</a>
            <a href="#" class="s-btn s-listen">🎧 Listen</a>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- SERIES -->
<section style="background:var(--offwhite);padding:5rem 5%;">
  <div class="inner">
    <span class="section-label">Browse</span>
    <h2 class="section-title">Sermon <em>Series</em></h2>
    <div class="series-grid">
      <?php foreach($series as $sr):?>
      <div class="series-card">
        <div class="s-img <?php echo $sr[1];?>"><?php echo $sr[0];?></div>
        <div class="s-info">
          <h4><?php echo $sr[2];?></h4>
          <p><?php echo $sr[3];?></p>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <div class="pod-box">
      <h3>🎙️ Follow Us Online</h3>
      <p>Subscribe to CFC Kanyariri messages and carry the Word with you wherever you go. We post messages regularly on Facebook and YouTube.</p>
      <div class="pod-btns">
        <a href="https://www.facebook.com/CommunityFellowshipChurch" target="_blank" class="pod-btn">📘 Facebook</a>
        <a href="#" class="pod-btn">▶ YouTube</a>
        <a href="#" class="pod-btn">🎧 Spotify</a>
        <a href="#" class="pod-btn">🍎 Apple Podcasts</a>
      </div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php';?>
