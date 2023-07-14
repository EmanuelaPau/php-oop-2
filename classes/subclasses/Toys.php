<?php
class Toy
{
    public $type;
    public $material;

    public function __construct(string $type, string $material)
    {
        $this->type = $type;
        $this->material = $material;
    }

}
?>