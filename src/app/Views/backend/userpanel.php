<!-- app/Vistas/frontend/userpanel.php -->
<!DOCTYPE html >
<html lang ="es" >
<cabeza>
    <meta charset ="UTF-8" >
    <título> Panel de usuario </título>
    <estilo>
        cuerpo {
        familia de fuentes : system-ui , sans-serif ;
        color de fondo : #f4f5f9 ;
        margen : 0 ;
        relleno : 2 rem ;
        color : #1a1a1a ;
        }
        . tarjeta {
        ancho máximo : 480 px ;
        fondo : #fff ;
        radio del borde : 14 px ;
        caja-sombra : 0 20 px 40 px rgb ( 0 0 0 / 8 %);
        relleno : 1,5 rem 2 rem ;
        margen : 0 automático ;
        }
        . título {
        tamaño de fuente : 1.25 rem ;
        peso de fuente : 600 ;
        margen : 0 0 .5 rem ;
        }
        . sub {
        color : #555 ;
        margen : 0 0 1.5 rem ;
        tamaño de fuente : .95 rem ;
        altura de línea : 1.4 ;
        }
        . fila {
        pantalla : flex ;
        justificar-contenido : espacio-entre ;
        margen inferior : .75 rem ;
        tamaño de fuente : .9 rem ;
        }
        . etiqueta-de-fila {
        color : #666 ;
        }
        . cerrar sesión-btn {
        pantalla : bloque en línea ;
        fondo : #e74c3c ;
        color : #fff ;
        decoración de texto : ninguna ;
        relleno : .6 rem 1 rem ;
        radio del borde : 8 px ;
        peso de fuente : 500 ;
        }
        . logout-btn : pasar el cursor {
        fondo : #c0392b ;
        }
    </estilo>
</cabeza>
<cuerpo>

    <div class ="tarjeta" >
        <!--<p class ="title" > Hola, <?php /*= htmlspecialchars ( $_SESSION [ 'nombre de usuario' ]) */?> </p>
        <p class ="perfil" > Su tipo de perfil es: <?php /*= htmlspecialchars ( $_SESSION [ 'type' ]) */?> </p>-->
        <p clase ="sub" >
            Bienvenido a tu panel de usuario. Desde aquí podrás ver tu información básica,
            Edita tu perfil y cierra sesión.
        </p>

        <div class ="fila" >
            <span class ="row-label" > Usuario: </span>
            <!--<span> <?php /*= htmlspecialchars ( $_SESSION [ 'nombre de usuario' ]) */?> </span>-->
        </div>

        <div class ="fila" >
            <span class ="row-label" > Tipo de cuenta: </span>
            <span> Usuario normal </span>
        </div>

        <div class ="fila" >
            <span class ="row-label" > sesión UUID: </span>
            <span> <?= htmlspecialchars ( $_SESSION [ 'uuid' ] ?? 'n/d' ) ?> </span>
        </div>

        <hr style =" margen : 1.5 rem 0 ; borde : 0 ; borde superior : 1 px sólido #eee ; " >

        <a class ="logout-btn" href ="/logout" > Cerrar sesión </a>
    </div>

</cuerpo>
</html>