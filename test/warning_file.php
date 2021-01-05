<?php
$global_xx=1;
class Test
{
    public function __construct(bool $should_run=true)
    {
    	global $global_xx;
    	$x=$global_xx;
        $variableNameThatIsWayTooLong = 0;

    }
}
