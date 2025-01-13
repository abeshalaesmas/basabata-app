<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basa Bata</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="app">
    <!-- Header Section -->
    <header class="header">
      <div class="logo">📚 basabata</div>
      <div class="notification">🔔</div>
    </header>

    <!-- Banner Section -->
    <section class="banner">
      <div class="banner-text">
        <h1>Ilaw sa iyong isipan</h1>
      </div>
      <div class="banner-image">
        <img src="library-image.jpg" alt="Library" />
      </div>
    </section>

    <!-- Search Section -->
    <div class="search-bar">
      <input type="text" placeholder="Search anything..." />
      <button>🔍</button>
    </div>

    <!-- Categories Section -->
    <section class="categories">
      <h2>Hanapin, Basahin, Matuto</h2> 
      <p>Kategorya:</p>
      <div class="category-grid">
        
        <div class="category"><a href="{{route('show')}}">Nobela</a></div>
        <div class="category">Maikling Kwento</div>
        <div class="category">Pabula</div>
        <div class="category">Kuwentong Bayan🔒</div>
        <div class="category">Alamat🔒</div>
        <div class="category">Tula🔒</div>
        <div class="category">Epiko🔒</div>
        <div class="category">Talamuhay🔒</div>
      </div>
    </section>

    <!-- Footer Navigation -->
    <footer class="footer">
      <div class="nav-item">🏠</div>
      <div class="nav-item">📖</div>
      <div class="nav-item">💡</div>
      <div class="nav-item">❤️</div>
      <div class="nav-item"><a href="{{route('profile')}}">Me</a></div>
    </footer>
  </div>

  <style>
    /* Global Styles */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: linear-gradient(to bottom, #ffd54f, #f57c00);
  color: #333;
}

.app {
  display: flex;
  flex-direction: column;
  height: 100vh;
  justify-content: space-between;
}

/* Header */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: #ffca28;
  color: #333;
  font-weight: bold;
}

.header .time {
  font-size: 0.9em;
}

.header .logo {
  font-size: 1.2em;
}

.header .notification {
  font-size: 1.2em;
}

/* Banner */
.banner {
  text-align: center;
  padding: 20px;
}

.banner-text h1 {
  margin: 0;
  font-size: 1.5em;
  color: #fff;
}

.banner-image img {
  width: 100%;
  border-radius: 10px;
  margin-top: 10px;
}

/* Search Bar */
.search-bar {
  display: flex;
  justify-content: center;
  padding: 10px 20px;
}

.search-bar input {
  flex: 1;
  padding: 10px;
  border: none;
  border-radius: 20px;
  margin-right: 10px;
}

.search-bar button {
  padding: 10px;
  border: none;
  background-color: #ffca28;
  border-radius: 50%;
  cursor: pointer;
}

/* Categories */
.categories {
  text-align: center;
  padding: 20px;
  color: #fff;
}

.categories h2 {
  margin: 0 0 10px;
  font-size: 1.5em;
}

.categories .category-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
  margin-top: 10px;
}

.category {
  background-color: #fff;
  color: #333;
  padding: 10px;
  border-radius: 10px;
  text-align: center;
  font-weight: bold;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

/* Footer */
.footer {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #ffca28;
  padding: 10px 0;
}

.nav-item {
  font-size: 1.5em;
  color: #333;
  cursor: pointer;
}

  </style>
</body>
</html>
