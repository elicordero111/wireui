<?php

use WireUi\Components;
use WireUi\Enum\Packs;
use WireUi\WireUiConfig as Config;

return [

    /*
    |--------------------------------------------------------------------------
    | Prefix
    |--------------------------------------------------------------------------
    |
    | This option controls the prefix for WireUI components. Examples:
    |
    | 'wireui-' => 'x-wireui-button'
    | 'wireui:' => 'x-wireui:button'
    |
     */

    'prefix' => null,

    /*
    |--------------------------------------------------------------------------
    | Global Styles
    |--------------------------------------------------------------------------
    |
    | This option controls the global styles for WireUI components.
    |
     */

    'style' => [
        'shadow' => Packs\Shadow::BASE,
        'rounded' => Packs\Rounded::MD,
        'color' => Packs\Color::PRIMARY,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Configuration
    |--------------------------------------------------------------------------
    |
    | This option controls the default configuration for WireUI components.
    |
     */

    'alert' => Config::alert(),

    'avatar' => Config::avatar(),

    'badge' => Config::badge(),

    'mini-badge' => Config::miniBadge(),

    'button' => Config::button(),

    'mini-button' => Config::miniButton(),

    'card' => Config::card(),

    'checkbox' => Config::checkbox(),

    'color-picker' => Config::wrapper(),

    'datetime-picker' => Config::dateTimePicker(),

    'dialog' => Config::dialog(),

    'dropdown' => Config::dropdown(),

    'icon' => Config::icon(),

    'input' => Config::wrapper(),

    'currency' => Config::wrapper(),

    'maskable' => Config::wrapper(),

    'number' => Config::wrapper(),

    'password' => Config::wrapper(),

    'phone' => Config::wrapper(),

    'link' => Config::link(),

    'modal' => Config::modal(),

    'modal-card' => Config::modal(),

    'native-select' => Config::wrapper(),

    'notifications' => Config::notifications(),

    'radio' => Config::radio(),

    'select' => Config::wrapper(),

    'textarea' => Config::wrapper(),

    'time-picker' => Config::timePicker(),

    'time-selector' => Config::timeSelector(),

    'toggle' => Config::toggle(),

    /*
    |--------------------------------------------------------------------------
    | WireUI Components
    |--------------------------------------------------------------------------
    |
    | Change the alias to call the component with a different name.
    | Extend the component and replace your changes in this file.
    |
     */

//    'components' => Config::defaultComponents([
//        // 'button' => [
//        //     'alias' => 'new-button',
//        // ],
//        // 'mini-button' => [
//        //     'class' => Components\Button\Mini::class,
//        //     'alias' => 'new-mini-button',
//        // ],
//    ]),
    'components' => [
        'alert' => [
            'class' => Components\Alert\Index::class,
            'alias' => 'alert',
        ],
        'avatar' => [
            'class' => Components\Avatar\Index::class,
            'alias' => 'avatar',
        ],
        'badge' => [
            'class' => Components\Badge\Base::class,
            'alias' => 'badge',
        ],
        'mini-badge' => [
            'class' => Components\Badge\Mini::class,
            'alias' => 'mini-badge',
        ],
        'button' => [
            'class' => Components\Button\Base::class,
            'alias' => 'button',
        ],
        'mini-button' => [
            'class' => Components\Button\Mini::class,
            'alias' => 'mini-button',
        ],
        'card' => [
            'class' => Components\Card\Index::class,
            'alias' => 'card',
        ],
        'checkbox' => [
            'class' => Components\Switcher\Checkbox::class,
            'alias' => 'checkbox',
        ],
        'color-picker' => [
            'class' => Components\ColorPicker\Picker::class,
            'alias' => 'color-picker',
        ],
        'datetime-picker' => [
            'class' => Components\DatetimePicker\Picker::class,
            'alias' => 'datetime-picker',
        ],
        'dialog' => [
            'class' => Components\Dialog\Index::class,
            'alias' => 'dialog',
        ],
        'dropdown' => [
            'class' => Components\Dropdown\Base::class,
            'alias' => 'dropdown',
        ],
        'dropdown.item' => [
            'class' => Components\Dropdown\Item::class,
            'alias' => 'dropdown.item',
        ],
        'dropdown.header' => [
            'class' => Components\Dropdown\Header::class,
            'alias' => 'dropdown.header',
        ],
        'error' => [
            'class' => Components\Errors\Single::class,
            'alias' => 'error',
        ],
        'errors' => [
            'class' => Components\Errors\Multiple::class,
            'alias' => 'errors',
        ],
        'icon' => [
            'class' => Components\Icon\Index::class,
            'alias' => 'icon',
        ],
        'input' => [
            'class' => Components\TextField\Input::class,
            'alias' => 'input',
        ],
        'currency' => [
            'class' => Components\TextField\Currency::class,
            'alias' => 'currency',
        ],
        'maskable' => [
            'class' => Components\TextField\Maskable::class,
            'alias' => 'maskable',
        ],
        'number' => [
            'class' => Components\TextField\Number::class,
            'alias' => 'number',
        ],
        'password' => [
            'class' => Components\TextField\Password::class,
            'alias' => 'password',
        ],
        'phone' => [
            'class' => Components\TextField\Phone::class,
            'alias' => 'phone',
        ],
        'label' => [
            'class' => Components\Label\Index::class,
            'alias' => 'label',
        ],
        'link' => [
            'class' => Components\Link\Index::class,
            'alias' => 'link',
        ],
        'modal' => [
            'class' => Components\Modal\Index::class,
            'alias' => 'modal',
        ],
        'modal-card' => [
            'class' => Components\Modal\Card::class,
            'alias' => 'modal-card',
        ],
        'native-select' => [
            'class' => Components\Select\Native::class,
            'alias' => 'native-select',
        ],
        'notifications' => [
            'class' => Components\Notifications\Index::class,
            'alias' => 'notifications',
        ],
        'radio' => [
            'class' => Components\Switcher\Radio::class,
            'alias' => 'radio',
        ],
        'select' => [
            'class' => Components\Select\Base::class,
            'alias' => 'select',
        ],
        'select.option' => [
            'class' => Components\Select\Option::class,
            'alias' => 'select.option',
        ],
        'select.user-option' => [
            'class' => Components\Select\UserOption::class,
            'alias' => 'select.user-option',
        ],
        'textarea' => [
            'class' => Components\TextField\Textarea::class,
            'alias' => 'textarea',
        ],
        'time-picker' => [
            'class' => Components\TimePicker\Picker::class,
            'alias' => 'time-picker',
        ],
        'time-selector' => [
            'class' => Components\TimePicker\Selector::class,
            'alias' => 'time-selector',
        ],
        'toggle' => [
            'class' => Components\Switcher\Toggle::class,
            'alias' => 'toggle',
        ],
        'popover' => [
            'class' => Components\Popover\Index::class,
            'alias' => 'popover',
        ],
        'switcher' => [
            'class' => Components\Wrapper\Switcher::class,
            'alias' => 'switcher',
        ],
        'text-field' => [
            'class' => Components\Wrapper\TextField::class,
            'alias' => 'text-field',
        ],
    ],
];
