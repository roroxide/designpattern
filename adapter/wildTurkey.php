<?php

include_once __DIR__."/abstracts/turkey.php";

class WildTurkey implements Turkey
{
    public function gobble()
    {
        echo "Gobble gobble\n";
    }

    public function fly()
    {
        echo "I'm flying a short distance\n";
    }
}
