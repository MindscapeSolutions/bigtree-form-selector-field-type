<?
	/*
		When drawing a field type you are provided with the $field array with the following keys:
			"title" — The title given by the developer to draw as the label (drawn automatically)
			"subtitle" — The subtitle given by the developer to draw as the smaller part of the label (drawn automatically)
			"key" — The value you should use for the "name" attribute of your form field
			"value" — The existing value for this form field
			"id" — A unique ID you can assign to your form field for use in JavaScript
			"tabindex" — The current tab index you can use for the "tabindex" attribute of your form field
			"options" — An array of options provided by the developer
			"required" — A boolean value of whether this form field is required or not
	*/

    // make sure the form extension is installed
    $result = BigTreeAdmin::getExtension('com.fastspot.form-builder');

    if (count($result) > 0) {
        $field['options']['list_type'] = 'db';
        $field['options']['pop-table'] = 'btx_form_builder_forms';
        $field['options']['pop-id'] = 'id';
        $field['options']['pop-description'] = 'title';
        $field['options']['pop-sort'] = 'title';

        $field['options']['allow-empty'] = 'Yes';
    }

	include BigTree::path("admin/form-field-types/draw/list.php");

?>
