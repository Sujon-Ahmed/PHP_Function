<?php

    // echo strtotime('next day');

    // echo date('d-M-Y',strtotime('next years'));

    echo date('d M, Y',strtotime('next month')).'<br/>';

    echo date('d M, Y',strtotime('previous month')).'<br/>';

    echo date('l',strtotime('next day')).'<br/>';

    echo date('d M, Y',strtotime('+ 1 month')).'<br/>';

    echo date('Y',strtotime('+ 2 years')).'<br/>';

    echo date('d M, Y',strtotime('06 August 2015')).'<br/>';

    echo date('d M, Y',strtotime('26 august 1986 + 30 years')).'<br/>';

    echo date('d M, Y',strtotime('January 12 2016 - 8 weeks'));


?>