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
                    echo (str_repeat(" ", 4 * $recursionDeep) . "D - $file") . '   ----   ';
                    echo substr(sprintf("%o", fileperms("$path/$file")), -3) . '    size --- ';
                    echo filesize("$path/$file") . 'B' . PHP_EOL;
                    $recursionDeep++;
                    getDirectoryInfo("$path/$file");
                    $recursionDeep--;
                } else {
                    echo str_repeat(" ", 4 * $recursionDeep) . "F - $file" . '   ----   ' ;
                    echo substr(sprintf("%o", fileperms("$path/$file")), -3) . '    size --- ';
                    echo filesize("$path/$file") . 'B' . PHP_EOL;
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
if (isset($argv[1])){
    echo getDirectoryInfo($argv[1]);
} else {
    echo 'Warning! Required first agrement as path. 0 given';
}
