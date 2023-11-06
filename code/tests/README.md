# Tests

- Test files must follow the default naming of PHPUnit. So instead of writing `TestCanReadInput.php`, you should name your files `canReadInputTest.php`. PHPUnit will then auto-discover these tests
- Test methods should follow the default naming of PHPUnit. So instead of writing `InputTest`, write `testInput`
- Test files should have no namespace, and thus cannot be imported using composer autoloading
