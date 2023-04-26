<?php
require "utils.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
metaHead();
?>

<body>
  <?php
  renderHeader();
  ?>
  <main>
    <section class="landing">
      <div class="heading-wrapper">
        <div class="container">
          <div role="heading" aria-level="1">
            <h1>Global Wild Swimming and Camping</h1>
            <p>Explore the untouched nature together!</p>
          </div>
        </div>
      </div>
      <picture>
        <img alt="A night view of a tent in the forest and sky full of stars " src="https://images.unsplash.com/photo-1513781419235-2988ecacab83?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2800&q=80" />
        <!-- <img
            alt="A man Swimming in a lake"
            src="https://images.unsplash.com/photo-1438029071396-1e831a7fa6d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2900&q=80"
          /> -->
      </picture>
      <div class="pitches">
        <p>Quickly explore popular pitches</p>
        <a href="#">
          <h2>Tent</h2>
          <p>Find the tent pitch for your next adventure</p>
        </a>
        <a href="#">
          <h2>Touring Caravan</h2>
          <p>Share your pitch with the world</p>
        </a>
        <a href="#">
          <h2>Motorhome</h2>
          <p>Share your pitch with the world</p>
        </a>
        <a href="#">
          <h2>Treehouses</h2>
          <p>Share your pitch with the world</p>
        </a>
      </div>
    </section>
    <div class="search-container">
      <h2>Find your next adventure</h2>
      <div class="search-input">
        <span>
          <input type="text" placeholder="Search for a pitch" />
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
          </button>
        </span>
      </div>
    </div>

    <section class="campsites contain-y">
      <div class="container">
        <h2>Popular campsites</h2>
        <div class="site-listing">
          <a href="#" class="card">
            <picture>
              <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
            </picture>
            <div class="content">
              <h2>Campsite 1</h2>
              <small>Location: Campsite 1, California</small>
            </div>
          </a>
          <a href="#" class="card">
            <picture>
              <img src="https://images.unsplash.com/photo-1470748085385-5fbb3018c796?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1724&q=80" alt="Campsite 2" />
            </picture>
            <div class="content">
              <h2>Campsite 2</h2>
              <small>Location: Campsite 2, Colorado</small>
            </div>
          </a>
          <a href="#" class="card">
            <picture>
              <img src="https://images.unsplash.com/photo-1576176539998-0237d1ac6a85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Campsite 3" />
            </picture>
            <div class="content">
              <h2>Campsite 3</h2>
              <small> Location: Campsite 3, Oregon </small>
            </div>
          </a>
        </div>
      </div>
    </section>
  </main>
  <?php
  renderFooter();
  ?>
</body>

</html>