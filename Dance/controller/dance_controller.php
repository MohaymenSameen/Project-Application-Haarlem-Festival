<?php
    require_once ('../model/dance_model.php');
    class DanceController extends DanceModel
    {       
        public function recieveData()
        {            
            $row = $this->getData();
            
            return $row;
        }
        public function recieveTimetable1()
        {                        
            $row = $this->getTimetable1();       
            return $row;
        }
        public function recieveTimetable2()
        {                     
            $row = $this->getTimetable2();            
            return $row;
        }
        public function recieveTimetable3()
        {                        
            $row = $this->getTimetable3();            
            return $row;
        }
        public function recieveTimetable4()
        {                        
            $row = $this->getTimetable4();            
            return $row;
        }
    }
?>