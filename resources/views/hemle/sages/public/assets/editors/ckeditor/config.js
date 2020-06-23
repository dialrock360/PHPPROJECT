/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */



CKEDITOR.editorConfig = function( config )
{
			config.toolbar = 'Specialnul';
 
config.toolbar_Specialnul =
[
	
{ name: 'tools', items : ['Maximize' ] },
	
	
	];
		config.toolbar = 'Special2';
 
config.toolbar_Special2 =
[
 { name: 'styles', items : ['Font','FontSize' ] },
	
	{ name: 'clipboard', items : ['Undo','Redo' ] },
	{ name: 'insert', items : [ 'Table','HorizontalRule','Smiley','SpecialChar'] },
	{ name: 'basicstyles', items : [ 'Bold','Italic','Underline'] },
	{ name: 'colors', items : [ 'TextColor','BGColor' ] },
	
	{ name: 'paragraph', items : ['-','Outdent','Indent','-','Blockquote','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
	
	
	];
	config.toolbar = 'Special';
 
config.toolbar_Special =
[
 { name: 'styles', items : ['Font','FontSize' ] },
	
	{ name: 'clipboard', items : ['Undo','Redo' ] },
	{ name: 'tools', items : [ 'Maximize','-' ] },
	{ name: 'insert', items : [ 'Table','HorizontalRule','SpecialChar'] },
	{ name: 'basicstyles', items : [ 'Bold','Italic','Underline'] },
	{ name: 'colors', items : [ 'TextColor','BGColor' ] },
	
	{ name: 'paragraph', items : [ 'Outdent','Indent','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
	
	
	];
config.toolbar = 'Full';
 
config.toolbar_Full =
[
	{ name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
	{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
	{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
	{ name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 
        'HiddenField' ] },
	'/',
	{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
	{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
	'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
	{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
	{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
	'/',
	{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
	{ name: 'colors', items : [ 'TextColor','BGColor' ] },
	{ name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
];
 config.toolbar = 'Simple';
 
config.toolbar_Simple =
[
	['Undo','Redo','-','Bold','Italic','Underline','RemoveFormat', '/', 'NumberedList', 'BulletedList','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','/', 'Font','TextColor', 'FontSize']
];
 config.toolbar = 'Null';
 
config.toolbar_Null =
[
	['Undo','Redo','-','Bold','Italic','Underline', '/', 'Font','TextColor', 'FontSize']
];
config.toolbar_Basic =
[
	['Undo','Redo','Preview','Print','-','Bold','Italic','Underline','RemoveFormat', '-', 'NumberedList', 'BulletedList','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock', 'Font','TextColor', 'FontSize']
];
	config.toolbar = 'MyToolbar';
 
	config.toolbar_MyToolbar =
	[
		{ name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
	{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
	{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
	{ name: 'tools', items : [ 'Maximize', 'ShowBlocks','-' ] },
	
	'/',
	{ name: 'insert', items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
	{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
	'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
	{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
	
	'/',	
	{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
	{ name: 'colors', items : [ 'TextColor','BGColor' ] },
	
	];
	config.toolbar = 'Standard';
 
	config.toolbar_Standard =
	[
		{ name: 'document', items : [ 'NewPage','DocProps','Preview','Print'] },
	{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
	{ name: 'editing', items : ['Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
	{ name: 'tools', items : [ 'Maximize', 'ShowBlocks','-' ] },
	
	'/',
	{ name: 'insert', items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
	{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
	'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
	{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
	
	'/',	
	{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
	{ name: 'colors', items : [ 'TextColor','BGColor' ] },
	
	];
	config.toolbar = 'basic';
 
	 config.toolbar = 'Zero';
 
config.toolbar_Zero =
[
 { name: 'tools', items : [ 'Maximize' ] },
	{ name: 'clipboard', items : [ 'Undo','Redo' ] },
	{ name: 'basicstyles', items : [ 'Bold','Italic','Underline' ] },
	{ name: 'colors', items : [ 'TextColor' ] },
	{ name: 'insert', items : ['Table'] },
];
};
