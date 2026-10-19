const base = "https://api.builder.io/api/v1/image/assets/TEMP/";
const art = {
  a: base + "9b199e0c6a10e303ada2535892c8506b707897f6?width=66",
  b: base + "98b620a8749ec72563d42ac48f98d8e98a4909bc?width=60",
  c: base + "bb4fafd4e6027d897b6f03b69fc5f6836f6f9bc3?width=62",
  d: base + "91519e5d6f3d857fd6e98b6d479144520985362c?width=64",
  e: base + "e322f718c1f55d75fc76c3d74022591f1259bf9d?width=66",
};

const orders = [
  ["#ORD-0018", "Anna Reyes", art.a, "Oct 14, 2026", "$400", "Processing"],
  ["#ORD-0017", "Joseph Chu", art.b, "Oct 13, 2026", "$400", "Shipped"],
  ["#ORD-0016", "Rigor Jimenez", art.c, "Oct 12, 2026", "$300", "Completed"],
  ["#ORD-0015", "Arlyn Dizon", art.a, "Oct 11, 2026", "$250", "Pending"],
  ["#ORD-0014", "Hannah Paz", art.d, "Oct 10, 2026", "$400", "Pending"],
  ["#ORD-0013", "Christoff Uy", art.a, "Oct 09, 2026", "$400", "Processing"],
  ["#ORD-0012", "Matthew Cruz", art.e, "Oct 08, 2026", "$300", "Shipped"],
  ["#ORD-0011", "Kalix Fernandez", art.c, "Oct 07, 2026", "$300", "Completed"],
];

const body = document.getElementById("orders-body");
body.innerHTML = orders
  .map(
    ([id, name, img, date, amount, status]) => `
  <tr>
    <td>${id}</td>
    <td>${name}</td>
    <td><img src="${img}" alt="Artwork for ${id}" /></td>
    <td>${date}</td>
    <td>${amount}</td>
    <td><span class="badge ${status.toLowerCase()}">${status}</span></td>
  </tr>`,
  )
  .join("");

document.querySelectorAll("[data-nav]").forEach((el) => {
  el.addEventListener("click", (e) => {
    e.preventDefault();
    document.querySelectorAll("[data-nav]").forEach((n) => n.classList.remove("active"));
    el.classList.add("active");
  });
});
