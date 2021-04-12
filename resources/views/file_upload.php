<!DOCTYPE html>
<html>
<body>
    <?php
        echo "File uploading test";
        echo Form::open(array('url' => '/uploadfile', 'files' => 'true'));
        echo "Select the file to upload";
        echo Form::file('image'); echo "<br>";
        echo Form::submit('Send');
        echo Form::close();
    ?>
</body>
</html>