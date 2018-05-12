<?php

namespace App\forms;

use Kris\LaravelFormBuilder\Form;

class JournalForm extends Form
{
    public function buildForm()
    {
        $this->formOptions = [
            'method' => 'POST',
            'url' => route('journal.store')
        ];


        $this->add('C_NOM' , 'text', [
            'label' => 'Nom',
            'rules' => 'required|min:2|max:20'] );

        $this->add('C_IBAN' , 'text',[
            'label' => 'Iban',
            'rules' => 'required|min:2|max:34'] );

        $this->add('C_BIC' , 'text', [
            'label' => 'Bic',
            'rules' => 'required|min:2|max:11']);

        $this->add('N_SOLDE' , 'text', [
            'label' => 'Solde',
            'rules' => 'required|numeric']);

        $this->add('C_STATUT', 'select', [
            'label' => 'Statut',
            'choices' => ['Actif' => 'Actif', 'Inactif' => 'Inactif'],
            'selected' => 'Actif',
            'empty_value' => null
        ]);

        $this->add('submit' , 'submit',  ['label' => 'Soumettre' , 'attr' => ['class' => 'btn btn-success'] ]);

    }
}
