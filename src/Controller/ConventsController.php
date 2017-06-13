<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Convents Controller
 *
 * @property \App\Model\Table\ConventsTable $Convents
 *
 * @method \App\Model\Entity\Convent[] paginate($object = null, array $settings = [])
 */
class ConventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $convents = $this->paginate($this->Convents);

        $this->set(compact('convents'));
        $this->set('_serialize', ['convents']);
    }

    /**
     * View method
     *
     * @param string|null $id Convent id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $convent = $this->Convents->get($id, [
            'contain' => ['Roles']
        ]);

        $this->set('convent', $convent);
        $this->set('_serialize', ['convent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $convent = $this->Convents->newEntity();
        if ($this->request->is('post')) {
            $convent = $this->Convents->patchEntity($convent, $this->request->getData());
            if ($this->Convents->save($convent)) {
                $this->Flash->success(__('The convent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The convent could not be saved. Please, try again.'));
        }
        $this->set(compact('convent'));
        $this->set('_serialize', ['convent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Convent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $convent = $this->Convents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $convent = $this->Convents->patchEntity($convent, $this->request->getData());
            if ($this->Convents->save($convent)) {
                $this->Flash->success(__('The convent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The convent could not be saved. Please, try again.'));
        }
        $this->set(compact('convent'));
        $this->set('_serialize', ['convent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Convent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $convent = $this->Convents->get($id);
        if ($this->Convents->delete($convent)) {
            $this->Flash->success(__('The convent has been deleted.'));
        } else {
            $this->Flash->error(__('The convent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
