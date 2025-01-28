<!DOCTYPE html>
<html lang="en">
<head>
  @extends('components.template')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basa Bata</title>
  
</head>
<body > 

  @include("components.header")

  <div class="app-container">
    <div class="app-items-container">
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
            <div class="category"><a href="{{route('showChapters')}}">Nobela</a></div>
            <div class="category locked">Maikling Kwento</div>
            <div class="category locked">Pabula</div>
            <div class="category locked">Kuwentong Bayan</div>
            <div class="category locked">Alamat</div>
            <div class="category locked">Tula</div>
            <div class="category locked">Epiko</div>
            <div class="category locked">Talambuhay</div>
          </div>
        </section>
      </div>

    </div>

        <!-- Footer Navigation -->
        @include('components.navbar')
  </div>



</body>
</html>
