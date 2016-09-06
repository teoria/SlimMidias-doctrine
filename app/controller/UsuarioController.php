<?php

class UsuarioController extends Controller {
   
   
    public function getUsuarios(){
        $fachada = Fachada::getInstance();
        $data = $fachada->getUsuarios();

       // var_dump($data);
        //die();
        $serializer = JMS\Serializer\SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($data, 'json');
        echo $jsonContent;

        //var_dump($data);
        //echo $this->json_encode($data);

    }

    public function getUsuario($id){
        $fachada = Fachada::getInstance();

        $vo = new Usuario();
        $vo->setNome("Rodrigo Teória");
        $vo->setDataNascimento(new DateTime());
        $vo->setEmail("teoria@gmail.com");
        $vo->setGenero("M");
        $vo->setSenha("123");


        $data = $fachada->inserirUsuario($vo);
       // $data = $fachada->getUsuario($id);

        //echo json_encode($data[0]->printDados());
        //echo json_encode($data[0]);
        $serializer = JMS\Serializer\SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($data, 'json');
        echo $jsonContent;
    }


    public function insertUsuario(){

        $dados = $this->request->getBody();


        $vo = $serializer->deserialize($dados, 'Usuario', 'json');
        
        
        $vo = $this->json_decode($dados);


        $fachada = Fachada::getInstance();
        try{
            $data = $fachada->inserirUsuario($vo);
            $retorno = array( "msg" => "Cadastrado com sucesso!" );
        }catch ( Exception $e) {
           // grava log  echo 'Exceção capturada: ',  $e->getMessage(), "\n";

            $retorno = array( "msg" => "PAAAN!" );
        }

       // $data = $fachada->inserirUsuario($vo);



        echo json_encode($retorno);
    }
    
    public function insertAgendamenteo(){

        

        
    }
    
    


} 