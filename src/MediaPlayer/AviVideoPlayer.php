<?php
namespace NullData\MediaPlayer;

class AviVideoPlayer extends VideoPlayer
{
    public function play($video)
    {
        $tmp = explode('.', $video);

        $extension = array_pop($tmp);
        if ($extension == 'avi') {
            // Play the video
            echo "Playing with AviVideoPlayer $video \n";
            return true;
        }

        return false;
    }
}