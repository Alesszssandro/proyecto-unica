<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
  <style>
        
        .encabezado{
            text-align: center;
            padding: 20px 0;
            background-color: rgb(48, 87, 169);
            color: #fff;
        }
        
        .galeria{
            display: flex;
            flex-wrap: wrap;
            padding: 10px 20px;
        }
        
        .columna{
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }
        
        .columna img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
            filter: grayscale(100%);
            transition: all .3s ease;
        }
        
        .columna img:hover {
            cursor: pointer;
            filter: grayscale(0%);
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
            transform: scale(1.1);
        }
        
        .overlay { 
            position: fixed;
            left: 0;
            top: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, .5);
            z-index: 10000;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all .7s ease;
            visibility: hidden;
            opacity: 0;
        }
        
        .overlay .slideshow {
            width: 90%;
            height: 90%;
            background-color: rgba(255, 255, 255, .9);
            color: #000;
            position: relative;
            display: flex;
            justify-content: center;
        }
        
        .slideshow img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }
        
        .btn_cerrar {
            position: absolute;
            top: -15px;
            right: -15px;
            font-size: 35px;
            background-color: rgba(0, 0, 0, .7);
            color: #fff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            transition: all .2s ease;
        }
        
        .btn_cerrar:hover {
            transform: scale(1.2);
            cursor: pointer;
        }
        
        .botones { 
            width: 70px;
            height: 70px;
            border-radius: 50px;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 70px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: rgb(240, 106, 45);
        }
        
        .botones:hover { 
            transform: scale(1.1);
            transition: all .2s ease;
        }
        
        .atras { 
            left: 20px;
        }
        
        .adelante { 
            right: 20px;
        }
        
        .mdi {
            pointer-events: none;
        }
        @media screen and (max-width: 800px){
            .columna {
                flex: 50%;
                max-width: 50%;
            }
            .botones{
                font-size: 55px;
            }
            .atras { 
                left: 5px;
            }
            .adelante {
                right: 5px;
            }
            .slideshow img {
                width: 98%;
            }
        }
        @media screen and (max-width: 600px) {
            .columna { 
                flex: 100%;
                max-width: 100%;
            }
        }
  </style>

</head>
<body>
    <div class="overlay">
        <div class="slideshow">
            <span class="btn_cerrar">&times;</span>
            <div class="botones adelante">
                <i class="mdi mdi-arrow-right-drop-circle"></i>
            </div>
            <div class="botones atras">
                <i class="mdi mdi-arrow-left-drop-circle"></i>
            </div>
            <img src="" alt="" id="img_slideshow">
        </div>
    </div>
    <header class="encabezado">
        <h1>Presupuesto Departamental 2024</h1>
    </header>
    <section class="galeria">
        <div class="columna">
            <img src="img/1.jpg" alt="" data-img-mostrar="0">
            <img src="img/2.jpg" alt="" data-img-mostrar="1">
            <img src="img/3.jpg" alt="" data-img-mostrar="2">
            <img src="img/4.jpg" alt="" data-img-mostrar="3">
            <img src="img/5.jpg" alt="" data-img-mostrar="4">
            <img src="img/6.jpg" alt="" data-img-mostrar="5">
        </div>
        <div class="columna">
            <img src="img/7.jpg" alt="" data-img-mostrar="6">
            <img src="img/8.jpg" alt="" data-img-mostrar="7">
            <img src="img/9.jpg" alt="" data-img-mostrar="8">
            <img src="img/10.jpg" alt="" data-img-mostrar="9">
            <img src="img/11.jpg" alt="" data-img-mostrar="10">
            <img src="img/12.jpg" alt="" data-img-mostrar="11">
            <img src="img/13.jpg" alt="" data-img-mostrar="12">
        </div>
        <div class="columna">
            <img src="img/14.jpg" alt="" data-img-mostrar="13">
            <img src="img/15.jpg" alt="" data-img-mostrar="14">
            <img src="img/16.jpg" alt="" data-img-mostrar="15">
            <img src="img/17.jpg" alt="" data-img-mostrar="16">
            <img src="img/18.jpg" alt="" data-img-mostrar="17">
            <img src="img/19.jpg" alt="" data-img-mostrar="18">
            <img src="img/20.jpg" alt="" data-img-mostrar="19">
        </div>
        <div class="columna">
            <img src="img/21.jpg" alt="" data-img-mostrar="20">
            <img src="img/22.jpg" alt="" data-img-mostrar="21">
            <img src="img/23.jpg" alt="" data-img-mostrar="22">
            <img src="img/24.jpg" alt="" data-img-mostrar="23">
            <img src="img/25.jpg" alt="" data-img-mostrar="24">
            <img src="img/26.jpg" alt="" data-img-mostrar="25">
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function(){
        let imagenes = [
            {img: '/img/1.jpg'}, 
            {img: '/img/2.jpg'}, 
            {img: '/img/3.jpg'}, 
            {img: '/img/4.jpg'}, 
            {img: '/img/5.jpg'}, 
            {img: '/img/6.jpg'}, 
            {img: '/img/7.jpg'}, 
            {img: '/img/8.jpg'}, 
            {img: '/img/9.jpg'}, 
            {img: '/img/10.jpg'},
            {img: '/img/11.jpg'}, 
            {img: '/img/12.jpg'}, 
            {img: '/img/13.jpg'}, 
            {img: '/img/14.jpg'}, 
            {img: '/img/15.jpg'}, 
            {img: '/img/16.jpg'}, 
            {img: '/img/17.jpg'}, 
            {img: '/img/18.jpg'}, 
            {img: '/img/19.jpg'}, 
            {img: '/img/20.jpg'}, 
            {img: '/img/21.jpg'}, 
            {img: '/img/22.jpg'}, 
            {img: '/img/23.jpg'}, 
            {img: '/img/24.jpg'}, 
            {img: '/img/25.jpg'}, 
            {img: '/img/26.jpg'},  
        ]
        let contador = 0
        const contenedor = document.querySelector('.slideshow')
        const overlay = document.querySelector('.overlay')
        const galeria_imagenes = document.querySelectorAll('.galeria img')
        const img_slideshow = document.querySelector('.slideshow img')
        contenedor.addEventListener('click', function(event){
            let atras = contenedor.querySelector('.atras'),
            adelante = contenedor.querySelector('.adelante'),
            img = contenedor.querySelector('img'),
            tgt = event.target
            if (tgt == atras) {
                if (contador > 0 ){
                    img.src = imagenes [contador - 1].img
                    contador--
                } else {
                    img.src = imagenes [imagenes.length - 1].img
                    contador = imagenes.length - 1
                }
            } else if (tgt == adelante) {
                if (contador < imagenes.length - 1) {
                   img.src =imagenes[contador+1].img
                   contador++
                }else { 
                   img.src=imagenes[0].img
                   contador = 0 
                }
            }   
        })
        Array.from(galeria_imagenes).forEach(img =>{
            img.addEventListener('click', event =>{
                const imagen_seleccionada = +event.target.dataset.imgMostrar
                img_slideshow.src = imagenes [imagen_seleccionada].img
                contador = imagen_seleccionada
                overlay.style.opacity=1
                overlay.style.visibility= 'visible'
            })
        })
        document.querySelector('.btn_cerrar').addEventListener('click',() =>{
            overlay.style.opacity=0
            overlay.style.visibility='hidden'
        })
    })
    </script>
</body>
</html>
