<?php
$pageTitle = 'Sermons – Community Fellowship Church Kanyariri';
$activeNav = 'sermons';
require 'includes/header.php';

$ytChannel = 'https://www.youtube.com/@cfckanyariri';

/*
 ┌─────────────────────────────────────────────────────────────┐
 │  HOW TO ADD YOUR VIDEOS (takes 1 minute):                   │
 │  1. Open any video on youtube.com/@cfckanyariri             │
 │  2. The URL looks like: youtube.com/watch?v=XXXXXXXXXXX     │
 │  3. Copy those 11 characters (the video ID)                 │
 │  4. Paste as the FIRST item in a row below, e.g.:           │
 │     ['dQw4w9WgXcQ', 'Sermon Title', 'Speaker', 'Date', 'Ref']│
 └─────────────────────────────────────────────────────────────┘
*/
$videos = [
  // ['VIDEO_ID_HERE',   'Proclaiming the Good News',       'Bishop J. Kamau',    'Mar 2, 2026',  'Romans 1:16'],
  // ['VIDEO_ID_HERE',   'Saved by Grace Through Faith',    'Bishop J. Kamau',    'Feb 23, 2026', 'Ephesians 2:8–9'],
  // ['VIDEO_ID_HERE',   'Living as a New Creation',        'Pastor Daniel Mburu','Feb 16, 2026', '2 Cor 5:17'],
  // ['VIDEO_ID_HERE',   'The Secret of Prevailing Prayer', 'Pastor Daniel Mburu','Feb 9, 2026',  'Matthew 6:6'],
  // ['VIDEO_ID_HERE',   'Living as the Early Church',      'Bishop J. Kamau',    'Feb 2, 2026',  'Acts 2:42–47'],
  // ['VIDEO_ID_HERE',   'The Power of the Holy Spirit',    'Pastor Daniel Mburu','Jan 26, 2026', 'Acts 1:8'],
];

$hasVideos = !empty($videos);
$firstId   = $hasVideos ? $videos[0][0] : '';
?>

<style>
/* ── Dark YouTube-branded page ── */
.sermons-page { background:#0f0f0f; }

.yt-channel-card {
  background: linear-gradient(145deg, #1a0028, #0d1f40);
  border-radius: 20px;
  padding: 2.4rem 1.4rem;
  text-align: center;
  border: 1px solid rgba(255,255,255,.08);
  margin-bottom: 2.2rem;
}
@media(min-width:576px){ .yt-channel-card { padding: 3rem 2.4rem; } }
.yt-channel-card .yt-icon { font-size: 3.2rem; margin-bottom: .7rem; }
.yt-channel-card h2 {
  color: white;
  font-size: clamp(1.4rem, 4vw, 2.1rem);
  margin-bottom: .5rem;
}
.yt-channel-card p {
  color: rgba(255,255,255,.58);
  font-size: clamp(.82rem, 1.9vw, .96rem);
  max-width: 500px;
  margin: 0 auto 1.5rem;
  line-height: 1.85;
}
.yt-red-btn {
  display: inline-flex;
  align-items: center;
  gap: .45rem;
  background: #ff0000;
  color: white !important;
  padding: .7rem 1.5rem;
  border-radius: 50px;
  font-weight: 700;
  font-size: .9rem;
  text-decoration: none;
  transition: opacity .2s, transform .2s;
  box-shadow: 0 4px 20px rgba(255,0,0,.35);
}
.yt-red-btn:hover { opacity: .88; transform: translateY(-2px); color: white !important; }

/* ── Responsive 16:9 embed wrapper ── */
.embed-wrap {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  border-radius: 14px;
  background: #111;
  border: 1px solid rgba(255,255,255,.07);
}
.embed-wrap iframe {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  border: 0;
}

/* ── "Not yet uploaded" placeholder ── */
.yt-placeholder {
  position: absolute;
  inset: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: .85rem;
  background: linear-gradient(135deg, #1a0028, #0d1f40);
  text-align: center;
  padding: 1.5rem;
  border-radius: 14px;
}
.yt-placeholder .big-play {
  width: 64px; height: 64px;
  border-radius: 50%;
  background: #ff0000;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.6rem;
  box-shadow: 0 6px 24px rgba(255,0,0,.4);
}
.yt-placeholder h4 { color: white; font-size: clamp(.95rem,2.2vw,1.2rem); margin: 0; }
.yt-placeholder p {
  color: rgba(255,255,255,.5);
  font-size: clamp(.78rem,1.8vw,.9rem);
  max-width: 320px;
  line-height: 1.7;
  margin: 0;
}

/* ── Video card grid ── */
.vgrid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.1rem;
  margin-top: 1.5rem;
}
@media(min-width:480px){ .vgrid { grid-template-columns: repeat(2,1fr); } }
@media(min-width:900px){ .vgrid { grid-template-columns: repeat(3,1fr); } }

.vcard {
  background: #1a1a2e;
  border-radius: 13px;
  overflow: hidden;
  border: 1px solid rgba(255,255,255,.07);
  transition: transform .2s, box-shadow .2s;
  display: flex;
  flex-direction: column;
}
.vcard:hover { transform: translateY(-4px); box-shadow: 0 14px 32px rgba(0,0,0,.5); }

.vcard-thumb { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; }
.vcard-thumb iframe {
  position: absolute; top: 0; left: 0;
  width: 100%; height: 100%; border: 0;
}
/* placeholder thumb */
.vcard-thumb-ph {
  position: absolute;
  inset: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: .4rem;
  cursor: pointer;
}
.vcard-thumb-ph .ph-play {
  width: 40px; height: 40px;
  border-radius: 50%;
  background: rgba(255,0,0,.8);
  display: flex; align-items: center; justify-content: center;
  font-size: 1rem;
  transition: transform .2s;
}
.vcard:hover .ph-play { transform: scale(1.12); }
.vcard-thumb-ph .ph-label {
  font-size: .68rem;
  color: rgba(255,255,255,.5);
  text-align: center;
  padding: 0 .7rem;
  line-height: 1.35;
}
/* gradient backgrounds for placeholder cards */
.vcard-thumb-ph.g1 { background: linear-gradient(135deg,#0d2d5c,#1a0028); }
.vcard-thumb-ph.g2 { background: linear-gradient(135deg,#1a0028,#3a0060); }
.vcard-thumb-ph.g3 { background: linear-gradient(135deg,#0d1f40,#1a0028); }
.vcard-thumb-ph.g4 { background: linear-gradient(135deg,#3a0060,#0d2d5c); }
.vcard-thumb-ph.g5 { background: linear-gradient(135deg,#1a0040,#0d2d5c); }
.vcard-thumb-ph.g6 { background: linear-gradient(135deg,#0d2d5c,#3a0060); }

.vcard-body { padding: .85rem .9rem 1rem; flex: 1; display: flex; flex-direction: column; }
.vcard-tag  { font-size: .6rem; color: #ff6666; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; margin-bottom: .2rem; }
.vcard-title { font-weight: 700; font-size: .87rem; color: white; line-height: 1.35; flex: 1; margin-bottom: .3rem; }
.vcard-meta  { font-size: .7rem; color: rgba(255,255,255,.38); line-height: 1.5; margin-bottom: .6rem; }
.vcard-meta span { display: inline-block; margin-right: .5rem; }
.vwatch-btn {
  display: inline-flex;
  align-items: center;
  gap: .28rem;
  background: #ff0000;
  color: white !important;
  padding: .3rem .72rem;
  border-radius: 50px;
  font-size: .7rem;
  font-weight: 700;
  text-decoration: none;
  align-self: flex-start;
  transition: opacity .2s;
}
.vwatch-btn:hover { opacity: .8; color: white !important; }

/* ── How to add videos box ── */
.add-videos-hint {
  background: rgba(255,255,255,.04);
  border: 1px dashed rgba(255,255,255,.15);
  border-radius: 12px;
  padding: 1rem 1.2rem;
  margin-bottom: 1.4rem;
}
.add-videos-hint p {
  color: rgba(255,255,255,.4);
  font-size: .78rem;
  line-height: 1.7;
  margin: 0;
}
.add-videos-hint code {
  background: rgba(255,255,255,.1);
  padding: .1rem .35rem;
  border-radius: 4px;
  font-size: .76rem;
  color: rgba(255,255,255,.65);
}

/* ── Subscribe CTA ── */
.yt-sub-cta {
  background: linear-gradient(135deg, #1a0028, #0d1f40);
  border-radius: 16px;
  padding: 1.8rem 1.2rem;
  text-align: center;
  border: 1px solid rgba(255,0,0,.18);
  margin-top: 2rem;
}
@media(min-width:576px){ .yt-sub-cta { padding: 2.4rem 2rem; border-radius: 18px; } }
.yt-sub-cta h3 { color: white; font-size: clamp(1.1rem,3vw,1.55rem); margin-bottom: .55rem; }
.yt-sub-cta p  { color: rgba(255,255,255,.55); max-width: 430px; margin: 0 auto 1.3rem; line-height: 1.85; font-size: clamp(.79rem,1.8vw,.92rem); }
.yt-sub-cta .btns { display: flex; gap: .6rem; justify-content: center; flex-wrap: wrap; }
.fb-link {
  display: inline-flex;
  align-items: center;
  gap: .4rem;
  background: rgba(24,119,242,.2);
  border: 1px solid rgba(24,119,242,.35);
  color: white !important;
  padding: .65rem 1.3rem;
  border-radius: 50px;
  font-weight: 700;
  font-size: .88rem;
  text-decoration: none;
  transition: background .2s;
}
.fb-link:hover { background: rgba(24,119,242,.35); }
</style>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ The Word ✦</div>
    <h1>Sermons &amp; <em>Messages</em></h1>
    <p>Life-giving messages rooted in the Full Gospel of Jesus Christ. Watch our sermons on the CFC Kanyariri YouTube channel — anytime, anywhere.</p>
  </div>
</div>

<section class="sermons-page" style="padding:var(--sp-v) var(--sp-h);">
  <div class="inner">

    <!-- ── CHANNEL CARD ── -->
    <div class="yt-channel-card">
      <div class="yt-icon">▶️</div>
      <h2>CFC Kanyariri on <span style="color:#ff0000;">YouTube</span></h2>
      <p>We upload our Sunday sermons, Bible studies, and special messages to YouTube. Subscribe so you never miss a word from God.</p>
      <a href="<?= $ytChannel ?>" target="_blank" rel="noopener" class="yt-red-btn">
        <svg width="18" height="13" viewBox="0 0 18 13" fill="white">
          <path d="M17.6 2s-.2-1.4-.8-2C16-.2 14.9-.2 14.4-.1 12.1 0 9 0 9 0S5.9 0 3.6-.1C3.1-.2 2-.2 1.2.1.6.7.4 2 .4 2S.2 3.5.2 5v1.4c0 1.5.2 3 .2 3s.2 1.4.8 2c.8.8 1.9.8 2.4.9C5.1 12.4 9 12.4 9 12.4s3.1 0 5.4-.1c.5-.1 1.6-.1 2.4-.9.6-.6.8-2 .8-2s.2-1.5.2-3V5c0-1.5-.2-3-.2-3zM7.2 8.6V3.7l4.9 2.5-4.9 2.4z"/>
        </svg>
        Visit &amp; Subscribe on YouTube
      </a>
    </div>

    <!-- ── FEATURED VIDEO ── -->
    <div style="margin-bottom:2.5rem;">
      <span class="section-label" style="color:rgba(255,255,255,.45);">Latest Message</span>
      <h2 class="section-title" style="color:white; margin-bottom:1rem;">
        Watch Our <em>Latest Sermon</em>
      </h2>
      <div class="embed-wrap">
        <?php if($firstId): ?>
          <iframe
            src="https://www.youtube.com/embed/<?= htmlspecialchars($firstId) ?>?rel=0&modestbranding=1&color=white"
            title="CFC Kanyariri – Latest Sermon"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        <?php else: ?>
          <div class="yt-placeholder">
            <div class="big-play">▶</div>
            <h4>Sermons coming soon!</h4>
            <p>Once we upload our first video, it will appear here. Subscribe on YouTube to be notified the moment we go live.</p>
            <a href="<?= $ytChannel ?>" target="_blank" rel="noopener" class="yt-red-btn" style="margin-top:.3rem; font-size:.82rem;">
              <svg width="14" height="10" viewBox="0 0 18 13" fill="white"><path d="M17.6 2s-.2-1.4-.8-2C16-.2 14.9-.2 14.4-.1 12.1 0 9 0 9 0S5.9 0 3.6-.1C3.1-.2 2-.2 1.2.1.6.7.4 2 .4 2S.2 3.5.2 5v1.4c0 1.5.2 3 .2 3s.2 1.4.8 2c.8.8 1.9.8 2.4.9C5.1 12.4 9 12.4 9 12.4s3.1 0 5.4-.1c.5-.1 1.6-.1 2.4-.9.6-.6.8-2 .8-2s.2-1.5.2-3V5c0-1.5-.2-3-.2-3zM7.2 8.6V3.7l4.9 2.5-4.9 2.4z"/></svg>
              Go to Our Channel →
            </a>
          </div>
        <?php endif; ?>
      </div>
      <?php if($firstId): ?>
      <p style="color:rgba(255,255,255,.28); font-size:.72rem; margin-top:.5rem; text-align:center;">
        Can't see the video? <a href="<?= $ytChannel ?>" target="_blank" style="color:#ff4444;">Watch on YouTube →</a>
      </p>
      <?php endif; ?>
    </div>

    <!-- ── VIDEO GRID ── -->
    <div>
      <span class="section-label" style="color:rgba(255,255,255,.45);">All Messages</span>
      <h2 class="section-title" style="color:white; margin-bottom:.5rem;">Recent <em>Sermons</em></h2>

      <?php if(!$hasVideos): ?>
      <div class="add-videos-hint">
        <p>
          
          <a href="<?= $ytChannel ?>" target="_blank" style="color:#ff6666;">Visit Our Channel</a> below.
        </p>
      </div>
      <?php endif; ?>

      <?php
      // Placeholder sermon titles shown when no video IDs exist yet
      $placeholders = [
        ['Proclaiming the Good News',       'Bishop J. Kamau',    'Romans 1:16',       'g1', '🎤'],
        ['Saved by Grace Through Faith',     'Bishop J. Kamau',    'Ephesians 2:8–9',   'g2', '📖'],
        ['Living as a New Creation',         'Pastor Daniel Mburu','2 Cor 5:17',        'g3', '🌟'],
        ['The Secret of Prevailing Prayer',  'Pastor Daniel Mburu','Matthew 6:6',       'g4', '🙏'],
        ['Living as the Early Church',       'Bishop J. Kamau',    'Acts 2:42–47',      'g5', '❤️'],
        ['The Power of the Holy Spirit',     'Pastor Daniel Mburu','Acts 1:8',          'g6', '🔥'],
      ];
      $items = $hasVideos ? $videos : $placeholders;
      ?>

      <div class="vgrid">
        <?php foreach($items as $i => $v):
          $hasId  = $hasVideos && !empty($v[0]);
          $vidId  = $hasId ? $v[0] : '';
          $title  = $hasId ? $v[1] : $v[0];
          $spkr   = $hasId ? $v[2] : $v[1];
          $ref    = $hasId ? $v[4] : $v[2];
          $grad   = $hasId ? 'g'.($i%6+1) : $v[3];
          $icon   = $hasId ? '🎤'          : $v[4];
          $link   = $hasId
            ? 'https://www.youtube.com/watch?v='.htmlspecialchars($vidId)
            : $ytChannel;
        ?>
        <div class="vcard">
          <div class="vcard-thumb">
            <?php if($hasId): ?>
              <iframe
                src="https://www.youtube.com/embed/<?= htmlspecialchars($vidId) ?>?rel=0&modestbranding=1"
                title="<?= htmlspecialchars($title) ?>"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen loading="lazy">
              </iframe>
            <?php else: ?>
              <a href="<?= $ytChannel ?>" target="_blank" rel="noopener"
                 class="vcard-thumb-ph <?= $grad ?>" style="display:flex; text-decoration:none;">
                <div class="ph-play">▶</div>
                <div class="ph-label"><?= htmlspecialchars($icon . ' ' . $title) ?></div>
              </a>
            <?php endif; ?>
          </div>
          <div class="vcard-body">
            <div class="vcard-tag">CFC Kanyariri</div>
            <div class="vcard-title"><?= htmlspecialchars($title) ?></div>
            <div class="vcard-meta">
              <span>👤 <?= htmlspecialchars($spkr) ?></span>
              <span>📖 <?= htmlspecialchars($ref) ?></span>
            </div>
            <a href="<?= $link ?>" target="_blank" rel="noopener" class="vwatch-btn">
              ▶ <?= $hasId ? 'Watch Now' : 'View Channel' ?>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ── SUBSCRIBE CTA ── -->
    <div class="yt-sub-cta">
      <div style="font-size:2rem; margin-bottom:.5rem;">🎙️</div>
      <h3>Never Miss a <span style="color:#ff0000;">Message</span></h3>
      <p>Subscribe to CFC Kanyariri on YouTube and get notified the moment a new sermon is uploaded. The Word of God — anytime, anywhere.</p>
      <div class="btns">
        <a href="<?= $ytChannel ?>" target="_blank" rel="noopener" class="yt-red-btn">
          <svg width="16" height="12" viewBox="0 0 18 13" fill="white"><path d="M17.6 2s-.2-1.4-.8-2C16-.2 14.9-.2 14.4-.1 12.1 0 9 0 9 0S5.9 0 3.6-.1C3.1-.2 2-.2 1.2.1.6.7.4 2 .4 2S.2 3.5.2 5v1.4c0 1.5.2 3 .2 3s.2 1.4.8 2c.8.8 1.9.8 2.4.9C5.1 12.4 9 12.4 9 12.4s3.1 0 5.4-.1c.5-.1 1.6-.1 2.4-.9.6-.6.8-2 .8-2s.2-1.5.2-3V5c0-1.5-.2-3-.2-3zM7.2 8.6V3.7l4.9 2.5-4.9 2.4z"/></svg>
          Subscribe on YouTube
        </a>
        <a href="https://www.facebook.com/CommunityFellowshipChurch"
           target="_blank" rel="noopener" class="fb-link">
          📘 Facebook Page
        </a>
      </div>
    </div>

  </div>
</section>

<?php require 'includes/footer.php'; ?>
