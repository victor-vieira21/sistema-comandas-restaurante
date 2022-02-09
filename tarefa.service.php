<?php

class TarefaService {

	 private $conexao;
	 private $tarefa;

	 public function __construct(Conexao $conexao, Tarefa $tarefa){
	 	$this->conexao = $conexao->conectar();
	 	$this->tarefa = $tarefa;
	 }


	//CRUD
	public function inserir(){ //CREATE
       $query = 'insert into mesa_dois(tarefa, mesa)values(:tarefa, :mesa)';
       $stmt = $this->conexao->prepare($query);
       $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
       $stmt->bindValue(':mesa', $this->tarefa->__get('mesa'));
       $stmt->execute();
	}

	public function recuperar(){ //READ

		$query = 'select 
		      t.id, s.status, t.tarefa, t.mesa
		 from
		      mesa_dois as t
		   left join tb_status as s on (t.id_status = s.id)
         where 
             t.mesa = 1
		  ';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		 return $stmt->fetchAll(PDO::FETCH_OBJ);

	}

	public function recuperar2(){ //READ

		$query = 'select 
		      t.id, s.status, t.tarefa, t.mesa
		 from
		      mesa_dois as t
		   left join tb_status as s on (t.id_status = s.id)
		      where 
		    t.mesa = 2
		  ';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		 return $stmt->fetchAll(PDO::FETCH_OBJ);

	}

	public function atualizar(){ //UPDATE

		$query = "update mesa_dois set tarefa = :tarefa where id = :id";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		 return $stmt->execute();

	}

	public function remover(){ //DELETE

		$query = 'delete from mesa_dois where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		$stmt->execute();



	}

	public function marcarRealizada(){ //UPDATE

		$query = "update mesa_dois set id_status = :id_status where id = :id";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		 return $stmt->execute();

	}

		public function recuperarTarefasPendentes(){ //READ

		$query = 'select 
		      t.id, s.status, t.tarefa, t.mesa
		 from
		      mesa_dois as t
		   left join tb_status as s on (t.id_status = s.id)
		   where
		    t.id_status = :id_status
		  ';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
		$stmt->execute();
		 return $stmt->fetchAll(PDO::FETCH_OBJ);

	}
}



?>