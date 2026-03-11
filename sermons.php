<?php
$pageTitle = 'Sermons – Community Fellowship Church Kanyariri';
$activeNav = 'sermons';
require 'includes/header.php';

$ytHandle  = 'cfckanyariri';
$ytChannel = 'https://www.youtube.com/@' . $ytHandle;

/*
 ══════════════════════════════════════════════════════════════
  PASTE YOUR VIDEO IDs HERE as you upload them to YouTube.
  Get the ID from: youtube.com/watch?v=XXXXXXXXXXX (11 chars)
  Example: ['dQw4w9WgXcQ', 'Sermon Title', 'Speaker', 'Date', 'Ref']
 ══════════════════════════════════════════════════════════════
*/
// Each entry: [video_id, title, speaker, date, scripture]
$videos = [
  ['Ly4BFGG7Iwc', 'Travelling on the Righteous Path', 'Elder Godfrey Kamau',   'Mar 8, 2026',  'Proverbs 12:28'],
  ['i1IOOkHHW6k', 'The Lord of the Harvest',          'Rev. Beatrice Kamau',   'Mar 1, 2026',  'Matthew 9:37–38'],
  ['EsPIjZ74oVc', 'Growing Spiritually',              'Pst. William Mwaura',   'Jan 12, 2025', '2 Peter 3:18'],
  ['ufMmoWg77x0', 'Building the Purposes of God',     "Pst. Esther Ng'ang'a",  'Oct 5, 2025',  'Luke 1:38'],
  ['ElkpboQWKQc', 'Repairing the Broken Altars',      'Pst. Peter Njue',       'Jul 27, 2025', '1 Kings 18:16–46'],
];
$hasVideos = !empty($videos);
?>

<style>
/* ── Dark sermon page ── */
.sp { background: #0f0f0f; }
.sp .section-label { color: rgba(255,255,255,.42); }
.sp .section-title  { color: white; }

/* YouTube channel embed */
.yt-frame-wrap {
  position: relative;
  width: 100%;
  border-radius: 16px;
  overflow: hidden;
  background: #111;
  border: 1px solid rgba(255,255,255,.08);
  /* Fixed height — tall enough to show the video feed */
  height: 580px;
}
@media(max-width:768px){ .yt-frame-wrap { height: 420px; } }
@media(max-width:480px){ .yt-frame-wrap { height: 320px; } }
.yt-frame-wrap iframe {
  width: 100%;
  height: 100%;
  border: 0;
  display: block;
}

/* Single video embed */
.vid-embed-wrap {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  border-radius: 14px;
  background: #111;
}
.vid-embed-wrap iframe {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  border: 0;
}

/* Video cards */
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

.vcard-thumb {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
}
.vcard-thumb iframe {
  position: absolute; top:0; left:0;
  width:100%; height:100%; border:0;
}
/* gradient placeholder thumb */
.vcard-ph {
  position: absolute; inset: 0;
  display: flex; flex-direction: column;
  align-items: center; justify-content: center;
  gap: .4rem; text-decoration: none;
}
.vcard-ph.g1{background:linear-gradient(135deg,#0d2d5c,#1a0028)}
.vcard-ph.g2{background:linear-gradient(135deg,#1a0028,#3a0060)}
.vcard-ph.g3{background:linear-gradient(135deg,#0d1f40,#1a0028)}
.vcard-ph.g4{background:linear-gradient(135deg,#3a0060,#0d2d5c)}
.vcard-ph.g5{background:linear-gradient(135deg,#1a0040,#0d2d5c)}
.vcard-ph.g6{background:linear-gradient(135deg,#0d2d5c,#3a0060)}
.ph-play {
  width: 44px; height: 44px; border-radius: 50%;
  background: rgba(255,0,0,.85);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.1rem; transition: transform .2s;
}
.vcard:hover .ph-play { transform: scale(1.12); }
.ph-label { font-size:.68rem; color:rgba(255,255,255,.5); text-align:center; padding:0 .7rem; line-height:1.35; }

.vcard-body { padding:.85rem .9rem 1rem; flex:1; display:flex; flex-direction:column; }
.vcard-tag  { font-size:.6rem; color:#ff6666; font-weight:700; letter-spacing:.1em; text-transform:uppercase; margin-bottom:.2rem; }
.vcard-title{ font-weight:700; font-size:.87rem; color:white; line-height:1.35; flex:1; margin-bottom:.3rem; }
.vcard-meta { font-size:.7rem; color:rgba(255,255,255,.38); margin-bottom:.6rem; }
.vcard-meta span{ display:inline-block; margin-right:.5rem; }
.vwatch-btn {
  display: inline-flex; align-items:center; gap:.28rem;
  background: #ff0000; color: white!important;
  padding: .3rem .72rem; border-radius: 50px;
  font-size:.7rem; font-weight:700; text-decoration:none;
  align-self:flex-start; transition:opacity .2s;
}
.vwatch-btn:hover { opacity:.8; }

/* Red subscribe button */
.yt-sub-btn {
  display: inline-flex; align-items:center; gap:.45rem;
  background: #ff0000; color: white!important;
  padding: .65rem 1.4rem; border-radius:50px;
  font-weight:700; font-size:.9rem; text-decoration:none;
  box-shadow: 0 4px 20px rgba(255,0,0,.35);
  transition: opacity .2s, transform .2s;
}
.yt-sub-btn:hover { opacity:.88; transform:translateY(-2px); color:white!important; }
.fb-dark-btn {
  display:inline-flex; align-items:center; gap:.4rem;
  background:rgba(24,119,242,.2); border:1px solid rgba(24,119,242,.35);
  color:white!important; padding:.62rem 1.3rem; border-radius:50px;
  font-weight:700; font-size:.88rem; text-decoration:none; transition:background .2s;
}
.fb-dark-btn:hover{ background:rgba(24,119,242,.35); }

/* Subscribe CTA card */
.sub-cta {
  background: linear-gradient(135deg,#1a0028,#0d1f40);
  border-radius:16px; padding:1.8rem 1.2rem;
  text-align:center; border:1px solid rgba(255,0,0,.18);
  margin-top:2rem;
}
@media(min-width:576px){ .sub-cta{ padding:2.4rem 2rem; border-radius:18px; } }
.sub-cta h3{ color:white; font-size:clamp(1.1rem,3vw,1.55rem); margin-bottom:.55rem; }
.sub-cta p { color:rgba(255,255,255,.55); max-width:430px; margin:0 auto 1.3rem;
             line-height:1.85; font-size:clamp(.79rem,1.8vw,.92rem); }
.sub-cta .btns{ display:flex; gap:.6rem; justify-content:center; flex-wrap:wrap; }

/* Notice hint for adding videos */
.vid-hint {
  background:rgba(255,255,255,.04);
  border:1px dashed rgba(255,255,255,.15);
  border-radius:10px; padding:.8rem 1rem;
  color:rgba(255,255,255,.4); font-size:.77rem;
  line-height:1.7; margin-bottom:1.2rem;
}
.vid-hint code{ background:rgba(255,255,255,.1); padding:.08rem .32rem; border-radius:3px; font-size:.74rem; color:rgba(255,255,255,.6); }
</style>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ The Word ✦</div>
    <h1>Sermons &amp; <em>Messages</em></h1>
    <p>Life-giving messages rooted in the Full Gospel of Jesus Christ. Watch our sermons live from the CFC Kanyariri YouTube channel.</p>
  </div>
</div>

<section class="sp" style="padding:var(--sp-v) var(--sp-h);">
  <div class="inner">

    <!-- ── LIVE YOUTUBE CHANNEL EMBED ── -->
    <div style="margin-bottom:2.5rem;">
      <span class="section-label">Live from YouTube</span>
      <h2 class="section-title" style="margin-bottom:.9rem;">Watch CFC Kanyariri <em>on YouTube</em></h2>

      <!-- Channel link card — always visible, always works -->
      <div style="background:linear-gradient(135deg,#1a0020,#0d1230);border:1px solid rgba(255,0,0,.25);border-radius:14px;padding:1.1rem 1.3rem;display:flex;align-items:center;gap:1rem;flex-wrap:wrap;margin-bottom:1rem;">
        <div style="width:48px;height:48px;min-width:48px;background:#ff0000;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;">▶</div>
        <div style="flex:1;min-width:160px;">
          <div style="font-weight:700;color:white;font-size:.95rem;">Community Fellowship Church Kanyariri</div>
          <div style="color:rgba(255,255,255,.4);font-size:.75rem;margin-top:.15rem;">youtube.com/@cfckanyariri</div>
        </div>
        <a href="https://www.youtube.com/@cfckanyariri" target="_blank" rel="noopener"
           style="background:#ff0000;color:white;padding:.5rem 1.1rem;border-radius:50px;font-weight:700;font-size:.82rem;text-decoration:none;white-space:nowrap;">
          Open Channel →
        </a>
      </div>

      <p style="color:rgba(255,255,255,.38);font-size:clamp(.78rem,1.8vw,.88rem);margin-bottom:.9rem;">
        Our sermons are uploaded to YouTube. The player below shows our latest videos — or watch directly on YouTube.
      </p>

      <!-- Featured video — most recent sermon -->
      <div class="yt-frame-wrap">
        <iframe
          src="https://www.youtube.com/embed/Ly4BFGG7Iwc?rel=0&modestbranding=1"
          title="Travelling on the Righteous Path — CFC Kanyariri"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>

      <!-- Prominent click-through in case iframe is blocked by browser -->
      <div style="margin-top:.8rem;display:flex;gap:.7rem;align-items:center;flex-wrap:wrap;">
        <a href="https://www.youtube.com/@cfckanyariri" target="_blank" rel="noopener" class="yt-sub-btn" style="font-size:.8rem;padding:.5rem 1.1rem;">
          <svg width="16" height="11" viewBox="0 0 18 13" fill="white"><path d="M17.6 2s-.2-1.4-.8-2C16-.2 14.9-.2 14.4-.1 12.1 0 9 0 9 0S5.9 0 3.6-.1C3.1-.2 2-.2 1.2.1.6.7.4 2 .4 2S.2 3.5.2 5v1.4c0 1.5.2 3 .2 3s.2 1.4.8 2c.8.8 1.9.8 2.4.9C5.1 12.4 9 12.4 9 12.4s3.1 0 5.4-.1c.5-.1 1.6-.1 2.4-.9.6-.6.8-2 .8-2s.2-1.5.2-3V5c0-1.5-.2-3-.2-3zM7.2 8.6V3.7l4.9 2.5-4.9 2.4z"/></svg>
          Watch on YouTube
        </a>
        <span style="color:rgba(255,255,255,.25);font-size:.72rem;">youtube.com/@cfckanyariri</span>
      </div>
    </div>

    <!-- ── RECENT SERMONS GRID ── -->
    <div>
      <span class="section-label">All Messages</span>
      <h2 class="section-title" style="margin-bottom:.5rem;">Recent <em>Sermons</em></h2>
      <p style="color:rgba(255,255,255,.38);font-size:clamp(.78rem,1.8vw,.88rem);margin-bottom:1.2rem;">Click any sermon to watch it right here, or open on YouTube for the full experience.</p>

      <?php
      $items = $videos;
      ?>

      <div class="vgrid">
        <?php foreach($items as $i => $v):
          $id    = $v[0];
          $title = $v[1];
          $spkr  = $v[2];
          $date  = $v[3];
          $ref   = $v[4];
          $link  = 'https://www.youtube.com/watch?v='.htmlspecialchars($id);
        ?>
        <div class="vcard">
          <div class="vcard-thumb">
            <iframe
              src="https://www.youtube.com/embed/<?= htmlspecialchars($id) ?>?rel=0&modestbranding=1"
              title="<?= htmlspecialchars($title) ?>"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen loading="lazy">
            </iframe>
          </div>
          <div class="vcard-body">
            <div class="vcard-tag">CFC Kanyariri</div>
            <div class="vcard-title"><?= htmlspecialchars($title) ?></div>
            <div class="vcard-meta">
              <span>👤 <?= htmlspecialchars($spkr) ?></span>
              <span>📅 <?= htmlspecialchars($date) ?></span>
              <span>📖 <?= htmlspecialchars($ref) ?></span>
            </div>
            <a href="<?= $link ?>" target="_blank" rel="noopener" class="vwatch-btn">▶ Watch Now</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ── SUBSCRIBE CTA ── -->
    <div class="sub-cta">
      <div style="font-size:2rem;margin-bottom:.5rem;">🎙️</div>
      <h3>Never Miss a <span style="color:#ff0000;">Message</span></h3>
      <p>Subscribe to CFC Kanyariri on YouTube and get notified the moment a new sermon is uploaded. The Word of God — anytime, anywhere.</p>
      <div class="btns">
        <a href="<?= $ytChannel ?>" target="_blank" rel="noopener" class="yt-sub-btn">
          <svg width="18" height="13" viewBox="0 0 18 13" fill="white">
            <path d="M17.6 2s-.2-1.4-.8-2C16-.2 14.9-.2 14.4-.1 12.1 0 9 0 9 0S5.9 0 3.6-.1C3.1-.2 2-.2 1.2.1.6.7.4 2 .4 2S.2 3.5.2 5v1.4c0 1.5.2 3 .2 3s.2 1.4.8 2c.8.8 1.9.8 2.4.9C5.1 12.4 9 12.4 9 12.4s3.1 0 5.4-.1c.5-.1 1.6-.1 2.4-.9.6-.6.8-2 .8-2s.2-1.5.2-3V5c0-1.5-.2-3-.2-3zM7.2 8.6V3.7l4.9 2.5-4.9 2.4z"/>
          </svg>
          Subscribe on YouTube
        </a>
        <a href="https://www.facebook.com/CommunityFellowshipChurch" target="_blank" rel="noopener" class="fb-dark-btn">
          📘 Facebook Page
        </a>
      </div>
    </div>

  </div>
</section>

<?php require 'includes/footer.php'; ?>
