@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#F2F3EE" />
    <title>Artiva — Artwork Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Lato:wght@400;500;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet" />
     <link rel="stylesheet" href="{{ asset('css/char.css') }}">
<script type="module" src="{{ asset('css/char.js') }}" defer></script>
 
  </head>
  <body>
    <header class="site-header">
      <div class="header-inner">
        <a class="brand" href="#home" aria-label="Artiva home">
          <img src="https://api.builder.io/api/v1/image/assets/TEMP/51e5add1c94192b3e9496b4297baac2b17b944ed?width=332" alt="Artiva" />
        </a>
        <nav class="primary-nav" aria-label="Main navigation">
          <a class="active" href="#home">HOME</a>
          <a href="#gallery">GALLERY</a>
          <a href="#artists">ARTISTS</a>
          <a href="#about">ABOUT</a>
        </nav>
        <div class="header-actions">
          <div class="search-art" aria-hidden="true">
            <img src="https://api.builder.io/api/v1/image/assets/TEMP/86174a0ba6395945ba445a66ac5673e90aa9cab1?width=1082" alt="" />
          </div>
          <img class="account-art" src="https://api.builder.io/api/v1/image/assets/TEMP/cfbd5b667077b54bfe2f313a0e0f1ddb82869d61?width=294" alt="Profile and shopping bag" />
        </div>
      </div>
      <nav class="mobile-nav" aria-label="Mobile navigation">
        <a class="active" href="#home">HOME</a>
        <a href="#gallery">GALLERY</a>
        <a href="#artists">ARTISTS</a>
        <a href="#about">ABOUT</a>
      </nav>
    </header>

    <main class="page-shell" id="home">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="#home">HOME</a>
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 6 6 6-6 6" /></svg>
        <a href="#gallery">GALLERY</a>
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 6 6 6-6 6" /></svg>
        <span>ART WORK DETAILS</span>
      </nav>

      <div class="product-layout">
        <section class="gallery" aria-label="Artwork images">
          <div class="hero-image">
            <button class="gallery-arrow previous" type="button" aria-label="Previous image">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m15 6-6 6 6 6" /></svg>
            </button>
            <img class="main-artwork" src="https://api.builder.io/api/v1/image/assets/TEMP/8a7188a21afd349af9f5e87f94490b10e71803c2?width=674" alt="Dan - The Boss artwork" />
            <button class="gallery-arrow next" type="button" aria-label="Next image">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 6 6 6-6 6" /></svg>
            </button>
          </div>
          <div class="thumbnail-list" aria-label="Choose artwork image">
            <button class="thumbnail" type="button" aria-label="Show artwork image 2" aria-pressed="false">
              <img src="https://api.builder.io/api/v1/image/assets/TEMP/0b2f227e59eddbd972d3a504203bcfb0fc4a18c5?width=262" alt="" />
            </button>
            <button class="thumbnail" type="button" aria-label="Show artwork image 3" aria-pressed="false">
              <img src="https://api.builder.io/api/v1/image/assets/TEMP/62f6e09aee6b4df6c5df97bd007173c01f6d6d96?width=262" alt="" />
            </button>
            <button class="thumbnail" type="button" aria-label="Show artwork image 4" aria-pressed="false">
              <img src="https://api.builder.io/api/v1/image/assets/TEMP/3a81675f7ab6580030142d597ed7da93352fb281?width=252" alt="" />
            </button>
          </div>
        </section>

        <section class="product-details" aria-labelledby="artwork-title">
          <div class="badges">
            <span class="badge original">Original Artwork</span>
            <span class="badge medium">PAINTING</span>
          </div>
          <h1 id="artwork-title">Dan - The Boss</h1>
          <p class="byline">by John Paul Manalo</p>

          <div class="social-actions">
            <button class="text-action wishlist-button" type="button" aria-pressed="false">
              <svg class="heart-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.21 4.75c-2.3-2.28-5.85-2.35-8.21-.2-2.36-2.15-5.91-2.09-8.21.2-2.35 2.36-2.35 6.06 0 8.41l7.5 7.5c.2.2.45.29.71.29s.51-.1.71-.29l7.5-7.5c2.35-2.35 2.35-6.05 0-8.41ZM12 18.53 5.22 11.74a3.96 3.96 0 0 1 0-5.58c.79-.78 1.79-1.17 2.8-1.17s2.01.39 2.79 1.17l.5.5c.39.39 1.02.39 1.41 0l.5-.5a3.96 3.96 0 0 1 5.59 0 3.96 3.96 0 0 1 0 5.58L12 18.53Z" /></svg>
              <span>Add to Wishlist</span>
            </button>
            <button class="text-action share-button" type="button">
              <svg class="share-icon" viewBox="0 0 20 20" aria-hidden="true"><path d="M14.69 12.97c-.56 0-1.07.19-1.47.52L9.17 10.56a3.2 3.2 0 0 0 0-1.12l4.05-2.93c.4.33.91.52 1.47.52a2.34 2.34 0 1 0-2.25-1.69L8.59 8.12a3.12 3.12 0 1 0 0 3.76l3.84 2.78a2.34 2.34 0 1 0 2.26-1.69ZM6.09 11.72a1.72 1.72 0 1 1 0-3.44 1.72 1.72 0 0 1 0 3.44Zm8.6-8.05a1.02 1.02 0 1 1 0 2.03 1.02 1.02 0 0 1 0-2.03Zm0 12.66a1.02 1.02 0 1 1 0-2.03 1.02 1.02 0 0 1 0 2.03Z" /></svg>
              <span>Share</span>
            </button>
          </div>

          <div class="rule"></div>
          <h2 class="description-title">Description</h2>
          <p class="description">A fearless and mysterious warrior with a dark aura, sharp instincts, and unstoppable determination.</p>

          <div class="metadata">
            <div class="metadata-item">
              <div class="metadata-heading">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5Zm0-8a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM4 22h16a1 1 0 0 0 1-1v-1c0-3.86-3.14-7-7-7h-4c-3.86 0-7 3.14-7 7v1a1 1 0 0 0 1 1Zm6-7h4a5 5 0 0 1 5 5H5a5 5 0 0 1 5-5Z" /></svg>
                <span>Artist</span>
              </div>
              <span>John Paul M.</span>
            </div>
            <span class="metadata-divider" aria-hidden="true"></span>
            <div class="metadata-item">
              <div class="metadata-heading">
                <svg viewBox="0 0 27 27" aria-hidden="true"><path d="M22.89 13.95c.21-.17.34-.41.37-.67l.53-4.97a.99.99 0 0 0-.22-.73l-2.66-3.3a1 1 0 0 0-.67-.38l-4.97-.53a.99.99 0 0 0-.73.22L3.53 12.47a1.99 1.99 0 0 0-.15 2.8l7.1 8.1c.17.21.41.34.67.37.27.03.53-.05.73-.22l11.01-8.88ZM5.56 13.4l9.9-8 4.15.45 2.14 2.66-.44 4.15-9.91 7.99-5.84-7.25Z"/><path d="M15.58 9.79a1.66 1.66 0 1 0 3.3.35 1.66 1.66 0 0 0-3.3-.35Z"/></svg>
                <span>Category</span>
              </div>
              <span>Digital Art</span>
            </div>
          </div>

          <div class="price-row">
            <svg class="currency-icon" viewBox="0 0 87 87" aria-hidden="true"><path d="M45.05 46.61v15.53c5.47-.49 7.77-3.55 7.77-7.6 0-3.89-1.79-6.2-7.77-7.93Zm-4.66-7.77V24.86c-5.08.64-7.77 3.62-7.77 6.88s2.12 5.67 7.77 7.1Zm4.41 1.14 1.67.43c9.12 2.19 14.12 6.07 14.12 13.71 0 8.79-6.94 13.78-15.79 14.42v6.03h-3.92v-6.03c-8.81-.68-15.78-5.81-16.03-14.42h7.18c.62 4.2 3.26 7.28 8.85 7.89V46.37l-1.43-.36c-8.81-2.12-13.56-6.21-13.56-13.49 0-8.04 6.25-13.35 14.99-14.03v-6.07h3.92v6.06c8.67.72 14.95 6.1 15.23 14.25h-7.22c-.45-4.52-3.57-7.14-8.01-7.71v14.96Z" /></svg>
            <span>400.00</span>
          </div>
          <div class="purchase-actions">
            <button class="purchase-button add-cart" type="button">
              <svg viewBox="0 0 46 46" aria-hidden="true"><path opacity=".2" d="M40.23 26.07c2.32-6.25 3.49-9.36 2.24-11.68a8.1 8.1 0 0 0-.71-1.01c-1.73-1.98-5.06-1.98-11.69-1.98H19.53c-5.94 0-8.91 0-10.6 1.74-.27.28-.5.59-.71.92-1.32 2.05-.63 4.93.73 10.7.9 3.76 1.34 5.64 2.65 6.85.19.19.41.36.67.52 1.45 1 3.39 1 7.24 1h10.54c3.43 0 5.14 0 6.52-.82l.63-.44c1.23-1 1.82-2.59 3.03-5.81Z" fill="white"/><path d="m8.82 17.73-1.27-8.34a5.5 5.5 0 0 0-5.98-4.02M15.79 40.12a3.51 3.51 0 1 0 0-7.02 3.51 3.51 0 0 0 0 7.02Zm17.29 0a3.51 3.51 0 1 0 0-7.02 3.51 3.51 0 0 0 0 7.02ZM9.51 23.17 7.9 11.4h21.58c6.75 0 10.12 0 11.83 2.01.27.32.51.67.71 1.04 1.24 2.31.03 5.44-2.38 11.67l-.04.08c-1.22 3.15-1.83 4.72-3.06 5.69a5.3 5.3 0 0 1-.63.42c-1.36.81-3.05.81-6.43.81H20.89c-4.79 0-7.17 0-8.8-1.42-1.62-1.42-1.95-3.8-2.58-8.53Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <span>Add to Cart</span>
            </button>
            <button class="purchase-button buy-now" type="button">Buy Now</button>
          </div>
          <p class="status-message" aria-live="polite"></p>
        </section>
      </div>
    </main>
  </body>
</html>




@endsection