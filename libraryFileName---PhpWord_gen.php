<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phpword_gen
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        require_once'PHPWord/PHPWord.php';
    }    
    public function gen_word($fileName, $objPHPWord){
        // Save File
        $objWriter = PHPWord_IOFactory::createWriter($objPHPWord, 'Word2007');
        $objWriter->save('report/'.date('Y_m_d_h_i_s').'_'.$fileName.'.docx');
    }
  

}

/* End of file PhpWord_gen.php */
/* Location: ./application/libraries/PhpWord_gen.php */
