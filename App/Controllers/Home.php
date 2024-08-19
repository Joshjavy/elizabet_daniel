<?php

namespace App\Controllers;

use App\Config\env;
use Core\View;
use App\Model\ModelDeseos;
use App\Model\Adminmodel;

class Home
{
    public function index()
    {
        $deseos = new ModelDeseos();
        $views = ['home/index'];
        $args  = ['title' => 'Home','deseos' => $deseos->getAll()];
        View::render($views, $args);
    }

    public function dashboard()
    {
        $db = new Adminmodel();
        $views = ['admin/index'];
        $args  = ['title' => 'Home'];
        View::render($views, $args);
    }

    public function login()
    {
        $db = new Adminmodel();
        $views = ['admin/login'];
        $args  = ['title' => 'Home'];
        View::render($views, $args);
    }

    public function invitados()
    {
        $db = new Adminmodel();
        $views = ['admin/invitados'];
        $args  = ['title' => 'Home','site'=> env::site,'datos'=>$db->getinvitados()];
        View::render($views, $args);
    }

    public function asistencia()
    {
        $db = new ModelDeseos();
        
        $views = ['admin/asistencia'];
        $args  = ['title' => 'Home','site'=>env::site,'datos'=>$db->getAsistencia()];
        View::render($views, $args);
    }

    public function subirinvitados()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $db = new Adminmodel();
            try {
                $rows     = [];
                $total    = 0;
                $inserted = 0;
                $errors   = 0;

                if (!isset($_FILES["archivo"])) {
                    echo ("Selecciona un archivo CSV válido.");
                }

                $file     = $_FILES["archivo"];
                $tmp      = $file["tmp_name"];
                $filename = $file["name"];
                $size     = $file["size"];

                if ($size < 0) {
                    echo ("Selecciona un archivo válido por favor.");
                }

                $handle = fopen($tmp, "r");

                while (($data = fgetcsv($handle)) !== false) {
                    $rows[] = $data;
                }

                unset($rows[0]); // se eliminan las cabeceras
                $total = count($rows);

                if ($total <= 0) {
                    echo ("El archivo proporcionado está vacio.");
                }

                // Insertando información
                foreach ($rows as $r) {
                    $pase=isset($r[1])? $r[1]:'';
                    $pasen=isset($r[2])? $r[2]:'';
                    if ($db->setInvitados($r[0],$pase,$pasen) == false) {
                        $errors++;
                        continue;
                    }

                    $inserted++;
                }

                echo ('Se han insertado <b>%s</b> de <b>%s</b> registros con éxito.');

                if ($errors > 0) {
                    echo 'Tuvimos problemas al importar <b>%s</b> registros.';
                }
            } catch (\Exception $e) {

            }
        }
    }



}
