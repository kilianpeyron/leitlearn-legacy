<?php
namespace App\View\Cell;

use Cake\View\Cell;

class KeywordsCell extends Cell
{
    public function display()
    {
        $keywords = $this->fetchTable("Keywords")->find();

        $this->set('keywords', $keywords->toArray());
    }

    public function selected(int $packet_id = NULL)
    {
        $keywords = $this->fetchTable("Keywords")->find()->toArray();

        if(!is_null($packet_id)) {
            foreach ($keywords as $keyword) {
                if (
                    $this->fetchTable("PacketsKeywords")
                        ->find()
                        ->where(['packet_id' => $packet_id, 'keyword_id' => $keyword['id']])
                        ->count() == 1
                ) {
                    $keyword['exist'] = 1;
                }
            }
        }

        $this->set('keywords', $keywords);
    }
}