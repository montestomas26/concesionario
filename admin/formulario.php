<div class="container">
    <section class="upload-form">
        <h2>Subir nueva moto</h2>
        <form action="subir_moto.php" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required>

            <button type="submit" name="submit">Subir Moto</button>
            <a href="../index.php" class="boton">Volver al menu</a>
        </form>
    </section>
</div>



<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        background: #4A4A4A;
        padding: 12px;

    }

    .upload-form {
        max-width: 600px;
        margin: 0 auto;
        padding: 2em;
        background: #4A4A4A;
        border-radius: 8px;
        box-shadow: -1px 14px 54px -7px rgba(254, 255, 245, 0.5);
    }

    .upload-form h2 {
        text-align: center;
        margin-bottom: 1em;
        color: #DBF10E;
    }

    .upload-form form {
        display: flex;
        flex-direction: column;
    }

    .upload-form label {
        margin-bottom: 0.5em;
        font-weight: bold;
        color: #DBF10E;
    }

    .upload-form input[type="text"],
    .upload-form textarea,
    .upload-form input[type="file"] {
        margin-bottom: 1em;
        padding: 0.8em;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1em;
    }

    .upload-form textarea {
        resize: none;
    }

    .upload-form button {
        padding: 0.8em;
        background-color: #110101;
        border: none;
        color: #DBF10E;
        font-size: 1em;
        cursor: pointer;
        border-radius: 4px;
        transition: opacity 0.3s ease;
    }

    .upload-form button:hover {
        opacity: 0.8;
    }

    .upload-form button:active {
        background-color: #1e7e34;
    }

    .boton{
        text-align: center;
        text-decoration: none;
        width: 30%;
        padding: 12px;
        margin-top: 3em;
        background-color: #DBF10E!important;
        color: black !important;
        border: #110101 1px solid;
        border-radius:  18px;
        transition: opacity 0.3s ease;


    }

    .boton:hover{
        opacity: 80%;
    }
</style>