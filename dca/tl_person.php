<?php

$GLOBALS ['TL_DCA'] ['tl_person'] ['fields'] ['dateOfBirth'] = array(
		'label' => &$GLOBALS ['TL_LANG'] ['tl_person'] ['dateOfBirth'],
		'exclude' => true,
		'search' => true,
		'inputType' => 'text',
		'eval' => array (
				'tl_class' => 'w50 wizard',
				'maxlength' => 10,
				'rgxp' => 'date',
				'datepicker'=>$this->getDatePickerString()
		),
		'sql' => "int(10) NOT NULL default '0'"
);

$GLOBALS ['TL_DCA'] ['tl_person'] ['fields'] ['size'] = array(
		'label' => &$GLOBALS ['TL_LANG'] ['tl_person'] ['size'],
		'exclude' => true,
		'search' => true,
		'inputType' => 'text',
		'eval' => array (
				'tl_class' => 'w50',
				'maxlength' => 3,
				'rgxp' => 'digit'
		),
		'sql' => "int(3) NOT NULL default '0'"
);

$GLOBALS ['TL_DCA'] ['tl_person'] ['fields'] ['position'] = array(
		'label' => &$GLOBALS ['TL_LANG'] ['tl_person'] ['position'],
		'exclude' => true,
		'search' => true,
		'inputType' => 'text',
		'eval' => array (
				'tl_class' => 'clr',
				'maxlength' => 255,
		),
		'sql' => "varchar(255) NOT NULL default ''" 
);

$GLOBALS ['TL_DCA'] ['tl_person'] ['fields'] ['moreInformation'] = array(
		'label' => &$GLOBALS ['TL_LANG'] ['tl_person'] ['moreInformation'],
		'exclude' => true,
		'search' => true,
		'inputType' => 'text',
		'eval' => array (
				'tl_class' => 'clr',
				'rte' => 'tinyMCE'
		),
		'sql' => "text NULL"
);

$GLOBALS ['TL_DCA'] ['tl_person'] ['palettes'] ['default'] .= ';{volleyball_legend},dateOfBirth,size,position;';

?>