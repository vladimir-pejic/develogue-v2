@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'headline',
        'label' => 'Headline',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'url',
        'label' => 'Website URL',
        'placeholder' => 'https://www.some-website.com',
        'note' => 'Please enter full url',
        'maxlength' => 200
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Project Description',
        'toolbarOptions' => [
            ['header' => [2, 3, 4, 5, 6, false]],
                'bold',
                'italic',
                'underline',
                'strike',
                ["script" => "super"],
                ["script" => "sub"],
                "blockquote",
                "code-block",
            ['list' => 'ordered'],
            ['list' => 'bullet'],
            ['indent' => '-1'],
            ['indent' => '+1'],
            ["align" => []],
            ["direction" => "rtl"],
            'link',
            "clean",
        ],
        'placeholder' => 'Case study text',
        'maxlength' => 2000,
        'editSource' => true,
        'note' => 'Enter project description',
    ])

    @formField('medias', [
        'name' => 'screengrab_desktop',
        'label' => 'Desktop',
        'note' => 'Shown at a desktop breakpoint',
        'fieldNote' => 'Minimum image width: 1500px'
    ])
@stop
