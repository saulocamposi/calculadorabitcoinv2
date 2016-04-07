<?php
   $service =  json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?key=AIzaSyCxeiJQYOGhlJccDZLITSfHpVo-xfY4OJw&channelId=UCqNCLd2r19wpWWQE6yDLOOQ&part=snippet,id&order=date&maxResults=20"));

   $items = $service->items;

   $movie1 =  $items[0]->id->videoId;
   $movie2 =  $items[1]->id->videoId;
   $movie3 =  $items[2]->id->videoId;

   $movie =
   array(
     "movie1" => $movie1 ,
     "movie2" => $movie2 ,
     "movie3" => $movie3 ,
     );

   $movies = json_encode($movie);

   echo $movies;
?>
