<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipsCustomerbase $internshipsCustomerbase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $internshipsCustomerbase->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $internshipsCustomerbase->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Internships Customerbases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customerbases'), ['controller' => 'Customerbases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customerbase'), ['controller' => 'Customerbases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipsCustomerbases form large-9 medium-8 columns content">
    <?= $this->Form->create($internshipsCustomerbase) ?>
    <fieldset>
        <legend><?= __('Edit Internships Customerbase') ?></legend>
        <?php
            echo $this->Form->control('internship_id', ['options' => $internships]);
            echo $this->Form->control('customerbase_id', ['options' => $customerbases]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
