<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* General Styles */
body {
  display: flex;
  margin: 0;
  font-family: Arial, sans-serif;
}

/* Sidebar Styles */
.sidebar {
  background-color: #2c3e50;
  color: #ecf0f1;
  width: 250px;
  padding: 20px;
  height: 100vh;
}

.sidebar h2 {
  font-size: 1.5em;
  margin-bottom: 20px;
}

.sidebar nav ul {
  list-style: none;
  padding: 0;
}

.sidebar nav ul li {
  margin: 15px 0;
}

.sidebar nav ul li a {
  color: #ecf0f1;
  text-decoration: none;
  display: flex;
  align-items: center;
}

.sidebar nav ul li a i {
  margin-right: 10px;
}

.sidebar nav ul li a:hover {
  text-decoration: underline;
}

/* Main Content */
main {
  flex-grow: 1;
  padding: 20px;
  background-color: #f4f4f4;
}

header h1 {
  font-size: 2em;
  margin-bottom: 20px;
}

#content {
  background: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

  </style>
</head>
<body>
  <div class="sidebar">
    <h2>Admin Panel</h2>
    <nav>
      <ul>
        <li><a href="#" data-section="categories"><i class="bi bi-tags"></i> Categorías</a></li>
        <li><a href="#" data-section="purchases"><i class="bi bi-cart"></i> Compras</a></li>
        <li><a href="#" data-section="people"><i class="bi bi-people"></i> Personas</a></li>
        <li><a href="#" data-section="products"><i class="bi bi-box"></i> Productos</a></li>
      </ul>
    </nav>
  </div>
  <main>
    <header>
      <h1 id="section-title">Bienvenido al Panel</h1>
    </header>
    <section id="content">
      <p>Selecciona una sección para comenzar.</p>
    </section>
  </main>
  <script src="script.js"></script>
</body>
<script>
    // Change the content dynamically
const links = document.querySelectorAll(".sidebar nav ul li a");
const content = document.getElementById("content");
const sectionTitle = document.getElementById("section-title");

const sections = {
  categories: "<p>Gestión de categorías.</p>",
  purchases: "<p>Historial y detalles de compras.</p>",
  people: "<p>Listado y gestión de personas.</p>",
  products: "<p>Inventario y gestión de productos.</p>",
};

links.forEach(link => {
  link.addEventListener("click", e => {
    e.preventDefault();
    const section = link.getAttribute("data-section");
    sectionTitle.textContent = section.charAt(0).toUpperCase() + section.slice(1);
    content.innerHTML = sections[section];
  });
});

</script>
</html>
