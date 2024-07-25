<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Compra;

class ComprasController extends Controlle
{


  public function index(Request $request, Response $response)
  {
    $compras = Compra::all();

    $this->compras = $compras;

    return $this->view('compras/index',$response);
  }

  public function adicionar(Request $request, Response $response)
  {


    return $this->view('compras/create',$response);
  }

  public function salvar(Request $request, Response $response)
  {
    $dados = $request->getParsedBody();
    $compra = new Compra;

    $compra->titulo = $dados['titulo'];
    $compra->desc = $dados['desc'];
    $idCompra = $compra->save();

    if($idCompra){
      //sucesso
    }else{
      //erro
    }

    return $response->withRedirect('/compras');
    //return $response->redirect('views/compras');

    
    
  





  }


}
