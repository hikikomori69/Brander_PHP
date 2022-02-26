<?php 

function getDirectoryInfo(string $path)
{
    if(file_exists($path)){
        static $recursionDeep = 0;
        if(is_dir($path)){
            $handle = opendir($path);
            while ($file = readdir($handle)){
                if ($file == '.' || $file == '..'){
                    continue;
                }
                if (is_dir ("$path/$file") ) {
                    echo (str_repeat("&nbsp", 4 * $recursionDeep) . "D - $file") . '   ----   ';
                    echo substr(sprintf("%o", fileperms("$path/$file")), -3) . '    size --- ';
                    echo filesize("$path/$file") . 'B';
                    echo '<br>';
                    $recursionDeep++;
                    getDirectoryInfo("$path/$file");
                    $recursionDeep--;
                } else {
                    echo str_repeat("&nbsp", 4 * $recursionDeep) . "F - $file" . '   ----   ' ;
                    echo substr(sprintf("%o", fileperms("$path/$file")), -3) . '    size --- ';
                    echo filesize("$path/$file") . 'B';
                    echo '<br>';
                }
            }
        } else {
            echo str_repeat("&nbsp", 4 * $recursionDeep) . "F - $path" . '   ----   ' ;
            echo substr(sprintf("%o", fileperms("$path")), -3) . '    size --- ';
            echo filesize("$path") . 'B';
            echo '<br>';
        }
    } else {
        return 'file does not exist';
    }
}

echo getDirectoryInfo('/home/smooth9/Desktop/PHP_BRANDER/lesson7/task1/');