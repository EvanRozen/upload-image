<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="stylesheet" href="./assets/uploadPreview.css">
</head>

<header>

    <h1>Module d'enregistrement d'images.</h1>
    <p>Mise en pratique PHP :Upload d'images</p>



</header>


<body>
    
    <main>
        <div class="left">
            <label for="fileToUpload">veuillez choisir une image :</label>

            <form action="" method="post" enctype="multipart/form-data">

                <input type="file" name="fileToUpload" id="fileToUpload"><br>

                <button type="submit">Upload</button>

            </form>
        </div>
        <div class="right">
            <img src="" alt="image preview" id="imgPreview">
        </div>
    </main>

</body>


<script src="./assets/script.js"></script>
<script src="./assets/uploadPreview.js"></script>
</html>