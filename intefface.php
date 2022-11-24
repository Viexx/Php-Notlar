<?php


interface VehicleInterFace
{
    public function Gear($vehicleID);
    public function Fuel();
}

class vehicle implements VehicleInterFace{
    public function Gear($vehicleID)
    {
        
    }
    public function Fuel()
    {
        
    }
    /*daha düzgün kod yazılmasını sağlar */
}
?>