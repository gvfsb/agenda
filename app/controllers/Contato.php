<?php

    namespace App\Controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Config\Page;
    use App\Config\Bd;

    require '../vendor/autoload.php';


    class Contato {

	    private $conn;

        public function __construct()
        {
            $this->conn = new Bd;
        }
        
        public function index(Request $request, Response $response)
        {
            $contacts = $this->conn->findAll();

            $page = new Page();
            $page->setTpl("index", array(
                'contatos' => $contacts
            ));

            return $response;
        }

        public function create(Request $request, Response $response)
        {           
            $page = new Page();
            $page->setTpl("create");

            return $response;
        }

        public function add(Request $request, Response $response)
        {
            $data = $request->getParsedBody();
            $this->conn->create($data);  // Insere o contato no banco de dados

            return $response->withHeader('Location', '/')->withStatus(302);
        }

        public function edit(Request $request, Response $response, array $args)
        {
            $id = $args['id'];

            $contact = $this->conn->findBy($id);

            $page = new Page();

            $page->setTpl("edit", array(
                'contato' => $contact
            ));;

            return $response;

        }

        public function update(Request $request, Response $response, array $args)
        {
            $id = $args['id'];

            $data = $request->getParsedBody();

            $this->conn->update($id, $data);  // Edita contato

            return $response->withHeader('Location', '/')->withStatus(302);
        }

        public function show(Request $request, Response $response, array $args)
        {
            
            $id = $args['id'];

            $contact = $this->conn->findBy($id);

            $page = new Page();
            $page->setTpl("show", array(
                'contato' => $contact
            ));

            return $response;

        }

        public function delete(Request $request, Response $response, $args)
        {
        $id = $args['id'];
        var_dump($id);
        die;
        $this->conn->delete($id);  // Deleta o contato

        return $response->withHeader('Location', '/')->withStatus(302);
        }
    }

?>