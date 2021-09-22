<?php

  class User
  {
    public $user;
    public $smarty;

    public function __construct()
    {
      $this->user=new Usuarios();
      $this->smarty=new Smarty();
    }

    public function Inicio()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('Inicial.tpl');
    }

    public function IrLogin()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('Login.tpl');
    }

    public function Cerrar()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Home.tpl');
    }

    public function Regreso()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Cabeceras/Inicio.tpl');
    }

    public function RegresoAdmin()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Inicial.tpl');
    }

    public function Administrador()
    {
      $this->smarty->assign('title','Administrador');
      $this->smarty->display('VistasDeptos/Administrador.tpl');
    }

    public function Contadora()
    {
      $this->smarty->assign('title','Contadora');
      $this->smarty->display('VistasDeptos/Contadora.tpl');
    }

    public function Jefa()
    {
      $this->smarty->assign('title','Jefa');
      $this->smarty->display('VistasDeptos/Jefa.tpl');
    }

    public function BuscarUsuario()
    {
      $num=$_POST['idUsuario'];
      $pass=$_POST['Depto_idDepto'];

      $us=$this->user->BuscarUser($num,$pass);

            if($us->num_rows==1)
            {
              session_start();
              $usuario=mysqli_fetch_assoc($us);

          
              $_SESSION['idUsuario']=$usuario['Depto_idDepto'];
      
             if($usuario['Depto_idDepto']==1)
                {
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('VistasVentas/Administrador.tpl');
                }
              else if($usuario['Depto_idDepto']==2)
                {  
            
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('VistasVentas/Contadora.tpl');
                }
                else if($usuario['Depto_idDepto']==3)
                {  
            
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('VistasVentas/Jefa.tpl');
                }

            }
            else 
              {
                $this->smarty->assign('title','Login');
                $this->smarty->display('Login.tpl');
                echo "Usuario o contraseña son incorrectos";
              }
    }

    public function GuardarUsuario()
    {
      $Correo=$_POST['email'];
      $Nombre=$_POST['nombre'];
      $Apellido=$_POST['apellido'];
      $Contrasena=$_POST['pass'];
      $Depto_idDepto=$_POST['depto'];
      $Roles_idRoles=$_POST['cel'];
        

      $user=$this->user->GuardarUser($idUsuario, $Depto_idDepto, $Estado_idEstado, $Roles_idRoles, $Nombre, $Apellido, $Correo, $Contrasena);

      

      $this->smarty->assign('title','Login');
      $this->smarty->display('Login.tpl');
    }

   


  }
    
?>