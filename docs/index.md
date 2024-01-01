# UssForm - Powerful PHP Form Builder

UssForm is a versatile PHP library for building powerful forms in a modular way. It consists of five main components, each with its own Element Context, offering flexibility and customization.

## Components

### 1. Form

The primary component that can hold multiple collections.

### 2. Collection

A component that can hold multiple fields. It includes the following Element Contexts:

- Fieldset
- Title
- Subtitle
- Instruction
- Container

### 3. Field

A component that holds multiple gadgets. It includes the following Element Contexts:

- Frame
- Wrapper
- Info
- Gadget Wrapper
- Validation
- Line Break

### 4. Gadget

A component that holds the widget. It includes the following Element Contexts:

- Container
- Label
- Widget
- Prefix
- Suffix

### 5. Widget

The final level of the form hierarchy, representing the input context. It can be one of the following:

- Input
- Select
- Textarea
- Button

## Element Context

An Element Context is a wrapper class that provides a way to manipulate attributes, values, or other properties of an element.

## Usage

1. **Install via Composer**

```bash
composer require ucscode/uss-form
