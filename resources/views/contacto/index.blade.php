
<?php
        include('../resources/views/header.php')

    ?>


<section class="ctnr_contacto">

    <h2>Realiza consultas</h2>
    <form action="{{route('contacto.enviar')}}" method="POST">

        @csrf

        <label>
            Nombre: <br>
            <input type="text" name="nombre" placeholder="Nombre" class="contacto_input" required>
        </label>
        <br>
        @error('nombre')
            <p>{{message}}</p>
        @enderror

        <label>
            Apellido: <br>
            <input type="text" name="apellido" placeholder="Apellido" class="contacto_input" required>
        </label>
        <br> 
        @error('apellido')
            <p>{{message}}</p>
        @enderror


        <label>
            Email <br>
            <input type="email" name="correo" placeholder="Email" class="contacto_input" required>   
        </label>
        <br>
        @error('correo')
            <p>{{message}}</p>
        @enderror

        
        <label>
            Mensaje: <br>
            <textarea name="mensaje" placeholder="mensaje" required></textarea>  
        </label>
        @error('Mensaje')
            <p>{{message}}</p>
        @enderror

        
        <br>
        <input type="submit" value="Enviar consulta" class="contacto_btn">


    </form>

    @if(session('alerta'))
        <script>
            alert("{{session('alerta')}}");
        </script>
    @endif

</section>


</body>
</html>