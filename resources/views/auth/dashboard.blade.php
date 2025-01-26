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

    <header class="header">
      <div class="logo"><img src="{{ asset('/images/logo-w.png') }}" alt=""></div>
      <div class="notification"><i class="si-bell"></i></div>
    </header>

    <div class="app-ui">

      <!-- Header Section -->
 

      <div class="item-1"> 
        <div class="search-bar">
          <input type="text" placeholder="Search anything..." />
          <button><i class="si-search" style="font-size: 20px"></i></button>
        </div>
      </div>

      <div class="item-2">
        <div class="banner-image-left">
          <img src="{{ asset('/images/1a.png') }}" alt="Library" id="left-lower-img"/>
        </div>
      </div>


      <div class="item-3"> 
        <div class="banner-image-right">
          <img src="{{ asset('/images/1.png') }}" alt="ilaw sa iyong isipan" id="right-img" />
        </div>
      </div>

      <div class="item-4">
        <section class="categories">
          <h2>Kategorya</h2>
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
      </div>

    </div>

        <!-- Footer Navigation -->
        @include('components.navbar')
  </div>



</body>
</html>
