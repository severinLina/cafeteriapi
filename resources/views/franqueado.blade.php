@extends('layouts.app')

@section('content')

<section class="page-section">
        <div class="container">
            <div class="product-item">
                <h2 class="section-heading mb-0">Cappuccino Venezuelano</h2>
                <p>Um café cremoso com toque de especiarias. Preço: R$10,00</p>
                <button class="btn btn-primary add-to-cart" data-name="Cappuccino Venezuelano" data-price="10.00">Adicionar ao Carrinho</button>
            </div>

             <div class="product-item">
                <h2 class="section-heading mb-0">Chá Gelado de Ervas</h2>
                <p>Refrescante e aromático. Preço: R$7,50</p>
                <button class="btn btn-primary add-to-cart" data-name="Chá Gelado de Ervas" data-price="7.50">Adicionar ao Carrinho</button>
            </div>

            <div class="product-item">
                <h2 class="section-heading mb-0">Café Gelado com Ervas</h2>
                <p>Refrescante e aromático. Preço: R$12,50</p>
                <button class="btn btn-primary add-to-cart" data-name="Café Gelado com Ervas" data-price="12.50">Adicionar ao Carrinho</button>
        </div>

         <div class="product-item">
                <h2 class="section-heading mb-0">Café Tradicional</h2>
                <p>Um café simples, tradicional e delicioso. Preço: R$9,50</p>
                <button class="btn btn-primary add-to-cart" data-name="Café Tradicional" data-price="9.50">Adicionar ao Carrinho</button>
            </div>

             <div class="product-item">
                <h2 class="section-heading mb-0">Folhado com Nutela</h2>
                <p>Uma massa folhada deliciosa com Nutela. Preço: R$17,00</p>
                <button class="btn btn-primary add-to-cart" data-name="Folhado com Nutela" data-price="17.00">Adicionar ao Carrinho</button>
            </div>

             <div class="product-item">
                <h2 class="section-heading mb-0">Croissant</h2>
                <p>Um pãozinho que derrete na boca a cada mordida. Preço: R$10,00</p>
                <button class="btn btn-primary add-to-cart" data-name="Croissant" data-price="10.00">Adicionar ao Carrinho</button>
            </div>

             <div class="product-item">
                <h2 class="section-heading mb-0">Coxinha </h2>
                <p>Uma coxinha com uma massa crocante e deliciosa. Preço: R$9,50</p>
                <button class="btn btn-primary add-to-cart" data-name="Coxinha" data-price="9.50">Adicionar ao Carrinho</button>
            </div>

    </section>

    <!-- CARRINHO -->
    <section id="cart">
        <h2 class="Carrinho">Seu Carrinho</h2>


        <ul id="cart-items"></ul>
        <p style="color: #fff;">Total: <span id="cart-total">R$0,00</span></p>
        <button id="checkout" class="btn btn-success">Finalizar Pedido</button>
    </section>

    <script>
        let cart = [];

        document.querySelectorAll(".add-to-cart").forEach(button => {
            button.addEventListener("click", () => {
                let item = {
                    name: button.getAttribute("data-name"),
                    price: parseFloat(button.getAttribute("data-price"))
                };
                cart.push(item);
                updateCart();
            });
        });

        function updateCart() {
            let cartList = document.getElementById("cart-items");
            let total = 0;
            cartList.innerHTML = "";

            cart.forEach((item) => {
                let listItem = document.createElement("li");
                listItem.textContent = `${item.name} - R$${item.price.toFixed(2)}`;
                cartList.appendChild(listItem);
                total += item.price;
            });

            document.getElementById("cart-total").textContent = `R$${total.toFixed(2)}`;
        }

        document.getElementById("checkout").addEventListener("click", () => {
            if (cart.length === 0) {
                alert("Seu carrinho está vazio!");
            } else {
                alert("Pedido finalizado! Obrigado por comprar conosco.");
                cart = [];
                updateCart();
            }
        });
    </script>


@endsection
