<!DOCTYPE html>
<html lang="en">
<head>
  @extends('components.template')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basa Bata</title>
  
</head>
<body > 

  <div class="app">

    {{-- <img src="images\bg_dashboard.gif" alt=""> --}}
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Footer Navigation -->
    @include('components.navbar')

  </div>



</body>
</html>
