import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require('./vendor/tasteui/tasteui/tailwind.config.js')
    ],

    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        //
        './vendor/tasteui/tasteui/resources/views/**/*.blade.php',
        './vendor/tasteui/tasteui/resources/js/**/*.js',
        './vendor/tasteui/tasteui/src/**/*.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Noto Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
