<?php
$pageTitle = $pageTitle ?? 'Community Fellowship Church – Kanyariri';
$activeNav = $activeNav ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="Community Fellowship Church Kanyariri – Proclaiming the Full Gospel of Jesus Christ in Muthure along the Western By-Pass, Kenya."/>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <!-- Custom Styles -->
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<!-- ═══════════════════════════════════════════
     NAVBAR — always visible on ALL screen sizes
     Row 1: Logo + church name
     Row 2: All nav links (scrollable on phones)
     ═══════════════════════════════════════════ -->
<header class="cfc-header">

  <!-- TOP ROW: Logo + Name -->
  <div class="cfc-header-top">
    <a href="index.php" class="cfc-logo-link">
      <img src="images/logo.jpg" alt="CFC Kanyariri Logo" class="cfc-nav-logo"/>
      <div class="cfc-brand-text">
        Community Fellowship Church
        <span>Kanyariri, Kenya</span>
      </div>
    </a>
    <a href="contact.php" class="cfc-visit-btn">Visit Us</a>
  </div>

  <!-- BOTTOM ROW: Nav links — scrolls horizontally on phones -->
  <nav class="cfc-nav-row" aria-label="Main navigation">
    <a href="index.php"     class="cfc-nav-link <?php if($activeNav==='home')     echo 'active';?>">Home</a>
    <a href="about.php"     class="cfc-nav-link <?php if($activeNav==='about')    echo 'active';?>">About</a>
    <a href="sermons.php"   class="cfc-nav-link <?php if($activeNav==='sermons')  echo 'active';?>">Sermons</a>
    <a href="salvation.php" class="cfc-nav-link <?php if($activeNav==='salvation')echo 'active';?>">Salvation</a>
    <a href="events.php"    class="cfc-nav-link <?php if($activeNav==='events')   echo 'active';?>">Events</a>
    <a href="give.php"      class="cfc-nav-link <?php if($activeNav==='give')     echo 'active';?>">Give</a>
    <a href="contact.php"   class="cfc-nav-link <?php if($activeNav==='contact')  echo 'active';?>">Contact</a>
  </nav>

</header>
