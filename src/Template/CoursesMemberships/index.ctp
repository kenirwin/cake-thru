<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Courses Membership'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursesMemberships index large-9 medium-8 columns content">
    <h3><?= __('Courses Memberships') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grade') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coursesMemberships as $coursesMembership): ?>
            <tr>
                <td><?= $this->Number->format($coursesMembership->id) ?></td>
                <td><?= $coursesMembership->has('student') ? $this->Html->link($coursesMembership->student->name, ['controller' => 'Students', 'action' => 'view', $coursesMembership->student->id]) : '' ?></td>
                <td><?= $coursesMembership->has('course') ? $this->Html->link($coursesMembership->course->id, ['controller' => 'Courses', 'action' => 'view', $coursesMembership->course->id]) : '' ?></td>
                <td><?= h($coursesMembership->grade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coursesMembership->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coursesMembership->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coursesMembership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesMembership->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
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
