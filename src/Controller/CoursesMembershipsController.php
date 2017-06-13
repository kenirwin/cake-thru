<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoursesMemberships Controller
 *
 * @property \App\Model\Table\CoursesMembershipsTable $CoursesMemberships
 *
 * @method \App\Model\Entity\CoursesMembership[] paginate($object = null, array $settings = [])
 */
class CoursesMembershipsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'Courses']
        ];
        $coursesMemberships = $this->paginate($this->CoursesMemberships);

        $this->set(compact('coursesMemberships'));
        $this->set('_serialize', ['coursesMemberships']);
    }

    /**
     * View method
     *
     * @param string|null $id Courses Membership id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursesMembership = $this->CoursesMemberships->get($id, [
            'contain' => ['Students', 'Courses']
        ]);

        $this->set('coursesMembership', $coursesMembership);
        $this->set('_serialize', ['coursesMembership']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursesMembership = $this->CoursesMemberships->newEntity();
        if ($this->request->is('post')) {
            $coursesMembership = $this->CoursesMemberships->patchEntity($coursesMembership, $this->request->getData());
            if ($this->CoursesMemberships->save($coursesMembership)) {
                $this->Flash->success(__('The courses membership has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The courses membership could not be saved. Please, try again.'));
        }
        $students = $this->CoursesMemberships->Students->find('list', ['limit' => 200]);
        $courses = $this->CoursesMemberships->Courses->find('list', ['limit' => 200]);
        $this->set(compact('coursesMembership', 'students', 'courses'));
        $this->set('_serialize', ['coursesMembership']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Courses Membership id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursesMembership = $this->CoursesMemberships->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursesMembership = $this->CoursesMemberships->patchEntity($coursesMembership, $this->request->getData());
            if ($this->CoursesMemberships->save($coursesMembership)) {
                $this->Flash->success(__('The courses membership has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The courses membership could not be saved. Please, try again.'));
        }
        $students = $this->CoursesMemberships->Students->find('list', ['limit' => 200]);
        $courses = $this->CoursesMemberships->Courses->find('list', ['limit' => 200]);
        $this->set(compact('coursesMembership', 'students', 'courses'));
        $this->set('_serialize', ['coursesMembership']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Courses Membership id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursesMembership = $this->CoursesMemberships->get($id);
        if ($this->CoursesMemberships->delete($coursesMembership)) {
            $this->Flash->success(__('The courses membership has been deleted.'));
        } else {
            $this->Flash->error(__('The courses membership could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
