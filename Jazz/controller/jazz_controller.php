<?php
    require_once ('../model/jazz_model.php');
    class JazzController extends JazzModel
    {
        public function recieveData()
        {
            $JazzModel = new JazzModel();
            $row = $JazzModel->getData();
            return $row;
        }
    }
?>