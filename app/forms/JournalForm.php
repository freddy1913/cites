<?php

namespace App\forms;

use Kris\LaravelFormBuilder\Form;

class JournalForm extends Form
{
    public function buildForm()
    {
        $this->add('C_NOM' , 'text', ['label' => 'Nom' , 'rules' => 'required|min:2|max:10'] );
        $this->add('C_IBAN' , 'text',['label' => 'Iban']);

        $this->add('C_BIC' , 'text', ['label' => 'Bic']);
        $this->add('N_SOLDE' , 'text', ['label' => 'Solde']);
        $this->add('C_STATUT', 'text', ['label' => 'Statut']);

        $this->add('submit' , 'submit',  ['label' => 'Soumettre' , 'attr' => ['class' => 'btn btn-success'] ]);

    }
}
