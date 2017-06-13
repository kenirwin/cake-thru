<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses Memberships'), ['controller' => 'CoursesMemberships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Courses Membership'), ['controller' => 'CoursesMemberships', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dept') ?></th>
            <td><?= h($course->dept) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($course->number) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Courses Memberships') ?></h4>
        <?php if (!empty($course->courses_memberships)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Grade') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->courses_memberships as $coursesMemberships): ?>
            <tr>
                <td><?= h($coursesMemberships->id) ?></td>
                <td><?= h($coursesMemberships->student_id) ?></td>
                <td><?= h($coursesMemberships->course_id) ?></td>
                <td><?= h($coursesMemberships->grade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CoursesMemberships', 'action' => 'view', $coursesMemberships->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CoursesMemberships', 'action' => 'edit', $coursesMemberships->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoursesMemberships', 'action' => 'delete', $coursesMemberships->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesMemberships->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
