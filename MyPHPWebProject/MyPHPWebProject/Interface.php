<?php

/**
 * Interface short summary.
 *
 * Interface description.
 *
 * @version 1.0
 * @author Sarkuler
 */
interface video
{
    public function getVideo();
    public function getCount();
}

class movie implements video{

    #region video Members

    /**
     *
     * @return void
     */
    function getVideo()
    {
        echo 1;
    }

    /**
     *
     * @return void
     */
    function getCount()
    {
        echo 2;
    }

    #endregion
}

movie::getCount();
