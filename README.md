# USS Form

Build Fully Customized HTML Form in 1 Minute

## Information

The UssForm is a powerful independent Form builder library that enable you create and configure complex HTML Form in minutes. <br/>

The component was originally created for [User Synthetics](https://github.com/ucscode/user-synthetics) Project but is now a standalone library that can easily be integrated into any other platform. <br>

It utilizes the class names and building model of bootstrap 5 for styling but allows you to easily modify it if you do not use bootstrap 5 in your project. <br>

## Key Features

- **Effortless Form Creation**: Build HTML forms quickly and easily, reducing development time.
- **Customization**: Set form attributes, add form fields, and define form structure programmatically.
- **Intuitive API**: UssForm's API is user-friendly, making form generation a straightforward process.
- **HTML Output**: Generate HTML strings ready for embedding into your web pages.
- **Extends UssElement**: Seamlessly integrates into your PHP projects with the power of UssElement.

### Installation

To use UssForm in your project, simply require it via Composer:

```bash
composer require ucscode/uss-form
```

### Usage Example

Here's an example of how to create a form using the UssForm class:

```php
use Ucscode\UssForm\Form;
use Ucscode\UssForm\Field;

// Instantiate the form

$form = new Form();

// Get the default internal Collection instance (or create and add new ones)

$collection = $form->getCollection(Form::DEFAULT_COLLECTION);

// Create any desired Field;

$regularField = new Field();
$emailField = new Field(Field::NODE_INPUT, Field::TYPE_EMAIL);
$passwordField = new Field(Field::NODE_INPUT, Field::TYPE_PASSWORD);
$textareaField = new Field(Field::NODE_TEXTAREA);
$selectField = new Field(Field::NODE_SELECT);

// Add the created fields into the collection

$collection->addField("username", $regularField);
$collection->addField("email", $emailField);
$collection->addField("password", $passwordField);
$collection->addField("textarea", $textareaField);
$collection->addField("select", $selectField);

// Return and print the HTML Output

echo $form->export();
```

## Resulting HTML Output

The UssForm generates a structured HTML output based on the components and elements you define in your PHP code. Below is an **EXAMPLE** of what the resulting HTML might look like:

```html
<form class='Form'> <!-- FORM -->

    <fieldset class='Collection'> <!-- COLLECTION -->

        <legend>...</legend>

        <...SOME OTHER NODES (Represeting Subtitle && Instructionc)...>

        <div class='container'>

            <div class='Field'> <!-- FIELD -->

                <label>...</label>

                <...SOME OTHER NODES (Representing message context like Info, Validation etc)...>

                <div class='gadget-container'> <!-- GADGET -->

                    <div class='widget-container'>
                        <input type="text" /> <!-- WIDGET -->
                    </div>

                    <...SOME OTHER WIDGET (IF ANY)...>

                </div>
            </div>

            <...SOME OTHER FIELD (IF ANY)...>
            
        </div>

    </fieldset>

    <...SOME OTHER COLLECTION (IF ANY)...>

</form>
```

This structure reflects the hierarchy and relationships between different components in the UssForm instance. However, you might have noticed that in the above example, we did not configure anything like `Label`, `Field Name` etc. More on that is made available in the [documentation](./docs/index.md) page.