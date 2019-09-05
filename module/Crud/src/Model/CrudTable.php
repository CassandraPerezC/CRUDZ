<?php

namespace Crud\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * 
 */
class CrudTable
{
	protected $tableGateway;

	   function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

     public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function saveData($post){
    	$data = [
    		'nombre'=>$post->getNombre(),
    		'apPat'=>$post->getApPat(),
    		'apMat'=>$post->getApMat()
    	];

    	if($post->getId()){
    		$this->tableGateway->update($data, [
    			'id'=>$post->getId()
    			]);
    	}
    	else{
    		return $this->tableGateway->insert($data);
    	}
    	
    }

    public function getPost($id){
    	$data = $this->tableGateway->select(['id'=>$id
    ]);
    	return $data->current();
    }

    public function deletePost($id){
    	$this->tableGateway->delete(['id'=>$id]);
    }

 }


?> 