@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#f2f3ee" />
    <meta name="description" content="Discover original art and thoughtfully curated pieces for every space at Artiva." />
    <title>Artiva — Art that Speaks to You</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script type="module" src="{{ asset('css/script.js') }}" defer></script>
  </head>
  <body>
    <header class="site-header" id="home">
      <a class="brand" href="#home" aria-label="Artiva home">
        <img src="https://api.builder.io/api/v1/image/assets/TEMP/6751ae90b6cb8805755fcf3a9f8829c51dc83591?width=332" alt="Artiva" />
      </a>
      <nav class="main-nav" aria-label="Main navigation">
        <a class="nav-link is-active" href="#home">HOME</a>
        <a class="nav-link" href="#popular">GALLERY</a>
        <a class="nav-link" href="#popular">ARTISTS</a>
        <a class="nav-link" href="#home">ABOUT</a>
      </nav>
      <div class="header-tools">
        <img class="search-art" src="https://api.builder.io/api/v1/image/assets/TEMP/86174a0ba6395945ba445a66ac5673e90aa9cab1?width=1082" alt="Search" />
        <img class="account-art" src="https://api.builder.io/api/v1/image/assets/TEMP/cfbd5b667077b54bfe2f313a0e0f1ddb82869d61?width=294" alt="Profile and shopping bag" />
      </div>
    </header>

    <main>
      <section class="hero" aria-labelledby="hero-title">
        <img class="hero-image" src="https://api.builder.io/api/v1/image/assets/TEMP/056632f357d565150089846b33def75db97c8089?width=2880" alt="Sunlit creative workspace" />
        <div class="hero-content">
          <p class="eyebrow">ARTIVA</p>
          <h1 id="hero-title">Art that Speaks<br />to <span>You</span><span class="period">.</span></h1>
          <p class="hero-description">Discover original works and thoughtfully<br class="desktop-break" /> curated pieces for every space</p>
          <a class="hero-button" href="#popular">
            EXPLORE THE GALLERY
            <svg width="16" height="8" viewBox="0 -4 16 8" fill="none" aria-hidden="true"><path d="M0 0H16M12.8 -3.2L16 0L12.8 3.2" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" /></svg>
          </a>
        </div>
      </section>

      <section class="popular" id="popular" aria-labelledby="popular-title">
        <h2 id="popular-title">Popular Items</h2>
        <div class="collection-controls">
          <div class="filters" role="group" aria-label="Filter artwork">
            <button class="filter is-selected" type="button" data-filter="all" aria-pressed="true">ALL</button>
            <button class="filter" type="button" data-filter="art-presets" aria-pressed="false">ART PRESETS</button>
            <button class="filter" type="button" data-filter="sale" aria-pressed="false">SALE</button>
            <button class="filter" type="button" data-filter="limited" aria-pressed="false">LIMITED</button>
          </div>
          <a class="view-all" href="#popular">View All</a>
        </div>
        <div class="product-grid" id="product-grid" aria-live="polite"></div>
      </section>
    </main>
  </body>
</html>

@endsection
