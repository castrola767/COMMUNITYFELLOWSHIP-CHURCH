<?php
$pageTitle = 'Give – Community Fellowship Church Kanyariri';
$activeNav = 'give';
require 'includes/header.php';

$amounts = ['KES 500','KES 1,000','KES 2,000','KES 5,000'];
$funds   = ['General Fund','Community Outreach','Building Fund','Youth Ministry','Missions &amp; Evangelism'];
$freqs   = ['One-Time','Monthly','Weekly'];
$impacts = [
  ['🌍','ic1','Community Outreach','Feeding families, supporting neighbours, and bringing the love of Christ to those in need around Kanyariri and beyond.'],
  ['📖','ic2','Word &amp; Discipleship','Equipping and sending disciples to neighboring areas and the nations so that all may be saved and become His disciples.'],
  ['✈️','ic3','Missions &amp; Evangelism','Proclaiming the Full Gospel of Jesus Christ beyond our walls and borders — to the nations.'],
];
$ways = [
  ['📱','M-Pesa','Send via M-Pesa to our paybill or till number. Contact us at cfckanyariri12@gmail.com for details.'],
  ['🏦','Bank Transfer','Contact our finance team for bank account details for direct bank transfers.'],
  ['✉️','In Person','Give during any Sunday service or midweek Bible study at our hall in Muthure, Kanyariri.'],
];
?>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ Stewardship &amp; Excellence ✦</div>
    <h1>Give <em>Generously</em></h1>
    <p>Your giving is an act of worship and stewardship. Every gift helps us proclaim the Full Gospel, support our community, and send disciples to the nations.</p>
  </div>
</div>

<!-- GIVE FORM -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner give-grid">
    <div>
      <span class="section-label">Why We Give</span>
      <h2 class="section-title">Your Gift <em>Extends</em> the Gospel</h2>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1rem;font-size:clamp(.82rem,2vw,.94rem);">At Community Fellowship Church Kanyariri, stewardship and excellence are among our core values. We believe giving is an act of worship and an expression of our trust in God.</p>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1rem;font-size:clamp(.82rem,2vw,.94rem);">Your giving helps us proclaim the Full Gospel, equip disciples, support community outreach in Kanyariri, provide youth mentorship, and send the Gospel to the nations.</p>
      <p style="color:var(--muted);line-height:1.9;font-size:clamp(.82rem,2vw,.94rem);">We are committed to being faithful, transparent, and excellent stewards of every gift entrusted to us by God.</p>
      <div class="verse-box">
        <blockquote>"Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."</blockquote>
        <cite>— 2 Corinthians 9:7</cite>
      </div>
    </div>
    <div class="give-form">
      <h3>Make a Gift</h3>
      <div class="freq-tabs">
        <?php foreach($freqs as $i => $f):?>
        <button class="freq-tab<?php echo $i===0?' active':'';?>"><?php echo $f;?></button>
        <?php endforeach;?>
      </div>
      <span class="amt-label">Select Amount (KES)</span>
      <div class="amt-grid">
        <?php foreach($amounts as $i => $a):?>
        <div class="amount-btn<?php echo $i===1?' active':'';?>"><?php echo $a;?></div>
        <?php endforeach;?>
      </div>
      <form id="giveForm">
        <input id="customAmount" type="number" style="width:100%;padding:.7rem .8rem;border:1.5px solid var(--border);border-radius:9px;font-family:'DM Sans',sans-serif;font-size:.85rem;margin-bottom:.9rem;outline:none;background:white;color:var(--text);" placeholder="Or enter custom amount (KES)" min="1"/>
        <div class="form-group">
          <label>Give Towards</label>
          <select><?php foreach($funds as $f):?><option><?php echo $f;?></option><?php endforeach;?></select>
        </div>
        <div class="form-row">
          <div class="form-group"><label>First Name</label><input type="text" placeholder="John"/></div>
          <div class="form-group"><label>Last Name</label><input type="text" placeholder="Doe"/></div>
        </div>
        <div class="form-group"><label>Email</label><input type="email" placeholder="john@example.com"/></div>
        <div class="form-group">
          <label>Phone (M-Pesa number) <span style="color:#e53e3e;">*</span></label>
          <input type="tel" placeholder="+254 7..." required pattern="[\+]?[0-9\s\-]{9,15}"/>
          <small style="color:var(--muted);font-size:.74rem;display:block;margin-top:.28rem;">Required — used to process your M-Pesa payment</small>
        </div>
        <button type="submit" class="give-submit">Give Now 🙏</button>
        <p style="text-align:center;font-size:.74rem;color:#aaa;margin-top:.7rem;">🔒 Secure &middot; Receipt emailed automatically</p>
      </form>
      <div class="success-msg" id="giveSuccess"></div>
    </div>
  </div>
</section>

<!-- IMPACT -->
<section style="background:white;padding:var(--sp-v) var(--sp-h);">
  <div class="inner" style="text-align:center;">
    <span class="section-label">Where It Goes</span>
    <h2 class="section-title">Your Giving at <em>Work</em></h2>
    <div class="impact-grid">
      <?php foreach($impacts as $imp):?>
      <div class="impact-card <?php echo $imp[1];?>">
        <div class="impact-icon"><?php echo $imp[0];?></div>
        <h4><?php echo $imp[2];?></h4>
        <p><?php echo $imp[3];?></p>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<!-- OTHER WAYS -->
<section style="background:var(--offwhite);padding:var(--sp-v) var(--sp-h);">
  <div class="inner" style="text-align:center;">
    <span class="section-label">Other Options</span>
    <h2 class="section-title">Other Ways to <em>Give</em></h2>
    <div class="ways-grid">
      <?php foreach($ways as $w):?>
      <div class="way-card">
        <div class="way-icon"><?php echo $w[0];?></div>
        <h4><?php echo $w[1];?></h4>
        <p><?php echo $w[2];?></p>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<?php require 'includes/footer.php';?>
