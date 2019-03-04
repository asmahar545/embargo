<?php

namespace Drupal\drupalup_simple_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Our simple form class.
 */
class SimpleForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'drupalup_simple_form';
  }

 

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  //connexion à la BD
  $connection = \Drupal::database();

  # les valeurs pour la liste déroulante
  // 1,2,3,4 sont les valeurs à récupérer
  //

 $form['type_options'] = array (
  '#type' => 'valeur',
  '#value' => array ('1' =>t('Selection'),
                    '2' =>t('Application'),
                    '3' =>t('Développement'),
                    '4' =>t('Enhancement'))
);

//affichage du selct
$form['type'] = array (
  '#title' => t('Type de projet'),
  '#type' => 'select',
  '#description' => "Sélectionnez le type de compte du projet.",

  '#options' => $form ['type_options'] ['#value'],
);
    $form['example_select'] = [
   '#type' => 'select',
   '#title' => $this
    ->t('Select organisation'),
   '#options' => [
    '1' => $this
      ->t('One'),
    '2' => [
      '2.1' => $this
        ->t('Two point one'),
      '2.2' => $this
        ->t('Two point two'),
    ],
    '3' => $this
      ->t('Three'),
  ],
];
    $form['number_1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First number'),
    ];

    $form['number_2'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Second number'),
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Calculate'),
    ];
    
    return $form;
  }
  

  
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    //connexion à la BD
    $connection = \Drupal::database();
    // DEFINITION DE LA REQUETE
   
    //compte le nombre de ligne de la table "batch"
    $number_of_rows = $connection->select('organisations')->countQuery()->execute()->fetchField();
 
    drupal_set_message($this->t('Your phone number is @number', ['@number' => $form_state->getValue('phone_number')]));
  
   drupal_set_message($form_state->getValue('number_1') + $form_state->getValue('number_2'));
   drupal_set_message($form_state->getValue('example_select'));
   drupal_set_message($form_state->getValue('type'));
 
    
  
  }

}
