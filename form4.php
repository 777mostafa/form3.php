<html>
    <head>
        <title>session 15</title>
        <style type="text/css">
            *{margin:0; padding:0}
            input,label, select, textarea{display: block; margin:5px}
        </style>
    </head>
    <body>
        <?php
           if(isset($_POST['upload'])) {
               // collect data 
               print_r($_FILES);
           }
           
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <label>profile image</label>
            <input type="file" name="profile" />
            <input type="submit" name="upload" value="upload"/>
        </form>
    </body>
</html>
