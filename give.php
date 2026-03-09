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

<style>
  .give-grid{display:grid;grid-template-columns:1fr 1.1fr;gap:4rem;align-items:start;}
  .verse-box{background:linear-gradient(135deg,var(--navy),#3a1060);border-radius:18px;padding:2rem;color:white;margin-top:2rem;}
  .verse-box blockquote{font-family:'Playfair Display',serif;font-size:1.1rem;font-style:italic;line-height:1.75;margin-bottom:.8rem;color:var(--light);}
  .verse-box cite{font-size:.83rem;color:rgba(255,255,255,.55);}
  .give-form{background:white;border-radius:22px;padding:2.5rem;box-shadow:0 8px 36px rgba(0,0,0,.09);}
  .give-form h3{font-family:'Playfair Display',serif;font-size:1.45rem;margin-bottom:1.4rem;color:var(--navy);}
  .amt-label{font-size:.84rem;font-weight:600;color:var(--navy);margin-bottom:.75rem;display:block;}
  .amt-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:.65rem;margin-bottom:1rem;}
  .amount-btn{padding:.72rem;border-radius:10px;border:1.5px solid var(--border);background:white;color:var(--text);font-size:.9rem;font-weight:700;cursor:pointer;font-family:'DM Sans',sans-serif;transition:all .2s;}
  .amount-btn:hover{border-color:var(--blue);color:var(--blue);}
  .amount-btn.active{background:var(--blue);color:white;border-color:var(--blue);}
  .freq-tabs{display:flex;gap:.45rem;margin-bottom:1.5rem;background:var(--offwhite);border-radius:12px;padding:.32rem;}
  .freq-tab{flex:1;padding:.52rem;border:none;border-radius:8px;background:transparent;font-family:'DM Sans',sans-serif;font-size:.88rem;font-weight:600;cursor:pointer;color:#999;transition:all .2s;}
  .freq-tab.active{background:white;color:var(--navy);box-shadow:0 2px 8px rgba(0,0,0,.08);}
  .give-submit{width:100%;background:linear-gradient(135deg,var(--blue),var(--purple));color:white;border:none;padding:.95rem;border-radius:12px;font-size:1rem;font-weight:700;cursor:pointer;font-family:'DM Sans',sans-serif;transition:opacity .2s,transform .2s;margin-top:.5rem;}
  .give-submit:hover{opacity:.92;transform:translateY(-1px);}
  .impact-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;margin-top:2rem;}
  .impact-card{border-radius:18px;padding:1.8rem;text-align:center;}
  .ic1{background:linear-gradient(135deg,var(--offwhite),var(--light))} .ic2{background:linear-gradient(135deg,#ead5f5,#f3e8ff)} .ic3{background:linear-gradient(135deg,var(--light),#dce8ff)}
  .impact-icon{font-size:2.3rem;margin-bottom:.9rem;}
  .impact-card h4{font-family:'Playfair Display',serif;font-size:1.12rem;margin-bottom:.45rem;color:var(--navy);}
  .impact-card p{font-size:.88rem;color:var(--muted);line-height:1.65;}
  .ways-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;margin-top:2rem;}
  .way-card{background:white;border-radius:18px;padding:1.7rem;box-shadow:0 3px 14px rgba(0,0,0,.06);}
  .way-icon{width:48px;height:48px;border-radius:12px;background:linear-gradient(135deg,var(--blue),var(--purple));display:flex;align-items:center;justify-content:center;font-size:1.25rem;margin-bottom:.9rem;}
  .way-card h4{font-weight:700;margin-bottom:.45rem;color:var(--navy);}
  .way-card p{font-size:.88rem;color:var(--muted);line-height:1.65;}
  @media(max-width:900px){.give-grid,.impact-grid,.ways-grid{grid-template-columns:1fr;}}
  @media(max-width:600px){.amt-grid{grid-template-columns:repeat(2,1fr);}}
</style>

<div class="page-hero">
  <div class="page-hero-content">
    <div class="page-badge">✦ Stewardship &amp; Excellence ✦</div>
    <h1>Give <em>Generously</em></h1>
    <p>Your giving is an act of worship and stewardship. Every gift helps us proclaim the Full Gospel, support our community, and send disciples to the nations.</p>
  </div>
</div>

<!-- GIVE -->
<section style="background:var(--offwhite);padding:5rem 5%;">
  <div class="inner give-grid">
    <div>
      <span class="section-label">Why We Give</span>
      <h2 class="section-title">Your Gift <em>Extends</em> the Gospel</h2>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1.2rem;">At Community Fellowship Church Kanyariri, stewardship and excellence are among our core values. We believe giving is an act of worship and an expression of our trust in God.</p>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:1.2rem;">Your giving helps us proclaim the Full Gospel of Jesus Christ, equip disciples, support community outreach in Kanyariri, provide youth mentorship, and send the Gospel to the nations.</p>
      <p style="color:var(--muted);line-height:1.9;">We are committed to being faithful, transparent, and excellent stewards of every gift entrusted to us by God — acting with integrity in every area of church life.</p>
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
        <input id="customAmount" type="number" style="width:100%;padding:.78rem 1rem;border:1.5px solid var(--border);border-radius:10px;font-family:'DM Sans',sans-serif;font-size:.93rem;margin-bottom:1.1rem;outline:none;background:white;color:var(--text);" placeholder="Or enter custom amount (KES)" min="1"/>
        <div class="form-group">
          <label>Give Towards</label>
          <select>
            <?php foreach($funds as $f):?>
            <option><?php echo $f;?></option>
            <?php endforeach;?>
          </select>
        </div>
        <div class="form-row">
          <div class="form-group"><label>First Name</label><input type="text" placeholder="John"/></div>
          <div class="form-group"><label>Last Name</label><input type="text" placeholder="Doe"/></div>
        </div>
        <div class="form-group"><label>Email</label><input type="email" placeholder="john@example.com"/></div>
        <div class="form-group"><label>Phone (M-Pesa number) <span style="color:#e53e3e;">*</span></label><input type="tel" placeholder="+254 7..." required pattern="[\+]?[0-9\s\-]{9,15}"/><small style="color:var(--muted);font-size:.76rem;display:block;margin-top:.3rem;">Required — used to process your M-Pesa payment</small></div>
        <button type="submit" class="give-submit">Give Now 🙏</button>
        <p style="text-align:center;font-size:.77rem;color:#aaa;margin-top:.75rem;">🔒 Secure &middot; Receipt emailed automatically</p>
      </form>
      <div class="success-msg" id="giveSuccess"></div>
    </div>
  </div>
</section>

<!-- IMPACT -->
<section style="background:white;padding:5rem 5%;">
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
<section style="background:var(--offwhite);padding:5rem 5%;">
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
