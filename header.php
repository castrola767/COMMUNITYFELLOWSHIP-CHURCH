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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<header class="cfc-header">

  <!-- ROW 1: Logo + Church Name + Visit button -->
  <div class="cfc-header-top">
    <a href="index.php" class="cfc-logo-link">
      <img src="images/logo.jpg" alt="CFC Logo" class="cfc-nav-logo"/>
      <div class="cfc-brand-text">
        <span class="cfc-brand-main">Community Fellowship Church</span>
        <span class="cfc-brand-sub">Kanyariri · Kenya</span>
      </div>
    </a>
    <a href="contact.php" class="cfc-visit-btn">Visit Us</a>
  </div>

  <!-- ROW 2: Nav links (scrollable on phones) -->
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
