<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botones, Selección de Fechas y Subida de Archivos</title>
    <style>
        .button-container, .file-upload, .date-selection, .status-indicator {
            margin-bottom: 20px;
        }
        .button-container button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        #type-a { background-color: #3498db; color: white; }
        #type-b { background-color: #2ecc71; color: white; }
        #type-c { background-color: #f1c40f; color: white; }
        #type-d { background-color: #e74c3c; color: white; }
        #type-e { background-color: #9b59b6; color: white; }
        .status-indicator select {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="button-container">
    <button id="type-a">Tipo A</button>
    <button id="type-b">Tipo B</button>
    <button id="type-c">Tipo C</button>
    <button id="type-d">Tipo D</button>
    <button id="type-e">Tipo E</button>
</div>

<div class="date-selection">
    <label for="start-date">Fecha de inicio:</label>
    <input type="date" id="start-date" name="start-date">
</div>
<br>
<div class="date-selection">
    <label for="end-date">Fecha de salida:</label>
    <input type="date" id="end-date" name="end-date">
</div>

<div class="file-upload">
    <label for="file-upload">Subir archivo PDF:</label>
    <input type="file" id="file-upload" name="file-upload" accept="application/pdf">
</div>

<div class="status-indicator">
    <label for="status">Estado:</label>
    <label id="status" name="status">
        <input type="text" value="Pendiente" readonly></input>
    </label>
</div>

<script>
    document.getElementById('type-a').addEventListener('click', () => {
        console.log('Botón Tipo A clickeado');
    });
    document.getElementById('type-b').addEventListener('click', () => {
        console.log('Botón Tipo B clickeado');
    });
    document.getElementById('type-c').addEventListener('click', () => {
        console.log('Botón Tipo C clickeado');
    });
    document.getElementById('type-d').addEventListener('click', () => {
        console.log('Botón Tipo D clickeado');
    });
    document.getElementById('type-e').addEventListener('click', () => {
        console.log('Botón Tipo E clickeado');
    });

    document.getElementById('file-upload').addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file && file.type === 'application/pdf') {
            console.log('Archivo PDF seleccionado:', file.name);
        } else {
            console.log('Por favor, seleccione un archivo PDF.');
        }
    });
</script>

</body>
</html>