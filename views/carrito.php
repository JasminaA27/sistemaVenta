<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="" style="background-color: #d8a7ca;">
            <a class="navbar-brand col-1" href="carrito.html"style=" width: 70px;"  >
                <img src="./views/plantilla/img/esika.png" alt="Bootstrap"
                    width="80" height="40">
                </a>
                <a class="navbar-brand col-1" href="carrito.html"style=" width: 70px; margin-left: -10px; ">
                    <img src="./views/plantilla/img/lbel.png" alt="Bootstrap"
                        width="80" height="40">
                    </a>
                    <a class="navbar-brand col-1" href="carrito.html" style=" width: 70px; margin-left: -10px;">
                        <img src="./views/plantilla/img/cyzone.png" alt="Bootstrap"
                            width="80" height="40">
                        </a> 
        </div>
        <h1 style="color: #ec56ae;">Carrito de Compras</h1>
    
        <div class="row" >
          <div class="col-md-8">
            <table class="table">
              <thead style="background-color: #d8a7ca;">
                <tr>
                  <th>Detalle</th>
                  <th>Producto</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="cart-items">
              </tbody>
            </table>
          </div>
          <div class="col-md-4">
            <div class="card" style="background-color: rgb(224, 221, 221); height: 550px;">
              <div class="card-body">
                <div class="mb-3">
                  <label for="account-number" class="form-label">Felicidades tienes envio gratis:</label>
                 
                </div>
                <h5 class="card-title">Resumen del Pedido</h5>
                <p class="card-text">Subtotal: <span id="cart-subtotal">S/0.00</span></p>
                <p class="card-text">Descuento: <span id="cart-discount">S/0.00</span></p>
                <p class="card-text">Total: <span id="cart-total">S/0.00</span></p>
    
    
                <div id="bank-info" class="mb-3 d-none">
                 
                  <img id="bank-logo" src="" alt="Logo Banco" style="max-width: 100px;">
                  <p id="bank-name"></p>
                </div>
    
                <div class="mb-5" style=" height: 100px;">
                  <p>Ingresa un numero de cuenta</p>
                  <input type="text" class="form-control" id="account-number" onchange="showBankInfo(this.value)">
                  <div class=" justify-content-between align-items-center"> <br>
                    <img style="width: 40px;height: 40px;margin-right: 10px;" src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/1c4431a3-e2c3-4343-a132-9463b3aad5ed___e23f3fad75f802fab144d6cb968354fe.png"/>
                                <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/cdc6d589-4afc-4bfe-bcfd-8e2beb4b3362___2863bc3a6d5a65f0389e310440396a49.png"/>
                                <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/1672e7c1-8c43-4e4a-b36e-0f6f13dcd56f___f44ab2250e1a6a9f54711849f1db0dd0.png"/>
                                <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/338de717-2752-4b00-af72-cd14293d6134___882e3d8fc45011cd89ef77d43df84e1d.png"/>
                                <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/a1a99d11-772e-4c2b-b5a3-7c376a9b478c___12569e7ce2457f50da80246d982d3c4f.png"/>
                                <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/3c4af8c3-49eb-4d5d-915a-4ae06235defe___907a5bf7f9ed5501616fb3c1bccd5efa.png"/>
                                <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/506ee878-1699-45b8-a9b0-8cee40ddc5d2___4615ed79e4371cf0963d3a6a6a9c952d.png"/>
                                <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/968dd3f4-90ce-49f7-b838-059ac1af8690___e0c56c5c20470f3238b6b0cb6ede6a27.png"/>
                  </div>
                </div>
                <a href="" class="btn " style="background-color: #f79be0; margin-top:50px;">PROCEDER EL PAGO</a> <br> <br>
                <a href="<?php echo BASE_URL; ?>esika" class="btn " style="background-color: #f79be0;">SEGUIR COMPRANDO</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
      <script>
    
        const cartItems = [
          { name: 'Reloj de mujer', price: 150.00, quantity: 1, image: 'https://esikaperu.vtexassets.com/arquivos/ids/300764-500-auto?v=638483568210470000&width=500&height=auto&aspect=true' },
          { name: 'Crema facial Hidra Nutritiva Triple Acción Max 25+ 120g', price: 170.00, quantity: 2, image: 'https://esikaperu.vtexassets.com/arquivos/ids/263210-500-auto?v=638242504563600000&width=500&height=auto&aspect=true' },
          { name: 'Vanilla Scent Eau de Parfum, 50 ml ', price: 250.00, quantity: 1, image: 'https://esikaperu.vtexassets.com/arquivos/ids/284648-500-auto?v=638321214182600000&width=500&height=auto&aspect=true' }
        
         ];
         

    
        function updateCart() {
          const cartItemsElement = document.getElementById('cart-items');
          let subtotal = 0;
    
          cartItemsElement.innerHTML = '';
          cartItems.forEach((item, index) => {
            const total = item.price * item.quantity;
            subtotal += total;
    
            const row = document.createElement('tr');
            row.innerHTML = `
              <td>${item.name}</td>
              <td><img src="${item.image}" alt="${item.name}" class="img-fluid" style="max-width: 100px;"></td>
              <td>S/${item.price.toFixed(2)}</td>
              <td>
                <div class="input-group">
                  <button class="btn btn-outline-secondary" type="button" onclick="updateQuantity(${index}, -1)">-</button>
                  <input type="number" class="form-control" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value - ${item.quantity})">
                  <button class="btn btn-outline-secondary" type="button" onclick="updateQuantity(${index}, 1)">+</button>
                </div>
              </td>
              <td>S/${total.toFixed(2)}</td>
              <td><button class="btn btn-danger" onclick="removeFromCart(${index})">Eliminar</button></td>
            `;
            cartItemsElement.appendChild(row);
          });
    
          document.getElementById('cart-subtotal').textContent = ` S/${subtotal.toFixed(2)}`;
          document.getElementById('cart-discount').textContent = 'S/0.00';
          document.getElementById('cart-total').textContent =  ` S/${subtotal.toFixed(2)}`;
        }
    
        function updateQuantity(index, change) {
          cartItems[index].quantity += change;
          if (cartItems[index].quantity < 1) {
            cartItems[index].quantity = 1;
          }
          updateCart();
        }
    
        function removeFromCart(index) {
          cartItems.splice(index, 1);
          updateCart();
        }
    
        function selectBank(bankName, bankLogoSrc) {
          const bankInfoElement = document.getElementById('bank-info');
          const bankLogoElement = document.getElementById('bank-logo');
          const bankNameElement = document.getElementById('bank-name');
    
          bankLogoElement.src = bankLogoSrc;
          bankLogoElement.alt = ` Logo ${bankName}`;
          bankNameElement.textContent = bankName;
    
          bankInfoElement.classList.remove('d-none');
        }
    
        updateCart();
      </script>
         <div class="code" style="margin-left: 300px; margin-top: -150px; display: flex ;">
          <div class="p">
              <p class="p">¿Tienes algún código promocional?</p>
          </div>
          <div class="in">
              <input type="text" placeholder="Ingresa tu código">
          </div>
          <div class="apli">
              <button>Aplicar</button>
          </div>

      </div>
             
             <div id="productos_similares" class="col-12 row p-2 m-0" style="margin-top: 800px;margin-top: 600px;">
                <h2 class="text-center" style="color: red; margin-top: 50px;">¡También te puede gustar!</h2>
                <div class="container-fluid m-0 p-0 mt-5 row">
                    <div class="p-2" style="width: 20%;">
                        <div class="card w-100" style="width: 18rem;">
                            <img src="https://esikaperu.vtexassets.com/arquivos/ids/260178-500-auto?v=638242317276870000&width=500&height=auto&aspect=true"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title" style="text-align: center;">Salvaje-Colonia-para-Hombre-90-ml</h6>
                                <div class="star"style="margin-left: 60px;">
                                    <h5>★★★★★</h5>
                                   
                                </div> 
                                <p class="card-text"style="text-align: center;">s/85.00</p>
                                <a href="#" class="btn btn-primary" style="margin-left: 60px;"> Agregar </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2" style="width: 20%;">
                        <div class="card w-100" style="width: 18rem;">
                            <img src="https://esikaperu.vtexassets.com/arquivos/ids/264870-500-auto?v=638242577387370000&width=500&height=auto&aspect=true"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"style="text-align: center;">Colonia Colors in Nature Golden Vainilla, 200 ml</h6>
                                <div class="star"style="margin-left: 60px;">
                                    <h5>★★★★★</h5>
                                   
                                </div> 
                                <p class="card-text"style="text-align: center;">s/33.00</p>
                                <a href="#" class="btn btn-primary"style="margin-left: 60px;"> Agregar </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2" style=" width: 20%;">
                        <div class="card w-100" style="width: 18rem;">
                            <img src="https://esikaperu.vtexassets.com/arquivos/ids/284975-500-auto?v=638326369513930000&width=500&height=auto&aspect=true"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"style="text-align: center;">protector-solar-facial-antiedad</h6>
                                <div class="star"style="margin-left: 60px;">
                                    <h5>★★★★★</h5>
                                   
                                </div> 
                                <p class="card-text"style="text-align: center;">s/55.00</p>
                                <a href="#" class="btn btn-primary"style="margin-left: 60px;"> Agregar </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2" style=" width: 20%;">
                        <div class="card w-100" style="width: 18rem;">
                            <img src="https://esikaperu.vtexassets.com/arquivos/ids/288821-500-auto?v=638380800240900000&width=500&height=auto&aspect=true"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"style="text-align: center;">Natural Fresh Base de Maquillaje</h6>
                                <div class="star"style="margin-left: 60px;">
                                    <h5>★★★★★</h5>
                                   
                                </div> 
                                <p class="card-text"style="text-align: center;">s/45.00</p>
                                <a href="#" class="btn btn-primary"style="margin-left: 60px;"> Agregar </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2" style=" width: 20%;">
                        <div class="card w-100" style="width: 18rem;">
                            <img src="https://esikaperu.vtexassets.com/arquivos/ids/263216-500-auto?v=638242504656830000&width=500&height=auto&aspect=true"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"style="text-align: center;">Crema-facial-Triple-Accion-Max-25--200g</h6>
                                <div class="star" style="margin-left: 60px;">
                                    <h5>★★★★★</h5>
                                   
                                </div> 
                                <p class="card-text" style="text-align: center;">s/35.00</p>
                                <a href="#" class="btn btn-primary" style="margin-left: 60px;"> Agregar </a>
                            </div>
                        </div>
                    </div>  
              </div>
                
            </div>
</body>
</html>