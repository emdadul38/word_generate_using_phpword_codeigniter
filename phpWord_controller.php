<?php	
    public function genWord(){
        /*Load library phpword_gen*/
        $this->load->library("phpword_gen");
        $objPHPWord = new PHPWord; /*object create*/
        
        /*Start: attribut of word property*/
        $section = $objPHPWord->createSection();

        // Add text elements
        $section->addText('Hello World!');
        $section->addTextBreak(2);

        $section->addText('I am inline styled.', array('name'=>'Verdana', 'color'=>'006699'));
        $section->addTextBreak(2);

        $objPHPWord->addFontStyle('rStyle', array('bold'=>true, 'italic'=>true, 'size'=>16));
        $objPHPWord->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
        $section->addText('I am styled by two style definitions.', 'rStyle', 'pStyle');
        $section->addText('I have only a paragraph style definition.', null, 'pStyle');
        /*end word property*/

        /*Generate word file with two parameter first fileName, second object*/
        $this->phpword_gen->gen_word("document", $objPHPWord);
        
    }
?>