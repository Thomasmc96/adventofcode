<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

$rules = [
    'array_indentation'                             => true,
    'array_syntax'                                  => ['syntax' => 'short'],
    'blank_line_after_namespace'                    => true,
    'blank_line_after_opening_tag'                  => false,
    'blank_line_before_statement'                   => true,
    'braces'                                        => ['position_after_functions_and_oop_constructs' => 'same'],
    'concat_space'                                  => ['spacing' => 'one'],
    'function_declaration'                          => ['closure_function_spacing' => 'none'],
    'global_namespace_import'                       => true,
    'include'                                       => true,
    'increment_style'                               => ['style' => 'post'],
    'indentation_type'                              => true,
    'lowercase_cast'                                => true,
    'lowercase_keywords'                            => true,
    'lowercase_static_reference'                    => true,
    'magic_method_casing'                           => true,
    'method_argument_space'                         => true,
    'native_function_casing'                        => true,
    'no_empty_statement'                            => true,
    'no_space_around_double_colon'                  => true,
    'no_spaces_around_offset'                       => true,
    'no_spaces_inside_parenthesis'                  => true,
    'no_trailing_comma_in_singleline_array'         => true,
    'no_trailing_comma_in_singleline_function_call' => true,
    'no_unused_imports'                             => true,
    'short_scalar_cast'                             => true,
    'single_import_per_statement'                   => true,
    'single_line_after_imports'                     => true,
    'single_quote'                                  => true,
    'single_trait_insert_per_statement'             => true,
    'standardize_not_equals'                        => true,
    'trailing_comma_in_multiline'                   => ['after_heredoc' => true, 'elements' => ['arrays', 'arguments', 'parameters']],
    'visibility_required'                           => true,
];

return $config
    ->setRules($rules)
    ->setFinder($finder);
