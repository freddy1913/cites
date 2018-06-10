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


        $this->add('nom' , 'text', [
            'label' => 'Nom',
            'rules' => 'required|min:2|max:20'] );

        $this->add('iban' , 'text',[
            'label' => 'Iban',
            'rules' => 'required|min:2|max:34'] );

        $this->add('bic' , 'text', [
            'label' => 'Bic',
            'rules' => 'required|min:2|max:11']);

        $this->add('solde' , 'text', [
            'label' => 'Solde',
            'rules' => 'required|numeric']);

        $this->add('statut', 'select', [
            'label' => 'Statut',
            'choices' => ['Actif' => 'Actif', 'Inactif' => 'Inactif'],
            'selected' => 'Actif',
            'empty_value' => null
        ]);

        $this->add('submit' , 'submit',  ['label' => 'Soumettre' , 'attr' => ['class' => 'btn btn-success'] ]);

    }
}
