<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class TraduzioneStringhe extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $traduzioneStringhe = new FieldsBuilder('traduzione_stringhe');

        $traduzioneStringhe
            ->setLocation('options_page', '==', 'theme-general-settings');

        $traduzioneStringhe
            ->addGroup('string_translation')
                ->addText('first', [
                    'label' => 'First'
                ])
                ->addText('second', [
                    'label' => 'Second'
                ])
                ->addText('third', [
                    'label' => 'Third'
                ])
                ->addText('fourth', [
                    'label' => 'Fourth'
                ])
            ->endGroup();

        return $traduzioneStringhe->build();
    }
}
