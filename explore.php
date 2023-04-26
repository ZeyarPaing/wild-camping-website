<?php
require "utils.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
metaHead("Explore", "Explore campsites");
?>

<body>
  <?php
  renderHeader();
  ?>
  <main>
    <div class="search-container">
      <h2>Explore locations by pitch types</h2>
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
      <div class="pitch-type-select">
        <label>Pitch type</label>
        <select>
          <option value="1">Tent</option>
          <option value="2">Touring Caravan</option>
          <option value="3">Motorhome</option>
          <option value="4">Treehouses</option>
        </select>
      </div>
    </div>

    <section class="campsites contain-y">
      <div class="container">
        <h2>Campsites</h2>
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
              <img src="https://images.unsplash.com/photo-1576176539998-0237d1ac6a85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Campsite 3" />
            </picture>
            <div class="content">
              <h2>Campsite 3</h2>
              <small> Location: Campsite 3, Oregon </small>
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
              <img src="https://images.unsplash.com/photo-1576176539998-0237d1ac6a85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Campsite 3" />
            </picture>
            <div class="content">
              <h2>Campsite 3</h2>
              <small> Location: Campsite 3, Oregon </small>
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
              <img src="https://images.unsplash.com/photo-1470748085385-5fbb3018c796?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1724&q=80" alt="Campsite 2" />
            </picture>
            <div class="content">
              <h2>Campsite 2</h2>
              <small>Location: Campsite 2, Colorado</small>
            </div>
          </a>
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
        </div>
      </div>
    </section>
  </main>
  <?php
  renderFooter();
  ?>
</body>

</html>