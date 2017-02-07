    <?php
//3. Създайте програма, която да:
//създаде директория
//вземе съдържанието на произволна web страница и да го запише във файл в тази директория
//премахне всички тагове ( <anytag> or </anytag> )и да запише резултата в друг файл
////////////////////////////////////////////////////////////////
    echo "<pre>";
    echo "@line: " . __LINE__ . " Create a directory, get the data of web page and write it in file in the directory that we create. Remove all tags and save it in another file:\n";
    $tempdir1 = __DIR__.'/files';
    $fileDir = __DIR__.'/files/simpleTextFile.txt';
    $finalOutputFile = __DIR__.'/files/finalFileWithoutTags.txt';
    
    if(!is_dir(__DIR__.'/files')){
        mkdir($tempdir1.'/../files',0755, true);
        echo "You create the \"". $tempdir1."\n";
    }else{ 
        echo "Dir is exist, we go forward: \n";
    }
    if(file_exists($fileDir)){
        unlink($fileDir);
    } 
    if(file_exists($finalOutputFile)){
        unlink($finalOutputFile);
    }
    $remoteContents = file_get_contents('http://www.abv.bg');
    file_put_contents($fileDir, $remoteContents, FILE_APPEND);
    

    $content = @fopen($fileDir, "r");
    $readTime = stream_get_contents($content); 
    $readTime = preg_replace('~<[^>]*>~', "", $readTime);  
    file_put_contents($finalOutputFile, $readTime); 
     