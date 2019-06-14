<?php

class  Depth
{
    /*
   * * @param $input array or object
   *   @param $depth integer
   *   @return void
   */

    public function printDepth($input, $depth = 1)
    {
        foreach ($input as $key => $value) {

            if (is_array($value)) {
                echo $key . " " . $depth . "\r\n";
                $this->printDepth($value, $depth + 1);

            } elseif (is_object($value)) {
                echo $key . ": " . $depth . "\r\n";
                $this->printObject($value, $depth);

            } else {
                echo $key . " " . $depth . "\r\n";

            }
        }
    }


    /*
     * @param $value object
     * @param $depth
     * @return void
     */
    protected function printObject($value, $depth)
    {
        $depth = $depth + 1;
        foreach ($value as $o => $v) {
            if (is_object($v)) {
                echo $o . ": " . $depth . "\r\n";
                $this->printObject($v, $depth);
            } else {
                echo $o . ": " . $depth . "\r\n";
            }

        }
    }


}