<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>E-mail klient</title>
    <link rel="stylesheet" href="views/style.css">
</head>
<body>
    <main>
        
        <header>Wyślij e-mail</header>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <label for="mailfrom">OD:</label>
            <select name="mailfrom" id="mailfrom">
                <?php
                $files = array_diff(scandir('./etc/'), array('.', '..'));
                foreach ($files as $value) {
                    $value = explode(".", $value);
                    echo '<option value="'.$value[1].'">'.$value[1].'</option>';
                }
                ?>
        </select>
        <br><br>

        <label for="mailto">DO:</label>
        <input name="mailto" id="mailto" type="email" placeholder="Wprowadź nazwę">
        <br><br>
        
        <label for="subject">Temat:</label>
        <input name="subject" id="subject" type="text" placeholder="Wprowadź temat"> 
        <br><br>
        
        <label for="body">Treść:</label>
        <textarea name="body" id="body" rows="5" placeholder="Wpisz treść"></textarea>
        <br><br>
        
        <label for="files" id="lf">Plik</label>
        <input name="files" id="files" multiple="multiple" class="form-control" type="file" hidden>
        <br><br>
        <button type="submit" name="send">Wyślij</button> 
        </form>
        <footer>&copy; Copyright Damian Pęczak</footer>
    </main>
</body>
</html>