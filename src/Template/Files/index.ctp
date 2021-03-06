<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File[]|\Cake\Collection\CollectionInterface $files
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New File'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="files index large-9 medium-8 columns content">
    <h3><?= __('Files') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
            <tr>
            <?php 
                $loggeduser = $this->request->getSession()->read('Auth.User');

                if($loggeduser['category'] == 1){
                foreach ($Students as $student):

                    /*debug($loggeduser['id']);
                    debug($student['user_id']);
                    debug($student['id']);
                    debug($file['student_id']);
                    die();*/
                if($loggeduser['id'] == $student['user_id'] && $student['id']== $file['student_id']){
            ?>
                <td><?= $this->Number->format($file->id) ?></td>
                <td><?= $file->has('student') ? $this->Html->link($file->student->name, ['controller' => 'Students', 'action' => 'view', $file->student->id]) : '' ?></td>
                
                <!--<td><?= h($student['name']) ?></td>-->
                <td><?= h($file->name) ?></td>
                <td><?= h($file->pathFichier) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $file->id]) ?></td>
                <?php  } endforeach;?>
            </tr>
            <?php } else { ?>
            <td><?= $this->Number->format($file->id) ?></td>
            <td><?= $file->has('student') ? $this->Html->link($file->student->name, ['controller' => 'Students', 'action' => 'view', $file->student->id]) : '' ?></td>
            <td><?= h($file->name) ?></td>
            <td><?= h($file->pathFichier) ?></td>

            <td class="actions">
            <?= $this->Html->link(__('View'), ['action' => 'view', $file->id]) ?></td>


           <? } endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
