<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artiva – Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Boldonse&family=Lato:wght@800&family=Montserrat:wght@400;700&family=Playfair+Display:wght@800&display=swap"
      rel="stylesheet"
    />
   <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<script type="module" src="{{ asset('css/admin.js') }}" defer></script>
  </head>

  <body>
    <div class="app">
      <header class="topbar">
        <img class="logo" src="https://api.builder.io/api/v1/image/assets/TEMP/6751ae90b6cb8805755fcf3a9f8829c51dc83591?width=332" alt="Artiva" />
        <div class="search"><img src="https://api.builder.io/api/v1/image/assets/TEMP/2c1001c0e0270001b2d8631c141005afc3e69644?width=1082" alt="Search" /></div>
        <img class="profile" src="https://api.builder.io/api/v1/image/assets/TEMP/cfbd5b667077b54bfe2f313a0e0f1ddb82869d61?width=294" alt="Profile and cart" />
      </header>

      <aside class="sidebar">
        <nav class="nav" aria-label="Main">
          <a href="#" class="nav-item active" data-nav>Artworks</a>
          <a href="#" class="nav-item" data-nav>Orders</a>
          <a href="#" class="nav-item" data-nav>Users</a>
          <a href="#" class="nav-item" data-nav>Settings</a>
        </nav>
      </aside>

      <main class="main">
        <h1 class="title">Admin Dashboard</h1>
        <p class="subtitle">Here's what happening with your marketplace today.</p>

        <section class="stats">
          <article class="card stat">
            <svg class="stat-icon" width="41" height="33" viewBox="46 40 41 33" fill="none"><path d="M83.4456 40.2752H49.5076C47.8639 40.2752 46.5286 41.6419 46.5286 43.3197V69.6895C46.5286 71.3727 47.8639 72.7454 49.5076 72.7454H83.4456C85.084 72.7454 86.4134 71.3727 86.4134 69.6895V43.3197C86.4134 41.6419 85.084 40.2752 83.4456 40.2752ZM84.7585 62.9391L75.3251 52.3357L74.5691 51.4712C74.3048 51.1661 73.9239 51.0082 73.5159 51.0028C73.1073 51.0028 72.721 51.1891 72.4508 51.5056L63.2547 62.5436L58.8744 58.0636C58.3228 57.5217 57.4627 57.5217 56.8946 58.0751L48.1835 67.0061V43.3197C48.1835 42.5739 48.774 41.9699 49.5076 41.9699H83.4456C84.1679 41.9699 84.7585 42.5739 84.7585 43.3197V62.9391ZM59.9507 49.9182C59.9507 51.9969 58.2958 53.6916 56.2599 53.6916C54.224 53.6916 52.575 51.9969 52.575 49.9182C52.575 47.8388 54.2299 46.1388 56.2599 46.1388C58.2898 46.1388 59.9507 47.8334 59.9507 49.9182Z" fill="#021D60"/></svg>
            <div class="stat-body">
              <h3 class="stat-label">Total Artworks</h3>
              <div class="stat-value">24</div>
              <div class="stat-delta"><span class="up">↑</span>+3 this week</div>
            </div>
            <span class="chev">→</span>
          </article>

          <article class="card stat">
            <svg class="stat-icon" width="38" height="31" viewBox="28 52 38 31" fill="none"><path d="M64.1353 58.1619L38.6971 57.0134L38.5586 56.0569C38.4006 54.9625 37.8125 53.9619 36.9035 53.2406C35.9946 52.5192 34.8221 52.1218 33.6032 52.1218H29.2438C28.6246 52.1218 28.1226 52.5761 28.1226 53.1363C28.1226 53.6964 28.6246 54.1507 29.2438 54.1507H33.6032C35.0045 54.1507 36.1532 55.063 36.335 56.3197L38.7019 72.6958C38.8606 73.7903 39.448 74.7909 40.357 75.5128C41.2666 76.2352 42.4385 76.6326 43.6579 76.6326H62.3906C63.0098 76.6326 63.5118 76.1784 63.5118 75.6182C63.5118 75.058 63.0098 74.6038 62.3906 74.6038H43.6579C42.2567 74.6038 41.108 73.6909 40.9262 72.4326L40.9134 72.3481H58.4594C60.7929 72.3481 62.7316 70.8906 63.1739 68.8049L65.1809 59.3667C65.2419 59.0781 65.162 58.7801 64.9613 58.5488C64.7612 58.3181 64.4598 58.1768 64.1353 58.1619ZM61.8251 64.4073L56.0254 64.1457L56.5097 59.8491L62.7346 60.13L61.8251 64.4073ZM47.1999 63.7472L46.7106 59.407L54.2666 59.7481L53.7822 64.0447L47.1999 63.7472ZM53.5547 66.0658L53.0752 70.3193H47.9405L47.4298 65.7893L53.5547 66.0658ZM44.4449 59.3044L44.9342 63.6451L39.6213 63.4056L38.9929 59.0582L44.4449 59.3044ZM39.9165 65.4504L45.1641 65.6872L45.6863 70.3193H40.6205L39.9165 65.4504ZM58.4594 70.3193H55.3293L55.7972 66.1668L61.3974 66.4196L60.9716 68.4219C60.7343 69.5389 59.7015 70.3193 58.4594 70.3193ZM45.3953 77.2458C43.6756 77.2458 42.2762 78.5118 42.2762 80.0682C42.2762 81.624 43.6756 82.8901 45.3953 82.8901C47.1157 82.8901 48.5151 81.624 48.5151 80.0682C48.5151 78.5118 47.1157 77.2458 45.3953 77.2458ZM45.3953 80.8613C44.9122 80.8613 44.5187 80.5053 44.5187 80.0682C44.5187 79.6306 44.9122 79.2746 45.3953 79.2746C45.8791 79.2746 46.2726 79.6306 46.2726 80.0682C46.2726 80.5053 45.8791 80.8613 45.3953 80.8613ZM56.8087 77.2458C55.0889 77.2458 53.6895 78.5118 53.6895 80.0682C53.6895 81.624 55.0889 82.8901 56.8087 82.8901C58.529 82.8901 59.9284 81.624 59.9284 80.0682C59.9284 78.5118 58.529 77.2458 56.8087 77.2458ZM56.8087 80.8613C56.3255 80.8613 55.932 80.5053 55.932 80.0682C55.932 79.6306 56.3255 79.2746 56.8087 79.2746C57.2924 79.2746 57.6859 79.6306 57.6859 80.0682C57.6859 80.5053 57.2924 80.8613 56.8087 80.8613Z" fill="#021D60"/></svg>
            <div class="stat-body">
              <h3 class="stat-label">Total Orders</h3>
              <div class="stat-value">18</div>
              <div class="stat-delta"><span class="up">↑</span>+5 this week</div>
            </div>
            <span class="chev">→</span>
          </article>

          <article class="card stat">
            <svg class="stat-icon" width="26" height="34" viewBox="0 0 26 34" fill="#021D60"><circle cx="13" cy="9" r="7.4"/><path d="M0.28 33.1C0.28 26 3.87 20 8.8 17.8 10 18.8 11.45 19.3 12.97 19.3S15.93 18.7 17.14 17.8C22.1 20 25.65 26 25.65 33.1H0.28Z"/></svg>
            <div class="stat-body">
              <h3 class="stat-label">Total Users</h3>
              <div class="stat-value">12</div>
              <div class="stat-delta"><span class="up">↑</span>+2 this week</div>
            </div>
            <span class="chev">→</span>
          </article>
        </section>

        <section class="lower">
          <article class="card orders">
            <h2 class="card-title">Recent Orders</h2>
            <div class="table-wrap">
              <table>
                <thead>
                  <tr><th>Order ID</th><th>Customer</th><th>Artwork</th><th>Date</th><th>Amount</th><th>Status</th></tr>
                </thead>
                <tbody id="orders-body"></tbody>
              </table>
            </div>
          </article>

          <div class="side">
            <article class="card status">
              <h2 class="card-title">Order Status</h2>
              <div class="status-top">
                <div class="mosaic" aria-hidden="true">
                  <span class="b shipped"></span>
                  <span class="b completed"></span>
                  <span class="b processing"></span>
                  <span class="b pending"></span>
                </div>
                <div class="status-total"><strong>18</strong><span>Total Orders</span></div>
              </div>
              <ul class="legend">
                <li><i class="shipped"></i>Shipped 5 (28%)</li>
                <li><i class="processing"></i>Processing 5 (28%)</li>
                <li><i class="completed"></i>Completed 4 (22%)</li>
                <li><i class="pending"></i>Pending 4 (22%)</li>
              </ul>
            </article>

            <article class="card tagline">
              <p>Keep creating, we’ll handle the rest.</p>
            </article>

            <article class="card actions">
              <h2 class="card-title">Quick Actions</h2>
              <div class="action-grid">
                <button type="button" class="action">
                  <svg width="26" height="19" viewBox="7 10 26 19" fill="#021D60"><path d="M30.51 10.16H9.2C8.17 10.16 7.33 10.95 7.33 11.91V27.09C7.33 28.06 8.17 28.85 9.2 28.85H30.51C31.54 28.85 32.37 28.06 32.37 27.09V11.91C32.37 10.95 31.54 10.16 30.51 10.16ZM31.33 23.21L25.41 17.1 24.94 16.6C24.77 16.43 24.53 16.34 24.28 16.34 24.02 16.34 23.78 16.44 23.61 16.62L17.83 22.98 15.08 20.4C14.74 20.09 14.2 20.09 13.84 20.41L8.37 25.55V11.91C8.37 11.48 8.74 11.13 9.2 11.13H30.51C30.96 11.13 31.33 11.48 31.33 11.91V23.21ZM15.76 15.71C15.76 16.91 14.72 17.88 13.44 17.88 12.16 17.88 11.13 16.91 11.13 15.71 11.13 14.51 12.17 13.53 13.44 13.53 14.72 13.53 15.76 14.51 15.76 15.71Z"/></svg>
                  Add Artwork
                </button>
                <button type="button" class="action">
                  <svg width="29" height="23" viewBox="21 49 28 23" fill="#021D60"><path d="M48.12 53.52L29.03 52.67 28.92 51.97C28.8 51.17 28.36 50.44 27.68 49.91 27 49.38 26.12 49.09 25.2 49.09H21.93C21.47 49.09 21.09 49.42 21.09 49.83 21.09 50.24 21.47 50.58 21.93 50.58H25.2C26.26 50.58 27.12 51.25 27.25 52.17L29.03 64.17C29.15 64.97 29.59 65.71 30.27 66.23 30.96 66.76 31.84 67.06 32.75 67.06H46.81C47.27 67.06 47.65 66.72 47.65 66.31 47.65 65.9 47.27 65.57 46.81 65.57H32.75C31.7 65.57 30.84 64.9 30.7 63.98L30.69 63.92H43.86C45.61 63.92 47.06 62.85 47.4 61.32L48.9 54.4C48.95 54.19 48.89 53.97 48.74 53.8 48.59 53.63 48.36 53.53 48.12 53.52ZM34.05 67.5C32.76 67.5 31.71 68.43 31.71 69.57 31.71 70.71 32.76 71.64 34.05 71.64 35.35 71.64 36.4 70.71 36.4 69.57 36.4 68.43 35.35 67.5 34.05 67.5ZM42.62 67.5C41.33 67.5 40.28 68.43 40.28 69.57 40.28 70.71 41.33 71.64 42.62 71.64 43.91 71.64 44.96 70.71 44.96 69.57 44.96 68.43 43.91 67.5 42.62 67.5Z"/></svg>
                  View Orders
                </button>
                <button type="button" class="action">
                  <svg width="22" height="26" viewBox="0 0 22 26" fill="#021D60"><circle cx="11" cy="7.2" r="6.9"/><path d="M0.24 26C0.24 20.2 3.29 15.4 7.48 13.6 8.51 14.4 9.74 14.8 11.03 14.8S13.5 14.3 14.58 13.6C18.8 15.4 21.82 20.2 21.82 26H0.24Z"/></svg>
                  Manage Users
                </button>
                <button type="button" class="action">
                  <svg width="25" height="24" viewBox="0 0 25 24" fill="#021D60"><path fill-rule="evenodd" d="M23.26 13.85C23.74 13.85 24.12 13.47 24.12 13.01V11C24.12 10.55 23.74 10.17 23.26 10.17H22.37C21.9 10.17 21.4 9.81 21.26 9.38L20.49 7.59C20.27 7.18 20.36 6.59 20.69 6.27L21.33 5.66C21.66 5.33 21.66 4.8 21.33 4.48L19.85 3.06C19.52 2.73 18.97 2.73 18.63 3.06L18 3.67C17.66 3.99 17.05 4.08 16.63 3.86L14.78 3.13C14.33 2.99 13.96 2.51 13.96 2.05V1.19C13.96 0.73 13.57 0.36 13.1 0.36H11.02C10.54 0.36 10.16 0.73 10.16 1.19V2.05C10.16 2.51 9.79 2.99 9.33 3.13L7.48 3.86C7.07 4.08 6.45 3.99 6.12 3.67L5.49 3.06C5.15 2.73 4.6 2.73 4.27 3.06L2.8 4.48C2.46 4.8 2.46 5.33 2.8 5.65L3.43 6.27C3.77 6.59 3.86 7.18 3.63 7.59L2.87 9.38C2.73 9.81 2.23 10.17 1.76 10.17H0.86C0.39 10.17 0 10.55 0 11V13.01C0 13.47 0.39 13.85 0.86 13.85H1.76C2.23 13.85 2.73 14.2 2.87 14.64L3.63 16.43C3.86 16.83 3.77 17.43 3.43 17.75L2.8 18.36C2.46 18.69 2.46 19.21 2.8 19.54L4.27 20.96C4.6 21.28 5.15 21.28 5.49 20.96L6.12 20.35C6.46 20.02 7.07 19.94 7.48 20.15L9.34 20.89C9.79 21.02 10.17 21.51 10.17 21.97V22.83C10.17 23.29 10.55 23.66 11.03 23.66H13.11C13.58 23.66 13.97 23.29 13.97 22.83V21.97C13.97 21.51 14.34 21.02 14.79 20.89L16.64 20.15C17.06 19.94 17.68 20.02 18.01 20.35L18.64 20.96C18.98 21.28 19.53 21.28 19.86 20.96L21.34 19.54C21.67 19.21 21.67 18.69 21.34 18.36L20.7 17.75C20.37 17.43 20.28 16.83 20.5 16.43L21.27 14.64C21.41 14.2 21.9 13.85 22.38 13.85H23.26ZM12.06 16.8C9.32 16.8 7.1 14.66 7.1 12.01C7.1 9.36 9.32 7.21 12.06 7.21S17.03 9.36 17.03 12.01C17.03 14.66 14.8 16.8 12.06 16.8Z"/></svg>
                  Settings
                </button>
              </div>
            </article>
          </div>
        </section>
      </main>
    </div>

    <script src="/dashboard.js"></script>
  </body>
</html>
