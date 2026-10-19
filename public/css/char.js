const artworkImages = [
  "https://api.builder.io/api/v1/image/assets/TEMP/8a7188a21afd349af9f5e87f94490b10e71803c2?width=674",
  "https://api.builder.io/api/v1/image/assets/TEMP/0b2f227e59eddbd972d3a504203bcfb0fc4a18c5?width=262",
  "https://api.builder.io/api/v1/image/assets/TEMP/62f6e09aee6b4df6c5df97bd007173c01f6d6d96?width=262",
  "https://api.builder.io/api/v1/image/assets/TEMP/3a81675f7ab6580030142d597ed7da93352fb281?width=252",
];

const mainArtwork = document.querySelector(".main-artwork");
const thumbnails = [...document.querySelectorAll(".thumbnail")];
let activeImage = 0;

function showArtwork(index) {
  activeImage = (index + artworkImages.length) % artworkImages.length;
  mainArtwork.src = artworkImages[activeImage];
  thumbnails.forEach((thumbnail, thumbnailIndex) => {
    thumbnail.setAttribute("aria-pressed", String(thumbnailIndex + 1 === activeImage));
  });
}

document.querySelector(".previous").addEventListener("click", () => showArtwork(activeImage - 1));
document.querySelector(".next").addEventListener("click", () => showArtwork(activeImage + 1));
thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener("click", () => showArtwork(index + 1));
});

document.querySelector(".wishlist-button").addEventListener("click", (event) => {
  const button = event.currentTarget;
  const added = button.getAttribute("aria-pressed") !== "true";
  button.setAttribute("aria-pressed", String(added));
  button.querySelector("span").textContent = added ? "Added to Wishlist" : "Add to Wishlist";
});

document.querySelector(".share-button").addEventListener("click", async () => {
  const message = document.querySelector(".status-message");
  try {
    await navigator.clipboard.writeText(window.location.href);
    message.textContent = "Artwork link copied.";
  } catch {
    message.textContent = "Share this artwork: " + window.location.href;
  }
});

document.querySelector(".add-cart").addEventListener("click", () => {
  document.querySelector(".status-message").textContent = "Dan - The Boss added to your cart.";
});

document.querySelector(".buy-now").addEventListener("click", () => {
  document.querySelector(".status-message").textContent = "Checkout is ready for this artwork.";
});
