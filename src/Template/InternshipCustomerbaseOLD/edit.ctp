<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipCustomerbase $internshipCustomerbase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $internshipCustomerbase->internship_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $internshipCustomerbase->internship_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Internship Customerbase'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customerbases'), ['controller' => 'Customerbases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customerbase'), ['controller' => 'Customerbases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipCustomerbase form large-9 medium-8 columns content">
    <?= $this->Form->create($internshipCustomerbase) ?>
    <fieldset>
        <legend><?= __('Edit Internship Customerbase') ?></legend>
        <?php
            echo $this->Form->control('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
