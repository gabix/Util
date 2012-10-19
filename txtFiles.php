<?php
/**
 * Pa manejar archivos tipo txt!
 *
 * @author gabix
 */
class txtFile {
    // Atributos Generales
    private $dirDeArch = "";
    private $nomDeArch = "";
    private $rutDeArch = "";
    private $extDeArch = "";
    
    private $arch = null;
    
    
    // Propiedades
    public function get_dirDeArch() {
        return $this->dirDeArch;
    }
    public function get_nomDeArch() {
        return $this->nomDeArch;
    }
    public function get_rutDeArch() {
        return $this->rutDeArch;
    }
    public function get_extDeArch() {
        return $this->extDeArch;
    }
    
    
    // Inicializadores
    public function txtFile($dirDeArch, $nomDeArch, $rutDeArch, $extDeArch) {
        $this->dirDeArch = $dirDeArch;
        $this->nomDeArch = $nomDeArch;
        $this->rutDeArch = $rutDeArch;
        $this->extDeArch = $extDeArch;
    }
    
    
    // Metodos Privados
    
    
    // Métodos Publicos
    
    
}

?>
