<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresaDAO
 *
 * @author Radaelli
 */
class EmpresasDAO {
    
    private $conecta;
    
    public function __construct(){
        $c = new DB();
        $this->conecta = $c->conectar();        
    }
    
    public function buscaTudo(){
        $stmt = $this->conecta->prepare("SELECT * FROM suppliers");
        $stmt->execute();

        $empresas = array();

        while ($linha = $stmt->fetch()) {
            $empresa = new Empresa();
            
            $empresa->setId($linha['SupplierID']);
            $empresa->setEndereco($linha['Address']);
            $empresa->setCidade($linha['City']);
            $empresa->setNomeEmpresa($linha['CompanyName']);
            $empresa->setNomeContato($linha['ContactName']);
            $empresa->setCargoContato($linha['ContactTitle']);
            $empresa->setPais($linha['Country']);
            $empresa->setFax($linha['Fax']);
            $empresa->setSite($linha['HomePage']);
            $empresa->setTelefone($linha['Phone']);
            $empresa->setCep($linha['PostalCode']);
            $empresa->setRegiao($linha['Region']);

            $empresas[] = $empresa;
        }
        return $empresas;
    }
    
    public function buscaPorCep(Empresa $empresa){
        $stmt = $this->conecta->prepare("SELECT * FROM suppliers where PostalCode = :cep");
        $stmt->bindValue(":cep", $empresa->getCep());
        $stmt->execute();

        $empresas = array();

        while ($linha = $stmt->fetch()) {
            $empresa = new Empresa();
            
            $empresa->setId($linha['SupplierID']);
            $empresa->setEndereco($linha['Address']);
            $empresa->setCidade($linha['City']);
            $empresa->setNomeEmpresa($linha['CompanyName']);
            $empresa->setNomeContato($linha['ContactName']);
            $empresa->setCargoContato($linha['ContactTitle']);
            $empresa->setPais($linha['Country']);
            $empresa->setFax($linha['Fax']);
            $empresa->setSite($linha['HomePage']);
            $empresa->setTelefone($linha['Phone']);
            $empresa->setCep($linha['PostalCode']);
            $empresa->setRegiao($linha['Region']);

            $empresas[] = $empresa;
        }
        return $empresas;
    }
}
