    //Variable que mantiene el estado visible del carrito
    var carritoVisible = false;

    //Espermos que todos los elementos de la pàgina cargen para ejecutar el script
    if(document.readyState == 'loading'){
        document.addEventListener('DOMContentLoaded', ready)
    }else{
        //alert("ready");
        ready();
    }

    function ready(){

        ocultarCarrito()
        //actualizarTotalCarrito()

            //Agregremos funcionalidad a los botones eliminar del carrito
            var botonesEliminarItem = document.getElementsByClassName('btn-eliminar');
            for(var i=0;i<botonesEliminarItem.length; i++){
                var button = botonesEliminarItem[i];
                button.addEventListener('click',eliminarItemCarrito);
            }
            /*
            var btcontar = document.getElementsByClassName('boton-contar');
            for(var i=0;i<btcontar.length; i++){
                var button = btcontar[i];
                button.addEventListener('click',contarr);
            }
            */

        //Agrego funcionalidad al boton sumar cantidad
        var botonesSumarCantidad = document.getElementsByClassName('sumar-cantidad');
        for(var i=0;i<botonesSumarCantidad.length; i++){
            var button = botonesSumarCantidad[i];
            button.addEventListener('click',sumarCantidad);
        }
             //Agrego funcionalidad al buton restar cantidad
        var botonesRestarCantidad = document.getElementsByClassName('restar-cantidad');
        for(var i=0;i<botonesRestarCantidad.length; i++){
            var button = botonesRestarCantidad[i];
            button.addEventListener('click',restarCantidad);
        }

            //Agregamos funcionalidad al boton Agregar al carrito
        var botonesAgregarAlCarrito = document.getElementsByClassName('boton-item');
        for(var i=0; i<botonesAgregarAlCarrito.length;i++){
            var button = botonesAgregarAlCarrito[i];
            button.addEventListener('click', agregarAlCarritoClicked);

        
    }

    }

    //Elimino el item seleccionado del carrito
    function eliminarItemCarrito(event){
        var buttonClicked = event.target;
        buttonClicked.parentElement.remove();
            //Actualizamos el total del carrito
            actualizarTotalCarrito();

            //la siguiente funciòn controla si hay elementos en el carrito
            //Si no hay elimino el carrito
            ocultarCarrito();
    }


    /* Cuenta elementos del carrito FUNCIONA 
    function contarr(){
        var carritoItems = document.getElementsByClassName('carrito-items')[0];
        var numeroDeElementos = carritoItems.getElementsByClassName('carrito-item').length;
        console.log("Número de elementos en el carrito: " + numeroDeElementos);

    }
    */

    /*
    function contarr(){
        var carritoItems = document.getElementsByClassName('carrito-items')[0];
        var numeroDeElementos = carritoItems.childElementCount;
        console.log("Número de elementos en el carrito: " + numeroDeElementos);

    }
    */

    function ocultarCarrito(){
    var carritoItems = document.getElementsByClassName('carrito-items')[0];
        if(carritoItems.childElementCount==0){
            //alert("ocultar carrito");
            var carrito = document.getElementsByClassName('sec-carrito')[0];
            carrito.style.display = 'none';
            carritoVisible = false;
        }
    }

    //Aumento en uno la cantidad del elemento seleccionado
    function sumarCantidad(event){
        var buttonClicked = event.target;
        var selector = buttonClicked.parentElement;
        //console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
        var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
        cantidadActual++;
        selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
        actualizarTotalCarrito();
    }

    //Resto en uno la cantidad del elemento seleccionado
    function restarCantidad(event){
        var buttonClicked = event.target;
        var selector = buttonClicked.parentElement;
        //console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
        var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
        cantidadActual--;
        if(cantidadActual>=1){
            selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
            actualizarTotalCarrito();
        }
    }

    //Funciòn que controla el boton clickeado de agregar al carrito
    function agregarAlCarritoClicked(event){
        var button = event.target;
        var item = button.parentElement;
        var titulo = item.getElementsByClassName('titulo-item')[0].innerText;
        var precio = item.getElementsByClassName('precio-item')[0].innerText;
        var imagenSrc = item.getElementsByClassName('img-item')[0].src;
        //console.log(titulo);
        //console.log(precio);
        console.log(imagenSrc);

        agregarItemAlCarrito(titulo, precio, imagenSrc);

        hacerVisibleCarrito();
    }

    //Funciòn que agrega un item al carrito
    function agregarItemAlCarrito(titulo, precio, imagenSrc){
        var item = document.createElement('div');
        item.style.border = '1px solid black'; 
        item.classList.add('row', 'g-0', 'carrito-item');
        var itemsCarrito = document.getElementsByClassName('carrito-items')[0];

        //controlamos que el item que intenta ingresar no se encuentre en el carrito
        var nombresItemsCarrito = itemsCarrito.getElementsByClassName('carrito-item-titulo');
        for(var i=0;i < nombresItemsCarrito.length;i++){
            if(nombresItemsCarrito[i].innerText==titulo){
                alert("El item ya se encuentra en el carrito");
                return;
            }
        }

        var itemCarritoContenido = `
                <div class="col-md-4" >
                    <img src="${imagenSrc}" class="img-fluid rounded-start" alt="..." style="max-width: 6em; max-height: 6em;">
                </div>
                <div class="col-md-8 carrito-item-detalles" style="border:1px solid black;">
                    <div class="card-body">
                        <p class="card-text carrito-item-titulo" style="border:1px solid black;"> 
                            <strong>${titulo}</strong> 
                        </p>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">${precio}</span> <br> 
                    </div>
                </div>
                <button class="btn-eliminar"> Sacar </button>  
        `
        item.innerHTML = itemCarritoContenido;
        itemsCarrito.append(item);

        //Agregamos la funcionalidad eliminar al nuevo item
        item.getElementsByClassName('btn-eliminar')[0].addEventListener('click', eliminarItemCarrito);

        //Agregmos al funcionalidad restar cantidad del nuevo item
        var botonRestarCantidad = item.getElementsByClassName('restar-cantidad')[0];
        botonRestarCantidad.addEventListener('click',restarCantidad);

        //Agregamos la funcionalidad sumar cantidad del nuevo item
        var botonSumarCantidad = item.getElementsByClassName('sumar-cantidad')[0];
        botonSumarCantidad.addEventListener('click',sumarCantidad);

        //Actualizamos total
        actualizarTotalCarrito();
    }

     //Actualizamos el total de Carrito
     function actualizarTotalCarrito() {
        // Seleccionamos el contenedor del carrito
        var carritoContenedor = document.getElementsByClassName('carrito')[0];
        var carritoItems = carritoContenedor.getElementsByClassName('carrito-item');
        var total = 0;
    
        // Recorremos cada elemento del carrito para actualizar el total
        for (var i = 0; i < carritoItems.length; i++) {
            var item = carritoItems[i];
            var precioElemento = item.getElementsByClassName('carrito-item-precio')[0];
    
            // Obtiene el precio y lo ajusta (dividiendo por 100)
            var precioTexto = precioElemento.innerText.replace('€', '').replace(/\./g, '').replace(',', '.').trim();
            var precio = parseFloat(precioTexto) / 100; // Dividimos por 100 para corregir el precio
    
            var cantidadItem = item.getElementsByClassName('carrito-item-cantidad')[0];
            var cantidad = parseFloat(cantidadItem.value);
    
            total += precio * cantidad;
        }
    
        // Asegura que el total tenga dos decimales y luego lo formatea
        var totalFormateado = total.toFixed(2);
    
        // Reemplaza el punto decimal por una coma y añade los separadores de miles
        totalFormateado = totalFormateado.replace('.', ',').replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    
        // Actualiza el total en el DOM con formato adecuado
        document.getElementsByClassName('carrito-precio-total')[0].innerText = totalFormateado + '€';
    }
    /*
         function actualizarTotalCarrito(){
        //seleccionamos el contenedor carrito
        var carritoContenedor = document.getElementsByClassName('carrito')[0];
        var carritoItems = carritoContenedor.getElementsByClassName('carrito-item');
        var total = 0;
        //recorremos cada elemento del carrito para actualizar el total
        for(var i=0; i< carritoItems.length;i++){
            var item = carritoItems[i];
            var precioElemento = item.getElementsByClassName('carrito-item-precio')[0];
            //console.log(precioElemento);

            //var precio = parseFloat(precioElemento.innerText.replace('€','').replace('.',''));
            var precioTexto = precioElemento.innerText.replace('€', '').replace(/\./g, '').replace(',', '').trim();
            var precio = parseFloat(precioTexto);

            var cantidadItem = item.getElementsByClassName('carrito-item-cantidad')[0];
            var cantidad = cantidadItem.value;
        

            //console.log(precio);
            //console.log(cantidad);
            total = total + (precio * cantidad);
            console.log(total);
        }
        var totalFormateado = total.toFixed(2);
        totalFormateado = totalFormateado.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        console.log(totalFormateado);
        //total = Math.round(total * 100)/100;
        //document.getElementsByClassName('carrito-precio-total')[0].innerText = total.toLocaleString("es") + ",00" + '€';
        //document.getElementsByClassName('carrito-precio-total')[0].innerText = total.toLocaleString("es") + '€';
        document.getElementsByClassName('carrito-precio-total')[0].innerText = totalFormateado + '€';

    }
    */



    //Funcion que hace visible el carrito
    function hacerVisibleCarrito(){
        carritoVisible = true;
        var carrito = document.getElementsByClassName('sec-carrito')[0];
        carrito.style.display = 'block';
    }