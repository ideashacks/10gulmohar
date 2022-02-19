<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'admin@ideashacks.com',
    'to' => 'initiatives@ideashacks.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Full Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Full Name\' is required.'
    )
    ),
    'phone' => array(
    'order' => 2,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'email' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Work Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Work Email\' is required.'
    )
    ),
    'company-name' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Company Name',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Company Name\' is required.'
    )
    ),
    'Requirements' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Requirements',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Requirements\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>