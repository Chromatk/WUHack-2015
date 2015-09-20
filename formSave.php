<html>
    <body>
    
        <p><?php
        $file = "formLog.txt";
        $txt = $_POST["text"];

        $content = $txt . "\n" . file_get_contents($file);
        file_put_contents($file, $content);

        echo file_get_contents($file);
        ?></p>
        
    </body>
</html>