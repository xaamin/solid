<?php
namespace NullData\MediaPlayer;

class VideoManager
{
    public function playWith(VideoPlayer $player, $video)
    {
        $player->play($video);
    }
}