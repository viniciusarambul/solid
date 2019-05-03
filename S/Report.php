<?php

class Report
{

    public function getTitle(){
      return 'Report Titulo';
    }

    public function getDate(){
      return date('d/m/Y');
    }

    public function getContents()
    {
      return [
          'title' => $this->getTitle(),
          'date' => $this->getDate(),
      ];
    }

    public function formatJson(){
      return json_encode($this->getContents());
    }

}

class JsonReportFormatter
{
    public function format(Report $report){
      return json_encode($report->getContents());
    }

}


 ?>
