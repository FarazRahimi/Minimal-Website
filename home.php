<?php include 'header.php'; ?>

<!-- Page-specific inline styles scoped to the #homepageContent container -->
<style>
  /* Container for the homepage content */
  #homepageContent {
    background-color: #f5f5f5;
    font-family: 'Courier New', Courier, monospace;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 80vh; /* Adjust as needed */
  }
  /* Main content box with fixed width and matching background */
  #homepageContent .container {
    display: flex;
    background: #f5f5f5; /* Default background for light mode */
    padding: 20px;
    box-sizing: border-box;
    width: 800px; /* Fixed width for precise centering */
  }
  /* Picture container with a fixed width */
  #homepageContent .picture {
    flex: 0 0 200px;
    margin-right: 20px;
  }
  #homepageContent .picture img {
    width: 100%;
    height: auto;
    display: block;
  }
  /* Inspiration text container */
  #homepageContent .inspiration {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: left;
  }
  #homepageContent .inspiration h1 {
    margin: 0 0 10px;
    font-size: 2em;
  }
  #homepageContent .inspiration p {
    font-size: 1.2em;
    line-height: 1.5;
  }
  /* Dark mode styles - triggered when body has class "dark-mode" */
  body.dark #homepageContent {
    background-color: #1f1f1f;
  }
  body.dark #homepageContent .container {
    background: #1f1f1f;
  }
  body.dark #homepageContent .inspiration h1,
  body.dark #homepageContent .inspiration p {
    color: #fff;
  }
</style>

<div id="homepageContent">
  <div class="container">
    <div class="picture">
      <!-- Replace 'path_to_your_image.jpg' with the actual path to your image file -->
      <img src="Home1.webp" alt="Inspiring Image">
    </div>
    <div class="inspiration">
      <?php
        // More philosophical text
        $title = "Seek the Deeper Truth";
        $message = "In the silent whispers of time, we discover the strength to embrace the unknown. Let curiosity and wonder guide you, for within the labyrinth of existence lies the infinite potential of the soul.";
      ?>
      <h1><?php echo $title; ?></h1>
      <p><?php echo $message; ?></p>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
