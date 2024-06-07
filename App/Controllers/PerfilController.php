<?php

require_once __DIR__ . '/../DAO/usuario/Impl/usuarioDaoImpl.php';
require_once __DIR__ . '/../DAO/usuario/Impl/experiencialaboralDaoImpl.php';
require_once __DIR__ . '/../DAO/usuario/Impl/experienciaacademicaDaoImpl.php';
require_once __DIR__ . '/../DAO/usuario/Impl/archivocvDaoImpl.php';
require_once __DIR__ . '/../Models/usuario_model.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class PerfilController
{

    public function index()
    {
        include_once '/alumnos/complementos/perfilusuario.php';
    }


    public function getData()
    {
        $rutsesion = $_SESSION['rut'];
        $admin = new usuarioDaoImpl();
        $data = $admin->getUsuario($rutsesion);

        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function guardarDatosAlumno()
    {
        $rutsesion = $_SESSION['rut'];
        $admin = new usuarioDaoImpl();

        // Obtener campos modificados del POST
        $camposModificados = [];
        foreach ($_POST as $campo => $valor) {
            if ($campo !== 'experienciasLaborales' && $campo !== 'experienciasAcademicas' && $campo !== 'archivocv') { // Excluir los campos de experiencias laborales y académicas
                $camposModificados[$campo] = $valor;
            }
        }

        // Verificar si se ha subido una imagen
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
            $imagen = $_FILES['imagen'];
            $rutaDestino = 'uploads/' . basename($imagen['name']);
            if (move_uploaded_file($imagen['tmp_name'], $rutaDestino)) {
                $camposModificados['imagen'] = $rutaDestino;
            } else {
                echo json_encode(['success' => false, 'message' => 'Error al subir la imagen']);
                return;
            }
        }

    // Verificar si se ha subido un archivo CV
    if (isset($_FILES['archivocv']) && $_FILES['archivocv']['error'] == UPLOAD_ERR_OK) {
        $archivocv = $_FILES['archivocv'];
        $rutaDestinoCV = 'archivocv/' . basename($archivocv['name']);
        if (move_uploaded_file($archivocv['tmp_name'], $rutaDestinoCV)) {
            // Verificar si ya existe un archivo CV para este usuario
            $archivocvDao = new archivocvDaoImpl();
            $documentoExistente = $archivocvDao->getData($rutsesion);
            if ($documentoExistente) {
                // Actualizar el documento existente
                $idDocumento = $archivocvDao->getId($rutsesion);
                $archivocvDao->updateDocumento($idDocumento, $rutsesion, $rutaDestinoCV);
            } else {
                // Insertar nuevo documento
                $documento = new archivocv();
                $documento->setRutusuario($rutsesion);
                $documento->setDocumento($rutaDestinoCV);
                $archivocvDao->insertarDocumento($documento);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al subir el archivo CV']);
            return;
        }
    }


        // Actualizar usuario en la base de datos
        $resultado = $admin->actualizarUsuario($rutsesion, $camposModificados);

        // Obtener experiencias laborales del POST
        $experienciasLaborales = json_decode($_POST['experienciasLaborales'], true);
        // Obtener experiencias académicas del POST
        $experienciasAcademicas = json_decode($_POST['experienciasAcademicas'], true);

        // Guardar o actualizar experiencias laborales en la base de datos
        $experienciaLaboralDao = new experiencialaboralImpl();
        foreach ($experienciasLaborales as $experiencia) {
            if (isset($experiencia['ID']) && !empty($experiencia['ID'])) {
                // Verificar si la experiencia laboral ya existe en la base de datos
                $experienciaExistente = $experienciaLaboralDao->obtenerExperienciaLaboralPorID($experiencia['ID']);

                if ($experienciaExistente) {
                    // Actualizar experiencia laboral existente
                    $experienciaLaboralDao->actualizarExperienciaLaboral($experiencia);
                } else {
                    // Error: No se encontró la experiencia laboral existente
                    echo json_encode(['success' => false, 'message' => 'Error al actualizar la experiencia laboral: ID no encontrado']);
                    return;
                }
            } else {
                // Insertar nueva experiencia laboral
                $experienciaLaboralDao->insertarExperienciaLaboral($rutsesion, $experiencia);
            }
        }

        // Guardar o actualizar experiencias académicas en la base de datos
        $experienciaAcademicaDao = new experienciaacademicaDaoImpl();
        foreach ($experienciasAcademicas as $experiencia) {
            if (isset($experiencia['ID']) && !empty($experiencia['ID'])) {
                // Verificar si la experiencia académica ya existe en la base de datos
                $experienciaExistente = $experienciaAcademicaDao->obtenerExperienciaAcademicaPorID($experiencia['ID']);

                if ($experienciaExistente) {
                    // Actualizar experiencia académica existente
                    $experienciaAcademicaDao->actualizarExperienciaAcademica($experiencia);
                } else {
                    // Error: No se encontró la experiencia académica existente
                    echo json_encode(['success' => false, 'message' => 'Error al actualizar la experiencia académica: ID no encontrado']);
                    return;
                }
            } else {
                // Insertar nueva experiencia académica
                $experienciaAcademicaDao->insertarExperienciaAcademica($rutsesion, $experiencia);
            }
        }

        echo json_encode(['success' => true]);
    }


    public function getCarreraUser()
    {
        $rutsesion = $_SESSION['rut'];
        $admin = new usuarioDaoImpl();
        $data = $admin->obtenerCarreraUsuario($rutsesion);

        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function getDataLaboral()
    {
        $rutsesion = $_SESSION['rut'];
        $expLaboral = new experiencialaboralImpl();
        $data = $expLaboral->getData($rutsesion);

        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function getDataAcademica()
    {
        $rutsesion = $_SESSION['rut'];
        $expacademica = new experienciaacademicadaoImpl();
        $data = $expacademica->getData($rutsesion);

        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function getDataArchivoCV()
    {
        $rutsesion = $_SESSION['rut'];
        $archivocv = new archivocvDaoImpl();
        $data = $archivocv->getData($rutsesion);
    
        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }
    


}

