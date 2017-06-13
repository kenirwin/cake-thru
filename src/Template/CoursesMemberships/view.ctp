<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Courses Membership'), ['action' => 'edit', $coursesMembership->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Courses Membership'), ['action' => 'delete', $coursesMembership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesMembership->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses Memberships'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Courses Membership'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coursesMemberships view large-9 medium-8 columns content">
    <h3><?= h($coursesMembership->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $coursesMembership->has('student') ? $this->Html->link($coursesMembership->student->name, ['controller' => 'Students', 'action' => 'view', $coursesMembership->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $coursesMembership->has('course') ? $this->Html->link($coursesMembership->course->id, ['controller' => 'Courses', 'action' => 'view', $coursesMembership->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade') ?></th>
            <td><?= h($coursesMembership->grade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coursesMembership->id) ?></td>
        </tr>
    </table>
</div>
