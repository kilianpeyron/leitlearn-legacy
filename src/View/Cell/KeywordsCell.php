<?php
namespace App\View\Cell;

use Cake\View\Cell;

class KeywordsCell extends Cell
{
    public function display()
    {
        $keywords = $this->fetchTable("Keywords")->find();

        foreach ($keywords as $keyword) {
            $keyword->bg = $this->getStyles($keyword->word, 'bg');
            $keyword->fill = $this->getStyles($keyword->word, 'fill');
            $keyword->icon = $this->getStyles($keyword->word, 'icon');
        }

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

    public function getStyles(string $word, string $field) {
        $validFields = array(
            'icon',
            'bg',
            'fill'
        );


        $categoryData = array(
            'Mathematiques' => array(
                'icon' => 'function',
                'bg' => '#0074D9',
                'fill' => '#B3E0FF'
            ),
            'Langues' => array(
                'icon' => 'translate',
                'bg' => '#2ECC40',
                'fill' => '#DFF9E2'
            ),
            'Histoire' => array(
                'icon' => 'history_edu',
                'bg' => '#FF4136',
                'fill' => '#FFC3B0'
            ),
            'Geographie' => array(
                'icon' => 'public',
                'bg' => '#FF851B',
                'fill' => '#FFD8B2'
            ),
            'Litterature' => array(
                'icon' => 'book',
                'bg' => '#B10DC9',
                'fill' => '#E8CEF7'
            ),
            'Arts' => array(
                'icon' => 'palette',
                'bg' => '#FFDC00',
                'fill' => '#FFF8C6'
            ),
            'Musique' => array(
                'icon' => 'music_note',
                'bg' => '#FF6300',
                'fill' => '#FFD1B2'
            ),
            'Sociales' => array(
                'icon' => 'groups',
                'bg' => '#7D3C98',
                'fill' => '#D8B4E2'
            ),
            'Programmation' => array(
                'icon' => 'code',
                'bg' => '#39CCCC',
                'fill' => '#B2EBF2'
            ),
            'Psychologie' => array(
                'icon' => 'psychology',
                'bg' => '#001F3F',
                'fill' => '#428BCA'
            ),
            'Philosophie' => array(
                'icon' => 'light',
                'bg' => '#4B0082',
                'fill' => '#9678D3'
            ),
            'Economie' => array(
                'icon' => 'account_balance',
                'bg' => '#FF851B',
                'fill' => '#FFD8B2'
            ),
            'Biologie' => array(
                'icon' => 'biotech',
                'bg' => '#39CCCC',
                'fill' => '#B2EBF2'
            ),
            'Chimie' => array(
                'icon' => 'science',
                'bg' => '#FFDC00',
                'fill' => '#FFF8C6'
            ),
            'Cuisine' => array(
                'icon' => 'skillet',
                'bg' => '#FF6300',
                'fill' => '#FFD1B2'
            ),
            'Sante' => array(
                'icon' => 'spa',
                'bg' => '#39CCCC',
                'fill' => '#B2EBF2'
            ),
            'Sport' => array(
                'icon' => 'fitness_center',
                'bg' => '#001F3F',
                'fill' => '#428BCA'
            ),
            'Technologie' => array(
                'icon' => 'devices',
                'bg' => '#34495E',
                'fill' => '#BDC3C7'
            ),
            'Cinema' => array(
                'icon' => 'movie',
                'bg' => '#B10DC9',
                'fill' => '#E8CEF7'
            ),
            'Science' => array(
                'icon' => 'genetics',
                'bg' => '#8E44AD',
                'fill' => '#D8B4E2'
            )
        );

        if (isset($categoryData[$word]) && in_array($field, $validFields)) {
            return $categoryData[$word][$field];
        } else {
            return null;
        }
    }
}