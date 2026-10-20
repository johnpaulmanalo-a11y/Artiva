const imageUrl = (id, width) =>
  `https://api.builder.io/api/v1/image/assets/TEMP/${id}?width=${width}`;

const products = [
  {
    name: "Kai",
    price: "$400.00",
    id: "Kai.jpg",
    sourceWidth: 254,
    width: 127,
    height: 174,
    offset: 7,
    categories: ["art-presets", "limited"]
  },
  {
    name: "Jp",
    price: "$300.00",
    id: "Jp.jpg",
    sourceWidth: 246,
    width: 123,
    height: 170,
    offset: 10,
    categories: ["art-presets", "sale"]
  },
  {
    name: "Captain Valor",
    price: "$250.00",
    id: "Captain Valor.jpg",
    sourceWidth: 234,
    width: 117,
    height: 167,
    offset: 10,
    categories: ["art-presets", "limited"]
  },
  {
    name: "Archery",
    price: "$400.00",
    id: "Archery.jpg",
    sourceWidth: 222,
    width: 111,
    height: 166,
    offset: 10,
    categories: ["art-presets"]
  },
  {
    name: "Dan - The Boss",
    price: "$300.00",
    id: "Dan - The Boss.jpg",
    sourceWidth: 222,
    width: 111,
    height: 166,
    offset: 10,
    categories: ["art-presets", "sale"]
  },
  {
    name: "Spideygong",
    price: "$250.00",
    id: "Spideygong.png",
    sourceWidth: 244,
    width: 122,
    height: 166,
    offset: 10,
    categories: ["art-presets", "limited"]
  }
];
const grid = document.querySelector("#product-grid");
const filters = [...document.querySelectorAll(".filter")];

function renderProducts(filter = "all") {
  const visibleProducts = products.filter((product) => filter === "all" || product.categories.includes(filter));
  grid.replaceChildren(...visibleProducts.map((product) => {
    const card = document.createElement("article");
    card.className = "product-card";
    const art = document.createElement("div");
    art.className = "product-art";
    const image = document.createElement("img");
    image.src = imageUrl(product.id, product.width);
    image.alt = product.name;
    image.width = product.width;
    image.height = product.height;
    image.style.marginTop = `${product.offset}px`;
    art.append(image);

    const name = document.createElement("h3");
    name.className = "product-name";
    name.textContent = product.name;
    const category = document.createElement("p");
    category.className = "product-category";
    category.textContent = "Defender";
    const price = document.createElement("p");
    price.className = "product-price";
    price.textContent = product.price;
    card.append(art, name, category, price);
    return card;
  }));
}

filters.forEach((button) => {
  button.addEventListener("click", () => {
    const filter = button.dataset.filter;
    filters.forEach((item) => {
      const selected = item === button;
      item.classList.toggle("is-selected", selected);
      item.setAttribute("aria-pressed", String(selected));
    });
    renderProducts(filter);
  });
});

document.querySelectorAll(".nav-link").forEach((link) => {
  link.addEventListener("click", () => {
    document.querySelectorAll(".nav-link").forEach((item) => item.classList.remove("is-active"));
    link.classList.add("is-active");
  });
});

document.querySelector(".view-all").addEventListener("click", () => {
  filters[0].click();
});

renderProducts();